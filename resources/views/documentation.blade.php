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

            .document {
                display: flex;
                flex-direction: column;
                margin: 0 15px;
                padding: 20px;
                background-color: lightgray;
            }

            .document p {
                margin: 25px 0;
            }
        </style>
        <title>Laravel - Documentation</title>
    </head>
    <body>
        @include('partials.header')
        <main>
            <div class="title">
                <h1>The PHP Framework for Web Artisans</h1>
            </div>
            <div class="content">
                @foreach ($documents as $item)
                    <div class="document">
                        <h2>{{$item["name"]}}</h2>
                        <p>{{$item["text"]}}</p>
                        <a href="">{{$item["url"]}}</a>
                    </div>
                @endforeach
            </div>
        </main>
    </body>
</html>