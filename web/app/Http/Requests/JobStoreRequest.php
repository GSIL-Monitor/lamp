<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JobStoreRequest extends Request
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
            'jtitle'=>'required|unique:jobs|max:10',
            'jphone'=>'required|regex:/^1[3,4,5,6,7,8,9]{1}[\d]{9}$/',
            'jhttp'=>'required|max:64',
            'jpice'=>'required|',
            'jcontent'=>'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'jtitle.required'=>'标题名称不能为空',
            'jtitle.unique'=>'标题名称已存在',
            'jtitle.max'=>'标题名称最长10个字符',
            'jphone.required'=>'联系电话不能为空',
            'jphone.regex'=>'联系电话格式不正确',
            'jhttp.required'=>'广告链接网址不能为空',
            'jhttp.max'=>'广告链接网址最长输入64个字符',
            'jpice.required'=>'广告图片不能为空',
            'jcontent.required'=>'内容介绍不能为空',
            'jcontent.max'=>'内容介绍最长输入255个字符',
        ];
    }
}
