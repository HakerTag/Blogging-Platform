<div class="w-full bg-white fixed z-10">
	<div class="container mx-auto h-16 flex justify-center items-center">
		<p class="w-1/3 hidden md:block">
			{{ now()->isoFormat('dddd, MMMM Do, YYYY') }}
		</p>

		<a class="w-1/3 text-center hover:text-blue-700" href="/">Blogging platform</a>

		<ul class="flex justify-center md:justify-end w-2/3 md:w-1/3">
			<li class="mx-2">
				<form class="flex justify-end items-center relative text-sm" method="GET" action="/posts/search">
					
					<input class="border text-sm pl-2" type="text" name="keyword" placeholder="Search posts" value="{{ request('keyword') }}" required>

					<button type="submit" class="focus:outline-none active:outline-none absolute pr-2">
		                <svg class="w-4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
		                     viewBox="0 0 24 24" class="w-5 h-5">
		                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
		                </svg>
		            </button>

				</form>
			</li>
			@auth
				<li class="mx-2">
					<a class="hover:text-blue-700 mx-1" href="/home"><i class="fas fa-user mr-1"></i> <span class="hidden xl:inline-block">{{ Str::limit(auth()->user()->name, 10,'...') }}</span></a>
				</li>
				<li class="mx-2">
					<form method="POST" action="{{ route('logout') }}">
						@csrf
						<button class="hover:text-blue-700 mx-1" type="submit"><i class="fas fa-sign-out-alt mr-1"></i> <span class="hidden xl:inline-block">Logout</span></button>
					</form>
				</li>
			@else
				<li class="flex">
					<a class="hover:text-blue-700 mx-1" href="/login"><i class="fas fa-sign-in-alt mr-1"></i> <span class="hidden xl:inline-block">Login</span></a>
				</li>
				<span class="text-blue-700 mx-1">|</span>
				<li class="flex">
					<a class="hover:text-blue-700 mx-1" href="/register"><i class="fas fa-user-plus mr-1"></i> <span class="hidden xl:inline-block">Register</span></a>
				</li>
			@endauth
		</ul>
	</div>
	<div class="bg-blue-700 h-12 border-b-4 border-yellow-500 ">
		<ul class="flex h-full container mx-auto items-center justify-between text-white px-2">
			<li>
				<a class="@if(Request::path() == 'category/latest') text-yellow-500 @endif p-2 hover:text-yellow-500" href="/category/latest"><i class="fas fa-sort mr-1"></i> <span class="hidden lg:inline-block">Latest</span></a>
			</li>
			<li>
				<a class="@if(Request::path() == 'category/popular') text-yellow-500 @endif p-2 hover:text-yellow-500" href="/category/popular"><i class="fas fa-fire mr-1"></i> <span class="hidden lg:inline-block">Most popular</span></a>
			</li>
			<li>
				<a class="@if(Request::path() == 'category/business') text-yellow-500 @endif p-2 hover:text-yellow-500" href="/category/business"><i class="fas fa-chart-area mr-1"></i> <span class="hidden lg:inline-block">Business</span></a>
			</li>
			<li>
				<a class="@if(Request::path() == 'category/sport') text-yellow-500 @endif p-2 hover:text-yellow-500" href="/category/sport"><i class="fas fa-volleyball-ball mr-1"></i> <span class="hidden lg:inline-block">Sport</span></a>
			</li>
			<li>
				<a class="@if(Request::path() == 'category/culture') text-yellow-500 @endif p-2 hover:text-yellow-500" href="/category/culture"><i class="fas fa-theater-masks mr-1"></i> <span class="hidden lg:inline-block">Culture</span></a>
			</li>
			<li>
				<a class="@if(Request::path() == 'category/politics') text-yellow-500 @endif p-2 hover:text-yellow-500" href="/category/politics"><i class="fas fa-globe mr-1"></i> <span class="hidden lg:inline-block">Politics</span></a>
			</li>
			<li>
				<a class="@if(Request::path() == 'category/science') text-yellow-500 @endif p-2 hover:text-yellow-500" href="/category/science"><i class="fas fa-robot mr-1"></i> <span class="hidden lg:inline-block">Science</span></a>
			</li>
			<li>
				<a class="@if(Request::path() == 'category/health') text-yellow-500 @endif p-2 hover:text-yellow-500" href="/category/health"><i class="fas fa-heartbeat mr-1"></i> <span class="hidden lg:inline-block">Health</span></a>
			</li>
			<li>
				<a class="@if(Request::path() == 'category/style') text-yellow-500 @endif p-2 hover:text-yellow-500" href="/category/style"><i class="fas fa-female mr-1"></i> <span class="hidden lg:inline-block">Style</span></a>
			</li>
			<li>
				<a class="@if(Request::path() == 'category/travel') text-yellow-500 @endif p-2 hover:text-yellow-500" href="/category/travel"><i class="fas fa-plane mr-1"></i> <span class="hidden lg:inline-block">Travel</span></a>
			</li>
		</ul>
	</div>
</div>