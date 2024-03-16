<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() != null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            "shipper_name" => ['required', 'string', 'max:100'],
            "shipper_phone" => ['required', 'max:15'],
            "shipper_address" => ['required', 'string', 'max:250'],
            "recipient_name" => ['required', 'string', 'max:100'],
            "recipient_phone" => ['required', 'max:15'],
            "recipient_address" => ['required', 'string', 'max:250'],
            "bkg_destination" => ['nullable', 'integer'],
            "bkg_service" => ['required', 'integer'],
            "p" => ['nullable', 'integer', 'regex:/^\d+(\.\d{1,2})?$/'],
            "l" => ['nullable', 'integer', 'regex:/^\d+(\.\d{1,2})?$/'],
            "t" => ['nullable', 'integer', 'regex:/^\d+(\.\d{1,2})?$/'],
            "dimensional_weight" => ['nullable', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            "actual_weight" => ['nullable', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            "weight_charge" => ['nullable', 'integer'],
            "ovl_cost" => ['required', 'integer'],
            // "booking_status" => ['required', 'integer'],
        ];
    }
}
