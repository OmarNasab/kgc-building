<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable=[
        "sub_category_id",
        "no",
        "ac_type",
        "ac_condition"
    ];

    public function sub_category(){
        return $this->hasMany(SubCategory::class);
    }

    public function contracts(){
        return $this->hasMany(Contract::class);
    }
}
