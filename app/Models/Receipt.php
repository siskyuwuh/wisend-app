<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasOne;

class Receipt extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $table = "receipts";
    public $incrementing = true;
    public $timestamps = true;


    protected $guarded = [
        'id'
    ];

    public function booking(): BelongsTo

    {
        return $this->belongsTo(Booking::class);
    }
}
