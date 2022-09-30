<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable=[
      "type",
      "subject",
      "message"
    ];

    public function tenants(){
        return $this->belongsToMany(Tenant::class);
    }
}
