<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Asset;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AssetController extends Controller
{
    // view of all users
    public function assetAllView()
    {
        // Pulling assets from db
        $areas = Area::get();
        $locations = Location::with('areas')->get();
        $assets = Asset::with('locations', 'areas')->get();



        return view("assetAllView", ['areas' => $areas, 'assets' => $assets, 'locations' => $locations]);
    }


    // modify assets
    public function postAsset(Request $request)
    {

        // validating form inputs
        $assetData = $request->validate([
            "request-type" => 'required',
            "delete-asset" => 'nullable',
            'id' => 'nullable',
            'type' => 'required',
            'make' => 'required',
            'model' => 'required',
            'areas_id' => 'required',
            'locations_id' => 'required',
            'user' => 'nullable',
            'status' => 'required'
        ]);

        // converting string values into foreign key id
        $areas = Area::get();
        $locations = Location::with('areas')->get();

        foreach ($areas as $row) {
            if ($row["area"] == $assetData["areas_id"]) {
                $areas_id = $row["id"];
            }
        };

        foreach ($locations as $row) {
            if ($row["location"] == $assetData["locations_id"]) {
                $locations_id = $row["id"];
            }
        };



        // delete existing asset
        if ($assetData["delete-asset"] == "yes") {

            $id = $assetData["id"];
            $Asset = Asset::find($id);
            $Asset->delete();
        }

        // create new asset
        elseif ($assetData["request-type"] == "add") {

            unset($assetData["request-type"]);
            unset($assetData["delete-asset"]);
            unset($assetData["id"]);

            Asset::create($assetData);
        }

        // edit existing asset
        elseif ($assetData["request-type"] == "edit") {

            $id = $assetData["id"];

            $Asset = Asset::find($id);
            $Asset->type = $assetData["type"];
            $Asset->make = $assetData["make"];
            $Asset->model = $assetData["model"];
            $Asset->areas_id = $areas_id;
            $Asset->locations_id = $locations_id;
            $Asset->user = $assetData["user"];
            $Asset->status = $assetData["status"];
            $Asset->update();
        }


        // redirect to assets page
        return redirect('/assets');
    }
}
