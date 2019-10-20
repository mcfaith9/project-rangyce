<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Security;

class AdminController extends Controller
{
    public function addPoliceStation(Request $request)
    {
        $security = new Security;
        $security->admin_id = $request->admin_id;
        $security->name = $request->name;
        $security->street = $request->street;
        $security->municipality = $request->municipality;
        $security->postal_code = $request->postal_code;
        $security->city = $request->city;
        $security->region = $request->region;
        $security->image = $request->image;	
        $security->save() ;
    }
}
