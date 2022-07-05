<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Loai;
use App\Mau;
use App\Sanpham;
use Mail;
use App\Mail\ContactMailer;

class Add_ToCartProduct extends Controller
{
    // public function index(Request $request){
    //     $ds_top3_newest_loaisanpham = DB::table('products')
    //     ->join('cusc_sanpham', 'cusc_loai.l_ma', '=', 'cusc_sanpham.l_ma')
    //     ->orderBy('l_capNhat')->take(3)->get();

    // // Query tìm danh sách sản phẩm
    // $danhsachsanpham = $this->searchSanPham($request);
    
    // // Query Lấy các hình ảnh liên quan của các Sản phẩm đã được lọc
    // $danhsachhinhanhlienquan = DB::table('cusc_hinhanh')
    //     ->whereIn('sp_ma', $danhsachsanpham->pluck('sp_ma')->toArray())
    //     ->get();

    // // Query danh sách Loại
    // $danhsachloai = Loai::all();
    
    // // Query danh sách màu
    // $danhsachmau = Mau::all();
    
    // // Hiển thị view `frontend.index` với dữ liệu truyền vào
    // return view('frontend.index')
    //     ->with('ds_top3_newest_loaisanpham', $ds_top3_newest_loaisanpham)
    //     ->with('danhsachsanpham', $danhsachsanpham)
    //     ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan)
    //     ->with('danhsachmau', $danhsachmau)
    //     ->with('danhsachloai', $danhsachloai);
    // }
}
