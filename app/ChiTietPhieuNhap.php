<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $ctpn_id
 * @property integer $l_id
 * @property integer $pn_id
 * @property integer $sp_id
 * @property int $ctpn_soluong
 * @property float $ctpn_dongia
 * @property string $ctpn_ghichu
 * @property string $created_at
 * @property Lo $lo
 * @property PhieuNhap $phieuNhap
 * @property SanPham $sanPham
 */
class ChiTietPhieuNhap extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'chi_tiet_phieu_nhap';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ctpn_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['l_id', 'pn_id', 'sp_id', 'ctpn_soluong', 'ctpn_dongia', 'ctpn_ghichu', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lo()
    {
        return $this->belongsTo('App\Lo', 'l_id', 'l_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function phieuNhap()
    {
        return $this->belongsTo('App\PhieuNhap', 'pn_id', 'pn_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sanPham()
    {
        return $this->belongsTo('App\SanPham', 'sp_id', 'sp_id');
    }
}
