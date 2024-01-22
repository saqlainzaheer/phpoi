<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\Admin\JobPositionController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/', [WebController::class, 'home']);

Route::get('/our-services', function(){
    return view('our-services');
});

Route::get('/we-are', function(){
    return view('we-are');
});


Route::get('/we-care', function(){
    return view('we-care');
});

Route::get('/data-world', function(){
    return view('data-world');
});


Route::get('/cloud-providers', function(){
    return view('cloud-providers');
});

Route::get('/contact-us', function(){
    return view('contact-us');
});
Route::get('/case-study', function(){
    return view('case-study');
});
Route::post('/contactus-store',  [WebController::class, 'storeContactUs']);
Route::post('/apply-now',  [WebController::class, 'applyNow']);


    

// Route::get('/join-us', function(){
//     return view('join-us');
// });
Route::get('join-us', [WebController::class, 'joinus']);

Route::post('dealership/store', [WebController::class, 'storeDealerShip']);
Route::post('contact-us/store', [WebController::class, 'storeContact']);
Route::post('product-message/store', [WebController::class, 'storeProductMessage']);
Route::get('products', [WebController::class, 'products']);
Route::get('products/{id}', [WebController::class, 'productDetails']);
Route::get('study/{slug}', [WebController::class, 'study']);
Route::get('terms', [WebController::class, 'terms']);


// Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
    // Route::get('dealership-submissions', [DashboardController::class, 'getDealershipSubmissions']);
    Route::get('contact-submissions', [DashboardController::class, 'getContacts']);
    Route::get('contacts/destroy/{id}',[DashboardController::class, 'destroyContact']);
    // Route::get('dealership/destroy/{id}',[DashboardController::class, 'destroyDealership']);
    Route::get('message-submissions', [DashboardController::class, 'getMessages']);
    Route::get('message/destroy/{id}',[DashboardController::class, 'destroyMessage']);

   
    // Route::get('action/{id}/{param}', [UserController::class, 'approveDisapprove']);
    // Route::get('users/create', [UserController::class, 'create']);
    // Route::post('users/store', [UserController::class, 'store']);
    // Route::get('users/edit/{id}', [UserController::class, 'Edit']);
    // Route::put('users/update/{id}', [UserController::class, 'Update']);
    // Route::post('users/delete/{id}', [UserController::class, 'Delete']);
    // Route::get('products',[ProductController::class, 'index']);
    // Route::get('products/edit/{id}',[ProductController::class, 'edit']);
    // Route::put('products/update/{id}',[ProductController::class, 'update']);
    // Route::get('products/destroy/{id}',[ProductController::class, 'destroy']);
    // Route::get('products/create',[ProductController::class, 'create']);
    // Route::post('products',[ProductController::class, 'store']);

    Route::get('job-positions',[JobPositionController::class, 'index']);
    Route::get('job-positions/edit/{id}',[JobPositionController::class, 'edit']);
    Route::put('job-positions/update/{id}',[JobPositionController::class, 'update']);
    Route::get('job-positions/destroy/{id}',[JobPositionController::class, 'destroy']);
    Route::get('job-positions/create',[JobPositionController::class, 'create']);
    Route::post('job-positions',[JobPositionController::class, 'store']);
    Route::get('job-requests',[JobPositionController::class, 'jobRequests']);



});
