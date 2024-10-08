<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use App\Model\AppsOnline\NotifModel;
use Illuminate\Http\Request;

class NotifController extends PortalController{
    public function __construct(){
        $this->module = "notif";
    }
    public function loadform(Request $request){
        $view = view('portal.'.$this->module.'.form',compact('data'))->render();
        return response()->json([
            "html" => $view
        ]);
    }

    public function loaddata(Request $request){
        $data = NotifModel::getdata($request->input('page'),1,$request->input('cari'));
        $view = view('portal.'.$this->module.'.data',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5)->render();
        return response()->json([
            "total_page" => $data->lastpage(),
            "total_data" => $data->total(),
            "html"       => $view
        ]);
    }
}
