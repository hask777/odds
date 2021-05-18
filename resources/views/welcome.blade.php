<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('css/app.css') }}" rel="stylesheet">
        {{-- <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet"> --}}
    </head>
    <body class="bg-gray-300">
        <header class="bg-gray-700 pl-2 pr-2 flex text-white">
            header
        </header>
        <main class="ml-4 mr-4 mt-4">
            <div class="grid grid-cols-12 gap-4">
                
                <div class="col-span-3 border bg-white p-4">
                    @foreach($sports as $sport)
                        <div>
                            <a href="{{ route('sport', $sport['key']) }}">{{$sport['details']}}</a>
                            <span class="ml-4 font-bold">{{$sport['title']}}</span>
                        </div>   
                    @endforeach
                </div>
                <div class="col-span-6 border bg-white p-4 font-bold">
                    @yield('content')
                </div>
                <div class="col-span-3 border bg-white p-4">
                   3
                </div>
            
            </div>
        </main>
    </body>
</html>
