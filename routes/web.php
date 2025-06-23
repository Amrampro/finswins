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
    Route::get("/cause-detail", \App\Http\Controllers\Frontend\FrontendCauseDetailController::class)->name("cause_detail");
    Route::get("/team", \App\Http\Controllers\Frontend\FrontendTeamController::class)->name("team");
    Route::get("/portrait", [\App\Http\Controllers\Frontend\FrontendPortraitController::class,'index'])->name("portrait");
    Route::get("/portrait/{portraitId}", [\App\Http\Controllers\Frontend\FrontendPortraitController::class,'show'])->name("portrait.show");
    Route::get("/blogs", [\App\Http\Controllers\Frontend\FrontendBlogController::class,'index'])->name("blogs.index");
    Route::get("/blogs/{blogId}", [\App\Http\Controllers\Frontend\FrontendBlogController::class,'show'])->name("blogs.show");
    Route::get("/galleries", \App\Http\Controllers\Frontend\FrontendGalleryController::class)->name("galleries");

});
