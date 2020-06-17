<x-main>
	<div class="pb-8">
		@if (session('profileUpdated'))
			<p class="w-5/6 lg:w-2/3 mx-auto text-white text-center p-2 rounded-lg bg-green-600">
				{{ session('profileUpdated') }}
			</p>
	    @endif
	    @if (session('postInserted'))
			<p class="w-5/6 lg:w-2/3 mx-auto text-white text-center p-2 rounded-lg bg-green-600">
				{{ session('postInserted') }}
			</p>
	    @endif
	    @if (session('postUpdated'))
			<p class="w-5/6 lg:w-2/3 mx-auto text-white text-center p-2 rounded-lg bg-green-600">
				{{ session('postUpdated') }}
			</p>
	    @endif
	    @if (session('postDeleted'))
			<p class="w-5/6 lg:w-2/3 mx-auto text-white text-center p-2 rounded-lg bg-green-600">
				{{ session('postDeleted') }}
			</p>
	    @endif
	    <div class="w-full flex justify-center md:justify-start my-4 px-6 text-sm md:text-base">
	    	<a class="mx-1 sm:mx-2 bg-blue-700 text-white py-2 px-2 sm:px-4 rounded hover:text-yellow-500 hover:shadow-lg" href="/posts/create"><i class="fas fa-newspaper"></i> Create new post</a>
	    	<a class="mx-1 sm:mx-2 bg-blue-700 text-white py-2 px-2 sm:px-4 rounded hover:text-yellow-500 hover:shadow-lg" href="/comments/approve"><i class="fas fa-comments"></i> Approve comments</a>
	    </div>
		<table class="w-5/6 md:w-1/2 mx-auto md:mx-8 table-auto">
			<caption class="text-center text-xl font-bold py-2">Users Informations</caption>
			<tr class="bg-gray-200 border-2">
				<td class="border-2 font-semibold px-4">Name</td>
				<td class="border-2 px-4">{{ auth()->user()->name }}</td>
			</tr>
			<tr class="bg-gray-100 border-2">
				<td class="border-2 font-semibold px-4">Email</td>
				<td class="border-2 px-4">{{ auth()->user()->email }}</td>
			</tr>
			<tr class="bg-gray-200 border-2">
				<td class="border-2 font-semibold px-4">Created At</td>
				<td class="border-2 px-4">{{ auth()->user()->created_at->toFormattedDateString() }}</td>
			</tr>
			<tr class="bg-gray-100 border-2">
				<td class="border-2 font-semibold px-4">Last Updated At</td>
				<td class="border-2 px-4">{{ auth()->user()->updated_at->toFormattedDateString() }}</td>
			</tr>
			<tr>
				<td></td>
				<td class="text-right py-6">
					<a class="bg-yellow-500 py-1 px-4 rounded mt-4 hover:bg-yellow-600 hover:shadow-xl" href="/users/{{ auth()->user()->name }}/edit"><i class="fas fa-user-edit"></i> Edit</a>
				</td>
			</tr>
		</table>

		<table class="w-11/12 mx-auto table-auto px-4 text-center text-sm md:text-base">
			<caption class="text-center text-xl font-bold py-2">Users Posts</caption>
			<thead class="border">
				<th class="w-1/12 border">Category</th>
				<th class="w-3/12 border">Title</th>
				<th class="w-1/12 hidden md:table-cell border">Likes</th>
				<th class="w-1/12 hidden md:table-cell border">Dislikes</th>
				<th class="w-1/12 hidden lg:table-cell border">Image</th>
				<th class="w-1/12 border">Created At</th>
				<th class="w-1/12 hidden lg:table-cell border">Updated At</th>
				<th class="w-1/12 border">Edit</th>
			</thead>
			<tbody>
				@forelse(auth()->user()->posts->sortDesc() as $post)
				<tr>
					<td class="w-1/12 border py-2">
						<a class="text-blue-700 hover:underline" href="/category/{{ $post->category->name }}"> 
							{{ $post->category->name }}
						</a>
					</td>
					<td class="w-2/12 border py-2">
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
					<td class="w-1/12 border py-2 hidden lg:table-cell">
						<a class="hover:underline" href="/posts/{{ $post->id }}">
							<img class="w-16 mx-auto" src="{{ asset($post->image_url) }}">
						</a>
					</td>
					<td class="w-1/12 border py-2">
						<a class="hover:underline" href="/posts/{{ $post->id }}">
							{{ $post->created_at->toFormattedDateString() }}
						</a>
					</td>
					<td class="w-1/12 border py-2 hidden lg:table-cell">
						<a class="hover:underline" href="/posts/{{ $post->id }}">
							{{ $post->updated_at->toFormattedDateString() }}
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
						<td class="w-full border py-2" colspan="9">There is no posts from this user</td>
					</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</x-main>