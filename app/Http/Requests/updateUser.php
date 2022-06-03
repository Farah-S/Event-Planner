<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class updateUser extends FormRequest
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
        if($this->hasFile('image'))
        {
            #dd($this->id);
            return [
                'id'=>'sometimes',
                'first_name' => 'required|min:2',
                'last_name' => 'required|min:2',
                'email' => 'required|email|unique:users,email,'.$this->id,
                'password' => 'required|min:8',
                'image' => 'mimes:jpeg,png,jpg,gif'
            ];
        }
        #dd($this->id);
        return [
            
            'id'=>'sometimes',  
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'email' => 'required|email|unique:users,email,'.$this->id,
            'password' => 'required|min:8'
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
