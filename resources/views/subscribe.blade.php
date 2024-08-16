@extends('layouts.Main')

@section('content')
<div class="container max-w-full mx-auto py-24 px-6">
    <h1 class="text-center text-4xl text-black font-medium leading-snug tracking-wider">
        Confirm Your Details
    </h1>
    <p class="text-center text-lg text-gray-700 mt-2 px-6">
        Fill out the details below to upload your payment receipt file.
    </p>
    <div class="h-1 mx-auto bg-indigo-200 w-24 opacity-75 mt-4 rounded"></div>

    <div class="max-w-full md:max-w-6xl mx-auto my-3 md:px-8">
        <div class="relative block flex flex-col items-center">
            
            <!-- Form -->
            <div class="w-full max-w-md relative z-0 rounded-lg shadow-lg bg-white p-6">
                <form action="{{ route('subscribe_process',$plan) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required readonly>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required readonly>
                    </div>
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" id="username" name="username" value="{{ auth()->user()->username }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required readonly>
                    </div>
                    <div class="mb-4">
                        <input type="hidden" id="plan" name="plan" value="{{ $plan }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">File Upload</label>
                        <input type="file" id="fileInput" name="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" accept="image/*" required>
                    </div>
                    
                    <button type="submit" class="w-full py-2 px-4 bg-yellow-400 text-white font-semibold rounded-md shadow-md hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Confirm</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
