<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ThemQuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('quantrivien')->insert([
            ['ten_quan_tri' => 'dũng','ten_dang_nhap' => 'dung' , 'mat_khau' => Hash::make('123'), 'gioi_tinh' => 1,'ngay_sinh' => '2020-07-08','dia_chi' => 'TPHCM' , 'gmail' => 'huydung@gmail.com', 'dien_thoai' => '0936671264' ,'trang_thai' => 0 ],
        ]);
    }
}
