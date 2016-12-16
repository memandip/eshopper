<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'full_name'=>'required',
            'username'=>'required | min:6 | unique:customers,username',
            'email'=>'required | min:6 | unique:customers,email',
            'password'=>'required | min:6',
            'country'=>'required',
            'address'=>'required'
        ];
    }
}
