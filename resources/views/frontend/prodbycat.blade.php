@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/front end/css/category.css')}}">
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 contact-banner">
            <h1 data-aos="fade-left" data-aos-duration="1000">Product by Category</h1>
            <h5 class="text-white" data-aos="fade-right" data-aos-duration="1000"><a href="{{Route('web.index')}}">Home</a> > Category</h5>
        </div>
    </div>
</div>

<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-12">
            <h2 data-aos="fade-right" data-aos-duration="1000">{{$parentCategory['name']}}</h2>
            <p data-aos="fade-right" data-aos-duration="2000">{{$parentCategory['description']}}</p>
            <span id="dots"></span>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" id="more">
                        <h3>{{$parentCategory['sub_name']}}</h3>
                        <p>{{$parentCategory['sub_description']}}</p>
                    </div>
                </div>
                <button onclick="myFunction()" id="myBtn">Read more</button>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    @if(isset($childCategories))
                    @foreach ($childByParentCat as $childCategory)
                    <div class="col-md-2 col-sm-6 col-6">
                        <div class="card border-0" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="{{$childCategory->getFirstMediaUrl('childCategory.image')}}"
                            onclick="location.href='/product-by-child/{{$childCategory->id}}'"
                                class="rounded-circle" alt="{{$childCategory['name']}}">
                            <div class="card-body text-center">
                                <h5 class="card-title"  onclick="location.href='/product-by-child/{{$childCategory->id}}'">{{$childCategory['name']}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{-- products section --}}
<section class="product-section container mb-4">
    <h2>Products</h2>

    <!-- product section -->
<div class="container container_pro">
    <div class="row justify-content-center">
        @if(isset($childCategory->products ))
        @foreach ($childCategory->products as $product)
        <div class="col-lg-3 mt-2">
            <div class="card" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="imgBx">
                    <img src="{{$product->getFirstMediaUrl('product.image')}}" onclick="window.location.href='{{ route('web.prod.detail', $product->id) }}'" alt="">
                    <ul class="action">
                        <li><i class="fa-solid fa-heart" onclick="window.location.href='{{ route('web.wish') }}'"></i>
                            <span>add to whishlist</span>
                        </li>
                        <li><i class="fa-solid fa-eye" onclick="window.location.href='{{ route('web.prod.detail', $product->id) }}'"></i>
                            <span>view detail</span>
                        </li>
                    </ul>
                </div>
                <div class="content">
                    <div class="productname text-center">
                        <h3 onclick="window.location.href='{{ route('web.prod.detail', $product->id) }}'">{{$product['name']}}</h3>
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
        @endforeach
        @endif
    </div>
</div>
<!-- end product section -->
</section>
{{-- products section --}}



@endsection

@section('custromJs')
<script>
    function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
</script>
@endsection
