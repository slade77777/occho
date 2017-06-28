<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 6/27/17
 * Time: 10:17 PM
 */

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class updateProductRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_name' => 'required',
            'product_description'   => 'required',
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
            'product_name.required' => 'thiếu tên sản phẩm',
            'product_description.required' => 'thiếu mô tả sản phẩm',

        ];
    }
}