<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.publicchat');
});


Route::get('/welcome', function () {
    return view('welcome');
});
