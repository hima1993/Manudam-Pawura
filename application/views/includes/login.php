<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-dialog" style="width: 800px;" role="document">
                    <div class="modal-content modal-info col-md-12" id="grad1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body" >
                           
                                    <div id="expand" class="col-md-6 " style="margin-top: 10px;">
                                     
                                        <h3 class=" w3-lobster w3-xxxlarge rainbow"><b>Sign up for free...!!</b></h3>
                                        <br>
                                        <div class="wizard">


                                         <div class="wizard-inner">


                                        <ul class="nav nav-tabs"  role="tablist">


                                            <li role="presentation" class="active"><a class="w3-lobster" href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1"><b>Login Info</b></a></li>
                                            <li role="presentation"><a class="w3-lobster" href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2"><b>Account Info</b></a></li>
                                        </ul>


                                        </div>



                                        <?php echo form_open_multipart('User/RegisterUser'); ?>
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="step1">
                                                
                                               
                                           
                                            <div class="form-group" style="margin-top:22px; ">
                                            


                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                                </div>

                                                
                                            </div>
                                             <div class="form-group" style="margin-top:10px; ">
                                            


                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input id="password-field" type="password" class="form-control pwd" name="password" placeholder="Password">
                                                     <span class="input-group-btn">
                                                        <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                                      </span>
                                                </div>

                                                
                                            </div>

                                            <div class="form-group" style="margin-top:10px; ">
                                            


                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input  type="password" class="form-control pwd1" name="Confirmpassword" placeholder="Password">
                                                     <span class="input-group-btn">
                                                        <button class="btn btn-default reveal1" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                                      </span>
                                                </div>

                                                
                                            </div>
                                               
                                            </div>
                                           
                                            <div class=" pull-right">


                                                <a role="button" id="next" class="next-step"><b>Next >>></b></a>
                                                
                                            </div>
                                        
                                             </div>


                                        <div class="tab-pane col-md-12" role="tabpanel" id="step2" >
                                            <div class="step2">

                                                <div class="col-md-6">

                                                <div class="form-group" style="margin-top:10px; ">
                                            
                                             
                                                
                                            
                    <label class="switch"><input name="togbutton"   class="form-control" type="checkbox" id="togBtn" onclick="myFunction();"><div class="slider round"><!--ADDED HTML --><span class="on">Join As Donor</span><span class="off" >Join As Recipient</span><!--END--></div></label>


                                                <div class="message1"><span>Join As a Donor<small></small></span></div>
                                                <div class="message2"><span>For join as a Recipient You should <b>attach a proper validity recommendation </b><small></small></span></div>




                                                
                                            </div>
                                             <div class="form-group" style="margin-top:10px; ">
                                            


                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input id="email" type="text" class="form-control" name="firstname" placeholder="First Name">
                                                </div>


                                                
                                            </div>

                                            <div class="form-group" style="margin-top:10px; ">
                                            


                                            
                                               <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input id="email" type="text" class="form-control" name="lastname" placeholder="Last Name">
                                                </div>

                                                
                                            </div>

                                            <div class="form-group" style="margin-top:10px; ">
                                            


                                            
                                               <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                    <input id="email" type="text" class="form-control" name="contactnumber" placeholder="Contact Number">
                                                </div>

                                                
                                            </div>

                                            <div class=" pull-left">


                                                <a role="button" id="prev" class="prev-step"><b><<< Prev</b></a>
                                                
                                            </div>

                                        </div>

                                        

                                        <div class="col-md-6">




                                            <div class="form-group" style="margin-top:10px; ">
                                            


                                            
                                               <div class="input-group" id="attch">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                                                    <input id="filechoose" type="file" class="form-control" name ="file_name" placeholder="Attached your Recommendation..">
                                                </div>

                                                
                                            </div>


                                            <div class="form-group" style="margin-top:10px; ">
                                            


                                            
                                               <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                    <input id="email" type="text" class="form-control" name="addresslineone" placeholder="Address Line One">
                                                </div>

                                                
                                            </div>



                                            <div class="form-group" style="margin-top:10px; ">
                                            


                                            
                                               <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                    <input id="email" type="text" class="form-control" name="addresslinetwo" placeholder="Address Line Two">
                                                </div>

                                                
                                            </div>



                                            <div id="role" class="form-group" style="margin-top:10px; ">
                                                  <select class="form-control" id="eqpCategory" name="rolecategory" required>
                                                                            <option value="Principle">Principle</option>
                                                                            <option value="Other Academic">Other Academic Staff</option>
                                                                            <option value="Student">Student</option>
                                                                           

                                                  </select>

                                              </div>

                                            <div class="form-group" style="margin-top:10px; ">
                                            


                                            
                                               <label>By clicking in "Register now", you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                                                
                                            </div>

                                            <input type="submit" value="SIGN UP"  class="pull-right
                                                theme-btn light-btn">


                                        </div>
                                            </div>

                                         </div>

                                     </div>
                                   
                                <?php echo form_close(); ?>


                                    </div>

                                        
                                    </div>
                                    <div id="verticalline" class="vl"></div>
                                    
                                    <div class="col-md-6" id="signin"  style="margin-top: 10px;">
                                       <h3 class=" w3-lobster w3-xxxlarge rainbow2"><b>Sign in...!!</b></h3>
                                        <br>
                                        <br>
                                        <br>
                                       
                                        
                                        <form method="post" action="<?php echo base_url() ?>index.php/User/loginchk">

                                            <div class="form-group" style="margin-top:10px; ">
                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                                </div>


                                            </div>
                                            <div class="form-group" style="margin-top:6px; ">
                                           <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input id="password-field" type="password" class="form-control pwd" name="password" placeholder="Password">
                                                     <span class="input-group-btn">
                                                        <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                                      </span>
                                                </div>

                                            </div>

                                            <div class="form-group" style="margin-top:10px; " >
                                            


                                            
                                               <label><a href="#">Forget Password?</a></label>
                                               <input type="submit" value="SIGNIN"  class="pull-right
                                                theme-btn light-btn">
                                                
                                            </div>
                                           
                                            <br>
                                            <div class="">
                                                
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                             
                        </div>
                    </div>
                </div>
            </div>
