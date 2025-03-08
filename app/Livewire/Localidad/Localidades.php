<?php

namespace App\Livewire\Localidad;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Localidad;
use App\Models\Evento;
use App\Models\Modalidad;

class Localidades extends Component
{
    use WithPagination;

    public $localidad, $localidad_id, $search;
    public $isOpen = 0;
    public $showDeleteModal = false;
    public $confirmingDelete = false;
    public $IdAEliminar;
    public $nombreAEliminar;
    public function create($modalId)
    {
        $this->resetInputFields();
        $this->openModal($modalId);
        $this->render();
        $this->resetPage();
    }

    public function render()
    {
        $localidades = Localidad::where('localidad', 'like', '%' . $this->search . '%')->orderBy('id', 'DESC')->paginate(8);
        return view('livewire.Localidad.localidades', ['localidades' => $localidades]);
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
    private function resetInputFieldsEvento(){
        $this->localidad_id = null;
    }
    private function resetInputFields()
    {
        $this->localidad = '';
    }

    public function store()
    {
        $this->validate([
            'localidad' => 'required|string|max:255|unique:localidads,localidad,' . $this->localidad_id,
        ]);

        Localidad::updateOrCreate(['id' => $this->localidad_id], ['localidad' => $this->localidad]);

        session()->flash('message', 
            $this->localidad_id ? 'Localidad actualizada correctamente!' : 'Localidad creada correctamente!'
        );

        $this->closeModal();
        $this->resetInputFields();
        return redirect()->route('localidad');
    }

    public function edit($id)
    {
        $localidad = Localidad::findOrFail($id);
        $this->localidad_id = $id;
        $this->localidad = $localidad->localidad;

        $this->openModal('modal3');
        
    }
     
    public function delete()
{
    if ($this->confirmingDelete) {
        $localidad = Localidad::find($this->IdAEliminar);

        if (!$localidad) {
            session()->flash('error', 'localidad no encontrada.');
            $this->confirmingDelete = false;
            return;
        }

        $localidad->delete();
        session()->flash('message', 'localidad eliminada correctamente!');
        $this->confirmingDelete = false;
        
        // Restablece la confirmación de eliminación y refresca el componente
        $this->IdAEliminar = null;
        $this->nombreAEliminar = null;
        $this->resetPage();
        
       
        return redirect()->route('localidad'); 
    }

    $this->render();
}

    

    public function confirmDelete($id)
    {
        $localidad = Localidad::find($id);

        if (!$localidad) {
            session()->flash('error', 'localidad no encontrada.');
            return;
        }

        if ($localidad->eventos()->exists()) {
            session()->flash('error', 'No se puede eliminar la localidad: '. $localidad->localidad .', porque está enlazado a uno o más eventos');
            return;
        }

        $this->IdAEliminar = $id;
        $this->nombreAEliminar = $localidad->localidad;
        $this->confirmingDelete = true;
    }

}
