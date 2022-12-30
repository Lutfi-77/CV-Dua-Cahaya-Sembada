@extends('admin.master.master')

@section('title', 'Our Categories')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('assets/css/admin/paginate.css')}}">
@endpush

@section('page-title', 'Add Categories')

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
    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="flex flex-col">
            <label>Title</label>
            <input type="text" name="title" class="border rounded-md py-1 px-2  focus:border-purple-300 focus:outline-none" value="{{old('title')}}">
        </div>
        <button class="bg-purple-600 text-white px-3 py-1 rounded-md mt-2">Save</button>
    </form>
</div>
@endsection
