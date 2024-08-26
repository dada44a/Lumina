

@extends('layouts.Main')

@section('content')
<div>
    <div class="mt-3 ml-5 flex gap-7">
        <div>
            <div>
<iframe class="rounded-2xl" src="{{$course->videoUrl}}" width="950" height="550" allowfullscreen allowtransparency allow="autoplay" scrolling="no" frameborder="0"></iframe>
            
            
            </div>

            <div id="course-container" class="w-[950px] h-[190px] rounded-[30px] p-4 bg-gray-200 mt-[10px]">
                <div>
                    <h1 class="font-bold text-[28px] text-gray-700">{{$course->title}}</h1>
                    <p id="course-description" class="overflow-clip h-[50px]">{{$course->description}}</p>
                    <a id="read-more" href="" class="inline">Read More</a>
                </div>

            </div>
        </div>
        <div class="">
            <div class="bg-gray-200 w-full h-[170px] rounded-2xl flex items-center justify-center p-3">
            <form action="" class="w-full h-full">
                @csrf
                <input type="text" class="w-full h-[100px] rounded-2xl p-3" placeholder="Comment">
                <button type="submit" class="mt-[10px] bg-blue-400 text-white w-[80px] rounded-lg h-[35px] ml-[5px]">Submit</button>
            </form>
        </div>
        <div class="w-[460px] min-h-[100vh]  ">
          
        </div></div>
    </div>
</div>
@endsection

@section('scripts')
<script>
const button = document.getElementById('read-more');
const description = document.getElementById('course-description');
const container = document.getElementById('course-container');
let status = false;
button.addEventListener('click', (e) => {
    e.preventDefault();
    if(!status){
        description.classList.remove('overflow-clip');
        container.classList.remove('h-[190px]');
        container.classList.add('min-h-[250px]');
        description.classList.remove('h-[50px]');
        description.classList.add('min-h-[250px]');

        status=true;
        button.innerHTML = `Read Less`;
    }
    else{
        description.classList.add('overflow-clip'); 
        container.classList.remove('min-h-[250px]');
        container.classList.add('h-[190px]');
        description.classList.remove('min-h-[250px]');
        description.classList.add('h-[50px]');
        button.innerHTML = `Read More`;
        status=false;
    }

});
</script>
@endsection
