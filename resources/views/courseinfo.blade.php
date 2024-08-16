@extends('layouts.Main')

@section('content')
<div>
    <div class="mt-3 ml-5 flex gap-7">
        <div>
            <div>
            <img src="{{$course->thumbnail}}" class="w-[1000px] h-[600px] rounded-[30px]" alt="">
            @if (auth()->user()->subscription_type_id!=NULL)
            <form action="{{route('courseplay',$course)}}" method="POST">
                @csrf
                <button type="submit"><img src="{{asset('img/play.png')}}" alt="" class=" w-[300px] h-[300px] absolute top-[200px] left-[350px]"></button>  
            </form>
            @else
            <div class="mb-[20px] mt-[20px] h-12 rounded-[20px] w-[170px]  ull border-2 border-gray-300 bg-white text-black flex items-center justify-center p-3">
                <a href="{{route('pricing')}}" class="font-medium">Get Subscription</a>
            </div>
            @endif
            </div>

            <div class="w-[1000px] min-h-[250px] rounded-[30px] p-4 bg-gray-200">
                <div>
                    <h1 class="font-bold text-[28px] text-gray-700">{{$course->title}}</h1>
                    <p>{{$course->description}}</p>
                </div>

            </div>
        </div>
        <div>
            <p class="font-semibold text-gray-500 text-[20px]">Related Courses</p>
        <div class="w-[460px] min-h-[100vh]  ">
          
        </div></div>
    </div>
</div>
@endsection