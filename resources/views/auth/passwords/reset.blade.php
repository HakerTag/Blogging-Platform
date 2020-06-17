<x-main>
    <div class="w-5/6 lg:w-1/2 mx-auto pt-8">
        <h2 class="bg-blue-700 text-center py-2 text-white">Reset Password</h2>

        <form class="border-2 text-sm md:text-base py-4 px-4 lg:px-16" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="flex items-center my-4">
                <label class="w-1/3" for="email">E-Mail Address:</label>
                <input class="w-2/3 border-2 py-1 px-1 @error('email') border-red-600 @enderror" type="email" name="email" id="email" value="{{ $email ?? old('email') }}" autocomplete="email" required>
            </div>
            @error('email')
                <div class="flex items-center my-4">
                    <div class="w-1/3"></div>
                    <p class="w-2/3 text-red-600 font-semibold">{{ $errors->first('email') }}</p>
                </div>
            @enderror

            <div class="flex items-center my-4">
                <label class="w-1/3" for="password">Password:</label>
                <input class="w-2/3 border-2 py-1 px-1 @error('email') border-red-600 @enderror" type="password" name="password" id="password" value="{{ old('password') }}" autocomplete="new-password" required>
            </div>
            @error('password')
                <div class="flex items-center my-4">
                    <div class="w-1/3"></div>
                    <p class="w-2/3 text-red-600 font-semibold">{{ $errors->first('password') }}</p>
                </div>
            @enderror

            <div class="flex items-center my-4">
                <label class="w-1/3" for="password-confirm">Confirm Password:</label>
                <input class="w-2/3 border-2 py-1 px-1 @error('email') border-red-600 @enderror" type="password" name="password_confirmation" id="password-confirm" value="{{ old('password') }}" autocomplete="new-password" required>
            </div>

            <div class="flex items-center justify-center my-4">
                <div class="w-1/3"></div>
                <div class="w-2/3">
                    <button class="bg-blue-700 px-8 py-2 text-sm text-white rounded hover:bg-blue-800" type="submit">Reset Password</button>
                </div>
            </div>
        </form>
    </div>
</x-main>