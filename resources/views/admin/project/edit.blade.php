@extends('admin.master.master')

@section('title', 'Our Project')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('assets/css/admin/paginate.css')}}">
@endpush

@section('page-title', 'Edit Project')

@section('content')
<div class="bg-white shadow-xl px-5 py-5">
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
        @method('PUT')
        <div class="grid grid-cols-2 gap-5">
            <div class="flex flex-col">
                <label>title</label>
                <input type="text" class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none" name="title" value="{{$project->title}}">
            </div>
            <div class="flex flex-col">
                <label>Category</label>
                <select name="category" class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none">
                    <option selected value="{{$project->category_id}}">{{$project->category->category}}</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="flex flex-col">
            <label>Description</label>
            <textarea name="description" class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none">{{$project->description}}</textarea>
        </div>
        <div class="flex flex-col">
            <label>Image</label>
            <input type="file" name="image" class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none">
        </div>
        <button class="bg-purple-600 text-white px-3 py-1 rounded-md mt-2">Save</button>
    </form>
</div>
@endsection
