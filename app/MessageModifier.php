<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageModifier extends Model
{
    protected $fillable = [
        'field', 'value'
    ];
}
