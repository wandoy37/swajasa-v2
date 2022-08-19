<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $table = 'configs';
    protected $fillable = [
        'title',
        'brand_icon',
        'brand_name',
        'description',
        'about',
        'benefit',
        'map',
    ];
}
