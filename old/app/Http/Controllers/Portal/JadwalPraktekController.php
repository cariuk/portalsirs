<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JadwalPraktekController extends PortalController{
    public function __construct(){
        $this->module = "jadwal";
    }
}
