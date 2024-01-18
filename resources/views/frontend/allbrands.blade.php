@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
<style>
    #more {
        display: none;
    }
</style>
@endsection
@section('content')
    
<div class="container-fluid">
    <div class="row">
        <div class="col-12 contact-banner">
            <h1>Brands</h1>
            <h5 class="text-white"><a href="{{Route('web.index')}}">Home</a> > Brands</h5>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <h2>Retailer Brands</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum,
                nisi lorem egestas vitae scel
            </p>
            <span id="dots"></span>
            <p id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor
                vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum
                dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus
                gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor
                porta.</span></p>
            <button onclick="myFunction()" id="myBtn">Read more-></button>
        </div>
    </div>
</div>

<div class="container-fluid mb-3">
    <div class="row justify-content-center gy-3">
        @foreach ($brands as $brand)
        <div class="col-md-2 col-6">
            <div class="card rounded">
                <div class="card-image m-2">
                    <img class="img-fluid" src="{{$brand->getFirstMediaUrl('brand.image')}}" alt="{{$brand['name']}}" />
                </div>
                <div class="card-body text-center">
                    <div class="ad-title m-auto">
                        <h5>{{$brand['name']}}</h5>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
{{-- custom js --}}
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