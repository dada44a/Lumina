@extends('layouts.Admin')

@section('content')
<div class='ml-[280px] p-3 flex flex-col'>
    {{-- Top part --}}
    <div class="flex justify-between mt-[30px]">
        {{-- Greeting section --}}
        <div class="w-[550px] h-[150px] ml-[20px] rounded-2xl bg-white drop-shadow-lg flex items-center justify-between p-4">
            <div class="p-5">
                <p class="text-[30px] font-[500] text-[#eb768b]">Hola! Chief</p>
                <div class="flex gap-2 mt-2 items-center">
                    <a href="{{route('admin.accounts')}}" class="text-[14px] text-[#838ea0] ">Account</a>
                    <form action="{{route('admin.signout')}}" method="POST">
                        @csrf
                    <button type="submit" class="text-[14px] text-[#838ea0] ">SignOut</button>
                    </form>
                </div>
            </div>
            <div class="bg-yellow-300 drop-shadow-lg w-[90px] h-[90px] flex items-center justify-center rounded-2xl">
                <img src="{{ asset('img/icons8-admin-50.png') }}" alt="Admin Icon" class="bg-yellow-300">
            </div>
        </div>

        {{-- Sales section --}}
        <div class="w-[630px] h-[150px] ml-[20px] rounded-2xl bg-white drop-shadow-lg p-5 flex justify-between items-center">
            <div class="ml-5">
                <p class="text-[25px] font-[500] text-[#5d646f]">Total Sales</p>
                <p class="text-[20px] text-[#838ea0]">$40,000</p>
            </div>
            <div class="bg-[#ee3978] drop-shadow-lg w-[90px] h-[90px] flex items-center justify-center rounded-2xl">
                <img src="{{ asset('img/icons8-sales-48.png') }}" alt="Sales Icon" class="bg-[#ee3978] mr-1">
            </div>
        </div>
    </div>

    {{-- Bottom part --}}
    <div class="mt-[60px] ml-[20px] flex gap-4">
        {{-- Grossing Videos --}}
        <div class="w-[600px] h-[400px] rounded-2xl drop-shadow-lg p-3">
            {{-- Content for Grossing Videos --}}
            <p class="text-[18px] font-normal text-[#838ea0] ml-4">Recent Courses</p>
            <div class="grid grid-rows-5 gap-4 p-2">
                @foreach ($course as $cors )
                <div class="p-2 rounded-xl border-b-2 border-[#c33f76] drop-shadow-md h-[60px] overflow-clip text-clip ">{{$cors->title}}</div>
                @endforeach
                {{$course->links()}}
                
            </div>
            
        </div>

        {{-- Recent Request --}}
        <div class="w-full h-[400px] rounded-2xl drop-shadow-lg p-4">
            <p class="text-[18px] font-normal text-[#838ea0]">Recent Requests</p>
            <div class="grid grid-rows-5 gap-4 p-2">
                @foreach ($subscription as $sub)
                <div class="p-3  border-b-2 border-[#3fafc3] drop-shadow-sm flex justify-between">
                    <p>{{$sub->username}}</p> 
                    <div class="flex justify-between gap-5">
                        <a href="{{$sub->imageUrl}}">Link</a>
                        <div class="flex gap-3">
                            <form action="{{route('admin.subscribe.accepted')}}" method="POST">
                                @csrf
                                <input type="hidden" name="username" value="{{$sub->username}}">
                                <input type="hidden" name="type" value="{{$sub->subscription_type}}">
                                <button class="text-[#eb768b]">Accept</button>
                            </form>
                            <form action="{{route('admin.subscribe.rejected',$sub->username)}}" method="POST">
                                @csrf
                                <button>Reject</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
    </div>
        </div>
    </div>
</div>
@endsection
