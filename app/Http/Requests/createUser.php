<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUser extends FormRequest
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
        if($this->hasFile('image')){
            return [
                        'first_name' => 'required|min:2',
                        'last_name' => 'required|min:2',
                        'email' => 'required|email|unique:users',
                        'password' => 'required|min:8',
                        'image' => 'mimes:jpeg,png,jpg,gif|size:1024'
                    ];
        }

        return [
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'firsame' => strip_tags($this['first_name']),
            'last_name' => strip_tags($this['last_name']),
            'email' => strip_tags($this->email),
            'password' => strip_tags($this->password)
        ]);
    }
}
