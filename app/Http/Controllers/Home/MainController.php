<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends IndexController{
    function __construct(){
        parent::__construct();
        $this->module = "main";
    }

    function index(Request $request){
        extract(get_object_vars($this));
        $content = view($this->pathview.$this->module.'.index',compact('module','pathview','data'))->render();
        if ($request->ajax()||$request->wantsJson()){
            return response()->json([
                "status" => 200,
                "module" => $this->module,
                "content" => $content
            ]);
        }else{
            return view('layouts.app',compact('content','module','pathview','data'));
        }
    }

    function loadModul($module,Request $request){
        $icon = $request->icon;
        $tabcontent = view($module.".index",compact('module'))->render();
        $module = strtoupper($module);
        $tabnav = view('layouts.tabnav',compact('module','icon'))->render();

        return response()->json([
            "status" => 200,
            "tabnav" => $tabnav,
            "tabcontent" => $tabcontent
        ]);
    }
}
