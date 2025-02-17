<?php

namespace App\Livewire\Perfil;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Evento;
use App\Models\User;
use App\Models\Modalidad;
use App\Models\Localidad;
use App\Models\Publicacion;

class Perfil extends Component
{
    use WithFileUploads;

    public $search = '';
    public $userperfil;
    public $modalidades, $localidades;

    public function mount(User $userperfil)
    {
        $this->userperfil = $userperfil;
        $this->modalidades = Modalidad::all();
        $this->localidades = Localidad::all();
    }

    public $publicacion_id, $foto, $IdUsuario, $descripcion;
    public $isOpen = false;
    public $confirmingDelete = false;
    public $IdAEliminar;

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->descripcion = '';
        $this->publicacion_id = null;
        $this->foto = null;
    }

    public function edit($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        $this->publicacion_id = $id;
        $this->descripcion = $publicacion->descripcion;
        $this->foto = asset($publicacion->foto);
        $this->openModal();
    }

    public function delete()
    {
        if (!$this->confirmingDelete || !$this->IdAEliminar) {
            session()->flash('error', 'No hay ninguna publicación para eliminar.');
            return;
        }
    }

    public function confirmDelete($id)
    {
        $publicacion = Publicacion::find($id);

        if (!$publicacion) {
            session()->flash('error', 'Publicación no encontrada.');
            return;
        }

        if ($publicacion->eventos()->exists()) {
            session()->flash('error', 'No se puede eliminar la publicación porque tiene eventos asociados.');
            return;
        }

        $this->IdAEliminar = $id;
        $this->confirmingDelete = true;
    }

    public function render()
    {
        $eventosUsuario = Evento::with('modalidad', 'localidad', 'diploma')
            ->where('created_by', $this->userperfil->id)
            ->where(function ($query) {
                $query->where('nombreevento', 'like', '%' . $this->search . '%')
                    ->orWhereHas('modalidad', function ($query) {
                        $query->where('modalidad', 'like', '%' . $this->search . '%');
                    })
                    ->orWhereHas('localidad', function ($query) {
                        $query->where('localidad', 'like', '%' . $this->search . '%');
                    });
            })
            ->orderBy('id', 'DESC')
            ->paginate(6);

        $eventosCount = $this->userperfil->countEventos();

        $publicaciones = Publicacion::with('user')
            ->where('created_by', $this->userperfil->id)
            ->orderBy('id', 'DESC')
            ->paginate(6);

        return view('livewire.perfil.perfil', [
            'eventosUsuario' => $eventosUsuario,
            'eventosCount' => $eventosCount,
            'publicaciones' => $publicaciones, // Cambiado para que coincida en la vista
        ]);
    }

}