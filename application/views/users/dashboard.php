<style>

.vodiapicker{
  display: none; 
}

#a{
  padding-left: 0px;
}

#a img, .btn-select img{
  width: 12px;
  
}

#a li{
  list-style: none;
  padding-top: 5px;
  padding-bottom: 5px;
}

#a li:hover{
 background-color: #F4F3F3;
}

#a li img{
  margin: 5px;
}

#a li span, .btn-select li span{
  margin-left: 30px;
}

/* item list */

.b{
  display: none;
  width: 100%;
  max-width: 350px;
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  border: 1px solid rgba(0,0,0,.15);
  border-radius: 5px;
  
}

.open{
  display: show !important;
}

.btn-select{
  margin-top: 10px;
  width: 100%;
  max-width: 350px;
  height: 34px;
  border-radius: 5px;
  background-color: #fff;
  border: 1px solid #ccc;
 
}
.btn-select li{
  list-style: none;
  float: left;
  padding-bottom: 0px;
}

.btn-select:hover li{
  margin-left: 0px;
}

.btn-select:hover{
  background-color: #F4F3F3;
  border: 1px solid transparent;
  box-shadow: inset 0 0px 0px 1px #ccc;
  
  
}

.btn-select:focus{
   outline:none;
}

.lang-select{
  margin-left: 50px;
}


