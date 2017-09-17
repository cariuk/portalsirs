<?php

namespace App\Model\AppsOnline;

use Illuminate\Database\Eloquent\Model;

class AkunModel extends Model{
    public $table = "users";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = [
        'username','nomor_tlp', 'email', 'password','verification','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getdata($page,$seacrh){
        $data = AkunModel::select();
        if ($seacrh!=""){
            $data->where("username","like","%$seacrh%");
            $data->orwhere("email","like","$seacrh");
            $data->orwhere("nomor_tlp","like","$seacrh");
        }
        return $data->paginate(10, ['*'], 'page', $page==null?1:$page);
    }
}
