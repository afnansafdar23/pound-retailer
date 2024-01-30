@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/front end/css/category.css')}}">
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 contact-banner">
            <h1>Product by Category</h1>
            <h5 class="text-white"><a href="{{Route('web.index')}}">Home</a> > Category</h5>
        </div>
    </div>
</div>

<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-12">
            <h1>{{$parentCategory['name']}}</h1>
            <p>{{$parentCategory['description']}}</p>
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
                    @foreach ($childByParentCat as $childCategory)
                    <div class="col-md-2 col-sm-6 col-6">
                        <div class="card border-0">
                            <img src="{{$childCategory->getFirstMediaUrl('childCategory.image')}}"
                                class="rounded-circle" alt="{{$childCategory['name']}}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{$childCategory['name']}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
{{-- products section --}}
<section class="product-section container mb-4">
    <h2>Products</h2>

    <div class="row">
        {{-- 1 --}}
        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                <!-- card -->
                <div class="card">
                    <div class="imgBx">
                        <img src="{{asset('assets/media/stock/ecommerce/1.gif')}}" alt="product">
                        {{-- Wishlist and View Detail --}}
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <span><i class="fa-solid fa-heart"></i> <span>add to whishlist</span></span>
                            <span><i class="fa-solid fa-eye"></i><a href="#">view detail</a></span>
                        </div>
                        {{-- Wishlist and View Detail --}}
                    </div>
                    <div class="content p-2">
                        <div class="productname text-center mt-2">
                            <h3>Product Name</h3>
                        </div>
                        <div class="price_rating">
                            <div class="d-flex align-items-center">
                                <h3 class="m-auto">200$</h3>
                                <div class="d-grid">
                                    <del class="text-danger text-small">200$</del>
                                    <span class="text-success text-small">50% OFF</span>
                                </div>
                            </div>
                            <div class="ratings d-flex justify-content-center">
                                <p>
                                    <span class="badge bg-success"><i class="fa-solid fa-check"></i> In Stock</span>
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card -->
        </div>
        {{-- 2 --}}
        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
            <!-- card -->
            <div class="card">
                <div class="imgBx">
                    <img src="{{asset('assets/media/stock/ecommerce/1.gif')}}" alt="product">
                    {{-- Wishlist and View Detail --}}
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <span><i class="fa-solid fa-heart"></i> <span>add to whishlist</span></span>
                        <span><i class="fa-solid fa-eye"></i><a href="#">view detail</a></span>
                    </div>
                    {{-- Wishlist and View Detail --}}
                </div>
                <div class="content p-2">
                    <div class="productname text-center mt-2">
                        <h3>Product Name</h3>
                    </div>
                    <div class="price_rating">
                        <div class="d-flex align-items-center">
                            <h3 class="m-auto">200$</h3>
                            <div class="d-grid">
                                <del class="text-danger text-small">200$</del>
                                <span class="text-success text-small">50% OFF</span>
                            </div>
                        </div>
                        <div class="ratings d-flex justify-content-center">
                            <p>
                                <span class="badge bg-success"><i class="fa-solid fa-check"></i> In Stock</span>
                            <p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card -->
        </div>
        {{-- 3 --}}
        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
            <!-- card -->
            <div class="card">
                <div class="imgBx">
                    <img src="{{asset('assets/media/stock/ecommerce/1.gif')}}" alt="product">
                    {{-- Wishlist and View Detail --}}
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <span><i class="fa-solid fa-heart"></i> <span>add to whishlist</span></span>
                        <span><i class="fa-solid fa-eye"></i><a href="#">view detail</a></span>
                    </div>
                    {{-- Wishlist and View Detail --}}
                </div>
                <div class="content p-2">
                    <div class="productname text-center mt-2">
                        <h3>Product Name</h3>
                    </div>
                    <div class="price_rating">
                        <div class="d-flex align-items-center">
                            <h3 class="m-auto">200$</h3>
                            <div class="d-grid">
                                <del class="text-danger text-small">200$</del>
                                <span class="text-success text-small">50% OFF</span>
                            </div>
                        </div>
                        <div class="ratings d-flex justify-content-center">
                            <p>
                                <span class="badge bg-success"><i class="fa-solid fa-check"></i> In Stock</span>
                            <p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card -->
        </div>
        {{-- 4 --}}
        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
            <!-- card -->
            <div class="card">
                <div class="imgBx">
                    <img src="{{asset('assets/media/stock/ecommerce/1.gif')}}" alt="product">
                    {{-- Wishlist and View Detail --}}
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <span><i class="fa-solid fa-heart"></i> <span>add to whishlist</span></span>
                        <span><i class="fa-solid fa-eye"></i><a href="#">view detail</a></span>
                    </div>
                    {{-- Wishlist and View Detail --}}
                </div>
                <div class="content p-2">
                    <div class="productname text-center mt-2">
                        <h3>Product Name</h3>
                    </div>
                    <div class="price_rating">
                        <div class="d-flex align-items-center">
                            <h3 class="m-auto">200$</h3>
                            <div class="d-grid">
                                <del class="text-danger text-small">200$</del>
                                <span class="text-success text-small">50% OFF</span>
                            </div>
                        </div>
                        <div class="ratings d-flex justify-content-center">
                            <p>
                                <span class="badge bg-success"><i class="fa-solid fa-check"></i> In Stock</span>
                            <p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card -->
        </div>
        {{-- end --}}
    </div>

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
