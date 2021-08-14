@extends('back.index')

@section('main')
<form action="{{route('proprety.update',['id' => $proprety->id])}}" method="post" class="row">
    @csrf
    <div class="mb-3 col-md-4">
      <label class="form-label">title :</label>
      <input type="text" name="title" class="form-control" value="{{$proprety->title}}">
    </div>
    <div class="mb-3 col-md-4">
      <label class="form-label">Purpose :</label>
      <input type="text" name="Purpose" class="form-control" value="{{$proprety->Purpose}}">
    </div>
    <div class="mb-3 col-md-4">
      <label class="form-label">Bathrooms :</label>
      <input type="text" name="bathrooms" class="form-control" value="{{$proprety->bathrooms}}">
    </div>
    <div class="mb-3 col-md-8">
      <label class="form-label">Area :</label>
      <input type="text" name="description" class="form-control" value="{{$proprety->description}}">
    </div>
    <div class="mb-3 col-md-4">
      <label class="form-label">sale price :</label>
      <input type="text" name="sale_price" class="form-control" value="{{$proprety->sale_price}}">
    </div>
    <div class="mb-3 col-md-4">
      <label class="form-label">Rent price :</label>
      <input type="text" name="rent_price" class="form-control" value="{{$proprety->rent_price}}">
    </div>
    <div class="mb-3 col-md-4">
      <label class="form-label">Adress :</label>
      <input type="text" name="adress" class="form-control" value="{{$proprety->adress}}">
    </div>
    <div class="mb-3 col-md-4">
      <label class="form-label">Proprety name :</label>
      <input type="text" name="status" class="form-control" value="{{$proprety->status}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection