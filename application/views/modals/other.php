<div class="modal fade" id="othernew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-dialog" style="width: 650px; height: 2000px;" role="document">
                    <div class="modal-content modal-info col-md-12" id="grad1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body" >
                           
                <?php echo form_open_multipart('Recipient/AddprojectOther'); ?> 

                                    
                                    
                                    <div class="col-md-12" id="signin"  style="margin-top: 10px;">
                                       <h3 style="text-align: center;" class=" w3-lobster w3-xxxlarge rainbow2"><b>ADD YOUR VALUABLE PROJECT HERE</b><br/><b>OTHER REQUESTING</b></h3>
                                        <br>
                                      
                                       
                                        
                                        

                                            <div class=" col-md-12 form-group" style="margin-top:10px; ">
                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    <input id="projecttitle" type="text" class="form-control" name="projecttopic" placeholder="Project Title">
                                                </div>


                                            </div>

                                        <div class=" col-md-12 row">


                                             

                                              <div class="form-group col-md-6" style="margin-top:10px; ">
                                                  


                                                  
                                                      <div class="input-group date">
                                                          <div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                          </div>
                                                      <input type="text" class="form-control pull-right" id="datepicker1" name="completiondate" placeholder="Completion Date" required>
                                                      </div>

                                                  
                                                </div>

                                                </div>
                                            <div class=" col-md-12 row">
                                            <div class=" col-md-6 form-group" style="margin-top:10px; ">
                                            


                                               <label for= file_name1>Upload Project Images</label>
                                               <div class="input-group" id="attch">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                                                    <input id="filechoose" type="file" class="form-control" name ="file_name" placeholder="Attach your front Images">
                                                </div>

                                                
                                            </div>


                                            <div class=" col-md-6 form-group" style="margin-top:10px; ">
                                            


                                               <label for= file_name1>Upload Project Proposal</label>
                                               <div class="input-group" id="attch">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                                                    <input id="filechoose" type="file" class="form-control" name ="file_name1" placeholder="Attach your front Images">
                                                </div>

                                                
                                            </div>


                                        </div>


                                        <div class=" col-md-12 form-group" style="margin-top:10px; ">
                                            
                                                <div class="input-group" style="height: 50px;">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                                    <textarea id="projecdes" type="textarea" class="form-control" name="description" placeholder="Project Description"></textarea>
                                                    
                                                </div>


                                        </div>


                                            
                                            <br>


                                            <div class=" col-md-12 form-group" style="margin-top:10px; " >
                                            


                                            
                                               
                                               <input type="submit" value="POST PROJECT"  class="pull-right
                                                theme-btn light-btn">
                                                
                                            </div>
                                            
                                         <?php echo form_close(); ?>
                                    </div>
                                    <div class="clearfix"></div>
                             
                        </div>
                    </div>
                </div>
            </div>
