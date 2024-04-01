<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/scss/app.scss' ,'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

       <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="logo-block">
                <img class="logo-img" src="{{URL::asset('/image/logo.svg')}}" alt="logo_isayev_az">
                <p class="logo-text">ISAYEV.AZ</p>
            </div>
            </div>
        </div>
       </div>

    </body>
</html>
