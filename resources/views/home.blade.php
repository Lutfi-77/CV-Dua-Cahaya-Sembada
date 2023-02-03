@extends('master.master')

@section('title', 'Home')

@push('styles')
<style>
    /* .navbar__link {
        color : white;
    } */

</style>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js" integrity="sha512-A64Nik4Ql7/W/PJk2RNOmVyC/Chobn5TY08CiKEX50Sdw+33WTOpPJ/63bfWPl0hxiRv1trPs5prKO8CpA7VNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
@endpush

@section('content')

{{-- #region hero home --}}
<div class="home__background-hero w-full overflow-x-hidden" id="home">
    <div class="text-center m-auto px-2">
        <h2 class="text-gray-800 font-semibold tracking-wide lg:text-2xl md:text-xl  mb-20 " id="home__hero-title">
            <span class=" text-2xl md:text-6xl lg:text-7xl mb-7 md:mb-16 text-gray-800">Procurement <span
                    class="text-blue-700"> Specialist </span> </span>

            <br />
            For Your business need.

            Whatever you need for your business,
            <br class="hidden md:block" />
            we'll make sure you get it.


        </h2>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-10 h-10 text-gray-700 mx-auto animate-bounce" id="arrow-down-animation">
            <path fill-rule="evenodd"
                d="M12 2.25a.75.75 0 01.75.75v16.19l2.47-2.47a.75.75 0 111.06 1.06l-3.75 3.75a.75.75 0 01-1.06 0l-3.75-3.75a.75.75 0 111.06-1.06l2.47 2.47V3a.75.75 0 01.75-.75z"
                clip-rule="evenodd" />
        </svg>




    </div>

    <div class="hero__arrow-down"></div>

</div>
{{-- #endregion --}}


{{-- #region about section --}}

<div class="bg-yellow-100 pt-32 pb-12 home__about_background" id="about">
    <div class="container mx-auto" id="about">
        <h3 class="text-4xl md:text-6xl font-semibold mb-9 md:mb-16">About Us</h3>

        <div class="leading-10 md:text-lg mb-7 home__about_us">
            We founded this company to provide companies with what they need to do business. Let us worry about getting
            you the tools you need so you can focus on running your business. Since we started in 2020, we have been
            able to help small companies get bigger and ensure large companies run smoothly.
            <br />
            <br />

            <span class="mt-6">
                We take pride in being a partner you can trust to deliver you what you need, when you need it.
            </span>
        </div>
    </div>
</div>

{{-- #endregion --}}


{{-- #region Our Service section --}}

<div class="mt-16 md:mt-32 container mx-auto text-center " id="service">
    <h3 class="text-3xl md:text-5xl font-semibold mb-9 md:mb-32 text-center">Our Services</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-14 mt-24">
        <div class="text-sm leading-loose shadow-lg px-6 pb-7 pt-14 relative rounded-2xl">
            <img class="mx-auto w-16 absolute inset-x-0 -inset-y-10" src="/assets/images/thumb_up.svg" />
            <h6 class="text-lg font-semibold mb-3 text-yellow-600 "> procurement </h6>
            <span class="text-justify my-auto">Procurement of HSE equipments, Construction material, IT Products,
                Textile Products, and more </span>
        </div>

        <div class="text-sm leading-loose shadow-lg px-6 pb-7 pt-14 relative rounded-2xl">
            <img class="mx-auto w-16 absolute inset-x-0 -inset-y-10" src="/assets/images/check.svg" />
            <h6 class="text-lg font-semibold mb-3 text-yellow-600 "> installation </h6>
            <span class="text-justify my-auto">Mechanical, Electrical, and Plumbing Installation </span>
        </div>

        <div class="text-sm leading-loose shadow-lg px-6 pb-7 pt-14 relative rounded-2xl">
            <img class="mx-auto w-16 absolute inset-x-0 -inset-y-10" src="/assets/images/love.svg" />
            <h6 class="text-lg font-semibold mb-3 text-yellow-600 "> Construction </h6>
            <span class="text-justify my-auto"> Building Construction </span>
        </div>
    </div>

</div>
{{-- #endregion --}}



{{-- #region our vision section --}}
<div class="bg-yellow-100 mt-32 py-24">
    <div class=" container mx-auto text-center">
        <h3 class="text-3xl md:text-5xl font-semibold mb-9 md:mb-32 text-center text-yellow-700">Our Core Value</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-14 mt-24 justify-items-center">
            <div class="text-sm leading-loose">
                <i class="fi fi-sr-handshake text-4xl"></i>
                <h6 class="text-lg font-semibold mt-7"> Reliability </h6>
                <span>Depend on us to do it right </span>
            </div>

            <div class="text-sm leading-loose">
                <i class="fi fi-sr-hand-holding-box text-4xl"></i>
                <h6 class="text-lg font-semibold mt-7"> Respect </h6>
                <span>Mutual Courtesy & Kindness afforded to all </span>
            </div>

            <div class="text-sm leading-loose">
                <i class="fi fi-sr-fingerprint text-4xl"></i>
                <h6 class="text-lg font-semibold mt-7"> Integrity </h6>
                <span> Honest and Transparent in everything we do </span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 mt-24 justify-items-center">
            <div class="text-sm leading-loose">
                <i class="fi fi-sr-users-alt text-4xl mt-7"></i>
                <h6 class="text-lg font-semibold"> Collaboration </h6>
                <span> Together, we find solutions and tackle challenges </span>
            </div>


            <div class="text-sm leading-loose">
                <i class="fi fi-sr-hand-holding-heart text-4xl"></i>
                <h6 class="text-lg font-semibold mt-7"> Happiness </h6>
                <span> Fun, Laughter and Enjoyment along the way </span>
            </div>
        </div>
    </div>
</div>


{{-- #endregion --}}



{{-- #region Our Service section --}}

<div class="mt-16 md:mt-32 container mx-auto" id="project">
    <h3 class="text-3xl md:text-5xl font-semibold mb-9 md:mb-32 text-center">Our Previous Project</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-14 mt-24">
        <div class="text-sm leading-loose shadow-lg px-6 pb-7 pt-14 relative rounded-2xl">
            <span class=" my-auto"> Procurement and Installation contactless elevator button for Indosat </span>
        </div>

        <div class="text-sm leading-loose shadow-lg px-6 pb-7 pt-14 relative rounded-2xl">
            <span class=" my-auto"> Procurement and Instillation of touchless urinoir flushing system for Gojek </span>
        </div>

        <div class="text-sm leading-loose shadow-lg px-6 pb-7 pt-14 relative rounded-2xl">
            <span class=" my-auto">
                Procurement and Instillation of various MEP products for Bank Permata
            </span>
        </div>
    </div>

</div>
{{-- #endregion --}}

{{-- #region our client --}}


<div class="mt-16 md:mt-64 container mx-auto items-center" id="client">
    <h3 class="text-3xl md:text-5xl font-semibold mb-9 md:mb-16 text-center ">Our Client</h3>
    <div class="grid grid-cols-3 md:grid-cols-5 gap-14 mt-16 items-center">
        <img src="{{url('assets/brand/gojek.svg')}}" />
        <img src="{{url('assets/brand/indosat.svg')}}" />
        <img src="{{url('assets/brand/iss.png')}}" />
        <img src="{{url('assets/brand/rb6j.png')}}" />
        <img src="{{url('assets/brand/permata.svg')}}" />
    </div>
</div>


{{-- #endregion --}}


{{-- #region cta --}}

<div class=" bg-blue-50 py-20 mt-12" id="contact">
    @include('contact')
</div>


{{-- #endregion --}}



@endsection


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"
    integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/split-type"></script>


<script>
    (function () {

        function animateSmoothArea(id) {
            var splitText = new SplitType(id, {
                type: "line, chars"
            });


            gsap.to(splitText.lines, {
                y: 0,
                opacity: 1,
                stagger: 0.2,
                delay: 0.1,
                duration: .1,
            })
        }

        animateSmoothArea(".home__about_us");

        var splitText = new SplitType("#home__hero-title", {
            type: "line, chars"
        });

        console.log(splitText);

        gsap.to(splitText.chars, {
            y: 0,
            opacity: 1,
            stagger: 0.007,
            delay: 0.1,
            duration: .09,
        })

        // gspa.from('.home__background-hero', {
        //     opacity : 0,
        //     duration : .1
        // }).to({
        //     opacity : 1,
        // })


    })();

</script>
<script>
    (function () {
        document.addEventListener('scroll', function (event) {
            var scroll = window.scrollY;
            var navEl = document.getElementById("navbar");

            console.log(scroll);
            if (scroll < 1) {
                navEl.classList.remove("shadow-sm");
                navEl.classList.remove("border-b-gray");
            }


            if (scroll > 2) {
                navEl.classList.add("shadow-sm");
                navEl.classList.add("border-b-gray");
            }
        }, true)
    })()

</script>
@endpush
