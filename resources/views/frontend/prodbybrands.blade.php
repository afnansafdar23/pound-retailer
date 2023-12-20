@extends('frontend.layout.app')
@section('customCss')
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
@endsection

@section('content')
<div class="container container_pro">
    <div class="row justify-content-center">
@forelse ($productByBrands as $productByBrand)
    <div class="col-lg-3">
        <div class="card">
            <div class="imgBx">
                <img src="{{$productByBrand->getFirstMediaUrl('product.image')}}"
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
                    <h3>{{$productByBrand['name']}}</h3>
                </div>
                <div class="price_rating">
                    <h2>{{$productByBrand['price']?$productByBrand['price']:$productByBrand['discounted_price']}}</h2>
                    <div class="ratings">
                        <p>
                        @if ($productByBrand['availability']=='on')
                            <span class="badge bg-success"><i class="fa-solid fa-check"></i> In Stock</span>
                        @else
                            <span class="badge bg-danger"><i class="fa-regular fa-circle-exclamation"></i> Out of Stock</span>
                        @endif
                        <p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty
<h3 class="text-center">No Products Found Related to this Brand !</h3>
@endforelse
    </div>
</div>
@endsection
