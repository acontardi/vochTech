<?php

use App\Http\Controllers\CollaboratorsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\PositionemployeeController;
use App\Http\Controllers\CollaboratorReportController;
use App\Http\Controllers\TotalEmployeeperUnit;
use App\Http\Controllers\EmployeeRanking;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('units', UnitsController::class);

Route::resource('collaborators', CollaboratorsController::class);

Route::resource('positionemployee', PositionemployeeController::class);

Route::get('/Report/CollaboratorReport', [CollaboratorReportController::class, 'CollaboratorReport']);

Route::get('/Report/TotalEmployeeperUnit', [TotalEmployeeperUnit::class, 'TotalEmployeeperUnit']);

Route::get('/Report/EmployeeRanking', [EmployeeRanking::class, 'EmployeeRanking']);