@extends('layouts.template')

@section("content") 
    <p class="mx-12 my-12 mb-2">{{ session('status') }}</p>
    <h2 class="mx-12 my-12 mb-2">Toutes les offres ({{ $annonces->total() }})</h2>


    <form method="GET" action="{{ route('announce.search') }}">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Trouver une annonce</label>
        <div class="relative w-96 mx-12">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" id="search-announce" name="query" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Tacticool, Call Of Duty..." required="">
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Trouver
            </button>
        </div>
    </form>

    <div class="mx-12 my-6 flex justify-between">
        @if(count($annonces) !== 0)
            @foreach ($annonces as $item)
            <div class="max-w-sm bg-white mb-6 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="{{ route("announce.show", $item->id) }}">
                    <img class="rounded-t-lg" src="{{ asset('storage/' . $item->image)}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="{{ route("announce.show", $item->id) }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->title }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $item->description }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $item->type }}</p>
                    <a href="{{ route("announce.show", $item->id) }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Voir plus
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
            @endforeach
        @else 
        <div>
            <p>Aucune annonce n'a été publiée pour le moment.</p>
        </div>
        @endif

    </div>

    {{ $annonces->links() }}
@endsection

