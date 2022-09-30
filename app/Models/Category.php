<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        "type_id",
        "name"
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function sub_categories(){
        return $this->hasMany(SubCategory::class);
    }
}
