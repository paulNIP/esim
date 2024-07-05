
<!-- Start::row-1 -->
<div class="row">
    <br>
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Local eSims</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Regional eSims</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Global eSim</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row">
        <?php 
                $json_arr = json_decode($local);
                
                    // Loop through the data array
                    foreach ($json_arr->data as $item) {

                        ?>
                    
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 country-card" id="<?php echo $item->country_code; ?>" 
                    data-array="<?php echo htmlspecialchars(json_encode($item->operators))?>">
                                <div class="card">
                                    <div class="card-body iconfont text-start">
                                        <div class="row">
                                            <div class="col-xxl-2 col-lg-2 col-md-2 col-sm-2">
                                        <img src="<?php echo $item->image->url; ?>" 
                                        alt="<?php echo $item->title; ?>" width="70" height="28" class="shadowed-small lazyLoad isLoaded" data-v-60cd3624="">
                                             </div>
                                             <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-8">
                                        <h4 class="card-title mb-3"><?php echo $item->title; ?></h4>
                                        </div>

                                        <div class="col-xxl-2 col-lg-2 col-md-2 col-sm-2">
                                            <i data-feather="chevron-down"> </i>
                    </div>
                                        </div>
  
                                                <br/>
                                               
                                              
                                    </div>
                                    
                                </div>
                            </div>
                    <?php
                    }
                
                ?>
            </div>
   
        
        </div>



        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row">
                <?php 
                $json_arr = json_decode($global);
                
                    // Loop through the data array
                    foreach ($json_arr->data as $item) {
                        ?>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12  region-card" id="<?php echo $item->title; ?>">
                                <div class="card">
                                    <div class="card-body iconfont text-start">
                                        <div class="row">
                                            <div class="col-xxl-2 col-lg-2 col-md-2 col-sm-2">
                                        <img src="<?php echo $item->image->url; ?>" 
                                        alt="<?php echo $item->title; ?>" width="70" height="28" class="shadowed-small lazyLoad isLoaded" data-v-60cd3624="">
                                             </div>
                                             <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-8">
                                        <h4 class="card-title mb-3"><?php echo $item->title; ?></h4>
                                        </div>

                                        <div class="col-xxl-2 col-lg-2 col-md-2 col-sm-2">
                                            <i data-feather="chevron-down"> </i>
                    </div>
                                        </div>
  
                                                <br/>
                                               
                                              
                                    </div>
                                    
                                </div>
                            </div>
                    <?php
                    }
                
                ?>
            </div>
            
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
                <?php 
                $json_arr = json_decode($global);
                
                    // Loop through the data array
                    foreach ($json_arr->data as $item) {

                        foreach ( $item->operators as $item2){
                            // print_r(sizeof($item2->countries)."<br>");
                            foreach($item2->packages as $pkg){ ?>
                                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12" >
                                <div class="card">
                                    <div class="card-body iconfont text-start">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title mb-3"><?php echo $pkg->id ?></h4>
                                        </div>

                                                <small class="mb-0  text-muted"><i data-feather="globe"></i> COVERAGE<span
                                                        class="float-end text-muted"><?php echo sizeof($item2->countries)?> COUNTRIES</span></small><br>

                                                        <hr>
                                                <small class="mb-0  text-muted"><i data-feather="wifi"> </i> DATA<span
                                                class="float-end text-muted"><?php echo $pkg->data?> </span></small><br>
                                                <hr>


                                                <small class="mb-0  text-muted"><i data-feather="phone-call"> </i> CALLS<span
                                                class="float-end text-muted"><?php $pkg->voice ?> Mins</span></small><br>
                                                <hr>


                                                <small class="mb-0  text-muted"><i data-feather="message-square"> </i> TEXTS<span
                                                class="float-end text-muted"><?php echo $pkg->text ?> SMS</span></small><br>
                                                <hr>

    
                                                <small class="mb-0  text-muted"><i data-feather="calendar"> </i> VALIDITY<span
                                                class="float-end text-muted"><?php echo $pkg->day ?> Days</span></small><br>
                                                <hr>

                                                <small class="mb-0  text-muted"><i data-feather="tag"> </i> PRICE<span
                                                class="float-end text-muted">$ <?php echo $pkg->price ?> USD</span></small><br>
                                                
                                                <br/>
                                                <button class="btn btn-primary btn-block w-100 buy-esim" id="<?php echo $pkg->id ?>">BUY NOW</button>

                                                <a type="button" class="btn btn-primary btn-block w-100" data-toggle="modal" data-target="#esimOrderModal" 
    data-package_id="<?php echo $pkg->id?>"
    data-type="sim" 
    data-description="This is a sample description."

    
    >
    BUY NOW
                            </a>
                                              
                                    </div>
                                    
                                </div>
                            </div>
                        <?php
                            }

                        }
                    }
                
                ?>
            </div>


            
        </div>
    </div>
        
        
