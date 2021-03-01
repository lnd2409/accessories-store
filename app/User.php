<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $l_id
 * @property string $l_ngaylap
 * @property string $l_ghichu
 * @property string $created_at
 * @property ChiTietPhieuNhap[] $chiTietPhieuNhaps
 */
class User extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'lo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'l_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['l_ngaylap', 'l_ghichu', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chiTietPhieuNhaps()
    {
        return $this->hasMany('App\ChiTietPhieuNhap', 'l_id', 'l_id');
    }
}
