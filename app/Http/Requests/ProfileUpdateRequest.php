<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'profile_pic' => ['nullable', 'image', 'max:4096'],
            'gender' => ['nullable', 'string', 'max:255'],
            'telegram_username' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'phone_no' => ['nullable', 'string', 'max:20'],
            'notification' => ['nullable', 'string', 'max:255'],
        ];

    }
}
