@extends('Admin.Layout')
@section('content')
     <!-- Main Container -->
     <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Table Sections (.js-table-sections class is initialized in Helpers.tableToolsSections()) -->
            <h2 class="content-heading">Danh sách Hội Viên</h2>
            <div class="block">
                <div class="block-content">
                    <!--
                    Separate your table content with multiple tbody sections. Add one row and add the class .js-table-sections-header to a
                    tbody section to make it clickable. It will then toggle the next tbody section which can have multiple rows. Eg:

                    <tbody class="js-table-sections-header">One row</tbody>
                    <tbody>Multiple rows</tbody>
                    <tbody class="js-table-sections-header">One row</tbody>
                    <tbody>Multiple rows</tbody>
                    <tbody class="js-table-sections-header">One row</tbody>
                    <tbody>Multiple rows</tbody>

                    You can also add the class .show in your tbody.js-table-sections-header to make the next tbody section visible by default
                    -->
                    <table class="js-table-sections table table-hover">
                        <thead>
                            <tr>
                                <th style="width: 30px;"></th>
                                <th>Khách Hàng</th>
                                <th style="width: 30px;">Gmail</th>
                                <th style="width: 30px;">Số chổ</th>
                                <th style="width: 30px;"></th>
                                <th style="width: 15%;">Trạng Thái</th>
                                <th class="d-none d-sm-table-cell" style="width: 20%;">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody class="js-table-sections-header show table-active">
                            <tr>
                                <td class="text-center">
                                    <i class="fa fa-angle-right"></i>
                                </td>
                                <td class="font-w600">Lê Đức Anh</td>
                                <td>ducanh@gmail.com</td>
                                <td>10</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-danger">Chưa duyệt</span>
                                </td>

                                <td class="d-none d-sm-table-cell">
                                    <a href="#" class="edit_tour btn btn-primary min-width-90">
                                        <i class="fa fa-send"></i> Duyệt
                                    </a>
                                    <a href="#" title="" type="submit" class="delete-confirm btn btn-danger  min-width-10 ">
                                        <i class="fa fa-trash"></i> Xoá
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
            
                                <td class="text-center"></td>
                                <td class="text-center">Giới tính:</td>
                                <td class="font-w600 text-success"> x</td>
                                <td class="font-size-sm text-bold">Tuổi:</td>
                                <td class="d-none d-sm-table-cell text-success">x</td>
                                <td class="font-size-sm text-bold">CMND:</td>
                                <td class="d-none d-sm-table-cell text-success">x</td>
                                
                                
                            </td>
                                
                            </td>
                            </tr>
                            <tr>
                                
                                <td class="text-center"></td>
                                <td class="text-center">Địa chỉ:</td>
                                <td class="font-w600 text-success"> x</td>
                                <td class="font-size-sm text-bold">Tên Tour:</td>
                                <td class="d-none d-sm-table-cell text-success">xxxxxxxxxxxxxxxxxxxxx</td>
                                <td class="font-size-sm text-bold">Giá tour:</td>
                                <td class="d-none d-sm-table-cell text-success">x</td>
                            </tr>
                            <tr>
                                
                                <td class="text-center"></td>
                                <td class="text-center">Ngày đặt:</td>
                                <td class="font-w600 text-success"> x</td>
                                <td class="font-size-sm text-bold">Trạng thái thanh toán:</td>
                                <td class="d-none d-sm-table-cell text-success">x</td>
                                <td class="font-size-sm text-bold">Tuổi</td>
                                <td class="d-none d-sm-table-cell text-success">x</td>
                            </tr>
                        </tbody>
                       
                    </table>
                </div>
            </div>
            <!-- END Table Sections -->

           
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       <script>

              $(document).on('click','.delect', function(event) {
                    event.preventDefault();
                    var me = $(this);
                    var title = me.attr('title');
                    var url1 = me.attr('href');
                    swal({
                        title: "Bạn có chắc chắn muốn xoá không",
                        text: "sẽ bị xoá vĩnh viễn",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }).then((result) => {
                        if (result) {
                            $.ajax({
                                url : url1,
                                type: 'GET',
                                data: {

                                    '_token' : $('input[name=_token]').val(),
                                },
                                success: function(response){
                                    swal({
                                        title: "Xoá thành công",
                                        text: "",
                                        icon: "success",
                                    });
                                    location.reload();
                                },
                                error: function(xhr){
                                    swal({
                                        title: "Xoá Thất Bại",
                                        text: "",
                                        icon: "error",
                                    });
                                }
                            });
                        }
                        else {
                            swal("Xoá Không Thành Công");
                        }
                    });
                });
       </script>
@endsection
@section('js')
<script src="{{ asset('Admin/js/codebase.core.min.js')}}"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{ asset('Admin/js/codebase.app.min.js')}}"></script>
    <script>jQuery(function(){ Codebase.helpers('table-tools'); });</script>
@endsection
