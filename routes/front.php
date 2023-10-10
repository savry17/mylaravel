<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;

Route::get('/front',function(){
    return view('front');
});
Route::get('/home',function(){
    return view('front_home');
});
Route::get('/',[FrontPageController::class,'index']) -> name (name:'front.home');
Route::get('/about',[FrontPageController::class,'about']) -> name (name:'front.about');
Route::get('/services',[FrontPageController::class,'services']) -> name (name:'front.services');
Route::get('/packages',[FrontPageController::class,'packages']) -> name (name:'front.packages');
Route::get('/contact',[FrontPageController::class,'contact']) -> name (name:'front.contact');
Route::get('/destination',[FrontPageController::class,'destination']) -> name (name:'front.destination');
Route::get('/booking',[FrontPageController::class,'booking']) -> name (name:'front.booking');
Route::get('/travelguides',[FrontPageController::class,'travelguides']) -> name (name:'front.travelguides');
Route::get('/testimonial',[FrontPageController::class,'testimonial']) -> name (name:'front.testimoninl');
Route::get('/error',[FrontPageController::class,'error']) -> name (name:'front.404page');
Route::get('front-master',function(){
    return view('front-master');
});
