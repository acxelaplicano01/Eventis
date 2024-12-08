<div>
    <x-layouts.reportes>
        <section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply"
            style="background-image: url('{{ asset(str_replace('public', 'storage', $evento->logo)) }}');">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-36">
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                    {{ $evento->organizador }}
                </p>
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                    {{ $evento->nombreevento }}
                </h1>

                <div class="mb-12">
                    <div class="flex items-center justify-center">
                        <div class="w-20 h-20 -mr-6 overflow-hidden bg-gray-300 rounded-full">
                            <img class="object-cover w-full h-full"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/cta/2/female-avatar-1.jpg"
                                alt="" />
                        </div>

                        <div class="relative overflow-hidden bg-gray-300 border-8 border-yellow-500 rounded-full w-28 h-28">
                            <img class="object-cover w-full h-full"
                                src="{{ asset(str_replace('public', 'storage', $evento->logo)) }}"
                                alt="" />
                        </div>

                        <div class="w-20 h-20 -ml-6 overflow-hidden bg-gray-300 rounded-full">
                            <img class="object-cover w-full h-full"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/cta/2/female-avatar-2.jpg"
                                alt="" />
                        </div>
                    </div>
                    <h2 class="mt-8 text-3xl font-bold leading-tight text-white lg:mt-12 sm:text-4xl lg:text-5xl">
                        Se han inscrito <span class="border-b-8 border-yellow-300"> {{ $evento->inscripciones->count() }}</span> participantes</h2>
                </div>


                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-200 dark:focus:ring-yellow-800">
                        Inscribirse
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Conferencias
                    </a>
                </div>
            </div>
        </section>



        <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-xl mx-auto text-center">
                    <p class="text-sm font-semibold tracking-widest text-yellow-500 uppercase">Este evento es
                        {{$evento->estado}}
                    </p>

                    <h2 class="mt-6 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Acerca del
                        evento</h2>
                </div>

                <div class="grid items-center grid-cols-1 mt-12 gap-y-10 lg:grid-cols-5 sm:mt-20 gap-x-4">
                    <div class="space-y-8 lg:pr-16 xl:pr-24 lg:col-span-2 lg:space-y-12">
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 w-9 h-9 text-green-600 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M18 6h-8m8 4H6m12 4h-8m8 4H6" />
                            </svg>

                            <div class="ml-5">
                                <h3 class="text-xl font-semibold text-black">Descripción</h3>
                                <p class="mt-3 text-base text-gray-600">{{$evento->descripcion}}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg class="flex-shrink-0 w-9 h-9 text-blue-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>

                            <div class="ml-5">
                                <h3 class="text-xl font-semibold text-black">Hora</h3>
                                <p class="mt-3 text-base text-gray-600">
                                    {{ \Carbon\Carbon::parse($evento->fechainicio)->locale('es')->isoFormat('D [de] MMMM [de] YYYY ') }}Hora:
                                    <strong>{{$evento->horainicio}}</strong>
                                </p>
                                <p class="mt-3 text-base text-gray-600">
                                    {{ \Carbon\Carbon::parse($evento->fechafinal)->locale('es')->isoFormat('D [de] MMMM [de] YYYY ') }}Hora:
                                    <strong>{{$evento->horafin}}</strong>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 w-9 h-9 text-red-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                            </svg>

                            <div class="ml-5">
                                <h3 class="text-xl font-semibold text-black">Localidad / Modalidad</h3>
                                <p class="mt-3 text-base text-gray-600">
                                    {{$evento->localidad->localidad}}
                                </p>
                                <p class="mt-3 text-base text-gray-600">
                                    {{$evento->modalidad->modalidad}}
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 w-9 h-9 text-yellow-500 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01" />
                            </svg>

                            <div class="ml-5">
                                <h3 class="text-xl font-semibold text-black">¿Cómo contactar al organizador?</h3>
                                <p class="mt-4 text-base text-gray-700">
                                    Visita nuestro sitio web: <a href="#"
                                        class="text-blue-600 hover:underline">dreamworldwide.net</a>.
                                    Para más detalles, consulta nuestra sección de preguntas frecuentes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="w-full h-[200px] md:h-[450px] ">
                        <div class="fluid-width-video-wrapper" style="padding-top: 36%;"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4019.0807429007573!2d-87.1941431248207!3d13.313927907280377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f703d1a0569519d%3A0x45b3a77ef135ae3a!2sHotel%20Gualiqueme!5e1!3m2!1ses!2shn!4v1731765668105!5m2!1ses!2shn"
                                class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" id="fitvid0">
                            </iframe></div>
                    </div>-->
                    <div class="lg:col-span-3">
                        <img class="w-full rounded-lg shadow-xl"
                            src="{{ asset(str_replace('public', 'storage', $evento->diploma->Plantilla)) }}"
                            alt="Diploma" />
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-gray-800 sm:text-4xl lg:text-5xl">Conferencistas
                        del evento <span class="text-yellow-500">{{$evento->nombreevento}}</span></h2>
                </div>

                <div
                    class="grid max-w-xl grid-cols-1 mx-auto mt-8 text-center lg:max-w-full sm:mt-12 lg:mt-20 lg:grid-cols-3 gap-x-6 xl:gap-x-12 gap-y-6">
                    @foreach ($conferencias as $conferencia)
                        <div class="overflow-hidden bg-white rounded-md shadow">
                            <div class="relative">
                                <!-- Contenido de la tarjeta -->
                                <div
                                    class="absolute text-white m-4 top-0 right-0 flex items-center justify-center bg-yellow-500 rounded-full p-2 w-auto h-7">
                                    {{$conferencia->conferencista->persona->nacionalidad->nombreNacionalidad}}
                                </div>
                            </div>
                            <div class="px-8 py-12">
                                <div class="relative w-52 h-52 mx-auto">
                                    <img class="relative object-cover w-full h-full mx-auto rounded-full"
                                        src="{{ asset(str_replace('public', 'storage', $conferencia->conferencista->foto)) }}"
                                        alt="" />
                                </div>
                                <p class="text-base font-semibold tex-tblack mt-4">
                                    {{ $conferencia->conferencista->persona->nombre }}
                                    {{ $conferencia->conferencista->persona->apellido ?? '' }}
                                </p>
                                <p class="mt-1 text-base text-gray-600">
                                    {{$conferencia->conferencista->titulo}}
                                </p>
                                <blockquote class="mt-5">
                                    <p class="text-lg text-black">“Amet minim mollit non deserunt ullam co est sit aliqua
                                        dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation
                                        veniam consequat”</p>
                                </blockquote>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
               
            </div>
        </section>

        <section>
            <div class="py-10 bg-gradient-to-r from-yellow-500 to-yellow-600">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold leading-tight text-center text-white sm:text-4xl lg:text-5xl">
                        Participantes</h2>
                </div>
            </div>

            <div class="grid grid-cols-4 md:grid-cols-6 xl:grid-cols-11">
                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-1.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-2.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-3.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-4.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="bg-orange-500 aspect-w-1 aspect-h-1">
                        <div class="p-3 sm:p-5 xl:py-6 2xl:py-8 2xl:px-5">
                            <p class="text-sm font-semibold leading-tight text-white sm:text-lg sm:leading-tight">
                                {{$evento->nombreevento}}</p>
                            <p class="mt-2 text-sm text-white truncate">¡Inscribete!</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-5.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-6.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-7.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-8.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-9.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-10.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-11.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-12.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="bg-blue-500 aspect-w-1 aspect-h-1">
                        <div class="p-3 sm:p-5 xl:py-6 2xl:py-8 2xl:px-5">
                            <p class="text-sm font-semibold leading-tight text-white sm:text-lg sm:leading-tight">¡Sé
                                parte de la experiencia que hará la diferencia!</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-13.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-14.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-15.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-16.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="bg-gray-700 aspect-w-1 aspect-h-1">
                        <div class="p-3 sm:p-5 xl:py-6 2xl:py-8 2xl:px-5">
                            <p class="text-sm font-semibold leading-tight text-white sm:text-lg sm:leading-tight">
                                Aprovecha la oportunidad de destacar.</p>
                            <p class="mt-2 text-sm text-white truncate">¡Participa ahora!</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-17.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-18.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-19.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-20.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-21.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-22.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-23.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-24.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="bg-green-400 aspect-w-1 aspect-h-1">
                        <div class="p-3 sm:p-5 xl:py-6 2xl:py-8 2xl:px-5">
                            <p class="text-sm font-semibold leading-tight text-white sm:text-lg sm:leading-tight">El
                                éxito te está esperando.</p>
                            <p class="mt-2 text-sm text-white truncate">¡Inscribete!</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-25.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-26.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-27.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="bg-red-500 aspect-w-1 aspect-h-1">
                        <div class="p-3 sm:p-5 xl:py-6 2xl:py-8 2xl:px-5">
                            <p class="text-sm font-semibold leading-tight text-white sm:text-lg sm:leading-tight">
                                Hazlo por ti, hazlo por tu futuro.</p>
                            <p class="mt-2 text-sm text-white truncate">¡Inscribete ya!</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-28.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-29.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="bg-gray-800 aspect-w-1 aspect-h-1">
                        <div class="p-3 sm:p-5 xl:py-6 2xl:py-8 2xl:px-5">
                            <p class="text-sm font-semibold leading-tight text-white sm:text-lg sm:leading-tight">
                                Grandes cosas suceden cuando tomas acción.</p>
                            <p class="mt-2 text-sm text-white truncate">¡Inscríbete!</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-30.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-31.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-32.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-33.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-34.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="bg-indigo-500 aspect-w-1 aspect-h-1">
                        <div class="p-3 sm:p-5 xl:py-6 2xl:py-8 2xl:px-5">
                            <p class="text-sm font-semibold leading-tight text-white sm:text-lg sm:leading-tight">
                                Conecta, aprende y crece.</p>
                            <p class="mt-2 text-sm text-white truncate">¡Inscribete!</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-35.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-200"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-4.jpg"
                            alt="" />
                    </div>
                </div>

                <div>
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="bg-gray-300"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/3/avatar-3.jpg"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>



        <section class="py-10 bg-white sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-2xl font-bold text-gray-800 sm:text-4xl sm:leading-tight">Conoce nuestros
                        patrocinadores y organizadores</h2>
                </div>

                <div
                    class="grid items-center max-w-4xl grid-cols-2 mx-auto mt-12 md:mt-20 md:grid-cols-4 gap-x-10 gap-y-16">
                    <div>
                        <img class="object-contain w-full h-6 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-1.png" alt="" />
                    </div>

                    <div>
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-2.png" alt="" />
                    </div>

                    <div>
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-3.png" alt="" />
                    </div>

                    <div>
                        <img class="object-contain w-full mx-auto h-7"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-4.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-5.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-6.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-7.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-8.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-9.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full mx-auto h-7"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-10.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-11.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-12.png" alt="" />
                    </div>
                </div>

                <div class="flex items-center justify-center mt-10 space-x-3 md:hidden">
                    <div class="w-2.5 h-2.5 rounded-full bg-blue-600 block"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-gray-300 block"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-gray-300 block"></div>
                </div>

                <p class="mt-10 text-base text-center text-gray-500 md:mt-20">and, 1000+ more companies</p>
            </div>
        </section>



        <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="flex items-end justify-between">
                    <div class="flex-1 text-center lg:text-left">
                        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Otros eventos
                        </h2>
                        <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600 lg:mx-0">Puede que
                            tambien te interesen estos eventos.
                        </p>
                    </div>
                </div>
                <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 lg:mt-16 lg:grid-cols-3 lg:max-w-full">
                    @foreach($Eventos as $evento)
                        <div class="overflow-hidden bg-white rounded shadow">
                            <div>
                                <div class="relative">
                                    <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                        <img class="object-cover w-full h-full"
                                            src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-2.jpg"
                                            alt="" />
                                    </a>

                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase bg-yellow-500 rounded-full">
                                            {{$evento->modalidad->modalidad}} </span>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase">
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
                                    <p class="mt-5 text-2xl font-semibold">
                                        <a href="#" title="" class="text-black">{{$evento->nombreevento}} </a>
                                    </p>
                                    <p class="mt-4 text-base text-gray-600 truncate">{{$evento->descripcion}}</p>
                                </div>

                                <div class="border-t border-gray-200">
                                    <div class="flex">
                                        <div class="flex items-center flex-1 px-6 py-5">
                                            <img class="object-cover w-8 h-8 rounded-full"
                                                src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/3/avatar-3.jpg"
                                                alt="" />
                                            <span
                                                class="flex-1 block min-w-0 ml-3 text-base font-semibold text-gray-900 truncate">
                                                {{$evento->organizador}}</span>
                                        </div>

                                        <a href="{{ route('reporteEvento', ['evento' => $evento->id]) }}"
                                            class="inline-flex items-center flex-shrink-0 px-4 py-5 text-base font-semibold transition-all duration-200 bg-white border-l border-gray-200 hover:bg-yellow-500 hover:text-white">
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




        <section class="py-10 bg-white sm:pt-16 lg:pt-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-12 gap-y-12 gap-x-8 xl:gap-x-12">
                    <div class="col-span-2 md:col-span-4 xl:pr-8">
                        <img class="w-auto h-9" src="https://cdn.rareblocks.xyz/collection/celebration/images/logo.svg"
                            alt="" />

                        <p class="text-base leading-relaxed text-gray-600 mt-7">Amet minim mollit non deserunt ullamco
                            est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>

                        <a href="#" title=""
                            class="inline-flex items-center justify-center px-6 py-4 font-semibold text-white transition-all duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:bg-blue-700 mt-7">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            Start Live Chat
                        </a>
                    </div>

                    <div class="lg:col-span-2">
                        <p class="text-base font-semibold text-gray-900">Company</p>

                        <ul class="mt-6 space-y-5">
                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    About </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Features </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Works </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Career </a>
                            </li>
                        </ul>
                    </div>

                    <div class="lg:col-span-2">
                        <p class="text-base font-semibold text-gray-900">Help</p>

                        <ul class="mt-6 space-y-4">
                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Customer Support </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Delivery Details </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Terms & Conditions </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Privacy Policy </a>
                            </li>
                        </ul>
                    </div>

                    <div class="lg:col-span-2">
                        <p class="text-base font-semibold text-gray-900">Resources</p>

                        <ul class="mt-6 space-y-5">
                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Free eBooks </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Development Tutorial </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    How to - Blog </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    YouTube Playlist </a>
                            </li>
                        </ul>
                    </div>

                    <div class="lg:col-span-2">
                        <p class="text-base font-semibold text-gray-900">Extra Links</p>

                        <ul class="mt-6 space-y-5">
                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Customer Support </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Delivery Details </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Terms & Conditions </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Privacy Policy </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="mt-16 mb-10 border-gray-200" />

                <div class="sm:flex sm:items-center sm:justify-between">
                    <p class="text-sm text-gray-600">© Copyright 2021, All Rights Reserved by Postcraft</p>

                    <ul class="flex items-center mt-5 space-x-3 md:order-3 sm:mt-0">
                        <li>
                            <a href="#" title=""
                                class="flex items-center justify-center text-gray-800 transition-all duration-200 bg-transparent border border-gray-300 rounded-full w-7 h-7 focus:bg-orange-600 hover:text-white focus:text-white hover:bg-orange-600 hover:border-orange-600 focus:border-orange-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex items-center justify-center text-gray-800 transition-all duration-200 bg-transparent border border-gray-300 rounded-full w-7 h-7 focus:bg-orange-600 hover:text-white focus:text-white hover:bg-orange-600 hover:border-orange-600 focus:border-orange-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex items-center justify-center text-gray-800 transition-all duration-200 bg-transparent border border-gray-300 rounded-full w-7 h-7 focus:bg-orange-600 hover:text-white focus:text-white hover:bg-orange-600 hover:border-orange-600 focus:border-orange-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                    </path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex items-center justify-center text-gray-800 transition-all duration-200 bg-transparent border border-gray-300 rounded-full w-7 h-7 focus:bg-orange-600 hover:text-white focus:text-white hover:bg-orange-600 hover:border-orange-600 focus:border-orange-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


    </x-layouts.reportes>
</div>