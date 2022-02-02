<?php

use App\Http\Controllers\AllUserProfileController;
use App\Http\Controllers\EventIndexController;
use App\Http\Controllers\EventStoreController;
use App\Http\Controllers\PostIndexController;
use App\Http\Controllers\PostIndexUserController;
use App\Http\Controllers\PostStoreController;
use App\Http\Controllers\ProfileShowController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/{user:username}', UserProfileController::class);
Route::get('/get/users', AllUserProfileController::class);


Route::post('/posts', PostStoreController::class);
Route::get('/get/posts', PostIndexController::class);
Route::get('/get/user/posts', PostIndexUserController::class);

Route::post('/events', EventStoreController::class);
Route::get('/get/events', EventIndexController::class);

