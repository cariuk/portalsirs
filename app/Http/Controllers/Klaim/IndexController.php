<?php

namespace App\Http\Controllers\Klaim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller{
    public $sirspro,$pathview,$module,$data;

    public function __construct(){
        $this->pathview = "klaim.";
        $this->sirspro = env("SIRSPRO");
    }

    public function index(Request $request){
        extract(get_object_vars($this));
        $view = view($this->pathview.$this->module.'.index',compact('module','data'))->render();
        return response()->json([
            "status" => 200,
            "subcontent" => $view
        ]);
    }
}
