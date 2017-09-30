<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use App\Model\AppsOnline\AkunModel;
use App\Model\SimPel\DokterModel;
use Illuminate\Http\Request;

class DokterController extends PortalController {
    public function __construct(){
        $this->module = 'dokter';
    }

    public function loaddata(Request $request){
        $data = DokterModel::getdata($request->input('page'),$request->input('cari'));
        $view = view('portal.dokter.data',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5)->render();
        return response()->json([
            "total_page" => $data->lastpage(),
            "total_data" => $data->total(),
            "html"       => $view
        ]);
    }

    public function akun(Request $request){

        $akun = AkunModel::where("username",$request->id)->where("type",2)->first();
        return response()->json([
            "title" => '<i class="icon-user-lock"></i> &nbsp;Akun',
            "body"  =>  view('portal.dokter.akun',compact('akun','request'))->render()
        ]);
    }

    public function store_akun(Request $request){
        $check = AkunModel::where("username",$request->id)->first();
        if ($check==null){
            //insert

        }else{
            //update

        }
    }
}
