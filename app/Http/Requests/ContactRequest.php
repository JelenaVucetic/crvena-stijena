<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'name' => 'required|string|max:50|min:3',
            'message' => 'required|max:500'
        ];
    }


    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'name.required' => 'Name is required!',
            'name.min' => 'Minimal number of characters are 3.',
            'name.max' => 'Maximal number of characters are 50.',
            'message.required' => 'Message is required!',
            'message.max' => 'Maximal number of characters are 500.'
        ];
    }
}
