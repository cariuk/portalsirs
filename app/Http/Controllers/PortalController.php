<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller{
    protected $module;
    protected $data;
    function index(Request $request){
        $data=$this->data;
        $content = $content = view('portal.'.$this->module.'.index',compact('data'))->render();
        $module = ucfirst($this->module);
        if ($request->ajax()||$request->wantsJson()){
            return response()->json([
                "status" => 200,
                "module" => $module,
                "content" => $content
            ]);
        }else{
            return view('portal.layouts.app',compact('content','module','data'));
        }
    }

    function form(Request $request){
        $content = $content = view('admin.content.'.$this->module.'.'.$request->input("method"))->render();
        return response()->json([
            "status" => 200,
            "form" => $content
        ]);
    }
}