</div>


        <!--End::row-1 -->

                                <!-- Modal structure -->
    <div class="modal fade" id="esimOrderModal" tabindex="-1" role="dialog" aria-labelledby="esimOrderModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="main-profile-contact-list">
                <div class="media">
                    <div class="media-body">
                        <span>PACKAGE</span>
                        <div>
                        <input class="form-control" name="package_id" id="package_id"
                                                        value="Enter your password" type="text" readonly>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body">
                        <span>QUANTITY</span>
                        <div>
                        <input class="form-control" name="quantity" id="quantity"
                                                        value="Enter your password" type="number" >
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body">
                        <span>TYPE</span>
                        <div>
                            <div style="float:left;">
                                
                            <input class="form-control" name="type" id="type"
                                                        value="sim" type="text" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body">
                        <span>DESCRIPTION</span>
                        <div>
                            <div style="float:left;">
                                <textarea class="form-control" id="description" rows="3">
                                    
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body">
                        <span>INFO</span>
                        <div>
                           <div style="float:left;">
                                <span style="display:inline; ">This eSIM doesn't come with a phone number.</span>
                            </div>
                        </div>
                    </div>
                </div>

               
            




            </div><!-- main-profile-contact-list -->
                                    
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="buyEsimButton">BUY NOW</button>
          </div>
        </div>
      </div>
    </div>
    
        <script type="text/javascript">

          $('#esimOrderModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('package_id'); // Extract info from data-* attributes
            var description = button.data('description');
            var modal2 = $(this);

            // Update the modal's content.
            modal2.find('.modal-body #package_id').val(id);
            modal2.find('.modal-body #description').val(description);

            });



            $("#buyEsimButton").click(function(e){
                e.preventDefault()
                var pkg=$('#package_id').val();
                var qty=$('#quantity').val();
                var type=$('#type').val();
                var description=$('#description').val();
                var obj={
                    package_id:pkg,
                    quantity:qty,
                    description:description,
                    type:type
                };

                $.ajax({
                url:"<?php echo base_url();?>index.php/users/submit_order",
                data:obj,
                method:"POST",
                success:function(data)
                {
                    alert(data);
                    
                }
                });


            });


            $(".country-card").click(function(e){
                    e.preventDefault();

                    var country = this.id;

                    $.ajax({
                    url:"<?php echo base_url();?>index.php/users/get_country_sims/"+country,
                    method:"POST",
                        success:function(response)
                        {
                            window.location.href="<?php echo base_url();?>index.php/users/get_country_sims/"+country;

                        }
                    });

                });

                $(".region-card").click(function(e){
                    e.preventDefault();

                    var region = this.id;

                    $.ajax({
                    url:"<?php echo base_url();?>index.php/users/get_region_sims/"+region,
                    method:"POST",
                        success:function(response)
                        {
                            window.location.href="<?php echo base_url();?>index.php/users/get_region_sims/"+region;

                        }
                    });

                });
    
    
        </script>
    