<x-main>
	<div class="flex">
		<div class="w-full lg:w-3/4 py-8 px-6 lg:px-12">
			<table class="w-full table-auto">
				<caption class="text-xl text-center px-4 pb-4 font-bold">Users Informations</caption>
				<tbody>
						<tr class="text-center border-2 bg-blue-200">
							<td class="border-2 font-bold">
								Name
							</td>
							<td class="border-2">
								{{ $user->name }}
							</td>
						</tr>
						<tr class="text-center border-2 bg-blue-100">
							<td class="border-2 font-bold">
								Email
							</td>
							<td class="border-2">
								{{ $user->email }}
							</td>
						</tr>
						<tr class="text-center border-2 bg-blue-200">
							<td class="border-2 font-bold">
								Created At
							</td>
							<td class="border-2">
								{{ $user->created_at->toFormattedDateString() }}
							</td>
						</tr>
				</tbody>
			</table>
			@auth
				@if($user->id == auth()->id() || auth()->user()->isAdmin())
					<div class="flex justify-end">
						<a class="bg-yellow-500 py-1 px-4 rounded mt-4 hover:bg-yellow-600 hover:shadow-xl" href="/users/{{ $user->name }}/edit"><i class="fas fa-user-edit"></i> Edit</a>
					</div>
				@endif
			@endauth

			<table class="w-full table-auto my-8">
				<caption class="text-xl text-center px-4 py-4 font-bold">Users Posts</caption>
				<thead class="text-sm md:text-base border py-2">
					<th class="border py-2">Category</th>
					<th class="border py-2">Title</th>
					<th class="border py-2">Likes</th>
					<th class="border py-2">Dislikes</th>
					<th class="hidden md:table-cell border py-2">Image</th>
					<th class="border py-2">Created At</th>
				</thead>
				<tbody class="text-sm md:text-base">
					@forelse($user->posts as $post)
						<tr class="text-center border">
							<td class="border text-blue-700">
								<a href="/category/{{$post->category->name}}">
									{{ $post->category->name }}
								</a>
							</td>
							<td class="border">
								<a class="hover:text-blue-700" href="/posts/{{ $post->id }}">
									{{ Str::limit($post->title, 50, '...') }}
								</a>
							</td>
							<td class="border">
								<a class="hover:text-blue-700" href="/posts/{{ $post->id }}">
									{{ $post->likes }}
								</a>
							</td>
							<td class="border">
								<a class="hover:text-blue-700" href="/posts/{{ $post->id }}">
									{{ $post->dislikes }}
								</a>
							</td>
							<td class="hidden md:table-cell border">
								<a href="/posts/{{ $post->id }}">
									<img class="w-16 mx-auto" src="{{ asset($post->image_url) }}">
								</a>
							</td>
							<td class="border">
								<a class="hover:text-blue-700" href="/posts/{{ $post->id }}">
									{{ $post->created_at->toFormattedDateString() }}
								</a>
							</td>
						</tr>
					@empty	
						<tr class="border text-center">
							<td colspan="6">User doesn't have any posts yet.</td>
						</tr>
					@endforelse
				</tbody>
			</table>
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