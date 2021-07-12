<?php

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserExerciseController;
use App\Models\Trainer;
use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});
Route::get('/register', function () {
    return view('pages.auth.register');
});
Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('/trainer-register', function () {
    return view('pages.auth.trainer.register');
});
Route::get('/trainer-login', function () {
    return view('pages.auth.trainer.login');
});

Route::get('/schedule', function () {
    return view('pages.schedule');
});
Route::get('/trainers', [TrainerController::class, 'index'] );


Route::middleware('auth:web')->group(function () {
 Route::post('/exercise/store', [UserExerciseController::class, 'store'])->name('exercise.store');
 Route::get('/exercise', [ExerciseController::class, 'index']);
});


Route::post('register-user', [UserController::class, 'store'])->name('user.register');
Route::post('user-login', [UserController::class, 'login'])->name('user.login');

Route::post('trainer-register', [TrainerController::class, 'store'])->name('trainer.register');
Route::post('trainer-login', [TrainerController::class, 'login'])->name('trainer.login');
Route::get('logout', [UserController::class, 'logout'])->name('user.logout');
