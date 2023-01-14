<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>


    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <style>
        html,
        body {
            width: 100%;
            height: 100%;
        }
        body {
            font-family: "Poppins";
        }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-nunito">

    @include('sweetalert::alert')
    {{-- Header --}}
    @include('master.header')
    {{-- End Header --}}
    @isset($topSpace) <div class="mt-7"> @endisset
        
        @yield('content')
        
    @isset($topSpace) </div> @endisset

    {{-- Footer --}}
    @include('master.footer')
    
    
    @stack('scripts')
</body>

</html>
 