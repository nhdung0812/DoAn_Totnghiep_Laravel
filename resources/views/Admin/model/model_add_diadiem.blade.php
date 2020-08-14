
{{-- Model form Thêm địa điẻm --}}
<div id="create_diadiem" class="modal fade" tabindex="-1" role="dialog">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title mt-2" id="name my-modal-title"><span class="si si-user-follow">Title</span></h5>
                       <button class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body" style="border-top:1px solid grey">
                   <div class="alert alert-danger print-error-msg" style="display:none">
                       <ul></ul>
                   </div>
                   <div id="validation-errors"></div>
                   <form class="js-validation-material" enctype="multipart/form-data" id="Creatr_DiaDiem" name="Creatr_DiaDiem" method="POST" action="">
                       {{ csrf_field() }}
                       <div class="form-group row "></div>
                           <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}">
                           <input type="hidden" id="ID" name="ID" value="">
                           <div class="form-group row">
                               <div class="col-md-12">
                                   <label for="">Tên Địa Điểm<span class="text-danger">(*)</span></label>
                                   <input type="text" class="form-control" id="ten_diadiem" name="ten_diadiem" placeholder="Tên địa điểm" required>
                                   <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                               </div>
                           </div>
                           <div class="form-group row">
                            <div class="col-md-12">
                                <label for="">Khu Vực<span class="text-danger">(*)</span></label>
                                <select class="form-control " id="khu_vuc" name="khu_vuc">
                                    <option value="" disabled selected>Chọn Khu Vực</option>
                                    @if(isset($khuvuc))
                                        @foreach ($khuvuc as $item)
                                            <option value="{{ $item->ma_mien }}">{{ $item->ten_mien }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                           <div class="form-group row">
                                   <div class="col-md-12">
                                   <label for="">Thông tin địa điểm</label>
                                   <input type="text" class="form-control" id="thongtin_dd" name="thongtin_dd" placeholder="Thông tin địa điểm" required>
                                   <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                                   </div>
                            </div>
                            
                   </form>
               </div>
               
               <div class="modal-footer">
                   <button class=" btn btn-warning" type="submit" value="them_dia_diem" id="them_dia_diem">
                       <span class="glyphicon glyphicon-plus"></span>Thêm
                   </button>
                   <button class="btn btn-warning" type="button" data-dismiss="modal">
                   <span class="glyphicon glyphicon-remobe"></span>Thoát
                   </button>
               </div>
           </div>
       </div>
   </div>
{{-- Model Form sửa địa điểm --}}
<div id="Update_diadiem" class="modal fade" tabindex="-1" role="dialog">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title mt-2" id="name my-modal-title"><span class="si si-user-follow">Title</span></h5>
                       <button class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body" style="border-top:1px solid grey">
                   <div class="alert alert-danger print-error-msg" style="display:none">
                       <ul></ul>
                   </div>
                   <div id="validation-errors"></div>
                   <form class="js-validation-material" action="" enctype="multipart/form-data" id="Update_DiaDiem" name="Update_DiaDiem" method="POST" action="">
                       {{ csrf_field() }}
                       <div class="form-group row "></div>
                           <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}">
                           <input type="hidden" id="ID" name="ID" value="">
                           <div class="form-group row">
                               <div class="col-md-12">
                                   <label for="">Tên Loại Tour <span class="text-danger">(*)</span></label>
                                   <input type="text" class="form-control" id="up_ten_diadiem" name="up_ten_diadiem" placeholder="Tên địa điểm" required>
                                   <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                               </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="">Khu Vực<span class="text-danger">(*)</span></label>
                                    <select class="form-control" id="khu_vuc" name="khu_vuc" value="">
                                        <option disabled selected>Chọn Khu Vực</option>
                                        {{-- @if(isset($khuvuc))
                                            @foreach ($khuvuc as $item)
                                                <option value="{{ $item->ma_mien }} ">{{ $item->ten_mien }}</option>
                                            @endforeach
                                        @endif --}}
                                        @foreach ($khuvuc as $item)
                                        <option value="{{ $item->ma_mien }}"
                                            {{ old('khu_vuc') == $item->ma_mien ? 'selected' : '' }}
                                            {{ $khuvuc[0]->ma_mien == $item->ma_mien ? 'selected' : '' }}>
                                            {{ $item->ten_mien }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           <div class="form-group row">
                            <div class="col-md-12">
                                <label for="">Thông tin địa điểm <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" id="up_thongtin_dd" name="up_thongtin_dd" placeholder="Thông tin địa điểm" required>
                                <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                            </div>
                        </div>
                   </form>
               </div>
               
               <div class="modal-footer">
                   <button class=" btn btn-warning" type="submit" value="Update_dia_diem" id="Update_dia_diem">
                       <span class="glyphicon glyphicon-plus"></span>Cập nhật
                   </button>
                   <button class="btn btn-warning" type="button" data-dismiss="modal">
                   <span class="glyphicon glyphicon-remobe"></span>Thoát
                   </button>
               </div>
           </div>
       </div>
   </div>
   









   {{--  <div class="block-content">
    <form class="js-validation-material" enctype="multipart/form-data" id="Creatr_DiaDiem" name="Creatr_DiaDiem" method="POST" action="{{ route('Quantri.them_dia_diem') }}">
        {{ csrf_field() }}
        <div class="form-group row "></div>
            <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" id="ID" name="ID" value="">
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="">Tên Địa Điểm<span class="text-danger">(*)</span></label>
                    <input type="text" class="form-control {{ $errors->has('ten_dia_diem') ? 'is-invalid' : '' }}" id="ten_dia_diem" name="ten_dia_diem" placeholder="Tên địa điểm" >
                    <div id="val-username-error" class="invalid-feedback animated fadeInDown">{{ $errors->first('ten_dia_diem') }}</div>
                </div>
                <div class="col-md-4">
                    <label for="">Khu Vực<span class="text-danger">(*)</span></label>
                    <select class="form-control {{ $errors->has('khu_vuc') ? 'is-invalid' : '' }}" id="khu_vuc" name="khu_vuc">
                        <option ></option>
                        @foreach ($khuvuc as $item)
                            <option value = "{{ $item->ma_mien }} {{ old('khu_vuc') == $item->ma_mien ? 'selected' : '' }}">{{ $item->ten_mien }}</option>
                        @endforeach
                    </select>
                    <div id="val-username-error" class="invalid-feedback animated fadeInDown">{{ $errors->first('khu_vuc') }}</div>
                </div>
                <div class="col-md-4">
                    <label for="">Thông tin địa điểm</label>
                    <input type="text" class="form-control" id="thongtin_dd" name="thongtin_dd" placeholder="Thông tin địa điểm" >
                    <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                    </div>
                </div
            </div
        </div>
        <div class="form-group row ">
            <div class="col-12 text-right">
                <button type="submit" class=" btn btn-primary mr-5 p-3 mb-5">
                    <i class="fa fa-save mr-5 "></i>Lưu
                </button>
            </div>
        </div>
    </form>
</div>  --}}