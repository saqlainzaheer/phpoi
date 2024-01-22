<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\InvestmentDataController;
use App\Http\Controllers\api\NomineeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
});


Route::middleware(['auth:sanctum','isCustomer'])->group(function () {
    Route::get('dashboard-summary', [InvestmentDataController::class, 'dashboardSummary']);
    Route::post('create-deposit-request', [CustomerController::class, 'createDepositRequest']);
    Route::get('list-deposit-requests', [CustomerController::class, 'listDepositRequest']);
    Route::post('create-profile', [AuthController::class, 'createProfile']);
    Route::get('profile', [AuthController::class, 'getProfile']);

    Route::post('add-nominee',[NomineeController::class,'addNominee']);
    Route::post('edit-nominee/{id}',[NomineeController::class,'Edit']);
    Route::get('list-nominee',[NomineeController::class,'ListNominee']);
    Route::get('list-salaries',[CustomerController::class,'listSalaries']);
    Route::get('list-orders-history',[CustomerController::class,'listHistoryOrders']);
    Route::get('portfolio',[CustomerController::class,'portfolio']);
    Route::get('returns',[CustomerController::class,'returns']);



});
