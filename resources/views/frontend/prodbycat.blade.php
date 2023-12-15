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
    <style>
        .container_pro {
            position: relative;
            width: 1200px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
            padding: 20px;
        }

        .container_pro .card {
            width: 100%;
            background: white;
        }

        .container_pro .card .imgBx {
            position: relative;
            width: 100%;
            height: 310px;
            overflow: hidden;
        }

        .container_pro .card .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s ease-in-out;
            transform-origin: right;
        }

        .container_pro .card:hover .imgBx img {
            transform: scale(1.5);
        }

        .action {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .action li {
            position: relative;
            list-style: none;
            width: 40px;
            color: white;
            /* background-color: white; */
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 4px;
            cursor: pointer;
            transition: transform 0.5s;
            transform: translateX(60px);
        }

        .action li:nth-child(2) {
            transition-delay: 0.15s;
        }

        .action li:nth-child(3) {
            transition-delay: 0.3s;
        }

        .container_pro .card:hover .action li {
            transform: translateX(0px);
        }

        .action li:hover {

            color: red;
        }

        .action li span {
            position: absolute;
            right: 50px;
            top: 50%;
            transform: translateY(50%);
            white-space: nowrap;
            padding: 4px 60px;
            background-color: white;
            color: #333;
            font-weight: 500;
            font-size: 12px;
            border-radius: 4px;
            pointer-events: none;
            opacity: 0;
            transition: 0.5s;
        }

        .action li:hover span {
            transform: translateY(-50%), translateX(0);
            opacity: 1;
        }

        .action li span::before {
            content: "";
            position: absolute;
            top: 50%;
            right: -4px;
            width: 8px;
            height: 8px;
            background: red;
            transform: translateY(-50%) rotate(45deg);
        }

        .container_pro .card .content {
            padding: 10px;
        }

        .container_pro .card .content .productname h3 {
            font-size: 18px;
            font-weight: 500;
            color: #333;
            margin: 5px 0;
        }

        .container_pro .card .content .price_rating {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container_pro .card .content .price_rating h2 {
            font-size: 20px;
            color: red;
            font-weight: 500;
        }

        .container_pro .card .content .price_rating .fa-solid {
            color: yellow;
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

    <!-- product section -->
    <div class="container container_pro">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="card">
                    <div class="imgBx">
                        <img src="https://media.istockphoto.com/id/1440458000/photo/young-girl-with-hands-near-skin-face.webp?b=1&s=170667a&w=0&k=20&c=vXSG4-x3jbQEqD_l9nwpqdWjAMsmcJjHt6LFAQ2vIDc="
                            alt="">
                        <ul class="action">
                            <li><i class="fa-solid fa-heart"></i>
                                <span>add to whishlist</span>
                            </li>
                            <li><i class="fa-solid fa-eye"></i>
                                <span>view detail</span>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <div class="productname text-center">
                            <h3>name</h3>
                        </div>
                        <div class="price_rating">
                            <h2>000</h2>
                            <div class="ratings">
                                <p><span class="badge bg-success"><i class="fa-solid fa-check"></i> In Stock</span>
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product section -->

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
