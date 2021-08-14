@extends('front.index')
@section('proprety')
<div class="container bg-light rounded mt-2">
  <div class="row">
        <div class="col-md-6 p-2">
            <div class="row cols-1">
                <div class="advenced_research">
                    <h1>
                        More details :
                    </h1>
                </div>
                <div class="row p-lg-3">
                  <div class="col-lg-6 col-md-6  pb-2">
                     <i class="fas fa-bed">
                         {{$proprety->bedrooms}}
                     </i>
                  </div>
                  <div class="col-lg-6 col-md-6 pb-2">
                    <i class="fas fa-chart-area">
                      {{$proprety->area}} m<sup>2</sup>
                    </i>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <i class="fas fa-bath">
                      {{$proprety->bathrooms}}
                    </i>
                  </div>
                  <div class="col-lg-6">
                    <p>
                      <span>Sale Price :</span>
                      {{$proprety->sale_price}}$
                    </p>  
                  </div>
                  <div class="col-lg-6">
                    <p>
                      <span>Rent Price :</span>
                      {{$proprety->rent_price}}$
                    </p>  
                  </div>
                  <div class="col-lg-6">
                    <p>
                      <span>Adress :</span>
                      {{$proprety->adress}}
                    </p> 
                  </div>
                  <div class="col-lg-12">
                    <p>
                      <span>Purpose :</span>
                      {{$proprety->Purpose}}
                    </p> 
                  </div>
                  <div class="col-lg-12">
                    <p>
                      <span>Description</span>
                      {{$proprety->description}}.
                    </p> 
                  </div>
                  <div class="col-lg-12">
                    <p>
                      <span>Agent Email :</span>
                      {{$proprety->user->email}}.
                    </p> 
                  </div>
                  <div class="col-lg-12">
                    <p>
                      <span>Category :</span>
                      {{$proprety->PropretyType->title}}.
                    </p> 
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-2 ">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Proprety</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                </li>
              </ul>
              <div class="tab-content row-cols-1" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                   
                        <div class="card">
                          <img src="{{ asset('/images/'.$proprety->proprety_image) }}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$proprety->title}}</h5>
                            <p class="card-text">{{$proprety->description}}</p>
                          </div>
                        </div>
                      
                </div>
                <div class="tab-pane fade p-5" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <form action="{{route('enquiry') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="full name" class="form-label">Full name :</label>
                        <input type="text" class="form-control" name="name" placeholder="Jhon wick" value="">
                    </div>
                    <div class="mb-3">
                        <input type="hidden" class="form-control" name="proprety_id" value="{{$proprety->id}}">
                    </div>
                        <input type="hidden" class="form-control">
                        <input type="hidden" class="form-control">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address :</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="Phone" class="form-label">Phone :</label>
                        <input type="text" class="form-control custome" name="phone" placeholder="+212607576763">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your message</label>
                        <textarea class="form-control" name="message" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn button-send" value="Send inquiry">
                    </div>
                  </form>
                </div>
              </div>
       </div>
   </div>
</div>

@endsection