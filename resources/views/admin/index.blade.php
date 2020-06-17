<x-admin>
	<table class="w-full border my-4 text-sm md:text-base">
		<caption class="font-bold text-2xl py-2">Last 10 Posts</caption>
		<thead>
			<th class="w-2/12 border py-2">Category</th>
			<th class="w-4/12 border py-2">Title</th>
			<th class="w-1/12 hidden md:table-cell border py-2">Likes</th>
			<th class="w-1/12 hidden md:table-cell border py-2">Dislikes</th>
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
					<td class="w-1/12 border py-2 hidden md:table-cell">
						<a class="hover:underline" href="/posts/{{ $post->id }}">
							{{ $post->likes }}
						</a>
					</td>
					<td class="w-1/12 border py-2 hidden md:table-cell">
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
	
	<table class="w-full border my-8 text-sm md:text-base">
		<caption class="font-bold text-2xl py-2">Last 10 Comments</caption>
		<thead>
			<th class="w-2/12 border py-2">Post</th>
			<th class="w-2/12 hidden lg:table-cell border py-2">Name</th>
			<th class="w-3/12 border py-2">Text</th>
			<th class="w-1/12 border py-2 px-2">Approved</th>
			<th class="w-1/12 border py-2">Created At</th>
			<th class="w-1/12 border py-2">Edit</th>
		</thead>
		<tbody>
			@forelse($comments->sortDesc() as $comment)
				<tr class="text-center">
					<td class="w-2/12 border py-2">
						<a class="text-blue-700 hover:underline" href="/posts/{{ $comment->post->id }}">
							{{ Str::limit($comment->post->title, 25, '...') }}
						</a>
					</td>
					<td class="w-2/12 border py-2 hidden lg:table-cell">
						<a class="hover:underline" href="/admin/comments/{{ $comment->id }}">
							{{ $comment->name }}
						</a>
					</td>
					<td class="w-3/12 border py-2">
						<a class="hover:underline" href="/admin/comments/{{ $comment->id }}">
							{{  Str::limit($comment->body, 30, '...')  }}
						</a>
					</td>
					@if($comment->approved == 0)
						<td class="w-1/12 bg-red-600 text-white border py-2">
							<a class="hover:underline" href="/admin/comments/{{ $comment->id }}">
								Disapproved
							</a>
						</td>
					@elseif($comment->approved == 1)
						<td class="w-1/12 bg-green-500 text-white border py-2">
							<a class="hover:underline" href="/admin/comments/{{ $comment->id }}">
								Approved
							</a>
						</td>
					@else
						<td class="w-1/12 bg-yellow-500 border py-2">
							<a class="hover:underline" href="/admin/comments/{{ $comment->id }}">
								Waiting
							</a>
						</td>
					@endif
					<td class="w-1/12 border py-2">
						<a class="hover:underline" href="/admin/comments/{{ $comment->id }}">
							{{ $comment->created_at->toFormattedDateString() }}
						</a>
					</td>
					<td class="w-1/12 border py-2">
						<a class="hover:text-yellow-500" href="/admin/comments/{{ $comment->id }}">
							<i class="fas fa-edit"></i>
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td class="text-center font-semibold" colspan="6">There is no comments yet.</td>
				</tr>
			@endforelse
		</tbody>
	</table>
	
	<table class="w-full border my-8 text-sm md:text-base">
		<caption class="font-bold text-2xl py-2">Last 10 Users</caption>
		<thead>
			<th class="w-2/12 border py-2">Name</th>
			<th class="w-2/12 border py-2">Email</th>
			<th class="w-2/12 border py-2">Created At</th>
			<th class="w-2/12 hidden lg:table-cell border py-2">Updated At</th>
			<th class="w-2/12 hidden lg:table-cell border py-2">Last Post</th>
			<th class="w-1/12 border py-2">Edit</th>
		</thead>
		<tbody>
			@forelse($users->sortDesc() as $user)
				<tr class="text-center">
					
					<td class="w-1/12 border py-2">
						<a class="hover:underline" href="/users/{{ $user->name }}">
							{{ $user->name }}
						</a>
					</td>
					
					<td class="w-1/12 border py-2">
						<a class="hover:underline" href="/users/{{ $user->name }}">
							{{ $user->email }}
						</a>
					</td>

					<td class="w-1/12 border py-2">
						<a class="hover:underline" href="/users/{{ $user->name }}">
							{{ $user->created_at->toFormattedDateString() }}
						</a>
					</td>

					<td class="w-1/12 border py-2 hidden lg:table-cell">
						<a class="hover:underline" href="/users/{{ $user->name }}">
							{{ $user->updated_at->toFormattedDateString() }}
						</a>
					</td>

					@if(count($user->posts))
						<td class="w-1/12 border py-2 hidden lg:table-cell">
							<a class="text-blue-700 hover:underline" href="/posts/{{ $user->posts->last()->id }}">
								{{ Str::limit($user->posts->last()->title, 20, '...') }}
							</a>
						</td>
					@else
						<td class="w-1/12 border py-2 hidden lg:table-cell">
								User doesn't have any post.
						</td>
					@endif

					<td class="w-1/12 border py-2">
						<a class="hover:text-yellow-500" href="/users/{{ $user->name }}/edit">
							<i class="fas fa-edit"></i>
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td class="text-center font-semibold" colspan="6">There is no users yet.</td>
				</tr>
			@endforelse
		</tbody>
	</table>
</x-admin>