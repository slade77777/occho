<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 6/26/17
 * Time: 10:53 PM
 */

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\updateProductRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\createProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $product = DB::table('products')->paginate(10);
        return view(
            'backend.product.index',
            [ 'products' => $product]
            );
    }

    public function add()
    {
        return view('backend.product.add');
    }

    public function create(createProductRequest $request)
    {
        DB::table('products')->insert(
            [
                'product_name' => $request->get('product_name'),
                'product_picture' => $this->_saveImage($request),
                'product_description' => $request->get('product_description'),
            ]
        );
        return redirect()->route('admin.product')
            ->withFlashSuccess('tạo thành công');
    }

    private function _saveImage($request)
    {
        $image = $request->file('product_picture');
        $fileImageName = $image->getClientOriginalName();
        $realPathImage = $this->_createUniqueDataName($fileImageName);
        $image->move(base_path() . '/public/assets/img/portfolio/', $realPathImage);
        return $realPathImage;
    }

    private function _createUniqueDataName($name)
    {
        return rand(10000, 10000000).date("Ymd") . '_' . $name;
    }



    public function edit($id)
    {
        $product = DB::table('products')->find($id);
        return view('backend.product.edit', ['product' => $product]);
    }

    /**
     * @param updateProductRequest $request
     */
    public function update(updateProductRequest $request)
    {
        if (!empty($request->file('product_picture'))) {
            DB::table('products')
                ->where('id', $request->get('id'))
                ->update(['product_name' => $request->get('product_name'),
                    'product_picture' => $this->_saveImage($request),
                    'product_description' => $request->get('product_description')
                ]);
        } else {
            DB::table('products')
                ->where('id', $request->get('id'))
                ->update(['product_name' => $request->get('product_name'),
                    'product_description' => $request->get('product_description')
                ]);
        }
        return redirect()->route('admin.product')
            ->withFlashSuccess('chỉnh sửa thành công');

    }

    public function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('admin.product')
            ->withFlashSuccess('xoá thành công');
    }
}