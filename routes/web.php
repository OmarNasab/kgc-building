<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserContrller;
use App\Models\Building;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard',["buildings"=> Building::all()]);
})->middleware(['auth'])->name('dashboard');

Route::middleware(["auth"])->group(function (){
    Route::resources([
        "buildings"=> BuildingController::class,
        "areas"=> AreaController::class,
        "units"=> UnitController::class,
        "types"=> TypeController::class,
        "categories"=> CategoryController::class,
        "sub-categories"=> SubCategoryController::class,
        "tenants"=> TenantController::class,
        "contracts"=> ContractController::class,
        "notifications"=> NotificationController::class,
        "tickets"=> TicketController::class,
        "surveys"=> SurveyController::class,
        "roles"=> RoleController::class,
        "users"=> UserContrller::class
    ]);
});

require __DIR__.'/auth.php';
