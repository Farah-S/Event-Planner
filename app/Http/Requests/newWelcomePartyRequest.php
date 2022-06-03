<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newWelcomePartyRequest extends FormRequest
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
            'stage' => 'sometimes',
            'stageLength'=> 'required_with:stage,on',
            'stageWidth'=> 'required_with:stage,on',

            'ledScreen' => 'sometimes',
            'size'=> 'required_with:ledScreen,on',
            'numberOfScreens'=> 'required_with:ledScreen,on',
            
            'lightsColor' => 'string',
            'budget' => 'required',
            'cancel' => 'required'
        ];
    }
    
    public function messages()
    {
        return [
            'stageLength.required_with' => "The :attribute is required if 'Stage' is selected",
            'stageWidth.required_with' => "The :attribute is required if 'Stage' is selected",

            'size.required_with' => "The :attribute is required if 'LED Screens' is selected",
            'numberOfScreens.required_with' => "The :attribute is required if 'LED Screens' is selected",

            'lightsColor' => "Color must be a string",
            'cancel.required' => "You must accept the cancel policy"
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'lightsColor' => strip_tags($this['lightsColor'])
        ]);
    }
}
