<x-main>
	<div class="flex">	
		<div class="w-full lg:w-3/4 p-4 divide-y-4">
			<div>
				<div class="lg:flex">
					<a class="w-full lg:w-2/3 flex justify-center items-end relative lg:mx-4" href="/posts/{{ $popularPosts[0]->id }}">
						<p class="w-5/6 lg:w-full absolute text-white text-xl md:text-2xl font-semibold px-2 py-4 md:py-8 bg-transparent-half">
							{{ Str::limit($popularPosts[0]->title, 150, '...') }}
						</p>
						<img class="w-5/6 lg:w-full main-image" src="{{ asset($popularPosts[0]->image_url) }}">
					</a>
					<div class="w-full mb-2 lg:mb-0 lg:w-1/3 flex lg:flex-col justify-between items-center">
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $popularPosts[1]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($popularPosts[1]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($popularPosts[1]->image_url) }}">
						</a>
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $popularPosts[2]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($popularPosts[2]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($popularPosts[2]->image_url) }}">
						</a>
					</div>
				</div>
				<div class="hidden lg:flex justify-center items-center">
					<a class="w-1/3 flex flex-col items-center justify-center m-4" href="/posts/{{ $popularPosts[3]->id }}">
						<img class="w-full" src="{{ asset($popularPosts[3]->image_url) }}">
						<p class="w-full font-semibold h-16">{{ Str::limit($popularPosts[3]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/3 flex flex-col items-center justify-center m-4" href="/posts/{{ $popularPosts[4]->id }}">
						<img class="w-full" src="{{ asset($popularPosts[4]->image_url) }}">
						<p class="w-full font-semibold h-16">{{ Str::limit($popularPosts[4]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/3 flex flex-col items-center justify-center m-4" href="/posts/{{ $popularPosts[5]->id }}">
						<img class="w-full" src="{{ asset($popularPosts[5]->image_url) }}">
						<p class="w-full font-semibold h-16">{{ Str::limit($popularPosts[5]->title, 100, '...') }}</p>
					</a>
				</div>
			</div>


			<div class="py-2">
				<a class="mx-2 text-xl lg:text-2xl font-semibold hover:text-blue-700" href="/category/latest"><i class="fas fa-sort mr-1"></i> Latest</a>
				@empty($latestPosts)
					<p class="text-center w-full font-semibold text-lg pt-4">There is no posts in this category</p>
				@else
				<div class="lg:flex mt-2">
					<a class="w-full lg:w-2/3 flex justify-center items-end relative lg:mx-4" href="/posts/{{ $latestPosts[0]->id }}">
						<p class="w-5/6 lg:w-full absolute text-white text-xl md:text-2xl font-semibold px-2 py-4 md:py-8 bg-transparent-half">
							{{ Str::limit($latestPosts[0]->title, 150, '...') }}
						</p>
						<img class="w-5/6 lg:w-full main-image" src="{{ asset($latestPosts[0]->image_url) }}">
					</a>
					<div class="w-full mb-2 lg:mb-0 lg:w-1/3 flex lg:flex-col justify-between items-center">
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $latestPosts[1]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($latestPosts[1]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($latestPosts[1]->image_url) }}">
						</a>
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $latestPosts[2]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($latestPosts[2]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($latestPosts[2]->image_url) }}">
						</a>
					</div>
				</div>
				<div class="hidden lg:flex justify-center items-center">
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $latestPosts[3]->id }}">
						<img class="w-full" src="{{ asset($latestPosts[3]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($latestPosts[3]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $latestPosts[4]->id }}">
						<img class="w-full" src="{{ asset($latestPosts[4]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($latestPosts[4]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $latestPosts[5]->id }}">
						<img class="w-full" src="{{ asset($latestPosts[5]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($latestPosts[5]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $latestPosts[6]->id }}">
						<img class="w-full" src="{{ asset($latestPosts[6]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($latestPosts[6]->title, 100, '...') }}</p>
					</a>
				</div>
				<div class="flex items-center justify-center mt-4">
					<a class="bg-blue-700 text-white py-2 px-8 rounded hover:text-yellow-500" href="/category/latest">See more</a>
				</div>
				@endif
			</div>

			<div class="py-2">
				<a class="mx-2 text-xl lg:text-2xl font-semibold hover:text-blue-700" href="/category/business"><i class="fas fa-chart-area mr-1"></i> Business</a>
				@empty($businessPosts)
					<p class="text-center w-full font-semibold text-lg pt-4">There is no posts in this category</p>
				@else
				<div class="lg:flex mt-2">
					<a class="w-full lg:w-2/3 flex justify-center items-end relative lg:mx-4" href="/posts/{{ $businessPosts[0]->id }}">
						<p class="w-5/6 lg:w-full absolute text-white text-xl md:text-2xl font-semibold px-2 py-4 md:py-8 bg-transparent-half">
							{{ Str::limit($businessPosts[0]->title, 150, '...') }}
						</p>
						<img class="w-5/6 lg:w-full main-image" src="{{ asset($businessPosts[0]->image_url) }}">
					</a>
					<div class="w-full mb-2 lg:mb-0 lg:w-1/3 flex lg:flex-col justify-between items-center">
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $businessPosts[1]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($businessPosts[1]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($businessPosts[1]->image_url) }}">
						</a>
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $businessPosts[2]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($businessPosts[2]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($businessPosts[2]->image_url) }}">
						</a>
					</div>
				</div>
				<div class="hidden lg:flex justify-center items-center">
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $businessPosts[3]->id }}">
						<img class="w-full" src="{{ asset($businessPosts[3]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($businessPosts[3]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $businessPosts[4]->id }}">
						<img class="w-full" src="{{ asset($businessPosts[4]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($businessPosts[4]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $businessPosts[5]->id }}">
						<img class="w-full" src="{{ asset($businessPosts[5]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($businessPosts[5]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $businessPosts[6]->id }}">
						<img class="w-full" src="{{ asset($businessPosts[6]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($businessPosts[6]->title, 100, '...') }}</p>
					</a>
				</div>
				<div class="flex items-center justify-center mt-4">
					<a class="bg-blue-700 text-white py-2 px-8 rounded hover:text-yellow-500" href="/category/business">See more</a>
				</div>
				@endif
			</div>

			<div class="py-2">
				<a class="mx-2 text-xl lg:text-2xl font-semibold hover:text-blue-700" href="/category/sport"><i class="fas fa-volleyball-ball mr-1"></i> Sport</a>
				@empty($sportPosts)
					<p class="text-center w-full font-semibold text-lg pt-4">There is no posts in this category</p>
				@else
				<div class="lg:flex mt-2">
					<a class="w-full lg:w-2/3 flex justify-center items-end relative lg:mx-4" href="/posts/{{ $sportPosts[0]->id }}">
						<p class="w-5/6 lg:w-full absolute text-white text-xl md:text-2xl font-semibold px-2 py-4 md:py-8 bg-transparent-half">
							{{ Str::limit($sportPosts[0]->title, 150, '...') }}
						</p>
						<img class="w-5/6 lg:w-full main-image" src="{{ asset($sportPosts[0]->image_url) }}">
					</a>
					<div class="w-full mb-2 lg:mb-0 lg:w-1/3 flex lg:flex-col justify-between items-center">
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $sportPosts[1]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($sportPosts[1]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($sportPosts[1]->image_url) }}">
						</a>
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $sportPosts[2]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($sportPosts[2]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($sportPosts[2]->image_url) }}">
						</a>
					</div>
				</div>
				<div class="hidden lg:flex justify-center items-center">
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $sportPosts[3]->id }}">
						<img class="w-full" src="{{ asset($sportPosts[3]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($sportPosts[3]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $sportPosts[4]->id }}">
						<img class="w-full" src="{{ asset($sportPosts[4]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($sportPosts[4]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $sportPosts[5]->id }}">
						<img class="w-full" src="{{ asset($sportPosts[5]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($sportPosts[5]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $sportPosts[6]->id }}">
						<img class="w-full" src="{{ asset($sportPosts[6]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($sportPosts[6]->title, 100, '...') }}</p>
					</a>
				</div>
				<div class="flex items-center justify-center mt-4">
					<a class="bg-blue-700 text-white py-2 px-8 rounded hover:text-yellow-500" href="/category/sport">See more</a>
				</div>
				@endif
			</div>

			<div class="py-2">
				<a class="mx-2 text-xl lg:text-2xl font-semibold hover:text-blue-700" href="/category/culture"><i class="fas fa-theater-masks mr-1"></i> Culture</a>
				@empty($culturePosts)
					<p class="text-center w-full font-semibold text-lg pt-4">There is no posts in this category</p>
				@else
				<div class="lg:flex mt-2">
					<a class="w-full lg:w-2/3 flex justify-center items-end relative lg:mx-4" href="/posts/{{ $culturePosts[0]->id }}">
						<p class="w-5/6 lg:w-full absolute text-white text-xl md:text-2xl font-semibold px-2 py-4 md:py-8 bg-transparent-half">
							{{ Str::limit($culturePosts[0]->title, 150, '...') }}
						</p>
						<img class="w-5/6 lg:w-full main-image" src="{{ asset($culturePosts[0]->image_url) }}">
					</a>
					<div class="w-full mb-2 lg:mb-0 lg:w-1/3 flex lg:flex-col justify-between items-center">
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $culturePosts[1]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($culturePosts[1]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($culturePosts[1]->image_url) }}">
						</a>
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $culturePosts[2]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($culturePosts[2]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($culturePosts[2]->image_url) }}">
						</a>
					</div>
				</div>
				<div class="hidden lg:flex justify-center items-center">
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $culturePosts[3]->id }}">
						<img class="w-full" src="{{ asset($culturePosts[3]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($culturePosts[3]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $culturePosts[4]->id }}">
						<img class="w-full" src="{{ asset($culturePosts[4]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($culturePosts[4]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $culturePosts[5]->id }}">
						<img class="w-full" src="{{ asset($culturePosts[5]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($culturePosts[5]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $culturePosts[6]->id }}">
						<img class="w-full" src="{{ asset($culturePosts[6]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($culturePosts[6]->title, 100, '...') }}</p>
					</a>
				</div>
				<div class="flex items-center justify-center mt-4">
					<a class="bg-blue-700 text-white py-2 px-8 rounded hover:text-yellow-500" href="/category/culture">See more</a>
				</div>
				@endif
			</div>

			<div class="py-2">
				<a class="mx-2 text-xl lg:text-2xl font-semibold hover:text-blue-700" href="/category/politics"><i class="fas fa-globe mr-1"></i> Politics</a>
				@empty($politicsPosts)
					<p class="text-center w-full font-semibold text-lg pt-4">There is no posts in this category</p>
				@else
				<div class="lg:flex mt-2">
					<a class="w-full lg:w-2/3 flex justify-center items-end relative lg:mx-4" href="/posts/{{ $politicsPosts[0]->id }}">
						<p class="w-5/6 lg:w-full absolute text-white text-xl md:text-2xl font-semibold px-2 py-4 md:py-8 bg-transparent-half">
							{{ Str::limit($politicsPosts[0]->title, 150, '...') }}
						</p>
						<img class="w-5/6 lg:w-full main-image" src="{{ asset($politicsPosts[0]->image_url) }}">
					</a>
					<div class="w-full mb-2 lg:mb-0 lg:w-1/3 flex lg:flex-col justify-between items-center">
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $politicsPosts[1]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($politicsPosts[1]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($politicsPosts[1]->image_url) }}">
						</a>
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $politicsPosts[2]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($politicsPosts[2]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($politicsPosts[2]->image_url) }}">
						</a>
					</div>
				</div>
				<div class="hidden lg:flex justify-center items-center">
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $politicsPosts[3]->id }}">
						<img class="w-full" src="{{ asset($politicsPosts[3]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($politicsPosts[3]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $politicsPosts[4]->id }}">
						<img class="w-full" src="{{ asset($politicsPosts[4]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($politicsPosts[4]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $politicsPosts[5]->id }}">
						<img class="w-full" src="{{ asset($politicsPosts[5]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($politicsPosts[5]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $politicsPosts[6]->id }}">
						<img class="w-full" src="{{ asset($politicsPosts[6]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($politicsPosts[6]->title, 100, '...') }}</p>
					</a>
				</div>
				<div class="flex items-center justify-center mt-4">
					<a class="bg-blue-700 text-white py-2 px-8 rounded hover:text-yellow-500" href="/category/politics">See more</a>
				</div>
				@endif
			</div>

			<div class="py-2">
				<a class="mx-2 text-xl lg:text-2xl font-semibold hover:text-blue-700" href="/category/science"><i class="fas fa-robot mr-1"></i> Science</a>
				@empty($sciencePosts)
					<p class="text-center w-full font-semibold text-lg pt-4">There is no posts in this category</p>
				@else
				<div class="lg:flex mt-2">
					<a class="w-full lg:w-2/3 flex justify-center items-end relative lg:mx-4" href="/posts/{{ $sciencePosts[0]->id }}">
						<p class="w-5/6 lg:w-full absolute text-white text-xl md:text-2xl font-semibold px-2 py-4 md:py-8 bg-transparent-half">
							{{ Str::limit($sciencePosts[0]->title, 150, '...') }}
						</p>
						<img class="w-5/6 lg:w-full main-image" src="{{ asset($sciencePosts[0]->image_url) }}">
					</a>
					<div class="w-full mb-2 lg:mb-0 lg:w-1/3 flex lg:flex-col justify-between items-center">
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $sciencePosts[1]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($sciencePosts[1]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($sciencePosts[1]->image_url) }}">
						</a>
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $sciencePosts[2]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($sciencePosts[2]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($sciencePosts[2]->image_url) }}">
						</a>
					</div>
				</div>
				<div class="hidden lg:flex justify-center items-center">
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $sciencePosts[3]->id }}">
						<img class="w-full" src="{{ asset($sciencePosts[3]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($sciencePosts[3]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $sciencePosts[4]->id }}">
						<img class="w-full" src="{{ asset($sciencePosts[4]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($sciencePosts[4]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $sciencePosts[5]->id }}">
						<img class="w-full" src="{{ asset($sciencePosts[5]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($sciencePosts[5]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $sciencePosts[6]->id }}">
						<img class="w-full" src="{{ asset($sciencePosts[6]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($sciencePosts[6]->title, 100, '...') }}</p>
					</a>
				</div>
				<div class="flex items-center justify-center mt-4">
					<a class="bg-blue-700 text-white py-2 px-8 rounded hover:text-yellow-500" href="/category/science">See more</a>
				</div>
				@endif
			</div>

			<div class="py-2">
				<a class="mx-2 text-xl lg:text-2xl font-semibold hover:text-blue-700" href="/category/health"><i class="fas fa-heartbeat mr-1"></i> Health</a>
				@empty($healthPosts)
					<p class="text-center w-full font-semibold text-lg pt-4">There is no posts in this category</p>
				@else
				<div class="lg:flex mt-2">
					<a class="w-full lg:w-2/3 flex justify-center items-end relative lg:mx-4" href="/posts/{{ $healthPosts[0]->id }}">
						<p class="w-5/6 lg:w-full absolute text-white text-xl md:text-2xl font-semibold px-2 py-4 md:py-8 bg-transparent-half">
							{{ Str::limit($healthPosts[0]->title, 150, '...') }}
						</p>
						<img class="w-5/6 lg:w-full main-image" src="{{ asset($healthPosts[0]->image_url) }}">
					</a>
					<div class="w-full mb-2 lg:mb-0 lg:w-1/3 flex lg:flex-col justify-between items-center">
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $healthPosts[1]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($healthPosts[1]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($healthPosts[1]->image_url) }}">
						</a>
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $healthPosts[2]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($healthPosts[2]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($healthPosts[2]->image_url) }}">
						</a>
					</div>
				</div>
				<div class="hidden lg:flex justify-center items-center">
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $healthPosts[3]->id }}">
						<img class="w-full" src="{{ asset($healthPosts[3]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($healthPosts[3]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $healthPosts[4]->id }}">
						<img class="w-full" src="{{ asset($healthPosts[4]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($healthPosts[4]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $healthPosts[5]->id }}">
						<img class="w-full" src="{{ asset($healthPosts[5]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($healthPosts[5]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $healthPosts[6]->id }}">
						<img class="w-full" src="{{ asset($healthPosts[6]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($healthPosts[6]->title, 100, '...') }}</p>
					</a>
				</div>
				<div class="flex items-center justify-center mt-4">
					<a class="bg-blue-700 text-white py-2 px-8 rounded hover:text-yellow-500" href="/category/health">See more</a>
				</div>
				@endif
			</div>

			<div class="py-2">
				<a class="mx-2 text-xl lg:text-2xl font-semibold hover:text-blue-700" href="/category/style"><i class="fas fa-female mr-1"></i> Style</a>
				@empty($stylePosts)
					<p class="text-center w-full font-semibold text-lg pt-4">There is no posts in this category</p>
				@else
				<div class="lg:flex mt-2">
					<a class="w-full lg:w-2/3 flex justify-center items-end relative lg:mx-4" href="/posts/{{ $stylePosts[0]->id }}">
						<p class="w-5/6 lg:w-full absolute text-white text-xl md:text-2xl font-semibold px-2 py-4 md:py-8 bg-transparent-half">
							{{ Str::limit($stylePosts[0]->title, 150, '...') }}
						</p>
						<img class="w-5/6 lg:w-full main-image" src="{{ asset($stylePosts[0]->image_url) }}">
					</a>
					<div class="w-full mb-2 lg:mb-0 lg:w-1/3 flex lg:flex-col justify-between items-center">
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $stylePosts[1]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($stylePosts[1]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($stylePosts[1]->image_url) }}">
						</a>
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $stylePosts[2]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($stylePosts[2]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($stylePosts[2]->image_url) }}">
						</a>
					</div>
				</div>
				<div class="hidden lg:flex justify-center items-center">
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $stylePosts[3]->id }}">
						<img class="w-full" src="{{ asset($stylePosts[3]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($stylePosts[3]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $stylePosts[4]->id }}">
						<img class="w-full" src="{{ asset($stylePosts[4]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($stylePosts[4]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $stylePosts[5]->id }}">
						<img class="w-full" src="{{ asset($stylePosts[5]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($stylePosts[5]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $stylePosts[6]->id }}">
						<img class="w-full" src="{{ asset($stylePosts[6]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($stylePosts[6]->title, 100, '...') }}</p>
					</a>
				</div>
				<div class="flex items-center justify-center mt-4">
					<a class="bg-blue-700 text-white py-2 px-8 rounded hover:text-yellow-500" href="/category/style">See more</a>
				</div>
				@endif
			</div>

			<div class="py-2">
				<a class="mx-2 text-xl lg:text-2xl font-semibold hover:text-blue-700" href="/category/travel"><i class="fas fa-plane mr-1"></i> Travel</a>
				@empty($travelPosts)
					<p class="text-center w-full font-semibold text-lg pt-4">There is no posts in this category</p>
				@else
				<div class="lg:flex mt-2">
					<a class="w-full lg:w-2/3 flex justify-center items-end relative lg:mx-4" href="/posts/{{ $travelPosts[0]->id }}">
						<p class="w-5/6 lg:w-full absolute text-white text-xl md:text-2xl font-semibold px-2 py-4 md:py-8 bg-transparent-half">
							{{ Str::limit($travelPosts[0]->title, 150, '...') }}
						</p>
						<img class="w-5/6 lg:w-full main-image" src="{{ asset($travelPosts[0]->image_url) }}">
					</a>
					<div class="w-full mb-2 lg:mb-0 lg:w-1/3 flex lg:flex-col justify-between items-center">
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $travelPosts[1]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($travelPosts[1]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($travelPosts[1]->image_url) }}">
						</a>
						<a class="flex items-end relative m-2 lg:m-4" href="/posts/{{ $travelPosts[2]->id }}">
							<p class="w-full absolute text-sm lg:text-base text-white px-2 py-1 font-semibold py-3 bg-transparent-half">
								{{ Str::limit($travelPosts[2]->title, 100, '...') }}
							</p>
							<img class="w-full" src="{{ asset($travelPosts[2]->image_url) }}">
						</a>
					</div>
				</div>
				<div class="hidden lg:flex justify-center items-center">
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $travelPosts[3]->id }}">
						<img class="w-full" src="{{ asset($travelPosts[3]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($travelPosts[3]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $travelPosts[4]->id }}">
						<img class="w-full" src="{{ asset($travelPosts[4]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($travelPosts[4]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $travelPosts[5]->id }}">
						<img class="w-full" src="{{ asset($travelPosts[5]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($travelPosts[5]->title, 100, '...') }}</p>
					</a>
					<a class="w-1/4 flex flex-col items-center justify-center m-4" href="/posts/{{ $travelPosts[6]->id }}">
						<img class="w-full" src="{{ asset($travelPosts[6]->image_url) }}">
						<p class="w-full font-semibold h-24">{{ Str::limit($travelPosts[6]->title, 100, '...') }}</p>
					</a>
				</div>
				<div class="flex items-center justify-center mt-4">
					<a class="bg-blue-700 text-white py-2 px-8 rounded hover:text-yellow-500" href="/category/travel">See more</a>
				</div>
				@endif
			</div>
		</div>

		<x-sidebar>
			<div class="flex flex-col items-center justify-center">
				<h1 class="text-xl font-bold mt-8 mb-2">Latest Posts</h1>
				@forelse($newestPosts->sortDesc() as $newestPost)
					<a class="my-2 p-3 border w-3/4 mx-auto hover:shadow-xl" href="/posts/{{ $newestPost->id }}">
						<img src="{{ asset($newestPost->image_url) }}">
						<p class="text-center">{{ Str::limit($newestPost->title, 40, '...') }}</p>
					</a>
				@empty
					<p class="w-3/4 mx-auto text-center">There is no new posts.</p>
				@endforelse
			</div>
		</x-sidebar>
	</div>
</x-main>