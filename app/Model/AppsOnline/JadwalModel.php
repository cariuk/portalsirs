<?php

namespace App\Model\AppsOnline;

use Illuminate\Database\Eloquent\Model;

class JadwalModel extends Model{
    protected $table = 'jadwal';
    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $hidden = [
        'fl_status','created_at','updated_at'
    ];
}
