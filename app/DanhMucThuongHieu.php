<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $dmth_id
 * @property integer $th_id
 * @property string $dmth_ten
 * @property string $created_at
 * @property string $updated_at
 * @property ThuongHieu $thuongHieu
 * @property SanPham[] $sanPhams
 */
class DanhMucThuongHieu extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'danh_muc_thuong_hieu';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'dmth_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['th_id', 'dmth_ten', 'created_at', 'updated_at'];

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
    public function sanPhams()
    {
        return $this->hasMany('App\SanPham', 'dmth_id', 'dmth_id');
    }
}
