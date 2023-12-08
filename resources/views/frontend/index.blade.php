@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<style>
    .fa-heart-o:hover {
  color: #E83316;
  transform: scale(1.1)
}

.owl-nav {
  top: -50px;
  right: -2px;
  bottom: 5px;
  display: flex;
  justify-content: right;
  position: absolute;

}
.owl-nav .owl-next, .owl-nav .owl-prev {
  width: 35px;

  height: 35px;
  padding: 0px;
  margin: 0px 2px;
  overflow: hidden;
  border-radius: 3px;
  position: relative;
  color: transparent;
  background: #ccc !important;
}
.owl-nav .owl-next:hover, .owl-nav .owl-prev:hover {
  background: #ffb207 !important;
}
.owl-dots {
  text-align: center;
}
.owl-dots .owl-dot {
  height: 10px;
  width: 10px;
  border-radius: 10px;
  background: #ccc !important;
  margin-left: 3px;
  margin-right: 3px;
  outline: none;
}
.owl-dots .owl-dot.active {
  background: #ffb207 !important;
}
</style>
<style>
        .product-grid{
    font-family: 'Roboto', sans-serif;
    text-align: center;
    transition: all 0.5s;
}
.product-grid:hover{ box-shadow: 0 5px 18px rgba(0, 0, 0, 0.3); }
.product-grid .product-image{
    position: relative;
    overflow: hidden;
}
.product-grid .product-image a.image{ display: block; }
.product-grid .product-image img{
    width: 100%;
    height: auto;
}
.product-image .pic-1{
    opacity: 1;
    backface-visibility: hidden;
    transition: all 0.5s;
}




