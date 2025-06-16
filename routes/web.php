<?php

use Illuminate\Support\Facades\Route;

Route::get('/', action: fn ()=> view('pages.home'))->name('home');

Route::get('/about-us', fn ()=> view('pages.about'))->name('about');

Route::get('help', fn ()=> view('pages.help'))->name('help');
