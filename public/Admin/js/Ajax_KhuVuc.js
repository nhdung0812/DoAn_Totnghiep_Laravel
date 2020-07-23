// Gọi Form và xử lý thêm địa điểm
$(document).on('click','.create-modal_KhuVuc', function() {
       $('.action').attr('id','add');
       $('#create_khuvuc').modal('show');
       $('.form-horizontal').show();
       $('.modal-title .si').text(' Thêm Khu Vực');
});
$('#them_khu_vuc').click(function(){
       var formData = new FormData($('Creatr_KhuVuc')[0]);
       formData.append('ten_khu_vuc', $('input[name=Up_khu_vuc]').val())
       formData.append('ghi_chu', $('input[name=Up_ghi_chu]').val())
       $.ajax({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           type: 'POST',
           url: "themkhuvuc",
           cache:false,
           contentType: false,
           processData: false,
           data:formData,
           success: function(data){
               if(data.success)
               {
                   $('#create_khuvuc').modal('hide')
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

// Lấy dữ liệu khu vực
    $(document).on('click','.edit_khuvuc', function(e){
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
           $('input[name=ID]').val(html.data.ma_mien);
           $('input[name=Up_khu_vuc_edit]').val(html.data.ten_mien);
           $('input[name=Up_ghi_chu_edit]').val(html.data.ghi_chu);
           $('.action').attr("id", "btn_edit");
           $('#Update_KhuVuc').modal('show');
           $('.form-horizontal').show();
           $('.modal-title .si').text('Cập nhật Khu Vực');
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
// Xử lý Update khu vực
   $(document).on('click','#Update_khu_vuc', function(e){
       var formData = new FormData($('Update_KhuVuc')[0]);
       formData.append('ID',$('input[name=ID]').val()),
       formData.append('ten_khu_vuc', $('input[name=Up_khu_vuc_edit]').val())
       formData.append('ghi_chu', $('input[name=Up_ghi_chu_edit]').val())
       $.ajax({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               type: 'POST',
               url: 'suakhuvuc',
               cache:false,
               contentType: false,
               processData: false,
   
               data:formData,
               success: function(data){
                       if(data.success)
                       {
                       $('#Update_diadiem').modal('hide')
   
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
// Xoá địa điểm
$('.delect-diadiem').on('click', function (event) {
       event.preventDefault();
       const url = $(this).attr('href');
       swal({
           title: 'Bạn có muốn xoá Tour ?',
           text: '',
           icon: 'warning',
           buttons: ["Thoát", "Xoá"],
       }).then(function(value) {
           if (value) {
               window.location.href = url;
           }
       });
   });

// Xoá vĩnh viễn
// Xoá địa điểm
$('.delect-vinhvien').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Bạn có muốn xoá khu vực vĩnh viễn ?',
        text: '',
        icon: 'warning',
        buttons: ["Thoát", "Xoá"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});