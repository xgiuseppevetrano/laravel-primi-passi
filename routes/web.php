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
    $links = [
        [
            "href" => "/doc",
            "text" => "Doc"
        ],
        [
            "href" => "/new-version",
            "text" => "New Version"
        ],
        [
            "href" => "/blog",
            "text" => "Blog"
        ],
        [
            "href" => "/learning",
            "text" => "Learning"
        ]
    ];

    return view('home', compact('links'));
});

Route::get('/doc', function () {
    return view('doc');
});

Route::get('/new-version', function () {
    return view('new-version');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/learning', function () {
    return view('learning');
});