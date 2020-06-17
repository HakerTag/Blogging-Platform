<x-admin>
	@if (session('commentApproved'))
		<p class="w-5/6 lg:w-2/3 mx-auto text-white text-center p-2 rounded-lg bg-green-600">
			{{ session('commentApproved') }}
		</p>
    @endif
    @if (session('commentDisapproved'))
		<p class="w-5/6 lg:w-2/3 mx-auto text-white text-center p-2 rounded-lg bg-green-600">
			{{ session('commentDisapproved') }}
		</p>
    @endif
	@if (session('commentDeleted'))
		<p class="w-5/6 lg:w-2/3 mx-auto text-white text-center p-2 rounded-lg bg-green-600">
			{{ session('commentDeleted') }}
		</p>
    @endif
	<table class="w-full border mt-4 text-sm md:text-base">
		<caption class="font-bold text-2xl py-2">Comments</caption>
		<thead>
			<th class="w-2/12 border py-2">Post</th>
			<th class="w-2/12 hidden lg:table-cell border py-2">Name</th>
			<th class="w-3/12 border py-2">Text</th>
			<th class="w-1/12 border py-2 px-2">Approved</th>
			<th class="w-1/12 hidden md:table-cell border py-2">Created At</th>
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
					<td class="w-1/12 border py-2 hidden md:table-cell">
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

	{{ $comments->links() }}
</x-admin>