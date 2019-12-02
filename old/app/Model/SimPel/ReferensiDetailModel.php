<?php

namespace App\Model\SimPel;

use App\Model\SimPelConf;

class ReferensiDetailModel extends SimPelConf {
    protected $table = 'referensi';
    protected $primaryKey = 'id';
    protected $hidden = [
        'STATUS','JENIS'
    ];
}
