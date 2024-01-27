@extends('frontend.layout.app')
@section('customCss')
    <link rel="stylesheet" href="{{ asset('assets/front end/allblogcss/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        .blog-banner{
        background-image: url('/assets/media/stock/1600x800/img-2.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        font-weight: 700;
        height: 52vh;
        }

        .blog-banner h1, .blog-banner a{
            color: #ffb207;
            text-shadow: 2px 2px #051937;
        }
        img{
            cursor: pointer;
        }
    </style>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 blog-banner">
                <h1>All Blogs</h1>
                <h5 class="text-white"><a href="{{Route('web.index')}}">Home</a> > Blogs</h5>
            </div>
        </div>
    </div>

    <main>
        <div class="main">
            <div class="container">
                <div class="blog">
                    <h2 class="h2">Latest Blog Post</h2>
                    <div class="blog-card-group">
                       @forelse($blogs as $blog)
                           <div class="blog-card">
                            @php
                            $averageReadingSpeed = 225; // Adjust this value based on your estimation
                            $wordCount = str_word_count(strip_tags($blog['content']));
                            $readingTime = max(1, ceil($wordCount / $averageReadingSpeed));
                            @endphp
                                <div class="blog-card-banner">
                                    <a href="{{ route('web.blog', $blog->id) }}">
                                        <img src="{{$blog->getFirstMediaUrl('blog.image')}}" alt="{{$blog['title']}}" width="250"
                                        class="blog-banner-img">
                                    </a>
                                </div>
                                <div class="blog-content-wrapper">
                                    <h3>
                                        <a href="{{ route('web.blog', $blog->id) }}" class="h3">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($blog['title']), 30, '...') }}
                                        </a>
                                    </h3>
                                    <p class="blog-text">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($blog['description']), 100, '...') }}
                                    </p>
                                    <div class="wrapper-flex">
                                        <div class="wrapper">
                                            <p class="text-sm">
                                                <time datetime="d-m-y">{{$blog->updated_at->format('d-m-y')}}</time>
                                                <span class="separator"></span>
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="PT3M">{{ $readingTime }} minute{{ $readingTime > 1 ? 's' : '' }}</time>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h2 class="text-center">No blogs are shown here</h2>
                            @endforelse
                    </div>
                </div>
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
