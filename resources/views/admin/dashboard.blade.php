@extends('admin.master.master')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<!-- New Table -->
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        @include('admin.master.cards')

        <div class="grid gap-5 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
            <div class="mt-2">
                <h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Latest Client</h3>
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Client</th>
                            <th class="px-4 py-3">Image</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($latest_client as $client)
                        <tr class="even:bg-slate-50 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{$client->client_name}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <img class="w-14 h-14" src="{{$client->client_image == null || $client->client_image == "" ? asset('assets/images/noimage.png') : url("storage/".$client->client_image)}}" alt="thumb">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-2">
                <h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Latest Category</h3>
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Image</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($latest_category as $category)
                        <tr class="even:bg-slate-50 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{$category->category}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <img class="w-14 h-14" src="{{$category->image == null || $category->image == "" ? asset('assets/images/noimage.png') : url("storage/".$category->image)}}" alt="thumb">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-2">
            <h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Latest Project</h3>
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Project</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">description</th>
                        <th class="px-4 py-3">Image</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($latest_project as $project)
                    <tr class="even:bg-slate-50 dark:text-gray-400">
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
                            <img class="w-14 h-14" src="{{$project->image == null || $project->image == "" ? asset('assets/images/noimage.png') : url("storage/".$project->image)}}" alt="thumb">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
