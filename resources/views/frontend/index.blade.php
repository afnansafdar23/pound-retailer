@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">


{{-- grid view Css --}}
<style>
    .gallery {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: auto;
    grid-auto-flow: dense;
    gap: 6px;
    margin-left: 15px;
    margin-right: 15px;
}

.grid-img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.carousel {
    grid-row: span 2 / auto;
    grid-column: span 2 / auto;
}

.wide-image {
    grid-column: span 2 / auto;
}

@media (max-width: 600px) {
    .gallery {
        grid-template-columns: 1fr;
    }

    .img {
        grid-row: auto;
        grid-column: auto;
    }

    .four-grid-cells,
    .wide-image {
        grid-column: auto;
    }
}

.img-container {
    position: relative;
    display: inline-block;
    overflow: hidden;
}
.rounded-3{
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}



.overlay {
    position: absolute;
    top: 100%; /* Initially position the overlay at the bottom */
    left: 0;
    width: 100%;
    height: 100%;
    transition: top 0.5s; /* Transition the top property for animation */
    background: rgba(255, 255, 0, 0.7); /* Yellow color with 0.7 opacity */
    color: #000; /* Black text color */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.img-container:hover .overlay {
    top: 0; /* Move the overlay to the top on hover */
}

.img-container:hover .img {
    filter: brightness(0.7); /* Optional: Darken the image on hover */
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.overlay {
    animation: fadeIn 0.5s ease-in-out; /* Fade-in animation on hover */
}
  </style>
{{-- End grid view Css --}}

<style>


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
    position: relative;
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
{{-- card Csss --}}
<style>
    .c12{
        height: 160px;
        text-align: center;
        margin-bottom: 10px;




    }
    .div1{
        padding-top: 50px;
        clip-path: ellipse(100% 66% at 0% 48%);

        height: 160px;
        margin-left: -12px;
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;



    }
    .incard{
        height: 160px;
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;

    }
    .incard2{
        border-bottom-right-radius: 10px;
        border-top-right-radius: 10px;

    }
    @media(max-width: 575px){

      .c12{
        display: grid;
        grid-template-columns: 1fr  1fr ;
        margin-top: 40px;
        margin-bottom: 20px;
        margin-left:10px;
        width: 90%;


      }
      .div1{
        padding-top: 50px;
        clip-path: ellipse(99% 100% at 0% 52%);


        height: 160px;
        margin-left: -12px;



    }


    }
    @media(min-width: 768px){
        .div1{
        padding-top: 50px;
        clip-path: ellipse(99% 100% at 0% 52%);
        width: 50px;
        height: 160px;
        margin-left: -12px;
    }
    .c12{
        margin-left: 10px;
    }

}
@media(min-width: 991px){
    .div1{
        width:auto;
    }
    .c12{

          width:25%

    }
    .card-main{
        margin-left: -14px;
    }

}
@media()
@media(max-width: 413px){
    .c12{
        margin-left: 8px;
        width: 300px;

    }

}
@media(max-width: 768px){
    .c12{
        margin-left: 10px;
    }
}

</style>

{{--End card Csss --}}
{{-- About Css --}}
<style>

</style>
{{-- About end  --}}


<script>

</script>
@endsection
@section('content')

{{-- grid view system  --}}
<div class="gallery mt-1">


    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg"
            alt="Shining Stars Image" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/5409751/pexels-photo-5409751.jpeg"
            alt="A cloudy Mountain Image" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg"
            alt="Shining Stars Image" class="d-block w-100" alt="...">
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

    <img class="grid-img"
        src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg"
        alt="Shining Stars Image" />



    <img class="grid-img"
        src="https://images.pexels.com/photos/5409751/pexels-photo-5409751.jpeg"
        alt="A cloudy Mountain Image" />

    <img class="grid-img"
        src="https://images.pexels.com/photos/4101555/pexels-photo-4101555.jpeg"
        alt="A Winter Rainbow Image" />



    <img class="grid-img"
        src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg"
        alt="Shining Stars Image" />

</div>

<div class="gallery mt-2">
 <div class="img-container">
    <img class="grid-img" src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg" alt="Shining Stars Image">
    <div class="overlay">Shining Stars Image</div>
</div>

<div class="img-container">
    <img class="grid-img" src="https://images.pexels.com/photos/5409751/pexels-photo-5409751.jpeg" alt="A cloudy Mountain Image">
    <div class="overlay">A cloudy Mountain Image</div>
</div>

<div class="img-container">
    <img class="grid-img" src="https://images.pexels.com/photos/4101555/pexels-photo-4101555.jpeg" alt="A Winter Rainbow Image">
    <div class="overlay">A Winter Rainbow Image</div>
</div>

<div class="img-container">
    <img class="grid-img" src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg" alt="Shining Stars Image">
    <div class="overlay">Shining Stars Image</div>
</div>
<div class="img-container">
    <img class="grid-img" src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg" alt="Shining Stars Image">
    <div class="overlay">Shining Stars Image</div>
</div>

<div class="img-container">
    <img class="grid-img" src="https://images.pexels.com/photos/5409751/pexels-photo-5409751.jpeg" alt="A cloudy Mountain Image">
    <div class="overlay">A cloudy Mountain Image</div>
</div>

<div class="img-container">
    <img class="grid-img" src="https://images.pexels.com/photos/4101555/pexels-photo-4101555.jpeg" alt="A Winter Rainbow Image">
    <div class="overlay">A Winter Rainbow Image</div>
</div>

<div class="img-container">
    <img class="grid-img" src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg" alt="Shining Stars Image">
    <div class="overlay">Shining Stars Image</div>
</div>
</div>

{{-- grid View System --}}

<section  class="mt-4"  >
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

 <!-- statics Card Section -->
 <section class="d-flex justify-content-around mb-2 mt-2 ">
 <section class="container-fluid mt-3 pl-2 row card-main">
     {{-- card 1 --}}
    <div class="col-md-3 col-sm-6 col-xm-12 row c12">
        <div class=" bg-danger col-sm-4 incard"><div class="col-sm-12 bg-info div1">card1</div></div>

        <div class="col-sm-8 bg-danger incard2"> this is sdsd  <br>1 card</div>
    </div>
    {{-- card 2 --}}
    <div class="col-md-3 col-sm-6 col-xm-12 row c12">
        <div class=" bg-danger col-sm-4 incard"><div class="col-sm-12 bg-info div1">card2</div></div>

        <div class="col-sm-8 bg-danger incard2 "> this is  sdasd<br> 2 card</div>
    </div>
     {{-- card 3 --}}
    <div class="col-md-3 col-sm-6 col-xm-12 row c12">
        <div class=" bg-danger col-sm-4 incard"><div class="col-sm-12 bg-info div1">card3</div></div>
        <div class="col-sm-8 bg-danger incard2">this is  sdsd<br> 3 card</div>
    </div>
     {{-- card 4 --}}
    <div class="col-md-3 col-sm-6 col-xm-12 row c12">
        <div class=" bg-danger col-sm-4 incard" ><div class="col-sm-12 bg-info div1">card4</div></div>

        <div class="col-sm-8 bg-danger incard2">this is  sdsd<br>4 card</div>
    </div>
 </section>
</section>


   <!-- Setatics Card Section -->


   {{-- About Section  --}}

   <section class="container-fluid row  mb-2 rounded-3  p-1 ">
    <div class="col-md-6 aboutimg col-sm-12 p-4" ><img class="col-12" src="{{asset('assets/front end/image1-2.jpg')}}" alt="" width="400px" height="400px"> </div>
    <div class="col-md-4 col-sm-12 overflow-hidden" style="margin-left: 15px;" > <span class="fs-1 pt-4 col-12">About us</span>
    <p class="text-dark fs-5 col-12">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, neque dolorum dicta iste quam ex numquam, illo unde fugit recusandae odio illum eaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga ipsum eos cupiditate aliquam facilis, excepturi, quos commodi eligendi provident, molestias error labore sapiente?</p></div>

   </section>

 {{-- End About Section  --}}
 {{-- Blog Section  --}}

  <section class="row container-fluid  ">
    <span class=" bolder display-4 mt-2 mb-2">From the blog post</span>
    <div class="col-md-3 ">
        <img  class="col-12" src="{{asset('assets/front end/image1-2.jpg')}}" alt="" width="auto" height="auto">
        <span class="fs-2">this is first blog</span>
        <p class="text-dark fs-4 wrap overflow-hidden wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum unde fugiat consequatur laborum optio eveniet illo, sed repudiandae eius eum illum eos iure doloribus corporis nostrum voluptas accusamus libero perspiciatis!</p>

    </div>
    <div class="col-md-3 ">
        <img class="col-12" src="{{asset('assets/front end/image1-2.jpg')}}" alt="" width="auto" height="auto">
        <span class="fs-2">this is second blog</span>
        <p class="text-dark fs-4 wrap overflow-hidden">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum unde fugiat consequatur laborum optio eveniet illo, sed repudiandae eius eum illum eos iure doloribus corporis nostrum voluptas accusamus libero perspiciatis!</p>

    </div>
    <div class="col-md-3 ">
        <img class="col-12"  src="{{asset('assets/front end/image1-2.jpg')}}" alt="" width="auto" height="auto">
        <span class="fs-2">this is third blog</span>
        <p class="text-dark fs-4 wrap overflow-hidden">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum unde fugiat consequatur laborum optio eveniet illo, sed repudiandae eius eum illum eos iure doloribus corporis nostrum voluptas accusamus libero perspiciatis!</p>

    </div>
    <div class="col-md-3 ">
        <img class="col-12"  src="{{asset('assets/front end/image1-2.jpg')}}" alt="" width="auto" height="auto">
        <span class="fs-2">this is third blog</span>
        <p class="text-dark fs-4 wrap overflow-hidden">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum unde fugiat consequatur laborum optio eveniet illo, sed repudiandae eius eum illum eos iure doloribus corporis nostrum voluptas accusamus libero perspiciatis!</p>

    </div>
  </section>
 {{-- End Blog Section  --}}

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
