<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArbeitszeitenRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'kommen'=>['required', 'date'],
            'gehen'=>['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
