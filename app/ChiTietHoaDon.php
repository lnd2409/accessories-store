<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    protected $table = 'chi-tiet_hoa_dons';
	protected $primaryKey = 'cthd_id';
	public $timestamps = false;


	protected $fillable = [
		'cthd_soluong',
		'cthd_dongia',
        
	];
}
