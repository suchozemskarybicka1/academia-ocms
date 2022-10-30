<?php

use Adrian\Arrivallogger\Http\Controllers\ArrivalloggerController;


Route::middleware(['auth'])->group (function() {
    
    Route::get('my-arrivals', [ArrivalloggerController::class, 'index']);    
  
    Route::post('new-arrival', [ArrivalloggerController::class, 'store']);
    
});