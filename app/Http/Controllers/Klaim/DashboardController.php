<?php

namespace App\Http\Controllers\Klaim;

use App\Http\Controllers\Controller;
use Facade\FlareClient\Report;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class DashboardController extends IndexController{
    public function __construct(){
        parent::__construct();
        $this->module = "dashboard";
    }
}
