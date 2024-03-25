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

    <div class="card mt-5 mb-5 " >
    <div class="row" id="adcart">
        @include('frontend.layout.adcart')
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
    <script>
        $(document).on('click', '.increment-btn, .decrement-btn', function(event) {
    console.log('Button clicked!');
    event.preventDefault();

    // Get the ID of the session cart
    var productId = $(this).closest('.col').find('.remove').data('id');
            var newQuantity = parseInt($(this).closest('.col').find('.qty-input').val());


    // Check if the button clicked is increment or decrement, adjust the newQuantity accordingly
    if ($(this).hasClass('increment-btn')) {
        newQuantity += 1;
    } else if ($(this).hasClass('decrement-btn')) {
        newQuantity -= 1;
    }

    // Make an AJAX request to update the cart quantity
    updateCartQuantity(productId, newQuantity);
});

        function updateCartQuantity(productId, newQuantity) {
            $.ajax({
                type: 'POST',
                url: "/update-cart",
                data: {
                    id: productId,
                    quantity: newQuantity,
                    // Add any other necessary data
                },
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(response) {
                    if (response.redirect) {
                        window.location.href = response.redirect;
                    } else {
                        updateCart(response.cartSection);
                        updateaddCart(response.updatecar);
                        // Other actions...
                    }
                },
                error: function() {
                    console.log('Failed to update cart quantity');
                }


            });
        }

        function updateCart(cartHtml) {
            // Update the cart section with the new HTML content
            $('.adcart').html(cartHtml);
        }

        function updateaddCart(carhtml) {
            // Update the cart section with the new HTML content
            $('#adcart').html(carhtml);
        }
        </script>
@endsection

