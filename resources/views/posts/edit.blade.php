<x-main>
	<h1 class="text-2xl text-center font-bold mt-8">Edit Post</h1>

	<div class="w-full px-8 md:px-24 py-4">
		<form class="" method="POST" action="/posts/{{ $post->id }}/update" enctype="multipart/form-data">
			@csrf
			@method('PUT')

			<div class="my-4">
				<label for="title">Title:</label>
				<input class="w-full py-1 px-2 my-1 border-2 rounded @error('title') border-red-600 @enderror" type="text" name="title" id="title" value="{{ old('title') ?? $post->title }}" required>
				@error('title')
					<p class="text-red-600 font-semibold">{{ $errors->first('title') }}</p>
	            @enderror
	        </div>
			
			<div class="my-4">
				<label for="body">Text:</label>
				<div class="my-1 @error('body') border-2 border-red-600 @enderror">
					<textarea name="body" id="body" rows="15">{{ old('body') ?? $post->body }}</textarea>
				</div>
				@error('body')
					<p class="text-red-600 font-semibold">{{ $errors->first('body') }}</p>
	            @enderror
			</div>

			<div class="my-4">
				<label for="category">Category:</label>
				<select class="w-full py-1 px-2 my-1 border-2 rounded @error('category') border-red-600 @enderror" name="category" id="category" required>
					<option></option>
					<option value="1" @if($post->category_id == 1) selected @endif>Business</option>
			        <option value="2" @if($post->category_id == 2) selected @endif>Sport</option>
			        <option value="3" @if($post->category_id == 3) selected @endif>Culture</option>
			        <option value="4" @if($post->category_id == 4) selected @endif>Politics</option>
			        <option value="5" @if($post->category_id == 5) selected @endif>Science</option>
			        <option value="6" @if($post->category_id == 6) selected @endif>Health</option>
			        <option value="7" @if($post->category_id == 7) selected @endif>Style</option>
			        <option value="8"@if($post->category_id == 8) selected @endif>Travel</option>
				</select>
				@error('category')
					<p class="text-red-600 font-semibold">{{ $errors->first('category') }}</p>
	            @enderror
	        </div>

	        <div class="my-4 ">    	
				<label for="image">Image:</label>
				<input class="m-1 mx-3 @error('image') border-2 border-red-600 @enderror" type="file" name="image" id="image">
				<img class="w-32 mx-16 my-2" src="{{ asset($post->image_url) }}">
				<p>*Image dimensions: MIN - 480x360 px, MAX - 1280x960 px</p>
				@error('image')
					<p class="text-red-600 font-semibold">{{ $errors->first('image') }}</p>
	            @enderror
	        </div>

			<div class="my-4 flex justify-end">
				<button class="px-6 py-1 mx-1 text-white bg-green-600 rounded hover:bg-green-700 hover:shadow-lg" type="submit"><i class="fas fa-save"></i> Update</button>
				<a class="px-6 py-1 mx-1 text-white bg-red-600 rounded hover:bg-red-700 hover:shadow-lg" href="/home"><i class="fas fa-ban"></i> Cancel</a>
			</div>
		</form>

		<form class="flex justify-end my-12" method="POST" action="/posts/{{ $post->id }}/delete">
			@csrf
			@method('DELETE')
			<button class="px-6 py-1 mx-1 text-white bg-red-600 rounded hover:bg-red-700 hover:shadow-lg" type="submit"><i class="fas fa-trash-alt"></i> Delete Post</button>
		</form>
	</div>

	<script type="text/javascript" src="/js/textEditor.js"></script>
</x-main>