@props(['enquiries'])

<table class="table">
    <thead class="table-dark">
       <tr>
           <th>id</th>
           <th>name</th>
           <th>email</th>
           <th>phone</th>
           <th>message</th>
           <th>proprety title</th>
           <th>manage</th>
       </tr>
    </thead>
    <tbody>
      @foreach ($enquiries as $enquiry)
      <tr>    
          <td>{{$enquiry->id}}</td>
          <td>{{$enquiry->name}}</td>
          <td>{{$enquiry->email}}</td>
          <td>{{$enquiry->phone}}</td>
          <td>{{$enquiry->message}}</td>
          <td>{{$enquiry->proprety->title}}</td>
          <td class="text-center"><a href="{{route('inquiries.delete',['id' => $enquiry->id])}}"><i class="fas fa-trash"></i></a></td>
          
      </tr>   
      @endforeach
    </tbody>
  </table>
