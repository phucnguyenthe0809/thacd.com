<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPostRequest extends FormRequest
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
           'title'=>'required|min:3',
           'img'=>'image',
           'describe'=>'required|min:3',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Không được để trống Tiêu đề',
            'title.min'=>'Tiêu đề Không được nhỏ hơn 3 ký tự',
            'img.image'=>'File Không đúng định dạng',
            'describe.required'=>'Không được để trống Miêu tả',
            'describe.min'=>'Miêu tả Không được nhỏ hơn 3 ký tự'
        ];
    }
}
