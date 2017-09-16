<?php

namespace App\Model\SimPel;

use App\Model\SimPelConf;

class DokterModel extends SimPelConf {
    public $table = "master.pegawai";
    protected $primaryKey = "nip";
    public $incrementing = false;

    public static function getdataDokter($page,$seacrh){
        $data = DokterModel::select(
            "master.pegawai.NIP as id",
            "master.pegawai.*",
            "master.dokter.*",
            "master.referensi.*"
        );
        if ($seacrh!=""){
            $data->where("nama","like","%$seacrh%");
            $data->orwhere("master.pegawai.NIP","like","$seacrh");
        }
        $data->where("master.pegawai.status","=","1");
        $data->join("master.dokter","master.dokter.nip","=","master.pegawai.nip");
        $data->join('master.referensi', function($join){
            $join->on('master.referensi.ID', '=', 'master.pegawai.SMF')
                ->where("master.referensi.jenis", "=", "26");
        });
        return $data->paginate(10, ['*'], 'page', $page);
    }
}
