<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\RoleController;
// use App\Http\Controllers\Admin\PermissionController;




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

Auth::routes();


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



//Dashboard
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');




// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['auth']], function() {
//     // Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     // Route::resource('products', ProductController::class);
// });




//For Users

Route::prefix('users')->middleware(['auth'])->group(function () {
    // User List (Index)

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');

    // Create User Details
    Route::get('/create', [UserController::class, 'create'])->name('users.create');

     // Create User
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');

    // Show User Details
    Route::get('/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');

    // // Edit User
    Route::get('/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');

    // // Update User
    Route::put('/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');

    // // Delete User
    Route::delete('/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
});



// For Roles

Route::prefix('roles')->middleware(['auth'])->group(function () {
    // Role List (Index)

    Route::get('/roles', [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('roles');

    // Create Role Details
    Route::get('/create', [App\Http\Controllers\Admin\RoleController::class, 'create'])->name('roles.create');

    //  Store Role
    Route::post('/roles', [App\Http\Controllers\Admin\RoleController::class, 'store'])->name('roles.store');


    // Show Role Details
    Route::get('/{role}', [App\Http\Controllers\Admin\RoleController::class, 'show'])->name('roles.show');

    //  Edit Role
    Route::get('/{role}/edit', [App\Http\Controllers\Admin\RoleController::class, 'edit'])->name('roles.edit');

    // Update Role
    Route::put('/{role}', [App\Http\Controllers\Admin\RoleController::class, 'update'])->name('roles.update');

    // Delete Role
    Route::delete('/{role}', [App\Http\Controllers\Admin\RoleController::class, 'destroy'])->name('roles.destroy');
});




// For categories

Route::prefix('categories')->middleware(['auth'])->group(function () {
    // category List (Index)

    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');

    // Create category Details
    Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');

    //  Store category
    Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');


    // Show category Details
    Route::get('/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');

     // Edit category
    Route::get('/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');

    // Update category
    Route::put('/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');

    //  Delete category
    Route::delete('/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
});



// For Subcategories

Route::prefix('subcategories')->middleware(['auth'])->group(function () {
    // subcategories List (Index)

    Route::get('/subcategories', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('subcategories');

    // Create subcategories Details
    Route::get('/create', [App\Http\Controllers\SubCategoryController::class, 'create'])->name('subcategories.create');

    //  Store subcategories
    Route::post('/subcategories', [App\Http\Controllers\SubCategoryController::class, 'store'])->name('subcategories.store');


    // Show subcategories Details
    Route::get('/{subcategories}', [App\Http\Controllers\SubCategoryController::class, 'show'])->name('subcategories.show');

     // Edit subcategories
    Route::get('/{subcategories}/edit', [App\Http\Controllers\SubCategoryController::class, 'edit'])->name('subcategories.edit');

    // Update subcategories
    Route::put('/{subcategories}', [App\Http\Controllers\SubCategoryController::class, 'update'])->name('subcategories.update');

    //  Delete subcategories
    Route::delete('/{subcategories}', [App\Http\Controllers\SubCategoryController::class, 'destroy'])->name('subcategories.destroy');
});



// For Products

Route::prefix('products')->middleware(['auth'])->group(function () {
    // Product List (Index)

    Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');

    // Create Product Details
    Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');

    //  Store Product
    Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');


    // Show Product Details
    Route::get('/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

     // Edit Product
    Route::get('/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');

    // Update Product
    Route::put('/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');

    //  Delete Product
    Route::delete('/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');
});


// For Size

Route::prefix('sizes')->middleware(['auth'])->group(function () {
    // Size List (Index)

    Route::get('/sizes', [App\Http\Controllers\SizeController::class, 'index'])->name('sizes');

    // Create Size Details
    Route::get('/create', [App\Http\Controllers\SizeController::class, 'create'])->name('sizes.create');

    //  Store Size
    Route::post('/sizes', [App\Http\Controllers\SizeController::class, 'store'])->name('sizes.store');


    // Show Size Details
    Route::get('/{size}', [App\Http\Controllers\SizeController::class, 'show'])->name('sizes.show');

     // Edit Size
    Route::get('/{size}/edit', [App\Http\Controllers\SizeController::class, 'edit'])->name('sizes.edit');

    // Update Size
    Route::put('/{size}', [App\Http\Controllers\SizeController::class, 'update'])->name('sizes.update');

    //  Delete Size
    Route::delete('/{size}', [App\Http\Controllers\SizeController::class, 'destroy'])->name('sizes.destroy');
});
