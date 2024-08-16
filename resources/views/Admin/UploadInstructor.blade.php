@extends('layouts.Admin')

@section('content')

<div class="ml-[300px] mt-[50px] p-5">

    @if (session('status'))
    <div class="border-2 border-[#5293e2] p-3 bg-[#5293e2] rounded-2xl mb-6">
        <p class="text-blue-300 bg-[#5293e2]" >{{ session('status') }}</p>
    </div>
    @endif

    <div class="flex justify-center w-[60vw] mb-10 flex-col">
        <form action="{{ route('admin.instructor.upload') }}" method="POST" class="flex gap-5 flex-col">
            @csrf
            <div>
                <label for="fname">First Name</label>
                <input id="fname" type="text" name="fname" placeholder="First Name" class="border-2 border-gray-400 rounded-2xl p-2 w-[65vw]">
            </div>

            <div>
                <label for="lname">Last Name</label>
                <input id="lname" type="text" name="lname" placeholder="Last Name" class="border-2 border-gray-400 rounded-2xl p-2 w-[65vw]">
            </div>

            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="Email" class="border-2 border-gray-400 rounded-2xl p-2 w-[65vw]">
            </div>

            <input type="submit" value="Submit" class="border-2 border-gray-400 rounded-2xl p-2 w-[20vw]">
        </form>
        <div class="w-[60vw] mt-[30px]">
            <p class="mb-[10px]">Instructors</p>
            @foreach ($instructors as $ins)
            <div class="p-3 border-b-2 border-[#9e3d45] drop-shadow-sm flex justify-between mb-4">
                <p class="text-center">{{ $ins->first_name }} {{ $ins->last_name }}</p>
                <p class='text-center'>{{ $ins->email }}</p>
                <form action="{{route('admin.instructor.remove',$ins->email)}}" method="post">
                    @csrf
                    <button type="submit">Remove</button>
                </form>
            </div> 
           
            @endforeach
            {{ $instructors->links();}}
        </div>
    </div>

   

</div>
@endsection
