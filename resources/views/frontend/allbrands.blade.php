@extends('frontend.layout.app')
@section('customCss')
    <style>
        #more {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <h1>Retailer Brands</h1>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-md-2 col-sm-6 col-6">
                        <div class="card rounded">
                            <div class="card-image m-2">
                                <img class="img-fluid"
                                    src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Brand Name</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-6">
                        <div class="card rounded">
                            <div class="card-image m-2">
                                <img class="img-fluid"
                                    src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Brand Name</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-6">
                        <div class="card rounded">
                            <div class="card-image m-2">
                                <img class="img-fluid"
                                    src="https://images.pexels.com/photos/1142950/pexels-photo-1142950.jpeg"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Brand Name</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
