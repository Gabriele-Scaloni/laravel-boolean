<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

//Auth::routes();

Route::get('/', 'GuestController@home')->name('home');
Route::get('/postcard/create', 'GuestController@createPostcard')->name('postcard.create');
Route::post('/postcard/store', 'GuestController@storePostcard') -> name('postcard.store');

Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/api/postcards/list', 'ApiController@getPostcards') ->name('api.postcards.list');

