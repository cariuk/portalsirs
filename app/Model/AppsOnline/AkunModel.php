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
}
