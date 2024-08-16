@extends('layouts.Main')

@section('content')
<div class="w-full h-[85vh] flex items-center mb-10">
    
    <div class="w-[40%] flex items-center justify-start p-3">
        <img class=" ml-[200px]" src="{{ $image }}" width="270px" height="270px" alt=""/>
    </div>

    <div class="w-[60%] flex flex-col  p-4">
        <h2 class="text-[40px] font-bold"><span class="text-yellow-400">Unlock Your Potential</span> with Our Expert-Led Courses</h2>
        <p class="text-[16px] w-[700px] text-gray-500" >Join thousands of learners from around the world and start achieving your goals today.</p>

        <div class="flex gap-4 mt-[10px]">
            <a href="{{route('courses')}}" class="bg-yellow-300 h-[60px] w-[170px] flex items-center justify-center text-center text-white font-bold text-[20px] p-4 rounded-xl ">
                Browse
            </a>
            <a href="" class="bg-gray-300 h-[60px] w-[170px] flex items-center justify-center text-center text-white font-bold text-[20px] p-4 rounded-xl">
                Learn More
            </a>
        </div>
    </div>
</div>

 
  @endsection