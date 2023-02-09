<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disaster extends Model
{
    use HasFactory;

    protected $fillable = 
            [
                'disaster_type_id',
                'city_id',
                'damage_level_id', 
                'date', 
                'time',
                'location', 
                'casualties', 
                'description',         
            ];

    public function scopeDamageLevel() {
        return $this->belongsTo(DamageLevel::class);
    }
}
