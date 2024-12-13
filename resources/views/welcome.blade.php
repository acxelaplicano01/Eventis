@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
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

@section('content')
<section>
    <x-nav />
</section>

<section class="py-10 sm:py-16 lg:py-24 bg-gradient-to-b z-10 mt-10 from-yellow-50 to-yellow-100">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
            <div>
                <h1 class="text-4xl font-bold text-black sm:text-6xl lg:text-7xl">
                    Conéctate y aprende con los
                    <div class="relative inline-flex">
                        <span class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#6ade4a]"></span>
                        <h1 class="relative text-4xl font-bold text-black sm:text-6xl lg:text-7xl">expertos.
                        </h1>
                    </div>
                </h1>

                <p class="mt-8 text-base text-black sm:text-xl">Eventis es una plataforma diseñada para simplificar la
                    gestión de eventos y conferencias. Permite a los organizadores crear y administrar eventos,
                    configurar conferencias, y gestionar inscripciones de manera eficiente.</p>

                <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                    <a href="{{ route('register') }}" title="Regístrate"
                        class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 bg-yellow-500 hover:bg-yellow-600 focus:bg-yellow-600"
                        role="button"> Registrarse </a>

                    <a href="#" title=""
                        class="inline-flex items-center mt-6 text-base font-semibold transition-all duration-200 sm:mt-0 hover:opacity-80">
                        <svg class="w-10 h-10 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path fill="#eab308" stroke="#eab308" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Ver Video
                    </a>
                </div>
            </div>

            <div onmousemove="handleMouseMove(event)" onmouseleave="resetTransform(event)" class="perspective">
                <img class="w-full image-wrapper" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/1/hero-img.png"
                    alt="" />
            </div>
        </div>
    </div>
</section>



