@extends('layouts.template')

@section('content')
<h2 class="mx-16 my-12">Nos webmasters</h2>

@if ($list->count())
<div class="flex justify-around">
    @foreach ($list as $user )
    <div class="fmx-16 my-12 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col items-center pb-10">
            <img src="{{ asset('storage/' . $user->avatar )}}" class="mb-3 w-24 h-24 rounded-full shadow-lg">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $user->name }}</h5>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="#"
                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Profil
                </a>
                <a href="#"
                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">
                    Message
                </a>
            </div>
        </div>
    </div>

    @endforeach
</div>

{{ $list->links() }}

@else
   <p class="text-center m-52">Aucun webmasters n'a été trouvé !</p>
@endif

@endsection