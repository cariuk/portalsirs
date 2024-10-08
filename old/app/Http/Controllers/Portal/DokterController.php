<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use App\Model\AppsOnline\AkunModel;
use App\Model\AppsOnline\MDokterModel;
use App\Model\SimPel\DokterModel;
use Illuminate\Support\Facades\Validator;
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
        $akun = AkunModel::where("iddokter",$request->id)->join("dokter","user_id","id")->where("apps",2)->first();
        return response()->json([
            "title" => '<i class="icon-user-lock"></i> &nbsp;Akun',
            "body"  =>  view('portal.dokter.akun',compact('akun','request'))->render()
        ]);
    }

    public function store_akun(Request $request){
        $validator = Validator::make(
            $request->all(), [
            'id'=>'required',
            'username'=>'required|min:5',
            'email'=>'required|email',
            'nomor_tlp' => 'required',
            'password'=>'required|min:6|confirmed:password_confirmation',
            'password_confirmation'=>'required',

        ], [
                'id.required' => 'id harus diisi',
                'username.required' => 'Username Harus Diisi',
                'username.min' => 'Username Minimal 5 Karakter',
                'email.required' => 'Email harus diisi',
                'nomor_tlp.required' => 'Nomor Telepon Harus diisi',
                'password.required' => 'Password Harus Diisi',
                'password.min' => 'Password Minimal 6 Karakter',
                'password.confirmed' => 'Password Konfirmasi Tidak Sama',
                'password_confirmation.required' => 'Password Konfirmasi Harus Diisi',
            ]
        );

        if ($validator->fails()){
            return response()->json([
                "diagnostic" => $this->diagnostic(
                    microtime(true),
                    $validator->messages()->first(),
                    422
                )
            ]);
        }

        $check = MDokterModel::where("iddokter",$request->id)->first();
        if ($check==null){
            //insert
            $akun = new AkunModel();
                $akun->username = $request->username;
                $akun->email = $request->email;
                $akun->nomor_tlp = $request->nomor_tlp;
                $akun->password = bcrypt($request->password);
                $akun->apps = 2;
                $akun->verification = 2;
            $akun->save();

            $dokter = new MDokterModel();
                $dokter->user_id = $akun->id;
                $dokter->iddokter = $request->id;
            $dokter->save();
        }else{
            AkunModel::where("id",$check->user_id)->update([
                "username" => $request->username,
                "email" =>  $request->email,
                "nomor_tlp" => $request->nomor_tlp,
                "password" => bcrypt($request->password)
            ]);
        }
        return response()->json([
            "diagnostic" => $this->diagnostic(
                microtime(true),
                "Data Akun Telah Tersimpan"
            )
        ]);
    }
}
