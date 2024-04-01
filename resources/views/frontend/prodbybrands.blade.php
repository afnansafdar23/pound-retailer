@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/front end/css/category.css')}}">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 contact-banner">
            <h1 data-aos="fade-left" data-aos-duration="1000">Product by Brand</h1>
            <h5 class="text-white" data-aos="fade-right" data-aos-duration="1000"><a href="{{Route('web.index')}}">Home</a> > Brand</h5>
        </div>
    </div>
</div>

<div class="container container_pro">
    <div class="row justify-content-center">
@forelse ($prodByBrands as $productByBrand)
    <div class="col-lg-3">
        <div class="card">
            <div class="imgBx corsor">
                <img onclick="window.location.href='{{ route('web.prod.detail', $productByBrand->id) }}'" src="{{$productByBrand->getFirstMediaUrl('product.image')}}"
                    alt="">
                <ul class="action">

                    <li><i class="fa-solid fa-eye " onclick="window.location.href='{{ route('web.prod.detail', $productByBrand->id) }}'"></i>
                        <span>view detail</span>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="productname text-center">
                    <h3  class="corsor" onclick="window.location.href='{{ route('web.prod.detail', $productByBrand->id) }}'">{{$productByBrand['name']}}</h3>
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
