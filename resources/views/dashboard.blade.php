<x-layouts.app>
    <div
        class="bg-white dark:bg-gray-800  dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white overflow-hidden shadow-xl sm:rounded-lg p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        Bienvenido a tu panel de control {{ Auth::user()->name }}
    </div>
</x-layouts.app>