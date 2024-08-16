@extends('layouts.Admin')

@section('content')


<div class="ml-[310px] mt-[50px] p-5">
    @if (session('status'))
<div class="border-2 border-[#5293e2] p-3 bg-[#5293e2] rounded-2xl mb-6">
    <p class="text-blue-300 bg-[#5293e2]">{{ session('status') }}</p>
</div>
@endif
    <div class="flex justify-center h-[100vh] w-[60vw]">
        <form action="{{ route('admin.upload') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-5">
            @csrf

            <div class="flex flex-col">
                <label for="title" class="text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" placeholder="Title" class="border-2 border-gray-400 rounded-2xl p-2 w-full">
            </div>

            <div class="flex flex-col">
                <label for="description" class="text-sm font-medium text-gray-700">Description</label>
                <input type="text" id="description" name="description" placeholder="Description" class="border-2 border-gray-400 rounded-2xl p-2 w-full">
            </div>

            <div class="flex flex-col">
                <label for="file" class="text-sm font-medium text-gray-700">Thumbnail</label>
                <input type="file" id="file" name="file" class="border-2 border-gray-400 rounded-md p-2 w-full">
            </div>

            <div class="flex flex-col">
                <label for="instructor" class="text-sm font-medium text-gray-700">Instructor</label>
                <input type="text" id="instructor" name="instructor" placeholder="Instructor email" class="border-2 border-gray-400 rounded-2xl p-2 w-full">
            </div>

            <div class="flex flex-col">
                <label for="video" class="text-sm font-medium text-gray-700">Video URL</label>
                <input type="text" id="video" name="video" placeholder="Video URL" class="border-2 border-gray-400 rounded-2xl p-2 w-full">
            </div>

            <button type="submit" class="border-2 border-gray-400 rounded-2xl p-2 w-full bg-gray-200 hover:bg-gray-300">Submit</button>
        </form>
    </div>
</div>
@endsection
