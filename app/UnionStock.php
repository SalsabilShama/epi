<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnionStock extends Model
{
     protected $fillable = [

        'upozilla_id', 'union_id', 'date','opening_balance','current_balance'

    ];
}
