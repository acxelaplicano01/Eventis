<div>
    <x-layouts.reportes>
        <div class="p-relative h-auto dark:bg-gray-900">
            <div class="flex justify-center">
                <main role="main">
                    <div class="flex" style="width: 990px;">
                        <section class="dark:bg-gray-800 w-3/5 border border-y-0 dark:border-gray-700"
                            style="max-width:600px;">
                            <div>
                                <div class="flex justify-start">
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
                                    <div class="m-2 ">
                                        <h2 class="mb-0 text-xl font-bold dark:text-white">
                                            {{$userperfil->persona->nombre}} {{$userperfil->persona->apellido}}
                                        </h2>
                                        <p class="mb-0 w-48 text-xs dark:text-gray-400">{{$eventosCount}} Eventos</p>
                                    </div>
                                </div>

                                <hr class="dark:border-gray-700">
                            </div>
                            <!-- User card-->
                            <div>
                                <div class="w-full bg-cover bg-no-repeat bg-center"
                                    style="height: 200px; background-image: url(https://azulschool.net/wp-content/uploads/buddypress/members/34880/cover-image/673448942ac49-bp-cover-image.jpg;">
                                    <img class="opacity-0 w-full h-full"
                                        src="https://azulschool.net/wp-content/uploads/buddypress/members/34880/cover-image/673448942ac49-bp-cover-image.jpg"
                                        alt="">
                                </div>
                                <div class="p-4">
                                    <div class="relative flex w-full">
                                        <!-- Avatar -->
                                        <div class="flex flex-1">
                                            <div style="margin-top: -6rem;">
                                                <div style="height:9rem; width:9rem;"
                                                    class="md rounded-full relative avatar">
                                                    <img style="height:9rem; width:9rem;"
                                                        class="md rounded-full relative border-4 border-yellow-500"
                                                        src="https://th.bing.com/th/id/OIP.Ei419o4f5KF2R_fSaMuLYAAAAA?pid=ImgDet&w=179&h=179&c=7&dpr=1,3"
                                                        alt="">
                                                    <div class="absolute"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Follow Button -->
                                        <div class="flex flex-col text-right">
                                            <x-dropdown-link href="{{ route('profile.show') }}" class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  max-w-max border bg-transparent border-yellow-500 text-yellow-500 hover:border-yellow-800 items-center hover:shadow-lg font-bold py-2 px-4 rounded-full mr-0 ml-auto">
                                                {{ __('Editar Perfil') }}
                                            </x-dropdown-link>
                                        </div>
                                    </div>

                                    <!-- Profile info -->
                                    <div class="space-y-1 justify-center w-full mt-3 ml-3">
                                        <!-- User basic-->
                                        <div>
                                            <h2 class="text-xl leading-6 font-bold dark:text-white">
                                                {{$userperfil->persona->nombre}} {{$userperfil->persona->apellido}}
                                            </h2>
                                            <p class="text-sm leading-5 font-medium dark:text-gray-400">@
                                                {{$userperfil->name}}
                                            </p>
                                        </div>
                                        <!-- Description and others -->
                                        <div class="mt-3">
                                            <p class="dark:text-white leading-tight mb-2">Software Engineer / Designer /
                                                Entrepreneur <br>Visit my website to test a working <b>Twitter
                                                    Clone.</b> </p>
                                            <div class="dark:text-gray-400 flex">
                                                <span class="flex mr-2"><svg viewBox="0 0 24 24"
                                                        class="h-5 w-5 paint-icon">
                                                        <g>
                                                            <path
                                                                d="M11.96 14.945c-.067 0-.136-.01-.203-.027-1.13-.318-2.097-.986-2.795-1.932-.832-1.125-1.176-2.508-.968-3.893s.942-2.605 2.068-3.438l3.53-2.608c2.322-1.716 5.61-1.224 7.33 1.1.83 1.127 1.175 2.51.967 3.895s-.943 2.605-2.07 3.438l-1.48 1.094c-.333.246-.804.175-1.05-.158-.246-.334-.176-.804.158-1.05l1.48-1.095c.803-.592 1.327-1.463 1.476-2.45.148-.988-.098-1.975-.69-2.778-1.225-1.656-3.572-2.01-5.23-.784l-3.53 2.608c-.802.593-1.326 1.464-1.475 2.45-.15.99.097 1.975.69 2.778.498.675 1.187 1.15 1.992 1.377.4.114.633.528.52.928-.092.33-.394.547-.722.547z">
                                                            </path>
                                                            <path
                                                                d="M7.27 22.054c-1.61 0-3.197-.735-4.225-2.125-.832-1.127-1.176-2.51-.968-3.894s.943-2.605 2.07-3.438l1.478-1.094c.334-.245.805-.175 1.05.158s.177.804-.157 1.05l-1.48 1.095c-.803.593-1.326 1.464-1.475 2.45-.148.99.097 1.975.69 2.778 1.225 1.657 3.57 2.01 5.23.785l3.528-2.608c1.658-1.225 2.01-3.57.785-5.23-.498-.674-1.187-1.15-1.992-1.376-.4-.113-.633-.527-.52-.927.112-.4.528-.63.926-.522 1.13.318 2.096.986 2.794 1.932 1.717 2.324 1.224 5.612-1.1 7.33l-3.53 2.608c-.933.693-2.023 1.026-3.105 1.026z">
                                                            </path>
                                                        </g>
                                                    </svg> <a href="https://ricardoribeirodev.com/personal/" target="#"
                                                        class="leading-5 ml-1 text-yellow-500">www.RicardoRibeiroDEV.com</a></span>
                                                <span class="flex mr-2"><svg viewBox="0 0 24 24"
                                                        class="h-5 w-5 paint-icon">
                                                        <g>
                                                            <path
                                                                d="M19.708 2H4.292C3.028 2 2 3.028 2 4.292v15.416C2 20.972 3.028 22 4.292 22h15.416C20.972 22 22 20.972 22 19.708V4.292C22 3.028 20.972 2 19.708 2zm.792 17.708c0 .437-.355.792-.792.792H4.292c-.437 0-.792-.355-.792-.792V6.418c0-.437.354-.79.79-.792h15.42c.436 0 .79.355.79.79V19.71z">
                                                            </path>
                                                            <circle cx="7.032" cy="8.75" r="1.285"></circle>
                                                            <circle cx="7.032" cy="13.156" r="1.285"></circle>
                                                            <circle cx="16.968" cy="8.75" r="1.285"></circle>
                                                            <circle cx="16.968" cy="13.156" r="1.285"></circle>
                                                            <circle cx="12" cy="8.75" r="1.285"></circle>
                                                            <circle cx="12" cy="13.156" r="1.285"></circle>
                                                            <circle cx="7.032" cy="17.486" r="1.285"></circle>
                                                            <circle cx="12" cy="17.486" r="1.285"></circle>
                                                        </g>
                                                    </svg> <span class="leading-5 ml-1">Se unió el {{ \Carbon\Carbon::parse($userperfil->created_at)->locale('es')->isoFormat('D [de] MMMM [de] YYYY ') }}</span></span>
                                            </div>
                                        </div>
                                        <div
                                            class="pt-3 flex justify-start items-start w-full divide-x divide-gray-800 divide-solid">
                                            <div class="text-center pr-3"><span
                                                    class="font-bold dark:text-white">520</span><span
                                                    class="dark:text-gray-400">
                                                    Following</span></div>
                                            <div class="text-center px-3"><span class="font-bold dark:text-white">23,4m
                                                </span><span class="dark:text-gray-400"> Followers</span></div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="dark:border-gray-700">
                            </div>
                            <ul class="list-none">
                                <li>
                                    <!--second tweet-->
                                    <article class="transition duration-350 ease-in-out">
                                        <div class="flex flex-shrink-0 p-4 pb-0">
                                            <a href="#" class="flex-shrink-0 group block">
                                                <div class="flex items-center">
                                                    <div>
                                                        <img class="inline-block h-10 w-10 rounded-full"
                                                            src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-base leading-6 font-medium dark:text-white">
                                                            Sonali Hirave
                                                            <span
                                                                class="text-sm leading-5 font-medium dark:text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                                                @ShonaDesign . 16 April
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="pl-16">
                                            <p class="text-base width-auto font-medium dark:text-white flex-shrink">
                                                Day 07 of the challenge <a href="#"
                                                    class="text-yellow-400 hover:text-yellow-300">#100DaysOfCode</a>
                                                I was wondering what I can do with <a href="#"
                                                    class="text-yellow-400 hover:text-yellow-300">#tailwindcss</a>, so
                                                just
                                                started building
                                                Twitter UI using Tailwind and so far it looks so promising. I will post
                                                my code after completion.
                                                [07/100]
                                                <a href="#" class="text-yellow-400 hover:text-yellow-300"> #WomenWhoCode
                                                    #CodeNewbie</a>
                                            </p>

                                            <div class="md:flex-shrink pr-6 pt-3">
                                                <div class="bg-cover bg-no-repeat bg-center rounded-lg w-full h-64"
                                                    style="height: 200px; background-image: url(https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=448&amp;q=80);">
                                                    <img class="opacity-0 w-full h-full"
                                                        src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=448&amp;q=80"
                                                        alt="">
                                                </div>
                                            </div>

                                            <div class="flex items-center py-4">
                                                <div
                                                    class="flex-1 flex items-center cursor-pointer text-xs dark:text-gray-400 hover:text-yellow-400 transition duration-350 ease-in-out">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    12.3 k
                                                </div>
                                                <div
                                                    class="flex-1 flex items-center cursor-pointer text-xs dark:text-gray-400 hover:text-green-400 transition duration-350 ease-in-out">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    14 k
                                                </div>
                                                <div
                                                    class="flex-1 flex items-center cursor-pointer text-xs dark:text-gray-400 hover:text-red-600 transition duration-350 ease-in-out">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    14 k
                                                </div>
                                                <div
                                                    class="flex-1 flex items-center cursor-pointer text-xs dark:text-gray-400 hover:text-yellow-400 transition duration-350 ease-in-out">
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
                                        </div>
                                        <hr class="dark:border-gray-700">
                                    </article>
                                </li>
                            </ul>
                        </section>


                        <aside class="w-2/5 h-12 position-relative">
                            <!--Aside menu (right side)-->
                            <div style="max-width:350px;">
                                <div class="overflow-y-auto fixed  h-screen">
                                    <div class="relative text-gray-400  w-full p-5">
                                        <button type="submit" class="absolute ml-4 mt-3 mr-4">
                                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                                style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                                width="512px" height="512px">
                                                <path
                                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                                                </path>
                                            </svg>
                                        </button>

                                        <input name="buscar" wire:model.live="search" type="text"
                                            id="table-search-users"
                                            placeholder="Buscar en los eventos de {{$userperfil->persona->nombre}} {{$userperfil->persona->apellido}}"
                                            class="h-10 px-10 pr-5 w-full text-sm text-gray-700 dark:text-gray-200 
               bg-gray-100 dark:bg-gray-700 placeholder-gray-500 dark:placeholder-gray-400 
               focus:outline-none focus:ring-2 focus:ring-yellow-500 
               rounded border border-gray-300 dark:border-gray-600 shadow-sm">
                                    </div>
                                    <!--trending tweet section-->
                                    <div
                                        class="max-w-sm rounded-lg dark:bg-dim-700 bg-dim-700 overflow-hidden shadow-lg m-4">
                                        <div class="grid grid-cols-3 gap-1">
                                            @foreach($eventosUsuario as $evento) 
                                                <!-- Imagen 1 -->
                                                <a href="{{ asset(str_replace('public', 'storage', $evento->logo)) }}"
                                                    target="_blank" class="group">
                                                    <div class="w-full h-24 bg-cover bg-no-repeat bg-center rounded-md border border-gray-300 dark:border-gray-700 group-hover:opacity-80 transition duration-300 ease-in-out shadow-sm dark:shadow-md"
                                                        style="background-image: url({{ asset(str_replace('public', 'storage', $evento->logo)) }};">
                                                        @if($evento->logo)
                                                            <img src="{{ asset(str_replace('public', 'storage', $evento->logo)) }}"
                                                                alt="Logo del Evento" class="h-full w-full">
                                                        @else
                                                            Sin foto
                                                        @endif
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!--trending tweet section-->
                                    <div
                                        class="max-w-sm rounded-lg dark:bg-gray-800 overflow-hidden shadow-lg m-4 border border-gray-200 dark:border-gray-700">
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
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">1 · Trending</p>
                                                    <h3 class="font-bold text-gray-900 dark:text-white">#Microsoft363
                                                    </h3>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">5,466 Tweets</p>
                                                </div>
                                                <a href="#" aria-label="More options"
                                                    class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                                                    <svg class="h-5 w-5 text-gray-500 dark:text-gray-300" fill="none"
                                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path d="M19 9l-7 7-7-7"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <!-- Additional trending items (copy the block above and update the content as needed) -->
                                            <div
                                                class="flex justify-between items-center p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                <div>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">2 · Politics ·
                                                        Trending</p>
                                                    <h3 class="font-bold text-gray-900 dark:text-white">#HI-Fashion</h3>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">8,464 Tweets</p>
                                                </div>
                                                <a href="#" aria-label="More options"
                                                    class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                                                    <svg class="h-5 w-5 text-gray-500 dark:text-gray-300" fill="none"
                                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path d="M19 9l-7 7-7-7"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div
                                                class="flex justify-between items-center p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                <div>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">3 · Rock ·
                                                        Trending</p>
                                                    <h3 class="font-bold text-gray-900 dark:text-white">#Ferrari</h3>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">5,586 Tweets</p>
                                                </div>
                                                <a href="#" aria-label="More options"
                                                    class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                                                    <svg class="h-5 w-5 text-gray-500 dark:text-gray-300" fill="none"
                                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path d="M19 9l-7 7-7-7"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div
                                                class="flex justify-between items-center p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                                <div>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">4 · Auto Racing
                                                        · Trending</p>
                                                    <h3 class="font-bold text-gray-900 dark:text-white">#Vettel</h3>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">9,416 Tweets</p>
                                                </div>
                                                <a href="#" aria-label="More options"
                                                    class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                                                    <svg class="h-5 w-5 text-gray-500 dark:text-gray-300" fill="none"
                                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
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
                                        class="max-w-sm rounded-lg  dark:bg-gray-800 overflow-hidden shadow-lg m-4 border border-gray-200 dark:border-gray-700">
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
                                            <p class="text-sm leading-6 font-medium text-gray-600"> © 2020 Twitter, Inc.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </main>

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
    </x-layouts.reportes>
</div>