<?php

namespace App\Http\Requests\Web;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'name' => 'required',
            'mobile' => 'required',
            'message' => 'required',
        ];
    }


    /** 
     *  Validation message customize
     */
    public function messages()
    {
        return [
            'email.required' => 'Required',
            'name.required' => 'Required',
            'mobile.required' => 'Required',
            'message.required' => 'Required'
        ];
    }
}
