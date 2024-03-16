<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReceiptResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'booking_id' => $this->booking_id,
            'receipt_id' => $this->receipt_id,
            'shipment_id' => $this->shipment_id,
            'weught_charge' => $this->weught_charge,
            'dist_charge' => $this->dist_charge,
            'item_value' => $this->item_value,
            'cod_value' => $this->cod_value,
            'cod_fee' => $this->cod_fee,
            'ovl_cost' => $this->ovl_cost,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
