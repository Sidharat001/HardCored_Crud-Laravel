<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DigiUsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [DigiUsersController::class, 'getData']);
Route::get('/empty-table', [DigiUsersController::class, 'emptyTable']);
Route::get('/deleted/{id}', [DigiUsersController::class, 'deleteData'])->name('deleteUserData');
Route::get('/view/{id}', [DigiUsersController::class, 'getUserDatabyId'])->name('viewUserData');