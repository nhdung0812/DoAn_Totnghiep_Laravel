<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ThemChuongTrinhTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chuongtrinhtour')->insert([
            ['ten_tour' => 'Du lịch Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ','gia_tour' => 2000000, 'ngay_khoi_hanh' => '2020-07-20','ngay_ket_thuc' => '2020-07-25','so_ngay' => 5, 'so_dem' => 4,'so_cho' => 20, 'noi_dung' => 'Du Lịch Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ từ Sài Gòn 2020 - Mai Châu là huyện cực tây của tỉnh, phía bắc giáp tỉnh Sơn La, phía nam giáp tỉnh Thanh Hóa, phía bắc giáp huyện Đà Bắc, phía đông giáp huyện Tân Lạc. Mai Châu điểm đến thích hợp vào tất cả các mùa trong năm. Cùng Du Lịch Việt tìm hiểu những địa điểm du lịch miền bắc hấp dẫn nhất như Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ,... để bắt đầu lên kế hoạch cho chuyến du lịch ngay nhé!','hinh_anh' => 'img_HaNoi.jpg','ma_loai_tour' => 1,'chon_goi' => 0,'khuyen_mai' => 0, 'so_cho_da_dat' => 5],
            ['ten_tour' => 'Du lịch Miền Bắc - Hà Nội - Hà Giang - Cao Bằng - Thác Bản Giốc - Hồ Ba Bể', 'gia_tour'  => 2000000, 'ngay_khoi_hanh' => '2020-07-25','ngay_ket_thuc' => '2020-07-30','so_ngay' => 5, 'so_dem' => 4,'so_cho' => 20, 'noi_dung' => 'Du Lịch Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ từ Sài Gòn 2020 - Mai Châu là huyện cực tây của tỉnh, phía bắc giáp tỉnh Sơn La, phía nam giáp tỉnh Thanh Hóa, phía bắc giáp huyện Đà Bắc, phía đông giáp huyện Tân Lạc. Mai Châu điểm đến thích hợp vào tất cả các mùa trong năm. Cùng Du Lịch Việt tìm hiểu những địa điểm du lịch miền bắc hấp dẫn nhất như Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ,... để bắt đầu lên kế hoạch cho chuyến du lịch ngay nhé!','hinh_anh' => 'img_sapa.jpg','ma_loai_tour' => 1,'chon_goi' => 1,'khuyen_mai' => 0, 'so_cho_da_dat' => 6],
            ['ten_tour' => 'Du lịch Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ','gia_tour' => 2000000, 'ngay_khoi_hanh' => '2020-07-20','ngay_ket_thuc' => '2020-07-25','so_ngay' => 5, 'so_dem' => 4,'so_cho' => 20, 'noi_dung' => 'Du Lịch Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ từ Sài Gòn 2020 - Mai Châu là huyện cực tây của tỉnh, phía bắc giáp tỉnh Sơn La, phía nam giáp tỉnh Thanh Hóa, phía bắc giáp huyện Đà Bắc, phía đông giáp huyện Tân Lạc. Mai Châu điểm đến thích hợp vào tất cả các mùa trong năm. Cùng Du Lịch Việt tìm hiểu những địa điểm du lịch miền bắc hấp dẫn nhất như Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ,... để bắt đầu lên kế hoạch cho chuyến du lịch ngay nhé!','hinh_anh' => 'img_hcm.jpg','ma_loai_tour' => 1,'chon_goi' => 0,'khuyen_mai' => 0, 'so_cho_da_dat' => 7],
        ]);
    }
}
