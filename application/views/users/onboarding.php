
                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-12 p-1">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/media/media-50.jpg" class="img-fluid rounded-pill" alt="...">
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
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="confirmed-tab" data-bs-toggle="tab"
                                                                data-bs-target="#confirm-tab-pane" type="button" role="tab"
                                                                aria-controls="confirmed-tab" aria-selected="false"><i
                                                                    class="ri-number-2 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Your Contact</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="shipped-tab" data-bs-toggle="tab"
                                                                data-bs-target="#shipped-tab-pane" type="button" role="tab"
                                                                aria-controls="shipped-tab" aria-selected="false"><i
                                                                    class="ri-number-3 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Subscribe</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="delivered-tab" data-bs-toggle="tab"
                                                                data-bs-target="#delivery-tab-pane" type="button" role="tab"
                                                                aria-controls="delivered-tab" aria-selected="false"><i
                                                                    class="ri-number-4 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Payments</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="finished-tab" data-bs-toggle="tab"
                                                                data-bs-target="#finished-tab-pane" type="button" role="tab"
                                                                aria-controls="finished-tab" aria-selected="false"><i
                                                                    class="ri-number-5 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Complete!</button>
                                                        </li>
                                                    </ul>
                                                    <div class="row">
                                                        
                                                        <?php echo validation_errors(); ?>
                                                        
                                                        <div class="col-xxl-8 col-xl-10 mx-auto">
                                                            <?php echo form_open('users/update_account'); ?>
                                                            <div class="tab-content border-lg border-0 m-0 m-lg-4" id="myTabContent">
                                                                <div class="tab-pane fade show active border-0 p-0" id="order-tab-pane" role="tabpanel"
                                                                    aria-labelledby="order-tab-pane" tabindex="0">
                                                                    <form class="p-4">
                                                                        <h5 class="text-center mb-2">eSIM Check</h5>
                                                                        <p class="mb-4 text-muted fs-16 ms-0 text-center">103 requires your phone to have eSIM support</p> 
                                                                        <a class="btn btn-primary btn-lg w-100 devicecheckButton" id="devicecheckButton" >Run a Check</a>
                                                                    </form>
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
                                                                                    <select class="js-example-placeholder-single js-states form-control" name="country">
                                                                                        <option value="Texas" selected>Texas</option>
                                                                                        <option value="Georgia">Georgia</option>
                                                                                        <option value="California">California</option>
                                                                                        <option value="Washington D.C">Washington D.C</option>
                                                                                        <option value="Virginia">Virginia</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group text-start">
                                                                                    <label class="form-label">What is your phone number</label>
                                                                                    <div class="input-group mb-3">
                                                                                        <span class="input-group-text">+1</span>
                                                                                        <input type="text" class="form-control" name="contact"
                                                                                            aria-label="Amount (to the nearest dollar)">
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                                                        <button type="submit" class="btn btn-primary">Next</button>
                                                                    </div>


                                                                </div>
                                                                    
                                                                </div>
                                                                <div class="tab-pane fade border-0 p-0" id="shipped-tab-pane" role="tabpanel"
                                                                    aria-labelledby="shipped-tab-pane" tabindex="0">
                                                                    <div class="p-4">
                                                                        <h5 class="text-start mb-2">Subscribe</h5>
                                                                        <p class="mb-4 text-muted fs-16 ms-0 text-start">This information will be used to configure your data bundles and set your preferred currency for payments.</p>
                                                                        <div class="product">
                                                                            <div class="item flex-wrap">
                                                                                <?php 
                                                                                if(isset($esims_list)){
                                                                                    print_r($esims_list);

                                                                                }
                                                                                ?>
                                                                                <div class="left flex-wrap gap-2"> <a href="javascript:void(0);" class="thumb rounded-3 mb-2"> <img src="../assets/images/ecommerce/09.jpg" alt="" class="rounded-3"> </a>
                                                                                    <div class="purchase mb-2">
                                                                                        <h6> <a href="javascript:void(0);">103 eSIM Profile</a> </h6>
                                                                                        <div class="d-flex flex-wrap  mt-2">
                                                                                            <p class="mb-4 text-muted fs-13 ms-0 text-start">Profile will be setup for iPhone 13 Pro Max</p>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div> <span class="price fs-20">$1</span>
                                                                            </div>
                                                                            <div class="item flex-wrap">
                                                                                <div class="left flex-wrap gap-2"> <a href="javascript:void(0);" class="thumb rounded-3 mb-2"> <img src="../assets/images/ecommerce/09.jpg" alt="" class="rounded-3"> </a>
                                                                                    <div class="purchase mb-2">
                                                                                        <h6> <a href="javascript:void(0);">103 eSIM Profile</a> </h6>
                                                                                        <div class="d-flex flex-wrap  mt-2">
                                                                                            <p class="mb-4 text-muted fs-13 ms-0 text-start">Profile will be setup for iPhone 13 Pro Max</p>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div> <span class="price fs-20">$20</span>
                                                                            </div>
                                                                            <p><a data-bs-toggle="modal" href="#onboard-bundleScrollable" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Pick a data bundle</a></p>
                                                                            
                                                                        </div>
                                                                        <div class="d-flex justify-content-between">
                                                                            <h5 class="text-start fw-bold mb-2">TOTAL</h5> 
                                                                            <span class="fs-20 fw-bold text-primary">$21</span> 
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
                                                                        <button type="submit" class="btn btn-primary btn-block w-100">Login</button>
                                                                    </div>
                                                                </div>

                                                                <?php echo form_close(); ?>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="row">
                                                        <form id="multiStepForm">
                                                            <!-- Step 1 -->
                                                            <div class="step active">
                                                                <h2>Step 1</h2>
                                                                <div class="form-group">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" class="form-control" id="name" required>
                                                                </div>
                                                                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                                                            </div>

                                                            <!-- Step 2 -->
                                                            <div class="step">
                                                                <h2>Step 2</h2>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" class="form-control" id="email" required>
                                                                </div>
                                                                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                                                                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                                                            </div>

                                                            <!-- Step 3 -->
                                                            <div class="step">
                                                                <h2>Step 3</h2>
                                                                <div class="form-group">
                                                                    <label for="phone">Phone</label>
                                                                    <input type="tel" class="form-control" id="phone" required>
                                                                </div>
                                                                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                            </div>
                                                        </form>

                                                        <script>
                                                            let currentStep = 0;
                                                            const steps = document.querySelectorAll(".step");

                                                            function showStep(step) {
                                                                steps.forEach((stepElement, index) => {
                                                                    stepElement.classList.toggle("active", index === step);
                                                                });
                                                            }

                                                            function nextStep() {
                                                                const currentForm = steps[currentStep].querySelector("input");
                                                                if (currentForm.checkValidity()) {
                                                                    currentStep++;
                                                                    if (currentStep >= steps.length) currentStep = steps.length - 1;
                                                                    showStep(currentStep);
                                                                } else {
                                                                    currentForm.reportValidity();
                                                                }
                                                            }

                                                            function prevStep() {
                                                                currentStep--;
                                                                if (currentStep < 0) currentStep = 0;
                                                                showStep(currentStep);
                                                            }

                                                            document.getElementById("multiStepForm").addEventListener("submit", function (e) {
                                                                e.preventDefault();
                                                                // Handle form submission
                                                                alert("Form submitted!");
                                                            });
                                                        </script>
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
                                                                                <img src="<?php echo base_url(); ?>assets/images/ecommerce/09.jpg" alt="" class="rounded-2">
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

    <script type="text/javascript">
        $('.devicecheckButton').click(function(e){
            e.preventDefault();
            boolean exists;
            //Some code
            const UserAgent = navigator.platform;
            $.ajax({
            url:"<?php echo base_url();?>index.php/users/compatibleDevices",
            method:"GET",
            success:function(response)
            {
                let obj= JSON.parse(response).data;
                let searchString = navigator.platform;

                

                obj.forEach(item => {
                    if (item.name === searchString) {
                        console.log(item); // Output the object where name matches searchString
                        //Set exists
                        exists=true;
                    }else{

                    }
                });
            }
            });
       
            // alert(navigator.platform);
            if(exists){

            }
            
        });

        // alert(getDeviceInfo().platform);

    </script>

    