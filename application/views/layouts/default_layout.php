<!DOCTYPE html>
<html>
<head>
 <!-- Meta Data -->
 <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> 103eSIM | Client Portal </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin dashboard template,admin panel html,bootstrap dashboard,admin dashboard,html template,template dashboard html,html css,bootstrap 5 admin template,bootstrap admin template,bootstrap 5 dashboard,admin panel html template,dashboard template bootstrap,admin dashboard html template,bootstrap admin panel,simple html template,admin dashboard bootstrap">
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>/assets/images/brand-logos/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Choices JS -->
    <script src="<?php echo base_url(); ?>/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="<?php echo base_url(); ?>assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="<?php echo base_url(); ?>assets/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="<?php echo base_url(); ?>assets/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="<?php echo base_url(); ?>assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/@simonwep/pickr/themes/nano.min.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>

    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>

    <!-- Choices Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/libs/choices.js/public/assets/styles/choices.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.6/platform.min.js"></script>
<!-- Jsvector Maps -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/libs/jsvectormap/css/jsvectormap.min.css">
<style>
    .containerCountry {
    display: flex;
    align-items: center;
    justify-content: center
    }

    .imgCountry {
    max-width: 100%;
    max-height:100%;
    }

    .textCountry {
    font-size: 20px;
    padding-left: 20px;
    }
    .capitalizeFirstLetter:first-letter{
        text-transform: uppercase;
    }
</style>

