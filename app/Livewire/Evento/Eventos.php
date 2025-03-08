<?php

namespace App\Livewire\Evento;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Evento;
use App\Models\Modalidad;
use App\Models\Localidad;
use App\Models\Diploma;

class Eventos extends Component
{
    use WithPagination, WithFileUploads;

    public $logo, $nombreevento, $estado,$precio, $descripcion, $organizador, $fechainicio, $fechafinal, $horainicio, $horafin, $idmodalidad, $idlocalidad, $IdDiploma, $evento_id, $search;
    public $isOpen = 0;
    public $confirmingDelete = false;
    public $eventoIdAEliminar;
    public $nombreEventoAEliminar;
    public $showDetails = false;
    public $selectedEvento;
    public $modalidades, $localidades, $diplomas;
    public $patrocinadoresSeleccionados = [];
    public $cantidadInvitados = [];
    private function resetInputFieldsEvento(){
        $this->evento_id = null;
    }
    public function create($modalId)
    {
        $this->resetInputFields();
        $this->openModal($modalId);
    }

   
    public function openModal($modalId)
    {
        $this->isOpen = $modalId;
    }

    public function closeModal(): void
    {
        $this->isOpen= null;
        $this->resetInputFields();
        $this->resetInputFieldsEvento();;
    }

    public function mount()
    {
        $this->modalidades = Modalidad::all();
        $this->localidades = Localidad::all();
        $this->diplomas = Diploma::all();
    }

    public function render()
    {
        $eventos = Evento::with('modalidad', 'localidad', 'diploma', 'patrocinadores') // Traemos la relación patrocinadores
            ->where('nombreevento', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'DESC')
            ->paginate(8);

        return view('livewire.Evento.eventos', ['eventos' => $eventos]);
    }


    private function resetInputFields()
    {
        $this->logo = '';
        $this->nombreevento = '';
        $this->descripcion = '';
        $this->organizador = '';
        $this->fechainicio = '';
        $this->fechafinal = '';
        $this->horainicio = '';
        $this->horafin = '';
        $this->idmodalidad = '';
        $this->idlocalidad = '';
        $this->IdDiploma = '';
    }

    public function store()
    {
        $this->validate([
            'logo' => 'nullable|image',
            'nombreevento' => 'required',
            'descripcion' => 'required',
            'organizador' => 'required',
            'fechainicio' => 'required',
            'fechafinal' => 'required',
            'horainicio' => 'required',
            'horafin' => 'required',
            'idmodalidad' => 'required',
            'idlocalidad' => 'nullable',
            'IdDiploma' => 'nullable',
            'estado' => 'required|string|max:255',
            'precio' => 'nullable',
        ]);

        // Manejo de archivo logo
        if ($this->logo) {
            // Guardamos el archivo en la carpeta eventos dentro de storage/app/public
            $this->logo = $this->logo->store('eventos', 'public');
        } elseif ($this->evento_id) {
            $evento = Evento::findOrFail($this->evento_id);
            $this->logo = $evento->logo;
        }

        Evento::updateOrCreate(['id' => $this->evento_id], [
            'logo' => $this->logo ? str_replace('public/', 'storage/', $this->logo) : null,
            'nombreevento' => $this->nombreevento,
            'descripcion' => $this->descripcion,
            'organizador' => $this->organizador,
            'fechainicio' => $this->fechainicio,
            'fechafinal' => $this->fechafinal,
            'horainicio' => $this->horainicio,
            'horafin' => $this->horafin,
            'idmodalidad' => $this->idmodalidad,
            'idlocalidad' => $this->idlocalidad  ?: null,
            'IdDiploma' => $this->IdDiploma ?: null,
            'estado' => $this->estado,
            'precio' => $this->precio ?: null,
        ]);

        session()->flash('message', 
            $this->evento_id ? 'Evento creado correctamente!' : 'Evento actualizado correctamente!');

        $this->closeModal();
        $this->resetInputFields();
    }


    public function edit($id)
    {
        $evento = Evento::findOrFail($id);
        $this->evento_id = $id;
        $this->nombreevento = $evento->nombreevento;
        $this->descripcion = $evento->descripcion;
        $this->organizador = $evento->organizador;
        $this->fechainicio = $evento->fechainicio;
        $this->fechafinal = $evento->fechafinal;
        $this->horainicio = $evento->horainicio;
        $this->horafin = $evento->horafin;
        $this->idmodalidad = $evento->idmodalidad;
        $this->idlocalidad = $evento->idlocalidad;
        $this->IdDiploma = $evento->IdDiploma;
        $this->logo = null; // Mantener el logo existente sin sobrescribirlo
        $this->estado = $evento->estado;
        $this->precio = $evento->precio;
        $this->openModal("modal3");
    }

    public function delete()
    {
        if ($this->confirmingDelete) {
            $evento = Evento::find($this->eventoIdAEliminar);

            if (!$evento) {
                session()->flash('error', 'Evento no encontrado.');
                return;
            }

            $evento->delete();
            session()->flash('message', 'Evento eliminado correctamente!');
            $this->confirmingDelete = false;
        }
    }

    public function confirmDelete($id)
    {
        $evento = Evento::find($id);
        if ($evento->conferencias()->exists()) {
            session()->flash('error', 'No se puede eliminar el evento: ' .$evento->nombreevento .', porque está enlazado a una o más conferencias.');
            return;
        }

        $this->eventoIdAEliminar = $id;
        $this->nombreEventoAEliminar = $evento->nombreevento;
        $this->confirmingDelete = true;
    }

    public function viewDetails($id)
    {
        $this->selectedEvento = Evento::find($id);
        $this->showDetails = true;
    }

    public function closeDetails()
    {
        $this->showDetails = false;
    }
}