.product-grid .product-sale-label{
    color: #fff;
    background: #6da84a;
    font-size: 14px;
    font-style: italic;
    text-transform: uppercase;
    width: 55px;
    height: 55px;
    line-height: 55px;
    border-radius: 50px;
    position: absolute;
    top: 10px;
    left: 10px;
}
.product-grid .social{
    padding: 0;
    margin: 0;
    list-style: none;
    position: absolute;
    top: 15px;
    right: 7px;
}
.product-grid .social li{
    transform: translateX(60px);
    transition: all 0.3s ease 0.3s;
}
.product-grid .social li:nth-child(2){ transition: all 0.3s ease 0.4s; }
.product-grid:hover .social li{ transform: translateX(0); }
.product-grid .social li a{
    color: #707070;
    background: #fff;
    font-size: 16px;
    line-height: 40px;
    width: 40px;
    height: 40px;
    margin: 0 0 7px;
    border-radius: 50px;
    display: block;
    transition: all 0.3s ease 0s;
}
.product-grid .social li a:hover{ color: #6DA84A; }
.product-grid .product-rating{
    background: rgba(255,255,255,0.95);

    padding: 10px;
    opacity: 0;
    position: absolute;
    bottom: -60px;
    left: 0;
    transition: all .2s ease-in-out 0s;
}
.product-grid:hover .product-rating{
    opacity: 1;
    bottom: 0;
}
.product-grid .rating{
    padding: 0;
    margin: 0;
    list-style: none;
    float: left;
}
.product-grid .rating li{
    color: #6DA84A;
    font-size: 13px;
}
.product-grid .rating li.far{ color: #999; }
.product-grid .add-to-cart{
    color: #6DA84A;
    font-size: 14px;
    font-weight: 600;
    border-bottom: 1px solid #6DA84A;
    float:right;
    transition: all .2s ease-in-out 0s;
}
.product-grid .add-to-cart:hover{
    color: #000;
    border-color: #000;
}
.product-grid .product-content{
    background: #F5F5F5;
    padding: 15px;
}
.product-grid .title{
    font-size: 18px;
    text-transform: capitalize;
    margin: 0 0 5px;
}
.product-grid .title a{
    color: #111;
    transition: all 500ms;
}
.product-grid .title a:hover{ color: #6DA84A; }
.product-grid .price{
    color: #707070;
    font-size: 17px;
    text-decoration: underline;
}
.product-grid .price span{
    text-decoration: line-through;
    margin-right: 5px;
    display: inline-block;
    opacity: 0.6;
}
@media only screen and (max-width:990px){
    .product-grid{ margin-bottom: 40px; }
}


</style>

<script>

</script>
@endsection
@section('content')

<section id="slider" class="mt-4"  >
    <div class="container" >

      <h2>Latest Products</h2>
      <div >
        <div class="owl-carousel owl-theam owl-carousel1" >
            <div class="col-md-12 col-sm-12 mb-2 ">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" style="height: 40vh" src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg">

                        </a>
                         <span class="product-sale-label">sale!</span>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                        </ul>
                        <div class="product-rating">
                            <ul class="rating">
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="far fa-star"></li>
                                <li class="far fa-star"></li>
                            </ul>
                            <a class="add-to-cart" href="#"> ADD TO CART </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Shirt</a></h3>
                        <div class="price"><span>$28.00</span>$20.00</div>
                    </div>
                </div>
            </div>
          <!-- Start Card -->
            <div class="col-md-12 col-sm-12 mb-2 ">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" style="height: 40vh" src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg">

                        </a>
                         <span class="product-sale-label">sale!</span>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                        </ul>
                        <div class="product-rating">
                            <ul class="rating">
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="far fa-star"></li>
                                <li class="far fa-star"></li>
                            </ul>
                            <a class="add-to-cart" href="#"> ADD TO CART </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Shirt</a></h3>
                        <div class="price"><span>$28.00</span>$20.00</div>
                    </div>
                </div>
            </div>

          <!-- Start Card -->
           <div class="col-md-12 col-sm-12 mb-2 ">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" style="height: 40vh" src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg">

                        </a>
                         <span class="product-sale-label">sale!</span>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                        </ul>
                        <div class="product-rating">
                            <ul class="rating">
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="far fa-star"></li>
                                <li class="far fa-star"></li>
                            </ul>
                            <a class="add-to-cart" href="#"> ADD TO CART </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Shirt</a></h3>
                        <div class="price"><span>$28.00</span>$20.00</div>
                    </div>
                </div>
            </div>
          <!-- Start Card -->
          <div class="col-md-12 col-sm-12 mb-2 ">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" style="height: 40vh" src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg">

                        </a>
                         <span class="product-sale-label">sale!</span>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                        </ul>
                        <div class="product-rating">
                            <ul class="rating">
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="far fa-star"></li>
                                <li class="far fa-star"></li>
                            </ul>
                            <a class="add-to-cart" href="#"> ADD TO CART </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Shirt</a></h3>
                        <div class="price"><span>$28.00</span>$20.00</div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      </div>
</section>


  {{-- Brand Section  --}}

<section id="slider" class="" >
    <div class="container" >

      <h2>Our Brands</h2>
      <div >
        <div class="owl-carousel owl-theam owl-carousel2" >
           <div class="card" style="width: 18rem;">
  <img src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
 </div>
          <!-- Start Card -->
           <div class="card" style="width: 18rem;">
  <img src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
 </div>

          <!-- Start Card -->
          <div class="card" style="width: 18rem;">
  <img src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
 </div>
          <!-- Start Card -->
         <div class="card" style="width: 18rem;">
  <img src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
 </div>
        </div>
      </div>
    </div>
</section>
{{-- Best --}}
  @endsection
@section('custromJs')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js"></script>
<script>$(document).ready(function(){
   $('.owl-carousel1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        340:{
            items:2
        },
        600:{
            items:3
        },
        800:{
             items:3
        },
        1000:{
            items:3.84
        }
    }
});
$('.owl-carousel2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        340:{
            items:2
        },
        600:{
            items:3
        },
        800:{
             items:3
        },
        1000:{
            items:3
        }
    }
});
  });</script>

@endsection
