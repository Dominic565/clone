<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\studentinformations;
class studentinformationsControllerAPI extends Controller{
    public function studInfo(){
        $studentinformations = studentinformations::all();
        return response()->json(['studentinformations',$studentinformations]); 
    }
}