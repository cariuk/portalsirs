<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller{
    protected $module;
    protected $data;
    function index(Request $request){
        $data=$this->data;
        $module = $this->module;
        $content = view('portal.'.$this->module.'.index',compact('data','module'))->render();
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

    public function diagnostic($date,$description='success',$code=200,$error=null){
        $date2 =round(microtime(true) - $date,5);
        $diagnostic = array(
            'error'         => $error,
            'status'        => $code,
            'memoryusage'   => round(memory_get_usage()/1024,2).' kb',
            'elapstime'     => $date2,
            'timestamp'     => time(),
            'error_msgs'    => $description,
            'description'   => $description
        );
        if (is_null($error)){
            unset($diagnostic['error']);
            unset($diagnostic['error_msgs']);
        }else{
            unset($diagnostic['memoryusage']);
            unset($diagnostic['elapstime']);
            unset($diagnostic['timestamp']);
        }
        return $diagnostic;
    }

    function form(Request $request){
        $content = $content = view('admin.content.'.$this->module.'.'.$request->input("method"))->render();
        return response()->json([
            "status" => 200,
            "form" => $content
        ]);
    }
}
