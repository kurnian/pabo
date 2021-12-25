<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pond extends Model
{


    protected $table = 'pond';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'name', 'luas', 'kedalaman', 'jenis_ikan', 'jumlah_ikan','lat', 'lon'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}