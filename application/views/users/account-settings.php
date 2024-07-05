<?php print_r($user);?>
<!-- Start::row-1 -->
    <div class="row">
        <div class="col-lg-8 col-xl-9">
            <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label for="validationServer01" class="form-label">First
                                    name</label>
                                <input type="text" class="form-control is-valid"
                                    id="validationServer01" value="Joseph" required>
                                <!-- <div class="valid-feedback">
                                    Looks good!
                                </div> -->
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer02" class="form-label">Last
                                    name</label>
                                <input type="text" class="form-control is-valid"
                                    id="validationServer02" value="Ocen" required>
                                <!-- <div class="valid-feedback">
                                    Looks good!
                                </div> -->
                            </div>
                            <div class="col-md-4">
                                <label for="validationServerUsername"
                                    class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                    <input type="text" class="form-control is-invalid"
                                        id="validationServerUsername" value="<?php echo $user->email;?>"
                                        aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"
                                        required>
                                    <!-- <div id="validationServerUsernameFeedback"
                                        class="invalid-feedback">
                                        Verify email
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer04" class="form-label">Password</label>
                                <input type="password" class="form-control" id="form-password" placeholder="">
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer04" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="form-password" placeholder="">
                                <!-- <div id="validationServer04Feedback" class="invalid-feedback">
                                    Please select a valid state.
                                </div> -->
                            </div>


                            <div class="col-md-4">
                                <label for="validationServer04" class="form-label">Country</label>
                                <select class="form-select is-invalid" id="validationServer04"
                                    aria-describedby="validationServer04Feedback" value="Uganda" required>
                                    <option selected disabled value="">Uganda</option>
                                    <option>Rwanda</option>
                                    <option>Kenya</option>
                                    <option>Tanzania</option>
                                </select>
                                <!-- <div id="validationServer04Feedback" class="invalid-feedback">
                                    Please select a valid state.
                                </div> -->
                                
                            </div>
                            <br>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                <button class="btn btn-primary" id="request-token">Request Token</button>
                            </div>
                        </form>

                        <?php
                            if(isset($token)){
                                print_r($token);
                            }
                        ?>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    <!--End::row-1 -->

    <script>
        $("#request-token").click(function(e){
            e.preventDefault();
            $.ajax({
            url:"<?php echo base_url();?>index.php/users/get_access_token",
            method:"POST",
            success:function(data)
            {
                alert(data);
            }
            });


        });

    </script>
