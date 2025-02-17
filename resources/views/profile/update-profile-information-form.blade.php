<form class="max-w-sm mx-auto" wire:submit.prevent="updateProfileInformation">
    <!-- Profile Photo -->
    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" id="photo" class="hidden"
                            wire:model.live="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-secondary-button>

                @if (auth()->user()->profile_photo_path)
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2" />
            </div>
        @endif
    <div class="mb-2">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Correo
        </label>
        <input type="email" id="email" wire:model="state.email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
            placeholder="name@eventis.com" required />
        <x-input-error for="email" class="mt-2" />
    </div>
    <div class="mb-2">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Usuario
        </label>
        <input type="text" id="name" wire:model="state.name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
            placeholder="eventis" required />
        <x-input-error for="name" class="mt-2" />
    </div>
    <div class="mb-2">
        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Nombre
        </label>
        <input type="text" id="nombre" wire:model="state.nombre"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
            placeholder="Nombres" required />
        <x-input-error for="nombre" class="mt-2" />
    </div>
    <div class="mb-2">
        <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Apellido
        </label>
        <input type="text" id="apellido" wire:model="state.apellido"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
            placeholder="Apellidos" required />
        <x-input-error for="apellido" class="mt-2" />
    </div>
    <div class="mb-2">
        <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Descripción
        </label>
        <input type="text" id="descripcion" wire:model="state.descripcion"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
            placeholder="Cuenta un poco de ti" required />
        <x-input-error for="descripcion" class="mt-2" />
    </div>
    <div name="actions">
        <x-button wire:loading.attr="disabled" wire:target="photo"
        class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
            {{ __('Guardar') }}
        </x-button>
        <x-action-message class="me-3" on="saved">
            {{ __('Información guardada.') }}
        </x-action-message>
    </div>
</form>