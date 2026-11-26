<?php

use Illuminate\Support\Facades\Route;

// Static screens for now. Swap Route::view for Livewire full-page components
// (Route::get('/x', \App\Livewire\X::class)) as each screen gets real data.
Route::view('/', 'pages.home')->name('home');
Route::view('/category', 'pages.category')->name('category');
Route::view('/nearby', 'pages.nearby')->name('nearby');
Route::view('/place', 'pages.place')->name('place');
Route::view('/offers', 'pages.offers')->name('offers');
Route::view('/community', 'pages.community')->name('community');
Route::view('/about', 'pages.about')->name('about');
Route::view('/martyrs', 'pages.martyrs')->name('martyrs');
Route::view('/admin', 'admin.dashboard')->name('admin');
Route::view('/teachers', 'pages.teachers')->name('teachers');
Route::view('/teacher', 'pages.teacher')->name('teacher');
Route::view('/eservices', 'pages.eservices')->name('eservices');
Route::view('/mobile', 'pages.mobile')->name('mobile');
Route::view('/attara', 'pages.attara')->name('attara');
Route::view('/ads', 'pages.ads')->name('ads');
Route::view('/store', 'pages.store')->name('store');
