<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina Admin</title>
    @vite('resources/css/app.css')
</head>
<body>
    
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Admin Login</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{route('admin.login')}}" method="POST">
        @csrf
        
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" {{old('email')}} autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#eb768b] sm:text-sm sm:leading-6 outline-none">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#eb768b] outline-none sm:text-sm sm:leading-6 @error('email') border-red-500 @enderror">
          </div>
        </div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-[#eb768b] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#d1596f] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
        <a href="{{route('admin.signup')}}" class="font-semibold leading-6 text-[#eb768b] hover:text-[#e8617a]">Sign Up Here</a>
      </p>
    </div>
  </div>
</body>
</html>