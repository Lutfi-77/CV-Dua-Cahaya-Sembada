@php 
$tempGroupLink = [
    ['link' => route('home'), 'title' => 'Home'],
    ['link' => route('home'), 'title' => 'About'],
    ['link' => route('home'), 'title' => 'Our Client'],
    ['link' => route('service.user'), 'title' => 'Service'],
    ['link' => route('project.user'), 'title' => 'Project'],
    ['link' => route('home'), 'title' => 'Team'],
    ['link' => route('contact'), 'title' => 'Contant Us'],
];
@endphp 

<div class="fixed z-50 top-0 justify-center w-full py-7">
    <header class="container mx-auto flex justify-between items-center py-2">
        <div class="w-20">
            <img src="https://rec-data.kalibrr.com/www.kalibrr.com/logos/T65KJRY8ZHA62VRLK76JZU8S72R79J2LDJ7MYJ6P-5d356a15.png" alt="logo" class="w-full">
        </div>
        <div class="grid grid-cols-7 gap-3 place-items-center">
            @foreach ($tempGroupLink as $itemLink)
                <a href="{{$itemLink['link']}}" class="text-white font-semibold">{{$itemLink['title']}}</a>
            @endforeach
        </div>
    </header>
</div>