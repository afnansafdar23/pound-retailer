<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/front end/navbar-css/style.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">


<link rel="stylesheet" href="  {{asset('assets/front end/nav-fonts/icomoon/style.css')}} ">



<!-- Bootstrap CSS -->
<link rel="stylesheet" href=" {{asset('assets/front end/navbar-css/bootstrap.min.css')}} css/bootstrap.min.css">

<!-- Style -->
<link rel="stylesheet" href="css/style.css">

    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");

         #navbar {
            width: 100%;
            height: 100px;

          ;
            background-color: #6f42c1;
        }

        #navbar img {
            display: block;
            width: 200px;
            height: 80px;
            margin: auto;

        }
        .icon-menu {
  --gap: 5px;
  --height-bar: 2.5px;
  --pos-y-b\ar-one: 0;
  --pos-y-bar-three: 0;
  --scale-bar: 1;
  --rotate-bar-one: 0;
  --rotate-bar-three: 0;
  width: 25px;
  display: flex;
  flex-direction: column;
  gap: var(--gap);
  cursor: pointer;
  position: relative;
}

svg{

 background-color:

}

@media only screen and (max-width: 767px) {

    #logoimg{
        margin-left: 230px;
    }
    #nav-cart{
    margin-left:100px;
    display: flex;
    flex-direction: column;
}
}
@media only screen and (max-width: 640px) {

#logoimg{
    margin-left: 180px;
}
#nav-cart{
    margin-left:80px;
}

}
@media only screen and (max-width: 590px) {

#logoimg{
    margin-left: 100px;
    width: 130px
}
#nav-cart{
    margin-left:7px;
}

}




    </style>
    <title>Poundkingdom</title>
    @yield('customCss')
</head>
<body>

  @include('frontend.layout.navbar')

   <div class=" p-0" >
    <div class=" d-flex justify-content-space-center bg-danger" style="height: 150px; position:sticky; top:0; z-index:100; width:100%;" >
       <div class="col-md-4"></div>
       <div class="col-md-1"></div>
        <img id="logoimg" class="col-md-2"  src="{{asset('assets/front end/image1-2.jpg')}}"  width="200px" height="100px">
        <div class="col-md-2"></div>
        <div id="nav-cart"  class="col-2 row  pt-3 pl-2">
            <h5 class="col-6"> dash</h5>
            <h5 class="col-6">Addcart</h5>

        </div>
    </div>

    @yield('content')




</div>
@include('frontend.layout.footer')
  </div>

    </div>
    {{-- Footer Section  --}}




    @yield('custromJs')

    <script src="{{asset('assets/front end/navbar-js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/front end/navbar-js/popper.js')}}"></script>
    <script src="{{asset('assets/front end/navbar-js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/front end/navbar-js/main.js')}}"></script>

</body>
</html>
