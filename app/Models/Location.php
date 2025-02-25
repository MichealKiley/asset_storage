<?php

namespace App\Models;

use App\Models\Asset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'area',
        'location',
        'dock',
        'mnk',
        'user'
    ];

    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class);
    }
}
