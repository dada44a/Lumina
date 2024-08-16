@extends('layouts.Admin')

@section('content')

@if (session('status'))
<div class="border-2 border-[#5293e2] p-3 bg-[#5293e2] rounded-2xl mb-6">
    <p class="text-blue-300">{{ session('status') }}</p>
</div>
    @endif

<div class="ml-[295px] mt-[50px] p-2 flex items-center justify-center">
    
    <div class="w-[79vw] h-[600px] rounded-3xl p-5 drop-shadow-lg bg-white mt-6">
        
            <p class="text-[18px] font-normal text-[#838ea0] ml-3">Recent Requests</p>
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

@endsection