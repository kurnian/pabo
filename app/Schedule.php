<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{


    protected $table = 'schedule';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'id_pond', 'name', 'type', 'start_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}