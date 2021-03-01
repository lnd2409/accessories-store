<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $cthd_id
 * @property integer $hd_id
 * @property integer $sp_id
 * @property int $cthd_soluong
 * @property float $cthd_dongia
 * @property string $created_at
 * @property HoaDon $hoaDon
 * @property SanPham $sanPham
 */
class ChiTietHoaDon extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'chi_tiet_hoa_don';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cthd_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['hd_id', 'sp_id', 'cthd_soluong', 'cthd_dongia', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hoaDon()
    {
        return $this->belongsTo('App\HoaDon', 'hd_id', 'hd_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sanPham()
    {
        return $this->belongsTo('App\SanPham', 'sp_id', 'sp_id');
    }
}
