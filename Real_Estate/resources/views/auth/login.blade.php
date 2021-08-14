@extends('front.index')
@section('main')
<div class="shadow bg-light col-lg-6 container m-auto p-5 rounded-3 text-dark">
     
          <!-- Session Status -->
          <x-auth.session-status :status="session('status')" />

          <!-- Validation Errors -->
          <x-auth.validation-errors :errors="$errors" />

          <h3 class="">@lang('Login')</h3>
          <form class="" method="POST" action="{{ route('login') }}">
              @csrf                

              <!-- Email Address -->
              <x-auth.input-email />

              <!-- Password -->
              <x-auth.input-password />

              <!-- Remember Me -->
              <label class="mt-4">
                  <input 
                      id="remember_me" 
                      type="checkbox" 
                      name="remember_me" 
                      {{ old('remember_me') ? 'checked' : '' }}> 
                  <span class="label-text">@lang('Remember me')</span>
              </label>

              <x-auth.submit title="Login" />
              
              <label>
                <a href="{{ route('password.request') }}" class="text-dark mr-1">
                    @lang('Forgot Your Password?')
                    
                </a>                  
                <a href="{{ route('register') }}" style="float: right;" class="text-dark">
                    @lang('Not registered?')
                </a>
              </label>

          </form>
      
  </div>
@endsection