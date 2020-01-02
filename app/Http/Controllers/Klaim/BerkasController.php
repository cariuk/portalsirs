<?php

namespace App\Http\Controllers\Klaim;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BerkasController extends IndexController{
    public function __construct(){
        parent::__construct();
        $this->module = "berkas";
    }

    function getData(Request $request){
        extract(get_object_vars($this));
        $validator = Validator::make(
            $request->all(), [
            'nopen'=>'required',
        ],[]);

        if ($validator->fails()){
            return response()->json([
                "status" => 422,
                "message" => $validator->messages()->first()
            ],422);
        }

        $result = (object) $this->toSIRSPRO("GET","medicalrecord/berkas/data?nopen=".$request->nopen);

        if ($result->response==null){
            return response()->json([
                "status" => 422,
                "message" => "Maaf Tidak Ada Response Dari Server"
            ],422);
        }
        return response()->json([
            "status" => 200,
            "response" => $result->response->response
        ]);
    }

    function getFile(Request $request){
        extract(get_object_vars($this));
        $validator = Validator::make(
            $request->all(), [
            'nosep'=>'required',
            'file'=>'required',
        ],[]);

        if ($validator->fails()){
            return response()->json([
                "status" => 422,
                "message" => $validator->messages()->first()
            ],422);
        }

        $guzzle = new Client();
        $response = $guzzle->get(url( env("SIRSPRO")."/api/medicalrecord/berkas/view/".$request->nosep."/".$request->file."?access_token=".Auth::user()->token));

//        $filename = $request->nosep.'.pdf';
//        Storage::put('public/berkas/'.$filename, $response->getBody());

        return $response->getBody();
//        return response()->json([
//            "status" => 200,
//            "url" => route("reports.view",["individualpasien",Crypt::encryptString($filename)])
//        ]);
    }
}
