<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Imagenes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                     @if ($message = Session::get('success'))
                    <div class="p-6 text-white bg-green-500">
                       <p> {{$message}}</p>

                    </div>
                    @endif
                    <div class="flex justify-end mt-5 ">
                        <a href="{{route('imagenes.create')}}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25">Añadir Imagen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
