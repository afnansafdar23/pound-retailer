@extends('frontend.layout.app')
@section('customCss')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .accordion-item {
            margin-bottom: 10px;
        }

        .accordion-item .card {
            border: 1px solid #dee2e6;
            border-radius: 8px;
        }

        .accordion-item .card-header {
            background-color: #a88532;
            color: #fff;
            border-radius: 8px;
        }

        .accordion-item .card-header:hover {
            background-color: #0056b3;
        }

        .accordion-item .btn-link {
            color: #fff;
            text-decoration: none;
        }

        .accordion-item .card-body {
            border-top: 1px solid #dee2e6;
            border-radius: 0 0 8px 8px;
        }
    </style>
@endsection



@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Frequently Asked Questions</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
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

            <div class="col-md-6">
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
