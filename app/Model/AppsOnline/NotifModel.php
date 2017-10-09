<?php

namespace App\Model\AppsOnline;

use Illuminate\Database\Eloquent\Model;

class NotifModel extends Model{
    protected $table = 'notifikasi';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $hidden = [
        'created_at','updated_at'
    ];

}
