@extends('layouts.template')

@section("content") 
    <p>{{ session('status') }}</p>
    <h2 class="mx-12 my-12 mb-2">Nos annonces ({{ $annonces->total() }})</h2>

    <div class="mx-12 my-6">
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

