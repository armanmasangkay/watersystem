<?php

use App\Http\Controllers\RegisterCustomerController;
use App\Http\Controllers\ViewCustomerController;

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

Route::get('/user/login', function () {
    return view('layout.login');
});

Route::get('/', function () {
    return view('pages.dashboard');
});



//ADMIN ROUTES

Route::prefix('admin')->group(function(){
    Route::get('/register-customer', [RegisterCustomerController::class, 'index'])->name('admin.register_customer');
    Route::post('/register-customer', [RegisterCustomerController::class, 'store']);


    Route::get('/customer-lists', [ViewCustomerController::class, 'index'])->name('view_customers');

});

//END ADMIN ROUTES