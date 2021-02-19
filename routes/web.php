<?php

use App\Http\Controllers\api\LogoutUserController;
use App\Http\Controllers\RegisterCustomerController;
use App\Http\Controllers\ViewCustomerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserListsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutSystemUserController;
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





//ADMIN ROUTES
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/register-customer', [RegisterCustomerController::class, 'index'])->name('admin.register_customer');
    Route::post('/register-customer', [RegisterCustomerController::class, 'store']);
    Route::get('/customer-lists', [ViewCustomerController::class, 'index'])->name('view_customers');
    Route::get('/transactions/new', [TransactionController::class, 'index'])->name('new_transaction');
    Route::get('/transactions/search',[TransactionController::class,'search'])->name('new_transaction.search');


    Route::get('/user/add-new', [UserController::class, 'index'])->name('add_user');
    Route::post('/user/add-new', [UserController::class, 'store']);

    Route::get('/user/lists', [UserListsController::class, 'index'])->name('user_lists');

  
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    Route::post('/logout',[LogoutSystemUserController::class,'logout'])->name('logout');

});

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'authenticate']);


//END ADMIN ROUTES
