@extends('frontend.layout.app')
@section('customCss')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
<style>@import url('https://fonts.googleapis.com/css?family=Poppins|Ubuntu&display=swap');
    .box{position: relative;width: 100%;padding-right: 15px;padding-left: 15px}.our-services{margin-top: 75px;padding-bottom: 30px;padding: 0 60px;min-height: 198px;text-align: center;border-radius: 10px;background-color: #fff;transition: all .4s ease-in-out;box-shadow: 0 0 25px 0 rgba(20,27,202,.17)}.our-services .icon{margin-bottom: -21px;transform: translateY(-50%);text-align: center}.our-services:hover h4, .our-services:hover p{color: #fff}.speedup:hover{box-shadow: 0 0 25px 0 rgba(20,27,201,.05);cursor: pointer;background-image: linear-gradient(-45deg, #fb0054 0%, #f55b2a 100%)}.settings:hover{box-shadow: 0 0 25px 0 rgba(20,27,201,.05);cursor: pointer;background-image: linear-gradient(-45deg, #34b5bf 0%, #210c59 100%)}.privacy:hover{box-shadow: 0 0 25px 0 rgba(20,27,201,.05);cursor: pointer;background-image: linear-gradient(-45deg, #3615e7 0%, #44a2f6 100%)}.backups:hover{box-shadow: 0 0 25px 0 rgba(20,27,201,.05);cursor: pointer;background-image: linear-gradient(-45deg, #fc6a0e 0%, #fdb642 100%)}.ssl:hover{box-shadow: 0 0 25px 0 rgba(20,27,201,.05);cursor: pointer;background-image: linear-gradient(-45deg, #8d40fb 0%, #5a57fb 100%)}.database:hover{box-shadow: 0 0 25px 0 rgba(20,27,201,.05);cursor: pointer;background-image: linear-gradient(-45deg, #27b88d 0%, #22dd73 100%)}</style>
<link rel="stylesheet" href="{{asset('assets/front end/css/category.css')}}">
@endsection
@section('content')
<div class="gallery mt-1">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/front end/home-image/1 (6).png')}}" alt="Shining Stars Image"
                    class="d-block w-100" alt="Home1">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/front end/home-image/2 (5).png')}}" alt="A cloudy Mountain Image"
                    class="d-block w-100" alt="home2">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/front end/home-image/3 (5).png')}}" alt="Shining Stars Image"
                    class="d-block w-100" alt="home3">
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

    {{-- For Responsive View --}}
    <div class="grid-block-images">
        <img class="gb-img" src="{{asset('assets/front end/home-image/4 (4).png')}}" alt="Shining Stars Image" />
        <img class="gb-img" src="{{asset('assets/front end/home-image/5 (4).png')}}" alt="A cloudy Mountain Image" />
        <img class="gb-img" src="{{asset('assets/front end/home-image/6 (4).png')}}" alt="A Winter Rainbow Image" />
        <img class="gb-img" src="{{asset('assets/front end/home-image/7 (3).png')}}" alt="Shining Stars Image" />
    </div>
    {{-- For Responsive View --}}
</div>

<div class="pound-parent-category px-3 row mt-2">
    @foreach ($parentCategory as $parentCategory)
    <div class="pound-pc-imageContainer p-0">
        <img src="{{$parentCategory->getFirstMediaUrl('parentCategory.image')}}"
            alt="{{$parentCategory['name']}}">
        <h3 class="parent-center-text">{{ Illuminate\Support\Str::limit(strip_tags($parentCategory['name']), 25, '...') }}</h3>
        <div class="overlay" onclick="window.location.href='{{ route('web.prodByCat',$parentCategory['id']) }}'" >
            <a href="{{ route('web.prodByCat',$parentCategory['id']) }}"><h3>{{ Illuminate\Support\Str::limit(strip_tags($parentCategory['name']), 25, '...') }}</h3></a>
        </div>
    </div>
    @endforeach
</div>

<!-- START:: Card Slider -->
<section class="mt-4 container" id="slider">
    <div class = "title pt-3">
        <h2 class = "position-relative ms-4">Latest Products</h2>
    </div>
  <div class="owl-carousel container container_pro mx-0 custom-card-container">

    @forelse ($products as $product)
    <div class="item">
        <!-- card -->
        <div class=" custom-card card h-100 shadow-custom">
            <div class="imgBx">
                <img  class="corsor" onclick="window.location.href='{{ route('web.prod.detail', $product->id) }}'" src="{{$product->getFirstMediaUrl('product.image')}}" alt="">
                <ul class="action">

                    <li><i class="fa-solid fa-eye" onclick="window.location.href='{{ route('web.prod.detail', $product->id) }}'"></i>
                        <span>view detail</span>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="productname text-center">
                    <h3 class="corsor" onclick="window.location.href='{{ route('web.prod.detail', $product->id) }}'">{{$product['name']}}</h3>
                </div>
                <div class="price_rating">
                    <div class="d-flex gap-1 align-items-center">
                        <h3  class="m-auto">{{$product['discounted_price']}}$</h3>
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
            <div class="owl-carousel owl-theam owl-carousel2">
                @forelse($brands as $brand)
                <div class="card rounded" style="margin: 0 5px">
                    <div class="card-image m-2" >
                        <img class="img-fluid corsor" onclick="window.location.href='{{ route('web.prod.brand', $brand->id) }}'" style="height:220px;" src="{{$brand->getFirstMediaUrl('brand.image')}}" width="100%"
                             >
                    </div>
                    <div class="card-body text-center">
                        <div class="ad-title m-auto">
                            <h5 class="corsor" onclick="window.location.href='{{ route('web.prod.detail', $product->id) }}'">{{$brand['name']}}</h5>
                        </div>
                    </div>
                </div>
                @empty
                <h4 class="text-center">No brands Found</h4>
                @endforelse
            </div>
    </div>
</section>
{{-- Best --}}

<div class="container-fluid mb-5">
    <div class="text-center mt-5">
        <h1>Our Services</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="our-services settings">
                    <div class="icon"> <img src="https://i.imgur.com/6NKPrhO.png"> </div>
                    <h4>Settings</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="our-services speedup">
                    <div class="icon"> <img src="https://i.imgur.com/KMbnpFF.png"> </div>
                    <h4>Speedup</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="our-services privacy">
                    <div class="icon"> <img src="https://i.imgur.com/AgyneKA.png"> </div>
                    <h4>Privacy</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="our-services backups">
                    <div class="icon"> <img src="https://i.imgur.com/vdH9LKi.png"> </div>
                    <h4>Backups</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="our-services ssl">
                    <div class="icon"> <img src="https://i.imgur.com/v6OnUqu.png"> </div>
                    <h4>SSL secured</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="our-services database">
                    <div class="icon"> <img src="https://i.imgur.com/VzjZw9M.png"> </div>
                    <h4>Database</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>
    </div>
</div>



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
    <h2 class="my-2">Our Blogs</h2>
    @endif
    <div class="owl-carousel container py-4">
        @forelse ($blogs as $blog)
            <div class="bg-light rounded-2 p-3 shadow-sm blog-cards" style="margin: 0 10px;">
                <a href="{{route('web.blog',$blog->id)}}"><img class="rounded-2" src="{{$blog->getFirstMediaUrl('blog.image')}}" alt=""></a>
                <h3 class="text-center mt-2 "><a href="{{ route('web.blog', $blog->id) }}">{{ Illuminate\Support\Str::limit(strip_tags($blog['title']), 25, '...') }}</a></h3>
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
        574: {
            items: 2
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
