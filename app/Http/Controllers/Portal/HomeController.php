<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use Illuminate\Http\Request;

class HomeController extends PortalController {
    public function __construct(){
        $this->module = "home";
    }
}
