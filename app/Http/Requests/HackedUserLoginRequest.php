<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HackedUserLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|string|unique:hacked_users',
            'password' => 'required|string'
        ];
    }
}