</style>
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div>
                        <h3 class="mb-1">Welcome <?= $user->email; ?></h3>
                        <h6 class="fs-14 mb-1 text-muted">Country Profile: UGANDA</h6>
                    </div>
                </div>
                <!-- End Page Header -->
                <div class="row">


                    <?php 
                        $esims = json_decode($esims_list_response);
                        
                        // Loop through the data array
                        foreach ($esims->data as $esim_item) {
                            ?>

                            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body iconfont text-start">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title mb-3">DATA BALANCE</h4>
                                        </div>
                                        <div class="d-flex mb-0">
                                            <div>
                                                <h4 class="mb-1 fw-bold">15.8GB<span
                                                        class="text-dark fs-13 ms-2">/20GB</span></h4>
                                                
                                            </div>
                                            <div class="card-chart bg-success-transparent rounded-circle ms-auto mt-0">
                                                <i class="typcn typcn-group-outline text-success fs-24"></i>
                                            </div>
                                        </div>

                                        <div class="d-flex mb-0">
                                            <div>
                                                <h4 class="mb-1 fw-bold">15.8GB<span
                                                        class="text-dark fs-13 ms-2">/20GB</span></h4>
                                                
                                            </div>
                                            <div class="card-chart bg-success-transparent rounded-circle ms-auto mt-0">
                                                <div id="qrcode"></div>
                                            </div>
                                        </div>

                                        <div class="progress progress-xs mb-1" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 80%">
                                            </div>
                                        </div>
                                        <small class="mb-0  text-muted">Remaining<span
                                                class="float-end text-muted">70%</span></small>

                                              
                                    </div>
                                      <!-- <div class="card-footer p-3"> -->
                                      <a type="button" class="fs-14 mb-0 text-primary esim_details-card"  
                                                    id="<?php echo $esim_item->iccid;?>" 
                                                >
                                                e-Sim details 
                                                </a>

                                                 <!-- <div class="card-footer p-3"> -->
                                                 <a type="button" class="fs-14 mb-0 text-primary esim_details-usage"  
                                                    id="<?php echo $esim_item->iccid;?>" 
                                                >
                                                e-Sim usage details 
                                                </a>

                                                <a type="button" class="fs-14 mb-0 text-primary esim_topups"  
                                                    id="<?php echo $esim_item->iccid;?>" 
                                                >
                                                e-Sim top up details 
                                                </a>

                                                <a type="button" class="fs-14 mb-0 text-primary esim_package_history"  
                                                    id="<?php echo $esim_item->iccid;?>" 
                                                >
                                                e-Sim package history
                                                </a>
                                                <a type="button" class="fs-14 mb-0 text-primary qrcode_generate"  
                                                    id="<?php echo $esim_item->iccid;?>" 
                                                >
                                                    Generate QR Code
                                                </a>
                                                <a type="button" class="fs-14 mb-0 text-primary"  
                                                    id="<?php echo $esim_item->iccid;?>" data-toggle="modal" data-target="#topupModal"
                                                >
                                                    Top Up
                                                </a>
                                </div>
                            </div>



                       <?php }
                        
                    ?>



                </div>
                <!-- End::row-5 -->


                 <!-- Start::row-9 -->
                 <h5 class="mb-3">Buy a new bundle</h5>
                 <div class="row">


                    <?php 
                $json_arr = json_decode($esim_package_list);
                
                 // Loop through the data array
                foreach ($json_arr->data as $item) {
                    // echo "slug: " . $item->slug . "\n";
                    // echo "country_code: " . $item->country_code . "\n";
                    // echo "title: " . $item->title. "\n";
                    // echo "image width: " . $item->image->width. "\n";
                    // echo "image height: " . $item->image->height. "\n";
                    // echo "image url " . $item->image->url. "\n";



                    foreach ( $item->operators as $item2){
                        // echo "slug: " . $item->slug . "\n";

                        // echo "style opertor: " . $item2->style . "\n";
                        // echo "style: " . $item2->style . "\n";
                        // echo "gradient_start: " . $item2->gradient_start . "\n";
                        // echo "gradient_end: " . $item2->gradient_end . "\n";
                        // echo "type: " . $item2->type . "\n";
                        // echo "is_prepaid: " . $item2->is_prepaid . "\n";
                        // echo "title: " . $item2->title . "\n";
                        // echo "esim_type: " . $item2->esim_type . "\n";
                        // echo "warning: " . $item2->warning . "\n";
                        // echo "apn_type: " . $item2->apn_type . "\n";
                        // echo "apn_value: " . $item2->apn_value . "\n";
                        // echo "is_roaming: " . $item2->is_roaming . "\n";
                        // echo "-----------------------------------------" . $item2->is_roaming . "\n";
                        // echo "is_roaming: " . $item2->is_roaming . "\n";

                        foreach ( $item2->countries as $item4){ ?>
                        <!-- <div class="containerCountry">
                        <div class="imageCountry">
                            <img src=<?php //echo $item4->image->url; ?>>
                        </div>
                        <div class="textCountry">
                            <h1><?php //echo $item4->title; ?></h1>
                            <h4><?php //echo $item4->country_code; ?></h4>
                        </div>
                        </div> -->
                        
                        <?php

                        }

                        foreach ( $item2->coverages as $item6){
                            $networks="";
                            foreach($item6->networks as $item7){
                                $networks .=" | ".$item7->name;
                            }
    
                        }

                        // packages
                        foreach ( $item2->packages as $item3){

                            // echo "id: " .$item3->id;
                            // echo "type: " .$item3->type;
                            // echo "price: " .$item3->price;
                            // echo "amount: " .$item3->amount;
                            // echo "day: " .$item3->day;
                            // echo "is_unlimited: " .$item3->is_unlimited;
                            // echo "title: " .$item3->title;
                            // echo "data: " .$item3->data;
                            // echo "short_info: " .$item3->short_info;
                            // // echo "qr_installation: " .$item3->qr_installation;
                            // // echo "manual_installation: " .$item3->manual_installation;
                            // echo "voice: " .$item3->voice;
                            // echo "text: " .$item3->text;
                            // echo "net_price: " .$item3->net_price;

                            

                            { ?>
                               
                                <div class="col-lg-6 col-xl-4 col-md-12 col-sm-12 p-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <span class="avatar avatar-rounded">
                                                    <img src="<?php echo $item4->image->url;?>" alt="img">
                                                </span>
                                            </div>
                                            <div>
                                                <h6 class="mb-2"><?php echo $item3->title;?></h6>
                                                <p class="fs-13 text-muted mb-0"> $<?php echo $item3->price?> | <?php echo $item3->day?> Days </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-3">

                                <!-- Button to Open the Modal -->
                                <!-- Button to trigger modal -->
    <a type="button" class="fs-14 mb-0 text-primary" data-toggle="modal" data-target="#exampleModal" 
    data-id="145044" data-title="<?php echo $item3->title;?>" data-description="This is a sample description."
    data-country="<?php echo $item->title;?>"
    data-networks="<?php echo $networks;?>"
    data-price="<?php echo $item3->price;?>"
    data-validity="<?php echo $item3->day;?>"
    data-plan-type="<?php echo $item2->plan_type;?>"
    data-bundle="<?php echo $item3->data;?>"
    
    
    >
    Buy Now
                            </a>

                            </div>
                        </div>
                    </div>

                                <?php
                            }
                        }

                    }


                    
                }
                
                 ?>


                        <!-- Modal structure -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><span id="modal-title"></span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="main-profile-contact-list">
                <div class="media">
                    <div class="feature mt-0 mb-0">
                        <i class="fe fe-globe project bg-secondary-transparent text-dark "></i>
                    </div>
                    <div class="media-body">
                        <span>COVERAGE</span>
                        <div>
                        <span id="modal-country"></span>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="feature mt-0 mb-0">
                        <i class="fe fe-box project bg-secondary-transparent text-dark "></i>
                    </div>
                    <div class="media-body">
                        <span>BUNDLE</span>
                        <div>
                           <span id="modal-bundle"></span>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="feature mt-0 mb-0">
                        <i class="fe fe-credit-card project bg-secondary-transparent text-dark "></i>
                    </div>
                    <div class="media-body">
                        <span>PRICE</span>
                        <div>
                            <div style="float:left;">
                                
                                <span style="display:inline; " id="modal-currency"></span>
                                <span style="display:inline; " id="modal-price"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="feature mt-0 mb-0">
                        <i class="fe fe-clock project bg-secondary-transparent text-dark "></i>
                    </div>
                    <div class="media-body">
                        <span>VALIDITY</span>
                        <div>
                           <div style="float:left;">
                                <span style="display:inline; " id="modal-validity"></span>
                                <span style="display:inline; ">Days</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="feature mt-0 mb-0">
                        <button type="button" class="btn btn-link btn-wave" 
                        data-toggle="collapse" data-target="#demo">Additional Information</button>
                    </div>
                </div>
               
            <div id="demo" class="collapse">
                    <div class="media">
                        <div class="feature mt-0 mb-0">
                            <i class="fe fe-bar-chart project bg-secondary-transparent text-dark "></i>
                        </div>
                        <div class="media-body">
                            <span>OPERATOR</span>
                            <div>
                                <span id="modal-networks"></span>
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
                            <span id="modal-plan" class="capitalizeFirstLetter"></span>
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
                                <span id="modal-activation"></span>
                            </div>    
                        </div>
                    </div>
            </div>




            </div><!-- main-profile-contact-list -->
                                    
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="buyButton">BUY NOW</button>
          </div>
        </div>
      </div>
    </div>


                 
                 
                 <!-- Start::row-2 -->
                 <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div>
                        <h4 class="mb-2">Pick another country</h4>
                        <h6 class="fs-14 mb-1 text-muted">Your existing network profiles and data packages will be updated to this new selection.</h6>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-6">
                        <div class="card text-center" class="btn btn-primary" id="alert-confirm">
                            <div class="card-body">
                                <div class="feature widget-2 text-center mt-0 mb-3" >
                                    <span class="avatar avatar-xl me-2">
                                        <img src="<?php echo base_url(); ?>/assets/images/faces/8.jpg" alt="img">
                                    </span>
                                </div>
                                <h6 class="fs-14 mb-1 text-muted">Available</h6>
                                <h5 class="fw-semibold">Kenya</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-6">
                        <div class="card text-center">
                            <div class="card-body ">
                                <div class="feature widget-2 text-center mt-0 mb-3">
                                    <span class="avatar avatar-xl me-2">
                                        <img src="<?php echo base_url(); ?>/assets/images/faces/8.jpg" alt="img">
                                    </span>
                                </div>
                                <h6 class="fs-14 mb-1 text-muted">Coming Soon</h6>
                                <h5 class="fw-semibold">Tanzania</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-6">
                        <div class="card text-center">
                            <div class="card-body ">
                                <div class="feature widget-2 text-center mt-0 mb-3">
                                    <span class="avatar avatar-xl me-2">
                                        <img src="<?php echo base_url(); ?>/assets/images/faces/8.jpg" alt="img">
                                    </span>
                                </div>
                                <h6 class="fs-14 mb-1 text-muted">Coming Soon</h6>
                                <h5 class="fw-semibold">Rwanda</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-6">
                        <div class="card text-center">
                            <div class="card-body ">
                                <div class="feature widget-2 text-center mt-0 mb-3">
                                    <span class="avatar avatar-xl me-2">
                                        <img src="<?php echo base_url(); ?>/assets/images/faces/8.jpg" alt="img">
                                    </span>
                                </div>
                                <h6 class="fs-14 mb-1 text-muted">Coming Soon</h6>
                                <h5 class="fw-semibold">Sudan</h5>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
                <!-- End::row-8 -->
                
            </div>
