<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Grow My Games</title>
    </head>
    <body class="font-sans antialiased">
        <div id="app">
            @include("partials.nav")
            <main class="content">
                @yield("content")
            </main>
            @include("partials.footer")
        </div>
    </body>
</html>