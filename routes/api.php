<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/register',[RegisterController::class,'store'])->name('register-customer');
Route::get('/register',[CustomersController::class,'getAll'])->name('customers.all');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
