<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use Illuminate\Http\Request;

class RawatJalanController extends PortalController{
    public function __construct(){
        $this->module = "rajal";
    }

    public function loaddata(Request $request){
        $data = AkunModel::getdata($request->input('page'),$request->input('cari'));
        $view = view('portal.'.$this->module.'.data',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5)->render();
        return response()->json([
            "total_page" => $data->lastpage(),
            "total_data" => $data->total(),
            "html"       => $view
        ]);
    }
}
