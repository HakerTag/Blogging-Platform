<x-main>
	<h1 class="text-center text-xl font-bold my-8">Edit profile informations</h1>
	<div class="w-5/6 lg:w-1/2 mx-auto flex flex-col items-center bg-gray-200 border-2 rounded-lg border-blue-700 my-4 shadow-lg">
		<form class="flex flex-col items-center w-full py-8 text-sm md:text-base" method="POST" action="/users/{{ $user->name }}/update">
			@csrf
			@method('PUT')

			<div class="w-full flex justify-center items-center my-2">
				<label class="w-1/4 font-bold" for="name">Name:</label>
				<div class="w-2/4">
					<input class="w-full border py-1 px-1 rounded shadow @error('name') border-red-600 @enderror" id="name" type="text" name="name" value="{{ old('name') ?? $user->name }}" required>
					@error('name')
						<p class="text-red-600 font-semibold">{{ $errors->first('name') }}</p>
		            @enderror
				</div>
			</div>
			<div class="w-full flex justify-center items-center my-2">
				<label class="w-1/4 font-bold" for="email">E-mail Address:</label>
				<div class="w-2/4">
					<input class="w-full border py-1 px-1 rounded shadow @error('email') border-red-600 @enderror" id="email" type="email" name="email" value="{{ old('email') ??  $user->email }}" required>
					@error('email')
						<p class="text-red-600 font-semibold">{{ $errors->first('email') }}</p>
		            @enderror
				</div>
			</div>
			<div class="w-full flex justify-center items-center my-2">
				<label class="w-1/4 font-bold" for="password">Password:</label>
				<div class="w-2/4">
					<input class="w-full border py-1 px-1 rounded shadow @error('password') border-red-600 @enderror" id="password" type="password" name="password" value="{{ $user->password }}" required>
					@error('password')
						<p class="text-red-600 font-semibold">{{ $errors->first('password') }}</p>
		            @enderror
				</div>
			</div>
			<div class="w-full flex justify-center items-center my-2">
				<label class="w-1/4 font-bold" for="password_confirmation">Password Confirm:</label>
				<input class="w-2/4 border py-1 px-1 rounded shadow @error('password') border-red-600 @enderror" id="password_confirmation" type="password" name="password_confirmation" value="{{ $user->password }}" required>
			</div>
			<div class="w-full flex justify-center items-center my-2">
				<div class="w-1/4"></div>
				<div class="w-2/4 flex justify-end">
					<button class="py-1 px-2 md:px-4 mr-1 rounded text-white bg-green-600 hover:bg-green-700 hover:shadow-lg" type="submit"><i class="fas fa-save"></i> Update</button>
					<a class="py-1 px-2 md:px-4 ml-1 rounded text-white bg-red-700 hover:bg-red-800 hover:shadow-lg" href="/home"><i class="fas fa-ban"></i> Cancel</a>
				</div>
			</div>
		</form>

		<form class="w-full flex justify-center items-center m-12 text-sm md:text-base" method="POST" action="/users/{{ $user->name }}/delete">
			@csrf
			@method('DELETE')

			<div class="w-1/4"></div>
			<div class="w-2/4 flex justify-end">
				<button class="py-1 px-2 md:px-4 rounded text-white bg-red-700 hover:bg-red-800 hover:shadow-lg" type="submit"><i class="fas fa-trash-alt"></i> Delete Account</button>
			</div>
		</form>
	</div>
</x-main>