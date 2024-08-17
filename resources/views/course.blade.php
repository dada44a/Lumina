@extends('layouts.Main')

@section('content')
<div class="flex w-[95vw] items-center justify-center relative">
    <iframe class="" id="courseVideo" src="{{$course->videoUrl}}" width="1000" height="800" allowfullscreen allowtransparency allow="autoplay" scrolling="no" frameborder="0"></iframe>

</div>
@endsection
