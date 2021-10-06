<?php

namespace App\Http\Controllers\Klaim;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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

        $result = (object) $this->toSIRSPRO("GET","medicalrecord/berkas/data?nopen=".$request->nopen."&status=1");

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
            'nopen'=>'required',
            'file'=>'required',
        ],[]);

        if ($validator->fails()){
            return response()->json([
                "status" => 422,
                "message" => $validator->messages()->first()
            ],422);
        }

        $guzzle = new Client();
        $response = $guzzle->get(
            url( env("SIRSPRO")."/api/medicalrecord/berkas/view/".$request->nopen."/".$request->file."?access_token=".Auth::user()->token),[
                'headers' => [
                    'Accept' => 'application/json'
                ]
            ]
        );
        Storage::put('public/berkas/'.$request->file, $response->getBody());

        $path = storage_path('app/public/berkas/'.$request->file);
        if (!File::exists($path)) {
            abort(404);
        }
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }

    function getZip(Request $request){
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
        try{
            $guzzle = new Client();
            $response = $guzzle->get(
                url( env("SIRSPRO")."/api/medicalrecord/berkas/zip"),[
                    'headers' => [
                        'Accept' => 'application/json'
                    ],'query' => http_build_query([
                        "access_token" => Auth::user()->token,
                        "nopen" => $request->nopen,
                    ])
                ]
            );

            $path = 'public/berkas/'.date("Ymd")."/".$request->norm."_".$request->nama.".zip";
            Storage::put($path, $response->getBody());
            if (!File::exists(storage_path("app/".$path))) {
                abort(404);
            }
            return  Storage::download($path);
        }catch (\Exception $exception){
            abort(404);
        }
    }
}
