@extends('layouts.Main')

@section('content')
@if (session('status'))
    <p class="bg-blue-100 text-blue-800 border border-blue-300 rounded-md p-4 mb-4 w-[90%] ml-2">
        {{ session('status') }}
    </p>
@endif



<div class="flex flex-col gap-5 w-full p-2">
    <h1 class="mt-12 text-darkest text-2xl font-medium ml-2 p-1">Courses We Offer</h1>
    <div class="min-h-[78vh]">
        <div class="flex gap-5 ml-2 mb-10">
            @foreach ($genres as $genre)
                <div class="h-12 rounded-[20px]  ull border-2 border-gray-300 bg-white text-black flex items-center justify-center p-3">
                    <p class="font-medium">{{ $genre->title }}</p>
                </div>
            @endforeach
        </div>
        <div class="ml-2 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
            @foreach ($courses as $course)
            <div class="rounded-lg ml-2">
                <div class="">
                    <img src="{{$course->thumbnail}}" class="w-full h-[150px] rounded-md" width="400px"  class="" alt="{{ $course->title }}">

                    
                </div>
                <form action="{{route('courseinfo',$course)}}" method="POST">
                    @csrf
                <button type="submit" class="mt-1 text-[16px] font-bold text-gray-500">{{ $course->title }}</button>
                 </form>
                 <p>{{$course->instructor->first_name}}
                 </p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="ml-4 mt-4">
        {{ $courses->links("pagination::tailwind") }}
    </div>
</div>
@endsection
