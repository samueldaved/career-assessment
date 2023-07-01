<?php

use App\Models\Test;
use App\Models\User;
use App\Models\TestResult;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestResultController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function() {
    $exitCode = Artisan::call('config:clear');
    //$exitCode = Artisan::call('cache:clear');
    //$exitCode = Artisan::call('config:cache');
    return 'clear'; //Return anything
});

Route::controller(AppController::class)->group(function() {
    Route::middleware('auth')->group(function () {
        Route::get('/', 'home');
        Route::get('/contact', 'contact');
        Route::get('/user-setting', 'userSetting');
    });
});

Route::controller(UserController::class)->group(function() {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');

    Route::middleware('auth')->group(function () {
        Route::get('/logout', 'logout')->middleware('auth');
        Route::get('/users/create', 'create');
        Route::post('/users', 'store');
        Route::get('/users/{user}/edit', 'edit');
        Route::put('/users/{user}', 'update');
        Route::get('/users/{user}', 'show');
        Route::delete('/users/{user}', 'destroy');
    });
    
});

Route::controller(TestController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/assessment-test/{test}', 'show');
        Route::post('/assessment-test/1', 'checkMbtiTest');
        Route::post('/assessment-test/2', 'checkSdsTest');
        Route::post('/assessment-test/3', 'checkDiscTest');
    });
});

Route::controller(TestResultController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/result/create', 'create');
        Route::get('/result/{user}', 'show')->name('result.show');
        Route::delete('/result/{testResult}', 'destroy');
        Route::get('/result/download/{user}', 'download');
    });
});

