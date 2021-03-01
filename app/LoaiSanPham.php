<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table = 'loai_sapn_phams';
	protected $primaryKey = 'lsp_id';
	public $timestamps = false;


	protected $fillable = [
		'lsp_tenloai',
        'lsp_ghichu'
	];
}
