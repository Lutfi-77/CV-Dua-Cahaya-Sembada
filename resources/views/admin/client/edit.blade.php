@extends('admin.master.master')

@section('title', 'Our Clients')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('assets/css/admin/paginate.css')}}">
@endpush

@section('page-title', 'Edit Clients')

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
    <form action="{{route('client.update', request()->route('client'))}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-2 gap-5">
            <div class="flex flex-col">
                <label>Client Name</label>
                <input type="text" class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none" name="client_name" value="{{$client->client_name}}">
            </div>
        </div>
        <div class="flex flex-col">
            <label>Image</label>
            <input type="file" name="image" class="border rounded-md py-1 px-2 focus:border-purple-300 focus:outline-none">
        </div>
        <button class="bg-purple-600 text-white px-3 py-1 rounded-md mt-2">Save</button>
    </form>
</div>
@endsection
