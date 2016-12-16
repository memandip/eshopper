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
          'name'=>'required | min:4',
          'email'=>'required | min:6',
          'phone'=>'alpha_dash',
          'user_id'=>'numeric',
          'subject'=>'required',
          'message'=>'required | min:6'
        ];
    }
}
