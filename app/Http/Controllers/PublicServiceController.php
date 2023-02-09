<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\PublicService;
use App\Http\Requests\PublicServiceStoreRequest;

class PublicServiceController extends Controller
{
    public function index() {
        try {
            //Query all dame levels
            $public_service = PublicService::get();

            //return json response
            return response()->json($public_service);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function store(PublicServiceStoreRequest $request){
        try{
        $data = $request->all();
        
        $service = PublicService::create($data);

        return response()->json($service);
        
    } catch(Exception $e){
        return response()->json(['error'=>$e->getMessage()], 400);
        }
    }
}