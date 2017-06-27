<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 6/26/17
 * Time: 11:32 PM
 */
class createProductRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_name' => 'required',
            'product_picture'   => 'required',
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
            'product_name.required' => 'thieu ten san pham',
            'product_picture.required' => 'thieu anh san pham',
            'product_description.required' => 'thieu mo ta san pham',

        ];
    }
}