@php 
$tempGroupLink = [
    ['link' => route('home'), 'title' => 'Home'],
    // ['link' => "/#about", 'title' => 'About'],
    // ['link' => "/#client", 'title' => 'Our Client'],
    ['link' => route('service.user'), 'title' => 'Service'],
    ['link' => route('project.user'), 'title' => 'Project'],
    ['link' => route('home'), 'title' => 'Contact'],
    // ['link' => route('contact'), 'title' => 'Contant Us'],
];
@endphp 

<div class="fixed z-50 top-0 justify-center w-full bg-white" id="navbar">
    <header class="container mx-auto flex justify-between items-center py-2">
        <div class="w-20">
            <img src="/assets/images/dcs.png" alt="logo" class="w-52">
        </div>
        <div class="grid grid-cols-4 gap-12 place-items-center">
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