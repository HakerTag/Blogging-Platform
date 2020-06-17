<x-admin>
	@if (session('postDeleted'))
		<p class="w-5/6 lg:w-2/3 mx-auto text-white text-center p-2 rounded-lg bg-green-600">
			{{ session('postDeleted') }}
		</p>
    @endif
    
	<table class="w-full border mt-4 text-sm md:text-base">
		<caption class="font-bold text-2xl py-2">Posts</caption>
		<thead>
			<th class="w-2/12 border py-2">Category</th>
			<th class="w-4/12 border py-2">Title</th>
			<th class="w-1/12 border py-2">Likes</th>
			<th class="w-1/12 border py-2">Dislikes</th>
			<th class="w-1/12 hidden lg:table-cell border py-2">Image</th>
			<th class="w-2/12 border py-2">Created At</th>
			<th class="w-1/12 border py-2">Edit</th>
		</thead>
		<tbody>
			@forelse($posts->sortDesc() as $post)
				<tr class="text-center">
					<td class="w-1/12 border py-2">
						<a class="text-blue-700 hover:underline" href="/category/{{ $post->category->name }}">
							{{ $post->category->name }}
						</a>
					</td>
					<td class="w-1/12 border py-2">
						<a class="hover:underline" href="/posts/{{ $post->id }}">
							{{ Str::limit($post->title, 40, '...') }}
						</a>
					</td>
					<td class="w-1/12 border py-2">
						<a class="hover:underline" href="/posts/{{ $post->id }}">
							{{ $post->likes }}
						</a>
					</td>
					<td class="w-1/12 border py-2">
						<a class="hover:underline" href="/posts/{{ $post->id }}">
							{{ $post->dislikes }}
						</a>
					</td>
					<td class="w-1/12 border hidden lg:table-cell">
						<a class="hover:underline" href="/posts/{{ $post->id }}">
							<img class="w-12 mx-auto" src="{{ asset($post->image_url) }}">
						</a>
					</td>
					<td class="w-1/12 border py-2">
						<a class="hover:underline" href="/posts/{{ $post->id }}">
							{{ $post->created_at->toFormattedDateString() }}
						</a>
					</td>
					<td class="w-1/12 border py-2">
						<a class="hover:text-yellow-500" href="/posts/{{ $post->id }}/edit">
							<i class="fas fa-edit"></i>
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td class="text-center font-semibold" colspan="7">There is no posts yet.</td>
				</tr>
			@endforelse
		</tbody>
	</table>
	{{ $posts->links() }}
</x-admin>