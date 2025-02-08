<?php

namespace App\Livewire\Perfil;

use App\Models\Evento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Perfil extends Component
{
    public  $eventos, $userperfil;

    public function mount(User $userperfil)
    {
        $this->eventos = Evento::where('created_by', $userperfil->id)->with('usuario')->get();
        $this->userperfil = $userperfil;
    }
    public function render()
    {
        return view('livewire.perfil.perfil');
    }
}
