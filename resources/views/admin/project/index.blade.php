@extends('admin.master.master')

@section('title', 'Our Projects')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('assets/css/admin/paginate.css')}}">
@endpush

@section('page-title', 'Projects')

@section('content')
<a class="mr-auto mb-2 px-4 py-1 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple cursor-pointer" href="{{route('project.create')}}">Add Project</a>
<div class="w-full shadow-xl border border-slate-200 py-5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 px-3">
    <table class="w-full whitespace-no-wrap" id="myTable">
        <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Title</th>
                <th class="px-4 py-3">Category</th>
                <th class="px-4 py-3">Description</th>
                <th class="px-4 py-3">Image</th>
                <th class="px-4 py-3">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($projects as $project)
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                    {{$project->title}}
                </td>
                <td class="px-4 py-3 text-sm">
                    {{$project->category->category}}
                </td>
                <td class="px-4 py-3 text-xs">
                    {{$project->description}}
                </td>
                <td class="px-4 py-3 text-sm">
                    <img class="w-14 h-14" src="{{$project->image == null || $project->image->isEmpty() ? asset('assets/images/noimage.png') : url("storage/".$project->image[0]->path)}}" alt="thumb">
                </td>
                <td class="px-4 py-3 text-sm">
                    <div class="flex">
                        <a href="{{route('project.edit', $project->id)}}" class="bg-teal-600 mx-1 rounded-md px-2 text-white">Edit</a>
                        <form action="{{route('project.destroy', $project->id)}}" method="post">
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
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
@endpush
@endsection
