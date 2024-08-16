<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina</title>
    <style>
        *{
            background-color: #ffffff;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex">
        <x-admin-sidebar/>
    @yield('content')
    </div>
    @yield('script')
   
</body>
</html>