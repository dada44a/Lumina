@extends('layouts.Admin')


@section('content')
<div class="ml-[310px] mt-[20px] w-[75vw] h-[80vh] p-5" >
<div class=" w-[70vw] h-[60px] p-3 flex items-center mb-[15px] rounded-2xl drop-shadow-md">
    <a href="{{route('admin.accounts.change.password')}}" class="text-[#636b79]">Change Password</a>
</div>
<div class=" w-[70vw] h-[60px] p-3 flex items-center mb-[15px] rounded-2xl drop-shadow-md">
    <a href="{{route('admin.accounts.change.email')}}" class="text-[#5b626d]">Change Email</a>
</div>
</div>

@endsection