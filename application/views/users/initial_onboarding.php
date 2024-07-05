<?php ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed" data-theme-mode="light">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Onboarding | 103eSIM </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url();?>/assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Css -->
    <link id="style" href="<?php echo base_url();?>/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="<?php echo base_url();?>/assets/css/styles.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="<?php echo base_url();?>/assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="<?php echo base_url();?>/assets/libs/node-waves/waves.min.css" rel="stylesheet" >

    <!-- SwiperJS Css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/libs/swiper/swiper-bundle.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/libs/choices.js/public/assets/styles/choices.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ua-parser-js/dist/ua-parser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        if(localStorage.valexdarktheme){
            document.querySelector("html").setAttribute("data-theme-mode","dark")
        }
        if(localStorage.valexrtl){
            document.querySelector("html").setAttribute("dir","rtl")
            document.querySelector("#style")?.setAttribute("href", "<?php echo base_url();?>/assets/libs/bootstrap/css/bootstrap.rtl.min.css");
        }
    </script>


</head>

<body class="landing-body">

    <!-- Start Switcher -->
    <div class="landing-page-wrapper">
            <!-- Start:: Section-2 -->
            <!-- Start:: Section-3 -->
            <div class="main-content app-content">
                <div class="container-fluid">
                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-12 p-1">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="<?php echo base_url();?>/assets/images/media/media-50.jpg" class="img-fluid rounded-pill" alt="...">
                                    </div>
                                    <h2 class="mb-2 text-center">Let's setup your profile!</h2>
                                    <h5 class="text-center text-muted fw-normal">For a better experience, ensure all information is accurate.</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-9">
                                            <div class="card shadow-none">
                                                <div class="card-body p-0 product-checkout">
                                                    <ul class="nav nav-tabs tab-style-2 d-sm-flex d-block border-bottom border-block-end-dashed justify-content-center" id="myTab1" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="order-tab" data-bs-toggle="tab"
                                                                data-bs-target="#order-tab-pane" type="button" role="tab"
                                                                aria-controls="order-tab" aria-selected="true"><i
                                                                    class="ri-number-1 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>eSIM Check</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation" id="contact-pane">
                                                            <button class="nav-link" id="confirmed-tab" data-bs-toggle="tab"
                                                                data-bs-target="#confirm-tab-pane" type="button" role="tab"
                                                                aria-controls="confirmed-tab" aria-selected="false"><i
                                                                    class="ri-number-2 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Your Contact</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation" id="subscribe-pane">
                                                            <button class="nav-link" id="shipped-tab" data-bs-toggle="tab"
                                                                data-bs-target="#shipped-tab-pane" type="button" role="tab"
                                                                aria-controls="shipped-tab" aria-selected="false"><i
                                                                    class="ri-number-3 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Subscribe</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation" id="payment-pane">
                                                            <button class="nav-link" id="delivered-tab" data-bs-toggle="tab"
                                                                data-bs-target="#delivery-tab-pane" type="button" role="tab"
                                                                aria-controls="delivered-tab" aria-selected="false"><i
                                                                    class="ri-number-4 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Payments</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation" id="comfirm-pane">
                                                            <button class="nav-link" id="finished-tab" data-bs-toggle="tab"
                                                                data-bs-target="#finished-tab-pane" type="button" role="tab"
                                                                aria-controls="finished-tab" aria-selected="false"><i
                                                                    class="ri-number-5 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Complete!</button>
                                                        </li>
                                                    </ul>
                                                    <div class="row">
                                                        <div class="col-xxl-8 col-xl-10 mx-auto">
                                                            <div class="tab-content border-lg border-0 m-0 m-lg-4" id="myTabContent">
                                                                <div class="tab-pane fade show active border-0 p-0" id="order-tab-pane" role="tabpanel"
                                                                    aria-labelledby="order-tab-pane" tabindex="0">

                                                                        <h5 class="text-center mb-2">eSIM Check</h5>
                                                                        <p class="mb-4 text-muted fs-16 ms-0 text-center">103 requires your phone to have eSIM support</p> 
                                                                        <button class="btn btn-primary btn-lg w-100" id="runDeviceCheck">Run a Check</button>
                                                                </div>
                                                                <div class="tab-pane fade border-0 p-0" id="confirm-tab-pane"
                                                                    role="tabpanel" aria-labelledby="confirm-tab-pane" tabindex="0">
                                                                    <div class="tab-pane fade show active border-0 p-0" id="order-tab-pane" role="tabpanel"
                                                                    aria-labelledby="order-tab-pane" tabindex="0">
                                                                    <div class="p-4">
                                                                        <div class="fs-15 align-items-center justify-content-between">
                                                                                <h5 class="text-start mb-2">Your Contact</h5>
                                                                                <p class="mb-4 text-muted fs-16 ms-0 text-start">This information will be used to configure your data bundles and set your preferred currency for payments.</p>
                                                                                <div class="form-group text-start">
                                                                                    <label class="form-label">What country are you currently in?</label>
                                                                                    <select class="js-example-placeholder-single js-states form-control" id="country">
                                                                                        <option value="st-1" selected>Texas</option>
                                                                                        <option value="st-2">Georgia</option>
                                                                                        <option value="st-3">California</option>
                                                                                        <option value="st-4">Washington D.C</option>
                                                                                        <option value="st-5">Virginia</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group text-start">
                                                                                    <label class="form-label">What is your phone number</label>
                                                                                    <div class="input-group mb-3">
                                                                                        <span class="input-group-text">+1</span>
                                                                                        <input type="text" class="form-control" id="contact_number"
                                                                                            aria-label="Amount (to the nearest dollar)">
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                                                        <button type="button" class="btn btn-primary" id="contact_info">Next</button>
                                                                    </div>
                                                                </div>
                                                                    
                                                                </div>
                                                                <div class="tab-pane fade border-0 p-0" id="shipped-tab-pane" role="tabpanel"
                                                                    aria-labelledby="shipped-tab-pane" tabindex="0">
                                                                    <div class="p-4">
                                                                        <h5 class="text-start mb-2">Subscribe</h5>
                                                                        <p class="mb-4 text-muted fs-16 ms-0 text-start">This information will be used to configure your data bundles and set your preferred currency for payments.</p>
                                                                        <div class="product">
                                                                            <p><a data-bs-toggle="modal" href="#onboard-bundleScrollable" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Pick a data bundle</a></p>
                                                                            <div id="simproducts"></div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between">
                                                                            <h5 class="text-start fw-bold mb-2">TOTAL</h5> 
                                                                            <span class="fs-20 fw-bold text-primary" id="amuihbt">$0</span> 
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                                        <button type="button" class="btn btn-light m-1" id="back-personal-trigger">Go Back</button>
                                                                        <button type="button" class="btn btn-primary m-1" id="continue-payment-trigger">Next</button>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade border-0 p-0" id="delivery-tab-pane" role="tabpanel"
                                                                    aria-labelledby="delivery-tab-pane" tabindex="0">
                                                                    <div class="p-4">
                                                                        <div class="">
                                                                            <h5 class="text-start mb-2">Payments</h5>
                                                                            <p class="mb-4 text-muted fs-16 ms-0 text-start">This information will be used to configure your data bundles and set your preferred currency for payments.</p>
                                                                        </div>
                                                                        <div class="card-pay">
                                                                            <ul class="tabs-menu nav">
                                                                                <li class=""><a href="#tab20" class="active" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Credit Card</a></li>
                                                                                <li><a href="#tab21" data-bs-toggle="tab" class=""><i class="fab fa-paypal"></i>  Paypal</a></li>
                                                                                <li><a href="#tab22" data-bs-toggle="tab" class=""><i class="fa fa-phone"></i>  Mobile Money</a></li>
                                                                            </ul>
                                                                            <div class="tab-content">
                                                                                <div class="tab-pane border-0 active show" id="tab20">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Name on Card</label>
                                                                                        <input type="text" class="form-control" placeholder="">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Card Number</label>
                                                                                        <div class="input-group">
                                                                                            <input type="text" class="form-control" placeholder="" aria-label="Search for..." aria-describedby="button-addon2">
                                                                                            <button class="btn btn-primary" type="button" id="button-addon2">
                                                                                                <i class="fab fa-cc-visa"></i> &nbsp;
                                                                                                <i class="fab fa-cc-amex"></i> &nbsp;
                                                                                                <i class="fab fa-cc-mastercard"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-8">
                                                                                            <div class="form-group">
                                                                                                <label class="form-label">Expiration</label>
                                                                                                <div class="input-group">
                                                                                                    <input type="number" class="form-control" placeholder="MM" name="Month">
                                                                                                    <input type="number" class="form-control" placeholder="YY" name="Year">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-4">
                                                                                            <div class="form-group">
                                                                                                <label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                                                                                <input type="number" class="form-control" required="">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <button type="button" class="btn btn-primary m-1" id="continue-finished-tab">Process Payment</button>
                                                                                </div>
                                                                                <div class="tab-pane border-0" id="tab21">
                                                                                    <p class="mt-4">Paypal is easiest way to pay online</p>
                                                                                    <p><a href="javascript:void(0);" class="btn btn-primary"><i class="fab fa-paypal"></i> Log in my Paypal</a></p>
                                                                                    <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                                                                </div>
                                                                                <div class="tab-pane border-0" id="tab22">
                                                                                    <div class="form-group mb-3">
                                                                                        <div class="form-group">
                                                                                            <label class="form-label">Enter mobile number</label>
                                                                                            <input type="text" class="form-control" placeholder="+256773332411">
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="mb-3"><strong>Note:</strong> Supported countries for this payment method include; Uganda, Rwanda, Kenya, and Tanzania. </p>
                                                                                    <button type="button" class="btn btn-primary m-1" id="continue-finished-tab">Process Payment</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="tab-pane fade border-0 p-0" id="finished-tab-pane" role="tabpanel"
                                                                    aria-labelledby="finished-tab-pane" tabindex="0">
                                                                    <div class="text-center p-4">
                                                                        <div class="">
                                                                            <h5 class="text-center mb-4">You're good to Go!</h5>
                                                                        </div>
                                                                        <svg class="wd-100 ht-100 mx-auto justify-content-center mb-3 text-center" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                                            <circle class="path circle" fill="none" stroke="#22c03c" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                                                            <polyline class="path check" fill="none" stroke="#22c03c" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                                                                        </svg>
                                                                        <p class="success pl-5 pr-5"> You will now be redirected to the Dashboard.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->
                        <div class="modal fade" id="onboard-bundleScrollable" tabindex="-1"
                                        aria-labelledby="onboard-bundleScrollable" data-bs-keyboard="false"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title" id="staticBackdropLabel1">Buy a data bundle
                                                    </h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="d-flex">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-rounded">
                                                                                <img src="<?php echo base_url();?>/assets/images/ecommerce/09.jpg" alt="" class="rounded-2">
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-2">103eSIM 1GB</h6>
                                                                            <p class="fs-13 text-muted mb-0">UGX 20,000 | Valid for 180 Days</p>
                                                                            <p><a data-bs-toggle="modal" href="#bundle-purchase2" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Additional Information</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer p-3">
                                                            <button type="button" class="btn btn-primary">Add to Order</button>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                </div>
                <div class="modal fade" id="bundle-purchase2"
                            aria-labelledby="onboard-bundleLabel2" tabindex="-1" aria-hidden="true"
                            style="display: none;">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="onboard-bundleLabel2">Additional Information
                                        </h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="main-profile-contact-list">
                                            <div class="media">
                                                <div class="feature mt-0 mb-0">
                                                    <i class="fe fe-bar-chart project bg-secondary-transparent text-dark "></i>
                                                </div>
                                                <div class="media-body">
                                                    <span>OPERATOR</span>
                                                    <div>
                                                        Airtel UG
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="feature mt-0 mb-0">
                                                    <i class="fe fe-file-text project bg-secondary-transparent text-dark "></i>
                                                </div>
                                                <div class="media-body">
                                                    <span>BUNDLE PLAN</span>
                                                    <div>
                                                        Data Only
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="feature mt-0 mb-0">
                                                    <i class="fe fe-user-check project bg-secondary-transparent text-dark "></i>
                                                </div>
                                                <div class="media-body">
                                                    <span>ACTIVATION METHOD</span>
                                                    <div>
                                                        The eSIM's validity period starts upon connecting to any of the supported networks.
                                                    </div>    
                                                </div>
                                            </div>
                                        </div><!-- main-profile-contact-list -->
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#onboard-bundleScrollable"
                                            data-bs-toggle="modal">Go Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

    </div>

    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- Popper JS -->
    <script src="<?php echo base_url();?>/assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="<?php echo base_url();?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Color Picker JS -->
    <script src="<?php echo base_url();?>/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Choices JS -->
    <script src="<?php echo base_url();?>/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Swiper JS -->
    <script src="<?php echo base_url();?>/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="<?php echo base_url();?>/assets/js/defaultmenu.min.js"></script>

    <!-- Internal Landing JS -->
    <script src="<?php echo base_url();?>/assets/js/landing.js"></script>

    <!-- Node Waves JS-->
    <script src="<?php echo base_url();?>/assets/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="<?php echo base_url();?>/assets/js/sticky.js"></script>
    <script>
      // A $( document ).ready() block.
      $( document ).ready(function() {

        let sims = [];
        let amount = 0;

        $('#contact-pane').hide();
        $('#subscribe-pane').hide();
        $('#payment-pane').hide();
        $('#comfirm-pane').hide();

        const uap = new UAParser();
        const device =uap.getResult().device.model;


        //Some code
        $.ajax({
                url:"<?php echo base_url();?>index.php/users/getEsims",
                method:"POST",
                success:function(response)
                {
                    //obj is an array of devices
                    let objj=JSON.parse(response);
                    // alert(objj.data[0]);
                    let jj=objj.data;
                    jj.forEach((element, index, array) => {
                      let price=element.simable.price;
                      let pkg = element.simable.package;
                      let pkg_id= element.simable.package_id;
                      var sim=$('<div class="item flex-wrap availablesims" id="'+pkg_id+'*'+price+'" ><div class="left flex-wrap gap-2"> <a class="thumb rounded-3 mb-2"> <img src="../assets/images/ecommerce/09.jpg" alt="" class="rounded-3"> </a><div class="purchase mb-2"><h6> <a >'+pkg+'</a> </h6><div class="d-flex flex-wrap  mt-2"><p class="mb-4 text-muted fs-13 ms-0 text-start">Profile will be setup for '+device+'</p></div></div></div> <span class="price fs-20">$'+price+'</div></span></div>');
                      $('#simproducts').append(sim);

                    });


                    
                }
        });


        $('#runDeviceCheck').click(function(e){
            e.preventDefault();


            //Some code
            $.ajax({
                    url:"<?php echo base_url();?>index.php/users/compatibleDevices",
                    method:"POST",
                    success:function(response)
                    {
                        //obj is an array of devices
                        let obj=JSON.parse(response).data;
                        
                        const names = obj.map(obj => obj.name);

                        const exists =true;
                        //  names.includes(device);
                        if(exists){
                           //show contacts tab
                           $('#contact-pane').show();
                           $('#confirmed-tab').trigger('click');
                           $('#confirm-tab-pane').addClass('active'); 
                           $('.nav-tabs a[href="#confirm-tab-pane"]').tab('show');
                           
                           $('#confirm-tab-pane').show();


                        }
                        else{
                          $('#confirm-tab-pane').hide();
                          Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Device not among supported devices"
                          });

                        }

                    }
            });
            
        });

        $('#contact_info').click(function(e){
            e.preventDefault();

            if($('#contact_number').val()!=="" && $('#country').val()!==""){
              sessionStorage.setItem('country', $('#country').val());
              sessionStorage.setItem('contact_number', $('#contact_number').val());

              //show contacts tab
              $('#subscribe-pane').show();
              $('#shipped-tab').trigger('click');
              $('#shipped-tab-pane').addClass('active'); 
              $('.nav-tabs a[href="#shipped-tab-pane"]').tab('show');
              
              $('#shipped-tab-pane').show();

            }else{
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Fill in all required fields"
              });

            }


            
        });

        //select sim card
        $('#simproducts').on('click', '.availablesims', function() {
            if(sims.includes(this.id)){

              amount-=parseFloat(this.id.split("*")[1]);
              // this.id.css('background-color', '#91f086');
              $('#amuihbt').text("$ "+amount);

            }else{
              sims.push(this.id);
              let amt = this.id.split("*")[1];
              amount+=parseFloat(amt);
              // this.id.css('background-color', '#91f086');
              $('#amuihbt').text("$ "+amount);

            }


        });

        $('#continue-payment-trigger').click(function(e){
          if (sims.length === 0){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Select Sim to Proceed !!!"
              });

          }else{
            
              //show contacts tab
              $('#payment-pane').show();
              $('#delivered-tab').trigger('click');
              $('#delivery-tab-pane').addClass('active'); 
              $('.nav-tabs a[href="#delivery-tab-pane"]').tab('show');

          }

        });


        //device check
        sessionStorage.setItem('profile', 'john_doe');


 
        //get token
        sessionStorage.setItem('profile', 'john_doe');

        //esim profile 
        sessionStorage.setItem('profile', 'john_doe');

        //payments
        sessionStorage.setItem('profile', 'john_doe');

      });
                
    </script>

</body>

</html>