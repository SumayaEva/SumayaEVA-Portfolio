<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/skills', function () {
    return view('pages.skills');
})->name('skills');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/project', function () {
    return view('pages.project');
})->name('project');