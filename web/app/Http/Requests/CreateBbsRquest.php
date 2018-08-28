<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateBbsRquest extends Request
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
            'title'=>'required|max:20',
            'summary'=>'required|max:40',
            'site'=>'required',
            'content'=>'required',
            'pro'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'标题不能为空',
            'lname.max'=>'标题最长输入20个字符',
            'summary.required'=>'摘要不能为空',
            'lname.max'=>'标题最长输入40个字符',
            'site.required'=>'地点不能为空',
            'pro.required'=>'图片不能为空',
            'content.required'=>'内容不能为空',
        ];
    }
}
