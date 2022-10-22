<?php

use Adrian\Arrivallogger\Http\Controllers\ArrivalloggerController;
// use Adrian\Arrivallogger\Models\Arrivallogger;
// use Adrian\Arrivallogger\Http\Resources\ArrivalloggerResource;

Route::get('students-arrival', [ArrivalloggerController::class, 'arrivals']);


/*
Route::group(['prefix' => 'resource'], function() {
    Route::get('students-arrival', function () {
        return ArrivalloggerResource::collection(Arrivallogger::all());
    });
    Route::get('student-arrival/{id}', function ($id) {
        return new ArrivalloggerResource(Arrivallogger::find($id));
    });
    Route::get('orm1/{name}', function ($name) {
        return new ArrivalloggerResource(Arrivallogger::find($name));
    });

});
*/

/*
Route::group(['prefix' => 'api'], function() {
    Route::get('students-arrival', function () {
        return Arrivallogger::all();
    });
    
    Route::post('add-arrival', function () {
        Arrivallogger::create(post());
        return 'Arrival added';
    });
    
    Route::get('orm1/{name}', function ($name) {
        $log = Arrivallogger::where('name', 'LIKE', $name)->get();
        return $log;
    });
    
    Route::get('orm2/{name}/{late}', function ($name, $late) {
        $log = Arrivallogger::where('name', 'LIKE', $name)
            ->orWhere('late', 'LIKE', $late)
            ->get();
        return $log;
    });
    
    Route::get('orm3', function () {
        $log = Arrivallogger::orderBy('created_at', 'desc')->get();
        return $log;
    });
});
*/
