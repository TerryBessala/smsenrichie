<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'html', 'css', 'asset','style','page_id'
    ];
}
