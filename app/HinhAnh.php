<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    protected $table = 'hinh_anhs';
	protected $primaryKey = 'ha_id';
	public $timestamps = false;


	protected $fillable = [
		'ha_duongdan'
	];
}
