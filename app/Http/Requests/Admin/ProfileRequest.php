<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => ['required', 'min:2', 'max:255'],
            'mobile' => ['required', 'min:2', 'max:50'],
            'address' => ['required'],
        ];

        if ($this->input('role') == USER_ROLE_ADMIN) {
            $rules['username'] = ['required'];
            $rules['app_timezone'] = ['required'];
        } else {
            $rules['image'] = ['mimes:jpeg,png,jpg,webp', 'file', 'max:2048'];
        }

        return $rules;
    }

}
