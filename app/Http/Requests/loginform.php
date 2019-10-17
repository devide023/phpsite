<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginform extends FormRequest
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
            'username'=>'bail|required',
            'userpwd'=>'bail|required'
        ];
    }
    public function messages()
    {
        return [
            'username.required'=>'用户名不能为空！',
            'userpwd.required'=>'密码不能为空！',
            ];

    }
}
