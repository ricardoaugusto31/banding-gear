<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peripherals extends Model
{
    protected $table = 'peripherals';
    protected $fillable = [
        'bg_id',
        'name',
        'brand',
        'category',
        'price',
        'description',
        'image_path',
    ];
}
