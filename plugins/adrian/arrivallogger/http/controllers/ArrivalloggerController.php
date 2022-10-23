<?php

namespace Adrian\Arrivallogger\Http\Controllers;
 
use Adrian\Arrivallogger\Http\Resources\ArrivalloggerResource;
use Adrian\Arrivallogger\Models\Arrivallogger;
use Illuminate\Routing\Controller;

class ArrivalloggerController extends Controller
{

    public function arrivals()
    {
        return ArrivalloggerResource::collection(Arrivallogger::all());
    }

    public function arrival($name)
    {
        return ArrivalloggerResource::collection(Arrivallogger::where('name', 'LIKE', $name)->get());
    }

    public function orderArrivals()
    {
        return ArrivalloggerResource::collection(Arrivallogger::orderBy('created_at', 'desc')->get());
    }

    public function filterArrival($name, $late)
    {
        return ArrivalloggerResource::collection(Arrivallogger::where('name', 'LIKE', $name)
            ->orWhere('late', 'LIKE', $late)
            ->get());
    }

}

