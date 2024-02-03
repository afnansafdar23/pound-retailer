@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/front end/css/cart.css')}}">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 contact-banner">
            <h1 data-aos="fade-left" data-aos-duration="1000">Shopping Cart</h1>
            <h5 class="text-white" data-aos="fade-right" data-aos-duration="1000"><a href="{{Route('web.index')}}">Home</a> > Cart</h5>
        </div>
    </div>
</div>

    <div class="card mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 cart" data-aos="fade-right" data-aos-duration="1000">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted">Total Selected Items </div>
                    </div>
                </div>
                <div class="row border-bottom">
                    <div class="row main">
                        <div class="col-2 cart-image"><img src="{{asset('assets/media/stock/ecommerce/1.gif')}}"></div>
                        <div class="col-md-2">
                            <div class="row text-muted">product name</div>
                            <div class="row">price</div>
                        </div>
                        <div class="col">
                            <a class="h3" style="cursor: pointer" onclick="decrement()">-</a>
                            <a id="counter" class="border">1</a>
                            <a class="h3" style="cursor: pointer" onclick="increment()">+</a>
                        </div>
                        <div class="col-md-2">&euro; 44.00 <span><i class="fa-solid fa-xmark close"></i></span></div>
                    </div>
                </div>


                <div class="back-to-shop"><a href="{{Route('web.prod.by.brands')}}">&leftarrow; <span class="text-muted">Back to shop</span></a>
                </div>
            </div>
            <div class="col-md-4 summary" data-aos="fade-left" data-aos-duration="1000">
                <div>
                    <h5><b>Summary</b></h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">Sub_Total</div>
                    <div class="col text-right">&euro; 132.00</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-left:0;">Shipping Price</div>
                    <div class="col text-right">&euro; 132.00</div>
                </div>

                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">&euro; 137.00</div>
                </div>
                <a href="{{Route('web.checkout')}}" class="btn checkout-btn">Go To Checkout</a>
            </div>
        </div>

    </div>
@endsection


@section('custromJs')
    <script>
        let counter = 1; // Start counter at 1 to prevent it from going below 0 initially

    function increment() {
        counter++;
        updateCounter();
    }

    function decrement() {
        if (counter > 0) {
            counter--;
            updateCounter();
        }
    }

    function updateCounter() {
        document.getElementById('counter').innerText = counter;
    }
    </script>
@endsection
