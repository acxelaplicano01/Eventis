<?php
namespace App\Livewire;

use App\Models\Asistencia;
use App\Models\DiplomaEvento;
use Livewire\Component;

class ValidarDiplomaEvento extends Component
{
    public $persona;
    public $conferencia;
    public $codigoDiploma;
    public $diploma;
    public $uuid;
    public function mount($uuid)
    {
        $this->uuid = $uuid;
        $diploma = DiplomaEvento::where('uuid', $this->uuid)->first();
        if ($diploma) {
            $diploma = Inscripcion::where('id', $diploma->id)->first(); // Acceder al primer elemento de la colección
            if ($diploma) {
                $this->persona = $asistencia->suscripcion->persona;
                $this->conferencia = $asistencia->suscripcion->conferencia;
                $this->codigoDiploma = $asistencia->suscripcion->conferencia->evento->diploma;
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
