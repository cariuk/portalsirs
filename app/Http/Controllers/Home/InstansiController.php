<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstansiController extends Controller{
    function index(Request $request){}

    function getData(Request $request){
        $result = (object) $this->toSIRSPRO("GET","instansi");
        if ($result->response==null){
            return response()->json([
                "status" => 422,
                "message" => "Maaf Tidak Ada Response Dari Server"
            ],422);
        }
        $result = $result->response->response->instansi;
        $result = [
            "LOGO" => $result->LOGO,
            "NAMA" => $result->NAMA,
            "ALAMAT" => $result->ALAMAT,
            "TELEPON" => $result->TELEPON,
            "EMAIL" => $result->EMAIL,
            "WEBSITE" => $result->WEBSITE,
        ];
        return response()->json([
            "status" => 200,
            "response" => $result
        ]);
    }
}
