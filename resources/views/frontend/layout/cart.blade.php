<a href="#" data-bs-toggle="dropdown" class="mini-cart-btn"><span><i
                            class="zmdi zmdi-shopping-cart"></i><span class="cart-number">{{ count((array) session('cart')) }}</span></span></a>
                <div class="mini-cart dropdown-menu right">
                <?php $total = 0    ?>


                @foreach((array) session('cart') as $id =>$detail)
                <?php $total += $detail['price'] * $detail['quantity'] ?>
                @endforeach

                @if(session('cart'))

@foreach(session('cart') as $id => $details)
                    <div class="mini-cart-product fix">

                        <div class="content fix">
                        <img src="{{ $details['photo'] }}" class="img-fluid" width="60px" height="60px">
                            <a href="#" class="title">{{ $details['name'] }}</a>
                            <p>dimention: {{ $details['dimention'] }}</p>
                            <p>Qty: {{ $details['quantity'] }}</p>
                            <button class="remove remove-from-cart" data-id="{{ $id }}"><i class="zmdi zmdi-close"></i></button>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    <div class="mini-cart-checkout text-center">
                    <a href="{{ url('/check-out') }}" >Checkout</a>
                    </div>
                </div>
