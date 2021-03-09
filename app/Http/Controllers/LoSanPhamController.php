<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoSanPhamController extends Controller
{
    public function index() {
        return view('admin.losanpham.index');
    }

    public function viewAddPackage() {
        return view('admin.losanpham.add');
    }
}
