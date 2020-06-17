<x-main>
	<h1 class="text-xl mx-8">Search for: <b>{{ request('keyword') }} </b></h1>
	<div class="flex">
		<div class="w-full lg:w-3/4 py-4 px-4 lg:px-12">
			<div class="flex flex-wrap items-start justify-start">
				@forelse($posts->sortDesc() as $post)
				<div class="w-1/2 md:w-1/3">
					<div class="m-3 py-2 px-4 border-2 rounded shadow-xl hover:border-yellow-500">					
						<a href="/posts/{{ $post->id }}">
							<p class="text-blue-700 font-semibold" href="#">{{ $post->category->name }}</p>
							<h1 class="h-16 font-bold mt-2">{{ Str::limit($post->title, 50, '...') }}</h1>
							<img class="my-2" src="{{ asset($post->image_url) }}">
							<p class="my-2 text-gray-800">{{ $post->created_at->diffForHumans() }}</p>

							<p class="mt-8 text-blue-700 hover:underline">Continue reading</p>
						</a>
					</div>
				</div>			
				@empty
					<p class="w-full text-center text-lg mt-4">There is no posts for this search.</p>
				@endforelse
			</div>
				{{ $posts->links() }}
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
