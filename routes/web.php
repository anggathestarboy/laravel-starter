<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("home");
});
Route::get('/about', function () {
    return view("about", ['nama' => 'Rizqi Anggara']);
});
Route::get('/blog', function () {
    return view("blog", ['nama' => 'Rizqi Anggara', 'isi' => 'Ini berita 1, ada seorang anak di desa sukopuro malas ngoding']);
});
Route::get('/contact', function () {
    return view("contact");
});
