<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 6/27/17
 * Time: 11:19 PM
 */

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class createDocRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'type'   => 'required|mimes:csv,pdf,docx,xlss',
        ];
    }

    /**
     * Message return
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'thiếu tên sản phẩm',
            'type.mimes' => 'định dạng file không hợp lệ',
            'type.required' => 'thiếu tài liệu'
        ];
    }
}