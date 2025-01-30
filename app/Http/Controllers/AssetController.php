<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    // view of  all users
    public function assetAllView()
    {
        return view("assetAllView");
    }


    // view of single user and assigned assets
    public function assetSoloView()
    {
        return view("assetSoloView");
    }


    // asset creation page
    public function assetCreation()
    {
        return view("assetCreation");
    }


    // asset modification page
    public function assetModify()
    {
        return view("assetModify");
    }
}
