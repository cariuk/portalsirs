<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use Illuminate\Http\Request;

class DokterController extends PortalController {
    protected $module;
    public function __construct(){
        $this->module = 'dokter';
    }

    public function index(){
        return view('portal/'.$this->module.'/index');
    }

    public function loadpages(Request $request){
    }

    public function loaddata(Request $request){
    }
}
