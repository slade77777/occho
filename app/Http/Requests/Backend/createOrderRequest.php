<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 6/28/17
 * Time: 10:15 PM
 */

namespace App\Http\Requests\Backend;
use App\Http\Requests\Request;


class createOrderRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_name' => 'required',
            'user_phone'   => 'required',
            'user_email'   => 'required',
            'product_id'    => 'required'
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
            'user_name.required' => 'thiếu tên người mua',
            'user_phone.required' => 'thiếu số điện thoại người mua',
            'user_email.required' => 'thiếu email người mua',
            'product_id.required' => 'thiếu sản phẩm',

        ];
    }
}