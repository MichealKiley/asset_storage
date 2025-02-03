<?php

namespace App\Http\Controllers;

use App\Models\assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AssetController extends Controller
{
    // view of all users
    public function assetAllView()
    {
        // Pulling assets from db
        $assets = assets::get();


        return view("assetAllView", ['all' => $assets]);
    }
}
