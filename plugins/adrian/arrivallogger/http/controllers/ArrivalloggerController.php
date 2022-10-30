<?php

namespace Adrian\Arrivallogger\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Adrian\Arrivallogger\Http\Resources\ArrivalloggerResource;
use Adrian\Arrivallogger\Models\Arrivallogger;
use Illuminate\Routing\Controller;


class ArrivalloggerController extends Controller
{

    public function index()
    {
        $authId = Auth::user()->id;
        return Arrivallogger::where('user_id', 'LIKE', $authId)->get();
    }

    public function store() 
    {
        $Arrivallogger = new Arrivallogger;
        $Arrivallogger->name = Auth::user()->name;
        $Arrivallogger->late = date('H:i:s') > '08:00:00';
        $Arrivallogger->user_id = Auth::user()->id;
        $Arrivallogger->save();

        return ArrivalloggerResource::make($Arrivallogger);
    }


}