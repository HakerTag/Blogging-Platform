<x-main>
	<div class="flex justify-center md:justify-start md:mx-4 my-2">
		<a class="bg-yellow-500 px-4 py-1 mx-2 hover:bg-yellow-600 hover:shadow-lg border-2 border-blue-700 rounded" href="/admin/posts">Posts</a>
		<a class="bg-yellow-500 px-4 py-1 mx-2 hover:bg-yellow-600 hover:shadow-lg border-2 border-blue-700 rounded" href="/admin/comments">Comments</a>
		<a class="bg-yellow-500 px-4 py-1 mx-2 hover:bg-yellow-600 hover:shadow-lg border-2 border-blue-700 rounded" href="/admin/users">Users</a>
	</div>
	<div class="px-8 md:px-16 pb-16">
		{{ $slot }}
	</div>
</x-main>