<?php

namespace App\Models;

use App\Models\Area;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'make',
        'model',
        'areas_id',
        'locations_id',
        'user',
        'status'
    ];

    public function areas(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }


    public function locations(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
