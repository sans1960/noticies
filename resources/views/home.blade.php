@extends('layouts.base')
@section('content')
<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-5 mx-auto">
    <div class="flex flex-col">
      <!-- <div class="h-1 bg-gray-800 rounded overflow-hidden">
        <div class="w-24 h-full bg-indigo-500"></div>
      </div> -->
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
        <h1 class="sm:w-2/5 text-white font-medium title-font text-2xl mb-2 sm:mb-0">Noticies


        </h1>
        <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget neque a risus semper feugiat. Nullam sit amet ex mi. Ut tincidunt diam vitae nisi sollicitudin, id tempus dui hendrerit. Vivamus massa tellus, tincidunt accumsan vulputate id, scelerisque tristique tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc augue odio, congue et nunc non, consectetur feugiat eros. Pellentesque iaculis, quam id accumsan dapibus, ligula purus pellentesque lorem, eget molestie nunc arcu vitae lacus. Phasellus condimentum, mi nec blandit dignissim, elit dolor placerat sapien, vitae semper nisl nunc et tellus. Phasellus in imperdiet libero. Ut et nulla augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus eget ligula in quam fringilla facilisis vitae vel massa. Praesent non ex semper, tempus felis a, dapibus justo. Curabitur id nisl molestie, viverra magna ac, interdum sapien. .</p>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1203x503">
        </div>
        <h2 class="text-xl font-medium title-font text-white mt-5">Blog</h2>
        <p class="text-base leading-relaxed mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget neque a risus semper feugiat. Nullam sit amet ex mi. Ut tincidunt diam vitae nisi sollicitudin, id tempus dui hendrerit. Vivamus massa tellus, tincidunt accumsan vulputate id, scelerisque tristique tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc augue odio, congue et nunc non, consectetur feugiat eros. Pellentesque iaculis, quam id accumsan dapibus, ligula purus pellentesque lorem, eget molestie nunc arcu vitae lacus. Phasellus condimentum, mi nec blandit dignissim, elit dolor placerat sapien, vitae semper nisl nunc et tellus. Phasellus in imperdiet libero. Ut et nulla augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus eget ligula in quam fringilla facilisis vitae vel massa. Praesent non ex semper, tempus felis a, dapibus justo. Curabitur id nisl molestie, viverra magna ac, interdum sapien. .</p>
        <a class="text-indigo-400 inline-flex items-center mt-3" href="/blog"> Mes
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1204x504">
        </div>
        <h2 class="text-xl font-medium title-font text-white mt-5">Links</h2>
        <p class="text-base leading-relaxed mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget neque a risus semper feugiat. Nullam sit amet ex mi. Ut tincidunt diam vitae nisi sollicitudin, id tempus dui hendrerit. Vivamus massa tellus, tincidunt accumsan vulputate id, scelerisque tristique tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc augue odio, congue et nunc non, consectetur feugiat eros. Pellentesque iaculis, quam id accumsan dapibus, ligula purus pellentesque lorem, eget molestie nunc arcu vitae lacus. Phasellus condimentum, mi nec blandit dignissim, elit dolor placerat sapien, vitae semper nisl nunc et tellus. Phasellus in imperdiet libero. Ut et nulla augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus eget ligula in quam fringilla facilisis vitae vel massa. Praesent non ex semper, tempus felis a, dapibus justo. Curabitur id nisl molestie, viverra magna ac, interdum sapien. .</p>
        <a class="text-indigo-400 inline-flex items-center mt-3"> Mes
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1205x505">
        </div>
        <h2 class="text-xl font-medium title-font text-white mt-5">News</h2>
        <p class="text-base leading-relaxed mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget neque a risus semper feugiat. Nullam sit amet ex mi. Ut tincidunt diam vitae nisi sollicitudin, id tempus dui hendrerit. Vivamus massa tellus, tincidunt accumsan vulputate id, scelerisque tristique tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc augue odio, congue et nunc non, consectetur feugiat eros. Pellentesque iaculis, quam id accumsan dapibus, ligula purus pellentesque lorem, eget molestie nunc arcu vitae lacus. Phasellus condimentum, mi nec blandit dignissim, elit dolor placerat sapien, vitae semper nisl nunc et tellus. Phasellus in imperdiet libero. Ut et nulla augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus eget ligula in quam fringilla facilisis vitae vel massa. Praesent non ex semper, tempus felis a, dapibus justo. Curabitur id nisl molestie, viverra magna ac, interdum sapien. </p>
        <a class="text-indigo-400 inline-flex items-center mt-3"> Mes
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
