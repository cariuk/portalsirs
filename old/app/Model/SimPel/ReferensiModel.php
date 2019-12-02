<?php

namespace App\Model\SimPel;

use App\Model\SimPelConf;

class ReferensiModel extends SimPelConf{
    protected $table = 'jenis_referensi';
    protected $primaryKey = 'id';
    protected $hidden = [
        'APLIKASI',
    ];
}
