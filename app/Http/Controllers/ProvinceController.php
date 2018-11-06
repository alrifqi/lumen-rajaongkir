<?php
/**
 * Created by PhpStorm.
 * User: reza
 * Date: 06/11/18
 * Time: 07.30
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller {
    public function __construct()
    {
    }

    public function showAll(){
//        $array =  [2, 1, 6, 9, 9, 4, 3];
//        $max=$max2=0;
//        for ($i = 0; $i < count($array); $i++) {
//            if ($array[$i] > $max) {
//                $max2 = $max;
//                $max = $array[$i];
//            } else if (($array[$i] > $max2) && ($array[$i] != $max)) {
//                $max2 = $array[$i];
//            }
//        }
//        echo $max2;

        return response()->json(Province::all());
    }

    public function showOne($id){
        return response()->json(Province::where('province_id', $id)->get());
    }

    public function search(Request $request) {
        if ($request->has('id')) {
            return response()->json(Province::where('province_id', $request->get('id'))->get());
        }
        return response()->json(Province::all());
    }

}