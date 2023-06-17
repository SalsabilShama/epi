<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TikaExpected extends Model
{
   protected $fillable = [

        'upozilla_id', 'union_id', 'ward_id', 'date', 'user_id', 'added_by','dose_number','tika_id'

    ];
}
