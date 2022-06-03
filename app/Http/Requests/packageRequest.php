<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class packageRequest extends FormRequest
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
                'name' => 'required|string|min:2',
                'details'=> 'required|min:20|max:250',
                'price'=> 'required',
                'season'=> 'required|string|min:3',
                'image' => 'mimes:jpeg,png,jpg,gif|size:1024'
            ];
        }
        return [
            'name' => 'required|string|min:2',
            'details'=> 'required|min:20|max:250',
            'price'=> 'required',
            'season'=> 'required|string|min:3'
        ];
    }
    
    protected function prepareForValidation(){
        $this->merge([
            'name' => strip_tags($this['name']),
            'details' => strip_tags($this['details']),
            'season' => strip_tags($this['season'])
        ]);
    }
}
