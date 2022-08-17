<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Grow My Games</title>
        <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased">
        <div id="app">
            <header>
                @include("partials.nav")
            </header>

            <main class="content">
                @yield("content")
            </main>

            <footer class="p-4 bg-gray-50 sm:p-6 dark:bg-gray-800">
                @include("partials.footer")
            </footer>
        </div>
    </body>
</html>