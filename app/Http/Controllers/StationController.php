<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class StationController extends Controller
{
    //
    public function stationAllView()
    {
        // Pulling assets from db
        $assets = Asset::get();


        return view('stationAllView', ['all' => $assets]);
    }
}
