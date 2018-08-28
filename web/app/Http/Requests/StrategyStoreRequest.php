<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StrategyStoreRequest extends Request
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
            'smdd' => 'required',
            'shttps' => 'required',
            'spice' => 'required',
            'pdcaas' => 'required|numeric',
            'pdcaas' => ['regex:/^(\d|[1-9]\d|100)(\.\d{1,2})?$/'],
            'sbodys' => 'max:120',
        ];
    }

    public function messages()
    {
        return [
            'stitle.required'=>'标题名称不能为空',
            'smdd.required'=>'目的地不能为空',
            'pdcaas.required'=>'评分值不能为空',
            'pdcaas.numeric'=>'评分值必须是数值',
            'pdcaas.regex'=>'评分值0~100数值,且小数点保留两位',
            'shttps.required'=>'超链接不能为空',
            'spice.required'=>'景色图片不能为空',
            'sbodys.max'=>'最长可输入120个字符',
        ];
    }
}
