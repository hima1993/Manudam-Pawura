<!DOCTYPE html>
<html>

    <!-- Mirrored from wp1.themexlab.com/html/volunteer/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:31:27 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Volunteer Multipurpose HTML5 Donation Template | Home Page Style One</title>
        <!-- Stylesheets -->
        <link href="<?php echo base_url()?>template/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url()?>template/css/revolution-slider.css" rel="stylesheet">
        <link href="<?php echo base_url()?>template/css/style.css" rel="stylesheet">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="<?php echo base_url()?>template/css/responsive.css" rel="stylesheet">
        <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
        
        </head>

        <body></body>

<div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                            <section class="blog-section">
                                <div class="sec-title">
                                    <h2>Our <strong>Blog</strong></h2>
                                </div>

                                <!--Blog Post-->
                               
                               <?php
                                foreach($query as $row)

                                    $number = 1;
                                {
                                ?>

                                <!--Blog Post-->
                                <div class="blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                                    <input type="hidden" id="article" value="<?php echo $row->article_id;?>">
                                    <article class="column-inner">
                                        <figure class="image-box">
                                            <a href="#"><img src="<?php echo base_url()?>template/images/resource/blog-image-6.jpg" alt="" title="Blog"></a>
                                            <div class="post-options">
                                                <a href="#" class="plus-icon img-circle"><span class="flaticon-add30"></span></a>
                                                <a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a>
                                            </div>
                                        </figure>
                                        <div class="lower-part">
                                            <div class="post-date"><span class="day"><?php echo $number;?></span> <span class="month"></span></div>
                                            <h3><a href="#"><?php echo $row->title;?></a></h3>
                                            <div class="post-info"><a href="#"><span class="icon flaticon-user197"></span> &ensp;<?php echo $row->firstname." ".$row->lastname;?></a> &ensp; <a href="#"><span class="icon flaticon-speechbubble65"></span> &ensp;<?php echo $row->article_date;?></a></div>
                                            <div class="post-text"><?php echo $row->article_body;?></div>
                                            <div class="text-right link"><a href="#" class="read-more"><span class="fa fa-angle-right"></span> &ensp; Read More</a></div>
                                        </div>
                                    </article>
                                </div>

                                <?php

                                $number++;

                                } 

                                ?>

                            </section>

            <div id="display_comment"></div>
            <div class="container-fluid" id="com"> 
            <h3>Leave a Comment</h3>
                    <form class="form-horizontal" method="post" id="form">
                            <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="4" id="comment" name="comment"> </textarea>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Submit Comment" class="btn btn-primary">
                            </div>
                            </div>
                    </form>  
                </div>




<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" ></script>



                <script type="text/javascript">

                    var $ = jQuery.noConflict();



$(document).ready(function(){

        async = true;

        

        var article_id = $("#article").val();
        $.post('<?php echo base_url();?>index.php/Blog/display_comments',
        {
        article_id:article_id
        },
        function(data)
        {
        
        $("#display_comment").html(data);
        });
        }); 
$(function() {
        $("#submit").click(function() 
        {
        var name = $("#name").val();
        var email = $("#email").val();
        var comment = $("#comment").val();
        var article_id = $("#article").val(); 
        var dataString = 'name='+ name + '&email=' + email + '&comment=' + comment+ '&article_id=' + article_id;
        if(name=='' || email=='' || comment=='')
        {
        alert('Please Give Valid Details');
        }
        else
        {
        //$("#display_comment").show();
        $("#display_comment").fadeIn(100).html('<img src="<?php echo base_url();?>uploads/ajaxloader.gif" />Loading Comment...');
        $.ajax({

        
        type: "POST",
        url: "<?php echo base_url();?>index.php/Blog/insert_comments",
        data: dataString,
        cache: false,
        success: function(data){
        $("#display_comment").html(data);
        $("#display_comment").fadeIn(slow);
        }
        });
        }return false;
        }); });
</script>


   

    <body>
        

        


           

       
           

<!--End of Login Section -->


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        <script src="<?php echo base_url()?>template/js/googlemaps.js"></script>
        <script src="<?php echo base_url()?>template/js/wow.js"></script>
        <script src="<?php echo base_url()?>template/js/script.js"></script>
        


    </body>

















    <!-- Mirrored from wp1.themexlab.com/html/volunteer/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:33:06 GMT -->
</html>