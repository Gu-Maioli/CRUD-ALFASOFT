<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateUpdateProduct extends FormRequest
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
        $rules = [
            'name' => [
                'required',
                'min:3',
                'max:255'
            ],
            'description' => [],
            'value' => [
                'required',
            ],
            'unit_of_measure' => [
                'required',
            ]
        ];

        if ($this->method() === 'PUT') {
            $rules = [
                'name' => [
                    'required',
                    'min:3',
                    'max:255',
                ],
                'description' => [],
                'value' => [
                    'required',
                ],
                'unit_of_measure' => [
                    'required',
                ]
            ];
        }

        return $rules;
    }
}
