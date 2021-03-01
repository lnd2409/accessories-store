<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThuongHieu extends Model
{
    protected $table = 'thuong_hieus';
	protected $primaryKey = 'th_id';
	public $timestamps = false;


	protected $fillable = [
		'th_ten',
		'th_logo',
		'th_ghichu',
	];
}
