@extends('Admin.Layout')
@section('content')
     <!-- Main Container -->
     <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Table Sections (.js-table-sections class is initialized in Helpers.tableToolsSections()) -->
            <h2 class="content-heading">Danh sách Khách Hàng</h2>
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
                                <th>Name</th>
                                <th style="width: 15%;">Access</th>
                                <th class="d-none d-sm-table-cell" style="width: 20%;">Date</th>
                            </tr>
                        </thead>
                        <tbody class="js-table-sections-header show table-active">
                            <tr>
                                <td class="text-center">
                                    <i class="fa fa-angle-right"></i>
                                </td>
                                <td class="font-w600">Jose Parker</td>
                                <td>
                                    <span class="badge badge-danger">Disabled</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <em class="text-muted">October 13, 2017 12:16</em>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $61,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 18, 2017 12:16</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $210,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 27, 2017 12:16</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $210,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 9, 2017 12:16</span>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="js-table-sections-header">
                            <tr>
                                <td class="text-center">
                                    <i class="fa fa-angle-right"></i>
                                </td>
                                <td class="font-w600">Andrea Gardner</td>
                                <td>
                                    <span class="badge badge-warning">Trial</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <em class="text-muted">October 15, 2017 12:16</em>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $244,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 1, 2017 12:16</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $170,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 8, 2017 12:16</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $120,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 16, 2017 12:16</span>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="js-table-sections-header">
                            <tr>
                                <td class="text-center">
                                    <i class="fa fa-angle-right"></i>
                                </td>
                                <td class="font-w600">Carol Ray</td>
                                <td>
                                    <span class="badge badge-success">VIP</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <em class="text-muted">October 22, 2017 12:16</em>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $175,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 20, 2017 12:16</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $192,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 20, 2017 12:16</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $222,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 6, 2017 12:16</span>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="js-table-sections-header">
                            <tr>
                                <td class="text-center">
                                    <i class="fa fa-angle-right"></i>
                                </td>
                                <td class="font-w600">Jose Parker</td>
                                <td>
                                    <span class="badge badge-info">Business</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <em class="text-muted">October 21, 2017 12:16</em>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $162,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 8, 2017 12:16</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $217,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 16, 2017 12:16</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $68,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 8, 2017 12:16</span>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="js-table-sections-header">
                            <tr>
                                <td class="text-center">
                                    <i class="fa fa-angle-right"></i>
                                </td>
                                <td class="font-w600">Amber Harvey</td>
                                <td>
                                    <span class="badge badge-warning">Trial</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <em class="text-muted">October 23, 2017 12:16</em>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $197,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 6, 2017 12:16</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $72,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 4, 2017 12:16</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600 text-success">+ $279,00</td>
                                <td class="font-size-sm">Stripe</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">October 14, 2017 12:16</span>
                                </td>
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
