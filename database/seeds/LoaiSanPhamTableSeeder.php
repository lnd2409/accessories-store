<?php

use Illuminate\Database\Seeder;
use App\LoaiSanPham;
class LoaiSanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(LoaiSanPham::class, 10)->create();
    }
}
