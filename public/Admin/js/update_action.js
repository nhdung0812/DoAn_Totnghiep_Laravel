
    var checkbox =0;
    $("#up_checkbox").change(function() {
        if(this.checked == true) {
                checkbox = 1;
                $("#up_checkbox").val(checkbox);
                console.log($("#up_checkbox").val());
        }
        else
        {
            checkbox = 0;
            $("#up_checkbox").val(checkbox);
            console.log($("#up_checkbox").val());
        };
    });
    var formData1 = new FormData($('updateForm')[0]);
    $('input[name=up_avatar]').change(function(e) {
        var fileName = e.target.files[0].name;
        var file = this.files[0];
        console.log(file);
        formData1.append('image',file);
        $("#file").val(fileName);
        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("up_holder").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });



    // Xử lý sửa quản trị viên
    $(document).on('click','#btn_edit', function(){
        var id = $('input[name=up_ID]').val();
        formData1.append('_token',$('input[name=_token]').val()),
        formData1.append('ID',$('input[name=up_ID]').val());
        formData1.append('ho_ten', $('input[name=up_ho_ten]').val())
        formData1.append('up_mat_khau', $('input[name=up_mat_khau]').val())
        formData1.append('ten_dang_nhap',$('input[name=up_ten_dang_nhap]').val()),
        formData1.append('sdt', $('input[name=up_sdt]').val())
        formData1.append('gmail',$('input[name=up_gmail]').val()),
        formData1.append('phanquyen', $('#phanquyen_edit :selected').val())
        formData1.append('dia_chi', $('input[name=up_dia_chi]').val())
        formData1.append('up_checkbox', checkbox),

        console.log(formData1);
        $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: "update",
                cache:false,
                contentType: false,
                processData: false,

                data:formData1,
                success: function(data){
                        if(data.success)
                        {
                            $('#create').modal('hide');
                            swal({
                                    title: "Cập nhật thành công",
                                    text: "",
                                    icon: "success",
                            });
                        setTimeout(function() {
                            location.reload();
                        }, 1000);

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
