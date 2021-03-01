<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $hd_id
 * @property integer $kh_id
 * @property string $hd_ngaytao
 * @property float $hd_tongtien
 * @property int $hd_trangthai
 * @property string $created_at
 * @property string $updated_at
 * @property KhachHang $khachHang
 * @property ChiTietHoaDon[] $chiTietHoaDons
 */
class HoaDon extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'hoa_don';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'hd_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kh_id', 'hd_ngaytao', 'hd_tongtien', 'hd_trangthai', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function khachHang()
    {
        return $this->belongsTo('App\KhachHang', 'kh_id', 'kh_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chiTietHoaDons()
    {
        return $this->hasMany('App\ChiTietHoaDon', 'hd_id', 'hd_id');
    }
}
