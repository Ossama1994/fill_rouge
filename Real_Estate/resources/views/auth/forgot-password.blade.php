@extends('front.index')

@section('main')
    <div class="">
        <div class="">

            <!-- Session Status -->
            <x-auth.session-status :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth.validation-errors :errors="$errors" />

            <p class="">@lang('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.')</p>
            <form class="mb-2" method="POST" action="{{ route('password.email') }}">
                @csrf                

                <!-- Email Address -->
                <x-auth.input-email />

                <x-auth.submit title="Email Password Reset" />
               
            </form>
        </div>
    </div>

@endsection