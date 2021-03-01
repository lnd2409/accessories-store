<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $ha_id
 * @property string $ha_duongdan
 * @property string $created_at
 * @property string $updated_at
 * @property SanPham[] $sanPhams
 */
class HinhAnh extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'hinh_anh';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ha_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['ha_duongdan', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sanPhams()
    {
        return $this->hasMany('App\SanPham', 'ha_id', 'ha_id');
    }
}
