@extends('master.master')

@section('title', 'Projects')

@section('content')
<div class="container mx-auto mt-16">
    <h3 class="font-semibold text-xl md:text-4xl pt-16 mb-5">Projects</h3>
    <div class="text-lg md:text-2xl md:max-w-2xl md:leading-9">
        Our Projects provide solutions for you, <br> starting from event organizers, travel agencies and others
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-14 mt-24 mb-10">
        @foreach ($projects as $project)
        <div class="text-sm leading-loose shadow-lg pb-7 relative rounded-2xl overflow-hidden">
            <img src="{{$project->image == null || $project->image->isEmpty() ? asset('assets/images/noimage.png') : url("storage/".$project->image[0]->path)}}"
                alt="project" class="mb-5 max-h-96 w-full object-cover">
            <span class="block px-3" id="description">{{$project->description}}</span>
        </div>
        @endforeach
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/markdown-it@13.0.1/dist/markdown-it.min.js"></script>
<script>
    let desc = document.getElementById("description")
    let md = window.markdownit();
    let result = md.render(desc.textContent);
    desc.innerHTML = result
</script>
@endpush