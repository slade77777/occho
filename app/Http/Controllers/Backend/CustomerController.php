<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CustomerController extends Controller {

    public function index() {
        $customers = DB::table('customers')->get();
        return view(
            'backend.customer.index',
            ['customers' => $customers]
        );
    }

    public function add() {
        return view(
            'backend.customer.add'
        );
    }

    public function create(Request $request)
    {
        DB::table('customers')->insert(
            [
                'customer_name' => $request->get('customer_name'),
                'customer_picture' => $this->_saveImage($request),
            ]
        );
        return redirect()->route('admin.customer')
            ->withFlashSuccess('Tạo Thành Công');
    }

    private function _saveImage($request)
    {
        $image = $request->file('customer_picture');
        $fileImageName = $image->getClientOriginalName();
        $realPathImage = $this->_createUniqueDataName($fileImageName);
        $image->move(base_path() . '/public/assets/customers', $realPathImage);
        return $realPathImage;
    }

    private function _createUniqueDataName($name)
    {
        return rand(10000, 10000000).date("Ymd") . '_' . $name;
    }

    public function delete($id) {
        DB::table('customers')->where('id', $id)->delete();
        return redirect()->route('admin.customer')
            ->withFlashSuccess('Xóa Thành Công');
    }

    public function edit($id) {
        $customer = DB::table('customers')->find($id);
        return view('backend.customer.edit', ['customer' => $customer]);
    }

    public function update(Request $request) {
        if (!empty($request->file('customer_picture'))) {
            DB::table('customers')
                ->where('id', $request->get('id'))
                ->update(['customer_name' => $request->get('customer_name'),
                    'customer_picture' => $this->_saveImage($request),
                ]);
        } else {
            DB::table('customers')
                ->where('id', $request->get('id'))
                ->update(['customer_name' => $request->get('customer_name'),
                ]);
        }
        return redirect()->route('admin.customer')
            ->withFlashSuccess('chỉnh sửa thành công');
    }

}
