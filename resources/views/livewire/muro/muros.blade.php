<div>
    <main role="main">
        <div class="flex">
            <section class="dark:bg-gray-900 w-full">
                @if (session()->has('message'))
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b-lg text-teal-900 px-4 py-3 shadow-sm my-3"
                        role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <div>
                    <div class="flex justify-start bg-white rounded-t-lg dark:bg-gray-800">
                        <div class="px-4 py-2 mx-2">
                            <a href="{{ route('eventoVista') }}"
                                class="text-2xl font-medium rounded-full text-yellow-400 hover:bg-yellow-500 hover:text-yellow-300 float-right">
                                <svg class="m-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <g>
                                        <path
                                            d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="m-2">
                            <h2 class="mb-0 text-xl font-bold dark:text-white">
                                {{$userperfil->nombre}} {{$userperfil->apellido}}
                            </h2>
                            <p class="mb-0 w-48 text-xs dark:text-gray-400">{{$eventosCount}} Eventos</p>
                        </div>
                    </div>
                    <hr class="dark:border-gray-700">
                </div>
                <!-- User card-->
                <div class="bg-white dark:bg-gray-800 shadow-sm overflow-hidden">
                    <div class="w-full bg-cover bg-no-repeat bg-center"
                        style="height: 350px; background-image: url(https://azulschool.net/wp-content/uploads/buddypress/members/34880/cover-image/673448942ac49-bp-cover-image.jpg;">
                        <img class="opacity-0 w-full h-full"
                            src="https://azulschool.net/wp-content/uploads/buddypress/members/34880/cover-image/673448942ac49-bp-cover-image.jpg"
                            alt="">
                    </div>
                    <div class="p-4">
                        <div class="relative flex w-full">
                            <!-- Avatar -->
                            <div class="flex flex-1">
                                <div style="margin-top: -4rem;">
                                    <div style="height:12rem; width:12rem;"
                                        class="object-cover rounded-full relative ms-2">
                                        @if ($userperfil->profile_photo_path)
                                            <img style="height:12rem; width:12rem;"
                                                class="object-cover rounded-full relative border-4 border-yellow-500"
                                                src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                        @else 
                                            <img style="height:12rem; width:12rem;"
                                                class="object-cover rounded-full relative border-4 border-yellow-500"
                                                src="https://ui-avatars.com/api/?name={{ $userperfil->name }}&amp;color=000&amp;background=facc15">
                                        @endif
                                        <div class="absolute"></div>
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="space-y-1 justify-center w-full mt-3 ml-3">
                                    <!-- User basic-->
                                    <div>
                                        <span class="text-2xl leading-6 font-bold dark:text-white">
                                            {{$userperfil->nombre}} {{$userperfil->apellido}}
                                        </span>
                                    </div>
                                    <!-- User stats -->
                                    <div
                                        class="flex justify-start items-start w-full divide-x dark:divide-gray-500 divide-gray-800 divide-solid">
                                        <div class="text-center pr-3"><span
                                                class="font-bold dark:text-white">{{ $seguidos->count() }}</span><span
                                                class="dark:text-gray-400">
                                                Siguiendo</span></div>
                                        <div class="text-center px-3"><span
                                                class="font-bold dark:text-white">{{$seguidores->count()}}
                                            </span><span class="dark:text-gray-400"> Seguidores</span></div>
                                    </div>
                                    
                                    <div class="flex -space-x-4 rtl:space-x-reverse">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800"
                                            src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800"
                                            src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800"
                                            src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800"
                                            src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800"
                                            src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800"
                                            src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800"
                                            src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                        <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800"
                                            href="#">+99</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Botones User -->
                            <div class="flex space-x-2 justify-end">
                                <!-- Editar Button -->
                                @if(auth()->user()->id === $userperfil->id)
                                    <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                                        class="flex justify-center max-h-max whitespace-nowrap focus:outline-none focus:ring max-w-max border bg-transparent border-yellow-500 text-yellow-500 hover:border-yellow-800 items-center hover:shadow-sm font-bold py-2 px-4 rounded-full mr-0 ml-auto"
                                        type="button">
                                        Editar
                                    </button>
                                    <!-- Publicar Button 
                                                        <button wire:click="create"
                                                            class="flex justify-center bg-yellow-500 max-h-max whitespace-nowrap focus:outline-none  focus:ring  max-w-max border bg-transparent border-yellow-500 text-white hover:border-yellow-800 items-center hover:shadow-sm font-bold py-2 px-4 rounded-full mr-0 ml-auto">
                                                            Publicar
                                                        </button>-->
                                @endif
                                <!-- Botón para seguir o dejar de seguir -->
                                @if(auth()->user()->id !== $userperfil->id)
                                    @if(auth()->user()->siguiendo->contains($userperfil->id))
                                        <button wire:click="dejarDeSeguir({{ $userperfil->id }})"
                                            class="flex justify-center bg-gray-50 hover:bg-gray-100 max-h-max whitespace-nowrap focus:outline-none max-w-max border text-gray-800 items-center hover:shadow-sm font-bold py-2 px-4 rounded-full mr-0 ml-auto">
                                            Siguiendo
                                        </button>
                                    @else
                                        <button wire:click="seguir({{ $userperfil->id }})"
                                            class="flex justify-center bg-yellow-500 hover:bg-yellow-600 max-h-max whitespace-nowrap focus:outline-none max-w-max border text-gray-800  items-center hover:shadow-sm font-bold py-2 px-4 rounded-full mr-0 ml-auto">
                                            Seguir
                                        </button>
                                    @endif
                                @endif
                            </div>
                        </div>

                        @if($isOpen)
                            @include('livewire.muro.create')
                        @endif

                        @if($isOpenEvento)
                            @include('livewire.muro.evento')
                        @endif


                    </div>
                </div>
                <div class="mb-1 bg-white dark:bg-gray-800 rounded-b-lg border-t dark:border-gray-700 shadow-sm">
                    <ul class="flex flex-wrap ml-1 -mb-px text-sm font-medium text-center" id="default-styled-tab"
                        data-tabs-toggle="#default-styled-tab-content"
                        data-tabs-active-classes="text-yellow-500 hover:text-yellow-500 dark:text-yellow-500 dark:hover:text-yellow-500 border-yellow-500 dark:border-yellow-500"
                        data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                        role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
                                data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Publicaciones</button>
                        </li>

                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">Información</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="false">Eventos</button>
                        </li>
                        <li role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="contacts-styled-tab" data-tabs-target="#styled-contacts" type="button" role="tab"
                                aria-controls="contacts" aria-selected="false">Contacts</button>
                        </li>
                    </ul>
                </div>
                <div id="default-styled-tab-content">
                    <div class="hidden" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="flex" style="width: 1130px;">
                            <aside class="w-2/5 h-12 -top-[460px] sticky">
                                <!--Aside menu (right side)-->
                                <div style="max-width:380px;">
                                    <div class="overflow-y-auto">
                                        <div class="relative text-gray-400 w-full mt-3 py-1 pr-4">
                                            <button type="submit" class="absolute ml-4 mt-3 mr-4">
                                                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                    x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                                    style="enable-background:new 0 0 56.966 56.966;"
                                                    xml:space="preserve" width="512px" height="512px">
                                                    <path
                                                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <input name="buscar" wire:model.live="search" type="text"
                                                id="table-search-users"
                                                placeholder="Buscar en los eventos de {{$userperfil->nombre}} {{$userperfil->apellido}}"
                                                class="h-10 px-10 pr-5 w-full text-sm text-gray-700 dark:text-gray-200 
                                        bg-gray-100 dark:bg-gray-700 placeholder-gray-500 dark:placeholder-gray-400 
                                        focus:outline-none focus:ring-2 focus:ring-yellow-500 
                                        rounded-lg border border-gray-300 dark:border-gray-600 shadow-sm">
                                        </div>
                                        <!--trending tweet section-->
                                        <div
                                            class="max-w-sm rounded-lg bg-white dark:bg-gray-800 p-3 dark:bg-dim-700 bg-dim-700 overflow-hidden shadow-sm mr-4 mt-4">
                                            <h2 class="mb-0 text-xl font-bold dark:text-white">Fotos</h2>
                                            <p class="w-48 text-xs dark:text-gray-400 mb-2">{{$eventosCount}} Fotos</p>
                                            <div class="grid grid-cols-3 gap-1">
                                                @foreach($Eventos as $evento) 
                                                    <div data-popover-target="popover-user-profile-{{ $evento->id }}"
                                                        class="max-w-sm truncate dark:text-white bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                                        <a href="{{ route('reporteEvento', ['evento' => $evento->id]) }}"
                                                            target="_blank">
                                                            <img class="rounded-t-lg w-full h-24 object-cover"
                                                                src="{{ asset('storage/' . $evento->logo) }}"
                                                                alt="Logo del Evento" />
                                                        </a>
                                                        <span class="p-1">{{ $evento->nombreevento }}</span>
                                                    </div>
                                                    <div data-popover id="popover-user-profile-{{ $evento->id }}"
                                                        role="tooltip"
                                                        class="absolute z-50 invisible shadow-2xl inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                                                        <div class="p-3">
                                                            <div class="flex items-center justify-between mb-2">
                                                                <img class="w-60 h-32 me-4 object-cover rounded-lg"
                                                                    src="/storage/{{$evento->logo }}" alt="">
                                                            </div>
                                                            <p
                                                                class="text-base font-semibold leading-none text-gray-900 dark:text-white">
                                                                <a href="#">{{ $evento->nombreevento }}</a>
                                                            </p>
                                                            <p class="mb-4 text-sm line-clamp-4 text-ellipsis">
                                                                {{ $evento->descripcion }}</p>
                                                            <ul class="flex text-sm">
                                                                <li class="me-2">
                                                                    <a href="#" class="py-1 hover:underline">
                                                                        <span
                                                                            class="font-semibold text-gray-900 dark:text-white">{{ $evento->inscripciones->count() }}</span>
                                                                        <span>Inscritos</span>
                                                                    </a>
                                                                </li>
                                                                @if($evento->estado === 'Pagado')
                                                                    <li class="me-2">
                                                                        <a href="{{ route('reporteEvento', ['evento' => $evento->id]) }}"
                                                                            class="hover:underline">
                                                                            <div>
                                                                                <button type="button"
                                                                                    class="text-white -mt-2.5 bg-yellow-500 hover:bg-yellow-600 focus:ring-4 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-yellow-500 dark:hover:bg-yellow-600">Inscribirse</button>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                        <div data-popper-arrow></div>
                                                    </div>

                                                @endforeach
                                            </div>

                                        </div>
                                        <!--trending tweet section-->
                                        <div
                                            class="max-w-sm rounded-lg dark:bg-gray-800 bg-white overflow-hidden shadow-sm mr-4 mt-4 border border-gray-200 dark:border-gray-700">
                                            <!-- Header -->
                                            <div class="flex items-center justify-between p-4">
                                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Germany
                                                    Trends</h2>
                                                <a href="#" aria-label="Settings"
                                                    class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                                                    <svg class="h-6 w-6 text-gray-500 dark:text-gray-300" fill="none"
                                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path
                                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                </a>
                                            </div>

                                            <hr class="border-gray-300 dark:border-gray-600">

                                            <!-- Trending Items -->
                                            <div class="divide-y divide-gray-300 dark:divide-gray-600">
                                                <!-- Trending Item Template -->
                                                <div
                                                    class="flex justify-between items-center p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                    <div>
                                                        <p class="text-xs text-gray-500 dark:text-gray-400">1 · Trending
                                                        </p>
                                                        <h3 class="font-bold text-gray-900 dark:text-white">
                                                            #Microsoft363
                                                        </h3>
                                                        <p class="text-xs text-gray-500 dark:text-gray-400">5,466 Tweets
                                                        </p>
                                                    </div>
                                                    <a href="#" aria-label="More options"
                                                        class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                                                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-300"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            viewBox="0 0 24 24">
                                                            <path d="M19 9l-7 7-7-7"></path>
                                                        </svg>
                                                    </a>
                                                </div>

                                                <!-- Additional trending items (copy the block above and update the content as needed) -->
                                                <div
                                                    class="flex justify-between items-center p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                    <div>
                                                        <p class="text-xs text-gray-500 dark:text-gray-400">2 · Politics
                                                            ·
                                                            Trending</p>
                                                        <h3 class="font-bold text-gray-900 dark:text-white">#HI-Fashion
                                                        </h3>
                                                        <p class="text-xs text-gray-500 dark:text-gray-400">8,464 Tweets
                                                        </p>
                                                    </div>
                                                    <a href="#" aria-label="More options"
                                                        class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                                                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-300"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            viewBox="0 0 24 24">
                                                            <path d="M19 9l-7 7-7-7"></path>
                                                        </svg>
                                                    </a>
                                                </div>

                                                <div
                                                    class="flex justify-between items-center p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                    <div>
                                                        <p class="text-xs text-gray-500 dark:text-gray-400">3 · Rock ·
                                                            Trending</p>
                                                        <h3 class="font-bold text-gray-900 dark:text-white">#Ferrari
                                                        </h3>
                                                        <p class="text-xs text-gray-500 dark:text-gray-400">5,586 Tweets
                                                        </p>
                                                    </div>
                                                    <a href="#" aria-label="More options"
                                                        class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                                                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-300"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            viewBox="0 0 24 24">
                                                            <path d="M19 9l-7 7-7-7"></path>
                                                        </svg>
                                                    </a>
                                                </div>

                                                <div
                                                    class="flex justify-between items-center p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                    <div>
                                                        <p class="text-xs text-gray-500 dark:text-gray-400">4 · Auto
                                                            Racing
                                                            · Trending</p>
                                                        <h3 class="font-bold text-gray-900 dark:text-white">#Vettel</h3>
                                                        <p class="text-xs text-gray-500 dark:text-gray-400">9,416 Tweets
                                                        </p>
                                                    </div>
                                                    <a href="#" aria-label="More options"
                                                        class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                                                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-300"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            viewBox="0 0 24 24">
                                                            <path d="M19 9l-7 7-7-7"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>

                                            <div
                                                class="p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition text-center cursor-pointer">
                                                <h2 class="text-yellow-500 hover:underline">Show more</h2>
                                            </div>
                                        </div>

                                        <!--people suggetion to follow section-->
                                        <div
                                            class="max-w-sm rounded-lg bg-white dark:bg-gray-800 overflow-hidden shadow-sm mr-4 mt-4 border border-gray-200 dark:border-gray-700">
                                            <!-- Header -->
                                            <div class="p-4">
                                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Who to
                                                    Follow</h2>
                                            </div>

                                            <hr class="border-gray-300 dark:border-gray-600">

                                            <!-- User Item Template -->
                                            <div
                                                class="flex items-center justify-between p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                <div class="flex items-center">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                                        alt="Sonali Hirave Profile">
                                                    <div class="ml-3">
                                                        <p class="text-base font-medium text-gray-900 dark:text-white">
                                                            Sonali Hirave</p>
                                                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                                            @ShonaDesign</p>
                                                    </div>
                                                </div>
                                                <button
                                                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-4 rounded-full transition duration-300">
                                                    Follow
                                                </button>
                                            </div>

                                            <hr class="border-gray-300 dark:border-gray-600">

                                            <!-- Second User (duplicate the structure for more users) -->
                                            <div
                                                class="flex items-center justify-between p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                <div class="flex items-center">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                                        alt="Sonali Hirave Profile">
                                                    <div class="ml-3">
                                                        <p class="text-base font-medium text-gray-900 dark:text-white">
                                                            Sonali Hirave</p>
                                                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                                            @ShonaDesign</p>
                                                    </div>
                                                </div>
                                                <button
                                                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-4 rounded-full transition duration-300">
                                                    Follow
                                                </button>
                                            </div>

                                            <hr class="border-gray-300 dark:border-gray-600">

                                            <!-- Show More -->
                                            <div
                                                class="p-4 text-center cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                <h2 class="font-bold text-yellow-500 hover:underline">Show more</h2>
                                            </div>
                                        </div>
                                        <div class="flow-root m-6">
                                            <div class="flex-1">
                                                <a href="#">
                                                    <p class="text-sm leading-6 font-medium text-gray-500">Terms Privacy
                                                        Policy Cookies Imprint Ads info
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="flex-2">
                                                <p class="text-sm leading-6 font-medium text-gray-600"> © 2020 Eventis,
                                                    Inc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <div class="dark:bg-gray-900 w-4/5" style="max-width:600px;">
                                @if(auth()->user()->id === $userperfil->id)
                                    <div class="mt-4 mb-4 shadow-sm rounded-lg dark:bg-gray-800">
                                        <div
                                            class="bg-white pt-4 px-4 border rounded-lg dark:bg-gray-800 dark:border-gray-600">
                                            <article>
                                                <div class="flex items-center mb-3.5">
                                                    @if ($userperfil->profile_photo_path)
                                                        <img class="w-10 h-10 me-2 object-cover rounded-full"
                                                            src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                                    @else 


                                                        <img class="w-10 h-10 me-2 object-cover rounded-full"
                                                            src="https://ui-avatars.com/api/?name={{ $userperfil->name }}&amp;color=000&amp;background=facc15">
                                                    @endif
                                                    <div wire:click="create"
                                                        class="dark:bg-white-800 cursor-pointer hover:bg-gray-200 dark:hover:bg-gray-600 bg-gray-100 dark:bg-gray-700 p-2 w-full rounded-full">
                                                        <span
                                                            class="font-medium ml-2 text-gray-600 dark:text-white">{{ $userperfil->nombre }},
                                                            ¿Qué novedades
                                                            tienes?</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="dark:border-gray-600 border-gray-200 border-t flex items-center py-3 px-6">
                                                    <div wire:click="create"
                                                        class="flex-1 flex items-center cursor-pointer text-xs dark:text-gray-400 p-1.5 rounded-full hover:bg-green-50 hover:text-green-600 dark:hover:text-green-600 font-semibold ml-2 text-gray-500 transition duration-350 ease-in-out">
                                                        <svg class="w-7 h-7 ml-7 text-green-600 dark:text-green-600"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                                                clip-rule="evenodd" />
                                                            <path fill-rule="evenodd"
                                                                d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Foto/video
                                                    </div>
                                                    <div wire:click="createEvento"
                                                        class="flex-1 ml-4 flex items-center p-1.5 rounded-full hover:bg-yellow-50 cursor-pointer text-xs dark:text-gray-400 dark:hover:text-yellow-500 hover:text-yellow-500 text-gray-500 font-semibold transition duration-350 ease-in-out">
                                                        <svg class="w-7 h-7 ml-7 text-yellow-500 dark:text-yellow-500"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M12.512 8.72a2.46 2.46 0 0 1 3.479 0 2.461 2.461 0 0 1 0 3.479l-.004.005-1.094 1.08a.998.998 0 0 0-.194-.272l-3-3a1 1 0 0 0-.272-.193l1.085-1.1Zm-2.415 2.445L7.28 14.017a1 1 0 0 0-.289.702v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .703-.288l2.851-2.816a.995.995 0 0 1-.26-.189l-3-3a.998.998 0 0 1-.19-.26Z"
                                                                clip-rule="evenodd" />
                                                            <path fill-rule="evenodd"
                                                                d="M7 3a1 1 0 0 1 1 1v1h3V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h1a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h1V4a1 1 0 0 1 1-1Zm10.67 8H19v8H5v-8h3.855l.53-.537a1 1 0 0 1 .87-.285c.097.015.233.13.277.087.045-.043-.073-.18-.09-.276a1 1 0 0 1 .274-.873l1.09-1.104a3.46 3.46 0 0 1 4.892 0l.001.002A3.461 3.461 0 0 1 17.67 11Z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Evento
                                                    </div>
                                                    <div wire:click="create"
                                                        class="flex-1 ml-4 flex items-center cursor-pointer text-xs dark:text-gray-400 p-1.5 rounded-full hover:bg-blue-50 dark:hover:text-blue-500 hover:text-blue-500 text-gray-500 font-semibold transition duration-350 ease-in-out">
                                                        <svg class="w-7 h-7 ml-7 text-blue-500 dark:text-blue-500"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M3 6.2V5h11v1.2M8 5v14m-3 0h6m2-6.8V11h8v1.2M17 11v8m-1.5 0h3" />
                                                        </svg>
                                                        Texto
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                @endif

                                <div data-popover id="popover-user-publicacion-{{ $userperfil->id }}" role="tooltip"
                                    class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                                    <div class="p-3">
                                        <div class="flex items-center justify-between mb-2">
                                            @if ($userperfil->profile_photo_path)
                                                <a href="#">
                                                    <img data-popover-target="popover-user-publicacion-{{ $userperfil->id }}"
                                                        class="w-10 h-10 me-2 object-cover rounded-full"
                                                        src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                                </a>
                                            @else 


                                                <a href="#">
                                                    <img data-popover-target="popover-user-publicacion-{{ $userperfil->id }}"
                                                        class="w-10 h-10 me-2 object-cover rounded-full"
                                                        src="https://ui-avatars.com/api/?name={{ $userperfil->name }}&amp;color=000&amp;background=facc15">
                                                </a>
                                            @endif
                                            <div>
                                                @if(auth()->user()->id !== $userperfil->id)
                                                    @if(auth()->user()->siguiendo->contains($userperfil->id))
                                                        <button wire:click="dejarDeSeguir({{ $userperfil->id }})"
                                                            class="flex justify-center bg-gray-50 hover:bg-gray-100 max-h-max whitespace-nowrap focus:outline-none max-w-max border text-gray-800 items-center hover:shadow-sm font-bold py-2 px-4 rounded-full mr-0 ml-auto">
                                                            Siguiendo
                                                        </button>
                                                    @else
                                                        <button wire:click="seguir({{ $userperfil->id }})"
                                                            class="flex justify-center bg-yellow-500 hover:bg-yellow-600 max-h-max whitespace-nowrap focus:outline-none max-w-max border text-gray-800  items-center hover:shadow-sm font-bold py-2 px-4 rounded-full mr-0 ml-auto">
                                                            Seguir
                                                        </button>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                        <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">
                                            <a href="#">{{ $userperfil->nombre}} {{ $userperfil->apellido}}</a>
                                        </p>
                                        <p class="mb-3 text-sm font-normal">
                                            <a href="#" class="hover:underline">{{ $userperfil->name}}</a>
                                        </p>
                                        <p class="mb-4 text-sm">{{ $userperfil->descripcion}} <a href="#"
                                                class="text-blue-600 dark:text-blue-500 hover:underline">{{ $userperfil->pagina}}</a>.
                                        </p>
                                        <ul class="flex text-sm">
                                            <li class="me-2">
                                                <a href="#" class="hover:underline">
                                                    <span
                                                        class="font-semibold text-gray-900 dark:text-white">{{$seguidores->count()}}</span>
                                                    <span>Seguiendo</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="hover:underline">
                                                    <span
                                                        class="font-semibold text-gray-900 dark:text-white">{{$seguidos->count()}}</span>
                                                    <span>Seguidores</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                                @foreach($publicaciones as $publicacion)
                                    <div class="mt-4 mb-4 shadow-sm rounded-lg dark:bg-gray-800">
                                        <div
                                            class="bg-white px-4 pt-4 border rounded-lg dark:bg-gray-800 dark:border-gray-600">
                                            <article>
                                                <div class="flex items-center mb-4">
                                                    @if ($userperfil->profile_photo_path)
                                                        <img data-popover-target="popover-user-publicacion-{{ $userperfil->id }}"
                                                            class="w-10 h-10 me-2 object-cover rounded-full"
                                                            src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                                    @else 



                                                        <img data-popover-target="popover-user-publicacion-{{ $userperfil->id }}"
                                                            class="w-10 h-10 me-2 object-cover rounded-full"
                                                            src="https://ui-avatars.com/api/?name={{ $userperfil->name }}&amp;color=000&amp;background=facc15">
                                                    @endif
                                                    <div class="dark:text-white">
                                                        <a href="{{ route('muro', $publicacion->user->id) }}"
                                                            class="font-semibold text-gray-900 dark:text-white">{{ $publicacion->user->nombre }}
                                                            {{ $publicacion->user->apellido }}</a>
                                                        @if(auth()->user()->id !== $userperfil->id)
                                                            @if(auth()->user()->siguiendo->contains($userperfil->id))
                                                                <button wire:click="dejarDeSeguir({{ $userperfil->id }})"
                                                                    class="text-gray-500 dark:text-gray-400 font-semibold">
                                                                    <span
                                                                        class="text-gray-800 dark:text-gray-200 mr-1">·</span>Siguiendo
                                                                </button>
                                                            @else
                                                                <button wire:click="seguir({{ $userperfil->id }})"
                                                                    class="text-yellow-500 font-semibold">
                                                                    <span
                                                                        class="text-gray-800 dark:text-gray-200 mr-1">·</span>Seguir
                                                                </button>
                                                            @endif
                                                        @endif
                                                        <button id="dropdownMenuIconHorizontalButton-{{$publicacion->id}}"
                                                            data-dropdown-toggle="dropdownDotsHorizontal-{{$publicacion->id}}"
                                                            class="inline-flex ml-24 items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg dark:text-white"
                                                            type="button">
                                                            <svg class="w-4 h-4" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                viewBox="0 0 16 3">
                                                                <path
                                                                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                            </svg>
                                                        </button>
                                                        <!-- Dropdown menu -->
                                                        <div id="dropdownDotsHorizontal-{{$publicacion->id}}"
                                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                                aria-labelledby="dropdownMenuIconHorizontalButton-{{$publicacion->id}}">
                                                                <li>
                                                                    <a wire:click="edit({{ $publicacion->id }})"
                                                                        class="cursor-pointer block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Editar</a>
                                                                </li>
                                                                <li>
                                                                    <a wire:click="confirmDelete({{ $publicacion->id }})"
                                                                        class="cursor-pointer block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Eliminar</a>
                                                                </li>
                                                                <li>
                                                                    <a wire:click="edit({{ $publicacion->id }})"
                                                                        class="cursor-pointer block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Guardar</a>
                                                                </li>
                                                            </ul>
                                                            <div class="py-2">
                                                                <a href="#"
                                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Reportar</a>
                                                            </div>
                                                        </div>
                                                        @if (session()->has('error'))
                                                            <div
                                                                class="fixed z-50 inset-0 flex items-center justify-center overflow-y-auto ease-out duration-400">
                                                                <div class="fixed inset-0 transition-opacity">
                                                                    <div class="absolute inset-0 bg-black opacity-60"></div>
                                                                </div>

                                                                <div class="bg-white rounded-lg text-left overflow-hidden shadow-sm transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full dark:bg-gray-800"
                                                                    role="dialog" aria-modal="true"
                                                                    aria-labelledby="modal-headline">
                                                                    <div class="p-6">
                                                                        <h3 class="text-lg font-semibold mb-4 dark:text-white">
                                                                            Error
                                                                        </h3>
                                                                        <p class="dark:text-gray-300">{{ session('error') }}</p>
                                                                        <div class="mt-4 flex justify-end">
                                                                            <button wire:click="$set('confirmingDelete', false)"
                                                                                class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg mr-2 dark:bg-gray-600 dark:hover:bg-gray-700">
                                                                                Aceptar
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @elseif ($confirmingDelete)
                                                            <div
                                                                class="fixed z-50 inset-0 flex items-center justify-center overflow-y-auto ease-out duration-400">
                                                                <div class="fixed inset-0 transition-opacity">
                                                                    <div class="absolute inset-0 bg-gray-800 opacity-60"></div>
                                                                </div>

                                                                <div class="bg-white rounded-lg text-left overflow-hidden shadow-sm transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full dark:bg-gray-800"
                                                                    role="dialog" aria-modal="true"
                                                                    aria-labelledby="modal-headline">
                                                                    <div class="p-6">
                                                                        <h3 class="text-lg font-semibold mb-4 dark:text-white">
                                                                            Confirmación de Eliminación</h3>
                                                                        <p class="dark:text-gray-300">¿Estás seguro de que
                                                                            deseas
                                                                            eliminar esta publicación? Esta acción no se puede
                                                                            deshacer.</p>
                                                                        <div class="mt-4 flex justify-end">
                                                                            <button wire:click="$set('confirmingDelete', false)"
                                                                                class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg mr-2 dark:bg-gray-600 dark:hover:bg-gray-700">
                                                                                Cancelar
                                                                            </button>
                                                                            <button wire:click="delete"
                                                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg dark:bg-red-600 dark:hover:bg-red-700">
                                                                                Eliminar
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="text-xs text-gray-500 dark:text-gray-400">
                                                            {{ $publicacion->created_at->diffForHumans() }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <p
                                                    class="pl-1 mt-4 mb-2 text-base width-auto font-medium dark:text-white flex-shrink">
                                                    {{ $publicacion->descripcion }}
                                                </p>
                                                @if($publicacion->foto)
                                                    <img src="{{ asset('storage/' . $publicacion->foto) }}"
                                                        class="cursor-pointer transition rounded-lg duration-300 ease-in-out w-full h-full object-cover"
                                                        data-modal-target="imagenModal{{ $publicacion->id }}"
                                                        data-modal-toggle="imagenModal{{ $publicacion->id }}">
                                                @endif

                                                <!-- Modal de Flowbite para ampliar la imagen -->
                                                <div id="imagenModal{{ $publicacion->id }}" tabindex="-1" aria-hidden="true"
                                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <!-- Fondo opaco -->
                                                    <div class="fixed inset-0 bg-black opacity-60"></div>
                                                    <div class="relative w-full max-w-2xl max-h-full">
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <button type="button"
                                                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                data-modal-hide="imagenModal{{ $publicacion->id }}">
                                                                ✕
                                                            </button>
                                                            <div class="p-5 text-center">
                                                                @if($publicacion->foto)
                                                                    <img src="{{ asset('storage/' . $publicacion->foto) }}"
                                                                        class="cursor-pointer transition rounded-lg duration-300 ease-in-out w-full h-full object-cover"
                                                                        data-modal-target="imagenModal{{ $publicacion->id }}"
                                                                        data-modal-toggle="imagenModal{{ $publicacion->id }}">
                                                                @endif
                                                            </div>
                                                            <div class="p-4">
                                                                <form
                                                                    wire:submit.prevent="addComentario({{ $publicacion->id }})">
                                                                    <textarea wire:model="comentario"
                                                                        class="w-full p-2 border rounded-lg dark:bg-gray-600 dark:border-gray-500 dark:text-white"
                                                                        placeholder="Escribe un comentario..."></textarea>
                                                                    <button type="submit"
                                                                        class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-lg dark:bg-blue-600">Comentar</button>
                                                                </form>
                                                                <ul class="mt-4">
                                                                    @foreach($publicacion->comentarios as $comentario)
                                                                        <li class="border-b py-2 dark:border-gray-600">
                                                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                                                {{ $comentario->user->nombre }}:
                                                                            </p>
                                                                            <p class="dark:text-white">
                                                                                {{ $comentario->contenido }}
                                                                            </p>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="dark:border-gray-600 border-gray-200 border-t flex items-center py-2.5 mt-4 pl-16">
                                                    <div data-modal-target="imagenModal{{ $publicacion->id }}"
                                                        data-modal-toggle="imagenModal{{ $publicacion->id }}"
                                                        class="flex-1 flex items-center cursor-pointer text-xs dark:text-gray-400 hover:text-yellow-400 dark:hover:text-yellow-400 transition duration-350 ease-in-out">
                                                        <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                            <g>
                                                                <path
                                                                    d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-2">{{ $publicacion->comentarios->count() }}</span>
                                                    </div>
                                                    <div
                                                        class="flex-1 flex items-center cursor-pointer text-xs dark:text-gray-400 dark:hover:text-green-400 hover:text-green-400 transition duration-350 ease-in-out">
                                                        <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                            <g>
                                                                <path
                                                                    d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        14 k
                                                    </div>
                                                    <div wire:click="like({{ $publicacion->id }})"
                                                        class="flex-1 flex items-center cursor-pointer dark:text-gray-400 hover:text-red-600 text-xs transition duration-350 ease-in-out">
                                                        @if(in_array($publicacion->id, $likes))
                                                            <svg class="w-6 h-6 dark:text-red-600 text-red-600"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                                            </svg>
                                                            <span
                                                                class="ml-2 text-red-600">{{ $publicacion->likes->where('meGusta', true)->count() }}</span>
                                                        @else
                                                            <svg class="w-6 h-6 dark:text-gray-400 dark:hover:text-red-600 hover:text-red-600"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" fill="none" stroke="currentColor" stroke-width="2"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                                            </svg>
                                                            <span
                                                                class="ml-2">{{ $publicacion->likes->where('meGusta', true)->count() }}</span>
                                                        @endif

                                                    </div>
                                                    <div
                                                        class="flex-1 flex items-center cursor-pointer text-xs dark:text-gray-400 dark:hover:text-yellow-400 hover:text-yellow-400  transition duration-350 ease-in-out">
                                                        <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                            <g>
                                                                <path
                                                                    d="M17.53 7.47l-5-5c-.293-.293-.768-.293-1.06 0l-5 5c-.294.293-.294.768 0 1.06s.767.294 1.06 0l3.72-3.72V15c0 .414.336.75.75.75s.75-.336.75-.75V4.81l3.72 3.72c.146.147.338.22.53.22s.384-.072.53-.22c.293-.293.293-.767 0-1.06z">
                                                                </path>
                                                                <path
                                                                    d="M19.708 21.944H4.292C3.028 21.944 2 20.916 2 19.652V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 .437.355.792.792.792h15.416c.437 0 .792-.355.792-.792V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 1.264-1.028 2.292-2.292 2.292z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                @if ($publicacion->foto)
                                                    <div
                                                        class="flex items-center dark:border-gray-600 border-gray-200 border-t py-2">
                                                        @if ($userperfil->profile_photo_path)
                                                            <img class="w-8 h-8 me-2 object-cover rounded-full"
                                                                src="/storage/{{$userperfil->profile_photo_path }}" alt="">
                                                        @else 



                                                            <img class="w-8 h-8 me-2 object-cover rounded-full"
                                                                src="https://ui-avatars.com/api/?name={{ $userperfil->name }}&amp;color=000&amp;background=facc15">
                                                        @endif
                                                        <div data-modal-target="imagenModal{{ $publicacion->id }}"
                                                            data-modal-toggle="imagenModal{{ $publicacion->id }}"
                                                            class="dark:bg-white-800 cursor-text hover:bg-gray-200 dark:hover:bg-gray-600 bg-gray-100 dark:bg-gray-700 p-2 w-full rounded-full">
                                                            <span class="font-medium ml-2 text-gray-600 dark:text-white">Escribe
                                                                un
                                                                comentario...</span>
                                                        </div>
                                                    </div>
                                                @endif
                                            </article>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <aside class="w-2/5 h-12 -top-[460px] sticky">
                                <!--Aside menu (right side)-->
                                <div style="max-width:380px;">
                                    <div class="overflow-y-auto">
                                        <div class="relative text-gray-400 w-full mt-3 py-1 px-4">
                                            <button type="submit" class="absolute ml-4 mt-3 mr-4">
                                                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                    x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                                    style="enable-background:new 0 0 56.966 56.966;"
                                                    xml:space="preserve" width="512px" height="512px">
                                                    <path
                                                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <input name="buscar" wire:model.live="search" type="text"
                                                id="table-search-users"
                                                placeholder="Buscar en los eventos de {{$userperfil->nombre}} {{$userperfil->apellido}}"
                                                class="h-10 px-10 pr-5 w-full text-sm text-gray-700 dark:text-gray-200 
                                        bg-gray-100 dark:bg-gray-700 placeholder-gray-500 dark:placeholder-gray-400 
                                        focus:outline-none focus:ring-2 focus:ring-yellow-500 
                                        rounded-lg border border-gray-300 dark:border-gray-600 shadow-sm">
                                        </div>
                                        <!--trending tweet section-->
                                        <div
                                            class="max-w-sm rounded-lg bg-white dark:bg-gray-800 p-3 dark:bg-dim-700 bg-dim-700 overflow-hidden shadow-sm m-4">
                                            <h2 class="mb-0 text-xl font-bold dark:text-white">Eventos</h2>
                                            <p class="w-48 text-xs dark:text-gray-400 mb-2">{{$eventosCount}} Eventos
                                            </p>
                                            <div class="grid grid-cols-3 gap-1">
                                                @foreach($Eventos as $evento) 
                                                    <div data-popover-target="popover-user-profile-{{ $evento->id }}"
                                                        class="max-w-sm truncate dark:text-white bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                                        <a href="{{ route('reporteEvento', ['evento' => $evento->id]) }}"
                                                            target="_blank">
                                                            <img class="rounded-t-lg w-full h-24 object-cover"
                                                                src="{{ asset('storage/' . $evento->logo) }}"
                                                                alt="Logo del Evento" />
                                                        </a>
                                                        <span class="p-1">{{ $evento->nombreevento }}</span>
                                                    </div>
                                                    <div data-popover id="popover-user-profile-{{ $evento->id }}"
                                                        role="tooltip"
                                                        class="absolute z-50 invisible shadow-2xl inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                                                        <div class="p-3">
                                                            <div class="flex items-center justify-between mb-2">
                                                                <img class="w-60 h-32 me-4 object-cover rounded-lg"
                                                                    src="/storage/{{$evento->logo }}" alt="">
                                                            </div>
                                                            <p
                                                                class="text-base font-semibold leading-none text-gray-900 dark:text-white">
                                                                <a href="#">{{ $evento->nombreevento }}</a>
                                                            </p>
                                                            <p class="mb-4 text-sm line-clamp-4 text-ellipsis">
                                                                {{ $evento->descripcion }}</p>
                                                            <ul class="flex text-sm">
                                                                <li class="me-2">
                                                                    <a href="#" class="py-1 hover:underline">
                                                                        <span
                                                                            class="font-semibold text-gray-900 dark:text-white">{{ $evento->inscripciones->count() }}</span>
                                                                        <span>Inscritos</span>
                                                                    </a>
                                                                </li>
                                                                @if($evento->estado === 'Pagado')
                                                                    <li class="me-2">
                                                                        <a href="{{ route('reporteEvento', ['evento' => $evento->id]) }}"
                                                                            class="hover:underline">
                                                                            <div>
                                                                                <button type="button"
                                                                                    class="text-white -mt-2.5 bg-yellow-500 hover:bg-yellow-600 focus:ring-4 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-yellow-500 dark:hover:bg-yellow-600">Inscribirse</button>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                        <div data-popper-arrow></div>
                                                    </div>

                                                @endforeach
                                            </div>

                                        </div>
                                        <!--Personas seguidas/seguidos-->
                                        <div
                                            class=" max-w-md mx-4 p-2 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-4 dark:bg-gray-800 dark:border-gray-700">
                                            <div class="flex items-center justify-between mb-4">
                                                <h5
                                                    class="text-xl font-bold leading-none text-gray-900 dark:text-white">
                                                    Amigos</h5>
                                                <a href="#"
                                                    class="text-sm font-medium text-yellow-500 hover:underline dark:text-yellow-500">
                                                    Ver todos
                                                </a>

                                            </div>
                                            <div class="relative text-gray-400 w-full mt-2">
                                                <button type="submit" class="absolute ml-4 mt-3 mr-4">
                                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                        id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                                        style="enable-background:new 0 0 56.966 56.966;"
                                                        xml:space="preserve" width="512px" height="512px">
                                                        <path
                                                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                                                        </path>
                                                    </svg>
                                                </button>

                                                <input name="buscar" wire:model.live="search" type="text"
                                                    id="table-search-users" placeholder="Buscar amigos..." class="h-10 px-10 pr-5 w-full text-sm text-gray-700 dark:text-gray-200 
                                        bg-gray-100 dark:bg-gray-700 placeholder-gray-500 dark:placeholder-gray-400 
                                        focus:outline-none focus:ring-2 focus:ring-yellow-500 
                                        rounded-lg border border-gray-300 dark:border-gray-600 shadow-sm">
                                            </div>
                                            <div class="flow-root">
                                                <ul role="list">
                                                    <li class="pt-1 sm:pt-2">
                                                        <div class="flex items-center">
                                                            <div class="relative">
                                                                <img class="w-8 h-8 rounded-full"
                                                                    src="/storage/{{$userperfil->profile_photo_path }}"
                                                                    alt="">
                                                                <span
                                                                    class="bottom-0 left-6 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                            </div>
                                                            <div class="flex-1 min-w-0 ms-2">
                                                                <p
                                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                    {{ $userperfil->nombre }}
                                                                    {{ $userperfil->apellido }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pt-1 sm:pt-2">
                                                        <div class="flex items-center">
                                                            <div class="relative">
                                                                <img class="w-8 h-8 rounded-full"
                                                                    src="/storage/{{$userperfil->profile_photo_path }}"
                                                                    alt="">
                                                                <span
                                                                    class="bottom-0 left-6 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                            </div>
                                                            <div class="flex-1 min-w-0 ms-2">
                                                                <p
                                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                    {{ $userperfil->nombre }}
                                                                    {{ $userperfil->apellido }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pt-1 sm:pt-2">
                                                        <div class="flex items-center">
                                                            <div class="relative">
                                                                <img class="w-8 h-8 rounded-full"
                                                                    src="/storage/{{$userperfil->profile_photo_path }}"
                                                                    alt="">
                                                                <span
                                                                    class="bottom-0 left-6 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                            </div>
                                                            <div class="flex-1 min-w-0 ms-2">
                                                                <p
                                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                    {{ $userperfil->nombre }}
                                                                    {{ $userperfil->apellido }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pt-1 sm:pt-2">
                                                        <div class="flex items-center">
                                                            <div class="relative">
                                                                <img class="w-8 h-8 rounded-full"
                                                                    src="/storage/{{$userperfil->profile_photo_path }}"
                                                                    alt="">
                                                                <span
                                                                    class="bottom-0 left-6 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                            </div>
                                                            <div class="flex-1 min-w-0 ms-2">
                                                                <p
                                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                    {{ $userperfil->nombre }}
                                                                    {{ $userperfil->apellido }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pt-1 sm:pt-2">
                                                        <div class="flex items-center">
                                                            <div class="relative">
                                                                <img class="w-8 h-8 rounded-full"
                                                                    src="/storage/{{$userperfil->profile_photo_path }}"
                                                                    alt="">
                                                                <span
                                                                    class="bottom-0 left-6 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                            </div>
                                                            <div class="flex-1 min-w-0 ms-2">
                                                                <p
                                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                    {{ $userperfil->nombre }}
                                                                    {{ $userperfil->apellido }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pt-1 sm:pt-2">
                                                        <div class="flex items-center">
                                                            <div class="relative">
                                                                <img class="w-8 h-8 rounded-full"
                                                                    src="/storage/{{$userperfil->profile_photo_path }}"
                                                                    alt="">
                                                                <span
                                                                    class="bottom-0 left-6 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                            </div>
                                                            <div class="flex-1 min-w-0 ms-2">
                                                                <p
                                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                    {{ $userperfil->nombre }}
                                                                    {{ $userperfil->apellido }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pt-1 sm:pt-2">
                                                        <div class="flex items-center">
                                                            <div class="relative">
                                                                <img class="w-8 h-8 rounded-full"
                                                                    src="/storage/{{$userperfil->profile_photo_path }}"
                                                                    alt="">
                                                                <span
                                                                    class="bottom-0 left-6 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                            </div>
                                                            <div class="flex-1 min-w-0 ms-2">
                                                                <p
                                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                    {{ $userperfil->nombre }}
                                                                    {{ $userperfil->apellido }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pt-1 sm:pt-2">
                                                        <div class="flex items-center">
                                                            <div class="relative">
                                                                <img class="w-8 h-8 rounded-full"
                                                                    src="/storage/{{$userperfil->profile_photo_path }}"
                                                                    alt="">
                                                                <span
                                                                    class="bottom-0 left-6 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                            </div>
                                                            <div class="flex-1 min-w-0 ms-2">
                                                                <p
                                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                    {{ $userperfil->nombre }}
                                                                    {{ $userperfil->apellido }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!--people suggetion to follow section-->
                                        <div
                                            class="max-w-sm rounded-lg bg-white dark:bg-gray-800 overflow-hidden shadow-sm m-4 border border-gray-200 dark:border-gray-700">
                                            <!-- Header -->
                                            <div class="p-4">
                                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Who to
                                                    Follow</h2>
                                            </div>

                                            <hr class="border-gray-300 dark:border-gray-600">

                                            <!-- User Item Template -->
                                            <div
                                                class="flex items-center justify-between p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                <div class="flex items-center">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                                        alt="Sonali Hirave Profile">
                                                    <div class="ml-3">
                                                        <p class="text-base font-medium text-gray-900 dark:text-white">
                                                            Sonali Hirave</p>
                                                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                                            @ShonaDesign</p>
                                                    </div>
                                                </div>
                                                <button
                                                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-4 rounded-full transition duration-300">
                                                    Follow
                                                </button>
                                            </div>

                                            <hr class="border-gray-300 dark:border-gray-600">

                                            <!-- Second User (duplicate the structure for more users) -->
                                            <div
                                                class="flex items-center justify-between p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                <div class="flex items-center">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                                        alt="Sonali Hirave Profile">
                                                    <div class="ml-3">
                                                        <p class="text-base font-medium text-gray-900 dark:text-white">
                                                            Sonali Hirave</p>
                                                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                                            @ShonaDesign</p>
                                                    </div>
                                                </div>
                                                <button
                                                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-4 rounded-full transition duration-300">
                                                    Follow
                                                </button>
                                            </div>

                                            <hr class="border-gray-300 dark:border-gray-600">

                                            <!-- Show More -->
                                            <div
                                                class="p-4 text-center cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                <h2 class="font-bold text-yellow-500 hover:underline">Show more</h2>
                                            </div>
                                        </div>
                                        <div class="flow-root m-6">
                                            <div class="flex-1">
                                                <a href="#">
                                                    <p class="text-sm leading-6 font-medium text-gray-500">Terms Privacy
                                                        Policy Cookies Imprint Ads info
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="flex-2">
                                                <p class="text-sm leading-6 font-medium text-gray-600"> © 2020 Twitter,
                                                    Inc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>

                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-100 dark:bg-gray-900" id="styled-dashboard"
                        role="tabpanel" aria-labelledby="dashboard-tab">
                        <div>
                            <div class="content-wrapper">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-white mb-2">
                                    Eventos Disponibles
                                </h2>
                                @if($Eventos->isEmpty())
                                    <div class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-500 dark:border-yellow-800"
                                        role="alert">
                                        <div class="flex items-center">
                                            <svg class="flex-shrink-0 w-4 h-4 me-2" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
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
                                                                    <div
                                                                        class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-4 lg:mt-8 lg:grid-cols-3 lg:max-w-full">
                                                                        @foreach($Eventos as $evento)
                                                                                                                <div
                                                                                                                    class="flex flex-col overflow-hidden bg-white dark:bg-gray-800 transform transition duration-300 hover:scale-105 rounded-xl shadow-xl">
                                                                                                                    <div class="flex flex-col justify-between flex-1">
                                                                                                                        <div class="relative">
                                                                                                                            <div class="block aspect-w-4 aspect-h-3">
                                                                                                                                <img class="object-cover w-full h-56"
                                                                                                                                    src="{{ asset('storage/' . $evento->logo) }}"
                                                                                                                                    alt="Arte del evento" />
                                                                                                                            </div>

                                                                                                                            <div class="absolute top-4 left-4">
                                                                                                                                <span
                                                                                                                                    class="px-4 py-2 text-xs font-semibold tracking-widest text-yellow-900 uppercase bg-yellow-500 dark:bg-yellow-900 dark:text-yellow-300 rounded-full">
                                                                                                                                    {{$evento->modalidad->modalidad}}
                                                                                                                                </span>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        @php
                                                                                                                            $inscripcion = Auth::user()->inscripciones()->where('IdEvento', $evento->id)->first();
                                                                                                                            $estadoInscripcion = $inscripcion ? $inscripcion->Status : null;
                                                                                                                            $yaInscrito = $estadoInscripcion === 'Inscrito';
                                                                                                                        @endphp
                                                                                                                        <div class="p-5">
                                                                                                                            @if ($evento->estado === 'Pagado')
                                                                                                                                <span
                                                                                                                                    class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full {{ $estadoInscripcion === 'Inscrito' ? 'text-green-600 bg-green-100 dark:bg-green-900 dark:text-green-300' : 'text-red-600 bg-red-100' }}">
                                                                                                                                    {{ $estadoInscripcion ?? 'No inscrito' }}
                                                                                                                                </span>
                                                                                                                            @endif

                                                                                                                            @if ($estadoInscripcion === 'Inscrito' || $evento->estado === 'Gratis')
                                                                                                                                <a href="{{ route('gafete', ['evento' => $evento->id]) }}">
                                                                                                                                    <span
                                                                                                                                        class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-yellow-500 bg-yellow-100 dark:bg-yellow-900 dark:text-yellow-300">Gafete</span>
                                                                                                                                </a>
                                                                                                                            @endif
                                                                                                                            <span
                                                                                                                                class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-yellow-500 bg-yellow-100 dark:bg-yellow-900 dark:text-yellow-300">{{$evento->estado}}</span>
                                                                                                                            <span
                                                                                                                                class="block mt-4 text-sm font-semibold tracking-widest text-gray-500 dark:text-gray-400">
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
                                                                                                                                {{$diaSemanaEsp}},
                                                                                                                                {{ \Carbon\Carbon::parse($evento->fechainicio)->format('d \d\e F \d\e Y') }}
                                                                                                                            </span>
                                                                                                                            <p class="text-2xl font-semibold">
                                                                                                                                <a href="{{($evento->estado === 'Pagado' && !$yaInscrito)
                                                                                ? route('subir-comprobante', ['evento' => $evento->id])
                                                                                : route('reporteEvento', ['evento' => $evento->id]) }}"
                                                                                                                                    class="text-black dark:text-gray-300">{{$evento->nombreevento}}
                                                                                                                                </a>
                                                                                                                            </p>
                                                                                                                            <p
                                                                                                                                class="mt-2 text-base leading-relaxed text-gray-600 dark:text-gray-400 truncate">
                                                                                                                                {{$evento->descripcion}}
                                                                                                                            </p>
                                                                                                                        </div>

                                                                                                                        <div class="border-t border-gray-200 dark:border-gray-700">
                                                                                                                            <div class="flex">
                                                                                                                                <div class="flex items-center flex-1 pl-6 pr-1 py-5 w-16">
                                                                                                                                    <button
                                                                                                                                        data-popover-target="popover-company-profile-{{$evento->id}}"
                                                                                                                                        type="button">
                                                                                                                                        <a href="{{route('muro', ['userperfil' => $evento->usuario->id])}}"
                                                                                                                                            class="hover:underline">
                                                                                                                                            <img class="object-cover w-9 h-9 rounded-full"
                                                                                                                                                src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/3/avatar-3.jpg"
                                                                                                                                                alt="" /></a>
                                                                                                                                    </button>
                                                                                                                                    <span
                                                                                                                                        class="flex-1 block min-w-0 ml-3 text-base font-semibold text-gray-900 dark:text-gray-300 truncate">
                                                                                                                                        {{ $evento->usuario->nombre }}
                                                                                                                                        {{ $evento->usuario->apellido }}
                                                                                                                                        <p class="fecha-creacion font-medium">
                                                                                                                                            {{ $evento->created_at->diffForHumans() }}
                                                                                                                                        </p>
                                                                                                                                    </span>
                                                                                                                                    <div data-popover
                                                                                                                                        id="popover-company-profile-{{$evento->id}}"
                                                                                                                                        role="tooltip"
                                                                                                                                        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-80 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                                                                                                                                        <div class="p-3">
                                                                                                                                            <div class="flex">
                                                                                                                                                <div class="me-3 shrink-0">
                                                                                                                                                    <a href="#"
                                                                                                                                                        class="block p-2 bg-gray-100 rounded-lg dark:bg-gray-700">
                                                                                                                                                        <img class="w-8 h-8 rounded-full"
                                                                                                                                                            src="https://flowbite.com/docs/images/logo.svg"
                                                                                                                                                            alt="Flowbite logo">
                                                                                                                                                    </a>
                                                                                                                                                </div>
                                                                                                                                                <div>
                                                                                                                                                    <p
                                                                                                                                                        class="mb-1 text-base font-semibold leading-none text-gray-900 dark:text-white">
                                                                                                                                                        <a href="{{route('muro', ['userperfil' => $evento->usuario->id])}}"
                                                                                                                                                            class="hover:underline">
                                                                                                                                                            {{ $evento->usuario->nombre }}
                                                                                                                                                            {{ $evento->usuario->apellido }}</a>
                                                                                                                                                    </p>
                                                                                                                                                    <p class="mb-3 text-sm font-normal">
                                                                                                                                                        {{ $evento->usuario->name }}
                                                                                                                                                    </p>
                                                                                                                                                    <p class="mb-4 text-sm">
                                                                                                                                                        {{ $evento->usuario->descripcion }}
                                                                                                                                                    </p>
                                                                                                                                                    <ul class="text-sm">
                                                                                                                                                        <li class="flex items-center mb-2">
                                                                                                                                                            <span
                                                                                                                                                                class="me-2 font-semibold text-gray-400">
                                                                                                                                                                <svg class="w-3.5 h-3.5"
                                                                                                                                                                    aria-hidden="true"
                                                                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                                                                    fill="none"
                                                                                                                                                                    viewBox="0 0 21 20">
                                                                                                                                                                    <path
                                                                                                                                                                        stroke="currentColor"
                                                                                                                                                                        stroke-linecap="round"
                                                                                                                                                                        stroke-linejoin="round"
                                                                                                                                                                        stroke-width="2"
                                                                                                                                                                        d="M6.487 1.746c0 4.192 3.592 1.66 4.592 5.754 0 .828 1 1.5 2 1.5s2-.672 2-1.5a1.5 1.5 0 0 1 1.5-1.5h1.5m-16.02.471c4.02 2.248 1.776 4.216 4.878 5.645C10.18 13.61 9 19 9 19m9.366-6h-2.287a3 3 0 0 0-3 3v2m6-8a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                                                                                                                                </svg>
                                                                                                                                                            </span>
                                                                                                                                                            <a href="#"
                                                                                                                                                                class="text-yellow-500 dark:text-yellow-600 hover:underline">{{ $evento->usuario->pagina }}</a>
                                                                                                                                                        </li>
                                                                                                                                                        <li class="flex items-start mb-2">
                                                                                                                                                            <span
                                                                                                                                                                class="me-2 font-semibold text-gray-400">
                                                                                                                                                                <svg class="w-3.5 h-3.5"
                                                                                                                                                                    aria-hidden="true"
                                                                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                                                                    fill="currentColor"
                                                                                                                                                                    viewBox="0 0 20 18">
                                                                                                                                                                    <path
                                                                                                                                                                        d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
                                                                                                                                                                </svg>
                                                                                                                                                            </span>
                                                                                                                                                            <span class="-mt-1">4,567,346
                                                                                                                                                                people like this including 5
                                                                                                                                                                of your friends</span>
                                                                                                                                                        </li>
                                                                                                                                                    </ul>
                                                                                                                                                    <div
                                                                                                                                                        class="flex mb-3 -space-x-3 rtl:space-x-reverse">
                                                                                                                                                        <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800"
                                                                                                                                                            src="/storage/{{$userperfil->profile_photo_path }}"
                                                                                                                                                            alt="">
                                                                                                                                                        <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800"
                                                                                                                                                            src="/storage/{{$userperfil->profile_photo_path }}"
                                                                                                                                                            alt="">
                                                                                                                                                        <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800"
                                                                                                                                                            src="/storage/{{$userperfil->profile_photo_path }}"
                                                                                                                                                            alt="">
                                                                                                                                                        <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-400 border-2 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                                                                                                                                            href="#">+3</a>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="flex">
                                                                                                                                                        <button type="button"
                                                                                                                                                            class="inline-flex items-center justify-center w-full px-5 py-2 me-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-yellow-600 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><svg
                                                                                                                                                                class="w-3.5 h-3.5 me-2.5"
                                                                                                                                                                aria-hidden="true"
                                                                                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                                                                                fill="currentColor"
                                                                                                                                                                viewBox="0 0 18 18">
                                                                                                                                                                <path
                                                                                                                                                                    d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z" />
                                                                                                                                                            </svg>Seguir</button>
                                                                                                                                                        <button id="dropdown-button"
                                                                                                                                                            data-dropdown-toggle="dropdown-menu-{{$evento->id}}"
                                                                                                                                                            data-dropdown-placement="right"
                                                                                                                                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shrink-0 focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                                                                                                                                            type="button">
                                                                                                                                                            <svg class="w-3.5 h-3.5"
                                                                                                                                                                aria-hidden="true"
                                                                                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                                                                                fill="currentColor"
                                                                                                                                                                viewBox="0 0 16 3">
                                                                                                                                                                <path
                                                                                                                                                                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                                                                                                                            </svg>
                                                                                                                                                        </button>
                                                                                                                                                    </div>
                                                                                                                                                    <div id="dropdown-menu-{{$evento->id}}"
                                                                                                                                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                                                                                                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                                                                                                                            aria-labelledby="dropdown-button">
                                                                                                                                                            <li>
                                                                                                                                                                <a href="#"
                                                                                                                                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report
                                                                                                                                                                    this page</a>
                                                                                                                                                            </li>
                                                                                                                                                            <li>
                                                                                                                                                                <a href="#"
                                                                                                                                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add
                                                                                                                                                                    to favorites</a>
                                                                                                                                                            </li>
                                                                                                                                                            <li>
                                                                                                                                                                <a href="#"
                                                                                                                                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Block
                                                                                                                                                                    this page</a>
                                                                                                                                                            </li>
                                                                                                                                                            <li>
                                                                                                                                                                <a href="#"
                                                                                                                                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Invite
                                                                                                                                                                    users</a>
                                                                                                                                                            </li>
                                                                                                                                                        </ul>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div data-popper-arrow></div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <a href="{{ route('reporteEvento', ['evento' => $evento->id]) }}"
                                                                                                                                    class="inline-flex items-center flex-shrink-0 px-4 py-5 text-base font-semibold transition-all duration-200 bg-white dark:bg-gray-800 border-l border-gray-200 dark:border-gray-700 hover:bg-yellow-500 dark:hover:bg-yellow-600 text-gray-800 dark:text-gray-300 hover:text-white">
                                                                                                                                    Evento
                                                                                                                                    <svg class="w-5 h-5 ml-2"
                                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                                        viewBox="0 0 20 20" fill="currentColor">
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
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings"
                            role="tabpanel" aria-labelledby="settings-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the
                                <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated
                                    content</strong>. Clicking
                                another tab will toggle the visibility of this one for the next. The tab JavaScript
                                swaps classes to control
                                the content visibility and styling.
                            </p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts"
                            role="tabpanel" aria-labelledby="contacts-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the
                                <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                                    content</strong>. Clicking
                                another tab will toggle the visibility of this one for the next. The tab JavaScript
                                swaps classes to control
                                the content visibility and styling.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Large Modal -->
    <div id="extralarge-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <!-- Fondo opaco -->
        <div class="fixed inset-0 bg-black opacity-60"></div>
        <div class="relative w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t-lg dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        {{$userperfil->nombre}} {{$userperfil->apellido}}
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="extralarge-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="md:flex">
                        <ul id="default-tab" data-tabs-toggle="#default-tab-content"
                            data-tabs-active-classes="text-yellow-600 hover:text-yellow-600 dark:text-yellow-500 dark:hover:text-yellow-500 border-yellow-600 dark:border-yellow-500"
                            data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                            role="tablist"
                            class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
                            <li>
                                <button id="info-tab" data-tabs-target="#info" type="button" role="tab"
                                    aria-controls="info" aria-selected="false"
                                    class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white"
                                    aria-current="page">
                                    <svg class="w-6 h-6 me-2  text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Editar
                                </button>
                            </li>
                            <li>
                                <button id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="false"
                                    class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-5 h-5 me-2  text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Perfil
                                </button>
                            </li>
                            <li>
                                <button id="portada-tab" data-tabs-target="#portada" type="button" role="tab"
                                    aria-controls="portada" aria-selected="false"
                                    class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-5 h-5 me-2  text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Portada
                                </button>
                            </li>
                        </ul>
                        <div id="default-tab-content">
                            <div id="info" role="tabpanel" aria-labelledby="info-tab"
                                class="hidden p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                                    Editar información "Nombre y usuario"</h3>


                                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center"
                                        id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content"
                                        data-tabs-active-classes="text-yellow-600 hover:text-yellow-600 dark:text-yellow-500 dark:hover:text-yellow-500 border-yellow-600 dark:border-yellow-500"
                                        data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                                        role="tablist">
                                        <li class="me-2" role="presentation">
                                            <button
                                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                                id="settings-styled-tab" data-tabs-target="#styled-settings"
                                                type="button" role="tab" aria-controls="settings"
                                                aria-selected="false">Nombre y usuario.</button>
                                        </li>
                                        <li role="presentation">
                                            <button
                                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                                id="contacts-styled-tab" data-tabs-target="#styled-contacts"
                                                type="button" role="tab" aria-controls="contacts"
                                                aria-selected="false">Redes sociales</button>
                                        </li>
                                    </ul>
                                </div>
                                <div id="default-styled-tab-content">
                                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings"
                                        role="tabpanel" aria-labelledby="settings-tab">


                                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                            @livewire('profile.update-profile-information-form')
                                        @endif


                                    </div>
                                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts"
                                        role="tabpanel" aria-labelledby="contacts-tab">

                                        <form class="max-w-sm mx-auto">
                                            <label for="website-admin"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mi
                                                sitio</label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                    <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z"
                                                            clip-rule="evenodd" />
                                                    </svg>


                                                </span>
                                                <input type="text" id="website-admin"
                                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-yellow-500 focus:border-yellow-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="Escribe la url de tu sitio">
                                            </div>
                                            <label for="website-admin"
                                                class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Facebook</label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                    <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </span>
                                                <input type="text" id="website-admin"
                                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-yellow-500 focus:border-yellow-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="Facebook">
                                            </div>

                                            <label for="website-admin"
                                                class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Instagram</label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                    <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="none" viewBox="0 0 24 24">
                                                        <path fill="currentColor" fill-rule="evenodd"
                                                            d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </span>
                                                <input type="text" id="website-admin"
                                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-yellow-500 focus:border-yellow-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="Instagram">
                                            </div>

                                            <label for="website-admin"
                                                class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Youtube</label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                    <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </span>
                                                <input type="text" id="website-admin"
                                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-yellow-500 focus:border-yellow-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="Youtube">
                                            </div>

                                            <label for="website-admin"
                                                class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Twitter</label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                    <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </span>
                                                <input type="text" id="website-admin"
                                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-yellow-500 focus:border-yellow-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="Twitter">
                                            </div>
                                            <button type="submit"
                                                class="text-white mt-2 bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Guardar</button>
                                        </form>

                                    </div>
                                </div>


                            </div>
                            <div id="profile" role="tabpanel" aria-labelledby="profile-tab"
                                class="hidden p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                                    Cambiar foto de perfil
                                </h3>
                                <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
                                    role="alert">
                                    <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        Su foto de perfil se utilizará en su perfil y en todo el
                                        sitio.
                                    </div>
                                </div>

                                <div class="flex items-center justify-center w-full">
                                    <label for="dropzone-file"
                                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                                <span class="font-semibold">Click to
                                                    upload</span>
                                                or drag and drop
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">
                                                SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                                <button type="submit"
                                    class="text-white mt-2 bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Guardar</button>
                                <button type="submit"
                                    class="text-white mt-2 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Eliminar
                                    mi foto de perfil</button>
                            </div>

                            <div id="portada" role="tabpanel" aria-labelledby="portada-tab"
                                class="hidden p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                                    Cambiar foto de portada
                                </h3>
                                <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
                                    role="alert">
                                    <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        Su foto de portada se utilizará para personalizar el
                                        encabezado de su perfil.
                                    </div>
                                </div>

                                <div class="flex items-center justify-center w-full">
                                    <label for="dropzone-file"
                                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                                <span class="font-semibold">Click to
                                                    upload</span>
                                                or drag and drop
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">
                                                SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                                <button type="submit"
                                    class="text-white mt-2 bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Guardar</button>
                                <button type="submit"
                                    class="text-white mt-2 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Eliminar
                                    mi foto de portada</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b-lg dark:border-gray-600">
                    <button data-modal-hide="extralarge-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-yellow-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        .overflow-y-auto::-webkit-scrollbar,
        .overflow-y-scroll::-webkit-scrollbar,
        .overflow-x-auto::-webkit-scrollbar,
        .overflow-x::-webkit-scrollbar,
        .overflow-x-scroll::-webkit-scrollbar,
        .overflow-y::-webkit-scrollbar,
        body::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .overflow-y-auto,
        .overflow-y-scroll,
        .overflow-x-auto,
        .overflow-x,
        .overflow-x-scroll,
        .overflow-y,
        body {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .bg-dim-700 {
            --bg-opacity: 1;
        }

        svg.paint-icon {
            fill: currentcolor;
        }
    </style>
    <script>
        function autoResize(textarea) {
            textarea.style.height = 'auto';
            textarea.style.height = (textarea.scrollHeight) + 'px';
        }
    </script>
</div>