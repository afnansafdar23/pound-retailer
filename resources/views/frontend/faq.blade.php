@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 contact-banner">
            <h1 data-aos="fade-left" data-aos-duration="1000">Frequently Asked Question</h1>
            <h5 class="text-white" data-aos="fade-right" data-aos-duration="1000"><a href="{{Route('web.index')}}">Home</a> > FAQ</h5>
        </div>
    </div>
</div>

    <div class="container mt-5 mb-5">
        <div class="row" data-aos="fade-left" data-aos-duration="1000">
            <div class="col-12 text-center">
                <h2>Frequently Asked Questions</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="accordion" id="accordionExampleLeft">
                    <div class="accordion-item">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Section 1
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExampleLeft">
                                <div class="card-body">
                                    Content for Section 1 goes here.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add more accordion items as needed -->

                </div>
            </div>

            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="accordion" id="accordionExampleRight">
                    <div class="accordion-item">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Section 2
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExampleRight">
                                <div class="card-body">
                                    Content for Section 2 goes here.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add more accordion items as needed -->

                </div>
            </div>
        </div>

    </div>
@endsection


@section('custromJs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
