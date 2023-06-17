<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTika extends Model
{
    protected $fillable = [

        'tika_id', 'user_id', 'taken_date', 'added_by','dose_number'

    ];
}
