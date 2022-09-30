<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Znck\Eloquent\Traits\BelongsToThrough;

class Contract extends Model
{
    use HasFactory;
    use BelongsToThrough;


    protected $fillable=[
        "tenant_id",
        "unit_id",
        "start_date",
        "end_date",
        "file"
    ];


    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function building(): \Znck\Eloquent\Relations\BelongsToThrough
    {
        return $this->belongsToThrough(Building::class,[Area::class,Unit::class]);
    }



}
