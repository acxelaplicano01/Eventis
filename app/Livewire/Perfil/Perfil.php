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

    public function mount()
    {
        $this->userperfil = auth()->user();
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

    public function store()
    {
        $this->validate([
            'descripcion' => 'required|string|max:525',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Verificar si el usuario está definido
        if (!$this->userperfil) {
            session()->flash('error', 'Error: Usuario no encontrado.');
            return;
        }

        // Guardar la foto en storage si existe
        $rutaFoto = null;
        if ($this->foto) {
            $rutaFoto = $this->foto->store('foto', 'public'); // Se guarda en storage/app/public/foto
            $rutaFoto = 'storage/' . $rutaFoto; // Ruta accesible
        } elseif ($this->publicacion_id) {
            $publicacion = Publicacion::find($this->publicacion_id);
            if ($publicacion) {
                $rutaFoto = $publicacion->foto;
            }
        }
        // Guardar o actualizar la publicación
        if (isset($this->publicacion_id)) {
            Publicacion::find($this->publicacion_id)->update([
                'descripcion' => $this->descripcion,
                'foto' => $rutaFoto,
                'IdUsuario' => $this->userperfil->id,
                'fecha' => now()->toDateString(),
                'hora' => now()->toTimeString(),
                'lugar' => 'Lugar de ejemplo',
                'created_by' => $this->userperfil->id,
            ]);
        } else {
            Publicacion::create([
                'descripcion' => $this->descripcion,
                'foto' => $rutaFoto,
                'IdUsuario' => $this->userperfil->id,
                'fecha' => now()->toDateString(),
                'hora' => now()->toTimeString(),
                'lugar' => 'Lugar de ejemplo',
                'created_by' => $this->userperfil->id,
            ]);
        }

        // Mensaje de éxito
        session()->flash(
            'message',
            $this->publicacion_id ? 'Publicación actualizada correctamente!' : 'Has publicado!'
        );

        // Emitir evento para actualizar la lista de publicaciones
        $this->emit('publicacionCreada');

        // Cerrar el modal y limpiar los campos
        $this->closeModal();
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
            ->get(); // Asegúrate de obtener los datos

        return view('livewire.perfil.perfil', [
            'eventosUsuario' => $eventosUsuario,
            'eventosCount' => $eventosCount,
            'publicaciones' => $publicaciones, // Cambiado para que coincida en la vista
        ]);
    }

}