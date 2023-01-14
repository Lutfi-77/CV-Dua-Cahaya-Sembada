@extends('master.master')

@section('title', 'Services')

@section('content')
    <div class="container mx-auto mt-16 ">
        <h3 class="font-semibold text-xl md:text-4xl pt-16 mb-5">Projects</h3>
        <div class="text-lg md:text-2xl md:max-w-2xl md:leading-9">
            Our Projects provide solutions for you, <br> starting from event organizers, travel agencies and others
        </div>

        @foreach ($projects as $project)
        <div class="grid grid-cols-2 gap-2 md:grid-cols-3 md:gap-5 mt-7">
            <div class="w-full overflow-hidden">
                <img src="{{'storage/'.$project->image}}" alt="service" class="rounded-xl w-72">

                <h3 class="mt-3 text-lg font-semibold">{{$project->title}}</h3>
            </div>
        </div>
        @endforeach

    </div>
@endsection