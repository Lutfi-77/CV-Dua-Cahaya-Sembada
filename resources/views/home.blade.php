@extends('master.master')

@section('title', 'Home')

@section('content')

{{-- #region hero home --}}
<div class="home__background-hero" 
style="background-image: url('/assets/images/background-photo-home.jpg')">
    <div class="text-center m-auto ">
        <h2 class="text-white font-semibold tracking-wide text-2xl leading-loose mb-6">
            Engaged in trade event organizer <br />
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


<div class="mt-32 container mx-auto">
    <h3 class="text-3xl font-semibold mb-14 text-center">Our Vision & Mision</h3>

    
</div>




@endsection