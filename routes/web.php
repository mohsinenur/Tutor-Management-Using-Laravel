<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TutionController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::resource('tutor', TutorController::class);
Route::get('/search-tutors', [TutorController::class, 'searchTutor']);
Route::get('/search-tutors-result', [TutorController::class, 'searchTutorResult']);
Route::get('/request-tutor', [TutorController::class, 'requestTutor']);
Route::get('/my-profile', [TutorController::class, 'myProfile']);
Route::get('/message', [MessageController::class, 'index']);
Route::resource('tutions', TutionController::class);