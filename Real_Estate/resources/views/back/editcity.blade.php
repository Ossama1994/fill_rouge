@extends('back.index')

@section('main')
<form action="{{route('city.update',['id' => $cities->id])}}" method="post">
    @csrf
    <div class="mb-3">
      <label class="form-label">City id :</label>
      <input type="text" name="id" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">City name :</label>
      <input type="text" name="name" class="form-control" value="{{$cities->name}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection