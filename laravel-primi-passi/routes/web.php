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
    $welcomePage = [
        'page_title' => 'Welcome to my Web Site!',
        'main_title' => 'Ciao, questa è una prova!',
        'subtitle' => 'La mia prima prova in Laravel.',
        'copyright' => 'Powered by @Manuelfotodi'
    ];
    return view('homepage', $welcomePage);
});
