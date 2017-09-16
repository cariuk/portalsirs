<?php

namespace App\Http\Controllers;

use App\Model\SimPel\DokterModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $dokter = DokterModel::getdataDokter(1,"");
        return view('portal/home',compact('dokter'));
    }
}
