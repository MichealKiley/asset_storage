<?php

namespace App\Http\Controllers;

use App\Models\Asset;
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

    public function postAsset(Request $request)
    {
        $assetData = $request->validate([
            "request-type" => 'required',
            'type' => 'required',
            'make' => 'required',
            'model' => 'required',
            'location' => 'required',
            'status' => 'required'
        ]);

        if ($assetData["request-type"] == "add") {

            unset($assetData["request-type"]);

            foreach ($assetData as $key => $value) {
                echo $key . " : " . $value . "<br>";
            }

            assets::

        }

        return "dolla dolla bills y'all";
    }
}
