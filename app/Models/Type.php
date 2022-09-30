<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable=[
      "building_id",
        "name"
    ];

    public function building(){
        return $this->belongsTo(Building::class);
    }
    public function categories(){
        return $this->hasMany(Category::class);
    }
}
