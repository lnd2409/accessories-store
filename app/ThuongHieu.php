<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $th_id
 * @property string $th_ten
 * @property string $th_logo
 * @property string $th_ghichu
 * @property string $created_at
 * @property string $updated_at
 * @property DanhMucThuongHieu[] $danhMucThuongHieus
 */
class ThuongHieu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'thuong_hieu';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'th_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['th_ten', 'th_logo', 'th_ghichu', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function danhMucThuongHieus()
    {
        return $this->hasMany('App\DanhMucThuongHieu', 'th_id', 'th_id');
    }
}