<!-- 


    </div> -->

    <!-- Modal -->
    <div class="modal fade" id="topupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Airalo eSIM Topup Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">                          

            <label for="package_id">Package</label><br>

        <select  id="package_id" name="package_id" >
            <?php 
                $json_arr = json_decode($esim_package_list);

                foreach ($json_arr->data as $item) {
                    foreach ( $item->operators as $item2){
                        // packages
                        foreach ( $item2->packages as $item3){
                            { ?>
                            <option value="<?php echo $item3->id;?>" data-thumbnail="<?php echo $item4->image->url;?>"><?php echo $item3->title;?></option>

                            <?php
                            }
                        }
                    } 
                }   
            ?>
        </select>


            <?php 
              if(isset($topup)){
                print_r($topup);
              }
            ?>
            <label for="iccid">ICCID:</label><br>
            <input type="text" id="iccid" name="iccid" value="89340000000000872"><br>
            <label for="description">Description:</label><br>
            <input type="text" id="description" name="description" value="Example description to identify the order"><br><br>
            <!-- <input type="submit" value="Submit"> -->


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="topup">Top Up</button>
        </div>
        </div>
    </div>
    </div>

    


    <script type="text/javascript">
        
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "https://webisora.com",
            width: 128,
            height: 128,
            colorDark : "#5868bf",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });

        //test for getting url value from attr
// var img1 = $('.test').attr("data-thumbnail");
// console.log(img1);



$("#topup").click(function(){
        var pkg=$('#package_id').val();
        var iccid=$('#iccid').val();
        var description=$('#description').val();
        alert(pkg);

        $.ajax({
        url:"<?php echo base_url();?>index.php/users/topup",
        data:{package_id:$('#package_id').val(),iccid:$('#iccid').val(),description:$('#description').val()},
        method:"POST",
        success:function(data)
        {
            console.log(data);
        }
        });


    });






    </script>

    