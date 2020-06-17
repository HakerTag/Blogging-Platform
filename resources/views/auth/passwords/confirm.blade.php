<x-main>
    <div class="w-5/6 lg:w-1/2 mx-auto pt-8">
        <h2 class="bg-blue-700 text-center py-2 text-white">Confirm Password</h2>
        <form class="border-2 pb-2 text-sm md:text-base px-4 lg:px-16" method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <p class="my-4 text-center">Please confirm your password before continuing.</p>
            <div class="flex items-center">
                <label class="w-1/3" for="password">Password:</label>
                <input class="w-2/3 border-2 py-1 px-1 @error('password') border-red-600 @enderror" type="password" name="password" id="password" value="{{ old('password') }}" autocomplete="password" required>
            </div>

            @error('password')
                <div class="flex items-center">
                    <div class="w-1/3"></div>
                    <p class="w-2/3 text-red-600 font-semibold">{{ $errors->first('password') }}</p>
                </div>
            @enderror

            <div class="flex items-center justify-center my-4">
                <div class="w-1/3"></div>
                <div class="w-2/3">
                    <button class="bg-blue-700 px-8 py-2 text-sm text-white rounded hover:bg-blue-800" type="submit">Confirm Password</button>
                </div>
            </div>

            @if (Route::has('password.request'))
                <div class="flex">
                    <div class="w-1/3"></div>
                    <div class="w-2/3">
                            <a class="hover:text-blue-700" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                    </div>
                </div>
            @endif
        </form>
    </div>
</x-main>
