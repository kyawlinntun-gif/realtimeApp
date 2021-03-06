<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* ---------- Start of Questions Routes ---------- */
Route::apiResource('questions', 'QuestionController');
/* ---------- End of Questions Routes ---------- */

/* ---------- Start of Categories Routes ---------- */
Route::apiResource('categories', 'CategoryController');
/* ---------- End of Categories Routes ---------- */

/* ---------- Start of Questions Routes ---------- */
Route::apiResource('questions/{question}/reply', 'ReplyController');
/* ---------- End of Questions Routes ---------- */

/* ---------- Start of Like and Unlike Routes ---------- */
Route::post('/like/{reply}', 'LikeController@likeIt');
Route::delete('/like/{reply}', 'LikeController@unLikeIt');
/* ---------- End of Like and Unlike Routes ---------- */
