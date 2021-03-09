<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMucThuongHieu;
use Carbon\Carbon;
class DanhMucThuongHieuController extends Controller
{
    public function store(Request $request) {
        $danhMuc = new DanhMucThuongHieu();
        $danhMuc->dmth_ten = $request->tenDanhMuc;
        $danhMuc->th_id = $request->thuongHieu;
        $danhMuc->created_at = Carbon::now();
        $danhMuc->updated_at = Carbon::now();
        $danhMuc->save();
        return redirect()->back();
    }
}
