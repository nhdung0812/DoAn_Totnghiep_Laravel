// Gọi Form và xử lý thêm địa điểm
$(document).on('click','.create-modal_Diadiem', function() {
       $('.action').attr('id','add');
       $('#create_diadiem').modal('show');
       $('.form-horizontal').show();
       $('.modal-title .si').text(' Thêm địa điểm');
});
$('#them_dia_diem').click(function(){
       var formData = new FormData($('Creatr_DiaDiem')[0]);
       formData.append('ten_dia_diem', $('input[name=ten_diadiem]').val())
       formData.append('khu_vuc', $('select[name=khu_vuc]').val())
       formData.append('Thong_tin', $('input[name=thongtin_dd]').val())

       console.log(formData);
       $.ajax({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           type: 'POST',
           url: "themdiadiem",
           cache:false,
           contentType: false,
           processData: false,
           data:formData,
           success: function(data){
               if(data.success)
               {
                   $('#create_diadiem').modal('hide')
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

// Xử lý sửa địa điểm
$(document).on('click','.edit_diadiem', function(e){
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
           console.log(html.data);
           $('input[name=ID]').val(html.data.ma_dia_diem);
           $('input[name=up_ten_diadiem]').val(html.data.ten_dia_diem);
           $('input[name=up_thongtin_dd]').val(html.data.thongtin);
           $('select[name=khu_vuc]').append("<option value='"+ html.data.ma_mien +"' selected>hahaahh</option>");
           
           $('.action').attr("id", "btn_edit");
           $('#Update_diadiem').modal('show');
           $('.form-horizontal').show();
           $('.modal-title .si').text('Cập nhật địa điểm');
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
   $(document).on('click','#Update_dia_diem', function(e){
       var formData = new FormData($('Update_DiaDiem')[0]);
       formData.append('ID',$('input[name=ID]').val()),
       formData.append('ten_dia_diem', $('input[name=up_ten_diadiem]').val())
       formData.append('Thong_tin', $('input[name=up_thongtin_dd]').val())
       $.ajax({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               type: 'POST',
               url: 'suadiadiem',
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