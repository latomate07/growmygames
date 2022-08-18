@extends("layouts.template")

@section('content')

<div
  class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 m-auto my-12">
  <form class="space-y-6" action="#">
    @csrf
    <h5 class="text-xl font-medium text-gray-900 dark:text-white">Rejoignez-nous</h5>
    <div>
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Votre E-mail</label>
      <input type="email" name="email" id="email"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
        placeholder="name@company.com" required="">
    </div>
    <div>
      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Votre nom
        complet</label>
      <input type="email" name="email" id="email"
        class="mb-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
        placeholder="Sebastien Legrosnez" required="">
    </div>

    <label for="bordered-radio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Type d'utilisateur :</label>
    <div class="flex justify-between" style="margin-top: 6px">
      <div class="flex items-center px-6 mr-2 rounded border border-gray-200 dark:border-gray-700">
        <input id="bordered-radio-1" type="radio" value="" name="bordered-radio"
          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="bordered-radio-1"
          class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">
          Annonceur
        </label>
      </div>
      <div class="flex items-center px-8 rounded border border-gray-200 dark:border-gray-700">
        <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio"
          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="bordered-radio-2"
          class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">
          Webmaster
        </label>
      </div>
    </div>
    <div>
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Votre Mot de
        passe</label>
      <input type="password" name="password" id="password" placeholder="••••••••"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
        required="">
    </div>
    <button type="submit"
      class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      S'inscrire
    </button>
    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
      Vous êtes déjà inscrit ? <a href=" {{  route('login')  }}"
        class="text-blue-700 hover:underline dark:text-blue-500">Connectez-vous</a>
    </div>
  </form>
</div>
@endsection