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
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
@yield('customCss')
    <style>
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


    </style>
    <title>Document</title>
</head>
<body>

    <div class="wrapper d-flex align-items-stretch">

        <nav id="sidebar">
            <div class="custom-menu"  >


        <div id="navbar1">
            <button type="button" id="check-icon" class="btn btn-primary" >
                <i class="fa fa-bars" style="color: yellow;"></i>
                <span class="sr-only">Toggle Menu</span>
              </button>
        </div>


     </div>

            <div class="p-4 pt-5">
                <div class="row col-12">
                    <h1 align="left" class="col-4"><a href="index.html" class="logo">Splash</a></h1>
                    <p class="col-6"></p>
                    <div align="right" class="col-2">
                        <input hidden="" class="check-icon btn btn-primary" id="sideBar" name="check-icon" type="checkbox">
                    <label class="icon-menu" for="sideBar">
                        <div class="bar bar--1 c" style="margin-left:12px; "><svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" id="X"><g fill="none" fill-rule="evenodd" stroke="#D9990B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="colorStroke000000 svgStroke"><path d="M13 1 1 13M1 1l12 12" fill="#d9990b" class="color000000 svgShape"></path></g></svg></div>

                    </label>

                    </div>

                </div>


        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="#">Home 1</a>
            </li>
            <li>
                <a href="#">Home 2</a>
            </li>
            <li>
                <a href="#">Home 3</a>
            </li>
            </ul>
          </li>
          <li>
              <a href="#">About</a>
          </li>
          <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="#">Page 1</a>
            </li>
            <li>
                <a href="#">Page 2</a>
            </li>
            <li>
                <a href="#">Page 3</a>
            </li>
          </ul>
          </li>
          <li>
          <a href="#">Portfolio</a>
          </li>
          <li>
          <a href="#">Contact</a>
          </li>
        </ul>

        <div class="mb-5">

                </div>



      </div>
    </nav>


    <!-- Page Content  -->
  <div id="content" >
    <nav id="navbar">
        <img src="{{asset('assets/front end/navbar-css/logo.png')}}" alt="Logo image">
    </nav>

   <div class="p-4 p-md-5 pt-5" >
    <h2 class="mb-4">Sidebar #02</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   </div>
  </div>
    </div>

    @yield('content')










    {{-- Footer Section  --}}

        <!-- Footer -->
        <footer
                class="text-center text-lg-start text-white"
                style="background-color: #1c2331; padding-top:1px;"
                >


          <!-- Section: Links  -->
          <section class="">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->

                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Products</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #7c4dff; height: 2px"
                      />
                  <p>
                    <a href="#!" class="text-white">MDBootstrap</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">MDWordPress</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">BrandFlow</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Bootstrap Angular</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Useful links</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #7c4dff; height: 2px"
                      />
                  <p>
                    <a href="#!" class="text-white">Your Account</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Become an Affiliate</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Shipping Rates</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Help</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Contact</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #7c4dff; height: 2px"
                      />
                  <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                  <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                  <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                  <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">Company name</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                    <p>
                      Here you can use rows and columns to organize your footer
                      content. Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit.
                    </p>
                  </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->
           <!-- Section: Social media -->
           <section
           class="d-flex justify-content-between p-4"
           style="background-color: #6351ce"
           >
    <!-- Left -->
    <div class="me-5 col-6 row"  >
        <p class="col-4" style="font-family: Arial, Helvetica, sans-serif; font-size:16px;">SignUp for NewsLetter:-</p> <input type="text" placeholder="Enter Email" style="height: 40px;" class="col-6"><input  class="col-2" style="height: 40px; "type="button" value="submit">
      </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

          <!-- Copyright -->
          <div
               class="text-center p-3"
               style="background-color: rgba(0, 0, 0, 0.2)"
               >
               Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://poundkingdom.co.uk" target="_blank">poundkingdom.co.uk</a>

          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->


    @yield('custromJs')

    <script src="{{asset('assets/front end/navbar-js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/front end/navbar-js/popper.js')}}"></script>
    <script src="{{asset('assets/front end/navbar-js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="{{asset('assets/front end/navbar-js/main.js')}}"></script>
</body>
</html>
