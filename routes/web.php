<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;

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
    return view('welcome');
});


/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/


Route::get('/dashboard', [UserController::class, 'listAll'])->middleware(['auth'])->name('dashboard');

Route::get('/delete/{id}', [UserController::class, 'delete'])->middleware(['auth']);



Route::get('/edit/{id}', [UserController::class, 'edit'])->middleware(['auth']);

Route::put('/edit/{id}', [UserController::class, 'update'])->middleware(['auth']);



Route::get('/register_user', [UserController::class, 'create'])->middleware(['auth'])->name('register_user');

Route::post('/register_user', [UserController::class, 'store'])->middleware(['auth']);




require __DIR__.'/auth.php';
