<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFurnitureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Update as needed
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'category' => 'required|in:sofa,chair,table',
            'type' => 'required|in:wooden,metal,glass',
            'description' => 'required|string',
            'quantity' => 'required|integer',
        ];
    }
}
