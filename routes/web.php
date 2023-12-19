<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\ParentCategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\DefaultController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\Permissions;
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

// for components testing purpose


Route::withoutMiddleware([Permissions::class])->group(function () {

    Route::controller(AuthController::class)
        ->prefix('auth')
        ->name('auth.')
        ->group(function () {
            Route::get('login', 'loginView')->name('login');
            Route::post('login-user', 'userLogin')->name('login.user');
            Route::get('register', 'registerView')->name('register');
            Route::post('check-register', 'checkRegister')->name('check.register');
            Route::get('logout', 'logout')->name('logout');
        });

    Route::view('nav', 'frontend.layout.app');




    Route::controller(DefaultController::class)
        ->prefix('')
        ->name('web.')
        ->group(function () {
            Route::get('', 'home')->name('index');
            Route::get('/prod-by-cat/{parentCategory}', 'prodByCat')->name('prodByCat');
            Route::get('brands', 'brands')->name('prod.by.brands');
            Route::get('product/detail/{product}', 'productDetails')->name('prod.detail');
        });
});


Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)
        ->prefix('user')
        ->name('user.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{user}', 'edit')->name('edit');
            Route::post('update/{user}', 'update')->name('update');
            Route::get('delete/{user}', 'destroy')->name('delete');
        });

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::view('user/dashboard', 'user.dashboard')->name('user.dashboard');
    Route::get('filemanager', [FileManagerController::class, 'index'])->name('file.index');
    Route::post('filemanager/upload', [FileManagerController::class, 'upload'])->name('file.upload');
    Route::post('file/store', [FileManagerController::class, 'store'])->name('file.store');
    Route::get('/file/get-image/{id}', [FileManagerController::class, 'getImage']);
    Route::delete('filemanager/{file}', [FileManagerController::class, 'delete'])->name('filemanager.delete');


    Route::controller(RoleController::class)
        ->prefix('role')
        ->name('role.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{role}', 'edit')->name('edit');
            Route::post('update/{role}', 'update')->name('update');
            Route::get('delete/{role}', 'destroy')->name('delete');
        });

    Route::controller(PermissionController::class)
        ->prefix('permission')
        ->name('permission.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{permission}', 'edit')->name('edit');
            Route::post('update{permission}', 'update')->name('update');
            Route::get('delete/{permission}', 'destroy')->name('delete');
            Route::get('synchronize', 'synchronize')->name('synchronize');
        });

    Route::controller(ParentCategoryController::class)
        ->prefix('parent/category')
        ->name('parent.category.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{parentCategory}', 'edit')->name('edit');
            Route::post('update{parentCategory}', 'update')->name('update');
            Route::get('delete/{parentCategory}', 'destroy')->name('delete');
        });

    Route::controller(ChildCategoryController::class)
        ->prefix('child/category')
        ->name('child.category.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{childCategory}', 'edit')->name('edit');
            Route::post('update{childCategory}', 'update')->name('update');
            Route::get('delete/{childCategory}', 'destroy')->name('delete');
        });

    Route::controller(SubCategoryController::class)
        ->prefix('sub/category')
        ->name('sub.category.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{subCategory}', 'edit')->name('edit');
            Route::post('update{subCategory}', 'update')->name('update');
            Route::get('delete/{subCategory}', 'destroy')->name('delete');
        });

    Route::controller(BrandController::class)
        ->prefix('brand')
        ->name('brand.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{brand}', 'edit')->name('edit');
            Route::post('update{brand}', 'update')->name('update');
            Route::get('delete/{brand}', 'destroy')->name('delete');
        });

    Route::controller(ProductController::class)
        ->prefix('product')
        ->name('product.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{product}', 'edit')->name('edit');
            Route::post('update{product}', 'update')->name('update');
            Route::get('delete/{product}', 'destroy')->name('delete');
        });

    Route::controller(BlogController::class)
        ->prefix('blog')
        ->name('blog.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{blog}', 'edit')->name('edit');
            Route::post('update{blog}', 'update')->name('update');
            Route::get('delete/{blog}', 'destroy')->name('delete');
        });
});
