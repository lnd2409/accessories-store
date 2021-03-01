<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $lsp_id
 * @property string $lsp_tenloai
 * @property string $lsp_ghichu
 * @property string $created_at
 * @property SanPham[] $sanPhams
 */
class LoaiSanPham extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'loai_san_pham';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'lsp_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['lsp_tenloai', 'lsp_ghichu', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sanPhams()
    {
        return $this->hasMany('App\SanPham', 'lsp_id', 'lsp_id');
    }
}
