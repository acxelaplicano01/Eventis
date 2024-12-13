<div>
    <div class="py-3 mb-28">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-1">
            <div class="flex flex-1 gap-4 container mx-auto">
                <!--  perfil  -->
                <aside>
                    <div class="relative">
                        <img class="h-72 w-full object-cover"
                            src="https://azulschool.net/wp-content/uploads/buddypress/members/34880/cover-image/673448942ac49-bp-cover-image.jpg"
                            alt="Cover Image">
                        <div class="absolute left-4 bottom-0 transform translate-y-1/2">
                            <img class="h-48 w-48 rounded-full border-4 border-white"
                                src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                alt="Profile Image">
                        </div>
                    </div>
                    <div class="p-4 bg-gray-50 dark:bg-gray-800 rounded-b-xl"> 
                        <div class="flex items-center space-x-4 mb-4 ml-56">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-white flex items-center">
                                    <span>{{ Auth::user()->name }}</span>
                                    <span
                                        class="bg-blue-100 ml-4 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Estudiante</span>
                                    <button
                                        class="ml-4 transform -translate-y-2 mt-4 w-32 px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-xl hover:bg-blue-600">Seguir</button>
                                </h2>

                                <p class="text-sm text-gray-500 dark:text-gray-400">@acxel.aplicano • Joined May 2023 •
                                    Active now
                                </p>
                                <div class="flex gap-2 mt-4">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">1425 seguidores</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">25 seguidos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 dark:border-gray-700">
                        <ul class="w-full flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                            data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                    data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Publicaciones</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                    aria-controls="dashboard" aria-selected="false">Perfil</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                    aria-controls="settings" aria-selected="false">Amigos</button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                                    aria-controls="contacts" aria-selected="false">Grupos</button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-tab-content">
                        <div class="hidden rounded-lg dark:bg-gray-800" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <main class="flex-1 w-full rounded-xl h-auto">
                                <div class="mb-4">
                                    <!-- Crear Publicaciones -->
                                    <div>
                                        <div class="relative w-full max-w-4xl max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <div class="p-4 md:p-5 space-y-4">
                                                    <button data-modal-target="large-modal"
                                                        data-modal-toggle="large-modal"
                                                        class="flex items-center text-lg pe-1 font-normal text-gray-500 rounded-full md:me-0 text-ellipsis text-nowrap overflow-hidden dark:text-gray-500"
                                                        type="button">
                                                        <span class="sr-only">Open user menu</span>
                                                        <img class="w-12 h-12 me-2 rounded-full"
                                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                            alt="user photo">
                                                        Comparte lo que piensas, {{ Auth::user()->name }}
                                                    </button>
                                                    <!-- Large Modal -->
                                                    <div id="large-modal" tabindex="-1"
                                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                        <div class="relative w-full max-w-4xl max-h-full">
                                                            <!-- Modal content -->
                                                            <div
                                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                <!-- Modal header -->
                                                                <div
                                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                    <h3
                                                                        class="text-xl font-medium text-gray-900 dark:text-white">
                                                                        Crear Publicación
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                        data-modal-hide="large-modal">
                                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 14 14">
                                                                            <path stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                        </svg>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <div class="p-4 md:p-5 space-y-4">
                                                                    <div>
                                                                        <a href="#" class="flex px-1 py-1">
                                                                            <div class="flex-shrink-0">
                                                                                <img class="rounded-full w-12 h-12"
                                                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                                                    alt="Jese image">
                                                                            </div>
                                                                            <div class="w-full ps-3">
                                                                                <div
                                                                                    class="text-gray-500 text-sm mb-1 dark:text-gray-400">
                                                                                    <span
                                                                                        class="font-semibold text-lg text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                                                                </div>
                                                                                <div class="relative">
                                                                                    <!-- Botón que muestra la selección -->
                                                                                    <button id="visibilityButton"
                                                                                        data-dropdown-toggle="visibilityDropdown"
                                                                                        class="text-white bg-gray-700 hover:bg-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700"
                                                                                        type="button"><span
                                                                                            id="visibilityOption"
                                                                                            class="ml-2">Público</span>
                                                                                        <svg class="w-2.5 h-2.5 ms-3"
                                                                                            aria-hidden="true"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            fill="none"
                                                                                            viewBox="0 0 10 6">
                                                                                            <path stroke="currentColor"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="m1 1 4 4 4-4" />
                                                                                        </svg>
                                                                                    </button>

                                                                                    <!-- Menú desplegable -->
                                                                                    <div id="visibilityDropdown"
                                                                                        class="hidden z-10 bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-48"
                                                                                        data-dropdown-menu>
                                                                                        <ul id="menu"
                                                                                            class="p-2 space-y-2 text-sm text-gray-700">
                                                                                            <li>
                                                                                                <label
                                                                                                    class="flex hover:bg-gray-100 p-1 rounded-lg items-start space-x-2">
                                                                                                    <span>
                                                                                                        <strong>Público</strong>
                                                                                                        <p
                                                                                                            class="text-gray-500 text-xs">
                                                                                                            Cualquiera
                                                                                                            puede ver
                                                                                                            esta
                                                                                                            publicación.
                                                                                                        </p>
                                                                                                    </span>
                                                                                                    <input type="radio"
                                                                                                        name="visibility"
                                                                                                        value="Público"
                                                                                                        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
                                                                                                        onchange="updateVisibility(this.value); closeMenu();" />

                                                                                                </label>
                                                                                            </li>
                                                                                            <li>
                                                                                                <label
                                                                                                    class="flex hover:bg-gray-100 p-1 rounded-lg items-start space-x-2">
                                                                                                    <span>
                                                                                                        <strong>Privado</strong>
                                                                                                        <p
                                                                                                            class="text-gray-500 text-xs">
                                                                                                            Solo tú
                                                                                                            puedes ver
                                                                                                            esta
                                                                                                            publicación.
                                                                                                        </p>
                                                                                                    </span>
                                                                                                    <input type="radio"
                                                                                                        name="visibility"
                                                                                                        value="Privado"
                                                                                                        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
                                                                                                        onchange="updateVisibility(this.value); closeMenu();" />

                                                                                                </label>
                                                                                            </li>
                                                                                            <li>
                                                                                                <label
                                                                                                    class="flex hover:bg-gray-100 p-1 rounded-lg items-start space-x-2">
                                                                                                    <span class="block">
                                                                                                        <strong>
                                                                                                            Solo
                                                                                                            Amigos</strong>
                                                                                                        <p
                                                                                                            class="text-gray-500 text-xs">
                                                                                                            Solo tus
                                                                                                            amigos
                                                                                                            podrán
                                                                                                            ver esta
                                                                                                            publicación.
                                                                                                        </p>
                                                                                                    </span>
                                                                                                    <input type="radio"
                                                                                                        name="visibility"
                                                                                                        value="Solo Amigos"
                                                                                                        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
                                                                                                        onchange="updateVisibility(this.value); closeMenu();" />

                                                                                                </label>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <script>
                                                                                    function updateVisibility(value) {
                                                                                        document.getElementById('visibilityOption').innerText = value;
                                                                                    }

                                                                                    function closeMenu() {
                                                                                        // Suponiendo que el menú tiene un id "menu"
                                                                                        // document.getElementById('menu').style.display = 'none';
                                                                                    }
                                                                                </script>

                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <form>
                                                                        <div
                                                                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                                                            <div
                                                                                class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                                                <label for="comment"
                                                                                    class="sr-only">Your
                                                                                    comment</label>
                                                                                <textarea id="comment" rows="9"
                                                                                    class="w-full resize-none px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                                                    placeholder="Cómparte lo que piensas, {{ Auth::user()->name }}..."
                                                                                    required></textarea>
                                                                            </div>
                                                                            <div
                                                                                class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                                                                <div
                                                                                    class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                                                                    <button type="button"
                                                                                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                                        <svg class="w-4 h-4"
                                                                                            aria-hidden="true"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            fill="none"
                                                                                            viewBox="0 0 12 20">
                                                                                            <path stroke="currentColor"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                                                        </svg>
                                                                                        <span class="sr-only">Attach
                                                                                            file</span>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                                        <svg class="w-4 h-4"
                                                                                            aria-hidden="true"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            fill="currentColor"
                                                                                            viewBox="0 0 16 20">
                                                                                            <path
                                                                                                d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                                                        </svg>
                                                                                        <span class="sr-only">Set
                                                                                            location</span>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                                        <svg class="w-4 h-4"
                                                                                            aria-hidden="true"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            fill="currentColor"
                                                                                            viewBox="0 0 20 18">
                                                                                            <path
                                                                                                d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                                        </svg>
                                                                                        <span class="sr-only">Upload
                                                                                            image</span>
                                                                                    </button>
                                                                                </div>
                                                                                <button type="submit"
                                                                                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                                                    Publicar
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Botones compartir -->
                                                <div
                                                    class="flex dark:bg-gray-800 bg-gray-100 items-center p-2 md:p-3 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button>
                                                        <svg class="w-6 h-6 text-gray-400 dark:text-gray-500 dark:hover:text-gray-900 hover:text-gray-700"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M7.5 4.586A2 2 0 0 1 8.914 4h6.172a2 2 0 0 1 1.414.586L17.914 6H19a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h1.086L7.5 4.586ZM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                    <button>
                                                        <svg class="w-6 h-6 text-gray-400 dark:text-gray-500 dark:hover:text-gray-900 hover:text-gray-700"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2ZM7.99 9a1 1 0 0 1 1-1H9a1 1 0 0 1 0 2h-.01a1 1 0 0 1-1-1ZM14 9a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H15a1 1 0 0 1-1-1Zm-5.506 7.216A5.5 5.5 0 0 1 6.6 13h10.81a5.5 5.5 0 0 1-8.916 3.216Z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <!-- Post -->
                                    <div class="bg-white p-4 border rounded-xl">
                                        <article>
                                            <div class="flex items-center mb-4">
                                                <div class="flex-shrink-0">
                                                    <img class="rounded-full w-11 h-11"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="Jese image">
                                                    <div
                                                        class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                        <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 18 18">
                                                            <path
                                                                d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                            <path
                                                                d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="w-full ps-3">
                                                    <div
                                                        class="text-gray-500 dark:text-gray-400 flex justify-between items-center">
                                                        <span
                                                            class="font-semibold text-gray-900 dark:text-white">Profesional
                                                            C++</span>
                                                        <span class="text-gray-500 text-sm">
                                                            <button id="dropdownMenuIconHorizontalButton1"
                                                                data-dropdown-toggle="dropdownDotsHorizontal1"
                                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100  dark:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                type="button">
                                                                <svg class="w-5 h-5" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 16 3">
                                                                    <path
                                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                                </svg>
                                                            </button>

                                                            <!-- Dropdown menu -->
                                                            <div id="dropdownDotsHorizontal1"
                                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                                    aria-labelledby="dropdownMenuIconHorizontalButton1">
                                                                    <li>
                                                                        <a href="#"
                                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"
                                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"
                                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="py-2">
                                                                    <a href="#"
                                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
                                                                        link</a>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                    <div class="text-xs text-gray-600 dark:text-gray-500">Eduardo
                                                        Casares Aguayo a
                                                        publicado una actualización <div
                                                            class="text-xs text-gray-600 dark:text-gray-500">hace dos
                                                            dias
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400">This is my third Invicta
                                                Pro Diver.
                                                They are just fantastic value for money. This one arrived yesterday and
                                                the first
                                                thing I did was set the time, popped on an identical strap from another
                                                Invicta and
                                                went in the shower with it to test the waterproofing.... No problems.
                                            </p>

                                            <a href="#"
                                                class="block mb-5 text-sm font-medium text-blue-600 dark:text-blue-500">Read
                                                more</a>
                                            <div>
                                                <img class="h-auto mb-4 w-full rounded-xl"
                                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg"
                                                    alt="">

                                                <!--   <video class="h-auto w-full rounded-xl" autoplay controls>
                                        <source src="/docs/videos/flowbite.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video> -->

                                                <!--   <div class="leading-1.5 mt-2 flex w-full flex-col">
                                        <div class="flex items-start bg-gray-50 dark:bg-gray-700 rounded-xl p-2">
                                            <div class="me-2">
                                                <span
                                                    class="flex items-center gap-2 text-sm font-medium text-gray-900 dark:text-white pb-2">
                                                    <svg fill="none" aria-hidden="true" class="w-5 h-5 flex-shrink-0"
                                                        viewBox="0 0 20 21">
                                                        <g clip-path="url(#clip0_3173_1381)">
                                                            <path fill="#E2E5E7"
                                                                d="M5.024.5c-.688 0-1.25.563-1.25 1.25v17.5c0 .688.562 1.25 1.25 1.25h12.5c.687 0 1.25-.563 1.25-1.25V5.5l-5-5h-8.75z" />
                                                            <path fill="#B0B7BD"
                                                                d="M15.024 5.5h3.75l-5-5v3.75c0 .688.562 1.25 1.25 1.25z" />
                                                            <path fill="#CAD1D8"
                                                                d="M18.774 9.25l-3.75-3.75h3.75v3.75z" />
                                                            <path fill="#F15642"
                                                                d="M16.274 16.75a.627.627 0 01-.625.625H1.899a.627.627 0 01-.625-.625V10.5c0-.344.281-.625.625-.625h13.75c.344 0 .625.281.625.625v6.25z" />
                                                            <path fill="#fff"
                                                                d="M3.998 12.342c0-.165.13-.345.34-.345h1.154c.65 0 1.235.435 1.235 1.269 0 .79-.585 1.23-1.235 1.23h-.834v.66c0 .22-.14.344-.32.344a.337.337 0 01-.34-.344v-2.814zm.66.284v1.245h.834c.335 0 .6-.295.6-.605 0-.35-.265-.64-.6-.64h-.834zM7.706 15.5c-.165 0-.345-.09-.345-.31v-2.838c0-.18.18-.31.345-.31H8.85c2.284 0 2.234 3.458.045 3.458h-1.19zm.315-2.848v2.239h.83c1.349 0 1.409-2.24 0-2.24h-.83zM11.894 13.486h1.274c.18 0 .36.18.36.355 0 .165-.18.3-.36.3h-1.274v1.049c0 .175-.124.31-.3.31-.22 0-.354-.135-.354-.31v-2.839c0-.18.135-.31.355-.31h1.754c.22 0 .35.13.35.31 0 .16-.13.34-.35.34h-1.455v.795z" />
                                                            <path fill="#CAD1D8"
                                                                d="M15.649 17.375H3.774V18h11.875a.627.627 0 00.625-.625v-.625a.627.627 0 01-.625.625z" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_3173_1381">
                                                                <path fill="#fff" d="M0 0h20v20H0z"
                                                                    transform="translate(0 .5)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    Flowbite Terms & Conditions
                                                </span>
                                                <span
                                                    class="flex text-xs font-normal text-gray-500 dark:text-gray-400 gap-2">
                                                    12 Pages
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                        class="self-center" width="3" height="4" viewBox="0 0 3 4"
                                                        fill="none">
                                                        <circle cx="1.5" cy="2" r="1.5" fill="#6B7280" />
                                                    </svg>
                                                    18 MB
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                        class="self-center" width="3" height="4" viewBox="0 0 3 4"
                                                        fill="none">
                                                        <circle cx="1.5" cy="2" r="1.5" fill="#6B7280" />
                                                    </svg>
                                                    PDF
                                                </span>
                                            </div>
                                            <div class="inline-flex self-center items-center">
                                                <button
                                                    class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                                                    type="button">
                                                    <svg class="w-4 h-4 text-gray-900 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                        <path
                                                            d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div> -->

                                            </div>


                                            <div class="flex mt-2 justify-between items-center">
                                                <button class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                                    19 reacciones</button>
                                                <button data-modal-target="medium-modal"
                                                    data-modal-toggle="medium-modal"
                                                    class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                                    Ver los 108 comentarios</button>
                                                <!--  Modal ver comentarios en modal -->
                                                <div id="medium-modal" tabindex="-1"
                                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative w-full max-w-lg max-h-full">
                                                        <!-- Modal content -->
                                                        <div
                                                            class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <!-- Modal header -->
                                                            <div
                                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                <h3
                                                                    class="text-xl font-medium text-gray-900 dark:text-white">
                                                                    Publicacion de Xpersona
                                                                </h3>
                                                                <button type="button"
                                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                    data-modal-hide="medium-modal">
                                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 14 14">
                                                                        <path stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                    </svg>
                                                                    <span class="sr-only">Close modal</span>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class="p-3 md:p-4 space-y-6 overflow-y-auto max-h-96">

                                                                <!-- Publicacion en modal -->
                                                                <div class="bg-white">
                                                                    <article>
                                                                        <div class="flex items-center mb-4">
                                                                            <div class="flex-shrink-0">
                                                                                <img class="rounded-full w-11 h-11"
                                                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                                                    alt="Jese image">
                                                                                <div
                                                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                                                    <svg class="w-2 h-2 text-white"
                                                                                        aria-hidden="true"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 18 18">
                                                                                        <path
                                                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                                                        <path
                                                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="w-full ps-3">
                                                                                <div
                                                                                    class="text-gray-500 dark:text-gray-400 flex justify-between items-center">
                                                                                    <span
                                                                                        class="font-semibold text-gray-900 dark:text-white">Profesional
                                                                                        C++</span>
                                                                                    <span class="text-gray-500 text-sm">
                                                                                        <button
                                                                                            id="dropdownMenuIconHorizontalButton2"
                                                                                            data-dropdown-toggle="dropdownDotsHorizontal2"
                                                                                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100  dark:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                                            type="button">
                                                                                            <svg class="w-5 h-5"
                                                                                                aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 16 3">
                                                                                                <path
                                                                                                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                                                            </svg>
                                                                                        </button>

                                                                                        <!-- Dropdown menu -->
                                                                                        <div id="dropdownDotsHorizontal2"
                                                                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                                                                aria-labelledby="dropdownMenuIconHorizontalButton1">
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                            <div class="py-2">
                                                                                                <a href="#"
                                                                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
                                                                                                    link</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="text-xs text-gray-600 dark:text-gray-500">
                                                                                    Eduardo Casares Aguayo a
                                                                                    publicado una actualización <div
                                                                                        class="text-xs text-gray-600 dark:text-gray-500">
                                                                                        hace dos dias
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <p
                                                                            class="mb-2 text-gray-500 dark:text-gray-400">
                                                                            This is my
                                                                            third Invicta Pro Diver.
                                                                            They are just fantastic value for money.
                                                                            This one
                                                                            arrived yesterday and the first
                                                                            thing I did was set the time, popped on an
                                                                            identical
                                                                            strap from another Invicta and
                                                                            went in the shower with it to test the
                                                                            waterproofing....
                                                                            No problems.</p>

                                                                        <a href="#"
                                                                            class="block mb-5 text-sm font-medium text-blue-600 dark:text-blue-500">Read
                                                                            more</a>
                                                                        <div>
                                                                            <img class="h-auto mb-4 w-full rounded-xl"
                                                                                src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg"
                                                                                alt="">

                                                                            <video class="h-auto w-full rounded-xl"
                                                                                autoplay controls>
                                                                                <source src="/docs/videos/flowbite.mp4"
                                                                                    type="video/mp4">
                                                                                Your browser does not support the video
                                                                                tag.
                                                                            </video>

                                                                            <div
                                                                                class="leading-1.5 mt-2 flex w-full flex-col">
                                                                                <div
                                                                                    class="flex items-start bg-gray-50 dark:bg-gray-700 rounded-xl p-2">
                                                                                    <div class="me-2">
                                                                                        <span
                                                                                            class="flex items-center gap-2 text-sm font-medium text-gray-900 dark:text-white pb-2">
                                                                                            <svg fill="none"
                                                                                                aria-hidden="true"
                                                                                                class="w-5 h-5 flex-shrink-0"
                                                                                                viewBox="0 0 20 21">
                                                                                                <g
                                                                                                    clip-path="url(#clip0_3173_1381)">
                                                                                                    <path fill="#E2E5E7"
                                                                                                        d="M5.024.5c-.688 0-1.25.563-1.25 1.25v17.5c0 .688.562 1.25 1.25 1.25h12.5c.687 0 1.25-.563 1.25-1.25V5.5l-5-5h-8.75z" />
                                                                                                    <path fill="#B0B7BD"
                                                                                                        d="M15.024 5.5h3.75l-5-5v3.75c0 .688.562 1.25 1.25 1.25z" />
                                                                                                    <path fill="#CAD1D8"
                                                                                                        d="M18.774 9.25l-3.75-3.75h3.75v3.75z" />
                                                                                                    <path fill="#F15642"
                                                                                                        d="M16.274 16.75a.627.627 0 01-.625.625H1.899a.627.627 0 01-.625-.625V10.5c0-.344.281-.625.625-.625h13.75c.344 0 .625.281.625.625v6.25z" />
                                                                                                    <path fill="#fff"
                                                                                                        d="M3.998 12.342c0-.165.13-.345.34-.345h1.154c.65 0 1.235.435 1.235 1.269 0 .79-.585 1.23-1.235 1.23h-.834v.66c0 .22-.14.344-.32.344a.337.337 0 01-.34-.344v-2.814zm.66.284v1.245h.834c.335 0 .6-.295.6-.605 0-.35-.265-.64-.6-.64h-.834zM7.706 15.5c-.165 0-.345-.09-.345-.31v-2.838c0-.18.18-.31.345-.31H8.85c2.284 0 2.234 3.458.045 3.458h-1.19zm.315-2.848v2.239h.83c1.349 0 1.409-2.24 0-2.24h-.83zM11.894 13.486h1.274c.18 0 .36.18.36.355 0 .165-.18.3-.36.3h-1.274v1.049c0 .175-.124.31-.3.31-.22 0-.354-.135-.354-.31v-2.839c0-.18.135-.31.355-.31h1.754c.22 0 .35.13.35.31 0 .16-.13.34-.35.34h-1.455v.795z" />
                                                                                                    <path fill="#CAD1D8"
                                                                                                        d="M15.649 17.375H3.774V18h11.875a.627.627 0 00.625-.625v-.625a.627.627 0 01-.625.625z" />
                                                                                                </g>
                                                                                                <defs>
                                                                                                    <clipPath
                                                                                                        id="clip0_3173_1381">
                                                                                                        <path
                                                                                                            fill="#fff"
                                                                                                            d="M0 0h20v20H0z"
                                                                                                            transform="translate(0 .5)" />
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                            Flowbite Terms & Conditions
                                                                                        </span>
                                                                                        <span
                                                                                            class="flex text-xs font-normal text-gray-500 dark:text-gray-400 gap-2">
                                                                                            12 Pages
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                aria-hidden="true"
                                                                                                class="self-center"
                                                                                                width="3" height="4"
                                                                                                viewBox="0 0 3 4"
                                                                                                fill="none">
                                                                                                <circle cx="1.5" cy="2"
                                                                                                    r="1.5"
                                                                                                    fill="#6B7280" />
                                                                                            </svg>
                                                                                            18 MB
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                aria-hidden="true"
                                                                                                class="self-center"
                                                                                                width="3" height="4"
                                                                                                viewBox="0 0 3 4"
                                                                                                fill="none">
                                                                                                <circle cx="1.5" cy="2"
                                                                                                    r="1.5"
                                                                                                    fill="#6B7280" />
                                                                                            </svg>
                                                                                            PDF
                                                                                        </span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="inline-flex self-center items-center">
                                                                                        <button
                                                                                            class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                                                                                            type="button">
                                                                                            <svg class="w-4 h-4 text-gray-900 dark:text-white"
                                                                                                aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path
                                                                                                    d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                                                                <path
                                                                                                    d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>


                                                                        <div
                                                                            class="flex mt-2 justify-between items-center">
                                                                            <p
                                                                                class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                                                                19 reacciones</p>
                                                                            <p
                                                                                class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                                                                Ver los 12 comentarios</p>
                                                                        </div>
                                                                        <aside
                                                                            class="dark:border-gray-600 border-gray-200 border-t border-b">
                                                                            <div class="flex items-center mb-2 mt-2">
                                                                                <a href="#"
                                                                                    class="w-full text-gray-700 sfocus:z-10 dark:hover:text-blue-600 hover:text-blue-600 hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Me
                                                                                    gusta
                                                                                </a>
                                                                                <button
                                                                                    class="w-full text-gray-700 focus:z-10 dark:hover:text-blue-600 hover:text-blue-600  hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Comentar
                                                                                </button>
                                                                            </div>
                                                                        </aside>
                                                                    </article>
                                                                </div>
                                                                <!--Seccion de todos los comentarios-->
                                                                <div>
                                                                    <div class="flex items-start gap-2.5">
                                                                        <img class="w-8 h-8 rounded-full"
                                                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                                            alt="Jese image">
                                                                        <div
                                                                            class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                                                            <div
                                                                                class="flex items-center space-x-2 rtl:space-x-reverse">
                                                                                <span
                                                                                    class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie
                                                                                    Green</span>
                                                                                <span
                                                                                    class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                                                                            </div>
                                                                            <p
                                                                                class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">
                                                                                That's awesome. I think our users will
                                                                                really
                                                                                appreciate
                                                                                the improvements.</p>
                                                                            <span
                                                                                class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
                                                                        </div>
                                                                        <button id="dropdownMenuIconButton"
                                                                            data-dropdown-toggle="dropdownDots"
                                                                            data-dropdown-placement="bottom-start"
                                                                            class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-600"
                                                                            type="button">
                                                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                                                aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="currentColor" viewBox="0 0 4 15">
                                                                                <path
                                                                                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                                                            </svg>
                                                                        </button>
                                                                        <div id="dropdownDots"
                                                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 dark:bg-gray-700 dark:divide-gray-600">
                                                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                                                aria-labelledby="dropdownMenuIconButton">
                                                                                <li>
                                                                                    <a href="#"
                                                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reply</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"
                                                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Forward</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"
                                                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Copy</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"
                                                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"
                                                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex  items-center mt-2">
                                                                        <button
                                                                            class="mt-1 text-xs ml-12 mb-1 text-gray-500 dark:text-gray-400">
                                                                            1 día
                                                                        </button>
                                                                        <button
                                                                            class="mt-1 text-xs mx-4 mb-1 text-gray-500 dark:text-gray-400">
                                                                            Me gusta
                                                                        </button>
                                                                        <button
                                                                            class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                                                            Responder
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- Modal footer -->
                                                            <div
                                                                class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                <!-- Crear comentario -->
                                                                <div class="flex w-full items-start mt-2 gap-2.5">
                                                                    <img class="w-8 h-8 rounded-full"
                                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                                        alt="Jese image">
                                                                    <div class="w-full">
                                                                        <form>
                                                                            <div
                                                                                class="w-full mb-2 border border-gray-200 rounded-lg bg-white dark:border-gray-600">
                                                                                <div
                                                                                    class="px-4 bg-white rounded-t-lg dark:bg-gray-800">
                                                                                    <label for="comment"
                                                                                        class="sr-only">Your
                                                                                        comment</label>
                                                                                    <textarea id="comment" rows="1"
                                                                                        class="w-full overflow-hidden resize-none dark:focus:ring-blue-500 dark:focus:border-blue-500  px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                                                        placeholder="Escribe tu comentario..."
                                                                                        required></textarea>
                                                                                </div>
                                                                                <div
                                                                                    class="flex items-center justify-between px-2 dark:bg-gray-800">
                                                                                    <div
                                                                                        class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                                                                        <button type="button"
                                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                                            <svg class="w-3 h-3"
                                                                                                aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 12 20">
                                                                                                <path
                                                                                                    stroke="currentColor"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="2"
                                                                                                    d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                                                            </svg>
                                                                                            <span class="sr-only">Attach
                                                                                                file</span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                                            <svg class="w-3 h-3"
                                                                                                aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 16 20">
                                                                                                <path
                                                                                                    d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                                                            </svg>
                                                                                            <span class="sr-only">Set
                                                                                                location</span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                                            <svg class="w-3 h-3"
                                                                                                aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 20 18">
                                                                                                <path
                                                                                                    d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                                            </svg>
                                                                                            <span class="sr-only">Upload
                                                                                                image</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <button type="submit"
                                                                                        class="inline-flex items-center mb-2 py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-full focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                                                        Publicar
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <aside class="dark:border-gray-600 border-gray-200 border-t">
                                                <div class="flex items-center mt-2">
                                                    <a href="#"
                                                        class="w-full text-gray-700 sfocus:z-10 dark:hover:text-blue-600 hover:text-blue-600 hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Me
                                                        gusta
                                                    </a>
                                                    <button id="commentButton1" data-collapse-toggle="commentSection1"
                                                        aria-expanded="false" aria-controls="commentSection"
                                                        class="w-full text-gray-700 focus:z-10 dark:hover:text-blue-600 hover:text-blue-600  hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Comentar
                                                    </button>
                                                </div>
                                            </aside>
                                            <!-- Sección de Comentarios -->
                                            <div id="commentSection1"
                                                class="hidden mt-2 dark:border-gray-600 border-gray-200 border-t">

                                                <div class="flex items-start mt-2 gap-2.5">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="Jese image">

                                                    <div class="w-full">
                                                        <form>
                                                            <div
                                                                class="w-full mb-2 border border-gray-200 rounded-lg bg-white dark:border-gray-600">
                                                                <div
                                                                    class="px-4 bg-white rounded-t-lg dark:bg-gray-800">
                                                                    <label for="comment" class="sr-only">Your
                                                                        comment</label>
                                                                    <textarea id="comment" rows="1"
                                                                        class="w-full overflow-hidden resize-none dark:focus:ring-blue-500 dark:focus:border-blue-500  px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                                        placeholder="Escribe tu comentario..."
                                                                        required></textarea>
                                                                </div>
                                                                <div
                                                                    class="flex items-center justify-between px-2 dark:bg-gray-800">
                                                                    <div
                                                                        class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                                                        <button type="button"
                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 12 20">
                                                                                <path stroke="currentColor"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                                            </svg>
                                                                            <span class="sr-only">Attach file</span>
                                                                        </button>
                                                                        <button type="button"
                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="currentColor" viewBox="0 0 16 20">
                                                                                <path
                                                                                    d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                                            </svg>
                                                                            <span class="sr-only">Set location</span>
                                                                        </button>
                                                                        <button type="button"
                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="currentColor" viewBox="0 0 20 18">
                                                                                <path
                                                                                    d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                            </svg>
                                                                            <span class="sr-only">Upload image</span>
                                                                        </button>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="inline-flex items-center mb-2 py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-full focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                                        Publicar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                    <div class="bg-white p-4 border rounded-xl">
                                        <article>
                                            <div class="flex items-center mb-4">
                                                <img class="w-10 h-10 me-4 rounded-full"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="">
                                                <div class=" dark:text-white">
                                                    <span class="font-semibold text-gray-900 dark:text-white">Acxel
                                                        Aplicano </span>
                                                    <div class="text-xs text-gray-500 dark:text-gray-500">hace dos días
                                                    </div>
                                                </div>

                                            </div>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400">This is my third Invicta
                                                Pro Diver.
                                                They are just fantastic value for money. This one arrived yesterday and
                                                the first
                                                thing I did was set the time, popped on an identical strap from another
                                                Invicta and
                                                went in the shower with it to test the waterproofing.... No problems.
                                            </p>

                                            <a href="#"
                                                class="block mb-5 text-sm font-medium text-blue-600 dark:text-blue-500">Read
                                                more</a>
                                            <div class="flex justify-between items-center">
                                                <button class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                                    19 reacciones</button>
                                                <p class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                                    Ver los 108 comentarios</p>
                                            </div>


                                            <aside class="dark:border-gray-600 border-gray-200 border-t">
                                                <div class="flex items-center mt-2">
                                                    <a href="#"
                                                        class="w-full text-gray-700 sfocus:z-10 dark:hover:text-blue-600 hover:text-blue-600 hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Me
                                                        gusta
                                                    </a>
                                                    <button id="commentButton" data-collapse-toggle="commentSection"
                                                        aria-expanded="false" aria-controls="commentSection"
                                                        class="w-full text-gray-700 focus:z-10 dark:hover:text-blue-600 hover:text-blue-600  hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Comentar
                                                    </button>
                                                </div>
                                            </aside>
                                            <!-- Sección de Comentarios -->
                                            <div id="commentSection"
                                                class="hidden mt-2 dark:border-gray-600 border-gray-200 border-t">

                                                <div class="flex items-start mt-2 gap-2.5">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="Jese image">
                                                    <div class="w-full">

                                                        <form>
                                                            <div
                                                                class="w-full mb-2 border border-gray-200 rounded-lg bg-white dark:border-gray-600">
                                                                <div
                                                                    class="px-4 bg-white rounded-t-lg dark:bg-gray-800">
                                                                    <label for="comment" class="sr-only">Your
                                                                        comment</label>
                                                                    <textarea id="comment" rows="1"
                                                                        class="w-full overflow-hidden resize-none dark:focus:ring-blue-500 dark:focus:border-blue-500  px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                                        placeholder="Escribe tu comentario..."
                                                                        required></textarea>
                                                                </div>
                                                                <div
                                                                    class="flex items-center justify-between px-2 dark:bg-gray-800">
                                                                    <div
                                                                        class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                                                        <button type="button"
                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 12 20">
                                                                                <path stroke="currentColor"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                                            </svg>
                                                                            <span class="sr-only">Attach file</span>
                                                                        </button>
                                                                        <button type="button"
                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="currentColor" viewBox="0 0 16 20">
                                                                                <path
                                                                                    d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                                            </svg>
                                                                            <span class="sr-only">Set location</span>
                                                                        </button>
                                                                        <button type="button"
                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="currentColor" viewBox="0 0 20 18">
                                                                                <path
                                                                                    d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                            </svg>
                                                                            <span class="sr-only">Upload image</span>
                                                                        </button>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="inline-flex items-center mb-2 py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-full focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                                        Publicar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </main>
                        </div>
                        <div class="hidden w-full rounded-lg bg-white dark:bg-gray-800" id="dashboard" role="tabpanel"
                            aria-labelledby="dashboard-tab">
                            <div class="relative overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
                                        <tr class="border-b mb-2">
                                            <p class="mx-4 my-4 font-medium text-xl">
                                                Información de presentación
                                            </p>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                                                Tipo de usuario
                                            </th>
                                            <td class="px-6 py-4 whitespace-normal">
                                                Silver Lorem ipsum
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                                                Número de teléfono
                                            </th>
                                            <td class="px-6 py-4 whitespace-normal">
                                                Silver Lorem ipsum, dolor sit arum aperiam, numquam quidem modi quae
                                                officia vitae corrupti.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                                                País
                                            </th>
                                            <td class="px-6 py-4 whitespace-normal">
                                                White
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                                                Ciudad
                                            </th>
                                            <td class="px-6 py-4 whitespace-normal">
                                                White
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                                                Dirección
                                            </th>
                                            <td class="px-6 py-4 whitespace-normal">
                                                White
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                                                Sexo
                                            </th>
                                            <td class="px-6 py-4 whitespace-normal">
                                                Black
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                                                Fecha nacimiento
                                            </th>
                                            <td class="px-6 py-4 whitespace-normal">
                                                Gray
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                                                Estado civil
                                            </th>
                                            <td class="px-6 py-4 whitespace-normal">
                                                Red
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                                                Intereses
                                            </th>
                                            <td class="px-6 py-4 whitespace-normal">
                                                Red
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="hidden rounded-xl" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <div class="relative overflow-x-auto sm:rounded-lg">
                                <div
                                    class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
                                    <label for="table-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div
                                            class="absolute m-4 inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                            </svg>
                                        </div>
                                        <input type="text" id="table-search-users"
                                            class="block m-4 p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Search for users">
                                    </div>
                                </div>
                                <table
                                    class="w-full rounded-xl text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <tbody>
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                <img class="w-10 h-10 rounded-full"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="Jese image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Neil Sims<span
                                                            class="bg-blue-100 ml-4 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Estudiante</span>
                                                    </div>
                                                    <div class="font-normal text-gray-500">Joined Dic 2019•Active a week
                                                        ago</div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                30 seguidores
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                    Online
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <button type="button"
                                                    class="text-blue-700 hover:text-white border w-36 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Dejar
                                                    de seguir</button>
                                            </td>
                                        </tr>
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                            <th scope="row"
                                                class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <img class="w-10 h-10 rounded-full"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="Jese image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Bonnie Green<span
                                                            class="bg-blue-100 ml-4 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Estudiante</span>
                                                    </div>
                                                    <div class="font-normal text-gray-500">Joined Dic 2019•Active a week
                                                        ago</div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                0 seguidores
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                    Online
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <button type="button"
                                                    class="text-blue-700 hover:text-white border w-36 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Dejar
                                                    de seguir</button>
                                            </td>
                                        </tr>
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                            <th scope="row"
                                                class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <img class="w-10 h-10 rounded-full"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="Jese image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Jese Leos<span
                                                            class="bg-blue-100 ml-4 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Estudiante</span>
                                                    </div>
                                                    <div class="font-normal text-gray-500">Joined Dic 2019•Active a week
                                                        ago</div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                16 seguidores
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                    Online
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <button type="button"
                                                    class="text-blue-700 hover:text-white border w-36 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Dejar
                                                    de seguir</button>
                                            </td>
                                        </tr>
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                            <th scope="row"
                                                class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <img class="w-10 h-10 rounded-full"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="Jese image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Thomas Lean<span
                                                            class="bg-blue-100 ml-4 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Estudiante</span>
                                                    </div>
                                                    <div class="font-normal text-gray-500">Joined Dic 2019•Active a week
                                                        ago</div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                4 seguidores
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                    Online
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <button type="button"
                                                    class="text-blue-700 hover:text-white border w-36 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Dejar
                                                    de seguir</button>
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">

                                            <th scope="row"
                                                class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <img class="w-10 h-10 rounded-full"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="Jese image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Leslie Livingston<span
                                                            class="bg-blue-100 ml-4 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Estudiante</span>
                                                    </div>
                                                    <div class="font-normal text-gray-500">Joined Dic 2019•Active a week
                                                        ago</div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                1 seguidor
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Offline
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <button type="button"
                                                    class="text-blue-700 hover:text-white border w-36 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Dejar
                                                    de seguir</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="hidden w-full rounded-lg" id="contacts" role="tabpanel"
                            aria-labelledby="contacts-tab">
                            <div class="relative overflow-x-auto">
                                <a href="#"
                                    class="flex flex-col mb-1 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="object-cover p-6 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                        alt="">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Noteworthy technology acquisitions 2021</h5>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Public • Group • Active 4
                                            hours
                                            ago
                                        </p>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the
                                            biggest
                                            enterprise technology acquisitions of 2021 so far, in reverse chronological
                                            order.</p>
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <button type="button"
                                                class="text-blue-700 hover:text-white border w-48 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Miembro</button>
                                        </div>
                                    </div>
                                </a>

                                <a href="#"
                                    class="flex flex-col mb-1 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="object-cover p-6 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                        alt="">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Noteworthy technology acquisitions 2021</h5>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Public • Group • Active 4
                                            hours
                                            ago
                                        </p>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the
                                            biggest
                                            enterprise technology acquisitions of 2021 so far, in reverse chronological
                                            order.</p>
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <button type="button"
                                                class="text-blue-700 hover:text-white border w-48 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Miembro</button>
                                        </div>
                                    </div>
                                </a>

                                <a href="#"
                                    class="flex flex-col mb-1 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="object-cover p-6 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                        alt="">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Noteworthy technology acquisitions 2021</h5>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Public • Group • Active 4
                                            hours
                                            ago
                                        </p>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the
                                            biggest
                                            enterprise technology acquisitions of 2021 so far, in reverse chronological
                                            order.</p>
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <button type="button"
                                                class="text-blue-700 hover:text-white border w-48 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Miembro</button>
                                        </div>
                                    </div>
                                </a>

                                <a href="#"
                                    class="flex flex-col mb-1 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="object-cover p-6 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                        alt="">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Noteworthy technology acquisitions 2021</h5>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Public • Group • Active 4
                                            hours
                                            ago
                                        </p>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the
                                            biggest
                                            enterprise technology acquisitions of 2021 so far, in reverse chronological
                                            order.</p>
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <button type="button"
                                                class="text-blue-700 hover:text-white border w-48 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Miembro</button>
                                        </div>
                                    </div>
                                </a>

                                <a href="#"
                                    class="flex flex-col mb-1 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="object-cover p-6 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                        alt="">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Noteworthy technology acquisitions 2021</h5>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Public • Group • Active 4
                                            hours
                                            ago
                                        </p>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the
                                            biggest
                                            enterprise technology acquisitions of 2021 so far, in reverse chronological
                                            order.</p>
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <button type="button"
                                                class="text-blue-700 hover:text-white border w-48 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Miembro</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>