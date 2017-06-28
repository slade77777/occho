<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 6/28/17
 * Time: 7:59 PM
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->paginate(10);
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

    public function create($request)
    {
        DB::table('documents')->insert(
            [
                'name' => $request->get('name'),
                'type' => $this->_saveImage($request),
            ]
        );
        return redirect()->route('admin.document')
            ->withFlashSuccess('tao thanh cong');
    }
}