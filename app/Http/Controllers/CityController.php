<?php
/**
 * Created by PhpStorm.
 * User: reza
 * Date: 06/11/18
 * Time: 07.30
 */

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

use App\Models\Province;
use App\Models\City;

class CityController extends Controller {
    public function __construct()
    {
    }
    public function showAll(){
        return response()->json(City::all());
    }

    public function showOne($id){
        return response()->json(City::where('city_id', $id)->get());
    }
    public function search(Request $request) {
        if ($request->has('id')) {
            return response()->json(City::where('city_id', $request->get('id'))->get());
        }
        return response()->json(City::all());
    }


}