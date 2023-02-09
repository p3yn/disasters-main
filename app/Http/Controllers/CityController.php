<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\CityStoreRequest;

class CityController extends Controller
{
    public function index() {
        try {
            //Query all cities
            $cities = City::get();

            //return json response
            return response()->json($cities);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function store(CityStoreRequest $request) {
        try{
            $city = $request->validate([
                'name'=> ['required', Rule::unique('cities', 'name')]
            ]);
            $city = City::create(
            [
                'name'=> $request->name
            ]);
            return response()->json($city);
        } catch(Exception $e){
            return response()->json(['error'=> $e->getMessage()], 400);
        }
    }
}
