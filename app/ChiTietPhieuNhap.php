<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietPhieuNhap extends Model
{
    protected $table = 'chi_tiet_phieu_nhaps';
	protected $primaryKey = 'ctpn_id';
	public $timestamps = false;


	protected $fillable = [
		'ctpn_dongia',
		'ctpn_ghichu',
		'ctpn_soluong'
	];
}
