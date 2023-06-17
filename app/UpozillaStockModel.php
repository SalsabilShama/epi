<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpozillaStockModel extends Model
{
      protected $fillable = [

        'upozilla_id','date','opening_balance','current_balance'

    ];
}
