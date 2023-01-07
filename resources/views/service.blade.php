@extends('master.master')

@section('title', 'Services')

@section('content')
    <div class="container mx-auto mt-16 ">
        <h3 class="font-semibold text-xl md:text-4xl pt-16 mb-5">Service</h3>
        <div class="text-lg md:text-2xl md:max-w-2xl md:leading-9">
            Our services provide solutions for you, <br> starting from event organizers, travel agencies and others
        </div>

        <div class="grid grid-cols-2 gap-2 md:grid-cols-3 md:gap-5 mt-7">
            <div class="w-full overflow-hidden">
                <img src="https://plus.unsplash.com/premium_photo-1661559121797-9e217023f6dd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="service" class="w-full rounded-xl">

                <h3 class="mt-3 text-lg font-semibold">Wedding Organizer</h3>
            </div>
            <div class="w-full overflow-hidden">
                <img src="https://plus.unsplash.com/premium_photo-1661559121797-9e217023f6dd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="service" class="w-full rounded-xl">

                <h3 class="mt-3 text-lg font-semibold">Wedding Organizer</h3>
            </div>
            <div class="w-full overflow-hidden">
                <img src="https://plus.unsplash.com/premium_photo-1661559121797-9e217023f6dd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="service" class="w-full rounded-xl">

                <h3 class="mt-3 text-lg font-semibold">Wedding Organizer</h3>
            </div>
        </div>
    </div>
@endsection