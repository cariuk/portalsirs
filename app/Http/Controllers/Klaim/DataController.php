<?php

namespace App\Http\Controllers\Klaim;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DataController extends IndexController{
    public function __construct(){
        parent::__construct();
        $this->module = "data";
    }

    public function getData(Request $request){
        extract(get_object_vars($this));
        $result = (object) $this->toSIRSPRO("GET","klaim/data?",[
            "page" => $request->page,
            "pelayanan" => $request->pelayanan, /*Rawat Inap = 1 ,  Rawat Jalan = 2*/
            "bulanPulang" => $request->bulanPulang, /*Y-m-d*/
            "norm" => $request->norm,
            "cbg" => $request->cbg,
            "q" => $request->q,
        ]);

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

    public function getTagihan(Request $request){
        $post = [
            "NAME" => $request->input("NAME"),
            "PARAMETER" => $request->input("PARAMETER"),
            "TYPE" => $request->input("TYPE"),
            "EXT" => $request->input("EXT"),
            "PRINT_NAME" => "report",
            "COPIES" => 1,
            "REQUEST_FOR_PRINT" => false,
        ];
        $result = (object) $this->toSIRSPRO("POST","report/request",$post);
        $url = $result->response->response;

        $guzzle = new Client();
        $response = $guzzle->get($url);
        $filename = time().'.pdf';
        Storage::put('public/tagihan/'.$filename, $response->getBody());

        return response()->json([
            "status" => 200,
            "url" => route("reports.view",["tagihan",Crypt::encryptString($filename)])
        ]);
    }

    public function getLembarIndividual(Request $request){
        extract(get_object_vars($this));
        $validator = Validator::make(
            $request->all(), [
            'nosep'=>'required',
        ],[]);

        if ($validator->fails()){
            return response()->json([
                "status" => 422,
                "message" => $validator->messages()->first()
            ],422);
        }

        $guzzle = new Client();
        $response = $guzzle->get(
            url( env("SIRSPRO")."/api/klaim/individualpasien/".$request->nosep."?access_token=".Auth::user()->token),[
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);

        $filename = $request->nosep.'.pdf';
        Storage::put('public/individualpasien/'.$filename, $response->getBody());

        return response()->json([
            "status" => 200,
            "url" => route("reports.view",["individualpasien",Crypt::encryptString($filename)])
        ]);
    }

    public function getSEP(Request $request){
        $post = [
            "NAME" => $request->input("NAME"),
            "PARAMETER" => $request->input("PARAMETER"),
            "TYPE" => $request->input("TYPE"),
            "EXT" => $request->input("EXT"),
            "PRINT_NAME" => "report",
            "COPIES" => 1,
            "REQUEST_FOR_PRINT" => false,
        ];
        $result = (object) $this->toSIRSPRO("POST","report/request",$post);
        $url = $result->response->response;

        $guzzle = new Client();
        $response = $guzzle->get($url);
        $filename = time().'.pdf';
        Storage::put('public/sep/'.$filename, $response->getBody());

        return response()->json([
            "status" => 200,
            "url" => route("reports.view",["sep",Crypt::encryptString($filename)])
        ]);
    }
}
