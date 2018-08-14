<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditStoreRequest extends Request
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
            'nickname' => 'required|regex:/^[a-zA-Z]{1}[\w]{5,17}$/',
            'tel' => 'required|regex:/^1[3,4,5,6,7,8,9]{1}[\d]{9}$/',
            'power' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nickname.required'=>'用户名必填',
            'nickname.regex'=>'用户名格式不正确',
            'tel.required'=>'手机号必填',
            'tel.regex'=>'手机号格式不正确',
            'power.required'=>'权限必须选择',
        ];
    }
}
