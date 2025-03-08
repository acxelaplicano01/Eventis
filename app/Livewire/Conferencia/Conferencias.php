<?php

namespace App\Livewire\Conferencia;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Conferencia;

use App\Models\Evento;

class Conferencias extends Component
{
    use WithPagination, WithFileUploads;

    public $foto, $fotoConferencista, $nombre, $descripcion, $estado, $precio, $fecha, $horaInicio, $horaFin, $lugar, $linkreunion, $idConferencista, $conferencia_id, $search, $IdEvento;
    public $isOpen = false;
    public $inputSearchConferencista = '';

    public $inputSearchEvento = '';
    public $searchEventos = [];
    public $showDetails = false;
    public $selectedConferencia;
    public $confirmingDelete = false;
    public $IdAEliminar;
    public $nombreAEliminar;

    public function viewDetails($id)
    {
        $this->selectedConferencia = Conferencia::find($id);
        $this->showDetails = true;
    }

    public function closeDetails()
    {
        $this->showDetails = false;
    }

    public function render()
    {
        $conferencias = Conferencia::with( 'evento')
            ->where('IdEvento', $this->IdEvento)
            ->where('nombre', 'like', '%'.$this->search.'%')
            ->orderBy('id', 'DESC')
            ->paginate(8);

        $eventos = Evento::all();

        return view('livewire.Conferencia.conferencias', [
            'conferencias' => $conferencias,
            'eventos' => $eventos,
           
        ]);
    }

    public function updatedInputSearchEvento()
    {
        $query = Evento::query();

        if (!empty($this->inputSearchEvento)) {
            $query->where('nombreevento', 'like', '%' . $this->inputSearchEvento . '%');
        }

        if (!empty($this->IdEvento)) {
            $query->where('id', $this->IdEvento);
        }

        $this->searchEventos = $query->get();
    }

    public function selectEvento($eventoId)
    {
        $this->IdEvento = $eventoId;
        $evento = Evento::find($eventoId);
        $this->inputSearchEvento = $evento->nombreevento;
        $this->searchEventos = [];
    }

   
   
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function agregarConferencia($eventoId)
    {
        $this->IdEvento = $eventoId;
        $this->create();
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
        $this->foto = null;
        $this->nombre = '';
        $this->descripcion = '';
        $this->fecha = '';
        $this->horaInicio = '';
        $this->horaFin = '';
        $this->lugar = '';
        $this->linkreunion = '';
        $this->idConferencista = '';
        $this->fotoConferencista= '';
        $this->IdEvento = '';
        $this->estado = '';
        $this->precio = '';
    }

   public function edit($id)
{
    $conferencia = Conferencia::findOrFail($id);
    $this->conferencia_id = $id;
    $this->IdEvento = $conferencia->IdEvento;
    $this->nombre = $conferencia->nombre;
    $this->descripcion = $conferencia->descripcion;
    $this->fecha = $conferencia->fecha;
    $this->horaInicio = $conferencia->horaInicio;
    $this->horaFin = $conferencia->horaFin;
    $this->lugar = $conferencia->lugar;
    $this->linkreunion = $conferencia->linkreunion;
    $this->idConferencista = $conferencia->idConferencista;
    $this->fotoConferencista = $conferencia->fotoConferencista;
    $this->estado = $conferencia->estado;
    $this->precio = $conferencia->precio;


    // Abrir el modal para edición
    $this->openModal();
}

public function store()
{
    $this->validate([
        'IdEvento' => 'required|exists:eventos,id',
        'foto' => 'nullable|image',
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string|max:500',
        'fecha' => 'required|date',
        'horaInicio' => 'required',
        'horaFin' => 'required|after:horaInicio',
        'lugar' => 'required|string|max:255',
        'linkreunion' => 'nullable|url',
        'idConferencista' => 'required|string|max:500',
        'fotoConferencista' => 'nullable|image',
        'estado' => 'required|string|max:255',
        'precio' => 'nullable',

    ]);

    // Manejo de foto
    if ($this->foto) {
        $this->foto = $this->foto->store('foto', 'public');
    } elseif ($this->conferencia_id) {
        $foto = Conferencia::findOrFail($this->conferencia_id);
        $this->foto= $foto->foto;
    } else {
        $this->foto = null;
    }

    if ($this->fotoConferencista) {
        $this->fotoConferencista = $this->fotoConferencista->store('fotoConferencista', 'public');
    } elseif ($this->conferencia_id) {
        $fotoConferencista = Conferencia::findOrFail($this->conferencia_id);
        $this->fotoConferencista= $fotoConferencista->fotoConferencista;
    } else {
        $this->fotoConferencista = null;
    }
    // Crear o actualizar la conferencia
    Conferencia::updateOrCreate(['id' => $this->conferencia_id], [
        'IdEvento' => $this->IdEvento,
        'foto' => $this->foto,
        'nombre' => $this->nombre,
        'descripcion' => $this->descripcion,
        'fecha' => $this->fecha,
        'horaInicio' => $this->horaInicio,
        'horaFin' => $this->horaFin,
        'lugar' => $this->lugar,
        'linkreunion' => $this->linkreunion,
        'idConferencista' => $this->idConferencista,
        'fotoConferencista' => $this->fotoConferencista,
        'estado' => $this->estado,
        'precio' => $this->precio,
    ]);

    session()->flash('message', $this->conferencia_id ? 'Actividad actualizada correctamente!' : 'Actividad creada correctamente!');
    $this->closeModal();
    $this->resetInputFields();
    return redirect(request()->header('Referer'));  // Recarga la página
}


    public function delete()
    {
        if ($this->confirmingDelete) {
            $conferencia = Conferencia::find($this->IdAEliminar);

            if (!$conferencia) {
                session()->flash('error', 'Actividad no encontrada.');
                $this->confirmingDelete = false;
                return;
            }

            $conferencia->delete();
            session()->flash('message', 'Actividad eliminada correctamente!');
            $this->confirmingDelete = false;
            return redirect(request()->header('Referer'));  // Recarga la página
        }
    }

    public function confirmDelete($id)
    {
        $conferencia = Conferencia::find($id);

        if (!$conferencia) {
            session()->flash('error', 'Actividad no encontrada.');
            return;
        }

        if ($conferencia->suscripciones()->exists()) {
            session()->flash('error', 'No se puede eliminar la Actividad:'.$conferencia->nombre .'porque está enlazada a una o más suscripciones.');
            return;
        }

        $this->IdAEliminar = $id;
        $this->nombreAEliminar = $conferencia->nombre;
        $this->confirmingDelete = true;
    }

    public function mount(Evento $evento)
    {
        if ($evento->id) {
            $this->openModal();
            $this->IdEvento = $evento->id;
            $this->inputSearchEvento = $evento->nombreevento; 
        }
    }
}
