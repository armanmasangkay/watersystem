<?php

use App\Http\Controllers\api\CreateUserController;
use App\Http\Controllers\api\RegisterController;
use App\Http\Controllers\api\CustomersController;
use App\Http\Controllers\api\LoginUserController;
use App\Http\Controllers\api\LogoutUserController;
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

Route::group([
    'middleware'=>'jwt.verify',

],function(){
    Route::post('/register',[RegisterController::class,'store'])->name('register-customer');
    Route::get('/customers',[CustomersController::class,'getAll'])->name('customers.all');
    Route::post('/create-admin',[CreateUserController::class,'create'])->name('create-user');
  
});



Route::post('/login-admin',[LoginUserController::class,'login'])->name('admin-login');
Route::post('/logout-admin',[LogoutUserController::class,'logout'])->name('admin-logout');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
