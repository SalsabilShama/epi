<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpozillaStockModel extends Model
{
     protected $fillable = [

        'name', 'date','opening_balance','current_balance'

    ];
}
