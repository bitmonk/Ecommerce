@extends('Frontend.app')
@section('frontend')
<section>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($carousel as $carousels )
        <div class="carousel-item active">
            <img src="{{asset($carousels->carousel_image)}}" c class="d-block w-100" alt="...">
          </div>
        @endforeach
    {{-- <div class="carousel-item active">
        <img src="..." class="d-block w-100" alt="...">
      </div> 
    <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>  --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<div class="row justify-content-around">
  <div class="col sm-6 d-flex p-3">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuYWEqe1RIH3vSyfP6_aXwp6WIOtxOPhXEXJmlolJjlg&s" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Washing Machine</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Add to cart</a>
      </div>
    </div>
  </div>
  <div class="col sm-6 d-flex p-3">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuYWEqe1RIH3vSyfP6_aXwp6WIOtxOPhXEXJmlolJjlg&s" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Washing Machine</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita temporibus animi ex maiores, ipsam natus aspernatur harum facilis minus porro inventore saepe adipisci ratione voluptates consectetur voluptate </p>
        <a href="#" class="btn btn-primary">Add to cart</a>
      </div>
    </div>
  </div>
  <div class="col sm-6 d-flex p-3">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuYWEqe1RIH3vSyfP6_aXwp6WIOtxOPhXEXJmlolJjlg&s" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Washing Machine</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Add to cart</a>
      </div>
    </div>
  </div>
  <div class="col sm-6 d-flex p-3">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuYWEqe1RIH3vSyfP6_aXwp6WIOtxOPhXEXJmlolJjlg&s" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Washing Machine</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Add to cart</a>
      </div>
    </div>
  </div>
  <div class="col sm-6 d-flex p-3">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuYWEqe1RIH3vSyfP6_aXwp6WIOtxOPhXEXJmlolJjlg&s" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Washing Machine</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Add to cart</a>
      </div>
    </div>
  </div>
</div>


@endsection
