<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 6/28/17
 * Time: 7:59 PM
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\createOrderRequest;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->paginate(10);
        return view(
            'backend.orders.index',
            [ 'orders' => $orders]
        );
    }

    public function add()
    {
        $product = DB::table('products')->get();
        $select = ['' => ''];
        foreach($product as $key => $val) {
            $select[$val->id] = $val->product_name;
        }

        return view('backend.orders.add', ['product' => $select]);
    }

    public function create(createOrderRequest $request)
    {
        DB::table('orders')->insert(
            [
                'product_id' => $request->get('product_id'),
                'order_description' => $request->get('order_description'),
                'user_email' => $request->get('user_email'),
                'user_name' => $request->get('user_name'),
                'user_phone' => $request->get('user_phone'),

            ]
        );
        return redirect()->route('admin.order')
            ->withFlashSuccess('tạo mới thành công');
    }

    public function edit($id)
    {
        $product = DB::table('products')->get();
        $select = ['' => ''];
        foreach($product as $key => $val) {
            $select[$val->id] = $val->product_name;
        }
        $order = DB::table('orders')->where('order_id',$id)->first();
        return view('backend.orders.edit',
            [
                'order' => $order,
                'product' => $select
            ]);
    }

    /**
     * @param updateProductRequest $request
     */
    public function update(createOrderRequest $request)
    {
        DB::table('orders')
            ->where('order_id', $request->get('order_id'))
            ->update(['product_id' => $request->get('product_id'),
                'order_description' => $request->get('order_description'),
                'user_email' => $request->get('user_email'),
                'user_name' => $request->get('user_name'),
                'user_phone' => $request->get('user_phone'),
            ]);

        return redirect()->route('admin.order')
            ->withFlashSuccess('chỉnh sửa thành công');

    }

    public function delete($id)
    {
        DB::table('orders')->where('order_id', $id)->delete();
        return redirect()->route('admin.order')
            ->withFlashSuccess('xoá thành công');
    }
}