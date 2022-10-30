<?php

namespace Adrian\Arrivallogger\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Adrian\Arrivallogger\Http\Resources\ArrivalloggerResource;
use Adrian\Arrivallogger\Models\Arrivallogger;
use Illuminate\Routing\Controller;
use LibUser\Userapi\Http\Resources\UserResource;
use LibUser\Userapi\Models\User;


class ArrivalloggerController extends Controller
{

    public function index()
    {
        return ArrivalloggerResource::collection(Arrivallogger::all());
    }

    public function show($name)
    {
        return ArrivalloggerResource::collection(Arrivallogger::where('name', 'LIKE', $name)->get());
    }

    public function showOrdered()
    {
        return ArrivalloggerResource::collection(Arrivallogger::orderBy('created_at', 'desc')->get());
    }
    
    public function showLateOrName($name, $late)
    {
        return ArrivalloggerResource::collection(Arrivallogger::where('name', 'LIKE', $name)
            ->orWhere('late', 'LIKE', $late)
            ->get());
    }

    public function indexAuthUser()
    {
        return Auth::user()->name;
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