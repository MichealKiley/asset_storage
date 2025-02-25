<?php

namespace App\Models;

use App\Models\Area;
use App\Models\Asset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'areas_id',
        'location',
        'dock',
        'mnk',
        'user'
    ];

    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class);
    }

    public function areas(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}
