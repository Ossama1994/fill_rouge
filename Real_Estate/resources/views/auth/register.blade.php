@extends('front.index')
@section('main')
<div class="shadow bg-light col-lg-6 container m-auto p-5 rounded-3 text-dark">

            <!-- Validation Errors -->
            <x-auth.validation-errors :errors="$errors" />

            <h3 class="">@lang('Register')</h3>
            <form class="" method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Name -->
                <div class="d-flex flex-column">
                  <label for="name" class="mb-1">@lang('Name')</label>  
                  <input 
                      id="name" 
                      class="" 
                      type="text" 
                      name="name" 
                      placeholder="@lang('Your name')" 
                      value="{{ old('name') }}" 
                      required 
                      autofocus>
                </div>

                <!-- Email Address -->
                <x-auth.input-email />

                <!-- Password -->
                <x-auth.input-password />
                <!-- role -->
                <x-auth.input-role />

                <!-- Confirm Password -->
                <div class="d-flex flex-column mb-2">
                  <label for="password_confirmation" class="mb-1">@lang('Confirm Password')</label> 
                  <input 
                      id="password_confirmation" 
                      class="" 
                      type="password" 
                      name="password_confirmation" 
                      placeholder="@lang('Confirm your Password')" 
                      required>
                </div>                

                <x-auth.submit title="Register" />
                
            </form>
 
    </div>

@endsection