<section id="eventos" class="bg-gradient-to-b z-10 py-10 bg-gray-100 sm:py-16 lg:py-24 from-green-50 to-green-100">
    <div class="content-wrapper">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Eventos disponibles en la
                plataforma
            </h2>
            <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">Eventis combina tecnología y
                funcionalidad para crear eventos memorables.

                ¿Listo para tu próximo evento?</p>
        </div>
        @if($Eventos->isEmpty())
            <div id="alert-additional-content-4"
                class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-white" role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-bold">No hay eventos disponibles.</h3>
                </div>
                <div class="mt-2 mb-4 text-sm">
                    <p>Por el momento no hay eventos disponibles, por favor intente más tarde.</p>
                </div>

            </div>
        @else
            <!-- Lista de eventos -->
            <div class="evento-list group-hover:text-gray-900 m-8">
                @foreach($Eventos as $tarjetasEvento)
                    <a href="{{ route('evento', ['evento' => $tarjetasEvento->id]) }}" class="evento-card">
                        <div class="thumbnail-container">
                            @if($tarjetasEvento->logo == "")
                                <img src="http://www.puertopixel.com/wp-content/uploads/2011/03/Fondos-web-Texturas-web-abtacto-17.jpg"
                                    alt="Sin Foto De Evento">
                            @else
                                <img src="{{ asset(str_replace('public', 'storage', $tarjetasEvento->logo)) }}"
                                    alt="Sin Foto De Evento" class="bg-white group-hover:text-gray-900 thumbnail">
                            @endif
                            <p class="marca">{{ $tarjetasEvento->modalidad->modalidad }}</p>
                        </div>
                        <div class="evento-info">
                            <img src="{{ asset('Logo/Eventis Logo.png') }}" alt="foto-creador" class="icon">
                            <div class="evento-details">
                                <h2 class="name-evento">{{ $tarjetasEvento->nombreevento }}</h2>
                                <p class="evento-creador">{{ $tarjetasEvento->organizador }}</p>
                                <p class="fecha-creacion">{{ $tarjetasEvento->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <br>
            {{ $Eventos->links() }}
            <br>
        @endif
    </div>
</section>

<section id="comentarios" class="py-10 bg-gradient-to-b z-10 from-blue-50 to-blue-100 sm:py-16 lg:py-24 ">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Lo que dicen nuestros
                usuarios
            </h2>
            <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt
                ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
        </div>

        <div class="grid grid-cols-1 gap-6 px-4 mt-12 sm:px-0 xl:mt-20 xl:grid-cols-4 sm:grid-cols-2">
            <div class="overflow-hidden bg-white rounded-md">
                <div class="px-5 py-6">
                    <div class="flex items-center justify-between">
                        <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/7/avatar-1.jpg"
                            alt="" />
                        <div class="min-w-0 ml-3 mr-auto">
                            <p class="text-base font-semibold text-black truncate">Darrell Steward</p>
                            <p class="text-sm text-gray-600 truncate">@darrels</p>
                        </div>
                        <a href="#" title="" class="inline-block text-sky-500">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <blockquote class="mt-5">
                        <p class="text-base text-gray-800">
                            You made it so simple. My new site is so much faster and easier to work with than my old
                            site. I just choose the page, make the change and click save.
                            <span class="block text-sky-500">#another</span>
                        </p>
                    </blockquote>
                </div>
            </div>

            <div class="overflow-hidden bg-white rounded-md">
                <div class="px-5 py-6">
                    <div class="flex items-center justify-between">
                        <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/7/avatar-2.jpg"
                            alt="" />
                        <div class="min-w-0 ml-3 mr-auto">
                            <p class="text-base font-semibold text-black truncate">Leslie Alexander</p>
                            <p class="text-sm text-gray-600 truncate">@lesslie</p>
                        </div>
                        <a href="#" title="" class="inline-block text-sky-500">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <blockquote class="mt-5">
                        <p class="text-base text-gray-800">
                            Simply the best. Better than all the rest. I’d recommend this product to beginners and
                            advanced users.
                            <span class="block text-sky-500">#Celebration</span>
                        </p>
                    </blockquote>
                </div>
            </div>

            <div class="overflow-hidden bg-white rounded-md">
                <div class="px-5 py-6">
                    <div class="flex items-center justify-between">
                        <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/7/avatar-3.jpg"
                            alt="" />
                        <div class="min-w-0 ml-3 mr-auto">
                            <p class="text-base font-semibold text-black truncate">Jenny Wilson</p>
                            <p class="text-sm text-gray-600 truncate">@jennywilson</p>
                        </div>
                        <a href="#" title="" class="inline-block text-sky-500">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <blockquote class="mt-5">
                        <p class="text-base text-gray-800">
                            This is a top quality product. No need to think twice before making it live on web.
                            <span class="block text-sky-500">#make_it_fast</span>
                        </p>
                    </blockquote>
                </div>
            </div>

            <div class="overflow-hidden bg-white rounded-md">
                <div class="px-5 py-6">
                    <div class="flex items-center justify-between">
                        <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/7/avatar-4.jpg"
                            alt="" />
                        <div class="min-w-0 ml-3 mr-auto">
                            <p class="text-base font-semibold text-black truncate">Kristin Watson</p>
                            <p class="text-sm text-gray-600 truncate">@kristinwatson2</p>
                        </div>
                        <a href="#" title="" class="inline-block text-sky-500">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <blockquote class="mt-5">
                        <p class="text-base text-gray-800">
                            YFinally, I’ve found a template that covers all bases for a bootstrapped startup. We
                            were able to launch in days, not months.
                            <span class="block text-sky-500">#Celebration</span>
                        </p>
                    </blockquote>
                </div>
            </div>

            <div class="overflow-hidden bg-white rounded-md">
                <div class="px-5 py-6">
                    <div class="flex items-center justify-between">
                        <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/7/avatar-5.jpg"
                            alt="" />
                        <div class="min-w-0 ml-3 mr-auto">
                            <p class="text-base font-semibold text-black truncate">Guy Hawkins</p>
                            <p class="text-sm text-gray-600 truncate">@jennywilson</p>
                        </div>
                        <a href="#" title="" class="inline-block text-sky-500">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <blockquote class="mt-5">
                        <p class="text-base text-gray-800">
                            This is a top quality product. No need to think twice before making it live on web.
                            <span class="block text-sky-500">#make_it_fast</span>
                        </p>
                    </blockquote>
                </div>
            </div>

            <div class="overflow-hidden bg-white rounded-md">
                <div class="px-5 py-6">
                    <div class="flex items-center justify-between">
                        <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/7/avatar-6.jpg"
                            alt="" />
                        <div class="min-w-0 ml-3 mr-auto">
                            <p class="text-base font-semibold text-black truncate">Marvin McKinney</p>
                            <p class="text-sm text-gray-600 truncate">@darrels</p>
                        </div>
                        <a href="#" title="" class="inline-block text-sky-500">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <blockquote class="mt-5">
                        <p class="text-base text-gray-800">
                            With Celebration, it’s quicker with the customer, the customer is more ensured of
                            getting exactly what they ordered, and I’m all for the efficiency.
                            <span class="block text-sky-500">#dev #tools</span>
                        </p>
                    </blockquote>
                </div>
            </div>

            <div class="overflow-hidden bg-white rounded-md">
                <div class="px-5 py-6">
                    <div class="flex items-center justify-between">
                        <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/7/avatar-7.jpg"
                            alt="" />
                        <div class="min-w-0 ml-3 mr-auto">
                            <p class="text-base font-semibold text-black truncate">Annette Black</p>
                            <p class="text-sm text-gray-600 truncate">@darrels</p>
                        </div>
                        <a href="#" title="" class="inline-block text-sky-500">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <blockquote class="mt-5">
                        <p class="text-base text-gray-800">
                            You made it so simple. My new site is so much faster and easier to work with than my old
                            site. I just choose the page, make the change and click save.
                            <span class="block text-sky-500">#another</span>
                        </p>
                    </blockquote>
                </div>
            </div>

            <div class="overflow-hidden bg-white rounded-md">
                <div class="px-5 py-6">
                    <div class="flex items-center justify-between">
                        <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/7/avatar-8.jpg"
                            alt="" />
                        <div class="min-w-0 ml-3 mr-auto">
                            <p class="text-base font-semibold text-black truncate">Floyd Miles</p>
                            <p class="text-sm text-gray-600 truncate">@darrels</p>
                        </div>
                        <a href="#" title="" class="inline-block text-sky-500">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <blockquote class="mt-5">
                        <p class="text-base text-gray-800">
                            My new site is so much faster and easier to work with than my old site. I just choose
                            the page, make the change and click save.
                            <span class="block text-sky-500">#Celebration</span>
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

    <x-footer />

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
@endsection