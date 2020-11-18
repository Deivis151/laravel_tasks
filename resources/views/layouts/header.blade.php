<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    {{--<body class="font-sans antialiased">--}}
        <body class="bg-blue-700">
        <div class="min-h-screen bg-gray-100">
           

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div style="position:center;">
                    <nav>
                        <a href="/egzaminas/public/tasks" style="padding: 10px" >Tasks </a> 
                        <a href="/egzaminas/public/statuses" style="padding: 10px">Statuses </a> 
                        <a href="/egzaminas/public/tasks/create" style="padding: 10px">Create New Task</a>             
                        <a href="/egzaminas/public/statuses/create" style="padding: 10px">Create New Statuse</a> 
                    </nav>
                    </div>
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    Sveikas,
                    @guest
                    Nepazistamasis
                    <a class="nav-link" href="{{ route('login') }}">PRISIJUNGTI</a>
                    @else
                    {{Auth::user()->name}}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">ATSIJUNGTI</button>
                    </form>
                    @endguest
                </div>
            </header>
            @include('layouts.messages')
           

            <!-- Page Content -->
            <main>
                @yield('content') 
            </main>
        </div>
    </body>
</html>