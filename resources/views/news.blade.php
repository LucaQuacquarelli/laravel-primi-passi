<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            main {
                display: flex;
                flex-direction: column;
                align-items: center;
                height: calc(100vh - 100px);
            }

            .title {
                margin: 20px 0;
                color: #ff291a;
            }

            .content {
                display: flex;
                margin: 20px 0;
            }

            .news {
                display: flex;
                flex-direction: column;
                margin: 0 15px;
                padding: 20px;
                background-color: lightgray;
            }

            .news p {
                margin: 25px 0;
            }
        </style>
        <title>Laravel - News<</title>
    </head>
    <body>
        @include('partials.header')
        <main>
            <div class="title">
                <h1>Laravel - News</h1>
            </div>
            <div class="content">
                @foreach ($news as $item)
                    <div class="news">
                        <h2>{{$item["name"]}}</h2>
                        <p>{{$item["text"]}}</p>
                        <a href="">{{$item["url"]}}</a>
                    </div>
                @endforeach
            </div>
        </main>
    </body>
</html>