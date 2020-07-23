
{{-- Model form Thêm địa điẻm --}}
<div id="create_khuvuc" class="modal fade" tabindex="-1" role="dialog">
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
                   <form class="js-validation-material" enctype="multipart/form-data" id="Creatr_KhuVuc" name="Creatr_KhuVuc" method="POST" action="">
                       {{ csrf_field() }}
                       <div class="form-group row "></div>
                           <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}">
                           <input type="hidden" id="ID" name="ID" value="">
                           <div class="form-group row">
                               <div class="col-md-12">
                                   <label for="">Tên khu vực<span class="text-danger">(*)</span></label>
                                   <input type="text" class="form-control" id="Up_khu_vuc" name="Up_khu_vuc" placeholder="Tên khu vực" required>
                                   <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                               </div>
                           </div>
                           <div class="form-group row">
                                   <div class="col-md-12">
                                   <label for="">Ghi chú</span></label>
                                   <input type="text" class="form-control" id="Up_ghi_chu" name="Up_ghi_chu" placeholder="Ghi chú" required>
                                   <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                                   </div>
                            </div>
                   </form>
               </div>
               <div class="modal-footer">
                   <button class=" btn btn-warning" type="submit" value="them_khu_vuc" id="them_khu_vuc">
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
<div id="Update_KhuVuc" class="modal fade" tabindex="-1" role="dialog">
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
                   <form class="js-validation-material" enctype="multipart/form-data" id="Update_KhuVuc" name="Update_KhuVuc" method="POST" action="">
                    {{ csrf_field() }}
                    <div class="form-group row "></div>
                        <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}">
                        <input type="hidden" id="ID" name="ID" value="">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="">Tên khu vực<span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" id="Up_khu_vuc_edit" name="Up_khu_vuc_edit" placeholder="Tên khu vực" required>
                                <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                            </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-md-12">
                                <label for="">Ghi chú</span></label>
                                <input type="text" class="form-control" id="Up_ghi_chu_edit" name="Up_ghi_chu_edit" placeholder="Ghi chú" required>
                                <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                                </div>
                         </div>
                </form>
               </div>
               <div class="modal-footer">
                   <button class=" btn btn-warning" type="submit" value="Update_khu_vuc" id="Update_khu_vuc">
                       <span class="glyphicon glyphicon-plus"></span>Cập nhật
                   </button>
                   <button class="btn btn-warning" type="button" data-dismiss="modal">
                   <span class="glyphicon glyphicon-remobe"></span>Thoát
                   </button>
               </div>
           </div>
       </div>
   </div>
   