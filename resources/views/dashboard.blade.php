<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    @can('access')
                        <div @class(['row', 'font-bold' => false])>Bien venido</div>
                    @endcan

                    @can('list')
                        <div @class(['row', 'font-bold' => false])><a href="{{route('role.index')}}">ROLES</a></div>
                    @endcan

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
