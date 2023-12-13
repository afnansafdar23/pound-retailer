@extends('frontend.layout.app')
@section('customCss')

<script src="{{asset('assets/front end/zoom-efect/jquery.elevatezoom.js')}}"></script>
<script src="{{asset('assets/front end/zoom-efect/jquery-1.8.3.min.js')}}"></script>
<style>
@media(min-width:767px){
    .display-none{
        display: none;
    }
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

@endsection
@section('content')



{{-- Products Detail --}}
<section class="container-fluid col-12 p-2" >
   <div class="container-fluid col-12 row mt-5 " style="border: 1px solid #cccbcb; border-radious:4px; margin-left:2px;">
    <div class="col-md-6 container">
        <div class="col-12"><img class="xzoom col-lg-12 col-md-10 mb-2 mt-2 " src="{{asset('assets/front end/home-image/1 (5).png')}}"   xoriginal="{{asset('assets/front end/home-image/1 (5).png')}}"    />
            <div class="col-12"> <img  class="p-3 gx-5  " src="{{asset('assets/front end/home-image/10 (2).png')}}"  alt="" width="100px" height="100px">
            </div>
         </div>
        </div>


    <div class="col-md-6 col-sm-12 ml-6 p-1" style="text-color: rgb(41,49,88);">
   <h1 class="col-12">Product Name</h1>
   <span class="fs-4 fw-bold">SKU : 2131312</span>
   <p class="col-12 text-dark fs-5 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto voluptas quam accusantium odit quidem. Tenetur beatae cumque dicta est officiis quidem, minus mollitia. Totam ut quam aliquam tempore, officiis est beatae soluta explicabo libero, at sunt numquam rem voluptatibus commodi. </p>
  <ul class="container fw-bold">
    <span>Specification</span>
    <li>specofication detail</li>
  </ul>
  <p class="text-dark fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eaque corrupti ipsam tempora deleniti molestiae dolores aperiam fuga nemo facilis!</p>
<span class="fs-2 col-sm-12 gx-10 fw-bold">$ 1.00</span>
<p class="text-danger fs-6 col-sm-12 gx-10 fw-bold">case Price: $15.00 </p>
 <span class="fw-bolder fs-4">Qty:</span> <input class="from-control" type="number" name="" id="" style="width: 50px; height:30px;" > <span class="btn  btn-primary  fw-bold" >

    <i class="fa-solid fa-plus"></i></span><span class="btn m-2  btn-danger fw-bolder" ><i class="fa-solid fa-minus"></i></span>
    </div>


   </div>
</section>
{{-- Specification Section --}}

<section  class=" col-12  row  d-flex justify-content-center p-4 "   >
    <div class="d-flex justify-content-center bg-info row pl-5">
           <div class="col-md-3">
            <p class="fs-4 fw-bold text-dark">Specifiction</p>
      <ul class="col-sm-12 row">
        <li class="col-4 gx-2">Quality</li><span class="col-7">Best</span>
        <li class="col-4 gx-2">Quality</li><span class="col-7">Best</span>
        <li class="col-4 gx-2">Quality</li><span class="col-7">Best</span>
        </ul>
    </div>
    <div class="col-md-3">
        <p class="fs-4 fw-bold text-dark">Specifiction</p>
         <ul class="col-sm-12 row">
        <li class="col-4 gx-2">Quality</li><span class="col-7">Best</span>
        <li class="col-4 gx-2">Quality</li><span class="col-7">Best</span>
        <li class="col-4 gx-2">Quality</li><span class="col-7">Best</span>
        </ul>
    </div>

    <div class="col-md-6 ml-3 row ">
        <div class="col-md-4 invisible"> <p>sas</p></div>
         <div class="col-sm-12 col-md-8 row">
        <p class="fs-4 fw-bold text-dark">Brands</p>
         <img class="col-3"  src="{{asset('assets/front end/home-image/1 (5).png')}}"  alt="" width="50px" height="70px">
         <p class="col-12 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rem delectus minima!</p>
        </div></div>
    </div>

</section>
{{--End Specification Section --}}
{{-- REtail Products --}}
<section  class="mt-4 mb-2"  >
    <div class="container" >

      <h2>Related Products</h2>
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

{{-- End Product Details --}}





@endsection
@section('custromJs')
<script>
$(".xzoom").xzoom();
$(".xzoom").xzoom({
    position: 'left',
    Xoffset: 2,

});
</script>
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

   });</script>



@endsection
