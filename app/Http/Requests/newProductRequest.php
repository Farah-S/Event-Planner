<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newProductRequest extends FormRequest
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
            'table' => 'sometimes',
            'numberOfChairs'=> 'required_with:table,on',
            'numberOfTables'=> 'required_with:table,on',
            'clothColor'=> 'required_with:table,on',
            'chairColor'=> 'required_with:table,on',
            'tableShape'=> 'sometimes',
            'elseTableShape'=> 'string',

            'cp' => 'sometimes',
            'flowersColor'=> 'required_with:cp,on',
            'vaseShape'=> 'required_with:cp,on',

            'stage' => 'sometimes',
            'stageLength'=> 'required_with:stage,on',
            'stageWidth'=> 'required_with:stage,on',

            'ledScreen' => 'sometimes',
            'size'=> 'required_with:ledScreen,on',
            'numberOfScreens'=> 'required_with:ledScreen,on',

            'decorations' => 'sometimes',
            'decoBudget'=> 'required_with:decorations,on',
            'decodetails'=> 'required_with:decorations,on|string',

            'market' => 'sometimes',
            'marketingBudget' => 'required_with:market',
            'onlineAD' => 'sometimes',
            'billboardAD' => 'sometimes',

            'id' => 'sometimes',

            'lightsColor' => 'string',
            'budget' => 'required',
            'cancel' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'numberOfChairs.required_with' => "The :attribute is required if 'Tables & Chairs' is selected",
            'numberOfTables.required_with' => "The :attribute is required if 'Tables & Chairs' is selected",
            'clothColor.required_with' => "The :attribute is required if 'Tables & Chairs' is selected",
            'chairColor.required_with' => "The :attribute is required if 'Tables & Chairs' is selected",
            'elseTableShape.string' => "Please enter your desired shape or select one of the options",

            'flowersColor.required_with' => "The color of flowers is required if 'Centerpiece' is selected",
            'vaseShape.required_with' => "The :attribute is required if 'Centerpiece' is selected",

            'stageLength.required_with' => "The :attribute is required if 'Stage' is selected",
            'stageWidth.required_with' => "The :attribute is required if 'Stage' is selected",

            'size.required_with' => "The :attribute is required if 'LED Screens' is selected",
            'numberOfScreens.required_with' => "The :attribute is required if 'LED Screens' is selected",

            'decoBudget.required_with' => "The decoration budget is required if 'Decorations' is selected",
            'details.required_with' => "The decoration details is required if 'Decorations' is selected",

            'marketingBudget.required_with' => "The :attribute is required if 'Marketing' is selected",

            'lightsColor' => "Color must be a string",
            'cancel.required' => "You must accept the cancel policy"
        ];
    }
    
    protected function prepareForValidation(){
        $this->merge([
            'decodetails' => strip_tags($this['decodetails']),
            'clothColor' => strip_tags($this['clothColor']),
            'chairColor' => strip_tags($this['chairColor']),
            'elseTableShape' => strip_tags($this['elseTableShape']),
            'flowersColor' => strip_tags($this['flowersColor']),
            'vaseShape' => strip_tags($this['vaseShape']),
            'lightsColor' => strip_tags($this['lightsColor'])
        ]);
    }
}
