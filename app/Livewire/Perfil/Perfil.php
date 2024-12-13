<?php

namespace App\Livewire\Perfil;

use App\Models\Evento;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Perfil extends Component
{
    public  $eventos;

    public function mount()
    {
        $userId = auth()->id(); // Obtener el ID del usuario autenticado
        $this->eventos = Evento::where('created_by', $userId)->with('usuario')->get(); // Filtrar eventos por el ID del usuario y cargar la relación usuario
    }
    public function render()
    {
        return view('livewire.perfil.perfil');
    }
}
