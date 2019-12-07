<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function toSIRSPRO($method,$uri,$request=[]){
        try{
            $client = new Client();
            $getResponse = $client->request(
                $method,
                url( env("SIRSPRO")."/api/".$uri), [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => "Bearer ".Auth::user()->token,
                    ],RequestOptions::JSON => $request
                ]
            );

            return  [
                "status" => $getResponse->getStatusCode(),
                "response" => json_decode($getResponse->getBody())
            ];
        }catch (ClientException $exception) {
            $response =  json_decode($exception->getResponse()->getBody()->getContents());
            return response()->json([
                "status" => $response->diagnostic->status,
                "message" => $response->diagnostic->description,
            ], $response->diagnostic->status);
        }
        catch (\Exception $exception) {
            return response()->json([
                "status" => 501,
                "message" => $exception->getMessage()
            ], 501);
        }
    }
}
