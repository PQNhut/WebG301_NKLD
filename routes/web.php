<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {return view('welcome');});

// category management
 Route::get('category-list',[CategoryController::class, 'index'])->name('category-index');
 Route::post('category-add',[CategoryController::class, 'add'])->name('category-index');
 Route::get('category-delete/{id}',[CategoryController::class, 'delete'])->name('category-index');
 Route::post('category-save',[CategoryController::class, 'save'])->name('product-save');
 Route::get('category-edit/{id}',[CategoryController::class, 'edit'])->name('category-index');
 Route::post('category-update',[CategoryController::class, 'update'])->name('category-index');

// manufacturer management
Route::get('manufacturer-list',[ManufacturerController::class, 'index'])->name('manufacturer-index');
Route::post('manufacturer-add',[ManufacturerController::class, 'add'])->name('manufacturer-add');
Route::get('manufacturer-delete/{id}',[ManufacturerController::class, 'delete'])->name('manufacturer-delete');
Route::post('manufacturer-save',[ManufacturerController::class, 'save'])->name('manufacturer-save');
Route::get('manufacturer-edit/{id}',[ManufacturerController::class, 'edit'])->name('manufacturer-edit');
Route::post('manufacturer-update',[ManufacturerController::class, 'update'])->name('manufacturer-update');

// product management
Route::get('product-list',[ProductController::class, 'index']);
Route::get('product-add',[ProductController::class, 'add'])->name('product-add');
Route::get('product-delete/{id}',[ProductController::class, 'delete']);
Route::post('product-save',[ProductController::class, 'save'])->name('product-save');
Route::get('product-edit/{id}',[ProductController::class, 'edit'])->middleware('isLoggedIn');
Route::post('product-update/{id}',[ProductController::class, 'update'])->name('product-update');


//admin dashboard
Route::get('admin/login',[AdminController::class, 'login'])->name('admin-login');
Route::post('admin/loginProcess',[AdminController::class, 'loginProcess'])->name('admin-processLogin');
Route::get('admin/logout',[AdminController::class, 'logout'])->name('admin-logout');
Route::get('admin/index',[AdminController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('admin/product-list',[ProductController::class, 'productList'])->middleware('isLoggedIn');
Route::get('admin/product-add',[ProductController::class, 'productAdd'])->middleware('isLoggedIn');

//customer pages
Route::get('customer/index', [CustomerController::class, 'index']);
Route::get('customer/registration', [CustomerController::class, 'register']);
Route::post('customer/processRegister', [CustomerController::class, 'processRegister']);//->name('customer-processRegister')
Route::get('customer/signin', [CustomerController::class, 'login']);
Route::post('customer/loginProcess', [CustomerController::class, 'loginProcess']);
Route::get('customer/signout', [CustomerController::class, 'logout']);
Route::get('customer/products', [CustomerController::class, 'products']);
Route::get('customer/profile/{id}', [CustomerController::class, 'profile']);
Route::post('customer/customerUpdate', [CustomerController::class, 'Update']);
Route::get('admin/customer-list', [CustomerController::class, 'customerList'])->name('customer-list');
Route::get('customer-delete/{id}',[CustomerController::class, 'delete']);