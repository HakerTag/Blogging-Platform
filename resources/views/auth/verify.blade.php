<x-main>
    <div class="w-5/6 lg:w-1/2 mx-auto pt-8">
        @if (session('resent'))
            <div class="bg-green-500 mx-8 mb-4 py-2 rounded-lg text-center text-white ">
                <p>A fresh verification link has been sent to your email address.</p>
            </div>
        @endif

        <h2 class="bg-blue-700 text-center py-2 text-white">Verify Your Email Address</h2>

        <form class="border-2 py-4 px-4 lg:px-8" method="POST" action="{{ route('verification.resend') }}">
            <label>Before proceeding, please check your email for a verification link. If you did not receive the email, </label>
            @csrf        
            
            <button class="text-blue-500 hover:underline" type="submit">click here to request another.</button>
        </form>
    </div>
</x-main>