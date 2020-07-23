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
            //Tour miền bắc
            ['ten_tour' => 'Du lịch Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ','gia_tour' => 2000000, 'ngay_khoi_hanh' => '2020-07-20','ngay_ket_thuc' => '2020-07-25','so_ngay' => 5, 'so_dem' => 4,'so_cho' => 20, 'noi_dung' => 'Du Lịch Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ từ Sài Gòn 2020 - Mai Châu là huyện cực tây của tỉnh, phía bắc giáp tỉnh Sơn La, phía nam giáp tỉnh Thanh Hóa, phía bắc giáp huyện Đà Bắc, phía đông giáp huyện Tân Lạc. Mai Châu điểm đến thích hợp vào tất cả các mùa trong năm. Cùng Du Lịch Việt tìm hiểu những địa điểm du lịch miền bắc hấp dẫn nhất như Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ,... để bắt đầu lên kế hoạch cho chuyến du lịch ngay nhé!','hinh_anh' => 'img_HaNoi.jpg','ma_loai_tour' => 1,'chon_goi' => 0,'khuyen_mai' => 0, 'so_cho_da_dat' => 5],
            ['ten_tour' => 'Du lịch Miền Bắc - Hà Nội - Hà Giang - Cao Bằng - Thác Bản Giốc - Hồ Ba Bể', 'gia_tour'  => 2000000, 'ngay_khoi_hanh' => '2020-07-25','ngay_ket_thuc' => '2020-07-30','so_ngay' => 5, 'so_dem' => 4,'so_cho' => 20, 'noi_dung' => 'Du Lịch Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ từ Sài Gòn 2020 - Mai Châu là huyện cực tây của tỉnh, phía bắc giáp tỉnh Sơn La, phía nam giáp tỉnh Thanh Hóa, phía bắc giáp huyện Đà Bắc, phía đông giáp huyện Tân Lạc. Mai Châu điểm đến thích hợp vào tất cả các mùa trong năm. Cùng Du Lịch Việt tìm hiểu những địa điểm du lịch miền bắc hấp dẫn nhất như Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ,... để bắt đầu lên kế hoạch cho chuyến du lịch ngay nhé!','hinh_anh' => 'img_sapa.jpg','ma_loai_tour' => 1,'chon_goi' => 1,'khuyen_mai' => 0, 'so_cho_da_dat' => 6],
            ['ten_tour' => 'Du lịch Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ','gia_tour' => 2000000, 'ngay_khoi_hanh' => '2020-07-20','ngay_ket_thuc' => '2020-07-25','so_ngay' => 5, 'so_dem' => 4,'so_cho' => 20, 'noi_dung' => 'Du Lịch Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ từ Sài Gòn 2020 - Mai Châu là huyện cực tây của tỉnh, phía bắc giáp tỉnh Sơn La, phía nam giáp tỉnh Thanh Hóa, phía bắc giáp huyện Đà Bắc, phía đông giáp huyện Tân Lạc. Mai Châu điểm đến thích hợp vào tất cả các mùa trong năm. Cùng Du Lịch Việt tìm hiểu những địa điểm du lịch miền bắc hấp dẫn nhất như Hà Nội - Mai Châu - Mộc Châu - Sơn La - Sapa - Yên Bái - Phú Thọ,... để bắt đầu lên kế hoạch cho chuyến du lịch ngay nhé!','hinh_anh' => 'img_hcm.jpg','ma_loai_tour' => 1,'chon_goi' => 0,'khuyen_mai' => 0, 'so_cho_da_dat' => 7],
            ['ten_tour' => 'Du lịch Miền Bắc - Tour Vân Đồn - Quảng Ninh - Hạ Long','gia_tour' => 4000000, 'so_ngay' => 4, 'so_dem' => 3,'so_cho' => 20, 'noi_dung' => 'Du lịch Miền Bắc - Tour Vân Đồn - Quảng Ninh - Hạ Long từ Sài Gòn 2020 - Cùng Tour Nè !  khám phá phương Bắc chiêm ngắm tham quan Đền Cửa Ông, ngôi đền linh thiêng bậc nhất tại Quảng Ninh. Là ngôi đền duy nhất thờ đầy đủ gia thất Trần Quốc Tuấn và các cận thần, tọa lạc trên một ngọn núi thấp, nhìn thẳng ra vịnh Bái Tử Long, một “rừng” đảo muôn hình, muôn vẻ nổi bật trên nền xanh biếc của nước biển tạo nên cảnh quan sơn thủy hữu tình.
            Bên cạnh đó, trong hành trình tour du khách được đến tham quan Chùa Bái Đính, là một trong những điểm du lịch tâm linh vô cùng hấp dẫn mà dường như chẳng còn xa lạ với nhiều người vào mỗi dịp du xuân đầu năm. Ngôi chùa này còn lưu giữ rất nhiều kỷ lục khiến ai ai cũng phải trầm trồ ngưỡng mộ và thán phục. Do đó, nếu du khách muốn có một hành trình du lịch tâm linh thật hoàn hảo, trọn vẹn cho dịp đầu xuân 2020 thì nhớ đừng nên bỏ lỡ cơ hội đến chiêm bái tại chùa Bái Đính và cùng tham khảo các tour lễ chùa đầu năm tại Tour Nè ! nhé!
            ','hinh_anh' => 'img_hcm.jpg','ma_loai_tour' => 2,'chon_goi' => 0,'khuyen_mai' => 0, 'so_cho_da_dat' => 10],
            ['ten_tour' => 'Du lịch Đông Bắc mùa Hè Tây Bắc - Mộc Châu - Sơn La - Điện Biên
            ',
            'gia_tour' => 4500000,
             'so_ngay' => 6,
              'so_dem' => 5,
              'so_cho' => 20,
               'noi_dung' => 'Tour du lịch Hè Mai Châu - Mộc Châu đưa Quý khách đến thăm thung lũng Mai Châu yên bình trong sớm mai gắn liền với những cánh đồng lúa xanh thắm lòng người hay những ngôi nhà sàn nhỏ san sát nhau. Đến Mộc Châu - cao nguyên rộng lớn và xinh đẹp nhất miền núi phía bắc, mảnh đất nổi tiếng với những cánh đồng hoa cải trắng thơ mộng, những đồi chè xanh mướt, những rừng thông cao vút và những thác nước tuyệt đẹp…
            ',
            'hinh_anh' => 'img_hcm.jpg','ma_loai_tour' => 2,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            ['ten_tour' =>'Du lịch Hà Nội - Hạ Long - Sapa'
            ,'gia_tour' => 4500000, 
            'so_ngay' => 6, 
            'so_dem' => 5,'so_cho' => 20, 
            'noi_dung' => 'Với mong muốn dùng hành động để gửi đến du khách những lời tri ân sâu sắc nhất, công ty Tour Nè ! kết hợp với hãng hàng không Vietnam Airlines gửi đến du khách hành trình du lịch Miền Bắc– Hà Nội – Hạ Long – Yên Tử - Sapa – Fansipan 4 ngày 3 đêm với giá ưu đãi, với hành trình này còn dành được tặng thêm 20kg hành lý ký gửi giúp du khách có một chuyến đi thoải mái và an toàn nhất
            Với độ dốc vừa phải, con đường trải nhựa quanh co mềm mại ôm sát vào vách núi như một chiếc khăn lụa. Ngồi trên xe, du khách cảm nhận thấy ngay bầu không khí trong lành dịu mát và cảnh quan ngoạn mục đặc trưng của miền Tây Bắc. Trên cung đường này 1 bên là vách đá dựng đứng  một bên là những thửa ruộng bậc thang đẹp như tranh vẽ dưới thung lũng hai bên đường là hành thông thẳng tắp chào đón bước chân du khách đến với du lịch Sapa.
            Chìm trong làn mây bồng bềnh thị trấn Sapa như một thành phố trong sương huyền ảo vẽ nên 1 bức tranh sơn thủy hữu tình.
            Nơi đây có thứ tài nguyên vô giá đó là khí hậu trong lành, mát mẻ mang nhiều sắc thái đa dạng. Một ngày ở Sapa có tới 4 mùa sáng, chiều là thời tiết của mùa xuân mùa thu, buổi trưa là thời tiết của mùa hạ có nắng nhẹ nhưng không khí vẫn dịu mát. Đêm đến trời lại là thời tiết mùa đông. Với khí hậu lý tưởng như vậy mà Sapa trở thành điểm nghỉ dưỡng tuyệt vời cho du khách bốn phương. Rải rác khắp thị trấn giữa rừng đào thơ mộng và rặng samu xanh mát là những biệt thự cổ kính xen lẫn hiện đại có kiến trúc theo kiểu phương tây khiến thị trấn Sapa mang nhiều dáng dấp của một thành phố châu  u. 
            Tọa Lạc ngay trung tâm thị trấn là nhà thờ đá Sapa, được xây dựng năm 1895. Đây được coi là dự án kiến trúc cổ toàn vẹn nhất của người Pháp còn sót lại. Với kiến trúc La Mã bay bổng, nhà thờ Đá hiện đang được coi là biểu tượng của thành phố Sapa và là nơi diễn ra rất nhiều các lễ hội đầy màu sắc của phố núi.             
            Thị trấn Sapa còn một điểm đến không thể bỏ qua với bất cứ du khách nào đó là núi Hàm Rồng, thuộc dãy Hoàng Liên Sơn hùng vỹ. Khu du lịch Hàm Rồng được xây dựng trên diện tích gần 150ha, đến đây du khách có thể khám phá những cảnh sắc thiên nhiên tuyệt đẹp như: vườn Lan, cồng trời, sân mây, vườn đào với cỏ hoa rực rỡ sen lẫn lớp lớp đá dủ loại hình dáng. Nơi đây cũng là nơi tuyệt vời để du khách có thể phóng tầm mắt ngắm nhìn Sapa toàn cảnh từ trên cao…            
            Cách trung tâm thị trấn Sapa 3km, du khách đến với Cát Cát điểm du lịch còn nguyên vẹn vẻ đẹp bình yên của bản làng cổ xưa. Đây cũng là nơi người Pháp chọn làm địa điểm nghỉ dưỡng cho các quan chức cấp cao đầu thế kỷ 20. Bên cạnh khung cảnh thiên nhiên hoang sơ, núi rừng thênh thang thơ mộng. Cát Cát còn hấp dẫn khách du lịch bằng nét văn hóa truyền thống đặc sắc và đa dạng của đồng bào H’mông. 
            Đặc biệt của hành trình, chinh phục đỉnh Fansipan là mơ ước của nhiều người. Nếu như trước đây du khách phải mất 2 ngày 2 đêm để di chuyển bằng đường rừng để đến được với nóc nhà Đông Dương, thì ngày nay du khách chỉ mất 30 phút ngồi cáp treo cao nhất, dài nhất, và hiện đại nhất thế giới.            
            Ngồi trên cáp treo ngắm nhìn Sapa từ trên cao là một trong những trải nghiệm thú vị đầu tiên trên hành trình “chinh phục đỉnh cao mơ ước Fansipan”. Bạn sẽ có cảm giác thư thái ngắm nhìn cảnh đẹp núi rừng, chiêm ngưỡng thung lũng Mường Hoa hùng vĩ và tận hưởng cảm giác bồng bền như lướt đi trên mây.             
            Từ nhà ga Fansipan, du khách sẽ phải chinh phục thêm 600 bậc thang nữa mới có thể đặt chân lên nóc nhà Đông Dương. Đi qua cổng Tam Quan, Thanh Vân Đắc Lộ, các bậc thang bằng đá đưa du khách đến một loạt các đền chùa thờ Tam Thánh Mẫu, và thờ Phật. Ở đây quanh năm mây mù bao phủ càng làm cho không gian tâm linh thêm phần huyền ảo hư hư thực thực. Vào những ngày đẹp trời, từ độ cao 3000m du khách có thể ngắm nhìn biển mây kỳ vĩ, đây cũng là lý do điểm du lịch mới mẻ này được gọi bằng cái tên “thành phố trên mây”. Hãy chuẩn bị máy ảnh thất tốt để không bỏ lỡ những khoảnh khắc tuyệt vời của thiên nhiên và việc bạn chạm vào mây hay bước đi trên mây là hoàn toàn có thật.             
            Nếu không thể leo bộ, chuyến tàu điện 2 chiều sẽ sẵn sàng phục vụ du khách, chỉ trong 1 phút bạn đã có thể đặt chân lên đỉnh Fansipan và cầm cờ Tổ Quốc chụp những bức ảnh lưu niệm đáng nhớ. Đỉnh Fansipan cao 31400m là tuyệt tác của tự nhiên và là tuyệt tác mà bất cứ ai cũng muốn chinh phục, vị vậy đừng chần chừ mà hãy nhanh chân đến với tour du lịch Sapa cùng công ty Tour Nè ! các bạn nhé!',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 2,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],
            
            ['ten_tour' => 'Du lịch Hà Nội - Yên Tử - Vịnh Hạ Long - Sapa - Đỉnh Fansipan',
            'gia_tour' => 4500000,
             'so_ngay' => 4,
              'so_dem' => 3,
              'so_cho' => 20,
               'noi_dung' =>'Du lịch Hà Nội dịp lễ 30/4“Hành trình phương Bắc” sẽ đưa du khách đến Hà Nội 36 phố phường, nếm đặc sản đất Hà Thành, chìm đắm trong cảnh sắc núi rừng Yên Tử, cảm nhận không gian bao la hùng vĩ của Hạ Long, khám phá nét đặc sắc của văn hóa vùng cao nơi phố núi với du lịch Sapa dịp 30/4 với mênh mông những thửa ruộng bậc thang xanh ngút ngàn và tìm hiểu đời sống văn hóa của đồng bào dân tộc – Đó là những gì mà du khách đi tour du lịch Hà Nội dịp lễ 30/4 cảm nhận được trong 5 ngày 4 đêm, chương trình “Hà Nội – Yên Tử – Hạ Long – Lào Cai – Sapa” của Tour Nè !
               ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 2,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            //Tour miền Trung
            ['ten_tour' => 'Du lịch Đà Nẵng - Bà Nà - Hội An - Huế -Thánh Địa La Vang - Động Phong Nha',
            'gia_tour' => 4500000,
            'so_ngay' => 4,
            'so_dem' => 3,
            'so_cho' => 20,
            'noi_dung' =>'Du lịch Miền Trung được thiên nhiên đặc biệt ưu đãi, mảnh đất miền Trung đẹp với nhiều dãy núi hùng vĩ xanh rì, những bờ biển cát trắng mịn thoai thoải và những dòng sông trong vắt thơ mộng. Không những vậy, trên con đường di sản miền Trung cùng Du Lịch Việt, du khách còn được thưởng ngoạn những di sản thế giới của Việt Nam đó là Phố cổ Hội An – nơi bến cảng một thời sầm uất nhất Đông Dương, quần thể di tích Cố Đô Huế với hệ thống đền đài lăng tẩm nguy nga tráng lệ và Động Thiên Đường với nhiều hang động kỳ bí của tạo hóa.
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 2,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            ['ten_tour' => 'Du lịch Đà Nẵng - Bà Nà - Hội An - Núi Thần Tài - Xem Show Ký Ức Hội An
            ',
            'gia_tour' => 4500000,
            'so_ngay' => 3,
            'so_dem' => 2,
            'so_cho' => 20,
            'noi_dung' =>'Du lịch Đà Nẵng hành trình khám phá thành phố biển sầm uất nhất dải đất Miền Trung nắng gió. Tham quan Ngũ Hành Sơn phong cảnh hữu tình với hệ thống các hang động, chùa chiền linh thiêng cổ kính. Một ngày vi vu trên cao nguyên Bà Nà để khám phá những tòa lâu đài mang đường lối kiến trúc Châu  u. Xuôi về Quảng Nam, du khách sẽ phải ngỡ ngàng trước một Hội An yên bình nằm tọa lạc bên sông Thu Bồn. Phố Cổ Hội An hấp dẫn du khách bởi những dãy nhà màu vàng, mái ngói nằm san sát nhau, những cửa hàng truyền thống và ẩm thực phong phú. Đặc biệt trong tour du lịch Đà Nẵng này, du khách còn được trực tiếp xem show diễn Ký Ức Hội An. Đây là show diễn duy nhất của Việt Nam được công chiếu tại Quảng Trường Thời Đại - New York. Và được báo chí quốc tế ghi nhận là show diễn thực cảnh đẹp nhất thế giới.
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 2,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            ['ten_tour' => 'Du lịch Miền Trung - Đà Nẵng - Bà Nà - Hội An - Huế - Động Phong Nha
            ',
            'gia_tour' => 4500000,
            'so_ngay' => 4,
            'so_dem' => 3,
            'so_cho' => 20,
            'noi_dung' =>'Khám phá trọn vẹn vẻ đẹp tạo hóa ban tặng cho dải đất miền Trung với hành trình du lịch Đà Nẵng – Bà Nà – Hội An – Huế - Thánh Địa La Vang – Động Phong Nha 4 ngày 3 đêm. Đặc biệt, với hành trình này du khách còn được hưởng những ưu đã hấp dẫn cùng Du Lịch Việt, chắc chắn sẽ mang đến cho du khách một chuyến đi trọn vẹn nhất!
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 2,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            //Tour miền Nam
            ['ten_tour' => 'Du lịch Phú Quốc - Vinwonders - Safari - Trải Nghiệm Cáp Treo Hòn Thơm
            ',
            'gia_tour' => 4500000,
            'so_ngay' => 3,
            'so_dem' => 2,
            'so_cho' => 20,
            'noi_dung' =>'Tận hưởng một chuyến du lịch nghỉ dưỡng đúng nghĩa với các tiết mục giải trí thú vị như: Biểu diễn âm nhạc sôi động với DJ, Saxophone, ban nhạc sống tại Sunset Beach Bar từ 17-19:00 hằng ngày. Bên cạnh đó, 18:00 thứ tư hằng tuần còn có thêm hoạt động thắp lửa trại, tạo không khí ấm cúng và kết nối giữa các khách hàng đang lưu trú

            Đối với gia đình có trẻ nhỏ hoặc người lớn tuổi, không nên bỏ qua Chợ đêm hải sản (diễn ra mỗi thứ hai và thứ năm, từ 18:30 - 22:00) tọa lạc giữa con đường đến Nhà hàng bên hồ và khu vực spa. Không cần phải di chuyển ra ngoài, thực khách vẫn có thể thưởng thức các món ăn tươi ngon với mức giá vô cùng hợp lý. Hãy đến và cảm nhận thực tế để có những trải nghiệm tuyệt vời của riêng bạn.
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 2,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            ['ten_tour' => 'Du lịch Miền Tây - Tour Mỹ Tho - Cần Thơ
            ',
            'gia_tour' => 4500000,
            'so_ngay' => 3,
            'so_dem' => 2,
            'so_cho' => 20,
            'noi_dung' =>'Du Lịch Miền Tây - Xuôi theo dòng nước du khách đến với chợ nổi Cái Răng để chứng kiến điều kì lạ, chợ mà nổi được trên sông? Du khách đi chợ nổi Cái Răng trên sông Cần Thơ không chỉ để ngắm nhìn những ghe thuyền đầy ắp hoa quả, hàng hóa mà còn để thưởng thức hương vị tô hủ tiếu hay tô bún cua thơm ngon giữa dòng nước mênh mông. Bên cạnh tham quan các Chợ nổi, du khách còn được viếng thăm Thiền Viện Trúc Lâm Phương Nam, Thiền Viện được xem là một trong những công trình nghệ thuật độc đáo của đất Tây Đô - ngôi chùa rộng nhất khu vực Đồng bằng sông Cửu Long, được xây dựng trên diện tích gần 4 ha, với kết cấu lợp ngói, khung cột gỗ lim, chánh điện rộng cùng nhà tổ, nhiều tượng Phật được làm bằng gỗ Du Sam. 
            Trong không khí mát mẻ đầu xuân, du khách tham gia Tour lễ chùa đầu năm đến với những điểm du lịch tâm linh nổi tiếng như Thiền Viện Trúc Lâm, vừa có thể chiêm bái cảnh chùa uy nghiêm tuyệt đẹp, vừa thỉnh cầu cho gia đình sức khỏe, may mắn, một năm mới bình an.
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 2,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            ['ten_tour' => 'Du lịch Miền Tây - Du lịch Hà Tiên - Phú Quốc - Bãi Sao',
            'gia_tour' => 4500000,
            'so_ngay' => 4,
            'so_dem' => 3,
            'so_cho' => 20,
            'noi_dung' =>'Hành trình du lịch Hà Tiên – Phú Quốc 4 ngày 3 đêm đưa du khách đến những vùng biển tuyệt đẹp của Việt Nam. Đến Hà Tiên điểm du lịch với nhiều thắng cảnh thiên nhiên sông nước hữu tình nơi được gắn với mỹ danh nổi tiếng.  Đến Đảo Ngọc, khám phá hòn đảo tận cùng tổ quốc với chương trình câu cá và ngắm san hô vô cùng hấp dẫn.',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 2,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            //Tour Ngoài nước
            //CHâU Á 
            ['ten_tour' => 'Du lịch Brunei - Nhật Bản mùa hè
            ',
            'gia_tour' => 4500000,
            'so_ngay' => 6,
            'so_dem' => 5,
            'so_cho' => 20,
            'noi_dung' =>'Du lịch Brunei - Nhật Bản mùa hè 6 ngày 5 đêm từ Sài Gòn.Tour du lịch liên tuyến đang dần mang lại sự thú vị cho du khách. Bởi chỉ với một hành trình mà du khách có thể khám phá được các quốc gia khác nhau với những nền văn hóa khác nhau. Và những điểm đến trong suốt chuyến đi cũng theo đó mà đa dạng và đầy hấp dẫn.
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 1,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            ['ten_tour' => 'Du lịch Nhật Bản mùa hoa Anh Đào',
            'gia_tour' => 4500000,
            'so_ngay' => 4,
            'so_dem' => 3,
            'so_cho' => 20,
            'noi_dung' =>'Du lịch Nhật Bản - Du lịch Nhật Bản mùa hoa Anh Đào luôn là tâm điểm vào dịp cuối tháng 3, đầu tháng 4. Thời khắc sang xuân, tiết trời ấm áp, khắp nơi trên nước Nhật picnic, hội họp gia đình, bạn bè, đồng nghiệp ngắm hoa Anh Đào, thưởng rượu sake. Trời đất hòa hợp, người vui phơi phới, cảnh đẹp tuyệt vời, khó có thể nói hết lời. 
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 1,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            ['ten_tour' => 'Du lịch Hè Trương Gia Giới - Phượng Hoàng Cổ Trấn
            ',
            'gia_tour' => 4500000,
            'so_ngay' => 5,
            'so_dem' => 4,
            'so_cho' => 20,
            'noi_dung' =>'Đi du lịch Trương Gia Giới - Phượng Hoàng Cổ Trấn mùa hè cuối tháng 5 có lẽ là thời điểm thích hợp nhất bởi thời tiết lúc này khá trong lành, thoáng đãng, khô ráo và dễ chịu!
            Hãy đi tour du lịch Trương Gia Giới - Phượng Hoàng mùa hè 2020 với người thương yêu, để sống trong không khí lãng mạn tới từng nhịp thở.
            Hãy du lịch hè Trương Gia Giới - Phượng Hoàng Cổ Trấn 2020 với gia đình, để cùng nhau lắng nghe nhịp thời gian chầm chậm chảy trôi.
            Hãy đi du lich he Truong Gia Gioi - Phuong Hoang Co Tran mua he với lũ bạn thân, để lắng lại trong tim những khoảnh khắc thanh xuân chúng ta cùng nhau trưởng thành.
            Hãy đi du lịch Trương Gia Giới - Phượng Hoàng Cổ Trấn mùa hè một mình, để lặng nhìn những bản ngã của bạn thân, để nghe chính bản thân mình đang cất tiếng.
            Hãy đặt tour nhanh nhất có thể để nhận được ưu đãi trong chuyến đi này từ công ty của chúng tôi nhé!
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 1,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],
            
            ['ten_tour' => 'Du lịch Campuchia mùa Thu Siêm Riệp - Phnompenh
            ',
            'gia_tour' => 4500000,
            'so_ngay' => 4,
            'so_dem' => 3,
            'so_cho' => 20,
            'noi_dung' =>'Cùng Du Lịch Việt khám phá bảo tàng Quốc gia Angkor trưng bày các mẫu vật thể hiện lịch sử Angkor mà ấn tượng nhất là căn phòng 1000 Phật. Hay Chùa Wat Bo - một sự pha lẫn kiến trúc Pháp và các chi tiết Phật giáo ảnh hưởng của Thái; Chùa Wat Preah Prom Rath: ngôi chùa có niên đại 500 tuổi với tượng Phật nằm; Trang trại tơ lụa Angkor: không cách xa trung tâm thành phố nhưng lại nằm trong khu vực miền quê khá thoáng đãng, tại đây bạn có thể chứng kiến quy trình làm tơ lụa của người Campuchia.
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 1,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            //Tour Châu Âu
            ['ten_tour' => 'Du lịch Châu  u - Pháp - Monaco - Tây Ban Nha - Bồ Đào Nha',
            'gia_tour' => 78990000,
            'so_ngay' => 9,
            'so_dem' => 8,
            'so_cho' => 20,
            'noi_dung' =>'Du lịch Châu  u Mùa Xuân & mùa hè luôn được coi là mùa đẹp nhất trong năm. Sức hấp dẫn đặc biệt của hai mùa này không chỉ bởi khung cảnh thiên nhiên lãng mạn, bởi sắc thu bao phủ mọi cảnh vật mà còn bởi tiết trời thu luôn là một trợ thủ đắc lực, giúp du khách có một sức khỏe và tinh thần sảng khoái khi đi du lịch dài ngày. Trải nghiệm Châu  u 10 ngày qua cung đường du lịch độc đáo, trung tâm những thành phố tuyệt đẹp bậc nhất Châu  u của Pháp – Monaco – Tây  Ban Nha – Bồ Đào Nha. 
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 1,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            ['ten_tour' => 'Du lịch Châu  u - Đức - Hà Lan - Bỉ - Pháp - Luxembourg',
            'gia_tour' => 46990000,
            'so_ngay' => 8,
            'so_dem' => 7,
            'so_cho' => 20,
            'noi_dung' =>'Du lịch Châu  u mùa Hè  trải nghiệm kỳ nghỉ lý tưởng ở những thành phố du lịch nổi tiếng thế giới. Mùa Hè ở Châu  u thời tiết ấm áp, khung cảnh tươi đẹp cùng các hoạt động sôi nổi ngoài trời. Những thị trấn nhỏ nên thơ, những con đường đầy nắng và những dòng sông êm đềm lộng gió. Tất cả hứa hẹn sẽ mang đến cho bạn một  tour du lịch Châu  u mùa Hè đáng nhớ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 1,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            ['ten_tour' => 'Du lịch Châu  u - Pháp - Thụy Sĩ - Ý',
            'gia_tour' => 40990000,
            'so_ngay' => 8,
            'so_dem' => 7,
            'so_cho' => 20,
            'noi_dung' =>'Mùa xuân là mùa giao hòa của đất trời, thời tiết ấm áp, mây trời lồng lộng. Tất cả là sự khởi đầu cho một năm mới nhiều may mắn và tài lộc. Những chuyến du lịch Châu  u mùa xuân cũng bắt đầu khởi động. Hành trình đến với những quốc gia đáng sống nhất thế giới Pháp - Thụy Sĩ - Ý. Khám phá những nền văn hóa độc đáo sẽ là trải nghiệm tuyệt vời trong mùa xuân này dành cho bạn
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 1,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            ['ten_tour' => 'Du lịch Châu  u - Pháp - Luxembourg - Bỉ - Hà Lan - Đức',
            'gia_tour' => 39990000,
            'so_ngay' => 8,
            'so_dem' => 7,
            'so_cho' => 20,
            'noi_dung' =>'Du lịch Châu  u mùa Hè tận hưởng kỳ nghỉ hè sôi động tại thiên đường du lịch Châu  u. Nơi ngự trị của những thành phố lâu đời nhất phương Tây. Chiêm ngưỡng kiến trúc của những tòa lâu đài cổ kính, những công trình trường tồn với thời gian.Tour du lịch Châu  u mùa Hè đến Pháp - Luxembourg – Bỉ - Hà Lan – Đức sẽ là chuyến đi thú vị',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 1,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            //tour châu mỹ
            ['ten_tour' => 'Du lịch Mỹ mùa Xuân - Los Angeles - Las Vegas - San Diego',
            'gia_tour' => 39990000,
            'so_ngay' => 7,
            'so_dem' => 6,
            'so_cho' => 20,
            'noi_dung' =>'Du lịch Mỹ mùa Xuân hành trình đến với Bờ Tây Hoa Kỳ, nơi tọa lạc của những thành phố giải trí phồn hoa bậc nhất thế giới. Thăm kinh đô điện ảnh Hollywood ở Los Angeles, nơi đi đầu trong lĩnh vực sản xuất phim ảnh và biên tập kỹ xảo ấn tượng. Đặt chân đến Đại Lộ Danh Vọng nơi vinh danh những tên tuổi nổi tiếng trong hàng thập kỷ qua. Trong tour du lịch Mỹ mùa Xuân này, du khách sẽ có những ngày vui chơi quên lối về ở thành phố không ngủ về đêm Las Vegas. Nơi hội tụ của những sòng bạc đắt đỏ, những khu phức hợp giải trí đẳng cấp thế giới. Mùa Xuân là mùa đẹp nhất trong năm, Du Lịch Việt sẽ đưa bạn đến với thành phố San Diego, ngắm trọn vẻ đẹp của thành phố biển xinh đẹp nhất nước Mỹ. Đi tour Mỹ mùa xuân 2020 khám phá Los Angeles, Las Vegas và San Diego sẽ là lựa chọn tuyệt vời dành cho du khách.
            ',
            'hinh_anh' => 'img_hcm.jpg',
            'ma_loai_tour' => 1,
            'chon_goi' => 0,
            'khuyen_mai' => 0, 
            'so_cho_da_dat' => 10],

            



        ]);
    }
}
