@extends('master.master')

@section('title', 'Home')

@section('content')

{{-- #region hero home --}}
<div class="home__background-hero" 
style="background-image: url('/assets/images/background-photo-home.jpg')">
    <div class="text-center m-auto ">
        <h2 class="text-white font-semibold tracking-wide lg:text-3xl md:text-2xl  mb-12">
            Engaged in trade event organizer <br />
            <br />
            and travel agency services
        </h2>

        <a href="" class="text-yellow-400 hover:text-yellow-500 border-b-2 border-yellow-400 pb-2">Contact Us</a>

    </div>   

        <div class="hero__arrow-down"></div>

    </div>
{{-- #endregion --}}


{{-- #region about section --}}

<div class="mt-12 container mx-auto">
    <h3 class="text-3xl font-semibold mb-14">About Us</h3>

    <div class="leading-10 text-lg mb-7">
        We founded this company on June 17, 2020. Armed with the <span class="bg-yellow-200">experience</span> of the founders in the field of trade, <span class="bg-red-200"> event organizer services</span> and a <span class="bg-yellow-200">tour agency</span>  that are quite capable, we are confident that we can make our company progress and develop.
    </div>

    <span class="text-lg">
        And can be a <span class="bg-blue-200">trusted partner by our clients.</span>
    </span>
</div>

{{-- #endregion --}}


{{-- #region our vision section --}}

<div class="mt-32 container mx-auto text-center">
    <h3 class="text-3xl font-semibold mb-9 text-center">Our Vision & Mision</h3>
    <span>To be a company that excels in service and performance but remains grounded</span>
    
    <div class="grid grid-cols-3 gap-14 mt-24">
        <div class="text-sm leading-loose">
            <img class="mx-auto w-16 mb-7" src="/assets/images/love.svg" />

            Creating jobs and creating a healthy and enjoyable work environment
        </div>

        <div class="text-sm leading-loose">

            <img class="mx-auto w-16 mb-7" src="/assets/images/thumb_up.svg" />

            Providing the best and sustainable products and services and in synergy with client needs
        </div>
        
        <div class="text-sm leading-loose">
            <img class="mx-auto w-16 mb-7" src="/assets/images/check.svg" />

            
            Having a work process that respects each other and adds value to all stakeholders
        </div>
        
    </div>
</div>
{{-- #endregion --}}

{{-- #region our category services --}}

<div class="mt-32 container mx-auto">
    <h3 class="text-3xl font-semibold mb-14">Our Category of Services</h3>
    <div class="grid grid-cols-3 gap-14 mt-16">

        @foreach(range(1,3) as $c)
        <a href="cc">
            <img class="mx-auto w-full rounded-lg" src="/assets/images/background-photo-home.jpg" />

            <h5 class="text-lg font-semibold mt-3"> Event Organizer </h5> 
        </a>
        @endforeach
    </div>
</div>

{{-- #endregion --}}


{{-- #region our client --}}


<div class="mt-32 container mx-auto">
    <h3 class="text-3xl font-semibold mb-14">Our Client</h3>
    <div class="grid grid-cols-3 gap-14 mt-16">

        @foreach(range(1,3) as $c)
        <a href="cc">
            <img class="mx-auto w-full rounded-lg" src="/assets/images/background-photo-home.jpg" />
        </a>
        @endforeach
    </div>
</div>


{{-- #endregion --}}


{{-- #region cta --}}

<div class="bg-blue-200 py-12 mt-12">
    <div class="container mx-auto flex">
        <div>
            <h3 class="text-2xl font-semibold mb-6 text-blue-700"> Need Our Hand </h3>
            <div class="text-lg leading-loose text-blue-600"> 
                we are ready to help solve your problem, <br />
                with our experience we belive your problem can be done
            </div>
        </div>
        <div class="ml-auto my-auto bg-yellow-500 text-white px-5 py-3 rounded-full">contact now</div>
    </div>
</div>

{{-- #endregion --}}



@endsection