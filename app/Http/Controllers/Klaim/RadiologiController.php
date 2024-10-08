<?php

namespace App\Http\Controllers\Klaim;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RadiologiController extends IndexController
{
    public function __construct()
    {
        parent::__construct();
        $this->module = "radiologi";
    }

    function getData(Request $request)
    {
        extract(get_object_vars($this));
        $validator = Validator::make(
            $request->all(), [
            'tagihan' => 'required',
        ], []);

        if ($validator->fails()) {
            return response()->json([
                "status" => 422,
                "message" => $validator->messages()->first()
            ], 422);
        }

        $result = (object)$this->toSIRSPRO("GET", "medicalrecord/radiologi?tagihan=" . $request->tagihan);

        if ($result->response == null) {
            return response()->json([
                "status" => 422,
                "message" => "Maaf Tidak Ada Response Dari Server"
            ], 422);
        }
        return response()->json([
            "status" => 200,
            "response" => $result->response->response
        ]);
    }

    function getReport(Request $request)
    {
        $post = [
            "NAME" => $request->input("NAME"),
            "PARAMETER" => $request->input("PARAMETER"),
            "TYPE" => $request->input("TYPE"),
            "EXT" => $request->input("EXT"),
            "PRINT_NAME" => "report",
            "COPIES" => 1,
            "REQUEST_FOR_PRINT" => false,
        ];

        $result = (object)$this->toSIRSPRO("POST", "report/request", $post);
        $url = $result->response->response;

        $guzzle = new Client();
        $response = $guzzle->get($url);
        $filename = time() . '.pdf';
        Storage::put('public/radiologi/' . $filename, $response->getBody());

        return response()->json([
            "status" => 200,
            "url" => route("reports.view", ["radiologi", Crypt::encryptString($filename)])
        ]);
    }
}
