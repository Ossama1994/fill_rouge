@extends('back.index')

@section('main')

<div class="card text-white bg-primary mb-3 m-2" style="max-width: 18rem;">
    <div class="card-header">Users</div>
    <div class="card-body">
        <h5 class="card-title">{{ $users }}</h5>
        <p class="card-text"></p>
    </div>
</div>
<div class="card text-white bg-success mb-3 m-2" style="max-width: 18rem;">
    <div class="card-header">Propreties</div>
    <div class="card-body">
        <h5 class="card-title">{{ $propreties }}</h5>
        <p class="card-text"></p>
    </div>
</div>
<div class="card text-white bg-danger mb-3 m-2" style="max-width: 18rem;">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <h5 class="card-title">{{$propretytype}}</h5>
        <p class="card-text"></p>
    </div>
</div>
<div class="card text-white bg-dark mb-3 m-2" style="max-width: 18rem;">
    <div class="card-header">Cities</div>
    <div class="card-body">
        <h5 class="card-title">{{ $cities }}</h5>
        <p class="card-text"></p>
    </div>
</div>   
@endsection