<?php
namespace App\Livewire\Muro;

use App\Models\Comentario;
use Livewire\WithFileUploads;
use App\Models\Evento;
use App\Models\User;
use App\Models\Modalidad;
use App\Models\Localidad;
use App\Models\Publicacion;
use App\Models\Like;

use Livewire\Component;

class Muros extends Component
{
    use WithFileUploads;

    public $search = '';
    public $userperfil;
    public $modalidades, $localidades;
    public $likes = [];
    public $comentario, $fotoComentario;

    public function mount(User $userperfil)
    {
        $this->userperfil = $userperfil;
        $this->cargarLikes();
        $this->modalidades = Modalidad::all();
        $this->localidades = Localidad::all();
    }

    public function cargarLikes()
    {
        $this->likes = Like::where('idUsuario', auth()->id()) // Obtiene los likes solo del usuario autenticado
            ->where('meGusta', true)
            ->pluck('idPublicacion')
            ->toArray();
    }

    public $publicacion_id, $foto, $IdUsuario, $descripcion;
    public $isOpen = 0;
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
        $this->foto = asset('storage/' . $publicacion->foto);
        $this->openModal();
    }

    public function delete()
    {
        if ($this->confirmingDelete) {
            $publicacion = Publicacion::find($this->IdAEliminar);

            if (!$publicacion) {
                session()->flash('error', 'Publicación no encontrada.');
                $this->confirmingDelete = false;
                return;
            }

            $publicacion->forceDelete();
            session()->flash('message', 'Publicación eliminada correctamente!');
            $this->confirmingDelete = false;
            $this->IdAEliminar = null;
            $this->closeModal();
        }
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
            $this->foto = $this->foto->store('fotos', 'public');
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
        $this->closeModal();
    }

    public function confirmDelete($id)
    {
        $publicacion = Publicacion::find($id);

        if (!$publicacion) {
            session()->flash('error', 'Publicación no encontrada.');
            return;
        }

        $this->IdAEliminar = $id;
        $this->confirmingDelete = true;
    }

    public function like($publicacionId)
    {
        $usuarioId = auth()->id(); // Obtener ID del usuario autenticado

        $like = Like::where('idPublicacion', $publicacionId)
            ->where('idUsuario', $usuarioId)
            ->first();

        if ($like) {
            $like->meGusta = !$like->meGusta;
            $like->save();

            if ($like->meGusta) {
                $this->likes[] = $publicacionId; // Agregar a la lista de likes del usuario
            } else {
                $this->likes = array_values(array_diff($this->likes, [$publicacionId])); // Quitar y reindexar
            }
        } else {
            Like::create([
                'meGusta' => true,
                'noMegusta' => false,
                'idPublicacion' => $publicacionId,
                'idUsuario' => $usuarioId, // Se usa el usuario autenticado
            ]);

            $this->likes[] = $publicacionId;
        }
    }


    public function addComentario($publicacionId)
    {
        $this->validate([
            'comentario' => 'required|string|max:255',
            'fotoComentario' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        Comentario::create([
            'contenido' => $this->comentario,
            'fotoComentario' => $this->fotoComentario ? $this->fotoComentario->store('comentarios', 'public') : null,
            'idPublicacion' => $publicacionId,
            'idUsuario' => $this->userperfil->id,
        ]);

        $this->comentario = '';
    }

    public function getSeguidores($userId)
    {
        $user = User::find($userId);
        if ($user) {
            return $user->seguidores;
        }
        return collect(); // Retorna una colección vacía si el usuario no existe
    }

    public function seguir($userId)
    {
        $user = User::find($userId);
        if ($user) {
            auth()->user()->seguir($user->id);
            session()->flash('message', 'Has seguido a ' . $user->name);
        }
    }

    public function dejarDeSeguir($userId)
    {
        $user = User::find($userId);
        if ($user) {
            auth()->user()->dejarDeSeguir($user->id);
            session()->flash('message', 'Has dejado de seguir a ' . $user->name);
        }
    }
    public function getSeguidos($userId)
    {
        $user = User::find($userId);
        if ($user) {
            return $user->siguiendo;
        }
        return collect(); // Retorna una colección vacía si el usuario no existe
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


        // Obtener seguidores y seguidos para un usuario específico (por ejemplo, el usuario con ID 1)
        $seguidores = $this->getSeguidores($this->userperfil->id);
        $seguidos = $this->getSeguidos($this->userperfil->id);

        return view('livewire.muro.muros', [
            'eventosUsuario' => $eventosUsuario,
            'eventosCount' => $eventosCount,
            'publicaciones' => $publicaciones,
            'seguidores' => $seguidores,
            'seguidos' => $seguidos,
        ]);
    }
}