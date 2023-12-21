@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css">
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

    .grid-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 6px
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
        height: 45vh;
        border-radius: 6px
    }

    .rounded-3 {
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }



    .overlay {
        position: absolute;
        top: 100%;
        /* Initially position the overlay at the bottom */
        left: 0;
        width: 100%;
        height: 100%;
        transition: top 0.5s;
        /* Transition the top property for animation */
        background: rgba(255, 255, 0, 0.7);
        /* Yellow color with 0.7 opacity */
        color: #000;
        /* Black text color */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .img-container:hover .overlay {
        top: 0;
        /* Move the overlay to the top on hover */
    }

    .img-container:hover .img {
        filter: brightness(0.7);
        /* Optional: Darken the image on hover */
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
        animation: fadeIn 0.5s ease-in-out;
        /* Fade-in animation on hover */
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

    .owl-nav .owl-next,
    .owl-nav .owl-prev {
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

    .owl-nav .owl-next:hover,
    .owl-nav .owl-prev:hover {
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
    .product-grid {
        font-family: 'Roboto', sans-serif;
        text-align: center;
        transition: all 0.5s;
        position: relative;
    }

    .product-grid:hover {
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.3);
    }

    .product-grid .product-image {
        position: relative;
        overflow: hidden;
    }

    .product-grid .product-image a.image {
        display: block;
    }

    .product-grid .product-image img {
        width: 100%;
        height: auto;
    }

    .product-image .pic-1 {
        opacity: 1;
        backface-visibility: hidden;
        transition: all 0.5s;
    }




    .product-grid .product-sale-label {
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

    .product-grid .social {
        padding: 0;
        margin: 0;
        list-style: none;
        position: absolute;
        top: 15px;
        right: 7px;
    }

    .product-grid .social li {
        transform: translateX(60px);
        transition: all 0.3s ease 0.3s;
    }

    .product-grid .social li:nth-child(2) {
        transition: all 0.3s ease 0.4s;
    }

    .product-grid:hover .social li {
        transform: translateX(0);
    }

    .product-grid .social li a {
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

    .product-grid .social li a:hover {
        color: #6DA84A;
    }

    .product-grid .product-rating {
        background: rgba(255, 255, 255, 0.95);


        padding: 10px;
        opacity: 0;
        position: absolute;
        bottom: -60px;
        left: 0;
        transition: all .2s ease-in-out 0s;
    }

    .product-grid:hover .product-rating {
        opacity: 1;
        bottom: 0;
    }

    .product-grid .rating {
        padding: 0;
        margin: 0;
        list-style: none;
        float: left;
    }

    .product-grid .rating li {
        color: #6DA84A;
        font-size: 13px;
    }

    .product-grid .rating li.far {
        color: #999;
    }

    .product-grid .add-to-cart {
        color: #6DA84A;
        font-size: 14px;
        font-weight: 600;
        border-bottom: 1px solid #6DA84A;
        float: right;
        transition: all .2s ease-in-out 0s;
    }

    .product-grid .add-to-cart:hover {
        color: #000;
        border-color: #000;
    }

    .product-grid .product-content {
        background: #F5F5F5;
        padding: 15px;
    }

    .product-grid .title {
        font-size: 18px;
        text-transform: capitalize;
        margin: 0 0 5px;
    }

    .product-grid .title a {
        color: #111;
        transition: all 500ms;
    }

    .product-grid .title a:hover {
        color: #6DA84A;
    }

    .product-grid .price {
        color: #707070;
        font-size: 17px;
        text-decoration: underline;
    }

    .product-grid .price span {
        text-decoration: line-through;
        margin-right: 5px;
        display: inline-block;
        opacity: 0.6;
    }

    @media only screen and (max-width:990px) {
        .product-grid {
            margin-bottom: 40px;
        }
    }
</style>
{{-- card Csss --}}
<style>
    .c12 {
        height: 160px;
        text-align: center;
        margin-bottom: 10px;




    }

    .div1 {
        padding-top: 50px;
        clip-path: ellipse(100% 66% at 0% 48%);

        .div1 {
            padding-top: 50px;
            clip-path: ellipse(100% 66% at 0% 48%);

            height: 160px;
            margin-left: -12px;
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px;



        }

        .incard {
            height: 160px;
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px;

        }

        .incard2 {
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px;

        }

        @media(max-width: 575px) {

            .c12 {
                display: grid;
                grid-template-columns: 1fr 1fr;
                margin-top: 40px;
                margin-bottom: 20px;
                margin-left: 10px;
                width: 90%;


            }

            .div1 {
                padding-top: 50px;
                clip-path: ellipse(99% 100% at 0% 52%);


                height: 160px;
                margin-left: -12px;



            }


        }

        @media(min-width: 768px) {
            .div1 {
                padding-top: 50px;
                clip-path: ellipse(99% 100% at 0% 52%);
                width: 50px;
                height: 160px;
                margin-left: -12px;
            }

            .c12 {
                margin-left: 10px;
            }

            .c12 {

                @media(min-width: 991px) {
                    .div1 {
                        width: auto;
                    }

                    .c12 {

                        width: 25%
                    }

                    .card-main {
                        margin-left: -14px;
                    }

                }

                @media() @media(max-width: 413px) {
                    .c12 {
                        margin-left: 8px;
                        width: 300px;

                    }

                }

                @media(max-width: 768px) {
                    .c12 {
                        margin-left: 10px;
                    }
                }
</style>

@endsection
@section('content')

{{-- grid view system --}}
<div class="gallery mt-1">


    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/front end/home-image/1 (5).png')}}" alt="Shining Stars Image"
                    class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/front end/home-image/2 (5).png')}}" alt="A cloudy Mountain Image"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/front end/home-image/3 (5).png')}}" alt="Shining Stars Image"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <img class="grid-img" src="{{asset('assets/front end/home-image/4 (4).png')}}" alt="Shining Stars Image" />
    <img class="grid-img" src="{{asset('assets/front end/home-image/5 (4).png')}}" alt="A cloudy Mountain Image" />
    <img class="grid-img" src="{{asset('assets/front end/home-image/6 (4).png')}}" alt="A Winter Rainbow Image" />
    <img class="grid-img" src="{{asset('assets/front end/home-image/7 (3).png')}}" alt="Shining Stars Image" />
</div>

<div class="gallery row mt-2">
    @foreach ($parentCategories as $parentCategory)
    <div class="img-container p-0">
        <img class="grid-img" src="{{$parentCategory->getFirstMediaUrl('parentCategory.image')}}"
            alt="{{$parentCategory['name']}}">
        <div class="overlay">
            <h3>{{$parentCategory['name']}}</h3>
        </div>
    </div>
    @endforeach
</div>

{{-- grid View System --}}

<section class="mt-4">
    <div class="container">
        <h2>Latest Products</h2>
        <div>
            {{-- <div class="owl-carousel owl-theam owl-carousel1"> --}}
             @forelse ($products as $product)
                 <div class="col-6 col-lg-3">
                    <div class="card">
                        <div class="imgBx">
                            <img src="{{$product->getFirstMediaUrl('product.image')}}" alt="">
                            <ul class="action">
                                <li><i class="fa-solid fa-heart"></i>
                                    <span>add to whishlist</span>
                                </li>
                                <li><i class="fa-solid fa-eye"></i>
                                    <span>view detail</span>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <div class="productname text-center">
                                <h3>{{$product['name']}}</h3>
                            </div>
                            <div class="price_rating">
                                <div class="d-flex gap-1 align-items-center">
                                    <h3 class="m-auto">{{$product['discounted_price']}}$</h3>
                                    <div class="d-grid">
                                        <del class="text-danger text-small">{{$product['price']}} $</del>
                                        <span class="text-success text-small">{{number_format((($product['price'] -
                                            $product['discounted_price']) /
                                            $product['price']) *
                                            100)}} % OFF</span>
                                    </div>
                                </div>
                                <div class="ratings">
                                    <p>
                                        @if ($product['availability']=='on')
                                        <span class="badge bg-success"><i class="fa-solid fa-check"></i> In Stock</span>
                                        @else
                                        <span class="badge bg-danger"><i class="fa-solid fa-xmark"></i> Out of Stock</span>
                                        @endif
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
             @empty
             <h2 class="text-center">No Products Found</h2>
             @endforelse
            {{-- </div> --}}
        </div>
    </div>
</section>
{{-- Brand Section --}}
<section id="slider" class="">
    <div class="container">
        <h2>Our Brands</h2>
        <div>
            <div class="owl-carousel owl-theam owl-carousel2">
                @forelse($brands as $brand)
                <div class="card rounded">
                    <div class="card-image m-2">
                        <img class="img-fluid" src="{{$brand->getFirstMediaUrl('brand.image')}}"
                            alt="{{$brand['name']}}" />
                    </div>
                    <div class="card-body text-center">
                        <div class="ad-title m-auto">
                            <h5>{{$brand['name']}}</h5>
                        </div>
                    </div>
                </div>
                @empty
                <h4 class="text-center">No brands Found</h4>
                @endforelse
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
            <div class=" bg-danger col-sm-4 incard">
                <div class="col-sm-12 bg-info div1">card1</div>
            </div>

            <div class="col-sm-8 bg-danger incard2"> this is sdsd <br>1 card</div>
        </div>
        {{-- card 2 --}}
        <div class="col-md-3 col-sm-6 col-xm-12 row c12">
            <div class=" bg-danger col-sm-4 incard">
                <div class="col-sm-12 bg-info div1">card2</div>
            </div>

            <div class="col-sm-8 bg-danger incard2 "> this is sdasd<br> 2 card</div>
        </div>
        {{-- card 3 --}}
        <div class="col-md-3 col-sm-6 col-xm-12 row c12">
            <div class=" bg-danger col-sm-4 incard">
                <div class="col-sm-12 bg-info div1">card3</div>
            </div>
            <div class="col-sm-8 bg-danger incard2">this is sdsd<br> 3 card</div>
        </div>
        {{-- card 4 --}}
        <div class="col-md-3 col-sm-6 col-xm-12 row c12">
            <div class=" bg-danger col-sm-4 incard">
                <div class="col-sm-12 bg-info div1">card4</div>
            </div>

            <div class="col-sm-8 bg-danger incard2">this is sdsd<br>4 card</div>
        </div>
    </section>
</section>
<section class="container gap-5 d-flex my-2 p-4 justify-content-center">
    <div class="col-md-6">
        <img class="col-12 rounded-2" src="{{asset('assets/front end/image1-2.jpg')}}" alt="">
    </div>
    <div class="col-md-6 overflow-hidden">
        <h2>About us</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis provident impedit quis pariatur
            doloremque at corporis maiores hic exercitationem ut? Expedita sapiente mollitia, qui perspiciatis quas illo
            ducimus numquam non est rerum, repellat inventore minus! Culpa quisquam iure veniam laudantium dicta omnis,
            obcaecati impedit ipsam asperiores qui, nobis nihil! Iusto deserunt possimus itaque impedit tempora
            explicabo eveniet est? Hic dolore iste fugit, architecto quasi tempore quaerat ex nesciunt ad, quibusdam rem
            qui, dignissimos eos! Quae, explicabo, provident sunt repellendus pariatur rem iste vel, asperiores placeat
            suscipit possimus. Alias officia, hic pariatur assumenda, atque deserunt iure accusamus laudantium ab,
            explicabo iusto!</p>
    </div>
</section>
<section class="container mb-5">
    @if (isset($blogs))
    <h1 class="text-center my-4">Our Blogs</h1>
    @endif
    <div class="row text-center justify-content-center">
        @forelse ($blogs as $blog)
        <div class="col-md-3 bg-light rounded-2 py-3">
            <img class="rounded-2" src="{{$blog->getFirstMediaUrl('blog.image')}}" alt="">
            <h3 class="text-center mt-2">{{$blog['title']}}</h3>
            <hr>
            <p class="overflow-hidden wrap">{{$blog['description']}}</p>
        </div>
        @empty
        <h4 class="text-center">No Blogs Found</h4>
        @endforelse
    </div>
</section>
{{-- End Blog Section --}}
@endsection
@section('custromJs')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
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
            items:4
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
  });
</script>

@endsection