</head>
<body class="container-fluid">
    <!-- Loader -->
    <div id="loader" >
        <img src="<?php echo base_url(); ?>/assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
         <!-- app-header -->
         <header class="app-header">
            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">
                <!-- Start::header-content-left -->
                <div class="header-content-left">
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                <img src="<?php echo base_url(); ?>/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                <img src="<?php echo base_url(); ?>/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="<?php echo base_url(); ?>/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                                <img src="<?php echo base_url(); ?>/assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);">
                            <i class="header-icon fe fe-align-left"></i>
                        </a>
                    </div>
                    <!-- End::header-element -->
                </div>
                <!-- Start::header-content-right -->
                <div class="header-content-right">
                    <div class="header-element headerProfile-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <img src="<?php echo base_url(); ?>/assets/images/faces/6.jpg" alt="img" width="37" height="37" class="rounded-circle">
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end main-profile-menu" aria-labelledby="mainHeaderProfile">
                            <li>
                                <div class="main-header-profile bg-primary menu-header-content text-fixed-white">
                                    <div class="my-auto">
                                        <h6 class="mb-0 lh-1 text-fixed-white"><?= $user->email; ?></h6><span class="fs-11 op-7 lh-1">Premium Member</span>
                                        <br><span class="fs-11 op-7 lh-1">Balance</span>
                                        <h6 class="mb-0 lh-1 text-fixed-white"><?php

                                        $eaccount_balance = json_decode($balance);

                                        echo $eaccount_balance->data->balances->availableBalance->currency."  ".number_format($eaccount_balance->data->balances->availableBalance->amount, 2, '.', ',');; ?></h6>
                                    
                                    </div>
                                </div>
                            </li>
                            <li><a class="dropdown-item d-flex border-block-end" href="account-settings.html"><i class="bx bx-slider-alt fs-18 me-2 op-7"></i>Account Settings</a></li>
                            <li><a class="dropdown-item d-flex" href="<?php echo base_url(); ?>index.php/users/logout">
                                <i class="bx bx-log-out fs-18 me-2 op-7"></i>Sign Out</a></li>
                        </ul>
                    </div>  
                    <!-- End::header-element -->
                </div>
                <!-- End::header-content-right -->
            </div>
            <!-- End::main-header-container -->
        </header>
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.html" class="header-logo">
                    <img src="<?php echo base_url(); ?>/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="<?php echo base_url(); ?>/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="<?php echo base_url(); ?>/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    <img src="<?php echo base_url(); ?>/assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">MENU</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="<?php echo base_url(); ?>index.php/users/dashboard" class="side-menu__item">     
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                                <span class="side-menu__label">Home</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="<?php echo base_url(); ?>index.php/users/onboarding" class="side-menu__item">     
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                                <span class="side-menu__label">Onboarding</span>
                            </a>
                        </li>

                        <li class="slide">
                            <a href="<?php echo base_url(); ?>index.php/users/sim_order" class="side-menu__item">     
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                                <span class="side-menu__label">Place Sim Order</span>
                            </a>
                        </li>

                        <li class="slide">
                            <a href="<?php echo base_url(); ?>index.php/users/virtual_sim" class="side-menu__item">     
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                                <span class="side-menu__label">Virtual SIMS</span>
                            </a>
                        </li>

                        <li class="slide">
                            <a href="<?php echo base_url(); ?>index.php/purchases" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
                                <span class="side-menu__label">Payment History</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="<?php echo base_url(); ?>index.php/users/notifications" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
                                <span class="side-menu__label">Notifications</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="<?php echo base_url(); ?>index.php/users/account" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg>
                                <span class="side-menu__label">Account Settings</span>
                            </a>
                        </li>
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content" >
            <div class="container-fluid">
                
				<?= $contents ?>
            </div>


				<script src="text/javascript">

						
				</script>

				<!-- Bootstrap JS -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </div>
        <!-- End::app-content -->

        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted">© <span id="year"></span> All rights reserved  103 eSIM</a>
                    </a> 
                </span>
            </div>
        </footer>
        <!-- Footer End -->

    </div>

    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="las la-angle-double-up"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "https://webisora.com",
            width: 128,
            height: 128,
            colorDark : "#5868bf",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });
    </script>

    <script>
        $(document).ready(function() {
            
            //Get currency based on Location
            var currency="";
            var amountGG="";
            fetch('https://ip-geo-location.p.rapidapi.com/ip/check?format=json&language=en', {
                method: 'GET',
                headers: {
                    'X-RapidAPI-Key': 'faa69cb8d1msh8d0e60faf9e2500p1b5f1cjsna694579753b5',
                    'X-RapidAPI-Host': 'ip-geo-location.p.rapidapi.com',
                },
            })
                .then(response => response.json())
                .then(response => {
                    currency=response.currency.code;


                })
                .catch(err => console.error(err));

                $(".esim_details-card").click(function(e){
                    e.preventDefault();

                    var idcc = $(this).attr('id');
                    // window.location = "<?php  echo base_url(); ?>index.php/users/esim_details/"+idcc;
                    $.ajax({
                    url:"<?php echo base_url();?>index.php/users/esim_details/"+idcc,
                    method:"POST",
                    success:function(data)
                    {
                        // alert("Are you sure?");
                        window.location.href="<?php echo base_url();?>index.php/users/esim_details/"+idcc;

                    }
                    });

                });


                $(".esim_details-usage").click(function(e){
                    e.preventDefault();

                    var idcc = $(this).attr('id');
                    // window.location = "<?php  echo base_url(); ?>index.php/users/esim_details/"+idcc;
                    $.ajax({
                    url:"<?php echo base_url();?>index.php/users/esim_usage/"+idcc,
                    method:"POST",
                    success:function(data)
                    {
                        // alert("Are you sure?");
                        window.location.href="<?php echo base_url();?>index.php/users/esim_usage/"+idcc;

                    }
                    });

                });

                $(".esim_topups").click(function(e){
                    e.preventDefault();

                    var idcc = $(this).attr('id');
                    // window.location = "<?php  echo base_url(); ?>index.php/users/esim_details/"+idcc;
                    $.ajax({
                    url:"<?php echo base_url();?>index.php/users/esim_top_ups/"+idcc,
                    method:"POST",
                    success:function(data)
                    {
                        // alert("Are you sure?");
                        window.location.href="<?php echo base_url();?>index.php/users/esim_top_ups/"+idcc;

                    }
                    });

                });


                $(".esim_package_history").click(function(e){
                    e.preventDefault();

                    var idcc = $(this).attr('id');
                    // window.location = "<?php  echo base_url(); ?>index.php/users/esim_details/"+idcc;
                    $.ajax({
                    url:"<?php echo base_url();?>index.php/users/esim_package_history/"+idcc,
                    method:"POST",
                    success:function(data)
                    {
                        // alert("Are you sure?");
                        window.location.href="<?php echo base_url();?>index.php/users/esim_package_history/"+idcc;

                    }
                    });

                });

                $(".qrcode_generate").click(function(e){
                    e.preventDefault();

                    var idcc = $(this).attr('id');
                    // window.location = "<?php  echo base_url(); ?>index.php/users/esim_details/"+idcc;
                    $.ajax({
                    url:"<?php echo base_url();?>index.php/users/instructions/"+idcc,
                    method:"POST",
                    success:function(data)
                    {
                        // alert("Are you sure?");
                        window.location.href="<?php echo base_url();?>index.php/users/esim_package_history/"+idcc;

                    }
                    });

                });

                


            $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract info from data-* attributes
            var title = button.data('title');
            var country = button.data('country');
            var countryCurrency = currency;
            console.log("hshsjsjssjs",currency);
            var networks = button.data('networks');
            var validity = button.data('validity');
            var price = button.data('price');
            var modal = $(this);
            
            //currency converter api
            fetch('https://currency-converter5.p.rapidapi.com/currency/convert?format=json&from=USD&to='+currency+'&amount='+price+'&language=en', {
                method: 'GET',
                headers: {
                    'X-RapidAPI-Key': 'faa69cb8d1msh8d0e60faf9e2500p1b5f1cjsna694579753b5',
                    'X-RapidAPI-Host': 'currency-converter5.p.rapidapi.com',
                },
            })
                .then(response => response.json())
                .then(response => {
                    amountGG =eval('response.rates.'+currency+'.rate_for_amount');
                    modal.find('.modal-body #modal-price').text(Math.round(amountGG));
                    

                })
                .catch(err => console.error(err));



            var bundle = button.data('bundle');
            var plan_type= button.data('plan-type');
            var activation = button.data('activation');
            var country = button.data('country');
            var description = button.data('description');

            // Update the modal's content.
            
            modal.find('.modal-title').text(title);
            modal.find('.modal-body #modal-id').text(id);
            modal.find('.modal-body #modal-title').text(title);
            modal.find('.modal-body #modal-country').text(country);
            modal.find('.modal-body #modal-currency').text(countryCurrency);
            
            modal.find('.modal-body #modal-networks').text(networks);
            modal.find('.modal-body #modal-bundle').text(bundle);
            modal.find('.modal-body #modal-validity').text(validity);
            modal.find('.modal-body #modal-plan').text(plan_type);
            modal.find('.modal-body #modal-activation').text(activation);
            modal.find('.modal-body #modal-description').text(description);
            });


            });

            



        document.getElementById("buyButton").addEventListener("click", (e) => {
            e.preventDefault();

            const amount = document.getElementById("modal-price").innerText;
            const currency = document.getElementById("modal-currency").innerText;
            
        

            const PBFKey = "FLWPUBK-3f7c394d34b7d9b81a5ea5e304e94e96-X"; // paste in the public key from your dashboard here
            const txRef = ''+Math.floor((Math.random() * 1000000000) + 1); //Generate a random id for the transaction reference
            const email = "paulalex.otim@outlook.com";//document.getElementById('email').value;
            const phone = "+256702094458"; //document.getElementById('phone').value;
            



            
           

            // getpaidSetup is Rave's inline script function. it holds the payment data to pass to Rave.
        getpaidSetup({
            PBFPubKey: PBFKey,
            customer_email: email,
            amount: amount,
            customer_phone: phone,
            payment_options: "card, account, ussd, qr, mpesa, mobilemoneyghana, mobilemoneyuganda, mobilemoneyrwanda, mobilemoneyzambia. mobilemoneytanzania, barter, bank transfer, wechat",
            currency: currency,  // Select the currency. leaving it empty defaults to NGN
            txref: txRef, // Pass your UNIQUE TRANSACTION REFERENCE HERE.
            meta: [{
                metaname: "esimPurchaseBundleID",
                metavalue: "esimPurchase1234"
            }],
            onclose: function() {},
            callback: function(response) {
                flw_ref = response.tx.flwRef;// collect flwRef returned and pass to a server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if(response.tx.chargeResponse =='00' || response.tx.chargeResponse == '0') {
                // redirect to a success page
                } else {
                // redirect to a failure page.
                }
            }
          });
        });
    </script>

    <script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
    <script type="text/javascript">




    document.addEventListener("DOMContentLoaded", (event) => {
        // Add an event listener for when the user clicks the submit button to pay
        
    });
    </script>
    <!-- Popper JS -->
    <script src="<?php echo base_url(); ?>assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="<?php echo base_url(); ?>assets/js/defaultmenu.min.js"></script>

    <!-- Node Waves JS-->
    <script src="<?php echo base_url(); ?>assets/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="<?php echo base_url(); ?>assets/js/sticky.js"></script>

    <!-- Simplebar JS -->
    <script src="<?php echo base_url(); ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/simplebar.js"></script>

    <!-- Color Picker JS -->
    <script src="<?php echo base_url(); ?>assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

    
    <!-- Apex Charts JS -->
    <script src="<?php echo base_url(); ?>assets/libs/apexcharts/apexcharts.min.js"></script>
    
    <!-- JSVector Maps JS -->
    <script src="<?php echo base_url(); ?>assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    
    <!-- JSVector Maps MapsJS -->
    <script src="<?php echo base_url(); ?>assets/libs/jsvectormap/maps/world-merc.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/us-merc-en.js"></script>

    <!-- Chartjs Chart JS -->
    <script src="<?php echo base_url(); ?>assets/js/index.js"></script>
    
    <!-- Custom-Switcher JS -->
    <script src="<?php echo base_url(); ?>/assets/js/custom-switcher.min.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script>
      feather.replace();
    </script>

</body>
</html>