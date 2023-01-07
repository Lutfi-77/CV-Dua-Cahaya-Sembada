@extends('master.master')

@section('title', 'Services')

@section('content')
    <div class="container mx-auto mt-16 ">
        <h3 class="font-semibold text-xl md:text-4xl pt-16 mb-5">How can we help?</h3>
        <div class="text-lg md:text-2xl md:max-w-2xl md:leading-9">
            If you have any questions or queries a member of staff will always be happy to help.
        </div>

        <div class="grid grid-cols-1 gap-7 md:grid-cols-2 md:gap-5 mt-7 relative">
            <div class="w-full">
                <input type="text" class="border border-[#DAD0D0] rounded-md w-full px-2 py-2 shadow-xl focus:outline-none mb-5" placeholder="Email">
                <input type="text" class="border border-[#DAD0D0] rounded-md w-full px-2 py-2 shadow-xl focus:outline-none mb-5" placeholder="Email">
                <textarea name="" id="" cols="30" rows="5" placeholder="Message..." class="border border-[#DAD0D0] rounded-md w-full px-2 py-2 shadow-xl focus:outline-none mb-5"></textarea>
                <button class="bg-primary px-7 py-2 rounded-md">Send</button>
            </div>

            <div class="w-full md:h-24 shadow-3xl px-5 py-5 flex items-center bgb rounded-md">
                <div class="flex flex-col justify-start">
                    <div class="text-md font-semibold">
                        You can also ask directly via the number below
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02c-.37-1.11-.56-2.3-.56-3.53c0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99C3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
                        <div class="ml-2">+62823478326478</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection