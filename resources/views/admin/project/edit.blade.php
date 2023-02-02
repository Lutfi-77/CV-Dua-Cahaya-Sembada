@extends('admin.master.master')

@section('title', 'Our Project')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('assets/css/admin/paginate.css')}}">
@endpush

@section('page-title', 'Edit Project')

@section('content')
<div class="grid grid-cols-12">
    <div class="bg-white shadow-xl px-5 py-5 col-span-10">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-red-500">*{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('project.update', request()->route('project'))}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="grid grid-cols-2 gap-5">
                <div class="flex flex-col">
                    <label>title</label>
                    <input type="text" class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none"
                        name="title" value="{{$project->title}}">
                </div>
                <div class="flex flex-col">
                    <label>Category</label>
                    <select name="category"
                        class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none">
                        <option selected value="{{$project->category_id}}">{{$project->category == null ? "" : $project->category->category}}</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="flex flex-col">
                <label>Description</label>
                <textarea name="description" id="my-textarea"
                    class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none">{{$project->description}}</textarea>
            </div>
            <div class="flex flex-col">
                <label>Image</label>
                <input type="file" name="image[]" multiple
                    class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none">
            </div>
            <button class="bg-purple-600 text-white px-3 py-1 rounded-md mt-2">Save</button>
        </form>
    </div>

    <div class="bg-white shadow-xl px-5 py-5 col-span-2">
        <div class="grid grid-cols-2 gap-2 items-center">
            @foreach ($project->image as $image)
            <img class="w-14 h-14"
                src="{{$image == null || $image == "" ? asset('assets/images/noimage.png') : url("storage/".$image->path)}}"
                alt="thumb">
            <form action="{{route('project.destroyImage', [$image->id, $project->id])}}" method="post">
                @csrf
                @method("DELETE")
                <button class="bg-red-600 text-white py-1 px-2" onclick="return confirm('Yakin mau dihapus?')">Delete</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
