<?php

use App\Http\Controllers\CarpentryController;
use App\Http\Controllers\CommercialMaintenanceController;
use App\Http\Controllers\DrivalRepairController;
use App\Http\Controllers\FlooringController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeRepairsController;
use App\Http\Controllers\PaintingController;
use App\Http\Controllers\PlumbingController;
use Illuminate\Support\Facades\Route;

Route::get('/',([HomeController::class, 'index']))->name('home');
Route::get('/carpentry', ([CarpentryController::class, 'index']))->name('carpentry');
Route::get('/drivalRepair', ([DrivalRepairController::class, 'index']))->name('drivalRepair');
Route::get('/flooring', ([FlooringController::class, 'index']))->name('flooring');
Route::get('furniture', ([FurnitureController::class, 'index']))->name('furniture');
Route::get('/plumbing', ([PlumbingController::class, 'index']))->name('plumbing');
Route::get( '/painting', ([PaintingController::class, 'index']))->name('painting');
Route::get( '/homeRepairs', ([HomeRepairsController::class, 'index']))->name('homeRepairs');
Route::get('/commercialMaintenance', ([CommercialMaintenanceController::class, 'index']))->name('commercialMaintenance');