@extends('layouts.Admin')

@section('content')
<div class="ml-[320px] grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 p-3 mt-[50px]">
    @foreach ($courses as $course)
    <div class="rounded-lg ml-2">
        <div class="">
            <img src="{{$course->thumbnail}}" class="w-full h-[150px] rounded-md" width="400px" alt="{{ $course->title }}">

            
        </div>
        <form action="{{route('admin.courses.remove')}}" method="POST">
            @csrf
            <input type="hidden" name="title" value="{{$course->title}}">
        <p class="mt-1 text-[16px] font-bold text-gray-500">{{ $course->title }}</p>
        <button type="submit" class="mt-1 text-[16px] font-bold text-gray-500">Remove</button>
         </form>
         <p>{{$course->instructor->first_name}}
         </p>
    </div>
      @endforeach
    </div>


@endsection