
var formData = new FormData($('addForm')[0]);
// Model Form Quản trị viên
$(document).on('click','.create-modal', function() {
       $('.action').attr('id','add');
       $('#create').modal('show');
       $('.form-horizontal').show();
       $('.modal-title .si').text(' Thêm Tài Khoản');
});

//hiện hình avatar
$('input[name=avatar]').change(function(e) {
    //alert('hâhah');
    var fileName = e.target.files[0].name;
    var file = this.files[0];
    formData.append('image',file);
    $("#file").val(fileName);
    console.log(formData.files);
    var reader = new FileReader();

    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("holder").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});

// Kiểm tra checkbox
var checkbox =0;
$("#checkbox").change(function() {
       if(this.checked) {
              checkbox = this.value;
       }
       else
       {
              checkbox = 0;
       }
});

// Chắc năng thêm tài khoản
$(document).on('click','#add', function(e){
    formData.append('_token',$('input[name=_token]').val()),
    formData.append('ho_ten', $('input[name=ho_ten]').val())
    formData.append('ten_dang_nhap',$('input[name=ten_dang_nhap]').val()),
    formData.append('mat_khau', $('input[name=mat_khau]').val())
    formData.append('mat_khau_confirmation',$('input[name=mat_khau_confirmation]').val()),
    formData.append('sdt', $('input[name=sdt]').val())
    formData.append('gmail',$('input[name=gmail]').val()),
    formData.append('dia_chi', $('input[name=dia_chi]').val())
    formData.append('status', checkbox),
    $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: 'themTK',
            cache:false,
            contentType: false,
            processData: false,

            data:formData,
            success: function(data){
                    if(data.success)
                    {
                        $('#create').modal('hide')

                        swal({
                            title: "Thêm thành công",
                            text: "",
                            icon: "success",
                        });
                        location.reload();
                    }
            },
            error: function(data){
                    $('#validation-errors').html('');
                    $.each(data.responseJSON.errors, function(key,value) {
                         $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
               });
            }
    });
});
// chức năng Xoá
$(document).on('click','.delect', function(event) {

       event.preventDefault();
       var me = $(this);
       var title = me.attr('title');
       var url1 = me.attr('href');
       swal({
              title: "Bạn có muốn xoá Không",
              text: "Tên là: " + title +" ?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
       }).then((result) => {
              if (result) {
                     $.ajax({
                     url : url1,
                     type: 'POST',
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
// chức năng sửa
$(document).on('click','.edit', function(e){

    e.preventDefault();
    var me = $(this);
    var title = me.attr('title');
    var url1 = me.attr('href');

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : url1,
        type: 'POST',
        success: function(html){
            $('input[name=up_ID]').val(html.data.ma_quan_tri);
            $('input[name=up_ho_ten]').val(html.data.ten_quan_tri);
            $('input[name=up_ten_dang_nhap]').val(html.data.ten_dang_nhap);
            $('input[name=up_gmail]').val(html.data.gmail);
            $('input[name=up_mat_khau]').val(html.data.mat_khau);
            $('input[name=up_sdt]').val(html.data.dien_thoai);
            $('input[name=up_dia_chi]').val(html.data.dia_chi);
            $('input[name=up_checkbox]').val(html.data.trang_thai);
            $('input[name=up_checkbox]').prop("checked", html.data.trang_thai);
            $('#up_holder').attr("src",'/Admin/image/avatar/'+html.data.hinh_anh);
            $('.action').attr("id", "btn_edit");
            $('#update').modal('show');
            $('.form-horizontal').show();
            $('.modal-title .si').text('Cập nhật Tài khoản');
        },
        error: function(xhr){
               swal({
               title: "Xoá Thất Bại",
               text: "",
               icon: "error",
               });
            }
        })
});
