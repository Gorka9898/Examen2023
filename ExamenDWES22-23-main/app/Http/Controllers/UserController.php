<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Trip;
use App\Models\User;

class UserController extends Controller
{
    public function mostrar()
    {
        $trips= Trip::all();

        return view('viajes')->with([ 'viaje'=>$trips]);
    }

    public function reservar($id)
    {
        $user= auth()->user();
        $viaje= Trip::find($id);

        $user()->viajes()->associate($viaje)->save();
        

        return redirect('/viajes');
    }
}
