<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\LoginController;

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

// catch root access and redirect to /login
Route::get('/', function () {
    return redirect('/assets');
});


// // login controller
// Route::get('/login', [LoginController::class, 'userLogin']);
// Route::get('/create-user', [LoginController::class, 'userCreation']);



// asset view
Route::get('/assets', [AssetController::class, 'assetAllView']);
Route::post('/post-asset', [AssetController::class, 'postAsset']);
