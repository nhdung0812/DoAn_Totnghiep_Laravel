@extends('Home.Layout')
@section('content')
<!-- ========== MAIN CONTENT ========== -->
<main id="content" class="bg-gray space-2">
       <div class="container col-md-4 col-md-offset-5">
              <div class="row">
                     <div class="mb-5 shadow-soft bg-white rounded-sm">
                            <div class="py-6 px-5 border-bottom">
                                   <div class="flex-horizontal-center">
                                          <div
                                                 class="height-50 width-50 flex-shrink-0 flex-content-center bg-primary rounded-circle">
                                                 <i class="flaticon-tick text-white font-size-24"></i>
                                          </div>
                                          <div class="ml-3">
                                                 <h3 class="font-size-18 font-weight-bold text-dark mb-0 text-lh-sm">
                                                        @if (session('success'))
                                                               {{ session('success') }}
                                                        @endif
                                                        Cảm ơn . Bạn đã đặ Tour bên chúng tôi.
                                                 </h3>
                                                 <p class="mb-0">Bạn đã thanh toán thành công . Chúng tôi đã gửi thông thanh toán </p>
                                          </div>
                                   </div>
                            </div>
                            <a href="#" type="submit mt-4" class="btn btn-primary w-100 rounded-sm transition-3d-hover font-size-16 font-weight-bold py-3">Quay Lại
                            </a>
                     </div>
              </div>
       </div>
</main>
@endsection

@section('js')