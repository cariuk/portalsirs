<?php

namespace App\Model\AppsOnline;

use Illuminate\Database\Eloquent\Model;

class DokterModel extends Model{
    protected $table = 'dokter';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $hidden = [
        'created_at','updated_at'
    ];

}
