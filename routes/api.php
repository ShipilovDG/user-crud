<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/**
 * @OA\Info(title="Search API", version="3.0.0")
 *
 */
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

Route::post('/createCategory');//
Route::post('/compareObjectToCategory');//добавляем строки по категориям
