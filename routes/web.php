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
    return view('welcome');
});

Route::get('/', function () {
    return view('Index');
});

Route::get('/a-propos', function () {
    return view('Page.about');
});

Route::get('/service', function () {
    return view('Page.service');
});

Route::get('/contact', function () {
    return view('Page.contact');
});

Route::get('/service/{index}', function ($index) {
    return view('Page.detailservice', ['index' => $index]);
});