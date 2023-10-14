<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/register', [AuthController::class, 'getRegister'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister']);

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

    // lấy chi tiết 1 chuyên mục (Áp dụng show form sửa chuyên mục)
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);

    // show form add category
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    // handle add category
    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);
    Route::delete('/delete/${id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');
});

Route::get('product/{id}', [HomeController::class, 'getProductDetail']);
// Admin
Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    // script: php artisan make:controller Admin/ProductsController --resource
    // Cung cấp controller template
    // (https://laravel.com/docs/10.x/controllers#restful-partial-resource-routes)
    Route::resource('products', ProductsController::class);
});
