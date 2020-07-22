@extends('Home.Layout')
@section('content')
        <!-- ========== MAIN CONTENT ========== -->
        <main id="content">
            <div class="container">
                <div class="col-sm6">
                <div class="block">
                    <div class="block-header block-header-default mt-2">
                        <h3 class="block-title">Đăng kí hội viên</h3>
                        <div class="block-options">
                        </div>
                    </div>
                    <hr>
                    <div class="block-content">
                        <form class="js-validation-material" method="POST" action="{{ route('Tous.xu_ly') }}">
                            @csrf
                            <div class="form-group row "></div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Họ tên</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="ho_va_ten" name="ho_va_ten" placeholder="Họ và tên">
                                    </div>
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Giới tính<span class="text-danger">(*)</span></label>
                                    <div class="col-sm-4">
                                        <select id="gioi_tinh" name="gioi_tinh" class="form-control">
                                            <option value="" selected="selected">Chọn giới tính</option>
                                            <option value="0">Nữ</option>
                                            <option value="0">Nam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    {{-- <label class="col-sm-2  col-form-label" for="example-hf-password">Ngày sinh <span class="text-danger">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input class="form-control" type="date" value="" id="example-date-input">
                                    </div> --}}
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Tuổi</label>
                                    <div class="col-lg-4">
                                        <input type="number" class="form-control"  id="tuoi" name="tuoi" placeholder="3">
                                    </div>
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Ngày sinh <span class="text-danger">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input class="form-control" type="date" value="" name="ngay_sinh" id="ngay_sinh">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Di động <span class="text-danger">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input class="form-control" placeholder="Số điện thoại" type="text" value="" name="di_dong" id="di_dong">
                                    </div>
                                    {{-- <label class="col-sm-2  col-form-label" for="example-hf-password">Tuổi</label>
                                    <div class="col-lg-4">
                                        <input type="number" class="form-control" id="example-hf-password" name="example-hf-password" placeholder="3">
                                    </div> --}}
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Gmail</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="gmail" name="gmail" placeholder="Nhập gmail">
                                    </div>
                                   
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">CMND</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="cmnd" name="cmnd" placeholder="Nhập Cmnd  ">
                                    </div>
                                    
                                    {{-- <label class="col-sm-2  col-form-label" for="example-hf-password">Ngày sinh <span class="text-danger">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input class="form-control" type="date" value="" id="example-date-input">
                                    </div> --}}
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Ngày cấp <span class="text-danger">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input class="form-control" type="date" value="" name="ngay_cap" id="ngay_cap">
                                    </div>
                                   
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Passport</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="passport" name="passport" placeholder="Nhập Passport">
                                    </div>
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Tỉnh/Tp<span class="text-danger">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input class="form-control" type="text" name="tinh" value="" id="tinh">
                                    </div>
                                    {{-- <label class="col-sm-2  col-form-label" for="example-hf-password">Gmail</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="example-hf-password" name="example-hf-password" placeholder="Nhập gmail">
                                    </div> --}}
                                </div>
                                <div class="form-group row">
                                    {{-- <label class="col-sm-2  col-form-label" for="example-hf-password">Ngày cấp <span class="text-danger">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input class="form-control" type="date" value="" id="example-date-input">
                                    </div>
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Ngày hết hạn <span class="text-danger">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input class="form-control" type="date" value="" id="example-date-input">
                                    </div> --}}
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Quốc gia<span class="text-danger">(*)</span></label>
                                    <div class="col-sm-4">
                                        <select id="country" name="quoc_gia" id="quoc_gia" class="form-control">
                                            <option value="" selected="selected">Vui lòng chọn quốc gia</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BA">Bosnia and Herzegowina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Cote d'Ivoire</option>
                                            <option value="HR">Croatia (Hrvatska)</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="TP">East Timor</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="FX">France, Metropolitan</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard and Mc Donald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran (Islamic Republic of)</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macau</option>
                                            <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint LUCIA</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia (Slovak Republic)</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SH">St. Helena</option>
                                            <option value="PM">St. Pierre and Miquelon</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands (British)</option>
                                            <option value="VI">Virgin Islands (U.S.)</option>
                                            <option value="WF">Wallis and Futuna Islands</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="YU">Yugoslavia</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                    {{-- <label class="col-sm-2  col-form-label" for="example-hf-password">Tỉnh/Tp<span class="text-danger">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input class="form-control" type="date" value="" id="example-date-input">
                                    </div> --}}
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Quận/Huyện:<span class="text-danger">(*)</span></label>
                                    <div class="col-sm-4">
                                        <select id="country" name="quan_huyen" id="quan_huyen" class="form-control">
                                            <option value="" selected="selected">Vui lòng chọn Quận/Huyện</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    {{-- <label class="col-sm-2  col-form-label" for="example-hf-password">Quận/Huyện:<span class="text-danger">(*)</span></label>
                                    <div class="col-sm-4">
                                        <select id="country" name="country" class="form-control">
                                            <option value="" selected="selected">Vui lòng chọn Quận/Huyện</option>
                                        </select>
                                    </div> --}}
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Địa chỉ<span class="text-danger">(*)</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="dia_chi" name="dia_chi" placeholder="Nhập địa chỉ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Mật khẩu</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="input-group" id="show_hide_password">
                                            <input autocomplete="new-password" type="password" name="Password" id="Password" class="form-control" data-val="true" data-val-required="Vui lòng nhập mật khẩu">
                                            <div class="input-group-addon">
                                                <a class="btn btn-gray"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></div>
                                    </div>
                                    <label class="col-sm-2  col-form-label" for="example-hf-password">Xác nhận mật khẩu: </label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="input-group" id="show_hide_password">
                                            <input autocomplete="new-password" type="password" name="re_password" id="re_password" class="form-control" data-val="true" data-val-required="Vui lòng nhập mật khẩu">
                                            <div class="input-group-addon">
                                                <a class="btn btn-gray"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></div>
                                    </div>
                                </div>
                                <div class="form-group " style="text-align: end;">
                                    <button  class=" btn btn-success" type="submit" value="add" id="add">
                                        <span class="glyphicon glyphicon-plus"></span>Đăng kí
                                    </button>
                                    <button class="action btn btn-warning" type="submit" value="add" id="add">
                                        <span class="glyphicon glyphicon-plus"></span>Quay lại trang chủ
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                        </form>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
        </main>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset ('Admin/js/action.js')}}"></script>
<script>
    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>
@endsection
