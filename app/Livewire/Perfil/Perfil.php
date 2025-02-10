<?php

namespace App\Livewire\Perfil;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Evento;
use App\Models\User;
use App\Models\Modalidad;
use App\Models\Localidad;
use App\Models\Publicacion;

class Perfil extends Component
{
    use WithPagination, WithFileUploads;

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
    public $isOpen;
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

    private function resetInputFields(){
        $this->descripcion = '';
        $this->publicacion_id = null;
        $this->foto = '';
        $this->IdUsuario = '';
    }

    public function store()
    {
        $this->validate([
            'descripcion' => [
                'required',
                'string',
                'max:525',
            ],

            'foto' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif,svg',
                'max:2048',
            ],

            'IdUsuario' => [
                'required',
                'integer',
            ],


        ]);

        Publicacion::updateOrCreate(['id' => $this->publicacion_id], [
            'descripcion' => $this->descripcion,
            'foto' => $this->foto,
            'IdUsuario' => $this->IdUsuario,
        ]);

        session()->flash('message', 
            $this->modalidad_id ? 'Publicación actualizada correctamente!' : 'Has publicado!'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        $this->publicacion_id = $id;
        $this->descripcion = $publicacion->descripcion;
        $this->foto = $publicacion->foto;
        $this->IdUsuario = $publicacion->IdUsuario;
        $this->openModal();
    }

    public function delete()
    {
        if ($this->confirmingDelete) {
            $publicacion = Publicacion::find($this->IdAEliminar);

            if (!$publicacion) {
                session()->flash('error', 'publicación no encontrada.');
                $this->confirmingDelete = false;
                return;
            }

            $publicacion->forceDelete();
            session()->flash('message', 'publicacion eliminada correctamente!');
            $this->confirmingDelete = false;
        }
    }

    public function confirmDelete($id)
    {
        $publicacion = Publicacion::find($id);

        if (!$publicacion) {
            session()->flash('error', 'publicación no encontrada.');
            return;
        }
        if ($publicacion->eventos()->exists()) {
            session()->flash('error', 'No se puede eliminar la publicación');
            return;
        }

        $this->IdAEliminar = $id;
        $this->confirmingDelete = true;
    }

    public function render()
    {
        $eventosUsuario = Evento::with('modalidad', 'localidad', 'diploma')
            ->where('created_by', $this->userperfil->id)
            ->where(function($query) {
                $query->where('nombreevento', 'like', '%' . $this->search . '%')
                      ->orWhereHas('modalidad', function($query) {
                          $query->where('modalidad', 'like', '%' . $this->search . '%');
                      })
                      ->orWhereHas('localidad', function($query) {
                          $query->where('localidad', 'like', '%' . $this->search . '%');
                      });
            })
            ->orderBy('id', 'DESC')
            ->paginate(6);
            $eventosCount = $this->userperfil->countEventos();
        return view('livewire.perfil.perfil', ['eventosUsuario' => $eventosUsuario, 'eventosCount' => $eventosCount,]);
    }
}