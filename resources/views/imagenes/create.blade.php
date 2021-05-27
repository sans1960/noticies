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
                     <form action="{{route('imagenes.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-2">
                            <div class="mt-4 ml-4">
                                <x-label for="post_id" :value="__('Post')" />

                                <select class="block w-full mt-1" name="post_id">
                                    <option value="">Post Titulo</option>
                                    @foreach($posts as $post)
                                      <option value="{{$post->id}}">{{$post->titulo}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="mt-4 ml-4">
                                <x-label for="imagen" :value="__('Imagen')" />

                                <x-input id="imagen" class="block w-full mt-1" type="file" name="imagen"  />

                            </div>
                              <div class="mt-4 ml-4">
                                <x-label for="titulo" :value="__('Titulo')" />

                                <x-input id="titulo" class="block w-full mt-1" type="text" name="titulo"  />

                            </div>
                            <div class="mt-4 ml-4">
                              
                                       <x-button class="mt-5 ml-4">
                                           {{ __('Crea') }}
                                       </x-button>
                            </div>

                          
                      
                       </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>