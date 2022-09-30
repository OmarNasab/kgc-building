<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "phone",
        "nationality",
        "firstContractDate"
    ];

    protected $hidden = [
        'password',
    ];
    public function contracts(): HasMany
    {
        return $this->hasMany(Contract::class);
    }

    public function notifications(): BelongsToMany
    {
        return $this->belongsToMany(Notification::class,"tenant_notification");
    }

    public function surveys(): HasMany
    {
        return $this->hasMany(Survey::class);
    }

    public function tickets(): HasManyThrough
    {
        return $this->hasManyThrough(Ticket::class,Contract::class);
    }
}
