<?php

namespace App\Http\Controllers;

use App\Models\assets;
use Illuminate\Http\Request;


class AssetController extends Controller
{
    // view of all users
    public function assetAllView()
    {
        $pc = array();
        $laptop = array();
        $monitor = array();

        $assets = assets::all();
        foreach ($assets as $asset) {
            if ($asset->type == "Laptop") {
                array_push($laptop, array($asset));
            }

            if ($asset->type == "PC") {
                array_push($pc, array($asset));
            }

            if ($asset->type == "Monitor") {
                array_push($monitor, $asset);
            }
        };

        return view("assetAllView", ['all' => $assets, 'laptop' => $laptop, 'pc' => $pc, 'monitor' => $monitor]);
    }
}
