@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/front end/css/category.css')}}">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 contact-banner">
            <h1 data-aos="fade-left" data-aos-duration="1000">Delivery Information</h1>
            <h5 class="text-white" data-aos="fade-right" data-aos-duration="1000"><a href="{{Route('web.index')}}">Home</a> > Delivery</h5>
        </div>
    </div>
</div>

{{-- Delivery Info --}}
<div class="container my-4">
    <h2 class="text-center">Delivery Information</h2>
    <section class="my-3">
        <h4>1. General Information</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis, felis in hendrerit commodo, velit nisi cursus odio, ac fermentum libero lacus ut velit.</p>
    </section>

    <section class="my-3">
        <h4>2. Delivery Time</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fermentum aliquam ante, vel consequat justo facilisis in. Duis auctor ut nisi vel pellentesque.</p>
        <p>Vestibulum ac quam eu nisi convallis volutpat. Integer id consequat justo, vel interdum enim. Praesent ut justo vitae tellus placerat scelerisque vel sit amet elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod, velit a vestibulum tristique, ligula leo tincidunt sapien, vel vestibulum purus arcu ac ipsum.</p>
        <p>Phasellus feugiat augue sit amet justo efficitur, id venenatis orci dapibus. Sed vel efficitur velit. Fusce nec ipsum ut quam consectetur commodo nec id orci.</p>
    </section>

    <section class="my-3">
        <h4>3. Delivery Instructions</h4>
        <p>[You can provide special delivery instructions on the check-out page of our website.]</p>
    </section>

    <section class="my-3">
        <h4>4. Shipping Costs</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate facilisis justo, vel congue elit tincidunt at. Pellentesque vel purus id libero hendrerit fringilla in eu lacus.</p>
        <p>Vestibulum et neque sed ex accumsan vehicula non in justo. Nam accumsan augue sed ligula fermentum, non consectetur dolor scelerisque. Sed ac turpis id turpis condimentum sollicitudin.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel hendrerit purus, at tincidunt ex. Etiam vel nisi eu quam auctor sodales ut at orci.</p>
    </section>

    <section class="my-3">
        <h4>5. Damaged Items in Transport</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos voluptatibus modi quas quis.</p>
    </section>

    <section class="my-3">
        <h4>6. Questions</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget condimentum arcu, nec fermentum elit. Sed consectetur ligula a libero pellentesque, nec aliquet nunc luctus.</p>
        <p>Nulla facilisi. In hac habitasse platea dictumst. Duis eu est vel lacus tristique fermentum ac vel massa.</p>
        <p>Phasellus nec ligula vitae libero eleifend dignissim. Fusce efficitur dapibus libero, et sagittis nulla tincidunt ut. Vestibulum fringilla turpis sed nisl eleifend, id fermentum odio consectetur.</p>
        <p>Mauris vel libero nec leo euismod fermentum a non libero. Praesent dapibus, est nec scelerisque interdum, dolor nisl accumsan eros, eu vehicula metus nisi ac ex.</p>
        <p>Ut ac urna non sapien imperdiet tempus a et felis. Suspendisse tincidunt ipsum in quam cursus, in bibendum justo luctus. Suspendisse potenti. Curabitur facilisis varius ex ut gravida.</p>
    </section>
</div>
{{-- Delivery Info --}}

@endsection
