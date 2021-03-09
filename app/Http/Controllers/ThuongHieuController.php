<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThuongHieu;
use App\SanPham;

class ThuongHieuController extends Controller
{
    public function index() {
        $thuongHieu = ThuongHieu::orderBy('th_id', 'desc')->get();
        return view('admin.thuonghieu.index', compact('thuongHieu'));
    }

    public function detail($idThuongHieu) {
        $thuongHieu = ThuongHieu::find($idThuongHieu);
        return response()->json($thuongHieu, 200);
    }
}
