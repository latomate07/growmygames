@extends("layouts.template")

@section("content")
<section class="text-gray-600 body-font overflow-hidden">

  <div class="container px-5 py-20 mx-auto">
    <a href="{{ route('announce.list') }}"
      class="inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
      <svg aria-hidden="true" class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
          clip-rule="evenodd"></path>
      </svg>
      Catalogue d'offre
    </a>
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
        <div class="flex justify-between">
          <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $annonce->categorie->nom ?
            $annonce->categorie->nom : "Non classé" }}</h2>
          <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $annonce->type }}</h2>
        </div>

        <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $annonce->title }}</h1>
        <div class="flex mb-4">
          <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Description</a>
          <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Type de trafic</a>
          <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Règles</a>
        </div>
        <p class="leading-relaxed mb-4" id="description">
          {{ $annonce->description }}
        </p>
        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">2€ par conversion</span>
          <button
            class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Rejoindre</button>
          <button
            class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path
                d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
              </path>
            </svg>
          </button>
        </div>
      </div>
      <img alt="image" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
        src="{{ asset('storage/' . $annonce->image) }}">
    </div>
  </div>
</section>

@endsection