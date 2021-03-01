<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'san_phams';
	protected $primaryKey = 'sp_id';
	public $timestamps = false;


	protected $fillable = [
		'sp_tensanpham',
		'sp_soluong',
		'sp_ngaytao',

	];
}
