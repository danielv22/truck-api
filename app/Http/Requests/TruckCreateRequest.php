<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use App\Enums\Status;

class TruckCreateRequest extends FormRequest
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
            'truck_brand' => ['required', 'string', 'max:255'],
            'truck_reference' => ['required', 'string', 'max:255'],
            'plate_number' => ['required', 'string', 'max:6'],
            'model' => ['required', 'integer'],
            'color' => ['required', 'string', 'max:255'],
            'capacity' => ['required', 'string', 'max:6'],
            'vehicle_inspection_expiration_date' => ['required', 'date'],
            'insurance_expiration_date' => ['required', 'date'],
            'registration_expiration_date' => ['required', 'date'],
            'status' => [new Enum(Status::class)]
        ];

    }
}
