<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class createCustomEvent extends FormRequest
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
                        'details' => 'required|min:50',
                        'budget' => 'required',
                        'cancel' => 'required',
                        'image' => 'mimes:jpeg,png,jpg,gif|size:1024'
                    ];
        }
        return [
                    'details' => 'required|min:50',
                    'budget' => 'required',
                    'cancel' => 'required'
                ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'details' => strip_tags($this['details'])
        ]);
    }
}
