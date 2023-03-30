<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AppInsertRequest extends FormRequest
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
			'name'=>'required',
			'description'=>'required'
        ];
    }


    /** 
     *  Validation message customize
     */
    public function messages()
    {
        return [
            'name.required'=>'required',
			'description.required'=>'required'
        ];
    }
}
