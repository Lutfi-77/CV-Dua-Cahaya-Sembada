@extends('admin.master.master')

@section('title', 'Our products')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/admin/paginate.css')}}">
@endpush

@section('page-title', 'Product')

@section('content')
<a class="mr-auto mb-2 px-4 py-1 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple cursor-pointer" href="{{route('product.create')}}">Add product</a>
<div class="w-full shadow-xl border border-slate-200 py-5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 px-3">
    <table class="w-full whitespace-no-wrap" id="myTable">
        <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Title</th>
                <th class="px-4 py-3">Service</th>
                <th class="px-4 py-3">Description</th>
                <th class="px-4 py-3">Image</th>
                <th class="px-4 py-3">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($products as $product)
            {{-- {{dd($product->image->path)}} --}}
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                    {{$product->title}}
                </td>
                <td class="px-4 py-3 text-sm">
                    {{$product->service == null ? "" : $product->service}}
                </td>
                <td class="px-4 py-3 text-xs">
                    {{$product->desc}}
                </td>
                <td class="px-4 py-3 text-sm">
                    <img class="w-14 h-14" src="{{$product->image == null || $product->image == "" ? asset('assets/images/noimage.png') : url("storage/".$product->image)}}" alt="thumb">
                </td>
                <td class="px-4 py-3 text-sm">
                    <div class="flex">
                        <a href="{{route('product.edit', $product->id)}}" class="bg-teal-600 mx-1 rounded-md px-2 text-white">Edit</a>
                        <form action="{{route('product.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 mx-1 rounded-md px-2 text-white" onclick="return confirm('Yakin mau dihapus?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush
@endsection
