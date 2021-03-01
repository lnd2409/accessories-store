<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $kh_id
 * @property string $kh_hoten
 * @property string $kh_email
 * @property string $kh_diachhi
 * @property string $kh_ngaysinh
 * @property string $kh_sdt
 * @property string $username
 * @property string $password
 * @property string $created_at
 * @property HoaDon[] $hoaDons
 */
class KhachHang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'khach_hang';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'kh_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kh_hoten', 'kh_email', 'kh_diachhi', 'kh_ngaysinh', 'kh_sdt', 'username', 'password', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hoaDons()
    {
        return $this->hasMany('App\HoaDon', 'kh_id', 'kh_id');
    }
}
