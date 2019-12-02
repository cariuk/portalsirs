<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BuatJanjiModel extends Model{
    protected $table = 'buat_janji';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $hidden = [
        'created_at','updated_at'
    ];

    public static function getnewid(){
        $prefix = date("Ymd")."-";
        $oldid = BuatJanjiModel::where("id","like",$prefix."%")->orderby("id","desc")->first();

        if ($oldid==null){
            $newid = $prefix."001";
        }else{
            $oldid = str_replace($prefix,"",$oldid->id);
            ++$oldid;
            switch (strlen($oldid)){
                case 1 : $newid = $prefix."00".$oldid;
                    break;
                case 2 : $newid = $prefix."0".$oldid;
                    break;
                case 3 : $newid = $prefix.$oldid;
                    break;
            }
        }
        return $newid;
    }
}
