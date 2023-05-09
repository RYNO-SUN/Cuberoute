<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Variants;

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

Route::get('/addproduct', function () {
    return view('addproduct');
});
Route::get('/addcategory', function () {
    return view('addcategory');
});

Route::get('/addvarient', function () {
    return view('addvarient');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('/', [App\Http\Controllers\ProductsController::class, 'frontend']);


Route::get('/addproduct', [App\Http\Controllers\CategoriesController::class, 'index'])->name('addproduct');
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'show'])->name('categories');



Route::get('/editproduct/{id}' , [App\Http\Controllers\ProductsController::class, 'edit']);
Route::post('/editproduct/{id}' , [App\Http\Controllers\ProductsController::class, 'update']);

Route::get('/editcategory/{id}' , [App\Http\Controllers\CategoriesController::class, 'edit']);
Route::post('/editcategory/{id}' , [App\Http\Controllers\CategoriesController::class, 'update']);

Route::delete('/delete-product/{id}' , [App\Http\Controllers\ProductsController::class, 'destroy']);
Route::delete('/delete-category/{id}' , [App\Http\Controllers\CategoriesController::class, 'destroy']);
Route::delete('/delete-varient/{id}' , [App\Http\Controllers\VariantsController::class, 'destroy']);

Route::get('/varients', [App\Http\Controllers\VariantsController::class, 'index'])->name('varients');

Route::get('/editvarient/{id}' , [App\Http\Controllers\VariantsController::class, 'edit']);
Route::post('/editvarient/{id}' , [App\Http\Controllers\VariantsController::class, 'update']);

Route::get('/home', [App\Http\Controllers\ProductsController::class, 'counter'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);



Route::get('/showproducts', [App\Http\Controllers\CategoriesController::class, 'showCategoryProducts'])->name('showproducts');


Route::post('/addproduct', function () {
    
    $addproduct = new Products();
    $addproduct->Product_name = request('Product_name');
    $addproduct->product_slug = request('product_slug');
    $addproduct->category_id = request('category_id');
    $addproduct->varient = request('varient');

    $addproduct->save();
    
    return redirect('/products');
    
    
    });


    Route::post('/addcategory', function () {
    
        $addcategory = new Categories();
        $addcategory->category_name = request('category_name');
        $addcategory->save();
        
        return redirect('/categories');
        
        
        });

        Route::post('/addvarient', function () {
    
            $addvarient = new Variants();
            $addvarient->id = request('id');
            $addvarient->sap_product_code = request('sap_product_code');
            $addvarient->web_product_code = request('web_product_code');
            $addvarient->name = request('name');
            
        
            $addvarient->save();
            
            return redirect('/varients');
            
            
            });



