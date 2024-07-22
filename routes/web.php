<?php

use App\Livewire\Tipoperfil\Tipoperfiles;
use App\Models\Evento;
use App\Models\Persona;
use Illuminate\Support\Facades\Route;
// ruta de la vista de login
// rutas de los componentes
use App\Livewire\Nacionalidad\Nacionalidades;
use App\Livewire\Modalidad\Modalidades;
use App\Livewire\Localidad\Localidades;
use App\Livewire\Departamento\Departamentos;
use App\Livewire\Carrera\Carreras;
use App\Livewire\Persona\Personas;
use App\Livewire\Rol\Roles;
use App\Livewire\Conferencia\Conferencias;
use App\Livewire\Conferencia\CrearConferencia;
use App\Livewire\Conferencista\Conferencistas;
use App\Livewire\Evento\Eventos;
use App\Livewire\Asistencia\Asistencias;
use App\Http\Controllers\Login\RegistrarUsarioController;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/nacionalidad', Nacionalidades::class)->name('nacionalidad');
    Route::get('/modalidad', Modalidades::class)->name('modalidad');
    Route::get('/tipoperfil', Tipoperfiles::class)->name('tipoperfil');
    Route::get('/localidad', Localidades::class)->name('localidad');
    Route::get('/departamento', Departamentos::class)->name('departamento');
    Route::get('/carrera', Carreras::class)->name('carrera');
    Route::get('/rol', Roles::class)->name('rol');
    Route::get('/conferencia', Conferencias::class)->name('conferencia');
    Route::get('/conferencista', Conferencistas::class)->name('conferencista');
    Route::get('/evento', Eventos::class)->name('evento');
    Route::get('/asistencia', Asistencias::class)->name('asistencia');
    Route::get('/persona', Personas::class)->name('persona');
});

Route::get('/registrar', [RegistrarUsarioController::class, 'index'])->name('register');
Route::post('/registrar', [RegistrarUsarioController::class, 'store'])->name('registerpost');

Route::post('/nueva-persona', [RegistrarUsarioController::class, 'registrarPersona'])->name('nueva-persona');




