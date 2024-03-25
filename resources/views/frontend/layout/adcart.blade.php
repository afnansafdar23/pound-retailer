
            <div class="col-md-8 cart" >
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted">Total Selected Items </div>
                    </div>
                </div>
                <div class="row border-bottom cart_box">
                <?php $total = 0; ?>
                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        <?php $total += $details['price'] * $details['quantity']; ?>
                    <div class="row main">
                        <div class="col-2 cart-image"><img src="{{ $details['photo'] }}" class="img-fluid"></div>
                        <div class="col-md-2">
                            <div class="row text-muted">{{ $details['name'] }}</div>
                            <div class="row">{{ $details['price'] }}</div>
                        </div>
                        <div class="col">
                            <button class="remove" style="display: hidden;" data-id="{{ $id }}"></button>
                            <button
                            type="button" class="h3 btn btn-small btn-danger fw-bold decrement-btn" style="cursor: pointer" >-</button>
                            <input id="counter" class="border qty-input " style="display: inline; width:50px;" value="{{ $details['quantity'] }}">
                            <button type="button" class="h3 btn btn-small btn-success fw-bold increment-btn" style="cursor: pointer" >+</button>
                        </div>
                        <div class="col-md-3 ">&euro; ${{ $details['price'] * $details['quantity'] }} &emsp;  <button  class="remove-from-cart b-danger btn-danger" data-id="{{ $id }}" style="display: inline; background-color:#DC3545; border-radius:5px; width:30px; color:white;"><i class="fa-solid fa-xmark close"></i></button></div>
                    </div>

                    @endforeach
                    @endif
                </div>


                <div class="back-to-shop"><a href="{{Route('web.prod.by.brands')}}">&leftarrow; <span class="text-muted">Back to shop</span></a>
                </div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5><b>Summary</b></h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">Sub_Total</div>
                    <div class="col text-right">&euro; {{$total}}</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-left:0;">Shipping Price</div>
                    <div class="col text-right">&euro; {{$total}}</div>
                </div>

                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">&euro;{{$total}}</div>
                </div>
                <a href="{{Route('web.checkout')}}" class="btn checkout-btn">Go To Checkout</a>
            </div>

