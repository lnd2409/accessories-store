<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    protected $table = 'phieu_nhaps';
	protected $primaryKey = 'pn_id';
	public $timestamps = false;


	protected $fillable = [
		'pn_tongtien',
		'pn_ngaylap'
	];
}
