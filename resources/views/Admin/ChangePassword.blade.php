@extends('layouts.Admin')

@section('content')

<div class="ml-[300px] mt-[50px] p-5">

    @if (session('status'))
    <div class="border-2 border-[#5293e2] p-3 bg-[#5293e2] rounded-2xl mb-6">
        <p class="text-blue-300 bg-[#5293e2]">{{ session('status') }}</p>
    </div>
    @endif

    <div class="flex justify-center w-[60vw] mb-10 flex-col">
        <form action="{{ route('admin.accounts.change.password') }}" method="POST" class="flex gap-5 flex-col">
            @csrf
            <div>
                <label for="old_password">Old Password</label>
                <input id="old_password" type="password" name="old_password" placeholder="Old Password" class="border-2 border-gray-400 rounded-2xl p-2 w-[65vw]">
            </div>

            <div>
                <label for="new_password">New Password</label>
                <input id="new_password" type="password" name="new_password" placeholder="New Password" class="border-2 border-gray-400 rounded-2xl p-2 w-[65vw]">
            </div>

            <div>
                <label for="re_password">Re-enter New Password</label>
                <input id="re_password" type="password" name="new_password_confirmation" placeholder="Re-enter New Password" class="border-2 border-gray-400 rounded-2xl p-2 w-[65vw]">
            </div>

            <input type="submit" value="Submit" class="border-2 border-gray-400 rounded-2xl p-2 w-[20vw]">
        </form>
    </div>
</div>

@endsection
