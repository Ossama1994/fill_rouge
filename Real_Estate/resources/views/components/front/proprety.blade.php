@props(['proprety'])

<div class="col p-2">
    <div class="card">
      <img src="{{ asset('/images/'.$proprety->proprety_image) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('singleproprety',['id' => $proprety->id])}}" class="nav-link">{{$proprety->title}}</a></h5>
        <p class="card-text">{{$proprety->description}}</p>
      </div>
    </div>
  </div>