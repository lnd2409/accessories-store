<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lo extends Model
{
    protected $table = 'los';
	protected $primaryKey = 'l_id';
	public $timestamps = false;


	protected $fillable = [
		'l_ngaylap',
        'l_ghichu'
	];

}
