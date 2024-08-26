<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina</title>
    @vite('resources/css/app.css')
    
</head>
<body>
    <div class="flex w-full justify-between p-2">
        <div class="w-6/12">
            <a href="{{ route('index') }}"><p class="font-bold text-3xl p-2 text-yellow-400">Lumina</p></a>
        </div>
        <div class="w-6/12 h-[40px] flex justify-end items-center space-x-4 rounded-xl">
            <a href="{{ route('index') }}" class="p-2 font-semibold {{ request()->is('/') ? 'text-blue-500' : 'text-black' }}">Home</a>

            <a href="{{ route('courses') }}" class="text-black p-2 font-semibold {{ request()->is('courses') ? 'text-blue-500' : 'text-black' }}">Courses</a>
            @if(!auth('web')->user())
            <a href="{{ route('pricing') }}" class="text-black p-2 font-semibold {{ request()->is('pricing') ? 'text-blue-500' : 'text-black' }}">Pricing</a>
            
           @elseif (auth('web')->user()->subscription_type_id==NULL  )
           <a href="{{ route('pricing') }}" class="text-black p-2 font-semibold {{ request()->is('pricing') ? 'text-blue-500' : 'text-black' }}">Pricing</a>
            @endif
            @auth
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button><p class="p-2 font-semibold">Sign Out</p></button>
                </form> 
            @endauth
            @guest
            <a href="{{route('login')}}" class="text-black p-2 font-semibold">Login</a>
            @endguest
           
        </div>
    </div>
    @yield('content')
    @yield('scripts')

    <footer class="h-[30px] flex items-center justify-center rounded-[30px] text-gray-400">
        <p class="text-center">© Copyright - dada44, 2024</p>
      </footer>
</body>
</html>