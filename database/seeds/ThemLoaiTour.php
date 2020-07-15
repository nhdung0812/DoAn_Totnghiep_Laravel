<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ThemLoaiTour extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaitour')->insert([
            ['ten_loai_tour' => 'Trong Nước'],
            ['ten_loai_tour' => 'Ngoài Nước'],
        ]);
    }
}
