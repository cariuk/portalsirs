<?php

namespace App\Http\Controllers\Klaim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends IndexController{
    public function __construct(){
        parent::__construct();
        $this->module = "dashboard";
    }

    public function getData(Request $request){
        extract(get_object_vars($this));
        $result = (object) $this->toSIRSPRO("GET","/klaim/data?",[
            "page" => $request->page,
            "pelayanan" => $request->pelayanan, /*Rawat Inap = 1 ,  Rawat Jalan = 2*/
            "sep" => $request->sep,
            "norm" => $request->norm,
            "tanggal" => $request->tanggal, /*Y-m-d*/
        ]);

        return response()->json([
            "status" => 200,
            "response" => [
                "data" =>$result->response->data,
                "current_page" => $result->response->current_page,
                "from" => $result->response->from,
                "last_page" => $result->response->last_page,
                "per_page" => $result->response->per_page,
                "to" => $result->response->to,
                "total" => $result->response->total
            ]
        ]);
    }
}
