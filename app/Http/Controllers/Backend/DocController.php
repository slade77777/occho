<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 6/27/17
 * Time: 10:57 PM
 */

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\createDocRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DocController extends Controller
{
    public function index()
    {
        $documents = DB::table('documents')->paginate(10);
        return view(
            'backend.documents.index',
            [ 'documents' => $documents]
        );
    }

    public function add()
    {
        return view('backend.documents.add');
    }

    public function create(createDocRequest $request)
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

    private function _saveImage($request)
    {
        $image = $request->file('type');
        $fileImageName = $image->getClientOriginalName();
        $realPathImage = '/file/product/' . $this->_createUniqueDataName($fileImageName);
        $image->move(base_path() . '/public/file/product/', $realPathImage);
        return $realPathImage;
    }

    private function _createUniqueDataName($name)
    {
        return rand(10000, 10000000).date("Ymd") . '_' . $name;
    }

    public function delete($id)
    {
        DB::table('documents')->where('id', $id)->delete();
        return redirect()->route('admin.document')
            ->withFlashSuccess('xoa thanh cong');
    }


}