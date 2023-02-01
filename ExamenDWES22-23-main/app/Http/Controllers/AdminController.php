<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class AdminController extends Controller
{
    


    public function mostrar()
    {
        $driver= Driver::all();

        return view('admin')->with(['conductor'=>$driver]);
    }



}
