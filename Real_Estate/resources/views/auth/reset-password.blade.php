@extends('front.index')

@section('main')
    <div class="">
        <div class="">

            <!-- Validation Errors -->
            <x-auth.validation-errors :errors="$errors" />

            <h3 class="">@lang('Password reset')</h3>
            <form class="" method="POST" action="{{ route('password.update') }}">
                @csrf
                
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <x-auth.input-email :email="$request->email" />

                <!-- Password -->
                <x-auth.input-password />

                <!-- Confirm Password -->
                <div>
                  <label for="password_confirmation">@lang('Confirm Password')</label> 
                  <input 
                      id="password_confirmation" 
                      class="" 
                      type="password" 
                      name="password_confirmation" 
                      placeholder="@lang('Confirm your Password')" 
                      required>
                </div>
                
                <x-auth.submit title="Reset Password" />
               
            </form>
        </div>
    </div>

@endsection
