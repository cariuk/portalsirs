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

class GeneratePdfBerkasKlaimController extends Controller
{
    function index(Request $request)
    {
        extract(get_object_vars($this));
        $validator = Validator::make(
            $request->all(), [
            'NOPEN'=>'required',
            'TAGIHAN'=>'required',
            'NOSEP' => 'required',
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
                url( env("SIRSPRO")."/api/klaim/generate-pdf"),[
                    'headers' => [
                        'Accept' => 'application/json'
                    ],'query' => http_build_query([
                        "access_token" => Auth::user()->token,
                        "TAGIHAN" => $request->TAGIHAN,
                        "NOPEN" => $request->NOPEN,
                        "NOSEP" => $request->NOSEP,
                    ])
                ]
            );

            $path = 'public/berkas/'.date("Ymd")."/".$request->NOSEP."_".$request->nama.".pdf";
            Storage::put($path, $response->getBody());
            if (!File::exists(storage_path("app/".$path))) {
                abort(404);
            }
            $pdf = file_get_contents(storage_path("app/".$path));
            unlink(storage_path("app/".$path));
            return Response::make($pdf, 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $request->NOSEP . ".pdf" . '"'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                "status" => 422,
                "message" => $exception->getMessage()
            ],422);
        }
    }
}
