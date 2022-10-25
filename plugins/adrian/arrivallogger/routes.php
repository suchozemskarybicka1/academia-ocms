<?php

use Adrian\Arrivallogger\Http\Controllers\ArrivalloggerController;
use Adrian\Arrivallogger\Models\Arrivallogger;
// use Adrian\Arrivallogger\Http\Resources\ArrivalloggerResource;

Route::get('students-arrival', [ArrivalloggerController::class, 'arrivals']);

Route::get('student-arrival/{name}', [ArrivalloggerController::class, 'arrival']);

Route::get('order-arrivals', [ArrivalloggerController::class, 'orderArrivals']);

Route::get('filter-arrival/{name}/{late}', [ArrivalloggerController::class, 'filterArrival']);


Route::get('add-user-id', [
    'middleware' => 'auth',
    'uses' => ArrivalloggerController::class, 'addUserId']);
