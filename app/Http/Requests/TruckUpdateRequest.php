<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TruckUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'truck_name' => ['string', 'max:255'],
            'truck_reference' => ['string', 'max:255'],
            'plate_number' => ['string', 'max:6'],
            'model' => ['integer', 'max:4'],
            'color' => ['string', 'max:255'],
            'capacity' => ['string', 'max:6'],
            'vehicle_inspection_expiration_date' => ['date'],
            'insurance_expiration_date' => ['date'],
            'registration_expiration_date' => ['date'],
            'status' => [new Enum(Status::class)]
        ];
    }
}
