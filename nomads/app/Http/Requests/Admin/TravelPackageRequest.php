<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TravelPackageRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required | max:225',
            'location' => 'required | max:225',
            'about' => 'required',
            'featured_event' => 'required | max:225',
            'language' => 'required | max:225',
            'foods' => 'required | max:225',
            'departure_date' => 'required | date',
            'duration' => 'required | string',
            'type' => 'required | string',
            'price' => 'required | integer',
        ];
    }
}
