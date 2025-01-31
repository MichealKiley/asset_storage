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
        $assetPreFormat = array();
        $assetPostFormat = array();

        $pc = array();
        $laptop = array();
        $monitor = array();

        // Pulling assets from db
        $assets = assets::get();

        // Formatting Output
        foreach ($assets as $asset) {
            array_push($assetPreFormat, $asset);
        }

        foreach ($assetPreFormat as $value) {
            $singleAssetFormat = array();

            $sepByComma = explode(',', $value);
            foreach ($sepByComma as $formatStr) {
                $formatStr = str_replace('"', "", $formatStr);
                $formatStr = str_replace('{', "", $formatStr);
                $formatStr = str_replace('}', "", $formatStr);
                $singleAssetFormat += [explode(':', $formatStr)[0] => explode(':', $formatStr)[1]];
            }

            array_push($assetPostFormat, $singleAssetFormat);
        }


        // Formatting into types

        ////// laptop
        foreach ($assetPostFormat as $asset) {

            foreach ($asset as $key => $value) {
                if (strtolower($value) == "laptop") {
                    array_push($laptop, $asset);
                }
            }
        }

        ////// pc
        foreach ($assetPostFormat as $asset) {

            foreach ($asset as $key => $value) {
                if (strtolower($value) == "pc") {
                    array_push($pc, $asset);
                }
            }
        }

        ////// monitor
        foreach ($assetPostFormat as $asset) {

            foreach ($asset as $key => $value) {
                if (strtolower($value) == "monitor") {
                    array_push($monitor, $asset);
                }
            }
        }







        return view("assetAllView", ['all' => $assetPostFormat, 'laptop' => $laptop, 'pc' => $pc, 'monitor' => $monitor]);






        // // Sorting out types

        // foreach ($assetPostFormat as $key => $value) {

        //     if (strtolower($key) == "laptop") {
        //         echo 
        //     }

        //     if ($asset->type == "PC") {
        //         array_push($pc, array($asset));
        //     }

        //     if ($asset->type == "Monitor") {
        //         array_push($monitor, $asset);
        //     }
        // };


        // return view("assetAllView", ['all' => $all, 'laptop' => $laptop, 'pc' => $pc, 'monitor' => $monitor]);
    }
}
