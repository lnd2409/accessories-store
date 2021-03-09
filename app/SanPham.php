<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $sp_id
 * @property integer $lsp_id
 * @property integer $dmth_id
 * @property string $sp_tensanpham
 * @property int $sp_soluong
 * @property string $sp_mota
 * @property string $created_at
 * @property string $updated_at
 * @property DanhMucThuongHieu $danhMucThuongHieu
 * @property LoaiSanPham $loaiSanPham
 * @property ChiTietHoaDon[] $chiTietHoaDons
 * @property ChiTietPhieuNhap[] $chiTietPhieuNhaps
 * @property HinhAnh[] $hinhAnhs
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
    protected $fillable = ['lsp_id', 'dmth_id', 'sp_tensanpham', 'sp_soluong', 'sp_mota', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function danhMucThuongHieu()
    {
        return $this->belongsTo('App\DanhMucThuongHieu', 'dmth_id', 'dmth_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function loaiSanPham()
    {
        return $this->belongsTo('App\LoaiSanPham', 'lsp_id', 'lsp_id');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hinhAnhs()
    {
        return $this->hasMany('App\HinhAnh', 'sp_id', 'sp_id');
    }
}
