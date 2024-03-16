<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DistanceLocation extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function booking(): HasMany
    {

        return $this->hasMany(Booking::class, 'bkg_destination', 'id');
    }
}
