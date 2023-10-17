<?php
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ArgenceController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ImprimerController;
use App\Http\Controllers\CustomerProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;


use App\Http\Controllers\ProfileController;
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
Route::middleware(['auth', 'roles:admin'])->group(function() {
    Route::get('/private', function () {
        return 'bonjour admin';
    });
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index2', function () {
    return view('fournisseurs.index2');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');

// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('provider',ProviderController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('bill',BillController::class);
    Route::resource('inventory',InventoryController::class);
    Route::resource('sale',SaleController::class);
    Route::resource('argence',ArgenceController::class);
    Route::resource('product',ProductsController::class);
    Route::resource('user',UserController::class);
    Route::resource('customer',CustomerController::class);

    Route::resource('order',OrderController::class);
    Route::resource('vendor/laratrust/panel/roles',RoleController::class);

    Route::controller(InventoryController::class)->prefix('/inventory')->group( function(){
        Route::get('/', 'index')->middleware('permission:inventories-read');
        Route::get('/create', 'create')->middleware('permission:inventories-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:inventories-edit');
        Route::patch('/{id}', 'update')->middleware('permission:inventories-update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:inventories-delete');
        Route::get('/{id}', 'show')->middleware('permission:inventories-show');
    });

    Route::controller(CategoryController::class)->prefix('/category')->group( function(){
        Route::get('/', 'index')->middleware('permission:categories-read');
        Route::get('/create', 'create')->middleware('permission:categories-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:categories-edit');
        Route::patch('/{id}', 'update')->middleware('permission:categories-update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:categories-delete');
        Route::get('/{id}', 'show')->middleware('permission:categories-show');
    });
    Route::controller(BillController::class)->prefix('/bill')->group( function(){
        Route::get('/', 'index')->middleware('permission:bill-read');
        Route::get('/create', 'create')->middleware('permission:bill-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:bill-edit');
        Route::patch('/{id}', 'update')->middleware('permission:bill-update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:bill-delete');
        Route::get('/{id}', 'show')->middleware('permission:bill-show');
    });
    Route::controller(ProviderController::class)->prefix('/provider')->group( function(){
        Route::get('/', 'index')->middleware('permission:provider-read');
        Route::get('/create', 'create')->middleware('permission:provider-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:provider-edit');
        Route::patch('/{id}', 'update')->middleware('permission:provider-update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:provider-delete');
        Route::get('/{id}', 'show');
    });
    Route::controller(SaleController::class)->prefix('/sale')->group( function(){
        Route::get('/', 'index')->middleware('permission:sale-read');
        Route::get('/create', 'create')->middleware('permission:sale-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:sale-edit');
        Route::patch('/{id}', 'update')->middleware('permission:sale-update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:sale-delete');
        Route::get('/{id}', 'show');
    });

Route::controller(ArgenceController::class)->prefix('/argence')->group( function(){
    Route::get('/', 'index')->middleware('permission:argence-read');
    Route::get('/create', 'create')->middleware('permission:argence-create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit')->middleware('permission:argence-edit');
    Route::patch('/{id}', 'update')->middleware('permission:argence-update');
    Route::delete('/delete/{id}', 'destroy')->middleware('permission:argence-delete');
    Route::get('/{id}', 'show');
});
Route::controller(ProductsController::class)->prefix('/product')->group( function(){
    Route::get('/', 'index')->middleware('permission:product-read');
    Route::get('/create', 'create')->middleware('permission:product-create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit')->middleware('permission:product-edit');
    Route::patch('/{id}', 'update')->middleware('permission:product-update');
    Route::delete('/delete/{id}', 'destroy')->middleware('permission:product-delete');
    Route::get('/{id}', 'show');
});
Route::controller(UserController::class)->prefix('/user')->group( function(){
    Route::get('/', 'index')->middleware('permission:user-read');
    Route::get('/create', 'create')->middleware('permission:user-create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit')->middleware('permission:user-edit');
    Route::patch('/{id}', 'update')->middleware('permission:user-update');
    Route::delete('/delete/{id}', 'destroy')->middleware('permission:user-delete');
    Route::get('/{id}', 'show');
});
Route::controller(CustomerController::class)->prefix('/customer')->group( function(){
    Route::get('/', 'index')->middleware('permission:customer-read');
    Route::get('/create', 'create')->middleware('permission:customer-create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit')->middleware('permission:customer-edit');
    Route::patch('/{id}', 'update')->middleware('permission:customer-update');
    Route::delete('/delete/{id}', 'destroy')->middleware('permission:customer-delete');
    Route::get('/{id}', 'show');
});
Route::controller(CustomerProductController::class)->prefix('/order')->group( function(){
    Route::get('/', 'index')->middleware('permission:order-read');
    Route::get('/create', 'create')->middleware('permission:order-create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit')->middleware('permission:order-edit');
    Route::patch('/{id}', 'update')->middleware('permission:order-update');
    Route::delete('/delete/{id}', 'destroy')->middleware('permission:order-delete');
    Route::get('/{id}', 'show');
});
Route::controller(RoleProductController::class)->prefix('/vendor/laratrust/panel/roles')->group( function(){
    Route::get('/', 'index')->middleware('permission:roles-read');
    Route::get('/create', 'create')->middleware('permission:roles-create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit')->middleware('permission:roles-edit');
    Route::patch('/{id}', 'update')->middleware('permission:roles-update');
    Route::delete('/delete/{id}', 'destroy')->middleware('permission:roles-delete');
    Route::get('/{id}', 'show');
});
Route::controller(ImprimerController::class)->prefix('/imprimer')->group( function(){
    Route::get('/', 'index')->middleware('permission:imprimer-read');
    Route::get('/create/{id}', 'create')->middleware('permission:imprimer-create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit')->middleware('permission:imprimer-edit');
    Route::patch('/{id}', 'update')->middleware('permission:imprimer-update');
    Route::delete('/delete/{id}', 'destroy')->middleware('permission:imprimer-delete');
    Route::get('/{id}', 'show')->middleware('permission:imprimer-show');
});


Route::controller(OrderController::class)->prefix('/order')->group( function(){
    Route::get('/', 'index')->middleware('permission:order-read');
    Route::get('/create', 'create')->middleware('permission:order-create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit')->middleware('permission:order-edit');
    Route::patch('/{id}', 'update')->middleware('permission:order-update');
    Route::delete('/delete/{id}', 'destroy')->middleware('permission:order-delete');
    Route::get('/{id}', 'show')->middleware('permission:order-show');
});

});


require __DIR__.'/auth.php';
