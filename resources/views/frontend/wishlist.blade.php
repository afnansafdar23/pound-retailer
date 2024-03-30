@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 contact-banner">
            <h1 data-aos="fade-left" data-aos-duration="1000">Wish List</h1>
            <h5 class="text-white" data-aos="fade-right" data-aos-duration="1000"><a href="{{Route('web.index')}}">Home</a> > Wishlist</h5>
        </div>
    </div>
</div>

<!-- START:: Wish list -->
<section class="container-fluid my-3">

    <div class="row px-3">
      <div class="col-md-6 border d-flex align-items-center py-1">

          <div class="cross mr-3">
            <a href="#"><i class="fa-solid fa-xmark"></i></a>
          </div>

          <div class="mr-3">
            <img src="{{asset('assets/media/stock/ecommerce/1.gif')}}" width="120px" height="120px" alt="wish_product">
          </div>

          <div>
            <h5>Product Name</h5>
            <h5>£200</h5>
            <p>December 5, 2023</p>
          </div>

      </div>
      <div class="col-md-6 border pt-3">
          <p>In Stock</p>
          <button type="submit" value="submit" class="btn btn-primary mb-3">Buy Product</button>
      </div>
  </div>
  </section>
  <!-- START:: Wish list -->
  <div class="container-fluid">
    <a href="{{route('web.prod.by.brands')}}" style="text-decoration:none; color:black; cursor: pointer;"><- Back </a>
  </div>

@endsection
