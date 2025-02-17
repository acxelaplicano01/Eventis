<form class="p-4 md:p-5" wire:submit.prevent="store">
    @csrf
    <article class="transition duration-350 ease-in-out">
        <div class="flex flex-shrink-0 pb-0">
            <a href="#" class="flex-shrink-0 group block">
                <div class="flex items-center">
                    <div>
                        <img class="inline-block h-10 w-10 rounded-full"
                            src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="">
                    </div>
                    <div class="ml-3">
                        <p class="text-base leading-6 font-medium dark:text-white">
                            {{$userperfil->nombre}}
                            {{$userperfil->apellido}}
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="pl-11">
            <textarea wire:model="descripcion" id="message" rows="1" oninput="autoResize(this)"
                class="block p-1.5 w-full resize-none text-sm text-gray-900 bg-none rounded-lg border border-none focus:ring-white focus:border-white dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-700 dark:focus:border-gary-700"
                placeholder="¿Qué novedades tienes?"></textarea>
            @if ($foto)
                <div class="md:flex-shrink pr-6 pt-2">
                    <div class="bg-cover bg-no-repeat bg-center rounded-lg w-full h-64"
                        style="height: 200px; background-image: url({{ is_string($foto) ? asset($foto) : $foto->temporaryUrl() }})">
                        <img src="{{ is_string($foto) ? asset($foto) : $foto->temporaryUrl() }}"
                            class="object-cover opacity-0 cursor-pointer transition duration-300 ease-in-out w-full h-full">
                    </div>
                </div>
            @endif

            <div class="flex items-center justify-between">
                <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                    <button type="button"
                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 12 20">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                        </svg>
                        <span class="sr-only">Attach file</span>
                    </button>
                    <button type="button"
                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 16 20">
                            <path
                                d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                        </svg>
                        <span class="sr-only">Set location</span>
                    </button>
                    <label for="dropzone-file"
                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                        </svg>
                        <span class="sr-only">Upload image</span>
                        <input id="dropzone-file" type="file" class="" wire:model="foto" />
                    </label>
                </div>
                <button wire:click.prevent="store()" type="submit" data-modal-hide="crud-modal"
                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-yellow-500 rounded-lg focus:ring-4 focus:ring-yellow-200 dark:focus:ring-yellow-900 hover:bg-yellow-800">
                    {{ $publicacion_id ? 'Actualizar' : 'Publicar' }}
                </button>
                @error('foto')                                
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </article>
</form>