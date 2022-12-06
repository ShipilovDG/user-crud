<?php

use Illuminate\Support\Facades\Route;

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
/**
 * @OA\Get(
 *     path="/",
 *     @OA\Response(
 *         response="200",
 *         description="returns swagger ui"
 *     )
 * )
 */
Route::get('/', [\App\Http\Controllers\SwaggerController::class, 'getTemplate']);
/**
 * @OA\Get(
 *     path="/swagger",
 *     @OA\Response(
 *         response="200",
 *         description="returns swagger json"
 *     )
 * )
 */
Route::get('/swagger', [\App\Http\Controllers\SwaggerController::class, 'getSwaggerSchema']);
/**
 * @OA\Get(
 *     path="/getCategory",
 *     @OA\Response(
 *         response="200",
 *         description="returns categoryObject"
 *     )
 * )
 */
Route::get('/getCategory', function () {
    return new \Illuminate\Http\JsonResponse(['id' => 1, "title" => 'MyCategorySport']);
});
