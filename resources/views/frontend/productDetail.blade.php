@extends('frontend.layout.app')
@section('customCss')
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js"
    integrity="sha512-XFd1m0eHgU1F05yOmuzEklFHtiacLVbtdBufAyZwFR0zfcq7vc6iJuxerGPyVFOXlPGgM8Uhem9gwzMI8SJ5uw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/css/mdb.min.css"
    integrity="sha512-hj9rznBPdFg9A4fACbJcp4ttzdinMDtPrtZ3gBD11DiY3O1xJfn0r1U5so/J0zwfGOzq9teIaH5rFmjFAFw8SA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
@endsection
@section('content')
<!-- content -->
<section class="py-5">
    <div class="container">
        <div class="row gx-5">
            <aside class="col-lg-6">
                <div class="border rounded-4 mb-3 d-flex justify-content-center">
                    <div data-fslightbox="mygalley" class="rounded-4" data-type="image">
                        <img style="height: 80vh; margin: auto;" class="rounded-4 fit"
                            src="{{$product->getFirstMediaUrl('product.image')}}" />
                    </div>
                </div>
            </aside>
            <main class="col-lg-6">
                <div class="ps-lg-3">
                    <h4 class="title text-dark">
                        {{$product['name']}}
                    </h4>
                    <div class="d-flex flex-row my-3">
                        <div class="text-warning mb-1 me-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="ms-1">
                                4.5
                            </span>
                        </div>
                        <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
                        @if ($product['availability']=='on')
                        <span class="text-success ms-2">In stock</span>
                        @else
                        <span class="text-danger ms-2">Out of stock</span>
                        @endif
                    </div>

                    <div class="mb-3 d-grid">
                        @if (isset($product['availability']))
                        <span class="h5">$ {{$product['discounted_price']}}</span>
                        <div class="d-flex gap-1">
                            <h5>Retail Price : </h5><span class="text-muted"><del>{{$product['price']}} $</del></span>
                            <span
                                class="badge rounded-pill bg-success badge-sm d-flex align-items-center">{{number_format((($product['price']
                                -
                                $product['discounted_price']) /
                                $product['price']) *
                                100)}} % OFF</span>
                        </div>
                        @else
                        <span class="h5">{{$product['price']}}</span>
                        @endif
                    </div>

                    <p>
                        {{$product['description']}}
                    </p>

                    <div class="row">
                        <dt class="col-3">Category:</dt>
                        <dd class="col-9">
                            {{$product->sub_category_id ? $product->subCategory->name : $product->childCategory->name}}
                        </dd>

                        <dt class="col-3">SKU:</dt>
                        <dd class="col-9">{{$product['sku']}}</dd>

                        <dt class="col-3">Brand</dt>
                        <dd class="col-9">{{$product->brand->name}}</dd>
                    </div>

                    <hr />

                    <div class="row mb-4">
                        <div class="col-md-4 col-6 mb-3">
                            <label class="mb-2 d-block">Quantity</label>
                            <div class="input-group mb-3" style="width: 170px;">
                                <button class="btn btn-white border border-secondary px-3" type="button" id="decrementButton" data-mdb-ripple-color="dark">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input style="margin-right: 5px;" type="number" class="form-control text-center border border-secondary" value="1" aria-label="Example text with button addon" aria-describedby="button-addon1" id="quantityInput" inputmode="numeric"/>
                                <button class="btn btn-white border border-secondary px-3" type="button" id="incrementButton" data-mdb-ripple-color="dark">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-warning shadow-0" onclick="window.location.href='{{ route('web.checkout') }}'"> Buy now </a>
                    <a class="btn btn-primary shadow-0 add-to-cart" data-product-id="{{ $product->id }}"> <i class="me-1 fa fa-shopping-basket " ></i> Add to cart
                    </a>
                    <a class="fa-solid fa-heart text-danger fa-2xl" onclick="window.location.href='{{ route('web.wish') }}'"></a>
                </div>
            </main>
        </div>
    </div>
