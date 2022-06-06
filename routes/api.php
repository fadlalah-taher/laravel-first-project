<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/hi', [TestController::class, 'sayHi'])->name("say-hi");
Route::get('/palindrome', [TestController::class, 'palindrome'])->name("palindome");
Route::get('/time', [TestController::class, 'time'])->name("time");
Route::get('/text', [TestController::class, 'text'])->name("text");
Route::get('/higher', [TestController::class, 'higherPro'])->name("higher-Pro");
