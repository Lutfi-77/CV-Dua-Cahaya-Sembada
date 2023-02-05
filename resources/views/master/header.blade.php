@php 
$tempGroupLink = [
    ['link' => '#home', 'title' => 'Home'],
    // ['link' => "/#about", 'title' => 'About'],
    // ['link' => "/#client", 'title' => 'Our Client'],
    ['link' => '#service', 'title' => 'Service'],
    ['link' => '#project', 'title' => 'Project'],
    ['link' => '#contact', 'title' => 'Contact'],
    // ['link' => route('contact'), 'title' => 'Contant Us'],
];
@endphp 

<div class="fixed z-50 top-0 justify-center w-full bg-white" id="navbar">
    <header class="container mx-auto flex md:just justify-between items-center py-4">
        <div class="w-full flex items-center">
            <img src="/assets/images/logo.svg" alt="logo" class="w-8 md:w-14">
            <span class="ml-5 text-lg md:text-2xl">PT. Dua Cahaya Sakti</span>
        </div>
        <div class="md:grid grid-cols-4 gap-12 place-items-center hidden">
            @foreach ($tempGroupLink as $itemLink)
                <a href="{{$itemLink['link']}}" class="font-semibold navbar__link">{{$itemLink['title']}}</a>
            @endforeach
        </div>
    </header>
</div>

@push('scripts')
<script>
    // (function() {
        window.onscroll = function (event) {
            var scroll = window.pageYOffset;
            var navEl = document.getElementById("navbar");

            console.log(scroll);
            if(scroll < 1) {
                navEl.classList.remove("shadow-sm");
                navEl.classList.remove("border-b");
                navEl.classList.remove("border-b-gray-300");
            }


            if(scroll > 2) {
                navEl.classList.add("shadow-sm");
                navEl.classList.add("border-b");
                navEl.classList.add("border-b-gray-300");
            }
        }
    // })()

</script>
@endpush