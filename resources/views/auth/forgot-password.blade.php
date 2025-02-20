<x-guest-layout>
    <div  >
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="forget-form" method="POST" action="{{ route('password.email') }}" >
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" placeholder="Email" name="email"
                :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4 form-group btn-container">
            <x-primary-button>
                <i class="fa fa-unlock fa-lg fa-fw"></i> {{ __(' RESET') }}
            </x-primary-button>
        </div>
        <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="{{route('login')}}" data-toggle="flip">
                <i class="fa fa-angle-left fa-fw"></i>
                    Back to Login</a></p>
        </div>
    </form>
</x-guest-layout>
