@extends('Home.Layout')
@section('content')
        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" class="bg-gray space-2">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8 col-xl-9">
                          <div class="mb-5 shadow-soft bg-white rounded-sm">
                              <div class="pt-4 pb-5 px-5">
                                   <div class="row">
                                       <div class="col-md-12">
                                           <!-- Validation Wizards -->
                                          <div class="row">
                                                 <div class="col-md-12">
                                                        <!-- Validation Wizard Classic -->
                                                        <div class="js-wizard-validation-classic block ">
                                                        <!-- Step Tabs -->
                                                        <div class="container">
                                                               <ul class=" pl-2 list-group flex-nowrap overflow-auto overflow-md-visble list-group-horizontal list-group-borderless flex-center-between pt-1" role="tablist">
                                                                      <li class="list-group-item text-center flex-shrink-0 flex-xl-shrink-1 tab_color" >
                                                                      <a class="active" href="#wizard-validation-classic-step1" data-toggle="tab">
                                                                             <div class="flex-content-center mb-3 width-40 height-40 border-width-2 border  mx-auto rounded-circle number_tab" style="color: #67747c">
                                                                             1
                                                                             </div>
                                                                             <div class="text_tab" style="color: #67747c ;">Customer information</div>
                                                                      </a>
                                                                      </li>
                                                                      <li class="list-group-item text-center flex-shrink-0 flex-xl-shrink-1 tab_color">
                                                                      <a class="" href="#wizard-validation-classic-step2" data-toggle="tab">
                                                                             <div class="flex-content-center mb-3 width-40 height-40 border  border-width-2  mx-auto rounded-circle number_tab" style="color: #67747c">
                                                                             2
                                                                             </div>
                                                                             <div class="text_tab" style="color: #67747c ;">Payment information</div>
                                                                      </a>
                                                                      </li>
                                                                      <li class=" list-group-item text-center flex-shrink-0 flex-md-shrink-1 tab_color">
                                                                      <a class="" href="#wizard-validation-classic-step3" data-toggle="tab">
                                                                             <div class="flex-content-center mb-3 width-40 height-40 border  border-width-2  mx-auto rounded-circle number_tab" style="color: #67747c">
                                                                             3
                                                                             </div>
                                                                             <div class="text_tab" style="color: #67747c ;">Booking is confirmed!</div>
                                                                      </a>
                                                                      </li>
                                                               </ul>
                                                        </div>
                                                        <!-- END Step Tabs -->
                                                        <hr>
                                                        <!-- Form -->
                                                        <form class="js-wizard-validation-classic-form" action="" method="post">
                                                               <!-- Steps Content -->
                                                               <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                                                               <!-- Step 1 -->
                                                               <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">
                                                                      <div class="row">
                                                                             <!-- Input -->
                                                                             <div class="col-sm-6 mb-4">
                                                                             <div class="">
                                                                                    <label class="form-label">
                                                                                        Họ Và Tên
                                                                                    </label>
                                                                                    <input type="text" class="form-control" name="firstName">
                                                                             <div id="firstName-error" class="" style="display: block;"></div></div>
                                                                             </div>
                                                                             <!-- End Input -->
                                   
                                                                             <!-- Input -->
                                                                             <div class="col-sm-6 mb-4">
                                                                             <div class="">
                                                                                    <label class="form-label">
                                                                                    Last name
                                                                                    </label>
                                   
                                                                                    <input type="text" class="form-control" name="lasstName" placeholder="TUFAN" >
                                                                             <div id="lasstName-error" class="" style="display: block;"></div></div>
                                                                             </div>
                                                                             <!-- End Input -->
                                   
                                                                             <!-- Input -->
                                                                             <div class="col-sm-6 mb-4">
                                                                             <div class="r">
                                                                                    <label class="form-label">
                                                                                        Gmail
                                                                                    </label>
                                   
                                                                                    <input type="email" class="form-control" name="email" >
                                                                             <div id="email-error" class="" style="display: block;"></div></div>
                                                                             </div>
                                                                             <!-- End Input -->
                                   
                                                                             <!-- Input -->
                                                                             <div class="col-sm-6 mb-4">
                                                                             <div class="">
                                                                                    <label class="form-label">
                                                                                        Số điện thoại
                                                                                    </label>
                                   
                                                                                    <input type="number" class="form-control" name="phone" >
                                                                             <div id="phone-error" class="invalid-feedback" style="display: block;"></div></div>
                                                                             </div>
                                                                             <!-- End Input -->
                                   
                                                                             <div class="w-100"></div>
                                   
                                                                             <div class="w-100"></div>
                                   
                                                                             <div class="col">
                                                                             <!-- Input -->
                                                                             <div class="">
                                                                                    <label class="form-label">
                                                                                    Special Requirements
                                                                                    </label>
                                   
                                                                                    <div class="input-group">
                                                                                    <textarea class="form-control" rows="4" name="text" placeholder="" aria-label="" data-msg="Please enter a reason." data-error-class="u-has-error" data-success-class="u-has-success" aria-describedby="text-error"></textarea>
                                                                                    </div>
                                                                             <div id="text-error" class="" style="display: block;"></div></div>
                                                                             <!-- End Input -->
                                                                             </div>
                                   
                                                                             <div class="w-100"></div>
                                   
                                                                             <div class="col-sm-12 align-self-end mt-5">
                                                                             <div class="text-right">
                                                                                    <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                                                                           Next <i class="fa fa-angle-right ml-5"></i>
                                                                                       </button>
                                                                             </div>
                                                                             </div>
                                                                      </div>
                                                               </div>
                                                               <!-- END Step 1 -->

                                                               <!-- Step 2 -->
                                                               <div class="tab-pane" id="wizard-validation-classic-step2" role="tabpanel">
                                                                      <div class="pt-4 pb-5 px-5">
                                                                             <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark mb-4">
                                                                             Your Card Information
                                                                             </h5>
                                                                             <!-- Nav Classic -->
                                                                             <ul class="nav nav-classic nav-choose border-0 nav-justified border mx-n3" role="tablist">
                                                                             <li class="nav-item mx-3 mb-4 mb-md-0">
                                                                                    <a class="rounded py-5 border-width-2 border nav-link font-weight-medium active" id="pills-one-example2-tab" data-toggle="pill" href="#pills-one-example2" role="tab" aria-controls="pills-one-example2" aria-selected="true">
                                                                                    <div class="height-25 width-25 flex-content-center bg-primary rounded-circle position-absolute left-0 top-0 ml-2 mt-2">
                                                                                           <i class="flaticon-tick text-white font-size-15"></i>
                                                                                    </div>
                                                                                    <div class="d-md-flex justify-content-md-center align-items-md-center flex-wrap">
                                                                                           <img class="img-fluid mb-3" src="../../assets/img/199x35/img1.jpg" alt="Image-Description">
                                                                                           <div class="w-100 text-dark">Payment with credit card</div>
                                                                                    </div>
                                                                                    </a>
                                                                             </li>
                                                                             <li class="nav-item mx-3">
                                                                                    <a class="rounded py-5 border-width-2 border nav-link font-weight-medium" id="pills-two-example2-tab" data-toggle="pill" href="#pills-two-example2" role="tab" aria-controls="pills-two-example2" aria-selected="false">
                                                                                    <div class="height-25 width-25 flex-content-center bg-primary rounded-circle position-absolute left-0 top-0 ml-2 mt-2">
                                                                                           <i class="flaticon-tick text-white font-size-15"></i>
                                                                                    </div>
                                                                                    <div class="d-md-flex justify-content-md-center align-items-md-center flex-wrap">
                                                                                           <img class="img-fluid mb-3" src="../../assets/img/199x35/img2.jpg" alt="Image-Description">
                                                                                           <div class="w-100 text-dark">Payment with paypal</div>
                                                                                    </div>
                                                                                    </a>
                                                                             </li>
                                                                             </ul>
                                                                             <!-- End Nav Classic -->
                                          
                                                                             <!-- Tab Content -->
                                                                             <div class="tab-content">
                                                                             <div class="tab-pane fade pt-8 show active" id="pills-one-example2" role="tabpanel" aria-labelledby="pills-one-example2-tab">
                                                                                    <!-- Payment Form -->
                                                                                    <form class="js-validate" novalidate="novalidate">
                                                                                    <div class="row">
                                                                                           <!-- Input -->
                                                                                           <div class="col-sm-6 mb-4">
                                                                                                  <div class="js-form-message">
                                                                                                         <label class="form-label">
                                                                                                                Card Holder Name
                                                                                                         </label>
                                                 
                                                                                                         <input type="text" class="form-control" name="Cardname" placeholder="" aria-label="" required="" data-msg="Please enter card holder name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                                  </div>
                                                                                           </div>
                                                                                           <!-- End Input -->
                                          
                                                                                           <!-- Input -->
                                                                                           <div class="col-sm-6 mb-4">
                                                                                                  <div class="js-form-message">
                                                                                                         <label class="form-label">
                                                                                                                Card Number
                                                                                                         </label>
                                                 
                                                                                                         <input type="number" class="form-control" name="Cardnumber" placeholder="" aria-label="" required="" data-msg="Please enter card number." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                                  </div>
                                                                                           </div>
                                                                                           <!-- End Input -->
                                          
                                                                                           <div class="w-100"></div>
                                          
                                                                                           <!-- Input -->
                                                                                           <div class="col-sm-6 mb-4">
                                                                                           <div class="row">
                                                                                                  <div class="col-sm-6 mb-4 mb-md-0">
                                                                                                         <div class="js-form-message">
                                                                                                         <label class="form-label">
                                                                                                                Expiry Month
                                                                                                         </label>
                                          
                                                                                                         <input type="number" class="form-control" name="Expirymonth" placeholder="" aria-label="" required="" data-msg="Please enter expiry month." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                                         </div>
                                                                                                  </div>
                                                                                                  <div class="col-sm-6">
                                                                                                         <div class="js-form-message">
                                                                                                         <label class="form-label">
                                                                                                                Expiry Year
                                                                                                         </label>
                                          
                                                                                                         <input type="number" class="form-control" name="Expiryyear" placeholder="" aria-label="" required="" data-msg="Please enter expiry year." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                                         </div>
                                                                                                  </div>
                                                                                           </div>
                                                                                           </div>
                                                                                           <!-- End Input -->
                                          
                                                                                           <!-- Input -->
                                                                                           <div class="col-sm-6 mb-4">
                                                                                           <div class="js-form-message">
                                                                                                  <label class="form-label">
                                                                                                         CCV
                                                                                                  </label>
                                          
                                                                                                  <input type="number" class="form-control" name="ccvnumber" placeholder="" aria-label="" required="" data-msg="Please enter ccv number." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                           </div>
                                                                                           </div>
                                                                                           <!-- End Input -->
                                          
                                                                                           <div class="w-100"></div>
                                          
                                                                                           <div class="col">
                                                                                           <!-- Checkbox -->
                                                                                           <div class="js-form-message mb-5">
                                                                                                  <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                                                                                         <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required="" data-msg="Please accept our Terms and Conditions." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                                         <label class="custom-control-label" for="termsCheckbox">
                                                                                                         <small>
                                                                                                                By continuing, you agree to the
                                                                                                                <a class="link-muted" href="../pages/terms.html">Terms and Conditions</a>
                                                                                                         </small>
                                                                                                         </label>
                                                                                                  </div>
                                                                                           </div>
                                                                                           <!-- End Checkbox -->
                                                                                           <button type="button" class="btn btn-primary w-100 rounded-sm transition-3d-hover font-size-16 font-weight-bold py-3" data-wizard="next">CONFIRM BOOKING</button>
                                                                                           </div>
                                                                                    </div>
                                                                                    </form>
                                                                                    <!-- End Payment Form -->
                                                                             </div>
                                          
                                                                             <div class="tab-pane fade pt-8" id="pills-two-example2" role="tabpanel" aria-labelledby="pills-two-example2-tab">
                                                                                    <form class="js-validate" novalidate="novalidate">
                                                                                    <!-- Login -->
                                                                                    <div id="login" data-target-group="idForm">
                                                                                           <!-- Form Group -->
                                                                                           <div class="form-group">
                                                                                           <div class="js-form-message js-focus-state">
                                                                                                  <label class="sr-only" for="signinEmail">Email</label>
                                                                                                  <div class="input-group">
                                                                                                         <div class="input-group-prepend">
                                                                                                         <span class="input-group-text" id="signinEmailLabel">
                                                                                                                <span class="fas fa-user"></span>
                                                                                                         </span>
                                                                                                         </div>
                                                                                                         <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                                  </div>
                                                                                           </div>
                                                                                           </div>
                                                                                           <!-- End Form Group -->
                                          
                                                                                           <!-- Form Group -->
                                                                                           <div class="form-group mb-4">
                                                                                           <div class="js-form-message js-focus-state">
                                                                                                  <label class="sr-only" for="signinPassword">Password</label>
                                                                                                  <div class="input-group">
                                                                                                         <div class="input-group-prepend">
                                                                                                         <span class="input-group-text" id="signinPasswordLabel">
                                                                                                                <span class="fas fa-lock"></span>
                                                                                                         </span>
                                                                                                         </div>
                                                                                                         <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                                  </div>
                                                                                           </div>
                                                                                           </div>
                                                                                           <!-- End Form Group -->
                                          
                                                                                           <div class="mb-2">
                                                                                                  <button type="submit" class="btn btn-block btn-primary transition-3d-hover">Login</button>
                                                                                           </div>
                                                                                    </div>
                                                                                    </form>
                                                                             </div>
                                                                             </div>
                                                                             <!-- End Tab Content -->
                                                                      </div>
                                                               </div>
                                                               <!-- END Step 2 -->

                                                               <!-- Step 3 -->
                                                               <div class="tab-pane" id="wizard-validation-classic-step3" role="tabpanel">
                                                                      <div class="mb-5 shadow-soft bg-white rounded-sm">
                                                                             <div class="py-6 px-5 border-bottom">
                                                                                 <div class="flex-horizontal-center">
                                                                                     <div class="height-50 width-50 flex-shrink-0 flex-content-center bg-primary rounded-circle">
                                                                                         <i class="flaticon-tick text-white font-size-24"></i>
                                                                                     </div>
                                                                                     <div class="ml-3">
                                                                                         <h3 class="font-size-18 font-weight-bold text-dark mb-0 text-lh-sm">
                                                                                             Thank You. Your Booking Order is Confirmed Now.
                                                                                         </h3>
                                                                                         <p class="mb-0">A confirmation email has been sent to your provided email address.</p>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                             <div class="pt-4 pb-5 px-5 border-bottom">
                                                                                 <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark mb-2">
                                                                                     Traveler Information
                                                                                 </h5>
                                                                                 <!-- Fact List -->
                                                                                 <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                     <li class="d-flex justify-content-between py-2">
                                                                                         <span class="font-weight-medium">Booking number</span>
                                                                                         <span class="text-secondary text-right">5784-BD245</span>
                                                                                     </li>
                                                 
                                                                                     <li class="d-flex justify-content-between py-2">
                                                                                         <span class="font-weight-medium">First name</span>
                                                                                         <span class="text-secondary text-right">Jessica</span>
                                                                                     </li>
                                                 
                                                                                     <li class="d-flex justify-content-between py-2">
                                                                                         <span class="font-weight-medium">Last name</span>
                                                                                         <span class="text-secondary text-right">Brown</span>
                                                                                     </li>
                                                 
                                                                                     <li class="d-flex justify-content-between py-2">
                                                                                         <span class="font-weight-medium">E-mail address</span>
                                                                                         <span class="text-secondary text-right">Info@Jessica.com</span>
                                                                                     </li>
                                                 
                                                                                     <li class="d-flex justify-content-between py-2">
                                                                                         <span class="font-weight-medium">Street Address and number</span>
                                                                                         <span class="text-secondary text-right">353 Third floor Avenue</span>
                                                                                     </li>
                                                 
                                                                                     <li class="d-flex justify-content-between py-2">
                                                                                         <span class="font-weight-medium">Town / City</span>
                                                                                         <span class="text-secondary text-right">Paris,France</span>
                                                                                     </li>
                                                 
                                                                                     <li class="d-flex justify-content-between py-2">
                                                                                         <span class="font-weight-medium">ZIP code</span>
                                                                                         <span class="text-secondary text-right">75800-875</span>
                                                                                     </li>
                                                 
                                                                                     <li class="d-flex justify-content-between py-2">
                                                                                         <span class="font-weight-medium">Country</span>
                                                                                         <span class="text-secondary text-right">United States of america</span>
                                                                                     </li>
                                                                                 </ul>
                                                                                 <!-- End Fact List -->
                                                                             </div>
                                                                             <div class="pt-4 pb-5 px-5 border-bottom">
                                                                                 <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark mb-3">
                                                                                     Payment
                                                                                 </h5>
                                                                                 <p class="">
                                                                                     Praesent dolor lectus, rutrum sit amet risus vitae, imperdiet cursus neque. Nulla tempor nec lorem eu suscipit. Donec dignissim lectus a nunc molestie consectetur. Nulla eu urna in nisi adipiscing placerat. Nam vel scelerisque magna. Donec justo urna,  posuere ut dictum quis.
                                                                                 </p>
                                                 
                                                                                 <a href="#" class="text-underline text-primary">Payment is made by Credit Card Via Paypal.</a>
                                                                             </div>
                                                                             <div class="pt-4 pb-5 px-5">
                                                                                 <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark mb-3">
                                                                                     View Booking Details
                                                                                 </h5>
                                                                                 <p class="">
                                                                                     Praesent dolor lectus, rutrum sit amet risus vitae, imperdiet cursus neque. Nulla tempor nec lorem eu suscipit. Donec dignissim lectus a nunc molestie consectetur. Nulla eu urna in nisi adipiscing placerat. Nam vel scelerisque magna. Donec justo urna,  posuere ut dictum quis.
                                                                                 </p>
                                                 
                                                                                 <a href="#" class="text-underline text-primary">https://www.mytravel.com/booking-details/?=f4acb19f-9542-4a5c-b8ee</a>
                                                                             </div>
                                                                         </div>   
                                                               </div>
                                                               <!-- END Step 3 -->
                                                               </div>
                                                               <!-- END Steps Content -->

                                                               <!-- Steps Navigation -->
                                                               {{-- <div class="block-content block-content-sm block-content-full bg-body-light">
                                                               <div class="row">
                                                                      <div class="col-6">
                                                                      <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                                                             <i class="fa fa-angle-left mr-5"></i> Previous
                                                                      </button>
                                                                      </div>
                                                                      <div class="col-6 text-right">
                                                                      <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                                                             Next <i class="fa fa-angle-right ml-5"></i>
                                                                      </button>
                                                                      <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                                                             <i class="fa fa-check mr-5"></i> Submit
                                                                      </button>
                                                                      </div>
                                                               </div>
                                                               </div> --}}
                                                               <!-- END Steps Navigation -->
                                                        </form>
                                                        <!-- END Form -->
                                                        </div>
                                                        <!-- END Validation Wizard Classic -->
                                                 </div>
                                          </div>
                                          <!-- END Validation Wizards -->
                                       </div>
                                   </div>
                                  {{-- <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark mb-4">
                                      Let us know who you are
                                  </h5>
                                  <!-- Contacts Form -->
                                  <form>
                                         <div class="tab-content">
                                                 <div class="tab-pane active" role="tabpanel">
                                                               <div class="row">
                                                                      <!-- Input -->
                                                                      <div class="col-sm-6 mb-4">
                                                                      <div class="">
                                                                             <label class="form-label">
                                                                             First Name
                                                                             </label>
                                                                             <input type="text" class="form-control" name="firstName">
                                                                      <div id="firstName-error" class="" style="display: block;"></div></div>
                                                                      </div>
                                                                      <!-- End Input -->
                            
                                                                      <!-- Input -->
                                                                      <div class="col-sm-6 mb-4">
                                                                      <div class="">
                                                                             <label class="form-label">
                                                                             Last name
                                                                             </label>
                            
                                                                             <input type="text" class="form-control" name="lasstName" placeholder="TUFAN" >
                                                                      <div id="lasstName-error" class="" style="display: block;"></div></div>
                                                                      </div>
                                                                      <!-- End Input -->
                            
                                                                      <!-- Input -->
                                                                      <div class="col-sm-6 mb-4">
                                                                      <div class="r">
                                                                             <label class="form-label">
                                                                             Email
                                                                             </label>
                            
                                                                             <input type="email" class="form-control" name="email" >
                                                                      <div id="email-error" class="" style="display: block;"></div></div>
                                                                      </div>
                                                                      <!-- End Input -->
                            
                                                                      <!-- Input -->
                                                                      <div class="col-sm-6 mb-4">
                                                                      <div class="">
                                                                             <label class="form-label">
                                                                             Phone
                                                                             </label>
                            
                                                                             <input type="number" class="form-control" name="phone" >
                                                                      <div id="phone-error" class="invalid-feedback" style="display: block;"></div></div>
                                                                      </div>
                                                                      <!-- End Input -->
                            
                                                                      <div class="w-100"></div>
                            
                                                                      <div class="w-100"></div>
                            
                                                                      <div class="col">
                                                                      <!-- Input -->
                                                                      <div class="">
                                                                             <label class="form-label">
                                                                             Special Requirements
                                                                             </label>
                            
                                                                             <div class="input-group">
                                                                             <textarea class="form-control" rows="4" name="text" placeholder="" aria-label="" data-msg="Please enter a reason." data-error-class="u-has-error" data-success-class="u-has-success" aria-describedby="text-error"></textarea>
                                                                             </div>
                                                                      <div id="text-error" class="" style="display: block;"></div></div>
                                                                      <!-- End Input -->
                                                                      </div>
                            
                                                                      <div class="w-100"></div>
                            
                                                                      <div class="col-sm-12 align-self-end mt-5">
                                                                      <div class="text-right">
                                                                             <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                                                                    Next <i class="fa fa-angle-right ml-5"></i>
                                                                                </button>
                                                                      </div>
                                                                      </div>
                                                               </div>
                                                 </div>
                                                 <div class="tab-pane " role="tabpanel">
                                                        <div class="pt-4 pb-5 px-5">
                                                               <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark mb-4">
                                                               Your Card Information
                                                               </h5>
                                                               <!-- Nav Classic -->
                                                               <ul class="nav nav-classic nav-choose border-0 nav-justified border mx-n3" role="tablist">
                                                               <li class="nav-item mx-3 mb-4 mb-md-0">
                                                                      <a class="rounded py-5 border-width-2 border nav-link font-weight-medium active" id="pills-one-example2-tab" data-toggle="pill" href="#pills-one-example2" role="tab" aria-controls="pills-one-example2" aria-selected="true">
                                                                      <div class="height-25 width-25 flex-content-center bg-primary rounded-circle position-absolute left-0 top-0 ml-2 mt-2">
                                                                             <i class="flaticon-tick text-white font-size-15"></i>
                                                                      </div>
                                                                      <div class="d-md-flex justify-content-md-center align-items-md-center flex-wrap">
                                                                             <img class="img-fluid mb-3" src="../../assets/img/199x35/img1.jpg" alt="Image-Description">
                                                                             <div class="w-100 text-dark">Payment with credit card</div>
                                                                      </div>
                                                                      </a>
                                                               </li>
                                                               <li class="nav-item mx-3">
                                                                      <a class="rounded py-5 border-width-2 border nav-link font-weight-medium" id="pills-two-example2-tab" data-toggle="pill" href="#pills-two-example2" role="tab" aria-controls="pills-two-example2" aria-selected="false">
                                                                      <div class="height-25 width-25 flex-content-center bg-primary rounded-circle position-absolute left-0 top-0 ml-2 mt-2">
                                                                             <i class="flaticon-tick text-white font-size-15"></i>
                                                                      </div>
                                                                      <div class="d-md-flex justify-content-md-center align-items-md-center flex-wrap">
                                                                             <img class="img-fluid mb-3" src="../../assets/img/199x35/img2.jpg" alt="Image-Description">
                                                                             <div class="w-100 text-dark">Payment with paypal</div>
                                                                      </div>
                                                                      </a>
                                                               </li>
                                                               </ul>
                                                               <!-- End Nav Classic -->
                            
                                                               <!-- Tab Content -->
                                                               <div class="tab-content">
                                                               <div class="tab-pane fade pt-8 show active" id="pills-one-example2" role="tabpanel" aria-labelledby="pills-one-example2-tab">
                                                                      <!-- Payment Form -->
                                                                      <form class="js-validate" novalidate="novalidate">
                                                                      <div class="row">
                                                                             <!-- Input -->
                                                                             <div class="col-sm-6 mb-4">
                                                                             <div class="js-form-message">
                                                                                    <label class="form-label">
                                                                                           Card Holder Name
                                                                                    </label>
                            
                                                                                    <input type="text" class="form-control" name="Cardname" placeholder="" aria-label="" required="" data-msg="Please enter card holder name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                             </div>
                                                                             </div>
                                                                             <!-- End Input -->
                            
                                                                             <!-- Input -->
                                                                             <div class="col-sm-6 mb-4">
                                                                             <div class="js-form-message">
                                                                                    <label class="form-label">
                                                                                           Card Number
                                                                                    </label>
                            
                                                                                    <input type="number" class="form-control" name="Cardnumber" placeholder="" aria-label="" required="" data-msg="Please enter card number." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                             </div>
                                                                             </div>
                                                                             <!-- End Input -->
                            
                                                                             <div class="w-100"></div>
                            
                                                                             <!-- Input -->
                                                                             <div class="col-sm-6 mb-4">
                                                                             <div class="row">
                                                                                    <div class="col-sm-6 mb-4 mb-md-0">
                                                                                           <div class="js-form-message">
                                                                                           <label class="form-label">
                                                                                                  Expiry Month
                                                                                           </label>
                            
                                                                                           <input type="number" class="form-control" name="Expirymonth" placeholder="" aria-label="" required="" data-msg="Please enter expiry month." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                           </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                           <div class="js-form-message">
                                                                                           <label class="form-label">
                                                                                                  Expiry Year
                                                                                           </label>
                            
                                                                                           <input type="number" class="form-control" name="Expiryyear" placeholder="" aria-label="" required="" data-msg="Please enter expiry year." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                           </div>
                                                                                    </div>
                                                                             </div>
                                                                             </div>
                                                                             <!-- End Input -->
                            
                                                                             <!-- Input -->
                                                                             <div class="col-sm-6 mb-4">
                                                                             <div class="js-form-message">
                                                                                    <label class="form-label">
                                                                                           CCV
                                                                                    </label>
                            
                                                                                    <input type="number" class="form-control" name="ccvnumber" placeholder="" aria-label="" required="" data-msg="Please enter ccv number." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                             </div>
                                                                             </div>
                                                                             <!-- End Input -->
                            
                                                                             <div class="w-100"></div>
                            
                                                                             <div class="col">
                                                                             <!-- Checkbox -->
                                                                             <div class="js-form-message mb-5">
                                                                                    <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                                                                           <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required="" data-msg="Please accept our Terms and Conditions." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                           <label class="custom-control-label" for="termsCheckbox">
                                                                                           <small>
                                                                                                  By continuing, you agree to the
                                                                                                  <a class="link-muted" href="../pages/terms.html">Terms and Conditions</a>
                                                                                           </small>
                                                                                           </label>
                                                                                    </div>
                                                                             </div>
                                                                             <!-- End Checkbox -->
                                                                             <button type="submit" class="btn btn-primary w-100 rounded-sm transition-3d-hover font-size-16 font-weight-bold py-3">CONFIRM BOOKING</button>
                                                                             </div>
                                                                      </div>
                                                                      </form>
                                                                      <!-- End Payment Form -->
                                                               </div>
                            
                                                               <div class="tab-pane fade pt-8" id="pills-two-example2" role="tabpanel" aria-labelledby="pills-two-example2-tab">
                                                                      <form class="js-validate" novalidate="novalidate">
                                                                      <!-- Login -->
                                                                      <div id="login" data-target-group="idForm">
                                                                             <!-- Form Group -->
                                                                             <div class="form-group">
                                                                             <div class="js-form-message js-focus-state">
                                                                                    <label class="sr-only" for="signinEmail">Email</label>
                                                                                    <div class="input-group">
                                                                                           <div class="input-group-prepend">
                                                                                           <span class="input-group-text" id="signinEmailLabel">
                                                                                                  <span class="fas fa-user"></span>
                                                                                           </span>
                                                                                           </div>
                                                                                           <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                    </div>
                                                                             </div>
                                                                             </div>
                                                                             <!-- End Form Group -->
                            
                                                                             <!-- Form Group -->
                                                                             <div class="form-group mb-4">
                                                                             <div class="js-form-message js-focus-state">
                                                                                    <label class="sr-only" for="signinPassword">Password</label>
                                                                                    <div class="input-group">
                                                                                           <div class="input-group-prepend">
                                                                                           <span class="input-group-text" id="signinPasswordLabel">
                                                                                                  <span class="fas fa-lock"></span>
                                                                                           </span>
                                                                                           </div>
                                                                                           <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                                    </div>
                                                                             </div>
                                                                             </div>
                                                                             <!-- End Form Group -->
                            
                                                                             <div class="mb-2">
                                                                             <button type="submit" class="btn btn-block btn-primary transition-3d-hover">Login</button>
                                                                             </div>
                                                                      </div>
                                                                      </form>
                                                               </div>
                                                               </div>
                                                               <!-- End Tab Content -->
                                                        </div>
                                                 </div>
                                                 <div class="tab-pane " role="tabpanel">
                                                        <div class="mb-5 shadow-soft bg-white rounded-sm">
                                                               <div class="py-6 px-5 border-bottom">
                                                                   <div class="flex-horizontal-center">
                                                                       <div class="height-50 width-50 flex-shrink-0 flex-content-center bg-primary rounded-circle">
                                                                           <i class="flaticon-tick text-white font-size-24"></i>
                                                                       </div>
                                                                       <div class="ml-3">
                                                                           <h3 class="font-size-18 font-weight-bold text-dark mb-0 text-lh-sm">
                                                                               Thank You. Your Booking Order is Confirmed Now.
                                                                           </h3>
                                                                           <p class="mb-0">A confirmation email has been sent to your provided email address.</p>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div class="pt-4 pb-5 px-5 border-bottom">
                                                                   <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark mb-2">
                                                                       Traveler Information
                                                                   </h5>
                                                                   <!-- Fact List -->
                                                                   <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                       <li class="d-flex justify-content-between py-2">
                                                                           <span class="font-weight-medium">Booking number</span>
                                                                           <span class="text-secondary text-right">5784-BD245</span>
                                                                       </li>
                                   
                                                                       <li class="d-flex justify-content-between py-2">
                                                                           <span class="font-weight-medium">First name</span>
                                                                           <span class="text-secondary text-right">Jessica</span>
                                                                       </li>
                                   
                                                                       <li class="d-flex justify-content-between py-2">
                                                                           <span class="font-weight-medium">Last name</span>
                                                                           <span class="text-secondary text-right">Brown</span>
                                                                       </li>
                                   
                                                                       <li class="d-flex justify-content-between py-2">
                                                                           <span class="font-weight-medium">E-mail address</span>
                                                                           <span class="text-secondary text-right">Info@Jessica.com</span>
                                                                       </li>
                                   
                                                                       <li class="d-flex justify-content-between py-2">
                                                                           <span class="font-weight-medium">Street Address and number</span>
                                                                           <span class="text-secondary text-right">353 Third floor Avenue</span>
                                                                       </li>
                                   
                                                                       <li class="d-flex justify-content-between py-2">
                                                                           <span class="font-weight-medium">Town / City</span>
                                                                           <span class="text-secondary text-right">Paris,France</span>
                                                                       </li>
                                   
                                                                       <li class="d-flex justify-content-between py-2">
                                                                           <span class="font-weight-medium">ZIP code</span>
                                                                           <span class="text-secondary text-right">75800-875</span>
                                                                       </li>
                                   
                                                                       <li class="d-flex justify-content-between py-2">
                                                                           <span class="font-weight-medium">Country</span>
                                                                           <span class="text-secondary text-right">United States of america</span>
                                                                       </li>
                                                                   </ul>
                                                                   <!-- End Fact List -->
                                                               </div>
                                                               <div class="pt-4 pb-5 px-5 border-bottom">
                                                                   <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark mb-3">
                                                                       Payment
                                                                   </h5>
                                                                   <p class="">
                                                                       Praesent dolor lectus, rutrum sit amet risus vitae, imperdiet cursus neque. Nulla tempor nec lorem eu suscipit. Donec dignissim lectus a nunc molestie consectetur. Nulla eu urna in nisi adipiscing placerat. Nam vel scelerisque magna. Donec justo urna,  posuere ut dictum quis.
                                                                   </p>
                                   
                                                                   <a href="#" class="text-underline text-primary">Payment is made by Credit Card Via Paypal.</a>
                                                               </div>
                                                               <div class="pt-4 pb-5 px-5">
                                                                   <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark mb-3">
                                                                       View Booking Details
                                                                   </h5>
                                                                   <p class="">
                                                                       Praesent dolor lectus, rutrum sit amet risus vitae, imperdiet cursus neque. Nulla tempor nec lorem eu suscipit. Donec dignissim lectus a nunc molestie consectetur. Nulla eu urna in nisi adipiscing placerat. Nam vel scelerisque magna. Donec justo urna,  posuere ut dictum quis.
                                                                   </p>
                                   
                                                                   <a href="#" class="text-underline text-primary">https://www.mytravel.com/booking-details/?=f4acb19f-9542-4a5c-b8ee</a>
                                                               </div>
                                                           </div>   
                                                 </div>
                                                 <div class="block-content block-content-sm block-content-full bg-body-light">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                                                    <i class="fa fa-angle-left mr-5"></i> Previous
                                                                </button>
                                                            </div>
                                                            <div class="col-6 text-right">
                                                                <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                                                    Next <i class="fa fa-angle-right ml-5"></i>
                                                                </button>
                                                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                                                    <i class="fa fa-check mr-5"></i> Submit
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                          </div>
                                  </form>
                                  <!-- End Contacts Form --> --}}
                              </div>
                          </div>
                         
                      </div>
                      <div class="col-lg-4 col-xl-3">
                          <div class="shadow-soft bg-white rounded-sm">
                              <div class="pt-5 pb-3 px-5 border-bottom">
                                  <a href="#" class="d-block mb-3">
                                      <img class="img-fluid rounded-sm" src="../../assets/img/240x160/img5.jpg" alt="Image-Description">
                                  </a>
                                  <a href="#" class="text-dark font-weight-bold mb-2 d-block">5-Day Oahu Tour: Honolulu, Pearl Harbor, &amp; Diamond Head</a>
                                  <div class="mb-1 flex-horizontal-center text-gray-1">
                                      <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> United Kingdom
                                  </div>
                              </div>
                              <!-- Basics Accordion -->
                              <div id="basicsAccordion">
                                  <!-- Card -->
                                  <div class="card rounded-0 border-top-0 border-left-0 border-right-0">
                                      <div class="card-header card-collapse bg-transparent border-0" id="basicsHeadingOne">
                                          <h5 class="mb-0">
                                              <button type="button" class="btn btn-link border-0 btn-block d-flex justify-content-between card-btn py-3 px-4 font-size-17 font-weight-bold text-dark" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="true" aria-controls="basicsCollapseOne">
                                                  Booking Detail
  
                                                  <span class="card-btn-arrow font-size-14 text-dark">
                                                      <i class="fas fa-chevron-down"></i>
                                                  </span>
                                              </button>
                                          </h5>
                                      </div>
                                      <div id="basicsCollapseOne" class="collapse show" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                          <div class="card-body px-4 pt-0">
                                              <!-- Fact List -->
                                              <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                  <li class="d-flex justify-content-between py-2">
                                                      <span class="font-weight-medium">Date <br> 22/09/2020</span>
                                                      <span class="text-secondary"><a href="#" class="text-underline">Edit</a></span>
                                                  </li>
  
                                                  <li class="d-flex justify-content-between py-2">
                                                      <span class="font-weight-medium">Duration</span>
                                                      <span class="text-secondary">26 days</span>
                                                  </li>
  
                                                  <li class="d-flex justify-content-between py-2">
                                                      <span class="font-weight-medium">Tour Type</span>
                                                      <span class="text-secondary">Daily Activity</span>
                                                  </li>
                                              </ul>
                                              <!-- End Fact List -->
                                          </div>
                                      </div>
                                  </div>
                                  <!-- End Card -->
  
                                  <!-- Card -->
                                  <div class="card rounded-0 border-top-0 border-left-0 border-right-0">
                                      <div class="card-header card-collapse bg-transparent border-0" id="basicsHeadingTwo">
                                          <h5 class="mb-0">
                                              <button type="button" class="btn btn-link border-0 btn-block d-flex justify-content-between card-btn py-3 px-4 font-size-17 font-weight-bold text-dark" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                                  Extra
  
                                                  <span class="card-btn-arrow font-size-14 text-dark">
                                                      <i class="fas fa-chevron-down"></i>
                                                  </span>
                                              </button>
                                          </h5>
                                      </div>
                                      <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion">
                                          <div class="card-body px-4 pt-0">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                          </div>
                                      </div>
                                  </div>
                                  <!-- End Card -->
  
                                  <!-- Card -->
                                  <div class="card rounded-0 border-top-0 border-left-0 border-right-0">
                                      <div class="card-header card-collapse bg-transparent border-0" id="basicsHeadingThree">
                                          <h5 class="mb-0">
                                              <button type="button" class="btn btn-link border-0 btn-block d-flex justify-content-between card-btn py-3 px-4 font-size-17 font-weight-bold text-dark" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                                  Coupon Code
  
                                                  <span class="card-btn-arrow font-size-14 text-dark">
                                                      <i class="fas fa-chevron-down"></i>
                                                  </span>
                                              </button>
                                          </h5>
                                      </div>
                                      <div id="basicsCollapseThree" class="collapse show" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion">
                                          <div class="card-body px-4 pt-0 pb-4">
                                              <!-- Subscribe Form -->
                                              <form class="js-focus-state">
                                                  <label class="sr-only" for="CouponCodeExample1">Coupon Code</label>
                                                  <div class="input-group">
                                                      <input type="number" class="form-control" name="email" id="CouponCodeExample1" placeholder="" aria-label="" aria-describedby="CouponCodeExample2" required="">
                                                      <div class="input-group-append">
                                                          <button class="btn btn-primary py-2" type="button" id="CouponCodeExample2">Apply</button>
                                                      </div>
                                                  </div>
                                              </form>
                                              <!-- End Subscribe Form -->
                                          </div>
                                      </div>
                                  </div>
                                  <!-- End Card -->
  
                                  <!-- Card -->
                                  <div class="card rounded-0 border-top-0 border-left-0 border-right-0">
                                      <div class="card-header card-collapse bg-transparent border-0" id="basicsHeadingFour">
                                          <h5 class="mb-0">
                                              <button type="button" class="btn btn-link border-0 btn-block d-flex justify-content-between card-btn py-3 px-4 font-size-17 font-weight-bold text-dark" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                                  Payment
  
                                                  <span class="card-btn-arrow font-size-14 text-dark">
                                                      <i class="fas fa-chevron-down"></i>
                                                  </span>
                                              </button>
                                          </h5>
                                      </div>
                                      <div id="basicsCollapseFour" class="collapse show" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
                                          <div class="card-body px-4 pt-0">
                                              <!-- Fact List -->
                                              <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                  <li class="d-flex justify-content-between py-2">
                                                      <span class="font-weight-medium">Adult Price</span>
                                                      <span class="text-secondary">€580,00</span>
                                                  </li>
  
                                                  <li class="d-flex justify-content-between py-2">
                                                      <span class="font-weight-medium">Children Price</span>
                                                      <span class="text-secondary">€0,00</span>
                                                  </li>
  
                                                  <li class="d-flex justify-content-between py-2">
                                                      <span class="font-weight-medium">Infant Price</span>
                                                      <span class="text-secondary">€0,00</span>
                                                  </li>
  
                                                  <li class="d-flex justify-content-between py-2">
                                                      <span class="font-weight-medium">Subtotal</span>
                                                      <span class="text-secondary">€580,00</span>
                                                  </li>
  
                                                  <li class="d-flex justify-content-between py-2">
                                                      <span class="font-weight-medium">Tax</span>
                                                      <span class="text-secondary">0 %</span>
                                                  </li>
  
                                                  <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                      <span class="font-weight-bold">Pay Amount</span>
                                                      <span class="">€580,00</span>
                                                  </li>
                                              </ul>
                                              <!-- End Fact List -->
                                          </div>
                                      </div>
                                  </div>
                                  <!-- End Card -->
                              </div>
                              <!-- End Basics Accordion -->
                          </div>
                      </div>
                  </div>
              </div>
          </main>
@endsection

@section('js')

<script src="{{ asset ('Admin/js/codebase.core.min.js')}}"></script>
<script src="{{ asset ('Admin/js/codebase.app.min.js')}}"></script>
<script src="{{ asset ('Admin/js/codebase.core.min.js')}}"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{ asset ('Admin/js/codebase.app.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset ('Admin/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{ asset ('Admin/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset ('Admin/js/plugins/jquery-validation/additional-methods.js')}}"></script>

<!-- Page JS Code -->
<script src="{{ asset ('Admin/js/pages/be_forms_wizard.min.js')}}"></script>
<!-- Page JS Plugins -->

@endsection
