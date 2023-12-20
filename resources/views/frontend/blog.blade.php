@extends('frontend.layout.app')
@section('customCss')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {

            color: black;
            text-align: center;
            padding: 20px;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        article {
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #666;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection
@section('content')
    <header>
        <h1>{{$blog['title']}}</h1>
    </header>

    <main>

        <article>

            <img src="{{ $blog->getFirstMediaUrl('blog.image')}}" alt="Blog Post Image" class="img-fluid">
            <p>{{$blog['description']}}</p>
            <h3>{{$blog['second_title']}}</h3>
            <p>{{$blog['second_description']}}</p>
            <br>
            <h3>{{$blog['third_title']}}</h3>
            <p>{{$blog['third_description']}}</p>
            <br>
            <h3>{{$blog['forth_title']}}</h3>
            <p>{{$blog['forth_description']}}</p>
            <br>
            <h3>{{$blog['fifth_title']}}</h3>
            <p>{{$blog['fifth_description']}}</p>
            <br>
        </article>
        <!-- Add more articles as needed -->
    </main>
@endsection
