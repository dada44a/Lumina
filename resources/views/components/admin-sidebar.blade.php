<div class="w-[250px] h-[100vh] flex flex-col items-center p-3 fixed">
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <div class="mb-8">
        <p class="font-bold text-yellow-300  text-[30px] mt-6">Lumina</p>
    </div>

    <div>
        <div class="flex items-center gap-2 mb-6">
            <div class="h-[40px] w-[40px] rounded-xl flex items-center justify-center bg-[#ffffff] drop-shadow-md">
                <img src="{{asset('img/home_544018.png')}}" class="w-[15px] h-[15px]" alt="">
            </div>
            <a href="{{route('admin.dashboard')}}" class="font-[500] text-[#838ea0]">Dashboard</a>
        </div>

        <p class=" mb-6 text-[#838ea0] font-[500]">Customers</p>
        <div class="flex items-center gap-2 mb-6">
            <div class="h-[40px] w-[40px] rounded-xl flex items-center justify-center bg-[#ffffff] drop-shadow-md">
                <img src="{{asset('img/rating_1322236.png')}}" class="w-[15px] h-[15px]" alt="">
            </div>
            <a href="{{route('admin.users')}}" class="font-[500] text-[#838ea0] ">All</a>
        </div>

        <div class="flex items-center gap-2 mb-6">
            <div class="h-[40px] w-[40px] rounded-xl flex items-center justify-center bg-[#ffffff] drop-shadow-md">
                <img src="{{asset('img/customer-service_4814842.png')}}" class="w-[15px] h-[15px]" alt="">
            </div>
            <a href="{{route('admin.applied')}}" class="font-[500] text-[#838ea0]">Applied</a>
        </div>

        <p class="mb-6 text-[#838ea0] font-[500]">Courses</p>
        <div class="flex items-center gap-2 mb-7">
            <div class="h-[40px] w-[40px] rounded-xl flex items-center justify-center bg-[#ffffff] drop-shadow-md">
                <img src="{{asset('img/upload.png')}}" class="w-[15px] h-[15px]" alt="">
            </div>
            <a href="{{route('admin.upload')}}" class="font-[500] text-[#838ea0]">Upload</a>
        </div>

        <div class="flex items-center gap-2 mb-6">
            <div class="h-[40px] w-[40px] rounded-xl flex items-center justify-center bg-[#ffffff] drop-shadow-md">
                <img src="{{asset('img/online-learning.png')}}" class="w-[15px] h-[15px]" alt="">
            </div>
            <a href="{{route('admin.courses')}}" class="font-[500] text-[#838ea0]">View</a>
        </div>

        <div class="flex items-center gap-2 mb-6">
            <div class="h-[40px] w-[40px] rounded-xl flex items-center justify-center bg-[#ffffff] drop-shadow-md">
                <img src="{{asset('img/rating_1322236.png')}}" class="w-[15px] h-[15px]" alt="">
            </div>
            <a href="{{route('admin.instructor')}}" class="font-[500] text-[#838ea0] ">Instructors</a>
        </div>

        <div class="flex items-center gap-2 mb-6">
            <div class="h-[40px] w-[40px] rounded-xl flex items-center justify-center bg-[#ffffff] drop-shadow-md">
                <img src="{{asset('img/rating_1322236.png')}}" class="w-[15px] h-[15px]" alt="">
            </div>
            <a href="{{route('admin.category')}}" class="font-[500] text-[#838ea0] ">Category</a>
        </div>
        
    </div>
</div>
