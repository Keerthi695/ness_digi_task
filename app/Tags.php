<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
        'tag_name',
        'tag_color',
        'category'              
    ];
}
