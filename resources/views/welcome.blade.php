<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

        <!-- Fonts -->
        
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <section>
            <div class=" flex justify-center items-center ">
                {{-- <h1>{{ $desk }}</h1>
                <ul class="text-2xl">
                    @foreach($span as $text)
                    <li>{{ $text }}</li>
                    @endforeach
                </ul> --}}
                <h1 class="text-5xl font-semibold">WELCOME</h1>
            </div>
        </section>

    </body>
</html>
