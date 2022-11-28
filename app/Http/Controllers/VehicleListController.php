<?php

namespace App\Http\Controllers;

use App\Models\VehicleListing;
use Illuminate\Http\Request;

class VehicleListController extends Controller
{
    public function search( Request $request){
        $Search =$_GET['query'];
        
        
        $results = VehicleListing::where('vin','=',$Search)->get();
       
            return view('displayVin',['results' => $results]);
       
    }
}
