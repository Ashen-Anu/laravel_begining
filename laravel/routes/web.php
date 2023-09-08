<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
// To call a view
Route::view('/w', 'welcome');