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
    $comics = config('db.comics');
    $menus = config('navBar.navBarMenu');
    $shops = config('negozi.shops');
    $terms = config('terms.terms');
    $social = config('social.social');
    return view('home', compact('comics','menus','shops','terms','social'));
})->name('homepage');

Route::get('/comics/{comic}', function ($id) {
    $comics = config('db.comics');
    $comic = $comics[$id];
    $menus = config('navBar.navBarMenu');
    $shops = config('negozi.shops');
    $terms = config('terms.terms');
    $social = config('social.social'); 
    return view('comics.show', compact('comic','menus','shops','terms','social'));
})->name('comics.show');