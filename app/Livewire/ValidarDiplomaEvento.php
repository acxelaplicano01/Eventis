<?php
namespace App\Livewire;

use App\Models\Asistencia;
use App\Models\DiplomaEvento;
use App\Models\Inscripcion;
use Livewire\Component;

class ValidarDiplomaEvento extends Component
{
    public $persona;
    public $conferencia;
    public $codigoDiploma;
    public $asistencia;
    public $diploma;
    public $uuid;
    public function mount($uuid)
    {
        $this->uuid = $uuid;
        $diploma = DiplomaEvento::where('uuid', $this->uuid)->first();
        if ($diploma) {
            $diploma = Inscripcion::where('id', $diploma->id)->first(); // Acceder al primer elemento de la colección
            if ($diploma) {
                $this->persona = $diploma->persona;
                $this->conferencia = $diploma->suscripcion->conferencia;
                $this->codigoDiploma = $diploma->suscripcion->conferencia->evento->diploma;
                $this->asistencia = $diploma;
            }
        }
    }

    public function render()
    {
        return view('livewire.validar-diploma-evento', [
            'persona' => $this->persona,
            'conferencia' => $this->conferencia,
            'uuid' => $this->uuid,
            'asistencia' => $this->asistencia,
        ]);
    }
}
