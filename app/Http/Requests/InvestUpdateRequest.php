<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvestUpdateRequest extends FormRequest
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
            'name' => 'required|max:100',	
            'amount' => 'required|max:100',    
            'description' => 'required|max:1000', 				
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Name is required!',
            'amount.required' => 'Amount is required!',
            'description.required' => 'Description is required!'
        ];
    }
}
