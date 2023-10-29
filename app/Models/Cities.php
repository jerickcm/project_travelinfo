<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cities extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "cities";
    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'description',
        'featured_image',
        'content1',
        'content2',
        'content3',
        'content4',
        'notes',
        'travel_guides',
        'url',
        'itinerary'
    ];
}
