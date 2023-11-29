<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;


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
    Route::post('refresh', 'refresh');
});

// Route::controller(EmployeeController::class)->group(function () {
//     Route::post('login', 'login');
//     Route::post('register', 'register');
//     Route::post('logout', 'logout');
//     Route::post('refresh', 'refresh');
// });
// Route::post('createShop', ShopController::class);

Route::controller(ShopController::class)->group(function (){
    Route::post('create/shop', 'createShop');
    Route::post('update/shop/{id}', 'updateShop');
    Route::get('show/shop/{id}', 'showShop');
    Route::delete('delete/shop/{id}', 'deleteShop');
});

Route::controller(BranchController::class)->group(function (){
    Route::post('create/branch', 'createBranch');
    Route::post('update/branch/{id}', 'updateBranch');
    Route::get('show/branch/{id}', 'showBranch');
    Route::delete('delete/branch/{id}', 'deleteBranch');

});
// Route::put('update/{shopid}', [ShopController::class, 'updateShop']);
// Route::resource('shop',ShopController::class);
// Route::resource('branch',BranchController::class);