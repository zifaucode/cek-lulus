<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;




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

Route::get('/', function () {
    return view('welcome');
});



/**
 * Home Routes
 */

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'LoginForm'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');




Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('/student')->group(function () {
        Route::get('/', [StudentController::class, 'index']);
        Route::get('/upload', [StudentController::class, 'upload']);
        Route::post('/', [StudentController::class, 'store']);
        Route::post('/import_excel', [StudentController::class, 'import_excel']);
        Route::get('/edit/{id}', [StudentController::class, 'edit']);
        Route::get('/detail/{id}', [StudentController::class, 'detail']);
        Route::patch('/{id}', [StudentController::class, 'update']);
        Route::delete('/{id}', [StudentController::class, 'destroy']);
    });

    Route::prefix('/web')->group(function () {
        Route::get('/', [WebController::class, 'index']);
        Route::get('/upload', [WebController::class, 'upload']);
        Route::post('/', [WebController::class, 'store']);
        Route::get('/edit/{id}', [WebController::class, 'edit']);
        Route::post('/edit2/{id}', [WebController::class, 'update']);
        Route::get('/detail/{id}', [WebController::class, 'detail']);
        Route::patch('/{id}', [WebController::class, 'update']);
        Route::delete('/{id}', [WebController::class, 'destroy']);
    });

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index']);
        Route::get('/upload', [ProfileController::class, 'upload']);
        Route::post('/', [ProfileController::class, 'store']);
        Route::get('/edit/{id}', [ProfileController::class, 'edit']);
        Route::post('/edit2/{id}', [ProfileController::class, 'update']);
        Route::get('/detail/{id}', [ProfileController::class, 'detail']);
        Route::patch('/{id}', [ProfileController::class, 'update']);
        Route::delete('/{id}', [ProfileController::class, 'destroy']);
    });

    Route::prefix('/setting')->group(function () {
        Route::get('/', [SettingController::class, 'index']);
        Route::get('/upload', [SettingController::class, 'upload']);
        Route::post('/', [SettingController::class, 'store']);
        Route::get('/edit/{id}', [SettingController::class, 'edit']);
        Route::post('/edit2/{id}', [SettingController::class, 'update']);
        Route::get('/detail/{id}', [SettingController::class, 'detail']);
        Route::patch('/{id}', [SettingController::class, 'update']);
        Route::delete('/{id}', [SettingController::class, 'destroy']);
    });
});
