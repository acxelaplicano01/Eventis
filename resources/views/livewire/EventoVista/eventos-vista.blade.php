<div>
    <div class="content-wrapper">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-white mb-2 ml-2">
            Eventos Disponibles
        </h2>
        @if($Eventos->isEmpty())
            <div class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-500 dark:border-yellow-800"
                role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-4 h-4 me-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <h3 class="text-lg font-bold">No hay eventos disponibles.</h3>
                </div>
                <p>Por el momento no hay eventos disponibles, por favor intente más tarde.</p>
            </div>
        @else
        <section class="py-2 sm:py-2 lg:py-2">
            <div class="px-2 mx-auto mb-24 sm:px-2 lg:px-2 max-w-7xl">
                <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-4 lg:mt-8 lg:grid-cols-3 lg:max-w-full">
                    @foreach($Eventos as $evento)
                        <div class="overflow-hidden bg-white dark:bg-gray-800 transform transition duration-300 hover:scale-105 rounded-xl shadow-xl">
                            <div>
                                <div class="relative">
                                    <div class="block aspect-w-4 aspect-h-3">
                                        <img class="object-cover w-full h-56"
                                            src="{{ asset(str_replace('public', 'storage', $evento->logo)) }}"
                                            alt="" />
                                    </div>

                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="px-4 py-2 text-xs font-semibold tracking-widest text-yellow-900 uppercase bg-yellow-500 dark:bg-yellow-900 dark:text-yellow-300 rounded-full">
                                            {{$evento->modalidad->modalidad}} </span>
                                    </div>
                                </div>
                                @php
                                    $inscripcion = Auth::user()->persona->inscripciones()->where('IdEvento', $evento->id)->first();
                                    $estadoInscripcion = $inscripcion ? $inscripcion->Status : null;
                                    $yaInscrito = $estadoInscripcion === 'Aceptado';
                                @endphp
                                <div class="p-5">
                                    @if ($evento->estado  === 'Pagado')
                                        <span class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full {{ $estadoInscripcion === 'Aceptado' ? 'text-green-600 bg-green-100 dark:bg-green-900 dark:text-green-300' : 'text-red-600 bg-red-100' }}"> 
                                            {{ $estadoInscripcion ?? 'No inscrito' }} 
                                        </span>
                                    @endif

                                    @if ($estadoInscripcion === 'Aceptado')
                                    <a href="{{ route('gafete', ['evento' => $evento->id]) }}">
                                        <span class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-yellow-500 bg-yellow-100 dark:bg-yellow-900 dark:text-yellow-300">Gafete</span>
                                    </a>
                                    @endif
                                    <span class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-yellow-500 bg-yellow-100 dark:bg-yellow-900 dark:text-yellow-300">{{$evento->estado}}</span>
                                <span class="block mt-4 text-sm font-semibold tracking-widest text-gray-500 dark:text-gray-400">
                                    <?php
// Obtener el timestamp de la fecha
$timestamp = strtotime($evento->fechainicio);

// Obtener el día de la semana en formato textual completo (por ejemplo, "Sunday")
$diaSemana = date('l', $timestamp);

// Traducir el día de la semana al español
$diasSemana = [
    'Monday' => 'Lunes',
    'Tuesday' => 'Martes',
    'Wednesday' => 'Miércoles',
    'Thursday' => 'Jueves',
    'Friday' => 'Viernes',
    'Saturday' => 'Sábado',
    'Sunday' => 'Domingo'
];

$diaSemanaEsp = $diasSemana[$diaSemana];
?>
                                    
                                    {{$diaSemanaEsp}}, {{ \Carbon\Carbon::parse($evento->fechainicio)->format('d \d\e F \d\e Y') }} </span>
                                    <p class="text-2xl font-semibold">
                                        <a 
                                        href="{{($evento->estado === 'Pagado' && !$yaInscrito)
                        ? route('subir-comprobante', ['evento' => $evento->id])
                        : route('reporteEvento', ['evento' => $evento->id]) }}"
                                        class="text-black dark:text-gray-300">{{$evento->nombreevento}} </a>
                                    </p>
                                    <p class="mt-2 text-base text-gray-600 dark:text-gray-400 truncate">{{$evento->descripcion}}</p>
                                </div>

                                <div class="border-t border-gray-200 dark:border-gray-700">
                                    <div class="flex">
                                        <div class="flex items-center flex-1 pl-6 pr-1 py-5">
                                            <img class="object-cover w-8 h-8 rounded-full"
                                                src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/3/avatar-3.jpg"
                                                alt="" />
                                            <span
                                                class="flex-1 block min-w-0 ml-3 text-base font-semibold text-gray-900 dark:text-gray-300 truncate">
                                                {{$evento->organizador}}<p class="fecha-creacion font-medium">{{ $evento->created_at->diffForHumans() }}</p></span>
                                        </div>

                                        <a href="{{ route('reporteEvento', ['evento' => $evento->id]) }}"
                                            class="inline-flex items-center flex-shrink-0 px-4 py-5 text-base font-semibold transition-all duration-200 bg-white dark:bg-gray-800 border-l border-gray-200 dark:border-gray-700 hover:bg-yellow-500 dark:hover:bg-yellow-600 text-gray-900 hover:text-white">
                                            Ver evento
                                            <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

            <br>
            {{ $Eventos->links() }}
            <br>
        @endif
    </div>