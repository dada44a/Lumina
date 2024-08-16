@extends('layouts.Main')

@section('content')

<!-- component -->
<section>
	<div class="container max-w-full mx-auto py-24 px-6">
		<h1 class="text-center text-4xl text-black font-medium leading-snug tracking-wider">
			Pricing
		</h1>
		<p class="text-center text-lg text-gray-700 mt-2 px-6">
			Flexible plans to fit your learning needs: choose from Daily, Monthly, or Annual subscriptions.
		</p>
		<div class="h-1 mx-auto bg-indigo-200 w-24 opacity-75 mt-4 rounded"></div>

		<div class="max-w-full md:max-w-6xl mx-auto my-3 md:px-8">
			<div class="relative block flex flex-col md:flex-row items-center">
				
				<!-- Daily Plan -->
				<div class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-mr-4">
					<div class="bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden">
						<div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
							<h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
								Daily
							</h1>
							<h2 class="text-sm text-gray-500 text-center pb-6">Rs39</h2>
							<p>Perfect for learners who need short-term access and flexibility to try out our courses on a daily basis.</p>
						</div>

						<div class="flex flex-wrap mt-3 px-6">
							<ul>
								<li class="flex items-center">
									<div class="rounded-full p-2 fill-current text-yellow-400">
										<svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
											<polyline points="22 4 12 14.01 9 11.01"></polyline>
										</svg>
									</div>
									<span class="text-gray-700 text-lg ml-3">Access to all courses</span>
								</li>
							</ul>
						</div>
						
						<form action="{{ route('subscribe', 'bJ5rQ8mX2wV6zF0a') }}" method="POST">
							@csrf
							<div class="block flex items-center p-8 uppercase">
								<button class="mt-3 text-lg font-semibold bg-black w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700">
									Select
								</button>
							</div>
						</form>
					</div>
				</div>

				<!-- Monthly Plan -->
				<div class="w-full max-w-md sm:w-2/3 lg:w-1/3 sm:my-5 my-8 relative z-10 bg-white rounded-lg shadow-lg">
					<div class="text-sm leading-none rounded-t-lg bg-gray-200 text-black font-semibold uppercase py-4 text-center tracking-wide">
						Most Popular
					</div>
					<div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
						<h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
							Monthly
						</h1>
						<h2 class="text-sm text-gray-500 text-center pb-6"><span class="text-3xl">Rs399</span></h2>
						<p>Ideal for learners who prefer a month-to-month commitment with added benefits and flexibility</p>
					</div>
					<div class="flex pl-12 justify-start sm:justify-start mt-3">
						<ul>
							<li class="flex items-center">
								<div class="rounded-full p-2 fill-current text-yellow-400">
									<svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
										<polyline points="22 4 12 14.01 9 11.01"></polyline>
									</svg>
								</div>
								<span class="text-gray-700 text-lg ml-3">Access to all courses</span>
							</li>
							<li class="flex items-center">
								<div class="rounded-full p-2 fill-current text-yellow-400">
									<svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
										<polyline points="22 4 12 14.01 9 11.01"></polyline>
									</svg>
								</div>
								<span class="text-gray-700 text-lg ml-3">Course Downloading</span>
							</li>
							<li class="flex items-center">
								<div class="rounded-full p-2 fill-current text-yellow-400">
									<svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
										<polyline points="22 4 12 14.01 9 11.01"></polyline>
									</svg>
								</div>
								<span class="text-gray-700 text-lg ml-3">Live Sessions</span>
							</li>
						</ul>
					</div>
					<form action="{{ route('subscribe',' uP7zL1nK4wH9tX3c' )}}" method="POST">
						@csrf
						<div class="block flex items-center p-8 uppercase">
							<button class="mt-3 text-lg font-semibold bg-black w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700">
								Select
							</button>
						</div>
					</form>
				</div>

				<!-- Annual Plan -->
				<div class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-ml-4">
					<div class="bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden">
						<div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
							<h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
								Annually
							</h1>
							<h2 class="text-sm text-gray-500 text-center pb-6">Rs3999</h2>
							<p>Best value for dedicated learners committed to a full year of learning with exclusive benefits.</p>
						</div>
						<div class="flex flex-wrap mt-3 px-6">
							<ul>
								<li class="flex items-center">
									<div class="rounded-full p-2 fill-current text-yellow-400">
										<svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
											<polyline points="22 4 12 14.01 9 11.01"></polyline>
										</svg>
									</div>
									<span class="text-gray-700 text-lg ml-3">Everything in the Monthly Plan</span>
								</li>
								<li class="flex items-center">
									<div class="rounded-full p-2 fill-current text-yellow-400">
										<svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
											<polyline points="22 4 12 14.01 9 11.01"></polyline>
										</svg>
									</div>
									<span class="text-gray-700 text-lg ml-3">Early access to new courses</span>
								</li>
								<li class="flex items-center">
									<div class="rounded-full p-2 fill-current text-yellow-400">
										<svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
											<polyline points="22 4 12 14.01 9 11.01"></polyline>
										</svg>
									</div>
									<span class="text-gray-700 text-lg ml-3">Exclusive webinars and workshops</span>
								</li>
							</ul>
						</div>
						<form action="{{ route('subscribe','R6mX0vP2kT9bL8wJ')}}" method="POST">
							@csrf
							<div class="block flex items-center p-8 uppercase">
								<button class="mt-3 text-lg font-semibold bg-black w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700">
									Select
								</button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

@endsection
