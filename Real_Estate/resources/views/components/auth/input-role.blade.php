@props(['role' => ''])

<div class="d-flex flex-column">
  <label for="role" class="mb-1">@lang('role')</label>  
   <select name="role" id="role">
       <option value="Buyer">Buyer</option>
       <option value="Seller">Seller</option>
   </select>
</div>