<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $sp_id
 * @property integer $lsp_id
 * @property integer $ha_id
 * @property integer $th_id
 * @property string $sp_tensanpham
 * @property int $sp_soluong
 * @property string $sp_ngaytao
 * @property string $created_at
 * @property string $updated_at
 * @property HinhAnh $hinhAnh
 * @property LoaiSanPham $loaiSanPham
 * @property ThuongHieu $thuongHieu
 * @property ChiTietHoaDon[] $chiTietHoaDons
 * @property ChiTietPhieuNhap[] $chiTietPhieuNhaps
 */
class SanPham extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'san_pham';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'sp_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['lsp_id', 'ha_id', 'th_id', 'sp_tensanpham', 'sp_soluong', 'sp_ngaytao', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hinhAnh()
    {
        return $this->belongsTo('App\HinhAnh', 'ha_id', 'ha_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function loaiSanPham()
    {
        return $this->belongsTo('App\LoaiSanPham', 'lsp_id', 'lsp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function thuongHieu()
    {
        return $this->belongsTo('App\ThuongHieu', 'th_id', 'th_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chiTietHoaDons()
    {
        return $this->hasMany('App\ChiTietHoaDon', 'sp_id', 'sp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chiTietPhieuNhaps()
    {
        return $this->hasMany('App\ChiTietPhieuNhap', 'sp_id', 'sp_id');
    }
}
