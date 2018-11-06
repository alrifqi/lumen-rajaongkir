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