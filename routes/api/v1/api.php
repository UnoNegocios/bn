<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Video;
use App\Actions\Mux\CreateAsset;

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

Route::middleware('auth:api')->get('/gato', function (Request $request){
    $video_id = 1;
    $filePath = 'https://a6c1-2806-230-1020-c16b-a92d-30bf-c14d-a132.ngrok.io/files/2022-11-22%2023:25:24.mp4';
    $test =  new CreateAsset();
    return $test->create($video_id, $filePath);
});

Route::webhooks('webhook-receiving-mux', 'mux');


//Auth
Route::prefix('user')->group( function() {
    Route::post('/login', 'App\Http\Controllers\api\v1\auth\LoginUser');
    Route::middleware('auth:api')->get('/current', 'App\Http\Controllers\api\v1\auth\CurrentUser');
});

//Users
Route::middleware('auth:api')->group(function() {
    Route::apiResource('users', 'App\Http\Controllers\api\v1\user\UserController');
    Route::patch('user/password', 'App\Http\Controllers\api\v1\user\UserController@password');
    Route::get('user/search', 'App\Http\Controllers\api\v1\user\UserController@search');
});

//Appointments
Route::middleware('auth:api')->group(function() {
    Route::apiResource('appointments', 'App\Http\Controllers\api\v1\appointment\AppointmentController');
});

//Training Plans
Route::middleware('auth:api')->group(function() {
    Route::apiResource('training_plans', 'App\Http\Controllers\api\v1\training_plan\TrainingPlanController');
});


//Videos
Route::middleware('auth:api')->group(function() {
    Route::apiResource('videos', 'App\Http\Controllers\api\v1\video\VideoController');
    Route::post('video/upload','App\Http\Controllers\api\v1\video\VideoController@files');
});

//Video Categories
Route::middleware('auth:api')->group(function() {
    Route::apiResource('video_categories', 'App\Http\Controllers\api\v1\video_category\VideoCategoryController');
});

//Workout Routine

Route::middleware('auth:api')->group(function() {
    Route::apiResource('workout_routines', 'App\Http\Controllers\api\v1\workout_routine\WorkoutRoutineController');
});