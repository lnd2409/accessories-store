<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view("client.index");
});

Route::prefix('/quan-tri')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('quan-tri');

    #Sản phẩm
    Route::prefix('/san-pham')->group(function () {
        Route::get('/', 'SanPhamController@index')->name('san-pham.index');
        Route::get('/them-san-pham', 'SanPhamController@viewInsert')->name('san-pham.view-add');
        Route::post('/them-san-pham', 'SanPhamController@insert')->name('san-pham.insert');
        Route::get('chi-tiet/{idProduct}', 'SanPhamController@detailProduct')->name('san-pham.detail');
        Route::post('/them-hinh-anh/{idProduct}', 'SanPhamController@insertImageProduct')->name('san-pham.insert-image');
    });

    #Thương hiệu
    Route::prefix('thuong-hieu')->group(function () {
        Route::get('/', 'ThuongHieuController@index')->name('thuong-hieu.index');
        Route::get('/chi-tiet/{idThuongHieu}', 'ThuongHieuController@detail')->name('thuong-hieu.detail');
    });
    #Danh mục thương hiệu
    Route::prefix('/danh-muc-thuong-hieu')->group(function () {
        Route::post('/them-danh-muc', 'DanhMucThuongHieuController@store')->name('danh-muc-thuong-hieu.add');
    });

    #Lô sản phẩm
    Route::prefix('lo-san-pham')->group(function () {
        Route::get('/', 'LoSanPhamController@index')->name('lo-san-pham.index');
        Route::get('/nhap-hang', 'LoSanPhamController@viewAddPackage')->name('lo-san-pham.view-add');
    });
});
