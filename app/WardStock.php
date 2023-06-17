<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WardStock extends Model
{
    protected $fillable = [

        'upozilla_id', 'union_id','ward_id','date','opening_balance','current_balance'

    ];

}
