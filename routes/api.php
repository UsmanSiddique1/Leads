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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('leads', function(){
    $leads = Lead::all();
    return response()->json($leads);
});

Route::get('leads\{lead}', function(Lead $lead){
    return response()->json($lead);
});

Route::post('lead', function(Request $request){
    $lead = Lead::create($request);
    return response()->json($lead, 201);
});

Route::get('appointments', function(){
    $appointments = Appointment::all();
    return response()->json($appointments);
});

Route::get('appointment\{appointment}', function(Lead $appointment){
    return response()->json($appointment);
});

Route::post('appointment', function(Request $request){
    $appointment = Appointment::create($request);
    return response()->json($appointment, 201);
});



