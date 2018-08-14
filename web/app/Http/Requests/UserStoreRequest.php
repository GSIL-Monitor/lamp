<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserStoreRequest extends Request
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
            'nickname' => 'required|unique:admin_users|regex:/^[a-zA-Z]{1}[\w]{5,17}$/',
            'tel' => 'required|regex:/^1[3,4,5,6,7,8,9]{1}[\d]{9}$/',
            'password' => 'required|regex:/^[\w]{5,17}$/',
            'repassword' => 'required|same:password',
            'power' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nickname.required'=>'用户名必填',
            'nickname.regex'=>'用户名格式不正确',
            'nickname.unique'=>'用户名已存在',
            'tel.required'=>'手机号必填',
            'tel.regex'=>'手机号格式不正确',
            'password.required'=>'密码必填',
            'password.regex'=>'密码格式不正确',
            'repassword.required'=>'确认密码必填',
            'repassword.same'=>'两次密码输入不一致',
            'power.required'=>'权限必须选择',
        ];
    }
}
