<!-- {{-- Modal Form Sửa Loại Tour --}} -->
<div id="update_tour" class="modal fade" tabindex="-1" role="dialog">
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
                <form class="js-validation-material" enctype="multipart/form-data" id="Update_tour" name="Update_tour" method="POST" action="">
                    {{ csrf_field() }}
                    <div class="form-group row "></div>
                        <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}">
                        <input type="hidden" id="ID" name="ID" value="">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="">Tên Loại Tour <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" id="up_ten_tour" name="up_ten_tour" placeholder="Du lịch ...." required>
                                <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                            </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class=" btn btn-warning" type="submit" value="update_loai_tour" id="update_loai_tour">
                    <span class="glyphicon glyphicon-plus"></span>Cập nhật
                </button>
                <button class="btn btn-warning" type="button" data-dismiss="modal">
                <span class="glyphicon glyphicon-remobe"></span>Thoát
                </button>
            </div>
        </div>
    </div>
</div>

{{-- thêm Loại tour --}}
<div id="create_tour" class="modal fade" tabindex="-1" role="dialog">
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
                <form class="js-validation-material" enctype="multipart/form-data" id="Creatr_Product_Tour" name="Creatr_Product_Tour" method="POST" action="">
                    {{ csrf_field() }}
                    <div class="form-group row "></div>
                        <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}">
                        <input type="hidden" id="ID" name="ID" value="">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="">Tên Loại Tour <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" id="ten_tour" name="ten_tour" placeholder="Du lịch ...." required>
                                <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                            </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class=" btn btn-warning" type="submit" value="them_loai_tour" id="them_loai_tour">
                    <span class="glyphicon glyphicon-plus"></span>Thêm
                </button>
                <button class="btn btn-warning" type="button" data-dismiss="modal">
                <span class="glyphicon glyphicon-remobe"></span>Thoát
                </button>
            </div>
        </div>
    </div>
</div>
