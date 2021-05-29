@extends('layouts.base')
@section('content')
<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-5 mx-auto">
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

      <div class="p-4  sm:mb-0 mb-6">
        <div class="rounded-lg h-80 overflow-hidden">

          <img alt="content" class="object-cover object-top h-full w-full" src="{{ asset('img/posts/'.$blog->url)}}">
        </div>
        <h2 class="text-2xl font-medium title-font text-white mt-5">{{$blog->titulo}}</h2>
        <h2 class="text-xl font-medium title-font text-white mt-5">{{$blog->autor}}</h2>
        <p class="text-base leading-relaxed mt-2">{{$blog->entrada}}</p>
        <p class="text-base leading-relaxed mt-2">{{$blog->fecha}}</p>
        <div class="">
          {!!$blog->bloque1!!}
        </div>

      </div>

    </div>
  </div>
</section>
@endsection
