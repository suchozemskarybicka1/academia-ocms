<?php

use Adrian\Arrivallogger\Http\Controllers\ArrivalloggerController;
use Adrian\Arrivallogger\Models\Arrivallogger;
use LibUser\Userapi\Models\User;
// use Adrian\Arrivallogger\Http\Resources\ArrivalloggerResource;
use LibUser\Userapi\Http\Resources\UserResource;

Route::get('students-arrival', [ArrivalloggerController::class, 'index']);

Route::get('student-arrival/{name}', [ArrivalloggerController::class, 'show']);

Route::get('order-arrivals', [ArrivalloggerController::class, 'showOrdered']);

Route::get('filter-arrival/{name}/{late}', [ArrivalloggerController::class, 'showLateOrName']);


Route::middleware(['auth'])->group (function() {
    Route::get('get-auth-user', [ArrivalloggerController::class, 'getAuthUser']);    
});