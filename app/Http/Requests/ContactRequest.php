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
            'message' => 'required | min:3',
            'name'=> 'required  | min:3',
            'email'=> 'required | email',
            'subject'=> 'required  | min:3',
        ];
    }

    public function messages()
    {
        return [
            'numberOfChairs.required_with' => "The :attribute is required if 'Tables & Chairs' is selected",
           
        ];
    }
    
    protected function prepareForValidation(){
        $this->merge([
            'message' => strip_tags($this['message']),
            'name' => strip_tags($this['name']),
            'email' => strip_tags($this['email']),
            'subject' => strip_tags($this['subject']),
           
        ]);
    }
}
