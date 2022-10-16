<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TutionController;
use App\Http\Controllers\AuthController;


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

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::resource('tutor', TutorController::class);
Route::get('/search-tutors', [TutorController::class, 'searchTutor']);
Route::get('/search-tutors-result', [TutorController::class, 'searchTutorResult']);
Route::get('/request-tutor', [TutorController::class, 'requestTutor']);
Route::get('/my-profile', [AuthController::class, 'myProfile']);
Route::get('/message', [MessageController::class, 'index']);
Route::resource('tutions', TutionController::class);

Route::get('login', [AuthController::class, 'loginView'])->name('login');
Route::get('register', [AuthController::class, 'registerView'])->name('register');
Route::post('postLogin', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('register', [AuthController::class, 'postRegistration'])->name('register');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::post('update-user', [AuthController::class, 'updateUser'])->name('updateUser');
Route::post('update-tutor', [AuthController::class, 'updateTutor'])->name('updatTutor');
