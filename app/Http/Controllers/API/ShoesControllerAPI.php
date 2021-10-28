<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\shoes;
class ShoesControllerAPI extends Controller {
    public function shoesQuery(){
        $shoes = Shoes::all();
        return response()->json(['shoes',$shoes]);
    }
}