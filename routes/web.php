<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\busController;
use App\Http\Controllers\seatController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReservationController;
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
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/reservation)', function () {
    return view('reservation');
});
Route::get('/cancel', function () {
    return view('cancel');
});
Route::get('/admin_login', function () {
    return view('admin_login');
});
Route::get('/list',[TripController::class,'list']);
Route::get("/list")->middleware('isLoggedIn');
Route::get("/list",[TripController::class,'list'])->middleware('isLoggedIn');

Route::get('/delete/{id}',[TripController::class,'delete']);
Route::get('/edit/{id}',[TripController::class,'showData']);
Route::post('/edit',[TripController::class,'editdata']);

//Route::get('/booked',[ReservationController::class,'showbooked']);

Route::get("/main")->middleware('isLoggedIn');
Route::get("/reservation")->middleware('isLoggedIn');
Route::get("/reservation/{info}",[userController::class,'reservation'])->middleware('isLoggedIn');
Route::get("/cancel")->middleware('isLoggedIn');
Route::post("/cancel",[ReservationController::class,'cancel_ticket'])->middleware('isLoggedIn');
Route::get("/cancel",[ReservationController::class,'cancel']);

Route::get("/login",[userController::class,'login']);
Route::get("/main",[userController::class,'main'])->middleware('isLoggedIn');
Route::get("/admin")->middleware('isLoggedIn');
Route::get("/admin",[userController::class,'admin'])->middleware('isLoggedIn');
Route::get("/logout",[userController::class,'logout']);

Route::get("/admin_logout",[userController::class,'adminlogout']);
Route::get("/registration",[userController::class,'registration']);
Route::post('/register-user',[userController::class,'registeruser'])->name('register-user');

Route::post('/login-user',[userController::class,'loginuser'])->name('login-user');
Route::post('/login-admin',[userController::class,'loginadmin'])->name('login-admin');

Route::post('/add_trip',[TripController::class,'addTrip'])->name('add_trip');
Route::get("/bus",[busController::class,'index']);
Route::post('/assign_bus',[busController::class,'assignbus'])->name('assign_bus');
Route::post('/assign_seat',[seatController::class,'addseats'])->name('assign_seat');

Route::get('/search',[SearchController::class,'search'])->name('web_search');
Route::post('/reserve-ticket',[ReservationController::class,'reserve'])->name('reserve-ticket');
