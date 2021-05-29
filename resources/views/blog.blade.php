@extends('layouts.base')
@section('content')
<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-5 mx-auto">
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
      @foreach ($blogs as $blog)
      <div class="p-4 md:w-1/2 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">

          <img alt="content" class="object-contain object-center h-full w-full" src="{{ asset('img/posts/'.$blog->url)}}">
        </div>
        <h2 class="text-2xl font-medium title-font text-white mt-5">{{$blog->titulo}}</h2>
        <h2 class="text-xl font-medium title-font text-white mt-5">{{$blog->autor}}</h2>
        <p class="text-base leading-relaxed mt-2">{{$blog->entrada}}</p>
        <p class="text-base leading-relaxed mt-2">{{$blog->fecha}}</p>
        <a class="text-indigo-400 inline-flex items-center mt-3" href="{{ route('blogs.show',$blog)}}"> Mes
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
