@php
    $links = [
    [
        "name" => "HOME",
        "url" => "home"
    ],
    [
        "name" => "DOCUMENTATION",
        "url" => "documentation"
    ],
    [
        "name" => "NEWS",
        "url" => "news"
    ]
];
@endphp
<header>
        <div class="title">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/1200px-Logo.min.svg.png" alt="logo">
        </div>
        <div class="links">
            @foreach ($links as $link)
            <a href="{{$link["url"]}}" class="btn">{{$link["name"]}}</a>
            @endforeach
        </div>
</header>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100px;
        padding: 20px;
        border-bottom: 5px solid #ff291a;
    }

    header img {
        width: 30%;
    }

    .links {
        display: flex;
    }
    .links a {
        margin:  0 10px;
    }

    .btn {
        padding: 15px 20px;
        background-color: #ff291a;
        color: white;
        border-radius: 10px;
        text-decoration: none;
    }

    .btn:hover {
        scale: 1.2;
    }
</style>