@extends('frontend.layout.app')
@section('customCss')
<style>
    #more {
        display: none;
    }

    .rounded-circle {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin: 0 auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);


    }
</style>

{{-- card styling --}}
@endsection

{{-- read more section --}}
@section('content')
<div class="container-fluid mt-3 mb-5">
    <div class="row">
        <div class="col-12">
            <h1>Retailer Brands</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum,
                nisi lorem egestas vitae scel
            </p>
            <span id="dots"></span>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" id="more">
                        <h2>heading</h2>
                        <p>erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor
                            vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed
                            ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis.
                            Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum.
                            Sed dapibus pulvinar nibh tempor porta.</span></p>
                    </div>
                </div>

                <button onclick="myFunction()" id="myBtn">Read more</button>
            </div>

        </div>
    </div>
</div>
{{-- category section --}}
<div class="container-fluid mb-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="row justify-content-center">
                <div class="col-md-2 col-sm-6 col-6">
                    <div class="card border-0">
                        <img src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg"
                            class="rounded-circle" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Name</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- products section --}}

<div class="container">
    <div class="row">
        <div class="owl-carousel owl-theam owl-carousel1">
            <div class="col-md-12 col-sm-12 mb-2 ">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" style="height: 40vh"
                                src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg">

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
                            <img class="pic-1" style="height: 40vh"
                                src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg">

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
                            <img class="pic-1" style="height: 40vh"
                                src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg">

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
                            <img class="pic-1" style="height: 40vh"
                                src="https://bestjquery.com/tutorial/product-grid/demo57/images/img-6.jpg">

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