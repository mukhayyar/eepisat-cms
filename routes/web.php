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
    return view('frontend.index');
})->name('frontend.index');
Route::get('/test', function () {
    return view('frontend.test');
});
Route::get('/water-rocket-competition', function () {
    return view('frontend.water_rocket_competition.index');
});
Route::get('/about', function () {
    return view('frontend.about');
})->name('frontend.about');
Route::get('/gallery', function () {
    return view('frontend.gallery');
})->name('frontend.gallery');
Route::get('/teams', function () {
    return view('frontend.teams');
})->name('frontend.teams');
Route::get('/news', function () {
    return view('frontend.news');
})->name('frontend.news');
Route::get('/sponsorship', function () {
    return view('frontend.sponsorship');
})->name('frontend.sponsorship');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');
Route::get('/news/{slug}', function () {
    return view('frontend.detail_news');
})->name('frontend.detail_news');