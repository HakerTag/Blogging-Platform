<x-main>
	<h1 class="text-2xl font-bold mx-8">Approve Comments</h1>
	@if (session('commentApproved'))
		<p class="w-2/3 mx-auto text-white text-center py-2 my-2 rounded-lg bg-green-600">
			{{ session('commentApproved') }}
		</p>
    @endif
    @if (session('commentDisapproved'))
		<p class="w-2/3 mx-auto text-white text-center py-2 my-2 rounded-lg bg-green-600">
			{{ session('commentDisapproved') }}
		</p>
    @endif
	<div class="mx-8">
		@forelse($comments->sortDesc() as $comment)
			<ul>
				<li class="border my-4 p-4">
					<p class="mb-3">Comment for <a class="text-blue-700 hover:underline" href="/posts/{{ $comment->post->id }}">this post</a></p>
					<p><b>{{ $comment->name}}</b> : {{ $comment->body }}</p>
					<p class="mb-4 italic">{{ $comment->created_at->diffForHumans() }}</p>

					<div class="flex">
						<form method="POST" action="/comments/{{ $comment->id }}/approve">
							@csrf
							@method('PUT')
							<button class="text-white text-sm bg-green-600 px-4 py-1 mx-2 rounded hover:bg-green-700 hover:shadow-lg" type="submit"><i class="fas fa-check-circle"></i> Approve</button>
						</form>
						<form method="POST" action="/comments/{{ $comment->id }}/disapprove">
							@csrf
							@method('PUT')
							<button class="text-white text-sm bg-red-600 px-4 py-1 mx-2 rounded hover:bg-red-700 hover:shadow-lg" type="submit"><i class="fas fa-minus-circle"></i> Disapprove</button>
						</form>
					</div>
				</li>
			</ul>
		@empty
			<p class="text-xl px-8 my-8">There is no comments for approval.</p>
		@endforelse
		{{ $comments->links() }}
	</div>
</x-main>