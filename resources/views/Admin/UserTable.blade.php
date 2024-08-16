@extends('layouts.Admin')

@section('content')

<div class="ml-[295px] mt-[50px] p-2 flex items-center justify-center">
    <div class="w-[79vw] h-[600px] rounded-3xl p-5 drop-shadow-lg bg-white">
        <p class="text-[18px] font-[500] mb-4 text-[#838ea0]">User Table</p>
    
        <table class="w-full table-auto border-collapse p-3">
            <thead>
                <tr class="border-b-2 border-[#545c67]">
                    <th class="p-3 text-left text-[#838ea0]">S.N</th>
                    <th class="p-3 text-left text-[#838ea0]">Name</th>
                    <th class="p-3 text-left text-[#838ea0]">Email</th>
                    <th class="p-3 text-left text-[#838ea0]">Type</th>
                    <th class="p-3 text-left text-[#838ea0]">Started Date</th>
                    <th class="p-3 text-left text-[#838ea0]">End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    
               
                <tr class="border-b-2 border-[#3fafc3] p-5"><td class="p-2 text-left text-[#838ea0]">1</td>
                    <td class="p-3 text-left text-[#838ea0]">{{$user->name}}</td>
                    <td class="p-3 text-left text-[#838ea0]">{{$user->email}}</td>    
                    <td class="p-3 text-left text-[#838ea0]">{{$user->subscription_type_id}}</td>            
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    
   
</div>

@endsection