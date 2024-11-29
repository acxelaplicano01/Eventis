<?php

namespace App\Http\Controllers;
use App\Models\Inscripcion;
use App\Models\DiplomaEvento;
use App\Models\Asistencia;
use App\Models\DiplomaGenerado;

class ValidarDiplomaController extends Controller
{
    public $persona;
    public $conferencia;
    public $codigoDiploma;
    public $asistencia;
    public $evento;
    public $inscripcion;
    public $uuid;

   
    public function validarDiploma($uuid)
    {
        $this->uuid = $uuid;
        $diploma = DiplomaGenerado::where('uuid', $this->uuid)->first();
        if ($diploma) {
            $asistencia = Asistencia::where('id', $diploma->id)->first(); // Acceder al primer elemento de la colección
            if ($asistencia) {
                $this->persona = $asistencia->suscripcion->persona;
                $this->conferencia = $asistencia->suscripcion->conferencia;
                $this->codigoDiploma = $asistencia->suscripcion->conferencia->evento->diploma;
                $this->asistencia = $diploma;

                return view('livewire.validar-diploma', [
                    'persona' => $this->persona,
                    'conferencia' => $this->conferencia,
                    'uuid' => $this->uuid,
                    'asistencia' => $this->asistencia,
                ]);
            }
        }
        return view('livewire.validar-diploma', [
            'persona' => null,
            'conferencia' => null,
            'uuid' => null,
            'asistencia' => null,
        ]);
    }



    public function validarDiplomaEvento($uuid)
    {
        $this->uuid = $uuid;
        $diploma = DiplomaEvento::where('uuid', $this->uuid)->first();
        if ($diploma) {
            $inscripcion = Inscripcion::where('id', $diploma->id)->first(); // Acceder al primer elemento de la colección
            if ($inscripcion) {
                $this->persona = $inscripcion->persona;
                $this->evento = $inscripcion->evento;
                $this->codigoDiploma = $inscripcion->evento->diploma;
                
                return view('livewire.validar-diploma-evento', [
                    'persona' => $this->persona,
                    'evento' => $this->evento,
                    'uuid' => $this->uuid,
                    'inscripcion' => $this->inscripcion,
                ]);
            }
        }
        }
}