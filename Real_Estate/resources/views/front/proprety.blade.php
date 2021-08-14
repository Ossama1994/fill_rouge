@extends('front.index')
@section('proprety')

@isset($propreties)
<div class="cards container mt-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

      @foreach ($propreties as $proprety)

      <x-front.proprety :proprety="$proprety"  />
      
      @endforeach
  </div>
</div>

@endisset

@endsection