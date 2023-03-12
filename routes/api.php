<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\AuthController;
use App\Http\Controllers\Api\User\HomeController;
use App\Http\Controllers\Api\User\CartController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::post('store_contact',[\App\Http\Controllers\Api\ContactController::class,'store']);
    Route::get('sliders',[\App\Http\Controllers\Api\SliderController::class,'index']);
    Route::get('projects',[\App\Http\Controllers\Api\ProjectsController::class,'index']);
    Route::get('client_mages',[\App\Http\Controllers\Api\ClientImagesController::class,'index']);
    Route::get('about',[\App\Http\Controllers\Api\AboutController::class,'index']);
    Route::get('Setting',[\App\Http\Controllers\Api\SettingController::class,'index']);



Route::prefix('user')->group(function () {

        Route::prefix('auth')->group(function () {
            Route::post('/login', [AuthController::class, 'login']);
            Route::post('/register', [AuthController::class, 'Store']);
            Route::post('forget-password', [AuthController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
            Route::post('reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');

        });
    Route::middleware(['UserApi'])->group(function (){
        Route::get('/profile', [AuthController::class, 'profile']);
        Route::post('/update-profile', [AuthController::class, 'updateProfile']);

        Route::get('/home', [HomeController::class, 'home']);
        Route::post('/categories', [HomeController::class, 'Categories']);
        Route::post('/services', [HomeController::class, 'Services']);
        Route::post('/service', [HomeController::class, 'Service']);
        Route::post('/service', [HomeController::class, 'Service']);
        Route::post('/fa', [HomeController::class, 'addFavorite']);
        Route::post('/add-favorite', [HomeController::class, 'addFavorite']);
        Route::post('/remove-favorite', [HomeController::class, 'Service']);

        Route::prefix('orders')->group(function (){
            Route::get('/',[HomeController::class,'index']);
            Route::post('/details',[HomeController::class,'details']);
            Route::post('/store',[HomeController::class,'store']);
            Route::post('remove',[HomeController::class,'delete']);
        });

        Route::prefix('favorite-services')->group(function (){
            Route::get('/',[HomeController::class,'favoriteServices']);
            Route::post('/store',[HomeController::class,'addFavorite']);
            Route::post('remove',[HomeController::class,'RemoveFavorite']);
        });

        Route::prefix('cart')->group(function (){
            Route::get('/',[CartController::class,'index']);
            Route::post('/store',[CartController::class,'store']);
            Route::post('remove',[CartController::class,'cartRemove']);
        });
    });





});
