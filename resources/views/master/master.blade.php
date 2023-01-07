<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
</head>

<body class="font-nunito">
    {{-- Header --}}
    <div class="fixed top-0 justify-center w-full">
        <header class="container mx-auto flex justify-between items-center bg-pink-600 py-2">
            <div class="w-14">
                <img src="https://rec-data.kalibrr.com/www.kalibrr.com/logos/T65KJRY8ZHA62VRLK76JZU8S72R79J2LDJ7MYJ6P-5d356a15.png" alt="logo">
            </div>
            <div class="grid grid-cols-6 gap-2 place-items-center">
                <a href="">Home</a>
                <a href="">About Us</a>
                <a href="">Our Client</a>
                <a href="">Our Service</a>
                <a href="">Our Project</a>
                <a href="">Contact Us</a>
            </div>
        </header>
    </div>
    {{-- End Header --}}
    
</body>

</html>
 