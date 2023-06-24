<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TikaUses extends Model
{
    protected $fillable = [

        'upozilla_id', 'union_id', 'ward_id', 'date','tika_used','tika_damage', 'tika_expired', 'added_by'

    ];
}
