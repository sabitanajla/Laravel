@extends('template/main')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/dapur.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/dapur.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/dapur.jpg" class="d-block w-100" alt="...">
    </div>
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
@endsection

@section('content2')
<div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/kitchenaid.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">PRODUK</h5>
        <p class="card-text"><b>Kitchenaid</b></p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/panci.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">PRODUK</h5>
        <p class="card-text"><b>Panci.</b></p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/dpr6.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">PRODUK</h5>
        <p class="card-text"><b>Westafel</b></p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/dpr5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PRODUK</h5>
        <p class="card-text"><b>Tap Mixer Pull Out</b></p>
      </div>
    </a>
    </div>
  </div>
</div>
@endsection