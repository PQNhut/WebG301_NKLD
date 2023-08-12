<?php

use App\Http\Controllers\ProductController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController ;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    'product-list',
    [ProductController::class, 'index']
);
Route::get(
    'product-add',
    [ProductController::class, 'add']
);
Route::get(
    'product-delete/{id}',
    [ProductController::class, 'delete']
);
Route::post(
    'product-save',
    [ProductController::class, 'save']
);
Route::get(
    'product-edit/{id}',
    [ProductController::class, 'edit']
);
Route::post(
    'product-update',
    [ProductController::class, 'update']
);

//admin dashboard
Route::get(
    'admin/login',
    [AdminController::class, 'login']
)->name('admin-login');
Route::post(
    'admin/loginProcess',
    [AdminController::class, 'loginProcess']
)->name('admin-processLogin');
Route::get(
    'admin/logout',
    [AdminController::class, 'login']
)->name('admin-logout');
Route::get(
    'admin/index',
    [AdminController::class, 'dashboard']
);
Route::get(
    'admin/product-list',
    [AdminController::class, 'productList']
);
Route::get(
    'admin/product-add',
    [AdminController::class, 'productAdd']
);

//customer pages
Route::get('customer/index', [CustomerController::class, 'index']);
Route::get('customer/registration', [CustomerController::class, 'register']);
Route::post('customer/processRegister', [CustomerController::class, 'processRegister']);
Route::get('customer/signin', [CustomerController::class, 'login']);
Route::post('customer/loginProcess', [CustomerController::class, 'loginProcess']);
Route::get('customer/signout', [CustomerController::class, 'logout']);
Route::get('customer/products/', [CustomerController::class, 'products']);
Route::get('customer/customerEdit/{id}', [CustomerController::class, 'Edit']);
Route::post('customer/customerUpdate', [CustomerController::class, 'Update']);