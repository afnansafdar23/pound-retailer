@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/allblogcss/css/style.css')}}">
@endsection



@section('content')

<main>

    <!--
      - #HERO SECTION
    -->







    <div class="main">

      <div class="container">

        <!--
          - BLOG SECTION
        -->

        <div class="blog">

          <h2 class="h2">Latest Blog Post</h2>

          <div class="blog-card-group">

            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-1.png" alt="Building microservices with Dropwizard, MongoDB & Docker"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3>
                  <a href="#" class="h3">
                    Building microservices with Dropwizard, MongoDB & Docker
                  </a>
                </h3>

                <p class="blog-text">
                  This NoSQL database oriented to documents (by documents like JSON) combines some of the features from
                  relational
                  databases, easy to use and the multi-platform is the best option for scale up and have fault
                  tolerance, load balancing,
                  map reduce, etc.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia Walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2022-01-17">Jan 17, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-2.png" alt="Fast web page loading on a $20 feature phone" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Web Performance</button>

                <h3><a href="" class="h3">Fast web page loading on a $20 feature phone</a></h3>

                <p class="blog-text">
                  Feature phones are affordable (under $20-25), low-end devices enabling 100s of millions of users in
                  developing countries
                  to leverage the web. Think of them as a light version of a smart phone.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-12-10">Dec 10, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT2M">2 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-3.png" alt="Accessibility Tips for Web Developers" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Accessibility</button>

                <h3><a href="" class="h3">Accessibility Tips for Web Developers</a></h3>

                <p class="blog-text">
                  It's awesome to build sites that are inclusive and accessible to everyone. There are at least six key
                  areas of
                  disability we can optimize for: visual, hearing, mobility, cognition, speech and neural. Many tools
                  and resources can
                  help here, even if you're totally new to web accessibility.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-11-28">Nov 28, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-4.png" alt="Dynamically Securing Databases using Hashicorp Vault"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3><a href="" class="h3">Dynamically Securing Databases using Hashicorp Vault</a></h3>

                <p class="blog-text">
                  Nowadays, it's hard to profoundly talk about security in the IT industry, since it has to be
                  considered on so many
                  different levels: from securing code chunks, securing containers, up to securing complex
                  infrastructures and defining
                  strong authorization and authentication policies across the enterprise.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-11-20">Nov 20, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-5.png"
                  alt="Adaptive Loading - Improving Web Performance on low-end devices" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Web Performance</button>

                <h3><a href="" class="h3">Adaptive Loading - Improving Web Performance on low-end devices</a></h3>

                <p class="blog-text">
                  Adaptive Loading: Do not just respond based on screen size, adapt based on actual device hardware.
                  Any user can have a slow experience. In a world with widely varying device capabilities, a "one-size"
                  fits all
                  experience may not always work. Sites that delight users on high-end devices can be unusable on
                  low-end ones,
                  particularly on median mobile and desktop hardware and in emerging markets.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-11-10">Nov 10, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-6.png"
                  alt="Don't Develop Just for Yourself - A Developer's Checklist to Accessibility" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Accessibility</button>

                <h3><a href="" class="h3">Don't Develop Just for Yourself - A Developer's Checklist to Accessibility</a>
                </h3>

                <p class="blog-text">
                  We, as developers, tend to develop sites unconsciously for people like ourselves. If we don't actively
                  pay attention,
                  the sites are often accessible only for certain types of people: Sighted mouse-users, who have good
                  fine motor skills
                  and are good at using computers.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-10-25">Oct 25, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT7M">7 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-7.png"
                  alt="Building a Restful CRUD API with Node JS, Express, and MongoDB" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3><a href="" class="h3">Building a Restful CRUD API with Node JS, Express, and MongoDB</a></h3>

                <p class="blog-text">
                  Application Programming Interface is the abbreviation for API. An API is a software interface that
                  enables two apps to
                  communicate with one another. In other words, an API is a messenger that sends your request to the
                  provider and then
                  returns the response to you.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-10-15">Oct 15, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT5M">5 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-8.png" alt="Monitoring Performance with the PageSpeed Insights API"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Web Performance</button>

                <h3><a href="" class="h3">Monitoring Performance with the PageSpeed Insights API</a></h3>

                <p class="blog-text">
                  The PageSpeed Insights API provides free access to performance monitoring for web pages and returns
                  data with
                  suggestions for how to improve. The V5 API includes lab data from Lighthouse and real-world data from
                  the Chrome User
                  Experience Report (CrUX).
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-10-03">Oct 3, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT5M">5 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-9.png" alt="The best web accessibility tools for developers in 2021"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Accessibility</button>

                <h3><a href="" class="h3">The best web accessibility tools for developers in 2021</a>
                </h3>

                <p class="blog-text">
                  The quality of the tools you use defines the speed with which you can diagnose and resolve problems.
                  Each year the landscape changes dramatically in web technologies, and of late the tooling for
                  accessibility is no
                  exception.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-09-13">Sep 13, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT7M">7 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-10.png"
                  alt="How to connect a React frontend with a NodeJS/Express backend" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3><a href="" class="h3">How to connect a React frontend with a NodeJS/Express backend</a></h3>

                <p class="blog-text">
                  The MERN (MongoDB, Express, React, NodeJS) stack is very popular for making full stack applications,
                  utilizing
                  Javascript for both the backend and frontend as well as a document-oriented or non relational database
                  (MongoDB),
                  meaning that it's structured like JSON rather than a large excel sheet like SQL databases are.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-09-21">Sep 21, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>

          </div>

          <button class="btn load-more">Load More</button>

        </div>





        <!--
          - ASIDE
        -->

        <div class="aside">





          <div class="contact">

            <h2 class="h2">Let's Talk</h2>

            <div class="wrapper">

              <p>
                Do you want to learn more about how I can help your company overcome problems? Let us have a
                conversation.
              </p>

              <ul class="social-link">

                <li>
                  <a href="#" class="icon-box discord">
                    <ion-icon name="logo-discord"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

              </ul>

            </div>

          </div>



        </div>

      </div>

    </div>

  </main>
@endsection



@section('custromJs')
@endsection
