<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable=[
        "contract_id",
        "type",
        "subject",
        "message",
    ];
    protected $casts=[
        "message"=>"array"
    ];

    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }
}
