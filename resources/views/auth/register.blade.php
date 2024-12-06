<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Agrega tus estilos CSS personalizados aquí -->
    @section('styles')
    {{--
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/loginStyles.css') }}">
    @endsection
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    @extends('layouts.login-layout')
    <x-nav />
    @if ($errors->any())
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg z-50 bg-red-50 dark:bg-red-800 dark:text-red-300" role="alert">
            <span class="font-medium">Error:</span> Tu contraseña no es igual, inténtalo de
            nuevo.
        </div>
    @endif
    <section class="bg-white w-full mt-12 z-0 lg:fixed">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex items-center justify-center px-4 py-10 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-24">
                <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl">Registrate gratis</h2>
                    <p class="mt-2 text-base text-gray-600">Ya tienes una cuenta? <a href="{{ route('login') }}" title=""
                            class="font-medium text-yellow-600 transition-all duration-200 hover:text-yellow-700 hover:underline focus:text-yellow-700">Login</a>
                    </p>

                    <form method="POST" action="{{ route('registerpost') }}">
                        @csrf
                        <div class="space-y-5">
                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Nombre completo </label>
                                <div class="mt-2.5">
                                    <input type="text" placeholder="Nombre completo" id="name" name="name" required
                                        class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-yellow-600 focus:bg-white caret-yellow-600" />
                                </div>
                            </div>

                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Dirección de correo </label>
                                <div class="mt-2.5">
                                    <input type="email" placeholder="Correo electrónico" id="email" name="email" required
                                        class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-yellow-600 focus:bg-white caret-yellow-600" />
                                </div>
                            </div>

                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Crea tu contraseña </label>
                                <div class="mt-2.5">
                                    <input type="password"  placeholder="Crear contraseña" id="password" name="password" required
                                        class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-yellow-600 focus:bg-white caret-yellow-600" />
                                </div>
                            </div>

                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Confirma tu contraseña </label>
                                <div class="mt-2.5">
                                    <input type="password" placeholder="Confirmar contraseña" id="password_confirmation" name="password_confirmation"
                                    autocomplete="new-password" required
                                        class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-yellow-600 focus:bg-white caret-yellow-600" />
                                </div>
                            </div>

                          <!-- <div class="flex items-center">
                                <input type="checkbox" name="agree" id="agree"
                                    class="w-5 h-5 text-yellow-600 bg-white border-gray-200 rounded" />

                                <label for="agree" class="ml-3 text-sm font-medium text-gray-500">
                                    I agree to Postcraft’s <a href="#" title=""
                                        class="text-yellow-600 hover:text-yellow-700 hover:underline">Terms of Service</a>
                                    and <a href="#" title=""
                                        class="text-yellow-600 hover:text-yellow-700 hover:underline">Privacy Policy</a>
                                </label>
                            </div> -->

                            <div>
                                <button type="submit"
                                    class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 bg-yellow-600 border border-transparent rounded-md focus:outline-none hover:bg-yellow-700 focus:bg-yellow-700">
                                    Siguiente
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="flex items-center justify-center px-4 py-10 sm:py-16 lg:py-24 bg-gray-50 sm:px-6 lg:px-8">
                <div>
                    <img class="w-full mx-auto"
                    src="{{ asset('Logo/logolo.png') }}" alt="" />

                    <div class="w-full max-w-md mx-auto xl:max-w-xl">
                        <h3 class="text-2xl font-bold text-center text-black">Certificate en cada evento</h3>
                        <p class="leading-relaxed text-center text-gray-500 mt-2.5">Amet minim mollit non deserunt
                            ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>

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

</body>

</html>