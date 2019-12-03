<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function toBridging($method,$uri,$request=[]){
        try{
            $client = new Client();
            $getResponse = $client->request(
                $method,
                url( env("SIRSPRO")."/api/".$uri), [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => "Bearer ".Auth::user()->token,
                        'PROVIDER' => 'usersiap',
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
