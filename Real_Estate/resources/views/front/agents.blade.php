@extends('front.index')
@section('agent')
<section class="testimonial-section d-flex align-items-center">
    <div class="container">
          <div class="row row-cols-lg-6 text-center p-0 m-0">
            <div class="col col-lg-12">
              <h1 class="fs-1 font-bold">Agents</h1>
            </div>
          </div>
      <div class="row align-items-center">
        <div class="col-md-6 testi-img">
          <div class="img-box">
            <div class="img-box-inner">
              <img src="{{ asset('/images/img08.jpg') }}" alt="testi img">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="myCarousel" class="carousel slide" data-bs-interval="5000" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item testi-item active" data-color="#fb9c9a" data-img="{{ asset('/images/img08.jpg') }}">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis ratione, harum doloremque aspernatur aliquid quaerat dolores voluptates recusandae qui repellat illum, amet ipsa debitis fugiat commodi nemo suscipit ad!</p>
                <h3>john doe 1 - <span>web developer</span></h3>
              </div>
              <div class="carousel-item testi-item" data-color="#fbd39a" data-img="{{ asset('/images/img08.jpg') }}">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis ratione, harum doloremque aspernatur aliquid quaerat dolores voluptates recusandae qui repellat illum, amet ipsa debitis fugiat commodi nemo suscipit ad!</p>
                <h3>john doe 2 - <span>web developer</span></h3>
              </div>
              <div class="carousel-item testi-item" data-color="#9ab0fb" data-img="{{ asset('/images/img08.jpg') }}">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis ratione, harum doloremque aspernatur aliquid quaerat dolores voluptates recusandae qui repellat illum, amet ipsa debitis fugiat commodi nemo suscipit ad!</p>
                <h3>john doe 3 - <span>web developer</span></h3>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <img src="{{ asset('/images/left-arrow.png') }}" alt="prev">
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <img src="{{ asset('/images/right-arrow.png') }}" alt="prev">
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection