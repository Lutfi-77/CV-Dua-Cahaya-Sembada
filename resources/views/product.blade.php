@extends('master.master')

@section('title', 'Product')

@section('content')
<div class="container mx-auto mt-16">
    <h3 class="font-semibold text-xl md:text-4xl pt-16 mb-5">Product</h3>
    <div class="text-lg md:text-2xl md:max-w-2xl md:leading-9">
        Our Product provide solutions for you, <br> starting from event organizers, travel agencies and others
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-14 mt-24 mb-10">
        @foreach ($products as $product)
        <div class="text-sm leading-loose shadow-lg pb-7 relative rounded-2xl overflow-hidden">
            <img src="{{$product->image == null ? asset('assets/images/noimage.png') : url("storage/".$product->image)}}"
                alt="product" class="mb-5 max-h-96 w-full object-cover">
            <h3 class="font-bold px-3 text-lg">{{$product->title}}</h3>
            <span class="block px-3" id="description">{{$product->desc}}</span>
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
