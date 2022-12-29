@extends('admin.master.master')

@section('title', 'Our Services')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('assets/css/admin/paginate.css')}}">
@endpush

@section('page-title', 'Add Services')

@section('content')
<div class="bg-white shadow-xl px-5 py-5">
    <div class="grid grid-cols-2 gap-5">
        <div class="flex flex-col">
            <label>title</label>
            <input type="text" class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none">
        </div>
        <div class="flex flex-col">
            <label>Category</label>
            <select name="category" class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none">
                <option value="1">1</option>
                <option value="1">1</option>
                <option value="1">1</option>
            </select>
        </div>
    </div>
    <div class="flex flex-col">
        <label>Description</label>
        <textarea class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none"> </textarea>
    </div>
    <div class="flex flex-col">
        <label>Description</label>
        <input type="file" class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none">
    </div>
    <button class="bg-purple-600 text-white px-3 py-1 rounded-md mt-2">Save</button>
</div>
@endsection
