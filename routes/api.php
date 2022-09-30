<?php

use App\Http\Controllers\api\NotificationController;
use App\Http\Controllers\api\SurveyController;
use App\Http\Controllers\api\TenantController;
use App\Http\Controllers\api\TicketController;
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
Route::post("signIn", [TenantController::class,"signIn"]);
Route::put("tenants/{tenant}/reset-password",[TenantController::class,"resetPassword"]);
Route::get("tenants/{tenant}/notification",[TenantController::class,"getActiveNotifications"]);
Route::get("tenants/{tenant}/survey",[TenantController::class,"getActiveSurveys"]);
Route::get("notifications/{notification}",[NotificationController::class,"show"]);
Route::get("surveys/{survey}",[SurveyController::class,"show"]);
Route::put("surveys/{survey}",[SurveyController::class,"update"]);
Route::get("tenants/{tenant}/contracts",[TenantController::class,"getContracts"]);
Route::get("tenants/{tenant}/tickets",[TenantController::class,"getTickets"]);
Route::get("tickets/{ticket}",[TicketController::class,"show"]);
Route::post("tickets",[TicketController::class,"store"]);
Route::put("tickets/{ticket}",[TicketController::class,"sendMessage"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
