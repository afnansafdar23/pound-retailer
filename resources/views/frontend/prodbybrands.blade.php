@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/front end/css/category.css')}}">
@endsection

@section('content')
<div class="container container_pro">
    <div class="row justify-content-center">
@forelse ($prodByBrands as $productByBrand)
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
