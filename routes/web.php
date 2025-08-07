<?php

// أمر لإستدعاء كلاس راوت use = import
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

// هذا :: الرمز لإستدعاء ميثود معينة من كلاس
//routing أي الروابط
//الدالة اللي داخل استدعاء القيت هي التي سيتم استدعاءها عندما يضغط المستخدم على الرابط
Route::get('/', [TweetController::class, 'index'])
    ->name('home');

//داخل الأقواس المربعة: كلاس كامل وهو تست، واسم الدالة وهو نيم
//Route::get('/name',[TestController::class, 'name']);

//MVC: Model, View, Controller
// فائدة المتحكم أو الكونترولر: بدل ما نكتب رابط كل صفحة في الموقع في هذا الملف، نحطهل في المتحكم لإستدعاءها
Route::get('/tweet/{tweet}', [TweetController::class, 'view'])
    ->name('tweet.view');
Route::post('/tweet/create', [TweetController::class, 'store'])
    ->name('tweet.create');

Route::get('/register', [RegisterController::class, 'create'])
    ->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])
    ->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', LogoutController::class)
    ->name('logout');

Route::get('/profile/{user}', [ProfileController::class, 'view'])
    ->name('profile');





