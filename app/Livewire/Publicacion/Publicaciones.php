<?php

namespace App\Livewire\Publicacion;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Evento;
use App\Models\User;
use App\Models\Modalidad;
use App\Models\Localidad;
use App\Models\Publicacion;

class Publicaciones extends Component
{
    use WithFileUploads;
    public function mount()
    {
        $this->userperfil = auth()->user();
    }

    public $publicacion_id, $foto, $IdUsuario, $descripcion;
    public $userperfil;
    public $isOpen = false;
    public $confirmingDelete = false;
    public $IdAEliminar;

    private function resetInputFields()
    {
        $this->descripcion = '';
        $this->publicacion_id = null;
        $this->foto = null;
    }

    public function store()
    {
        $this->validate([
            'descripcion' => 'nullable|string|max:525',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // Verificar si el usuario está definido
        if (!$this->userperfil) {
            session()->flash('error', 'Error: Usuario no encontrado.');
            return;
        }
      
        // Manejo de archivo logo
        if ($this->foto) {
            $this->foto = $this->foto->store('public/fotos');
        } elseif ($this->publicacion_id) {
            $publicacion = Publicacion::findOrFail($this->publicacion_id);
            $this->logo = $publicacion->foto; 
        }

        // Guardar o actualizar la publicación
        Publicacion::updateOrCreate(['id' => $this->publicacion_id], [
            'descripcion' => $this->descripcion,
            'foto' => $this->foto ? str_replace('public/', 'storage/', $this->foto) : null,
            'IdUsuario' => $this->userperfil->id,
            'fecha' => now()->toDateString(),
            'hora' => now()->toTimeString(),
            'lugar' => 'Lugar de ejemplo',
            'created_by' => $this->userperfil->id,
        ]);

        // Mensaje de éxito
        session()->flash(
            'message',
            $this->publicacion_id ? 'Publicación actualizada correctamente!' : 'Has publicado!'
        );

        // limpiar los campos
        $this->resetInputFields();
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
        return view('livewire.publicacion.publicaciones');
    }
}
