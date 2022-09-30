<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable=[
        "building_id",
        "name"
    ];

    public function building(){
        return $this->belongsTo(Area::class);
    }
    public function units(){
        return $this->hasMany(Unit::class);
    }
}
