<?php

namespace App\Model\AppsOnline;

use Illuminate\Database\Eloquent\Model;

class MDokterModel extends Model{
    protected $table = 'dokter';
    public $incrementing = false;
    protected $primaryKey = 'user_id';
    protected $hidden = [
        'created_at','updated_at'
    ];

}
