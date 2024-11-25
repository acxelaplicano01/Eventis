@extends('layouts.congreso')
@section('app-content')
<section class="bg-gray-100 dark:bg-gray-900 min-h-screen flex items-center justify-center">
    <div
        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col mt-4 items-center">
            <div class="bg-gray-100 z-10 w-16 rounded-full"><br></div>
            <img src="{{ asset('Logo/baner1.jpg') }}" class="h-20 me-4 rounded-lg" alt="Logo" />
            <p class="text-xl mx-8 mb-2 font-bold text-gray-900 dark:text-white text-center break-words">
                {{$evento->nombreevento}}
            </p>

            <img class="w-48 h-48 mb-2 border-yellow-400 border-4 rounded-full shadow-lg"
                src="https://ui-avatars.com/api/?name={{ Auth::user()->persona->nombre }}&amp;color=000&amp;background=facc15"
                alt="Foto de perfil predeterminada">

            <h5 class="mb-0 text-xl mx-8 font-bold text-yellow-400 dark:text-white text-center break-words">
                {{Auth::user()->persona->nombre }} {{Auth::user()->persona->apellido }}
            </h5>
            <span class="text-lg mb-8 text-gray-500 dark:text-gray-400">Participante</span>
            <div class="flex w-full mt-4 md:mt-6 bg-yellow-400 justify-center h-24">
                <div class="flex flex-col items-center relative w-full">
                    <div class="bg-yellow-500 w-full h-2"><br></div>
                    <img class="transform -translate-y-1/2 w-20 h-20 z-50 bg-transparent border-4 border-black"
                        src="data:image/png;base64,{{ $qrcode }}" alt="Código QR">
                    <h2 class="absolute bottom-7 text-sm text-gray-900 dark:text-white">Campus-Choluteca</h2>
                    <h2 class="absolute bottom-2 text-sm text-gray-900 dark:text-white">edgar.carranza@unah.edu.hn</h2>
                </div>
            </div>
        </div>
    </div>
    <a id="botonRegresar" href="{{ route('eventoVista') }}"
        class="absolute z-50 top-4 left-4 inline-flex items-center px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800 rounded-lg">
        Regresar
    </a>
    <button id="botonImprimir" onclick="ocultarBotones()" onclick="window.print()"
        class="absolute z-50 top-4 right-4 inline-flex items-center px-4 py-2 text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800 rounded-lg">
        Imprimir
    </button>
</section>
<script>
    function ocultarBotones() {
        // Ocultar botones
        document.getElementById("botonImprimir").style.display = "none";
        document.getElementById("botonRegresar").style.display = "none";

        // Imprimir la página
        window.print();

        // Mostrar botones nuevamente después de imprimir
        setTimeout(function () {
            document.getElementById("botonImprimir").style.display = "inline-block";
            document.getElementById("botonRegresar").style.display = "inline-block";
        }, 1000);
    }
</script>
</section>
@endsection