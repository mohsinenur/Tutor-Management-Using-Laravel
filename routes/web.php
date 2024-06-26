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
Route::get('tution-available/{id}', [TutionController::class, 'makeAvailable'])->name('makeAvailable');
Route::get('tution-unavailable/{id}', [TutionController::class, 'makeUnavailable'])->name('makeUnavailable');

Route::get('login', [AuthController::class, 'loginView'])->name('login');
Route::get('register', [AuthController::class, 'registerView'])->name('register');
Route::post('postLogin', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('register', [AuthController::class, 'postRegistration'])->name('register');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::post('update-user', [AuthController::class, 'updateUser'])->name('updateUser');
Route::post('update-tutor', [AuthController::class, 'updateTutor'])->name('updatTutor');
Route::get('user/{id}', [AuthController::class, 'userProfile'])->name('userProfile');
Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgotPassword');
Route::post('post-forgot-password', [AuthController::class, 'postForgotPassword'])->name('postForgotPassword');
Route::get('reset-password', [AuthController::class, 'resetPassword'])->name('resetPassword');
Route::post('post-reset-password', [AuthController::class, 'postResetPassword'])->name('postResetPassword');


Route::post('message/{id}', [MessageController::class, 'markRead'])->name('markAsRead');
Route::get('delete-message/{id}', [MessageController::class, 'delete_message'])->name('deleteMessage');
Route::post('create-message', [MessageController::class, 'create'])->name('createMessage');
Route::post('admin-message', [MessageController::class, 'adminMessage'])->name('adminMessage');
Route::post('user-report', [MessageController::class, 'userReport'])->name('userReport');