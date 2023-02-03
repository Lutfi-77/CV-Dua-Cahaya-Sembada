<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/logo.svg')}}">

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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>  
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

    @stack('styles')

</head>

<body>

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


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63dcefe6c2f1ac1e20313707/1gobgi7im';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
 