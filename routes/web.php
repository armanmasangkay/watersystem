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

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/customer/register', [RegisterCustomerController::class, 'index'])->name('register_customer');

Route::get('/customer/view-lists', [ViewCustomerController::class, 'index'])->name('view_customers');
