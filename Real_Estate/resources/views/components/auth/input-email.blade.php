@props(['email' => ''])

<div class="d-flex flex-column">
  <label for="email" class="mb-1">@lang('Email')</label>  
  <input 
      id="email" 
      class="" 
      type="email" 
      name="email" 
      placeholder="@lang('Your email')" 
      value="{{ old('email', $email) }}" 
      required 
      autofocus>
</div>