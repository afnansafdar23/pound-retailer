<?php
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StripePaymentController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\DefaultController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\Permissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
            Route::get('/prod-by-child-cat/{childCategory}', 'prodByChildCat')->name('prodByChildCat');
            Route::get('/product-by-child/{childCategory}', 'prductbychild')->name('productbychild');
            Route::get('/product-by-subCategory/{subCategory}', 'prductbysubCate')->name('prod.sub');

            Route::get('brands', 'brands')->name('prod.by.brands');
            Route::get('/cart', 'cart')->name('cart');

            Route::get('/checkout', 'checkout')->name('checkout');
            Route::get('/contact-us', 'contact')->name('contact');
            Route::get('/about-us', 'about')->name('about');
            Route::get('/faqs', 'faq')->name('faq');
            Route::post('/payment', 'payment')->name('payment');
            Route::get('/deliveryinfo', 'deliveryinfo')->name('deliveryinfo');

            Route::get('/privacy-policy', 'privacy')->name('privacy');
            Route::get('/terms-condition', 'term')->name('term');
            Route::get('/prod-by-brands/{brand}', 'prodByBrands')->name('prod.brand');
            Route::get('/single/blog/{blog}', 'singleBlog')->name('blog');
            Route::get('/all-blog', 'allBlogs')->name('allblog');
            Route::get('product/detail/{product}', 'prodDetail')->name('prod.detail');
            Route::post('add-to-cart/{productId}', 'addtocart')->name('addtocar');

            Route::delete('delete-cart', 'deletecart')->name('deletecart');
            Route::post('/update-cart', 'updateCart')->name('updatecart');
            Route::get('/billing', 'billing')->name('billing');

        });
});
Route::controller(StripePaymentController::class)->group(function () {
    Route::get('stripe/{id}', function ($id, StripePaymentController $controller, Request $request) {
        // Check if cart exists in the session
        if (!Session::has('cart')) {
            // Redirect or return a response indicating that cart doesn't exist
            return redirect()->route('home')->with('error', 'Cart is empty!');
        }

        // Cart exists, proceed with payment logic
        // Call the appropriate method on the controller
        return $controller->stripe($request, $id);
    });

    Route::post('/stripe/{id}', 'StripePost')->name('stripe.post');

});
Route::controller(DefaultController::class)
->prefix('order')
->name('order.')
->group(function () {
    Route::get('trans', 'detail')->name('trans');


});
 Route::controller(DefaultController::class)
        ->prefix('order')
        ->name('order.')
        ->group(function () {
            Route::get('detail', 'detail')->name('detail');
            Route::get('details{id}', 'details')->name('details');
            Route::get('edit/{id}', 'orderedit')->name('edit');
            Route::post('update/{id}', 'orderupdate')->name('update');


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

    Route::controller(SettingController::class)
        ->prefix('admin/setting')
        ->name('setting.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::post('store', 'storeUpdateSetting')->name('store');
        });

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
        ->prefix('admin/blog')
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
