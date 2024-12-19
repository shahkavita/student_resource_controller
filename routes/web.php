<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userlist;
use App\Http\Controllers\employee;
use App\Http\Controllers\eventController;
use App\Http\Controllers\eventdetailsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\roleController;

use App\Http\Controllers\customerController;
use Illuminate\Support\Facedes\DB;

Route::resource('eventdetailslist',eventdetailsController::class);
Route::resource('studentlist',StudentController::class);
route::resource('eventlist',eventController::class);
Route::resource('employee',employeeController::class);
Route::resource('employee.Comment',CommentController::class)->shallow();
Route::resource('customerlist',customerController::class);
Route::resource('rolelist',roleController::class);

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/adduser', function () {
    return view('adduser');
});
Route::get('/addemployee', function () {
    return view('addemployee');
});
Route::post('/registeremployee',[employee::class,'show'])->name('registeremployee');
Route::post('/registeruser',[userlist::class,'registeruser'])->name('registeruser');
Route::get('/userlist',[userlist::class,'show'])->name('userlist');
Route::get('/updateuser/{id}',[userlist::class,'updateuser'])->name('updateuser');
Route::post('/update_user/{id}',[userlist::class,'update_user'])->name('update_user');
Route::get('/userlist/{id}',[userlist::class,'deleteuser'])->name('deleteuser');



