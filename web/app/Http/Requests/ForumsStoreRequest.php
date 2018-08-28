<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ForumsStoreRequest extends Request
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
            'btitle'=>'required|max:25',
            'badd'=>'required',
            'bsettime'=>'required',
            'bouttime'=>'required',
            'bphones'=>'required',
            'content'=>'required',
            'bpice'=>'required',

        ];
    }

    public function messages()
    {
        return [
            'btitle.required'=>'标题不能为空',
            'lname.max'=>'标题最长输入25个字符',
            'badd.required'=>'目的地不能为空',
            'bsettime.required'=>'出发日期不能为空',
            'bouttime.required'=>'结束日期不能为空',
            'bphones.required'=>'联系方式不能为空',
            'bpice.required'=>'图片不能为空',
            'content.required'=>'结伴详情不能为空',
            

        ];
    }
}
