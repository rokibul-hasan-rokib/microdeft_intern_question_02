<?php

use App\Http\Controllers\RequisitionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('requisition',RequisitionController::class);