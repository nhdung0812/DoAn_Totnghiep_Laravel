@extends('Admin.Layout')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
    {{-- <style>
        .upload-options {
            position: relative;
            height: 35px;
            background-color: cadetblue;
            cursor: pointer;
            overflow: hidden;
            text-align: center;
            -webkit-transition: background-color ease-in-out 150ms;
            transition: background-color ease-in-out 150ms;
        }
        .upload-options label {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            height: 100%;
            font-weight: 400;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: pointer;
            overflow: hidden;
        }
        .upload-options input {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        .upload-options label::after {
            content: 'add';
            font-family: 'Material Icons';
            position: absolute;
            font-size: 2.5rem;
            color: #e6e6e6;
            top: calc(50% - 2.5rem);
            left: calc(50% - 1.25rem);
            z-index: 0;
          }
          .upload-options label span {
            display: inline-block;
            width: 50%;
            height: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            vertical-align: middle;
            text-align: center;
          }
          .upload-options label span:hover i.material-icons {
            color: lightgray;
          }
          
    </style> --}}
@endsection
@section('content')
       <main id="main-container">
                <!-- Page Content -->

                <div class="content">
                    <h2 class="content-heading">
                        <i class="fa fa-word mr-2"></i>
                    </h2>
                    <div class="row gutters-tiny">
                        <!-- In Orders -->
                        <div class="col-md-6 col-xl-4">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-shopping-basket fa-2x text-info-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-info js-count-to-enabled" data-toggle="countTo" data-to="39">39</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Địa Điểm</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END In Orders -->
            
                        <!-- Stock -->
                        <div class="col-md-6 col-xl-4">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-check fa-2x text-success-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-success js-count-to-enabled" data-toggle="countTo" data-to="85">85</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Trong Nước</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Stock -->
            
                        <!-- Delete Product -->
                        <div class="col-xl-4">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-archive fa-2x text-danger-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-danger">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Ngoài nước </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Delete Product -->
                    </div>
                     <h2 class="content-heading">
                            <i class="fa fa-word mr-2"></i>Danh sách địa điểm
                     </h2>
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <button type="button" class="create-modal_Diadiem btn btn-success mr-5 mb-5">
                                <i class="fa fa-plus mr-5"></i>Thêm địa điểm
                            </button>
                            <a href="{{route('Quantri.box-trash-dia-diem')}}" type="button" class="show-trash btn btn-danger mr-5 mb-5">
                                <i class="fa fa-trash-o mr-5"></i>Thùng rác
                            </a>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <tr class="post">
                                            <th class="text-center">STT</th>
                                            <th class="d-none d-sm-table-cell">Tên địa điểm</th>
                                            <th class="d-none d-sm-table-cell">Tên khu vực</th>
                                            <th class="d-none d-sm-table-cell">Thông tin</th>
                                            <th class="d-none d-sm-table-cell">Chức Năng</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($diadiem as $dd)
                                    <tr>
                                        <td class="d-none d-sm-table-cell">{{$stt += 1}}</td>
                                        <td class="d-none d-sm-table-cell">
                                            Địa Điểm <span class="badge badge-success">{{$dd->ten_dia_diem}}</span>
                                        </td>
                                        @foreach ($khuvuc as $item)
                                            @if ($item->ma_mien == $dd->ma_mien)
                                                <td class="d-none d-sm-table-cell">{{$item->ten_mien}}</td>
                                            @endif
                                        @endforeach
                                        <td class="d-none d-sm-table-cell">{{$dd->thongtin	}}</td>
                                        <td class="" style="">
                                            <a href="{{ route('Quantri.sua_dia_diem',$dd->ma_dia_diem) }}" class="edit_diadiem btn btn-primary min-width-90">
                                                <i class="fa fa-wrench"></i> Sửa
                                            </a>
                                            <a href="{{ route('Quantri.trash_dia_diem',$dd->ma_dia_diem) }}" title=""  class="delect-diadiem btn btn-danger  min-width-10 ">
                                                <i class="fa fa-trash"></i> Xoá
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
              </div>
       </main>
       @include('Admin/model.model_add_diadiem');
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{asset('Admin/dropzone/dist/min/dropzone.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset ('Admin/js/Ajax_DiaDiem.js')}}"></script>
    <script>
        function initImageUpload(box) {
            let uploadField = box.querySelector('.image-upload');
          
            uploadField.addEventListener('change', getFile);
          
            function getFile(e){
              let file = e.currentTarget.files[0];
              checkType(file);
            }
            
            function previewImage(file){
              let thumb = box.querySelector('.js--image-preview'),
                  reader = new FileReader();
          
              reader.onload = function() {
                thumb.style.backgroundImage = 'url(' + reader.result + ')';
              }
              reader.readAsDataURL(file);
              thumb.className += ' js--no-default';
            }
          
            function checkType(file){
              let imageType = /image.*/;
              if (!file.type.match(imageType)) {
                throw 'Datei ist kein Bild';
              } else if (!file){
                throw 'Kein Bild gewählt';
              } else {
                previewImage(file);
              }
            }
            
          }
          
          // initialize box-scope
          var boxes = document.querySelectorAll('.box');
          
          for(let i = 0; i < boxes.length; i++) {if (window.CP.shouldStopExecution(1)){break;}
            let box = boxes[i];
            initDropEffect(box);
            initImageUpload(box);
          }
          window.CP.exitedLoop(1);
          
          
          
          
          /// drop-effect
          function initDropEffect(box){
            let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
            
            // get clickable area for drop effect
            area = box.querySelector('.js--image-preview');
            area.addEventListener('click', fireRipple);
            
            function fireRipple(e){
              area = e.currentTarget
              // create drop
              if(!drop){
                drop = document.createElement('span');
                drop.className = 'drop';
                this.appendChild(drop);
              }
              // reset animate class
              drop.className = 'drop';
              
              // calculate dimensions of area (longest side)
              areaWidth = getComputedStyle(this, null).getPropertyValue("width");
              areaHeight = getComputedStyle(this, null).getPropertyValue("height");
              maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));
          
              // set drop dimensions to fill area
              drop.style.width = maxDistance + 'px';
              drop.style.height = maxDistance + 'px';
              
              // calculate dimensions of drop
              dropWidth = getComputedStyle(this, null).getPropertyValue("width");
              dropHeight = getComputedStyle(this, null).getPropertyValue("height");
              
              // calculate relative coordinates of click
              // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
              x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
              y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
              
              // position drop and animate
              drop.style.top = y + 'px';
              drop.style.left = x + 'px';
              drop.className += ' animate';
              e.stopPropagation();
              
            }
          }
    </script>
@endsection
