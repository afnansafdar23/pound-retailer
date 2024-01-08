@extends('frontend.layout.app')
@section('customCss')
    <link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
    </main>
@endsection
