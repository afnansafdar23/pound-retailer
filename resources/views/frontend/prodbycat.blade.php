@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/category.css')}}">
@endsection
@section('content')
<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-12">
            <h1>{{$parentCategory['name']}}</h1>
            <p>{{$parentCategory['description']}}</p>
            <span id="dots"></span>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" id="more">
                        <h3>{{$parentCategory['sub_name']}}</h3>
                        <p>{{$parentCategory['sub_description']}}</p>
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
                    @foreach ($childByParentCat as $childCategory)
                    <div class="col-md-2 col-sm-6 col-6">
                        <div class="card border-0">
                            <img src="{{$childCategory->getFirstMediaUrl('childCategory.image')}}"
                                class="rounded-circle" alt="{{$childCategory['name']}}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{$childCategory['name']}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
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
