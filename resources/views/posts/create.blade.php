<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Crear Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('posts.store')}}" method="post">
                        @csrf
                        <div class="grid grid-cols-1">
                            <div class="mt-4">
                                <x-label for="titulo" :value="__('Titulo')" />

                                <x-input id="titulo" class="block w-full mt-1" type="text" name="titulo"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="autor" :value="__('Autor')" />

                                <x-input id="autor" class="block w-full mt-1" type="text" name="autor"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="entrada" :value="__('Entrada')" />

                                <x-input id="entrada" class="block w-full mt-1" type="text" name="entrada"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="bloque1" :value="__('Body')" />
                              <textarea name="bloque1" id="bloque1"class="block w-full mt-1"  cols="30" rows="10"></textarea>

                            </div>
                            <div class="mt-4">
                                <x-label for="bloque2" :value="__('Body bis')" />
                                <textarea name="bloque2" id="bloque2" cols="30" rows="10"></textarea>

                            </div>
                        </div>
                        <div class="mt-4">
                            <x-label for="fecha" :value="__('Fecha')" />

                            <x-input id="fecha" class="block mt-1" type="date" name="fecha"  />

                        </div>
                        <x-button class="mt-5 ml-4">
                            {{ __('Crea') }}
                        </x-button>
                       </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script>
           ClassicEditor
        .create( document.querySelector( '#bloque1' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#bloque2' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
</x-app-layout>
