<x-main>
	@if (session('commentSent'))
		<p class="w-2/3 mx-auto text-white text-center py-2 rounded-lg bg-green-600">
			{{ session('commentSent') }}
		</p>
    @endif
	<div class="flex">
		<div class="w-full lg:w-3/4 py-4 px-6 lg:px-12">
			<h1 class="text-2xl lg:text-3xl font-semibold">{{ $post->title }}</h1>
			<a class="text-blue-700 text-lg font-semibold" href="/category/{{ $post->category->name }}">{{ $post->category->name }}</a>
			<div class="flex justify-between items-center">
				<p class="my-1">{{ $post->created_at->toFormattedDateString() }} by 
					<a class="text-blue-700 hover:text-yellow-500" href="/users/{{ $post->user->name }}"><i class="fas fa-user"></i> {{ $post->user->name }}</a>
				</p>
				@auth
					@if($post->user_id == auth()->id() || auth()->user()->isAdmin())
						<a class="bg-yellow-500 py-1 px-4 rounded hover:bg-yellow-600 hover:shadow-xl" href="/posts/{{ $post->id }}/edit"><i class="fas fa-user-edit"></i> Edit</a>
					@endif
				@endauth
			</div>

			<img class="mx-auto my-4 w-full main-image" src="{{ asset($post->image_url) }}">
			<p> {!! $post->body !!} </p>

			<hr class="my-4">
			<div class="flex">
				<form class="mx-2" method="POST" action="/posts/{{ $post->id }}/like">
                	@csrf
                	@method('PUT')
                	<button class="text-white py-1 px-3 rounded bg-green-600 hover:bg-green-700" type="submit"><i class="fas fa-thumbs-up"></i> Like</button> : {{ $post->likes}} 
              	</form>
              	<form class="mx-2" method="POST" action="/posts/{{ $post->id }}/dislike">
               		@csrf
               		@method('PUT')
                	<button class="text-white py-1 px-3 rounded bg-red-600 hover:bg-red-700" type="submit"><i class="fas fa-thumbs-down"></i> Dislike</button> : {{ $post->dislikes }} 
              	</form>
			</div>
			<hr class="my-4">
			<div>
				<div class="sharethis-inline-share-buttons"></div>
			</div>
			<hr class="my-4">
			<div>
				<h1 class="text-lg font-semibold">Similar posts</h1>
				<div class="sm:flex">
					@forelse($similarPosts as $similarPost)
						<a class="w-full sm:w-1/4 m-2 sm:m-4" href="#">
							<img class="w-2/3 mx-auto sm:w-auto sm:mx-auto" src="{{ asset($similarPost->image_url) }}">
							<p class="w-2/3 mx-auto text-center sm:w-auto sm:mx-auto sm:text-left">{{ Str::limit($similarPost->title, 60, '...') }}</p>
						</a>
					@empty
						<p class="mx-4 my-2 font-semibold">There is no similar posts.</p>
					@endforelse
				</div>
			</div>
			<hr class="my-4">
			<div>
				<h1 class="text-xl font-semibold"><i class="fas fa-comments"></i> Comments</h1>
				@forelse($comments as $comment)
					<div class="border-2 my-2 py-6 px-4 rounded">
						<p><b>{{ $comment->name }}</b> : {{ $comment->body }} <br> <i>{{ $comment->created_at->diffForHumans() }}</i>
					</div>
				@empty
					<p class="mt-2 pl-4">There is no comments for this post.</p>
				@endforelse
			</div>
			<hr class="my-8">
			<form class="flex flex-col" method="POST" action="/posts/{{ $post->id }}/comments">
				@csrf

				<label class="text-xl font-semibold">Add Comment</label>
				
				<input class="border border-gray-400 rounded p-2 my-2 @error('name') border-red-600 @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Name" required>
				@error('name')
					<p class="text-red-600 font-semibold">{{ $errors->first('name') }}</p>
				@enderror
				
				<textarea class="border border-gray-400 rounded p-2 my-2 @error('body') border-red-600 @enderror" name="body" placeholder="Text" rows="5" required>{{ old('body') }}</textarea>
				@error('body')
					<p class="text-red-600 font-semibold">{{ $errors->first('body') }}</p>
				@enderror

				<button class="w-32 bg-blue-700 text-white rounded py-2 my-2 hover:text-yellow-500">Send</button>
			</form>
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