<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MachStoreRequest extends Request
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
            'wtitle'=>'required|max:20',
            'wcontent'=>'required',
            
        ];
    }

    public function messages()
    {
        return [
            'wtitle.required'=>'问题不能为空',
            'wtitle.max'=>'最长输入20个字符',
            'wcontent.required'=>'问题描述不能为空',
            
        ];
    }
}
