<?php

namespace App\Livewire\Patrocinador;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Patrocinador;
use App\Models\Evento;
use App\Models\PatrocinadorEvento;
class Patrocinadores extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $descripcion, $Foto, $patrocinador_id, $search;
    public $id_evento, $cantidad_invitados;
    public $isOpen = false;

    protected $rules = [
        'Foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'descripcion' => 'nullable|string|max:500',
        'id_evento' => 'required|exists:eventos,id',
        'cantidad_invitados' => 'required|integer|min:1',
    ];

    public function render()
    {
        $patrocinadores = Patrocinador::where('descripcion', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'ASC')
            ->paginate(5);

        $eventos = Evento::all(); 

        return view('livewire.Patrocinador.patrocinadores', [
            'patrocinadores' => $patrocinadores,
            'eventos' => $eventos
        ]);
    }

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
        $this->Foto = null;
        $this->descripcion = '';
        $this->patrocinador_id = null;
        $this->id_evento = null;
        $this->cantidad_invitados = null;
    }

    public function store()
    {
        $this->validate();

        if ($this->Foto) {
            $this->Foto = $this->Foto->store('patrocinadores', 'public');
        } elseif ($this->patrocinador_id) {
            $foto = Patrocinador::findOrFail($this->patrocinador_id);
            $this->Foto = $foto->Foto;
        } else {
            $this->Foto = null;
        }

        $patrocinador = Patrocinador::updateOrCreate(
            ['id' => $this->patrocinador_id],
            [
                'Foto' => $this->Foto ? str_replace('public/', 'storage/', $this->Foto) : null,
                'descripcion' => $this->descripcion,
            ]
        );

        // Guardar en la tabla intermedia patrocinador_evento
        $patrocinador->eventos()->sync([$this->id_evento => ['cantidad_invitados' => $this->cantidad_invitados]]);

        session()->flash('message', $this->patrocinador_id ? 'Patrocinador actualizado correctamente!' : 'Patrocinador creado correctamente!');

        $this->closeModal();
        $this->resetInputFields();
        return redirect()->route('patrocinador');
    }

    public function edit($id)
    {
        $patrocinador = Patrocinador::findOrFail($id);
        $eventoPivot = $patrocinador->eventos()->first();

        $this->patrocinador_id = $id;
        $this->descripcion = $patrocinador->descripcion;
        $this->id_evento = $eventoPivot ? $eventoPivot->id : null;
        $this->cantidad_invitados = $eventoPivot ? $eventoPivot->pivot->cantidad_invitados : null;
        $this->Foto = null;

        $this->openModal();
    }

    public $confirmingDelete = false;

    public function confirmDelete($id)
    {
        $this->confirmingDelete = true;
        $this->patrocinador_id = $id;
    }

    public function delete()
    {
        $patrocinador = Patrocinador::find($this->patrocinador_id);
        if ($patrocinador) {
            $patrocinador->delete();
            session()->flash('message', 'Patrocinador eliminado con éxito');
        }
        return redirect()->route('patrocinador');
    }
}
