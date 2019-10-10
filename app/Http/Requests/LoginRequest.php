<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username'=>'required|min:3',
            'password'=>'required|min:3'
        ];
    }
    public function messages()
    {
        return [
            'username.required'=>'Không được để trống email',
            'username.email'=>'username không đúng định dạng',
            'username.min'=>'username không được nhỏ hơn 3 ký tự',
            'password.required'=>'Không được để trống Password',
            'password.min'=>'Password Không được nhỏ hơn 3 ký tự',
           
        ];
    }
}
