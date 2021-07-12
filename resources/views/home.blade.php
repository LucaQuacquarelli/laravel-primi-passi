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
                justify-content: center;
                align-items: center;
                height: calc(100vh - 100px);
            }

            .title {
                margin: 20px 0;
                color: #ff291a;
                font-size: 50px;
            }
        </style>
        <title>Laravel Primi Passi</title>
    </head>
    <body>
        {{-- <h1>HELLO WORLD</h1> --}}
        @include('partials.header')
        <main>
            <div class="title">
                {{-- <h1>The PHP Framework for Web Artisans</h1> --}}
                <h1>Laravel welcomes you </h1>
            </div>
            <div class="button">
                <a href="documentation" class="btn">Documentation</a>
            </div>
        </main>
    </body>
</html>