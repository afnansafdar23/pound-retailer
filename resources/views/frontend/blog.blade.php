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
        <h1>HEading Lorem from admin</h1>
    </header>

    <main>

        <article>
            <h2>HEading Lorem from admin</h2>

            <img src="{{ asset('assets/images/blog/3.webp') }}" alt="Blog Post Image" class="img-fluid">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis animi aperiam incidunt architecto itaque,
                quidem soluta corporis placeat asperiores. Fugit corporis minus molestiae dolore eaque, sed nemo placeat
                deleniti voluptas! Similique rem totam libero rerum, quidem tempora, eum eius voluptatibus eos excepturi
                iure nulla minima nemo repellat, consequuntur ducimus aliquam blanditiis sunt a quas sint? Modi voluptatem
                sunt quae soluta doloribus? Facere, quibusdam impedit quo suscipit enim velit quam vero deserunt, cumque
                nulla nam, sit tempora nostrum veniam consectetur ullam voluptates neque fugiat possimus reiciendis aliquid
                ratione hic! Error unde excepturi molestias est, recusandae nisi voluptatibus deserunt enim iusto dolor?</p>
            <h3>Heading lorem</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit sapiente qui, numquam eum quas
                facilis, amet dolore dicta repellat vero esse mollitia deleniti, sunt ad! Adipisci quae rem, iste facilis
                neque facere id molestiae, sed quasi earum enim accusantium nostrum libero, nobis consequuntur consectetur.
                Ipsam nobis iusto quasi dolore consectetur id pariatur ratione sed reiciendis modi? Ex, aliquid labore
                voluptates similique maxime tempora in non eos. Modi sed rem sit?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste natus quia illum cum facere soluta aut
                incidunt alias perferendis assumenda ipsum similique consequuntur ad dignissimos repudiandae minus
                praesentium unde earum, nemo rem! Iure optio porro deleniti, assumenda officia quibusdam consequatur
                impedit, saepe, illo itaque sapiente voluptate. Consequatur amet inventore necessitatibus.
            </p>
            <br>





        </article>

        <!-- Add more articles as needed -->

    </main>
@endsection
{{-- custom js --}}
@section('custromJs')
@endsection
