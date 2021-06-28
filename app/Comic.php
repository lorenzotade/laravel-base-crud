<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'series',
        'price',
        'image',
        'sale_date'
    ];
}
