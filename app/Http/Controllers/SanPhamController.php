<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\LoaiSanPham;
use App\ThuongHieu;
use App\HinhAnh;
class SanPhamController extends Controller
{
    public function index()
    {
        $sanPham = SanPham::all();
        return view('admin.sanpham.index', compact('sanPham'));
    }

    public function viewInsert(){
        $thuongHieu = ThuongHieu::all();
        $loaiSanPham = LoaiSanPham::all();
        return view('admin.sanpham.add', compact('thuongHieu','loaiSanPham'));
    }

    public function insert(Request $request) {
        $sanPham = new SanPham();
        $sanPham->sp_tensanpham = $request->tenSanPham;
        $sanPham->sp_soluong = 0;
        $sanPham->lsp_id = $request->loaiSanPham;
        $sanPham->th_id = $request->thuongHieu;
        $sanPham->sp_mota = $request->moTa;
        $sanPham->save();
        if($request->hasFile('hinhAnh'))
        {
            $images = $request->file('hinhAnh');
            foreach ($images as $image) {
                # code...
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/hinh-anh-san-pham/', $name);
                $ha_duongdan = 'hinh-anh-san-pham/'.$name;
                // $sp_id = $idProduct;
                HinhAnh::insert([
                    'ha_duongdan' => $ha_duongdan,
                    'sp_id' => $sanPham->sp_id
                ]);
            }
        }
        return redirect()->route('san-pham.index');
    }

    public function detailProduct($idProduct) {
        $sanPham = SanPham::find($idProduct);
        $hinhAnh = HinhAnh::where('sp_id',$idProduct)->get();
        return view('admin.sanpham.detail', compact('sanPham', 'hinhAnh'));
    }

    public function insertImageProduct(Request $request, $idProduct) {
        // $hinhAnh = new HinhAnh();

        if($request->hasFile('hinhAnh'))
        {
            $images = $request->file('hinhAnh');
            foreach ($images as $image) {
                # code...
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/hinh-anh-san-pham/', $name);
                $ha_duongdan = 'hinh-anh-san-pham/'.$name;
                $sp_id = $idProduct;
                HinhAnh::insert([
                    'ha_duongdan' => $ha_duongdan,
                    'sp_id' => $sp_id
                ]);
            }
            return redirect()->back();
        }
    }


    // public function editSanPham ($idProduct) {
    //     $sanPham = SanPham::find($idProduct);
    //     $sanPham->update([]);
    //     if ($hinhAnh) {
    //         # code...

    //     }
    // }
}
