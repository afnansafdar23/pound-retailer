@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
  </style>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      margin-top: 50px;
    }

    h2 {
      color: #333;
      margin-bottom: 30px;
    }

    label {
      font-weight: bold;
    }

    .card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: #007bff;
      color: #fff;
      font-weight: bold;
    }

    .card-body {
      padding: 20px;
    }

    .table th, .table td {
      border: none;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
@endsection
@section('content')

<div class="container ">
  <h2 class="text-center">Billing Detail</h2>
  <div class="row">
    <div class="col-md-8 row">
      <form action="{{route('web.payment')}}" method="post">
       @csrf
        <div class="form-row row">
          <div class="form-group col-md-6">
            <label for="inputFirstName">First Name</label>
            <input type="text" class="form-control" id="inputFirstName" placeholder="Enter First Name" name="Fname" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputLastName">Last Name</label>
            <input type="text" class="form-control" id="inputLastName" placeholder="Enter Last Name" name="Lname" required>
          </div>
        </div>
        <div class="form-row row">
          <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Enter Email"  name="email" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPhone">Phone No</label>
            <input type="tel" class="form-control" id="inputPhone" placeholder="Enter Phone No"  name="Phno" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Enter Address" name="address" required>
        </div>
        <div class="form-row row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" placeholder="Enter City"  name="city" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">State/Province</label>
            <input type="text" class="form-control" id="inputState" placeholder="Enter State/Province" name="state" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Zip Code/Postal Code</label>
            <input type="text" class="form-control" id="posatal" placeholder="Enter Zip/Postal Code" name="zipcode" required>
          </div>
        </div>

      <div class="row mt-4">
        <div class="col-md-8 offset-md-2">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="payment_method" id="Stripe" value="Stripe">
            <label class="form-check-label" for="Stripe">Stripe</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="payment_method" id="CashOnDelivry" value="CashOnDelivry">
            <label class="form-check-label" for="CashOnDelivry">Cash On delievery</label>
          </div>
          <button class="btn btn-primary" type="submit">Back to Cart</button>
        </div>
        </form>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Order Summary
        </div>
        <div class="card-body">
          <!-- Your order summary content goes here -->
          Total items:{{ count((array) session('cart')) }}

          <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Details</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
            <?php $total = 0 ?>
                                        @if(session('cart'))
                                     @foreach(session('cart') as $id => $details)
                                          <?php $total += $details['price'] * $details['quantity'] ?>
                                          @endforeach
                                          @endif
            @foreach(session('cart') as $id => $details)
                <tr>
                  <td> <img src="{{$details['photo']}}" alt="Product Image" width="50"></td>
                  <td>
                    <ul>
                      <li>Name:{{$details['name']}}</li>
                      <li><p>{{$details['dimention']}}</p></li>
                    </ul>
                  </td>
                  <td>
                    <p>{{$details['quantity']}}</p>
                  </td>
                  <td>{{$details['price']}}</td>
                </tr>
                <!-- Add more rows for additional products if needed -->
              </tbody>
          </table>
         <hr>
         <table class="table">
            <tbody>
                <tr>
                    <td>Subtotal</td>
                    <td>${{$total}}</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>${{$total}}</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$123</td>
                </tr>
                @endforeach
                <!-- Add more rows for additional pricing details if needed -->
              </tbody>
          </table>
          <button class="btn btn-primary btn-larg d-flex " type="submit">Checkout</button>
        </div>
      </div>
    </div>
  </div>


</div>




@endsection
@section('custromJs')

@endsection
