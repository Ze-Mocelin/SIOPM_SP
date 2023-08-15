<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BattalionMapController;

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

Route::resource('/battalion-map', BattalionMapController::class);
Route::group(['prefix'=>'question','as'=>'question.'],function(){
   Route::post('/',[\App\Http\Controllers\API\QuestionController::class,'getQuestion'])->name('get-question');
});
