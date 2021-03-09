<?php

use Illuminate\Database\Seeder;

class ThuongHieuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $thuongHieu = [
            [
                'th_ten' => 'Samsung',
                'th_logo' => 'rỗng',
                'th_ghichu' => 'rỗng',
            ],
            [
                'th_ten' => 'Apple',
                'th_logo' => 'rỗng',
                'th_ghichu' => 'rỗng',
            ],
            [
                'th_ten' => 'Xiaomi',
                'th_logo' => 'rỗng',
                'th_ghichu' => 'rỗng',
            ],
            [
                'th_ten' => 'Nokia',
                'th_logo' => 'rỗng',
                'th_ghichu' => 'rỗng',
            ],
            [
                'th_ten' => 'Oppo',
                'th_logo' => 'rỗng',
                'th_ghichu' => 'rỗng',
            ],

        ];
        DB::table('thuong_hieu')->insert($thuongHieu);
    }
}
