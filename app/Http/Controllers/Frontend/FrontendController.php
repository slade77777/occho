<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;
/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $product = DB::table('products')->get();
        return view('frontend.home',['product' => $product]);
    }

    public function service() {
        return view('frontend.services');
    }

    public function material() {
        $documents = DB::table('documents')->get();
        return view('frontend.material',['documents' => $documents]);
    }

    public function single($id) {
        $product = DB::table('products')->where('id',$id)->get()->first();
        return view('frontend.singleproject',['product' => $product]);
    }

    public function about() {
        $documents = DB::table('documents')->get();
        return view('frontend.about',['documents' => $documents]);
    }

    public function send_order(Request $request) {
        $productId = $request->product_id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $description = $request->description;
        DB::table('orders')->insert([
            'product_id' => $productId,
            'user_name' => $name,
            'user_email' => $email,
            'user_phone' => $phone,
            'order_description' => $description
        ]);
        $request->session()->flash('alert-success', 'Cảm Ơn Quý Khách Đã Gửi Thông Tin.Vui Lòng Chờ Phản Hồi Từ Website Trong Chốc Lát');
        return redirect('/single/'.$productId);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
