<x-main>
    <div class="w-5/6 lg:w-1/2 mx-auto pt-8">
        
        @if (session('status'))
            <div class="bg-green-500 mx-8 mb-4 py-2 rounded-lg text-center text-white ">
                <p>{{ session('status') }}</p>
            </div>
        @endif


        <h2 class="bg-blue-700 text-center py-2 text-white">Reset Password</h2>

        <form class="border-2 text-sm md:text-base py-8 px-4 lg:px-16" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="flex items-center">
                <label class="w-1/3" for="email">E-Mail Address:</label>
                <input class="w-2/3 border-2 py-1 px-1 @error('email') border-red-600 @enderror" type="email" name="email" id="email" value="{{ old('email') }}" autocomplete="email" required>
            </div>

            @error('email')
                <div class="flex items-center">
                    <div class="w-1/3"></div>
                    <p class="w-2/3 text-red-600 font-semibold">{{ $errors->first('email') }}</p>
                </div>
            @enderror

            <div class="flex items-center justify-center my-4">
                <div class="w-1/3"></div>
                <div class="w-2/3">
                    <button class="bg-blue-700 px-6 py-2 text-sm text-white rounded hover:bg-blue-800" type="submit">Send Password Reset Link</button>
                </div>
            </div>

        </form>
    </div>
</x-main>
