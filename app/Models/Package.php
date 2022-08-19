<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'slug',
        'price',
        'discount',
        'status',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function benefits()
    {
        return $this->belongsToMany(Benefit::class, 'package_benefit', 'package_id', 'benefit_id')->withTimestamps();
    }
}
