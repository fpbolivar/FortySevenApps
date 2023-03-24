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
			'description'=>'required',
			'ratings'=>'required',
			'no_of_reviews'=>'required',
			'play_store_link'=>'required',
			'app_store_link'=>'required'
        ];
    }


    /** 
     *  Validation message customize
     */
    public function messages()
    {
        return [
            'name.required'=>'required',
			'description.required'=>'required',
			'ratings.required'=>'required',
			'no_of_reviews.required'=>'required',
			'play_store_link.required'=>'required',
			'app_store_link.required'=>'required'
        ];
    }
}
