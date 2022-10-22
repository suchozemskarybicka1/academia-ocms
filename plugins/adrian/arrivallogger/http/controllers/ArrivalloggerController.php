<?php

namespace Adrian\Arrivallogger\Http\Controllers;
 
use Adrian\Arrivallogger\Http\Resources\ArrivalloggerResource;
use Adrian\Arrivallogger\Models\Arrivallogger;

class ArrivalloggerController
{

    public function Arrivals()
    {
        return ArrivalloggerResource::collection(Arrivallogger::all());
    }
}