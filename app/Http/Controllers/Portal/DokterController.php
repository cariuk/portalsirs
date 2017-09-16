<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use App\Model\SimPel\DokterModel;
use Illuminate\Http\Request;

class DokterController extends PortalController {
    public function __construct(){
        $this->module = 'dokter';
    }

    public function loaddata(Request $request){
        $data = DokterModel::getdataDokter($request->input('page'),$request->input('cari'));
        $view = view('portal.dokter.data',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5)->render();
        return response()->json([
            "total_page" => $data->lastpage(),
            "total_data" => $data->total(),
            "html"       => $view
        ]);
    }
}
