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

Route::get('dobosz/305355/people', [PeopleController::class, 'index']);
Route::get('dobosz/305355/people/{people}', [PeopleController::class, 'show']);
Route::post('dobosz/305355/people', [PeopleController::class, 'store']);
Route::put('dobosz/305355/people/{people}', [PeopleController::class, 'update']);
Route::delete('dobosz/305355/people/{people}', [PeopleController::class, 'delete']);
