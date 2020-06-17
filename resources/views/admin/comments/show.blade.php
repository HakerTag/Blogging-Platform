<x-admin>
	<h1 class="text-center text-2xl font-bold">Comment</h1>
	<div class="border my-4 p-4">
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
		<div class="flex justify-end mt-6">
			<form method="POST" action="/comments/{{ $comment->id }}/delete">
				@csrf
				@method('DELETE')
				<button class="text-white text-sm bg-red-600 px-4 py-2 mx-2 rounded hover:bg-red-700 hover:shadow-lg" type="submit"><i class="fas fa-trash-alt"></i> Delete Comment</button>
			</form>
		</div>
	</div>
</x-admin>