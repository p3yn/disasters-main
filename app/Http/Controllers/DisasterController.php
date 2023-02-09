<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DisasterStoreRequest;
use App\Models\Disaster;
use Illuminate\Support\Facades\DB;
use Exception;

class DisasterController extends Controller
{
    public function index(DisasterStoreRequest $request){
        try{ 
            $disasters = Disaster::get();
            return response()->json($disasters);
        }catch(Exception $e){ 
            return response()->json($disasters);
        }
    }
    
    public function store(DisasterStoreRequest $request) {
        try {
            $latitude = $request->latitude;
            $longitude = $request->longitude;
            $request->merge(['location' => DB::raw("St_GeomFromText('Point($longitude $latitude)')")]);

            $disaster = Disaster::create($request->all());

            return response()->json($disaster);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
