<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\InsightController;
use App\Http\Controllers\Admin\NewContactController;
use App\Http\Controllers\Admin\JobapplicationController;
use App\Http\Controllers\Admin\CasestudyController;
use App\Http\Controllers\Admin\PostjobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReturnController;
use Illuminate\Support\Facades\Validator;
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

// Route::get('/', [HomeController::class, 'showhome']);

Route::get('/our-services', function(){

    $services=DB::table('services')->get();  
    
    return view('our-services', ['services' => $services]);
});

Route::get('/we-are', function(){
    return view('we-are');
});


Route::get('/we-care', function(){
    return view('we-care');
});

Route::get('/data-world', function(){
    $insights=DB::table('insights')->get();
    return view('data-world',['insights'=>$insights]);
});


Route::get('/cloud-providers', function(){
    $casestudies=DB::table('casestudies')->get();
    return view('cloud-providers',['casestudies'=>$casestudies]);
});

Route::get('/contact-us', function(){
    return view('contact-us');
});


Route::get('/case-study/{id}', function($id){

    $casestudy=DB::table('casestudies')->where('id', $id)->first();
    return view('case-study',['casestudy'=>$casestudy]);
});
Route::post('/contactus-store',  [WebController::class, 'storeContactUs']);
Route::post('/apply-now',  [WebController::class, 'applyNow']);




// contact routes

Route::post('/contact/store',  [NewContactController::class, 'store']);


// Route::get('/join-us', function(){
//     return view('join-us');
// });
Route::get('join-us', [WebController::class, 'joinus']);
Route::get('join-us/jobdetail/{id}', [WebController::class, 'jobdetail']);
Route::get('join-us/jobapply/{id}', [WebController::class, 'jobapply']);
Route::post('join-us/job-application/store', [WebController::class, 'jobapplicationstore']);

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
    //   Route::get('users/create', [UserController::class, 'create']);
    //  Route::get('users/list', [UserController::class, 'list']);
    //  Route::post('users/store', [UserController::class, 'store']);

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

    //Facts roue 
    Route::get('list/fact',[FactController::class,'getfactlist']);
    Route::get('create/fact',[FactController::class,'createfact']);
    Route::post('fact/store',[FactController::class,'storefact']);
    Route::delete('/fact/delete/{id}', [FactController::class, 'deleteFact']);


    // services route
    Route::get('service/list',[ServiceController::class,'getservice']);
    Route::get('service/create',[ServiceController::class,'createservice']);
    Route::get('service/create/update/{id}',[ServiceController::class,'editservice']);
    Route::post('service/store/update/{id}',[ServiceController::class,'updateservice']);
    Route::post('service/store',[ServiceController::class,'storeservice']);
    Route::delete('/service/delete/{id}', [ServiceController::class, 'deleteservice']);



    //Insights Route 

    Route::get('insight/list',[InsightController::class,'getinsight']);
    Route::get('insight/create',[InsightController::class,'createinsight']);
    Route::get('insight/create/update/{id}',[InsightController::class,'editinsight']);
    Route::post('insight/store/update/{id}',[InsightController::class,'updateinsight']);
    Route::post('insight/store',[InsightController::class,'storeinsight']);
    Route::delete('/insight/delete/{id}', [InsightController::class, 'deleteinsight']);

    //Case sTUDIES rOUTE
 
    
    Route::get('casestudy/list',[CasestudyController::class,'getcasestudy']);
    Route::get('casestudy/create',[CasestudyController::class,'createcasestudy']);
    Route::post('casestudy/store',[CasestudyController::class,'casestudystore']);
    Route::get('casestudy/createupdate/{id}',[CasestudyController::class,'editcasestudy']);
    Route::put('casestudy/update/{id}',[CasestudyController::class,'updatecasestudy']);
    Route::delete('casestudy/delete/{id}', [CasestudyController::class, 'deletecasestudy']);

    // Designation and job routes Route 

    Route::get('job/list',[PostjobController::class,'job_designation_list']);
    Route::get('job/create',[PostjobController::class,'createjob']);
    Route::post('job/store',[PostjobController::class,'storejob'])->name('job.store');
    Route::get('job/createupdate/{id}',[PostjobController::class,'createjobupdate']);
    Route::put('job/update/{id}',[PostjobController::class,'jobupdate'])->name('job.update');
    Route::delete('job/delete/{id}',[PostjobController::class,'deletejob']);

    Route::get('designation/create',[PostjobController::class,'createdesignation']);
    Route::post('designation/store',[PostjobController::class,'storedesignation'])->name('designation.store');
    Route::delete('designation/delete/{id}',[PostjobController::class,'deletedesignation']);



    Route::get('application/list',[JobapplicationController::class,'applicationlist']);
    Route::get('application/view/{id}',[JobapplicationController::class,'applicationview']);
    Route::delete('application/delete/{id}',[JobapplicationController::class,'applicationdelete']);
   
   
    Route::get('contact/list',[NewContactController::class,'index']);
    Route::delete('contact/delete/{id}',[NewContactController::class,'destroy']);
    


    
});