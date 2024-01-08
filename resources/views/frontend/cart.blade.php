@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/cart.css')}}">
@endsection

@section('content')
    <div class="card mb-5">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted">total selected items </div>
                    </div>
                </div>
                <div class="row border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">product name</div>
                            <div class="row">price</div>
                        </div>
                        <div class="col">

                            <a href="#" onclick="decrement()">-</a>
                            <a href="#" id="counter" class="border">1</a>
                            <a href="#" onclick="increment()">+</a>
                        </div>
                        <div class="col">&euro; 44.00 <span><i class="fa-solid fa-xmark  close"></i></span></div>
                    </div>
                </div>


                <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span>
                </div>
            </div>
            <div class="col-md-4 summary">
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
                <a href="#" class="btn checkout-btn">Go To Checkout</a>
            </div>
        </div>

    </div>
@endsection


@section('custromJs')
    <script>
        let counter = 0;

        function increment() {
            counter++;
            updateCounter();
        }

        function decrement() {
            counter--;
            updateCounter();
        }

        function updateCounter() {
            document.getElementById('counter').innerText = counter;
        }
    </script>
@endsection
