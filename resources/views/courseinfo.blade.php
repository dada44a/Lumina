@extends('layouts.Main')

@section('content')
<div>
    <div class="mt-3 ml-5 flex gap-7">
        <div>
            <div>
            <img src="{{$course->thumbnail}}" class="w-[1000px] h-[600px] rounded-[30px]" alt="">
            <form action="{{route('courseplay',$course)}}" method="POST">
                @csrf
                <button type="submit"><img src="{{asset('img/play.png')}}" alt="" class=" w-[300px] h-[300px] absolute top-[200px] left-[350px]"></button>  
            </form>
            </div>

            <div class="w-[1000px] min-h-[250px] rounded-[30px] p-4 bg-gray-200">
                <div>
                    <h1 class="font-bold text-[28px] text-gray-700">{{$course->title}}</h1>
                    <p>{{$course->description}}</p>
                </div>

            </div>
        </div>
        <div>
            <div class="mb-3 w-[460px] h-[70px] rounded-[20px] bg-gray-500 flex items-center justify-center ">
                <p class="text-white font-semibold text-[20px]">Subscribe Now</p>
            </div>
            <p class="font-semibold text-gray-500 text-[20px]">Related Courses</p>
        <div class="w-[460px] min-h-[100vh]  ">
          
        </div></div>
    </div>
</div>
@endsection