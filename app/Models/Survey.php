<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable=[
      "tenant_id",
        "type",
        "questioner"
    ];
    protected $casts=[
      "questioner"=>"array"
    ];

    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }
}
