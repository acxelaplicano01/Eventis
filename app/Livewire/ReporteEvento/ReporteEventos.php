<?php

namespace App\Livewire\ReporteEvento;

use App\Models\Diploma;
use App\Models\Localidad;
use App\Models\Modalidad;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Evento;
use Illuminate\Support\Facades\Auth;

class ReporteEventos extends Component
{
    use WithPagination;

    public $evento;
    public $search = '';
    public $conferencias;

    public $modalidades, $localidades, $diplomas;

    public function mount(Evento $evento)
    {
        $this->evento = $evento;
        $this->conferencias =  $evento->conferencias;
        $this->modalidades = Modalidad::all();
        $this->localidades = Localidad::all();
        $this->diplomas = Diploma::all();
    }

    public function render()
    {
        $Eventos = Evento::with('modalidad', 'localidad', 'diploma')
            ->where('nombreevento', 'like', '%' . $this->search . '%')
            ->where('fechaFinal', '>=', Carbon::today())
            ->orderBy('id', 'DESC')
            ->paginate(9);
        Auth::user()->persona->suscripciones;
        return view('livewire.ReporteEvento.reporte-eventos', ['Eventos' => $Eventos]);
    }  
}