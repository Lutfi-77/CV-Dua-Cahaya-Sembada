@extends('admin.master.master')

@section('title', 'Profile')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('assets/css/admin/paginate.css')}}">
@endpush

@section('page-title', 'Edit Profile')

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
    <form action="{{route('profile.update')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="flex flex-col">
            <label>Name</label>
            <input type="text" name="name" class="border rounded-md py-1 px-2  focus:border-purple-300 focus:outline-none" value="{{$user->name}}">
            
            <label>Email</label>
            <input type="text" name="email" class="border rounded-md py-1 px-2  focus:border-purple-300 focus:outline-none" value="{{$user->email}}">
            
            <label>Password</label>
            <input type="password" name="password" class="border rounded-md py-1 px-2  focus:border-purple-300 focus:outline-none" value="">
            
            <label>Confirm password</label>
            <input type="password" name="password_confirmation" class="border rounded-md py-1 px-2  focus:border-purple-300 focus:outline-none" value="">
        </div>
        <button class="bg-purple-600 text-white px-3 py-1 rounded-md mt-2">Save</button>
    </form>
</div>
@endsection
