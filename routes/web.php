<?php
use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\Admin\AboutUsController as AboutUsController;
use App\Http\Controllers\Admin\SlidersController as SlidersController;
use App\Http\Controllers\CommercialControllers as CommercialControllers;
use App\Http\Controllers\CustomerControllers as CustomerControllers;
use App\Http\Controllers\MaintenanceControllers as MaintenanceControllers;
use App\Http\Controllers\shopController as shopController;
use App\Http\Controllers\Admin\CategoriesController as CategoriesController;
use App\Http\Controllers\Admin\ProductsController as ProductsController;
use App\Http\Controllers\Admin\TypesController as TypesController;
use App\Http\Controllers\mailsController as mailsController;


use Illuminate\Support\Facades\Route;

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
Route::get('clear', function() {
	$exitCode = Artisan::call('cache:clear');
	$exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
	$exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('storage:link');
//    $exitCode = Artisan::call('migrate:fresh --seed');
    return 'All routes cache has just been removed';
});
Route::get('migrate', function() {
	$exitCode = Artisan::call('migrate:fresh --seed');

//    $exitCode = Artisan::call('migrate:fresh --seed');
    return 'All routes cache has just been removed';
});

Route::get('seeder', function() {
	$exitCode = Artisan::call('db:seed');

    return 'All routes cache has just been removed';
});
Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/products_all', [HomeController::class,'products'])->name('products_all');
Route::get('/product_single/{id}', [HomeController::class,'product'])->name('product_single');
Route::get('/type_single/{id}', [HomeController::class,'type'])->name('type_single');
Route::get('/category_single/{id}', [HomeController::class,'category'])->name('category_single');
Route::get('/contact_us', [mailsController::class,'create'])->name('contact_us');
Route::post('/contact_us', [mailsController::class,'store'])->name('contact_us_post');
Route::get('/about_us', [HomeController::class,'about_us'])->name('about_us');
Route::delete('/remove_cart', [shopController::class,'remove_cart'])->name('remove_cart');
Route::patch('update-cart', [shopController::class, 'update_cart'])->name('update_cart');
Route::get('/cart', [shopController::class,'shop_cart'])->name('shop.cart');
Route::get('/checkout', [shopController::class,'checkout'])->name('checkout');
Route::any('/cart_add/{id}', [shopController::class,'store'])->name('cart_add');
Route::any('/confirm_checkout', [shopController::class,'confirm_checkout'])->name('confirm_checkout');
Route::any('/cart_added/{id}', [shopController::class,'cart_added'])->name('cart_add_single');


 Auth::routes(['register' => false]);
 Route::group([
    //'prefix'=>'Admin',
      'middleware'=>'auth_admin',
  ],function()
{
Route::get('mails',[mailsController::class,'index'])->name('mails');
Route::resource('/sliders',SlidersController::class);
Route::resource('products',ProductsController::class);
Route::resource('/types',TypesController::class);
Route::get('/admin', [HomeController::class,'admin'])->name('admin');
Route::resource('categories',CategoriesController::class);
Route::get('delete_product/{id}',[ProductsController::class,'remove']);
Route::get('delete_type/{id}',[TypesController::class,'remove']);
Route::get('delete_category/{id}',[CategoriesController::class,'remove']);
Route::get('delete_slider/{id}',[SlidersController::class,'remove']);
Route::get('/company_about', [AboutUsController::class,'company_about'])->name('company_about');
Route::get('/company_edit', [AboutUsController::class,'company_edit'])->name('company_edit');
Route::any('/company_update', [AboutUsController::class,'company_update'])->name('company_update');
Route::any('/customer_details/{id}', [CommercialControllers::class,'customer_details_show'])->name('customer_details');
Route::any('/customer_details', [CommercialControllers::class,'customer_details_index'])->name('customer_details.index');
Route::any('/confirm_order/{id}', [CommercialControllers::class,'confirm_order'])->name('confirm_order');
Route::any('/orders_index', [CommercialControllers::class,'orders_index'])->name('orders.index');
Route::any('/orders_show/{id}', [CommercialControllers::class,'orders_show'])->name('orders.show');
Route::get('maintenance_request',[MaintenanceControllers::class,'all_admin'])->name('all_admin');
 });
  Route::group([
    'prefix'=>'Customer',
    'middleware'=>'auth_customer',
  ],function()
  {
Route::get('/', [CustomerControllers::class,'customer'])->name('customer');
Route::get('customer_profile',[CustomerControllers::class,'customer_profile'])->name('customer_profile');
Route::resource('maintenance',MaintenanceControllers::class);
Route::get('maintenance_request/{cart}/{product}',[MaintenanceControllers::class,'maintenance_request'])->name('maintenance.request');
    });





















