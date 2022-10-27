<?php

use Adrian\Arrivallogger\Http\Controllers\ArrivalloggerController;
use Adrian\Arrivallogger\Models\Arrivallogger;
// use Adrian\Arrivallogger\Http\Resources\ArrivalloggerResource;
use LibUser\Userapi\Http\Resources\UserResource;

Route::get('students-arrival', [ArrivalloggerController::class, 'arrivals']);

Route::get('student-arrival/{name}', [ArrivalloggerController::class, 'arrival']);

Route::get('order-arrivals', [ArrivalloggerController::class, 'orderArrivals']);

Route::get('filter-arrival/{name}/{late}', [ArrivalloggerController::class, 'filterArrival']);


Route::get('get-userid', [ArrivalloggerController::class, 'addUserId'])->middleware('auth');