<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'make',
        'model',
        'locations_id',
        'area',
        'user',
        'status'
    ];

    public function locations(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
