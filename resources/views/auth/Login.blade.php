@extends("layouts.template")

@section('content')

<div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 m-auto my-12">
    <form class="space-y-6" action="{{ url('user/login') }}" method="post">
        @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Ravi de vous revoir</h5>
        @foreach ($errors->all() as $error )
        <p class="m-0 p-0 text-red-500">{{ $error }}</p>
        @endforeach
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Votre E-mail</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required="">
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Votre Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
        </div>
        <div class="flex items-start">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Se rappeler de moi</label>
            </div>
            <a href="#" class="ml-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Mot de passe oublié ?</a>
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Connexion</button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Vous n'êtes pas inscrit ? <a href=" {{  route('signin')  }}" class="text-blue-700 hover:underline dark:text-blue-500">Créer un compte</a>
        </div>
    </form>
</div>


@endsection