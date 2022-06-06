<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/studentlist', [TestController::class, 'studentlist'])->name("studentlist");
Route::get('/palindrome', [TestController::class, 'palindrome'])->name("palindome");
Route::get('/time', [TestController::class, 'time'])->name("time");
Route::get('/text', [TestController::class, 'text'])->name("text");
Route::get('/beers', [TestController::class, 'beers'])->name("beers");
Route::get('/higher', [TestController::class, 'higherPro'])->name("higher-Pro");
