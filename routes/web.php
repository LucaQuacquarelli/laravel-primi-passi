<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/documentation', function () {
    $documents = [
        "documents" => [
            [
                "name" => "Installation",
                "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur ullam maxime quo unde nulla fugit accusantium voluptatem provident odit cumque excepturi enim quaerat nemo assumenda veritatis, sapiente in consequatur doloremque, quidem sed culpa error vero ab laudantium. Nulla omnis consectetur consequuntur eveniet, nemo quam quas, aliquid laboriosam suscipit iusto quod?",
                "url" => "Installation"
            ],
            [
                "name" => "Security",
                "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur ullam maxime quo unde nulla fugit accusantium voluptatem provident odit cumque excepturi enim quaerat nemo assumenda veritatis, sapiente in consequatur doloremque, quidem sed culpa error vero ab laudantium. Nulla omnis consectetur consequuntur eveniet, nemo quam quas, aliquid laboriosam suscipit iusto quod?",
                "url" => "Security"
            ],
            [
                "name" => "Api Documentation",
                "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur ullam maxime quo unde nulla fugit accusantium voluptatem provident odit cumque excepturi enim quaerat nemo assumenda veritatis, sapiente in consequatur doloremque, quidem sed culpa error vero ab laudantium. Nulla omnis consectetur consequuntur eveniet, nemo quam quas, aliquid laboriosam suscipit iusto quod?",
                "url" => "Api Documentation"
            ],
        ]
    ];
    return view('documentation', $documents);
});

Route::get('/news', function () {
    $news = [
        "news" => [
            [
                "name" => "Commonmark Markdown Parser v2.0 Beta 3 Released ",
                "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur ullam maxime quo unde nulla fugit accusantium voluptatem provident odit cumque excepturi enim quaerat nemo assumenda veritatis, sapiente in consequatur doloremque, quidem sed culpa error vero ab laudantium. Nulla omnis consectetur consequuntur eveniet, nemo quam quas, aliquid laboriosam suscipit iusto quod?",
                "url" => "READ MORE"
            ],
            [
                "name" => "5 Tips for the Laravel Service Container ",
                "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur ullam maxime quo unde nulla fugit accusantium voluptatem provident odit cumque excepturi enim quaerat nemo assumenda veritatis, sapiente in consequatur doloremque, quidem sed culpa error vero ab laudantium. Nulla omnis consectetur consequuntur eveniet, nemo quam quas, aliquid laboriosam suscipit iusto quod?",
                "url" => "READ MORE"
            ],
            [
                "name" => "What is Application Performance Monitoring (APM) and Why Do You Need It? ",
                "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur ullam maxime quo unde nulla fugit accusantium voluptatem provident odit cumque excepturi enim quaerat nemo assumenda veritatis, sapiente in consequatur doloremque, quidem sed culpa error vero ab laudantium. Nulla omnis consectetur consequuntur eveniet, nemo quam quas, aliquid laboriosam suscipit iusto quod?",
                "url" => "READ MORE"
            ],
        ]
    ];
    return view('news', $news);
});
