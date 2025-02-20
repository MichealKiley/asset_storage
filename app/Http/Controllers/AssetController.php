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
        $assets = Asset::get();


        return view("assetAllView", ['all' => $assets]);
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
            'location' => 'required',
            'user' => 'nullable',
            'status' => 'required'
        ]);


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
            $Asset->location = $assetData["location"];
            $Asset->user = $assetData["user"];
            $Asset->status = $assetData["status"];
            $Asset->update();
        }


        // redirect to assets page
        return redirect('/assets');
    }
}
