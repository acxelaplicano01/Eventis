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
                                            {{$userperfil->nombre}} {{$userperfil->apellido}}
                                        </h2>
                                        <p class="mb-0 w-48 text-xs dark:text-gray-400">{{$eventosCount}} Eventos</p>
                                    </div>
                                </div>

                                <hr class="dark:border-gray-700">
                            </div>




                            <!-- Large Modal -->
                            <div id="extralarge-modal" tabindex="-1"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <!-- Fondo opaco -->
                                <div class="fixed inset-0 bg-black opacity-50"></div>
                                <div class="relative w-full max-w-xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                {{$userperfil->nombre}} {{$userperfil->apellido}}
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="extralarge-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
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
                                                        <button id="info-tab" data-tabs-target="#info" type="button"
                                                            role="tab" aria-controls="info" aria-selected="false"
                                                            class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white"
                                                            aria-current="page">
                                                            <svg class="w-6 h-6 me-2  text-gray-500 dark:text-gray-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" fill="currentColor"
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
                                                        <button id="profile-tab" data-tabs-target="#profile"
                                                            type="button" role="tab" aria-controls="profile"
                                                            aria-selected="false"
                                                            class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                                                            <svg class="w-5 h-5 me-2  text-gray-500 dark:text-gray-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" fill="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Perfil
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button id="portada-tab" data-tabs-target="#portada"
                                                            type="button" role="tab" aria-controls="portada"
                                                            aria-selected="false"
                                                            class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                                                            <svg class="w-5 h-5 me-2  text-gray-500 dark:text-gray-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" fill="currentColor"
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
                                                        <h3
                                                            class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                                                            Editar información "Nombre y usuario"</h3>


                                                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                                                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center"
                                                                id="default-styled-tab"
                                                                data-tabs-toggle="#default-styled-tab-content"
                                                                data-tabs-active-classes="text-yellow-600 hover:text-yellow-600 dark:text-yellow-500 dark:hover:text-yellow-500 border-yellow-600 dark:border-yellow-500"
                                                                data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                                                                role="tablist">
                                                                <li class="me-2" role="presentation">
                                                                    <button
                                                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                                                        id="settings-styled-tab"
                                                                        data-tabs-target="#styled-settings"
                                                                        type="button" role="tab"
                                                                        aria-controls="settings"
                                                                        aria-selected="false">Nombre y usuario.</button>
                                                                </li>
                                                                <li role="presentation">
                                                                    <button
                                                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                                                        id="contacts-styled-tab"
                                                                        data-tabs-target="#styled-contacts"
                                                                        type="button" role="tab"
                                                                        aria-controls="contacts"
                                                                        aria-selected="false">Redes sociales</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div id="default-styled-tab-content">
                                                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
                                                                id="styled-settings" role="tabpanel"
                                                                aria-labelledby="settings-tab">


                                                                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                                                    @livewire('profile.update-profile-information-form')
                                                                @endif


                                                            </div>
                                                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
                                                                id="styled-contacts" role="tabpanel"
                                                                aria-labelledby="contacts-tab">

                                                                <form class="max-w-sm mx-auto">
                                                                    <label for="website-admin"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mi
                                                                        sitio</label>
                                                                    <div class="flex">
                                                                        <span
                                                                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                                            <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                                                aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                fill="currentColor" viewBox="0 0 24 24">
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
                                                                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                                            <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                                                aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                fill="currentColor" viewBox="0 0 24 24">
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
                                                                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                                            <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                                                aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" fill="none"
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    fill-rule="evenodd"
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
                                                                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                                            <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                                                aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                fill="currentColor" viewBox="0 0 24 24">
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
                                                                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                                            <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                                                aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                fill="currentColor" viewBox="0 0 24 24">
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
                                                        <h3
                                                            class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                                                            Cambiar foto de perfil
                                                        </h3>
                                                        <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
                                                            role="alert">
                                                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                viewBox="0 0 20 20">
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
                                                                <div
                                                                    class="flex flex-col items-center justify-center pt-5 pb-6">
                                                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 20 16">
                                                                        <path stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                                    </svg>
                                                                    <p
                                                                        class="mb-2 text-sm text-gray-500 dark:text-gray-400">
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
                                                        <h3
                                                            class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                                                            Cambiar foto de portada
                                                        </h3>
                                                        <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
                                                            role="alert">
                                                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                viewBox="0 0 20 20">
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
                                                                <div
                                                                    class="flex flex-col items-center justify-center pt-5 pb-6">
                                                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 20 16">
                                                                        <path stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                                    </svg>
                                                                    <p
                                                                        class="mb-2 text-sm text-gray-500 dark:text-gray-400">
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
                                            class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="extralarge-modal" type="button"
                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-yellow-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
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
                                        <!-- Botones User -->
                                        <div class="flex space-x-2 justify-end">
                                            <!-- Editar Button -->
                                            <button data-modal-target="extralarge-modal"
                                                data-modal-toggle="extralarge-modal"
                                                class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  max-w-max border bg-transparent border-yellow-500 text-yellow-500 hover:border-yellow-800 items-center hover:shadow-lg font-bold py-2 px-4 rounded-full mr-0 ml-auto"
                                                type="button">
                                                Editar
                                            </button>

                                            <!-- Publicar Button -->
                                            <button wire:click="create"
                                                class="flex justify-center bg-yellow-500 max-h-max whitespace-nowrap focus:outline-none  focus:ring  max-w-max border bg-transparent border-yellow-500 text-white hover:border-yellow-800 items-center hover:shadow-lg font-bold py-2 px-4 rounded-full mr-0 ml-auto"
                                                type="button" data-modal-target="crud-modal"
                                                data-modal-toggle="crud-modal">
                                                Publicar
                                            </button>
                                        </div>
                                    </div>

                                    

                                   <!-- Main modal Publicar -->
                                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <!-- Fondo opaco -->
                                        <div class="fixed inset-0 bg-black opacity-50"></div>
                                        <div class="relative p-4 w-full max-w-xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    {{ $publicacion_id ? 'Editar Publicación' : 'Nueva Publicación' }}
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="crud-modal">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
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
                                                                            {{$userperfil->nombre}} {{$userperfil->apellido}}
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
                                                                                class="object-cover opacity-0 w-full h-full">
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
                                                                    <label type="button" for="dropzone-file"
                                                                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                            viewBox="0 0 20 18">
                                                                            <path
                                                                                d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                        </svg>
                                                                        <span class="sr-only">Upload image</span>
                                                                        <input id="dropzone-file" type="file" class="hidden" wire:model="foto"/>
                                                                    </label>
                                                                </div>
                                                                <button wire:click.prevent="store" type="submit"
                                                                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-yellow-500 rounded-lg focus:ring-4 focus:ring-yellow-200 dark:focus:ring-yellow-900 hover:bg-yellow-800">
                                                                    {{ $publicacion_id ? 'Actualizar' : 'Publicar' }}
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Profile info -->
                                    <div class="space-y-1 justify-center w-full mt-3 ml-3">
                                        <!-- User basic-->
                                        <div>
                                            <h2 class="text-xl leading-6 font-bold dark:text-white">
                                                {{$userperfil->nombre}} {{$userperfil->apellido}}
                                            </h2>
                                            <p class="text-sm leading-5 font-medium dark:text-gray-400">@
                                                {{$userperfil->name}}
                                            </p>
                                        </div>
                                        <!-- Description and others -->
                                        <div class="mt-3">
                                            <p class="dark:text-white leading-tight mb-2">{{ $userperfil->descripcion }}
                                            </p>
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
                                                    </svg> <a href="{{ $userperfil->pagina }}" target="#"
                                                        class="leading-5 ml-1 text-yellow-500">{{ $userperfil->pagina }}</a></span>
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
                                                    </svg> <span class="leading-5 ml-1">Se unió un
                                                        {{ \Carbon\Carbon::parse($userperfil->created_at)->locale('es')->isoFormat('D [de] MMMM [de] YYYY ') }}</span></span>
                                            </div>
                                        </div>
                                        <div
                                            class="pt-3 flex justify-start items-start w-full divide-x divide-gray-800 divide-solid">
                                            <div class="text-center pr-3"><span
                                                    class="font-bold dark:text-white">520</span><span
                                                    class="dark:text-gray-400">
                                                    Siguiendo</span></div>
                                            <div class="text-center px-3"><span class="font-bold dark:text-white">23,4m
                                                </span><span class="dark:text-gray-400"> Seguidores</span></div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="dark:border-gray-700">
                            </div>
                            
                            <ul class="list-none">
                                @foreach($publicaciones as $publicacion)
                                    <li>
                                        <!--second tweet-->
                                        <article class="transition duration-350 ease-in-out rounded-lg">
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
                                                            {{ $publicacion->user->nombre }} {{ $publicacion->user->apellido }}
                                                                <span
                                                                    class="text-sm leading-5 font-medium dark:text-gray-400 group-hover:text-gray-400 text-gray-500 transition ease-in-out duration-150">
                                                                    {{ $publicacion->created_at->diffForHumans() }}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div>
                                                <p class="pl-3 mt-4 mb-4 text-base width-auto font-medium dark:text-white flex-shrink">
                                                    {{ $publicacion->descripcion }}
                                                </p>
                                                <!-- Imagen con efecto Hover para abrir Modal -->
                                            @if($publicacion->foto)
                                                <img src="{{ asset($publicacion->foto) }}" 
                                                    class="cursor-pointer transition duration-300 ease-in-out w-full h-full object-cover"
                                                    data-modal-target="imagenModal{{ $publicacion->id }}"
                                                    data-modal-toggle="imagenModal{{ $publicacion->id }}"
                                                >
                                            @endif
                                                        <!-- Modal de Flowbite para ampliar la imagen -->
                                                <div id="imagenModal{{ $publicacion->id }}" tabindex="-1" aria-hidden="true" 
                                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <!-- Fondo opaco -->
                                <div class="fixed inset-0 bg-black opacity-50"></div>
                                                    <div class="relative w-full max-w-2xl max-h-full">
                                                        <div class="relative bg-white rounded-lg shadow">
                                                            <button type="button" 
                                                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" 
                                                                data-modal-hide="imagenModal{{ $publicacion->id }}">
                                                                ✕
                                                            </button>
                                                            <div class="p-5 text-center">
                                                                <img src="{{ asset($publicacion->foto) }}" class="w-full h-auto rounded-lg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="flex items-center py-4 pl-16">
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
                                @endforeach
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
                                            placeholder="Buscar en los eventos de {{$userperfil->nombre}} {{$userperfil->apellido}}"
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
        <script>
            function autoResize(textarea) {
                textarea.style.height = 'auto';
                textarea.style.height = (textarea.scrollHeight) + 'px';
            }
        </script>
    </x-layouts.reportes>
</div>