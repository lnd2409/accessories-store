<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khach_hangs';
	protected $primaryKey = 'kh_id';
	public $timestamps = false;


	protected $fillable = [
		'kh_hoten',
		'kh_email',
		'kh_diachi',
		'kh_ngaysinh',
		'kh_sdt',
		'username',
		'password',
	];
}
