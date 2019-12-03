<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller{
    public $module;
    public $pathview;
    public $data;

    function __construct(){
        $this->pathview = 'home.';
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