</section>
<!-- content -->
<section class="bg-light border-top py-4">
    <div class="container">
        <div class="row gx-4">
            <div class="col-lg-8 mb-4">
                <div class="border rounded-2 px-3 py-2 bg-white">
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3 text-black" id="ex1" role="tablist">
                        <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100 active"
                                id="ex1-tab-1" data-bs-toggle="pill" href="#ex1-pills-1" role="tab"
                                aria-controls="ex1-pills-1" aria-selected="true">Key Features</a>
                        </li>
                        <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-2"
                                data-bs-toggle="pill" href="#ex1-pills-2" role="tab" aria-controls="ex1-pills-2"
                                aria-selected="false">Details</a>
                        </li>
                        <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-3"
                                data-bs-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3"
                                aria-selected="false">Dimensions</a>
                        </li>
                        {{-- <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-4"
                                data-bs-toggle="pill" href="#ex1-pills-4" role="tab" aria-controls="ex1-pills-4"
                                aria-selected="false">Brand Info</a>
                        </li> --}}
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content" id="ex1-content">
                        <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel"
                            aria-labelledby="ex1-tab-1">
                            <div class="col-12">
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fas fa-check text-success me-2"></i>{{$product['features']}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade mb-2" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                            <p>{{$product['description']}}</p>
                        </div>
                        <div class="tab-pane fade mb-2" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                            <table class="table border mt-3 mb-2">
                                <tr>
                                    <th class="py-2">Height:</th>
                                    <td class="py-2">{{$product['product_height']}} inch</td>
                                </tr>
                                <tr>
                                    <th class="py-2">Width:</th>
                                    <td class="py-2">{{$product['product_width']}} inch</td>
                                </tr>
                                <tr>
                                    <th class="py-2">Length:</th>
                                    <td class="py-2">{{$product['product_length']}} inch</td>
                                </tr>
                                <tr>
                                    <th class="py-2">Weight</th>
                                    <td class="py-2">{{$product['product_weight']}} Kg</td>
                                </tr>
                            </table>
                        </div>
                        {{-- <div class="tab-pane fade mb-2" id="ex1-pills-4" role="tabpanel"
                            aria-labelledby="ex1-tab-4">
                            <div class="row align-items-center">
                                <img src="{{$brandInfo>getFirstMediaUrl('brand.image')}}" alt="">
                                <h3>{{$brandInfo->title}}</h3>
                            </div>
                            <p>{{$brandInfo['description']}}</p>
                        </div> --}}
                    </div>
                    <!-- Pills content -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-0 border rounded-2 shadow-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Similar items</h5>
                            @foreach ($relatedProducts as $relatedProduct)
                            <div class="d-flex mb-3">
                                <a href="{{route('web.prod.detail',$relatedProduct['id'])}}" class="me-3">
                                    <img src="{{$relatedProduct->getFirstMediaUrl('product.image')}}"
                                        style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                </a>
                                <div class="info">
                                    <a href="{{route('web.prod.detail',$relatedProduct['id'])}}" class="nav-link mb-1">
                                        {{$relatedProduct['name']}} <br />
                                        {{$relatedProduct['availability'=='on'?'<span
                                            class="badge badge-sm text-success">InStock</span>':'<span
                                            class="badge badge-sm text-danger">Out of Stock</span>']}}
                                    </a>
                                    <strong class="text-dark"> ${{$relatedProduct['price']}}</strong>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('custromJs')
<script>
    // Wait for the document to fully load
    document.addEventListener("DOMContentLoaded", function() {
        // Get elements
        const decrementButton = document.getElementById('decrementButton');
        const incrementButton = document.getElementById('incrementButton');
        const quantityInput = document.getElementById('quantityInput');

        // Add click event listeners
        decrementButton.addEventListener('click', () => {
            decrementQuantity();
        });

        incrementButton.addEventListener('click', () => {
            incrementQuantity();
        });

        // Function to decrement quantity
        function decrementQuantity() {
            let currentQuantity = parseInt(quantityInput.value, 10);
            if (!isNaN(currentQuantity) && currentQuantity > 0) {
                quantityInput.value = currentQuantity - 1;
            }
        }

        // Function to increment quantity
        function incrementQuantity() {
            let currentQuantity = parseInt(quantityInput.value, 10);
            if (!isNaN(currentQuantity)) {
                quantityInput.value = currentQuantity + 1;
            }
        }
    });
</script>
@endsection
