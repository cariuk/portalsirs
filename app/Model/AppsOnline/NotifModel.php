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

    public static function getdata($page,$seacrh){
        $data = NotifModel::select()->where("type","Broadcast");
        return $data->paginate(10, ['*'], 'page', $page==null?1:$page);
    }
}
