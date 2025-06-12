<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("test", "test");


Route::as("frontend.")->group(function () {
    Route::get("/", \App\Http\Controllers\Frontend\FrontendHomeController::class)->name("home");
    Route::get("/about", \App\Http\Controllers\Frontend\FrontendAboutController::class)->name("about");
    Route::get("/contact", \App\Http\Controllers\Frontend\FrontendContactController::class)->name("contact");
});
