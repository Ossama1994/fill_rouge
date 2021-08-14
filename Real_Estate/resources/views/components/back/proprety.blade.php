@props(['propreties'])
     <div class="p-3">
        <button class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="far fa-plus-square"></i>
        </button>
     </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog row">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add City</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{route('proprety.add')}}" method="post">
                  @csrf
                  <div class="mb-3 col">
                    <label class="form-label">title :</label>
                    <input type="text" name="title" class="form-control">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">title :</label>
                    <input type="hidden" name="proprety_type_id" class="form-control" value="5">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">Purpose :</label>
                    <input type="text" name="Purpose" class="form-control">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">Slug :</label>
                    <input type="text" name="slug" class="form-control">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">Bathrooms :</label>
                    <input type="text" name="bathrooms" class="form-control">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">Bedrooms :</label>
                    <input type="text" name="bedrooms" class="form-control">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">Area :</label>
                    <input type="text" name="area" class="form-control">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">Description :</label>
                    <input type="text" name="description" class="form-control">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">sale price :</label>
                    <input type="text" name="sale_price" class="form-control">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">Rent price :</label>
                    <input type="text" name="rent_price" class="form-control">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">Adress :</label>
                    <input type="text" name="adress" class="form-control">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">status :</label>
                    <input type="text" name="status" class="form-control">
                  </div>
                  <div class="mb-3 col">
                    <label class="form-label">Proprety_image :</label>
                    <input type="text" name="proprety_image" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Add</button>
                </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>


<table class="table  table-sm" style="width:100%;">
    <thead class="table-dark">
       <tr>
           <th>id</th>
           <th>title</th>
           <th>adress</th>
           <th>status</th>
           <th>User</th>
           <th>PropretyType</th>
           <th>Manage</th>
       </tr>
    </thead>
    <tbody>
      @foreach ($propreties as $proprety)
      <tr>    
          <td>{{$proprety->id}}</td>
          <td>{{$proprety->title}}</td>
          <td>{{$proprety->adress}}</td>
          <td>{{$proprety->status}}</td>
          <td>{{$proprety->user->name}}</td>
          <td>{{$proprety->PropretyType->title}}</td>
          <td>
            <a href="{{route('proprety.delete',['id' => $proprety->id])}}"><i class="fas fa-trash"></i></a>
            <a href="{{route('proprety.edit',['id' => $proprety->id])}}" class="btn btn-primary">
            <i class="fas fa-edit"></i></a>
          </td>
                     
      </tr>   
      @endforeach
    </tbody>
  </table>