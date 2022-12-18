<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PeopleController;

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

Route::get('people', [PeopleController::class, 'index']);
Route::get('people/{people}', [PeopleController::class, 'show']);
Route::post('people', [PeopleController::class, 'store']);
Route::put('people/{people}', [PeopleController::class, 'update']);
Route::delete('people/{people}', [PeopleController::class, 'delete']);
