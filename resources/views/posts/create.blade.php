<x-main>
	<h1 class="text-2xl text-center font-bold mt-8">Create New Post</h1>

	<div class="w-full px-8 md:px-24 py-4">
		<form class="" method="POST" action="/posts/create" enctype="multipart/form-data">
			@csrf

			<div class="my-4">
				<label for="title">Title:</label>
				<input class="w-full py-1 px-2 my-1 border-2 rounded @error('title') border-red-600 @enderror" type="text" name="title" id="title" value="{{ old('title') }}" required>
				@error('title')
					<p class="text-red-600 font-semibold">{{ $errors->first('title') }}</p>
	            @enderror
	        </div>
			
			<div class="my-4">
				<label for="body">Text:</label>
				<div class="my-1 @error('body') border-2 border-red-600 @enderror">
					<textarea name="body" id="body" rows="15">{{ old('body') }}</textarea>
				</div>
				@error('body')
					<p class="text-red-600 font-semibold">{{ $errors->first('body') }}</p>
	            @enderror
			</div>

			<div class="my-4">
				<label for="category">Category:</label>
				<select class="w-full py-1 px-2 my-1 border-2 rounded @error('category') border-red-600 @enderror" name="category" id="category" required>
					<option></option>
					<option @if(old('category') == 1) selected @endif value="1">Business</option>
			        <option @if(old('category') == 2) selected @endif value="2">Sport</option>
			        <option @if(old('category') == 3) selected @endif value="3">Culture</option>
			        <option @if(old('category') == 4) selected @endif value="4">Politics</option>
			        <option @if(old('category') == 5) selected @endif value="5">Science</option>
			        <option @if(old('category') == 6) selected @endif value="6">Health</option>
			        <option @if(old('category') == 7) selected @endif value="7">Style</option>
			        <option @if(old('category') == 8) selected @endif value="8">Travel</option>
				</select>
				@error('category')
					<p class="text-red-600 font-semibold">{{ $errors->first('category') }}</p>
	            @enderror
	        </div>

	        <div class="my-4 ">    	
				<label for="image">Image:</label>
				<input class="m-1 @error('image') border-2 border-red-600 @enderror" type="file" name="image" id="image" required>
				<p>*Image dimensions: MIN - 480x360 px, MAX - 1280x960 px</p>
				@error('image')
					<p class="text-red-600 font-semibold">{{ $errors->first('image') }}</p>
	            @enderror
	        </div>

			<div class="my-4 flex justify-end">
				<button class="px-6 py-1 mx-1 text-white bg-green-600 rounded hover:bg-green-700 hover:shadow-lg" type="submit"><i class="fas fa-save"></i> Save</button>
				<a class="px-6 py-1 mx-1 text-white bg-red-600 rounded hover:bg-red-700 hover:shadow-lg" type="submit" href="/home"><i class="fas fa-ban"></i> Cancel</a>
			</div>
		</form>
	</div>

	<script type="text/javascript" src="/js/textEditor.js"></script>
</x-main>