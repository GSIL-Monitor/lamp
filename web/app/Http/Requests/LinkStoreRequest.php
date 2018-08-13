<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LinkStoreRequest extends Request
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
            'lname'=>'required|unique:links',
            'lurl'=>'required|unique:links',
            'lbody'=>'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'lname.required'=>'网站名称不能为空',
            'lname.unique'=>'网站名称已存在',
            'lurl.required'=>'网址不能为空',
            'lurl.unique'=>'链接地址已存在',
            'lurl.regex'=>'链接网址格式错误',
            'lbody.required'=>'网站简介不能为空',
            'lbody.max'=>'网站简介最长输入255个字符',
        ];
    }
}
