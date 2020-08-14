<?php

namespace App\Http\Controllers;

use App\ChiTietDatTour;
use Omnipay\Omnipay;
use App\ChuongTrinhTour;
use App\DanhSachHanhKhach;
use App\DatTour;
use App\Http\Requests\DatTourRequest;
use App\KhachHang;
use App\Notifications\TestNotification;
use App\ThanhNhan;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Notifications\InvoicePaid;
use App\TaiKhoan;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class DatTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListTour()
    {
        $stt = 0;
        $danh_sach_dat = DB::select('SELECT * FROM dattour, khachhang , chitietdattour, chuongtrinhtour WHERE dattour.ma_dat_tour = chitietdattour.ma_dat_tour and chitietdattour.ma_khach_hang = khachhang.ma_khach_hang and chuongtrinhtour.ma_tour = dattour.ma_tour');
        
        return view('Admin.ListDatTour' , compact('danh_sach_dat','stt'));
    }
    public function index($id)
    {
        //
        $chuongtrinhtour = ChuongTrinhTour::find($id);
        return view('Home.Dattour',compact('chuongtrinhtour'));
    }
    public function ListKhach($id)
    {
        $danh_hang_khach = DB::select('SELECT * FROM dattour, chitietdattour, khachhang,thannhan,danh_sach_hanh_khach WHERE dattour.ma_dat_tour = chitietdattour.ma_dat_tour and chitietdattour.ma_khach_hang = khachhang.ma_khach_hang and khachhang.ma_khach_hang = thannhan.ma_khach_hang and thannhan.ma_khach_hang = danh_sach_hanh_khach.ma_hanh_khach AND khachhang.ma_khach_hang = ?', [$id]);
       // dd($danh_hang_khach);
        return view(('Admin.list_hang_khach'),compact('danh_hang_khach'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function hoadon($id)
    {
        //
        //$hoadon = DatTour::find($id);
        $hoadon = DB::select('SELECT * FROM dattour, khachhang , chitietdattour, chuongtrinhtour WHERE dattour.ma_dat_tour = chitietdattour.ma_dat_tour and chitietdattour.ma_khach_hang = khachhang.ma_khach_hang and chuongtrinhtour.ma_tour = dattour.ma_tour and dattour.ma_dat_tour = ?', [$id]);
        //dd($hoadon);
        return view('Admin.Hoa_don', compact('hoadon'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // Thêm Đặt Tour
        // $dattour = new DatTour();
        // $dattour->ma_tour = $request->ma_chuong_trinh;
        // $dattour->ngay_dat = Carbon::now();
        // $dattour->so_cho_nguoi_lon = $request->nguoi_lon ;
        // $dattour->so_cho_tre_em = $request->tre_em ;
        // $dattour->so_cho_tre_con = $request->tre_con ;
        // $dattour->so_cho_so_sinh = $request->so_sinh;
        // $dattour->thanh_tien = $request->thanh_tien;
        // $dattour->trang_thai_thanh_toan = 0;
        // $dattour->Phuong_thuc_thanh_toan = $request->thanh_toan;
        // $dattour->save();
        // // Thêm Khách Hàng
        // $khachhanh = new KhachHang();
        // $khachhanh->ten_kh = $request->firstName;
        // $khachhanh->gioi_tinh = $request->gioi_tinh_khach_hang;
        // $khachhanh->ngay_sinh = $request->ngay_sinh_khach_hanh;
        // $khachhanh->dia_chi = $request->diachi;
        // $khachhanh->gamil = $request->email;
        // $khachhanh->dien_thoai = $request->phone;
        // $khachhanh->cmnd = $request->cmnd;
        // $khachhanh->tuoi = 25;
        // $khachhanh->so_luong_than_nhan = $request->so_luong_than_nhan;
        // $khachhanh->save();

        // // Thêm Chi tiết 
        // $chitietdat = new ChiTietDatTour();
        // $chitietdat->ma_dat_tour = $dattour->ma_dat_tour;
        // $chitietdat->ma_khach_hang = $khachhanh->ma_khach_hang;
        // $chitietdat->save();

        // // Hành Khách
        // for($i = 0 ; $i < count($request->hanh_khach); $i++)
        // {
        //     $hanhkhach = new ThanhNhan();
        //     $hanhkhach->ten_than_nha = $request->hanh_khach[$i];
        //     $hanhkhach->gioi_tinh = $request->gioi_tinh[$i];
        //     $hanhkhach->ngay_sinh = $request->ngay_sinh[$i];
        //     $hanhkhach->ma_khach_hang = $khachhanh->ma_khach_hang;
        //     $hanhkhach->tuoi = 20;
        //     $hanhkhach->save();
        //     $ds_hanhkhach = new DanhSachHanhKhach();
        //     $ds_hanhkhach->ma_hanh_khach =  $hanhkhach->ma_than_nhan;
        //     $ds_hanhkhach->ma_tour = $request->ma_chuong_trinh;
        //     $ds_hanhkhach->save();
        // }
        // Danh sách hành khách
        // Mail::send('Admin/Mail.Form_Mail', $data, function ($message) {
        //     $message->from('meomeo171717@gmail.com', 'Hoá đơn đặt Tour');
        //     $message->subject('Đặt Tour Du Lịch');
        //     $message->to('huydung0505@gmail.com', 'CHó');
        // });

        // 
        $accessKey = "iXDTgMQgX9uVsooH";
        $partnerCode = "MOMOFZSK20200804";
        $requestType = "captureMoMoWallet";
        $notifyUrl = "https://test-payment.momo.vn/gw_payment/payment/qr";
        $secretkey = "iXvmrY8NjLPWW2Xyhd8uOQWK3AATaLtZ";
        $returnUrl = "http://localhost:8000/return-momo";
        $orderId = 'MM1540456472575';
        $amount = 50000000;
        $orderInfo = 'SDK team.';
        $requestId = 'MM1540456472575';
        $extraData = "email=abc@gmail.com";
        $hashdata = "partnerCode=". $partnerCode . "&accessKey=". $accessKey ."&requestId=" . $requestId . "&amount=". $amount ."&orderId=" . $orderId . "&orderInfo=" . $orderInfo ."&returnUrl=" . $returnUrl . "&extraData=". $extraData ;
        //dd($hashdata);  

        $signature = hash_hmac('sha256', $hashdata, $secretkey );
        $inputDataMoMo = [
            "partnerCode" => $partnerCode,
            "accessKey" => $accessKey ,
            "requestId" => $requestId,
            "amount" => $amount,
            "orderId" => $orderId,
            "signature" => $signature,
            "orderInfo" => $orderInfo,
            "returnUrl"=> $returnUrl, 
            "notifyUrl"=> $notifyUrl,
            "extraData" => $extraData,
            "requestType" => $requestType,
            
        ];
        $data = "";
        foreach ($inputDataMoMo as $key => $value) {    
            $data .= $key."=".$value."&" ;
        }
        //dd($data);
        $notifyUrl = $notifyUrl . "?" . $data;
        return redirect($notifyUrl);
        
        // Thanh toán vnpay
        // if($request->thanh_toan == '1')
        // {
        //     session(['cost_id' => 1]);
        //     session(['url_prev' => url()->previous()]);
        //     session(['key' => $dattour->ma_dat_tour]);
        //     $vnp_TmnCode = "9MXKG8FY"; //Mã website tại VNPAY 
        //     $vnp_HashSecret = "FWNFSAZQLGPDTZECSOHGBEOWYUMIWPDW"; //Chuỗi bí mật
        //     $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        //     $vnp_Returnurl = "http://localhost:8000/return-vnpay";
        //     $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        //     $vnp_OrderInfo = "Thanh toán hóa đơn Tour Du Lịch";
        //     $vnp_OrderType = 'billpayment';
        //     $vnp_Amount = $dattour->thanh_tien *100;
        //     $vnp_Locale = 'vn';
        //     $vnp_IpAddr = request()->ip();

        //     $inputData = array(
        //         "vnp_Version" => "2.0.0",
        //         "vnp_TmnCode" => $vnp_TmnCode,
        //         "vnp_Amount" => $vnp_Amount,
        //         "vnp_Command" => "pay",
        //         "vnp_CreateDate" => date('YmdHis'),
        //         "vnp_CurrCode" => "VND",
        //         "vnp_IpAddr" => $vnp_IpAddr,
        //         "vnp_Locale" => $vnp_Locale,
        //         "vnp_OrderInfo" => $vnp_OrderInfo,
        //         "vnp_OrderType" => $vnp_OrderType,
        //         "vnp_ReturnUrl" => $vnp_Returnurl,
        //         "vnp_TxnRef" => $vnp_TxnRef,
        //     );

        //     if (isset($vnp_BankCode) && $vnp_BankCode != "") {
        //         $inputData['vnp_BankCode'] = $vnp_BankCode;
        //     }
        //     ksort($inputData);
        //     $query = "";
        //     $i = 0;
        //     $hashdata = "";
        //     foreach ($inputData as $key => $value) {
        //         if ($i == 1) {
        //             $hashdata .= '&' . $key . "=" . $value;
        //         } else {
        //             $hashdata .= $key . "=" . $value;
        //             $i = 1;
        //         }
        //         $query .= urlencode($key) . "=" . urlencode($value) . '&';
        //     }

        //     $vnp_Url = $vnp_Url . "?" . $query;
        //     if (isset($vnp_HashSecret)) {
        //     // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
        //         $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
        //         $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        //     }
        //     //$test = redirect($vnp_Url);     
        // }
        // return  redirect($vnp_Url)->with('id', $dattour->id);
    }
    public function return(Request $request)
    {
        $id = session('key');
        $url = session('url','/');
        
        //dd(session($request->_previous));
        if($request->vnp_ResponseCode == "00") {
            $dattour = DatTour::find($id);
            $dattour->trang_thai_thanh_toan = 1;
            $dattour->save();
            Mail::send('Admin/Mail.Form_Mail',['Tour Nè'] ,function ($message) {
                $message->from('meomeo171717@gmail.com', 'Hoá đơn thanh toán đặt Tour');
                $message->subject('Đặt Tour Du Lịch');
                $message->to('huydung0505@gmail.com', 'CHó');
            });
            return redirect()->route('Tous.hoadon')->with('success' ,'Đã thanh toán thành công!!');
        }
        session()->forget('url_prev');
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // Báo cáo
    // Lấy tháng
    public function getBaoCao()
    {
        $month_array = array();
        $Baocao = DatTour::orderBy('created_at', 'ASC' )->pluck('created_at');
        $Baocao = json_decode( $Baocao);
        if (! empty($Baocao)){
            foreach( $Baocao as $format){
                //dd($format);
                $date = new \DateTime($format);
                $month_no = $date->format('m');
                $month_name = $date->format('M');
                $month_array[ $month_no ] =$month_name;
                
            }
        }
        return $month_array;
    }
    // 
    public function getMonthlyPostCount($month)
    {
        $monthly   = DatTour::whereMonth('created_at', $month)->get()->count();
        return $monthly;
    } 
    public function getMonthlyPostData()
    {
        $monthly_post_count_array = array();
        $month_array = $this->getBaoCao();
        $month_name_array = array();
        if(! empty($month_array)){
            foreach($month_array as $month_no => $month_name )
            {
                $monthly_post_count = $this->getMonthlyPostCount($month_no);
                array_push($monthly_post_count_array,$monthly_post_count);
                array_push($month_name_array,$month_name);
            }
        }

        $monthly_post_data_array = array(
            'months' => $month_name_array,
            'post_count_data' => $monthly_post_count_array,
        );
        return $monthly_post_data_array;
    }
}
