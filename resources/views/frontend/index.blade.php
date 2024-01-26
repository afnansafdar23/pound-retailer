@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/front assets/front end/css/owl.carousel.min.css')}}">
@endsection
@section('content')
<div class="gallery mt-1">
    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/front end/home-image/1 (5).png')}}" alt="Shining Stars Image"
                    class="d-block w-100" alt="Home1" style='height:100vh'>
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/front end/home-image/2 (5).png')}}" alt="A cloudy Mountain Image"
                    class="d-block w-100" alt="home2" style='height:100vh'>
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/front end/home-image/3 (5).png')}}" alt="Shining Stars Image"
                    class="d-block w-100" alt="home3" style='height:100vh'>
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
            <h3>{{ Illuminate\Support\Str::limit(strip_tags($parentCategory['name']), 25, '...') }}</h3>
        </div>
    </div>
    @endforeach
</div>

<!-- START:: Card Slider -->
<section class="mt-4 container">
    <div class = "title pt-3">
        <h2 class = "position-relative ms-4">Latest Products</h2>
    </div>
  <div class="owl-carousel container">

    @forelse ($products as $product)
    <div class="item">
        <!-- card -->
        <div class="card">
            <div class="imgBx">
                <img src="{{$product->getFirstMediaUrl('product.image')}}" alt="">
                <ul class="action mt-2 text-center">
                    <li>
                        <i class="fa-solid fa-heart"></i>
                        <span>add to whishlist</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-eye"></i>
                        <a href="{{route('web.prod.detail',$product['id'])}}">view detail</a>
                    </li>
                </ul>
            </div>
            <div class="content p-2">
                <div class="productname text-center">
                    <h3>{{$product['name']}}</h3>
                </div>
                <div class="price_rating">
                    <div class="d-flex align-items-center">
                        <h3 class="m-auto">{{$product['discounted_price']}}$</h3>
                        <div class="d-grid">
                            <del class="text-danger text-small">{{$product['price']}} $</del>
                            <span class="text-success text-small">{{number_format((($product['price'] -
                                $product['discounted_price']) /
                                $product['price']) *
                                100)}} % OFF</span>
                        </div>
                    </div>
                    <div class="ratings d-flex justify-content-center">
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
        <!-- card -->
      </div>
    @empty
    <h2 class="text-center">No Products Found</h2>
    @endforelse
      <!-- End -->
  </div>
</section>
  <!-- END:: Card Slider -->

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
                <div class="col-sm-12 bg-info div1"><img src="{{asset('assets/media/stock/ecommerce/1.gif')}}" alt="product"></div>
            </div>

            <div class="col-sm-8 bg-danger incard2">
                <!-- Product Description -->
                <div>
                    <h4>Product Name</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <!-- Product Description -->
            </div>
        </div>
        {{-- card 2 --}}
        <div class="col-md-3 col-sm-6 col-xm-12 row c12">
            <div class=" bg-danger col-sm-4 incard">
                <div class="col-sm-12 bg-info div1"><img src="{{asset('assets/media/stock/ecommerce/2.gif')}}" alt="product"></div>
            </div>

            <div class="col-sm-8 bg-danger incard2 ">
                <!-- Product Description -->
                <div>
                    <h4>Product Name</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <!-- Product Description -->
            </div>
        </div>
        {{-- card 3 --}}
        <div class="col-md-3 col-sm-6 col-xm-12 row c12">
            <div class=" bg-danger col-sm-4 incard">
                <div class="col-sm-12 bg-info div1"><img src="{{asset('assets/media/stock/ecommerce/3.gif')}}" alt="product"></div>
            </div>
            <div class="col-sm-8 bg-danger incard2">
                <!-- Product Description -->
                <div>
                    <h4>Product Name</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <!-- Product Description -->
            </div>
        </div>
        {{-- card 4 --}}
        <div class="col-md-3 col-sm-6 col-xm-12 row c12">
            <div class=" bg-danger col-sm-4 incard">
                <div class="col-sm-12 bg-info div1"><img src="{{asset('assets/media/stock/ecommerce/24.gif')}}" alt="product"></div>
            </div>

            <div class="col-sm-8 bg-danger incard2">
                <!-- Product Description -->
                <div>
                    <h4>Product Name</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <!-- Product Description -->
            </div>
        </div>
    </section>
</section>

<!-- START:: About Responsive -->
<section class="container home-about">
    <div class="row">
        <!-- Image -->
        <div class="col-lg-6"><img class="rounded-2 img-fluid" src="{{asset('assets/front end/image1-2.jpg')}}" alt="about-image"></div>
        <!-- Text -->
        <div class="col-lg-6 overflow-hidden">
         <h2 class="text-center">About Us</h2>
         <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis provident impedit quis pariatur
            doloremque at corporis maiores hic exercitationem ut? Expedita sapiente mollitia, qui perspiciatis quas illo
            ducimus numquam non est rerum, repellat inventore minus! Culpa quisquam iure veniam laudantium dicta omnis,
            obcaecati impedit ipsam asperiores qui, nobis nihil! Iusto deserunt possimus itaque impedit tempora
            explicabo eveniet est? Hic dolore iste fugit, architecto quasi tempore quaerat ex nesciunt ad, quibusdam rem
            qui, dignissimos eos! Quae, explicabo, provident sunt repellendus pariatur rem iste vel, asperiores placeat
            suscipit possimus. Alias officia, hic pariatur assumenda, atque deserunt iure accusamus laudantium ab,
            explicabo iusto!
        </p>
        </div>
        <!-- END -->
    </div>
</section>
<!-- END:: About Responsive -->

<section class="container mb-5">
    @if (isset($blogs))
    <h1 class="text-center my-4">Our Blogs</h1>
    @endif
    <div class="row text-center justify-content-center">
        @forelse ($blogs as $blog)
        <div class="col-md-3 bg-light rounded-2 py-3 shadow-sm" style="margin: 0 10px">
            <a href="{{route('web.blog',$blog->id)}}"><img class="rounded-2" src="{{$blog->getFirstMediaUrl('blog.image')}}" alt=""></a>
            <h3 class="text-center mt-2"><a href="{{ route('web.blog', $blog->id) }}">{{ Illuminate\Support\Str::limit(strip_tags($blog['title']), 25, '...') }}</a></h3>

            <hr>
            <p class="overflow-hidden wrap">{{ Illuminate\Support\Str::limit(strip_tags($blog['description']), 40, '...') }}</p>
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
<script src="{{asset('assets/front end/css/owl.carousel.min.js')}}"></script>
<script>

$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
      autoPlay: 1000,
      items : 6,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        425: {
          items: 1
        },
        768: {
          items: 3
        },
        1024: {
          items: 4
        }
      }
    });
    });

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
