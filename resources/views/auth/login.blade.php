@extends('layouts.login-layout')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/loginStyles.css') }}">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
<style>
    .perspective {
      perspective: 1000px;
    }

    .image-wrapper {
      transform-style: preserve-3d;
      transition: transform 0.2s ease-out;
    }
  </style>
@endsection

<body class="dark:bg-gray-900">
    @section('app-content')
    <x-nav />
    <br>
    {{-- Alerta de error de Flowbite --}}
    @if ($errors->any())
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg z-50 bg-red-50 dark:bg-red-800 dark:text-red-300" role="alert">
            <span class="font-medium">Error:</span> Las credenciales ingresadas son incorrectas. Por favor, inténtalo de
            nuevo.
        </div>
    @endif

    <section class="bg-white w-full z-0 mt-8 lg:fixed">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex items-center justify-center px-4 py-10 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-24">
                <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl">Empieza a aprender</h2>
                    <p class="mt-2 text-base text-gray-600">No tienes una cuenta? <a href="{{ route('register') }}"
                            title=""
                            class="font-medium text-yellow-600 transition-all duration-200 hover:text-yellow-700 hover:underline focus:text-yellow-700">Crea
                            tu cuenta gratis</a></p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="space-y-5">
                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Email address </label>
                                <div class="mt-2.5">
                                    <input type="email" id="email" name="email" placeholder="Correo electrónico"
                                        required
                                        class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-yellow-600 focus:bg-white caret-yellow-600" />
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="" class="text-base font-medium text-gray-900"> Password </label>

                                    <a href="{{ route('password.request') }}"
                                        class="text-sm font-medium text-yellow-600 hover:underline hover:text-yellow-700 focus:text-yellow-700">
                                        No recuerdas la contraseña? </a>
                                </div>
                                <div class="mt-2.5">
                                    <input type="password" id="password" name="password" placeholder="Contraseña"
                                        required
                                        class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-yellow-600 focus:bg-white caret-yellow-600" />
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 bg-yellow-600 border border-transparent rounded-md focus:outline-none hover:bg-yellow-700 focus:bg-yellow-700">Iniciar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div 
                class="flex items-center justify-center px-4 py-10 sm:py-16 lg:py-24 bg-gradient-to-b from-yellow-50 to-yellow-100 sm:px-6 lg:px-8">
                <div onmousemove="handleMouseMove(event)" onmouseleave="resetTransform(event)" class="perspective">
                    <img class="w-full mx-auto image-wrapper" src="{{ asset('Logo/logolo.png') }}" alt="" />

                    <div class="w-full max-w-md mx-auto xl:max-w-xl">
                        <h3 class="text-2xl font-bold text-center text-black">Certificate en cada evento</h3>
                        <p class="leading-relaxed text-center text-gray-500 mt-2.5">Con Eventis, los asistentes pueden registrarse fácilmente, acceder a contenido exclusivo y recibir certificados personalizados al finalizar su participación.</p>

                        <div class="flex items-center justify-center mt-10 space-x-3">
                            <div class="bg-yellow-500 rounded-full w-20 h-1.5"></div>

                            <div class="bg-gray-200 rounded-full w-12 h-1.5"></div>

                            <div class="bg-gray-200 rounded-full w-12 h-1.5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    <script>
        const handleMouseMove = (event) => {
            const container = event.currentTarget;
            const rect = container.getBoundingClientRect();
            const wrapper = container.querySelector('.image-wrapper');

            const x = event.clientX - rect.left - rect.width / 2;
            const y = event.clientY - rect.top - rect.height / 2;

            const rotationX = (-y / rect.height) * 20; // Adjust the multiplier for intensity
            const rotationY = (x / rect.width) * 20;

            wrapper.style.transform = `rotateX(${rotationX}deg) rotateY(${rotationY}deg)`;
        };

        const resetTransform = (event) => {
            const wrapper = event.currentTarget.querySelector('.image-wrapper');
            wrapper.style.transform = 'rotateX(0deg) rotateY(0deg)';
        };
    </script>
</body>