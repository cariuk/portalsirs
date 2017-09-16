<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use Illuminate\Http\Request;

class DokterController extends PortalController {
    public function __construct(){
        $this->module = 'dokter';
    }
}
