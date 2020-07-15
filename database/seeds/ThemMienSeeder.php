<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ThemMienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mien')->insert([
            ['ten_mien' => 'Miền Bắc' , 'ma_loai_tour' => 1],
            ['ten_mien' => 'Miền Trung', 'ma_loai_tour' => 1  ],
            ['ten_mien' => 'Miền Nam','ma_loai_tour' => 1 ],
        ]);
    }
}
