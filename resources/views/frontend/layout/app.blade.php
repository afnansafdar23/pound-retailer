<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{{asset('assets/front end/zoom-efect/xzoom.css')}}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('assets/front end/zoom-efect/xzoom.min.js')}}"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async src="//jsfiddle.net/8ECh6/embed/"></script>
    <link rel="stylesheet" href="{{asset('assets/front end/navbar-css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- CSS -->
    <!-- Bootstrap CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('assets/front end/navbar/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('assets/front end/navbar/css/material-design-iconic-font.min.css')}}">
    <!-- Plugins Import CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('assets/front end/navbar/css/import.css')}}">
    <!-- Style CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('assets/front end/navbar/style.css')}}">
    <!-- Responsive CSS
	============================================ -->




    <!-- Modernizer JS
	============================================ -->
    <link rel="stylesheet" href="  {{asset('assets/front end/navbar/css/bootstrap.min.css')}} ">
    <!-- Bootstrap CSS -->
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Poundkingdom</title>
    @yield('customCss')
</head>

<body>

    @include('frontend.layout.navbar',['parentCategories'=>$parentCategories,'childCategories'=>$childCategories])
    <div class="demo-content-area py-90">

        @yield('content')

    </div>


    @include('frontend.layout.footer')
    {{-- Footer Section --}}
    @yield('custromJs')

    <script src="{{asset('assets/front end/navbar/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- Bootstrap JS
============================================ -->
    <script src="{{asset('assets/front end/navbar/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Plugins JS
============================================ -->
    <script src="{{asset('assets/front end/navbar/js/plugins.js')}}"></script>
    <!-- Particles Active JS
============================================ -->
    <script src="js/app.js {{asset('assets/front end/navbar/js/app.js')}}"></script>
    <!-- Main JS
============================================ -->
    <script src="{{asset('assets/front end/navbar/js/main.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>