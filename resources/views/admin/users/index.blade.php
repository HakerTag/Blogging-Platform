<x-admin>
	@if (session('userDeleted'))
		<p class="w-5/6 lg:w-2/3 mx-auto text-white text-center p-2 rounded-lg bg-green-600">
			{{ session('userDeleted') }}
		</p>
    @endif
	<table class="w-full border mt-4 text-sm md:text-base">
		<caption class="font-bold text-2xl py-2">Users</caption>
		<thead>
			<th class="w-2/12 border py-2">Name</th>
			<th class="w-2/12 border py-2">Email</th>
			<th class="w-2/12 border py-2">Created At</th>
			<th class="w-2/12 hidden lg:table-cell border py-2">Updated At</th>
			<th class="w-3/12 hidden lg:table-cell border py-2">Last Post</th>
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
								{{ Str::limit($user->posts->last()->title, 30, '...') }}
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
	{{ $users->links() }}
</x-admin>