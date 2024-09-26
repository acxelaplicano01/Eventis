<?php
use App\Http\Controllers\EventoVistaController;
use App\Livewire\DescargarDiploma;
use App\Livewire\HistorialEvento\HistorialEventos;
use App\Livewire\PaginaInicial;
use App\Livewire\TemasCongreso;
use App\Livewire\Tipoperfil\Tipoperfiles;
use App\Livewire\VistaDiplomas;
use Illuminate\Support\Facades\Route;
use App\Livewire\Nacionalidad\Nacionalidades;
use App\Livewire\Modalidad\Modalidades;
use App\Livewire\Localidad\Localidades;
use App\Livewire\Persona\Personas;
use App\Livewire\ValidarDiploma;
use App\Livewire\EventoVista\EventosVistas;
use App\Livewire\Rol\Roles;
use App\Livewire\Diploma\Diplomas;
use App\Livewire\Conferencia\Conferencias;
use App\Livewire\VistaConferencia\VistaConferencias;
use App\Livewire\Conferencista\Conferencistas;
use App\Livewire\Evento\Eventos;
use App\Livewire\ConferenciaInscrita\ConferenciasInscritas;
use App\Livewire\Asistencia\Asistencias;
use App\Http\Controllers\Login\RegistrarUsarioController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\TemasCongresoController;
use App\Livewire\Usuario\Usuarios;
use Illuminate\Http\Request;
use App\Livewire\ReporteEvento\ReporteEventos;
use App\Livewire\Asistencia\AsistenciasConferencias;
use App\Livewire\HistorialConferencia\HistorialConferencias;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EventoController;
use App\Livewire\ReciboPago\ReciboPagos;
use App\Livewire\ReciboPago\ComprobacionPago;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/nacionalidad', Nacionalidades::class)->name('nacionalidad');
    Route::get('/modalidad', Modalidades::class)->name('modalidad');
    Route::get('/tipoperfil', Tipoperfiles::class)->name('tipoperfil');
    Route::get('/localidad', Localidades::class)->name('localidad');
    Route::get('/asistencia', Asistencias::class)->name('asistencia');
    Route::get('/rol', Roles::class)->name('rol');
    Route::get('/conferencia/{evento?}', Conferencias::class)->name('conferencia');
    Route::get('/conferencista', Conferencistas::class)->name('conferencista');
    Route::get('/eventos', Eventos::class)->name('eventos');
    Route::get('/persona', Personas::class)->name('persona');
    Route::get('/recibo/{evento}', ReciboPagos::class)->name('recibo');
    Route::get('/usuario', Usuarios::class)->name('usuario');
    Route::get('/eventoVista', EventosVistas::class)->name('eventoVista');
    Route::get('/diploma', Diplomas::class)->name('diploma');
    Route::get('/evento/{evento}/conferencias', VistaConferencias::class)->name('vistaconferencia');
    Route::get('/conferencias-inscritas', ConferenciasInscritas::class)->name('conferencias-inscritas');
    Route::get('/historial-conferencias', HistorialConferencias::class)->name('historial-conferencias');
    Route::get('/asistencia-conferencia/{conferencia}', AsistenciasConferencias::class)->name('asistencias-Conferencia');
    Route::get('/vistaDiploma/asistencia/{asistencia?}', VistaDiplomas::class)->name('vistaDiploma');
    Route::get('/inscripcion-evento/{evento}', ComprobacionPago::class)->name('inscripcion-evento');
    Route::get('/evento/{evento}/reporteEvento', ReporteEventos::class)->name('reporteEvento');
    Route::get('/historial-eventos', HistorialEventos::class)->name('historial-eventos');
});

Route::get('/registrar', [RegistrarUsarioController::class, 'index'])->name('register');
Route::post('/registrar', [RegistrarUsarioController::class, 'store'])->name('registerpost');
Route::get('/evento/{evento}', [EventoController::class, 'show'])->name('evento');
Route::post('/nueva-persona', [RegistrarUsarioController::class, 'registrarPersona'])->name('nueva-persona');
// VALIDAR DIPLOMA
Route::get('/validarDiploma/{uuid}', ValidarDiploma::class)->name('validarDiploma');
Route::post('/pagar', [PagoController::class, 'procesarPago'])->name('pagar');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/temascongreso', [TemasCongresoController::class, 'index'])->name('temascongreso');



