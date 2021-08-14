@props(['cities'])

@if ($message = Session::get('message'))

<div class="alert alert-success" role="alert">
    <strong>{{ $message }}</strong>
</div>

@endif
     <div class="p-3">
        <button class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="far fa-plus-square"></i>
        </button>
     </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add City</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action={{route('city.add')}} method='post'>
                  @csrf
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Name:</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-secondary">Validate</button>
                </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>


<table class="table">
    <thead class="table-dark">
       <tr>
           <th>id</th>
           <th>name</th>
           <th>manage</th>
       </tr>
    </thead>
    <tbody>
      @foreach ($cities as $city)
      <tr>    
          <td>{{$city->id}}</td>
          <td>{{$city->name}}</td>
          <td>
            <a href="{{route('city.delete',['id' => $city->id])}}"><i class="fas fa-trash"></i></a>
            <a href="{{route('city.edit',['id' => $city->id])}}" class="btn btn-primary">
            <i class="fas fa-edit"></i></a>
          </td>
      </tr>   
      @endforeach
    </tbody>
  </table>
