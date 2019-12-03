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
        }catch (ClientException $e) {
            $response = $e->getResponse();
            return [
                "status" => $response->getStatusCode(),
                "response" => $response->getBody()
            ];
        }
        catch (\Exception $exception) {
            return response()->json([
                "status" => 501,
                "message" => $exception->getMessage()
            ], 501);
        }
    }
}
