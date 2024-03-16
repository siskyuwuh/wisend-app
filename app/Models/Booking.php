<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $table = "bookings";
    public $incrementing = true;
    public $timestamps = true;

    protected $guarded = [
        'id'
    ];

    // protected $casts = [
    //     'item_weights' => 'json',
    // ];

    public function receipt(): HasOne
    {
        return $this->hasOne(Receipt::class, 'booking_id', 'id');
    }

    public function destination(): BelongsTo
    {
        return $this->belongsTo(DistanceLocation::class, 'bkg_destination');
    }
}
