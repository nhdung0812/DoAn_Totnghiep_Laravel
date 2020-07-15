// FORM THÊM LOẠI TOUR
// Hiện form modal loại tour
$(document).on('click','.create-modal_Tour', function() {
    $('.action').attr('id','add');
    $('#create_tour').modal('show');
    $('.form-horizontal').show();
    $('.modal-title .si').text(' Thêm loại Tour');
});
// Xử lý thêm loại Tour
$('#them_loai_tour').click(function(){
    var formData = new FormData($('Creatr_Product_Tour')[0]);
    formData.append('ten_loai_tour', $('input[name=ten_tour]').val())
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: "themloai",
        cache:false,
        contentType: false,
        processData: false,
        data:formData,
        success: function(data){
            if(data.success)
            {
                $('#create_tour').modal('hide')
                swal({
                        title: "Thêm thành công",
                        text: "",
                        icon: "success",
                });
                location.reload();
            }
        },
        error: function(data){
            // console.log(error)
            $('#validation-errors').html('');
            $.each(data.responseJSON.errors, function(key,value) {
                ('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
            });
        }
    });
});


// FORM SỬA LOẠI TOUR
 // Lấy dữ liệu lên form chức năng sửa
 $(document).on('click','.edit_tour', function(e){
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
        $('input[name=ID]').val(html.data.ma_loai_tour);
        $('input[name=up_ten_tour]').val(html.data.ten_loai_tour);
        $('.action').attr("id", "btn_edit");
        $('#update_tour').modal('show');
        $('.form-horizontal').show();
        $('.modal-title .si').text('Cập nhật Tài khoản');
    },
    error: function(xhr){
        swal({
            title: "Sửa không thành công",
            text: "",
            icon: "error",
        });
        }
    })
});
// Xử lý sửa loại tour
$(document).on('click','#update_loai_tour', function(e){
    var formData = new FormData($('Update_tour')[0]);
    formData.append('ID',$('input[name=ID]').val()),
    formData.append('_token',$('input[name=_token]').val()),
    formData.append('ten_loai_tour',$('input[name=up_ten_tour]').val());
    $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: 'sualoai',
            cache:false,
            contentType: false,
            processData: false,

            data:formData,
            success: function(data){
                    if(data.success)
                    {
                    $('#create').modal('hide')

                    swal({
                            title: "Cập nhật thành công",
                            text: "",
                            icon: "success",
                    });
                    location.reload();
                    }
            },
            error: function(data){
                    // console.log(error)
                    $('#validation-errors').html('');
                    $.each(data.responseJSON.errors, function(key,value) {
                        $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
                    });
            }
    });
});



// Xoá tour
$(document).on('click','.delect_tour', function(event) {
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
