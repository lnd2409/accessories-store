<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = 'hoa_dons';
	protected $primaryKey = 'hd_id';
	public $timestamps = false;


	protected $fillable = [
		'hd_ngaytao',
		'hd_tongtien',
		'hd_trangthai',
	];
}
