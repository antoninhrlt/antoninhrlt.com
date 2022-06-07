<html lang="en" class="flex w-full h-full items-center justify-center text-center">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>@yield('title') - Antonin Hérault</title>

        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="flex flex-col items-center justify-center text-center w-1/4 h-full bg-dark">
        @yield('content')
    </body>
</html>
