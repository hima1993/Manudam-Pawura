<?php
$overall_vote_rows =0;
$overall_vote_rate =0;
$blog_vote_overall_dec_rate =0;
$blog_vote_ip_rate =0;
?>

<!DOCTYPE html>
<html>

    <!-- Mirrored from wp1.themexlab.com/html/volunteer/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:31:27 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Volunteer Multipurpose HTML5 Donation Template | Home Page Style One</title>
        <!-- Stylesheets -->
        <link href="<?php echo base_url() ?>template/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>template/css/revolution-slider.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>template/css/style.css" rel="stylesheet">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="<?php echo base_url() ?>template/css/responsive.css" rel="stylesheet">


        <style type="text/css">
             .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place front is invalid - may break your css so removed */  
                padding-top: 100px; /* Location of the box - don't know what this does?  If it is to move your modal down by 100px, then just change top below to 100px and remove this*/
                left: 0;
                right:0; /* Full width (left and right 0) */
                top: 0;
                bottom: 0; /* Full height top and bottom 0 */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                z-index: 9999; /* Sit on top - higher than any other z-index in your site*/
                }



                .r {
                    position: relative; 
                } /*MUST BE ABSOLUTE TO STACKED*/
                .rating, .transparent { 
                    position: absolute; 
                } 
                .rating { 
                    z-index: 1; 
                } 
                .star { 
                    background: url("<?php echo base_url();?>assets/images/star.png"); 
                    cursor: pointer; float: left !important; /*KEEPS THE STAR NEXT TO EACH OTHER*/ 
                    height: 20px; width: 20px; 
                }
                .transparent .star {
                    opacity: .25; /*BASE STARS ARE TRANSPARENT UNTIL MOUSEOVER*/ 
                } 
                .rating .star { 
                    opacity: 1.0; /*CURRENT RATING IS VISIBLE UNTIL MOUSEOVER*/ 
                } 
                .votes { 
                    float: left; /*KEEPS THE NUMBER OF VOTES NEXT TO THE RATING & BASE*/
                }
        </style>
    </head>

    <body>
         <!-- Preloader -->
            <div class="preloader" id="gmdemo" ></div>
            

            <!-- Main Header -->
            <?php require 'includes/header.php'; ?>
            <!--End Main Header -->


            <!--Sidebar Navigation-->
            <?php require 'includes/navigation.php'; ?>
            <!--Sidebar Nav End-->

             <div class="page-wrapper" style="min-height: 150px;">
            <!--Sidebar Nav End-->
            </div>


            <!--Bread Crumb-->
            <div class="bread-crumb">
                <div class="auto-container">
                    Pages  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Blog</a>
                </div>
            </div>


            <div class="sidebar-page"   value="1">


                
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Content Side--> 
                        <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                            <section class="blog-section">
                                <div class="sec-title">
                                    <h2>Our <strong>Blog</strong></h2>
                                </div>



    <!--Header Lower-->

    <!--Header Lower End-->


            <!--End Main Header -->

<div class="item span9" style="margin-top: 120px;margin-right: 100px">
  <div  class="item span9" >
    <ul class="thumbnails">

<?php
foreach ($post_data as $item) {
	?>


    


        



             

            
  

         <li class="span5" style=" box-shadow: 5px 5px 5px 5px rgba(20, 2, 4, 0.2);">



           <div class="thumbnail" id="<?php echo $item->requestId."b" ?>">







          <script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" ></script>


            <script type="text/javascript">
                $("<?php echo "#".$item->requestId."b" ?>").ready(function() {



                     var blog_id =<?php echo $item->requestId; ?>; //GETS THE ID OF THE CONTENT
                            
                            
                            $.ajax({

                                type: "POST",
                                data:{"blog_id":blog_id},
                                url: "<?php echo base_url();?>index.php/BlogController/loadData",
                                dataType:'JSON', //CALLBACK FILE
                                success: function (e) {

                                   

                                    $("#"+blog_id+"s").html(e);
                                     //DISPLAYS THE NEW RATING IN HTML
                                },
                                error: function (e) {
                                    alert(e);

                                    

                                }
                            });
                                



                    
                });
            </script>

            
            <h3 style="padding-top:25px ;padding-bottom:25px"><?php echo $item->projectTopic; ?></h3>
               <?php echo "<img src='" . base_url() . "uploads/" . $item->frontimage . "' alt=''/>" ?>

               <div class="post-info"><a href="#"><span class="icon flaticon-user197"></span> &ensp;<?php echo $item->reciepient_reciepientid;?></a> &ensp; <a href="#"><span class="icon flaticon-speechbubble65"></span> &ensp;<?php echo $item->completiondate;?></a></div>
               <div class="caption">

               

                 <p><h4 style=""><?php echo $item->description; ?></h4></p>
               </div>





                 <?php
                    
                    echo '<div class="'.$item->requestId.'r" id='.$item->requestId.'s'.' value="'.$item->requestId.'"  >';

                    

                    $stars = '';

                    $no = 1;
                    for ($i = 1; $i <= floor($overall_vote_rate); $i++) {
                        $stars .= '<div class="star" id="' . $i . '"></div>';
                        $no++;
                    }

                    echo '<input type="hidden" id="'.$item->requestId.'q'.'" value="'.$no.'"  >';
                    //THE OVERALL RATING (THE OPAQUE STARS)
                    echo '<div class="r"><div class="rating">' . $stars . '</div>';

                    //THE TRANSPARENT STARS (OPAQUE STARS WILL COVER AS MANY STARS AS THE RATING REPRESENTS)
                    echo '<div class="transparent">
                <div class="star" id="1"></div>
                <div class="star" id="2"></div>
                <div class="star" id="3"></div>
                <div class="star" id="4"></div>
                <div class="star" id="5"></div>
                <div class="votes">(' . $blog_vote_overall_dec_rate . '/5, ' . $overall_vote_rows . ' ' . ($overall_vote_rows > 1 ? ' votes' : ' vote') . ') ' . ($blog_vote_ip_rate > 0 ? '<strong>You rated this: <span style="color:#39C;">' . $blog_vote_ip_rate . '</span></strong>' : '') . '</div>
              </div>
            </div>';
                    echo '</div>';
                    ?>

                

 


            <script type='text/javascript' src="<?php echo base_url()?>assets/js/jquery-1.9.1.min.js" ></script>



<script type="text/javascript">
            
            $(function () {

                var rating = 0;
    $("<?php echo ".".$item->requestId."r" ?>").on("mouseover", function () { //SELECTING A STAR
        $(".rating").hide(); //HIDES THE CURRENT RATING WHEN MOUSE IS OVER A STAR
        var d = $('<?php echo "#".$item->requestId."q" ?>').val(); //GETS THE NUMBER OF THE STAR


        console.log(d);
    
       rating = d;



        //HIGHLIGHTS EVERY STAR BEHIND IT
        for (i = (d -1); i >= 0; i--) {
            $(".transparent .star:eq(" + i + ")").css({"opacity": "1.0"});
        }
    }).on("click", function () { //RATING PROCESS


        <?php $logid = $this->session->userData('loggerid');

            if($logid == ""){


                ?>

                alert("Please Log in");


            <?php

            }else{

                ?>


        var blog_id = <?php echo $item->requestId; ?>; //GETS THE ID OF THE CONTENT
        //GETS THE NUMBER OF THE STAR

       console.log(rating);

        var data = 'rating=' + rating + '&blog_id=' + blog_id;
        $.ajax({

            type: "POST",
            data:{"blog_id":blog_id,"rating":rating},
            url: "<?php echo base_url();?>index.php/BlogController/rateme",
            dataType:'JSON', //CALLBACK FILE
            success: function (e) {

               console.log(e);

                $("#"+blog_id+"s").html(e); //DISPLAYS THE NEW RATING IN HTML
            },
            error: function (e) {
                alert(e);

            }
        });


        <?php
            }

        ?>
    }).on("mouseout", function () { //WHEN MOUSE IS NOT OVER THE RATING
        $(".rating").show(); //SHOWS THE CURRENT RATING
        $(".transparent .star").css({"opacity": "0.25"}); //TRANSPARENTS THE BASE
    });

        
        
});
        </script>





             

               <input type="button" id="shcm" value="show comment"  onclick="showcomment(this);"   class="pull-right theme-btn light-btn">
               
                <div style="padding-left:150px; " value="<?php echo $item->requestId;?>" id="<?php echo $item->requestId."d";?>" ></div>




                 <div class="form-group">

                     <input type="hidden" id="name" class="name" value="<?php echo $this->session->userData('loggername') ?>">
                    
                     <textarea class="form-control" rows="2" name="comment" id="comment" placeholder="write a comment"></textarea>
                     <input style="margin-top:10px;" class="btn btn-info btn-xs" type="submit" value="Submit" onclick="submitcomment(this);">
                 </div>
                
              




           </div>
         </li>



<?php 
}
?>

</ul>
</div>

    </div>

</section>
</div>


<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" ></script>

 <script src="<?php echo base_url()?>template/js/bootstrap.min.js"></script>



                <script type="text/javascript">

                    var $ = jQuery.noConflict();


        function showcomment(object){

        var article_id = object.nextElementSibling.attributes.value.value;

       

       if (object.value == "show comment"){


            object.value = "hide";


       $.post('<?php echo base_url();?>index.php/Newsfeed/displaycomments/',
                                                  {
                                                   article_id:article_id
                                                  
                                                  },
                                                  function(data)
                          {
                              
                            $('#'+article_id+'d').show();                       
                            $('#'+article_id+'d').html(data);

                            console.log('#'+article_id);
                          });

         
        
         
    }else if(object.value == "hide") {
        
        
       object.value ="show comment";

        $('#'+article_id+'d').hide();

        

       

       
    }





        

        }


function submitcomment(object) {
       
        var name = object.previousElementSibling.previousElementSibling.value;
        
        var comment = object.previousElementSibling.value;
        var article_id = object.parentElement.previousElementSibling.attributes.value.value; 
        var dataString = 'name='+ name + '&comment=' + comment+ '&article_id=' + article_id;
        if(name=='' || comment=='')
        {
        alert('Please Give Valid Details');
        }
        else
        {
        //$("#display_comment").show();
        $('#'+article_id).fadeIn(100).html('<img src="<?php echo base_url();?>uploads/ajaxloader.gif" />Loading Comment...');
        $.ajax({

        
        type: "POST",
        url: "<?php echo base_url();?>index.php/Newsfeed/insert_comments",
        data: dataString,
        cache: false,
        success: function(data){

        object.parentElement.previousElementSibling.previousElementSibling.value = "hide";
        object.previousElementSibling.value =" ";
        $('#'+article_id+'d').html(data);
        $('#'+article_id+'d').fadeIn("slow");

        }
        });
        }return false;
         }



        
        


        
</script>








<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <aside class="sidebar">

                                <!-- Search Form -->
                                <div class="widget search-form">

                                    <form method="post" action="http://wp1.themexlab.com/html/volunteer/blog.html">
                                        <div class="form-group">
                                            <input type="search" name="search" value="" placeholder="search for something">
                                            <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                                        </div>
                                    </form>

                                </div>

                                <!-- Popular Categories -->
                                <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="sec-title"><h3>Popular <strong>categories</strong></h3></div>

                                    <ul class="list">
                                        <li><span class="icon flaticon-blank36"></span> <a href="#">Online spending dahsboard</a></li>
                                        <li><span class="icon flaticon-blank36"></span> <a href="#">Worldwide charity programs</a></li>
                                        <li><span class="icon flaticon-blank36"></span> <a href="#">Awesome volunteers</a></li>
                                        <li><span class="icon flaticon-blank36"></span> <a href="#">Leading volunteer groups</a></li>
                                        <li><span class="icon flaticon-blank36"></span> <a href="#">Charity programs for children</a></li>
                                    </ul>

                                </div>

                                <!-- Recent Posts -->
                                <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="sec-title"><h3>Recent <strong>posts</strong></h3></div>

                                    <div class="post">
                                        <div class="post-thumb"><a href="#"><img src="<?php echo base_url()?>template/images/resource/post-thumb-1.jpg" alt=""></a></div>
                                        <h4><a href="#">Awesome Blogpost</a></h4>
                                        <div class="post-info">Dec 12, 2015 in <a href="#"><em>general</em></a></div>
                                    </div>

                                    <div class="post">
                                        <div class="post-thumb"><a href="#"><img src="<?php echo base_url()?>template/images/resource/post-thumb-2.jpg" alt=""></a></div>
                                        <h4><a href="#">Creating a new layout</a></h4>
                                        <div class="post-info">Dec 8, 2015 in <a href="#"><em>charity</em></a></div>
                                    </div>

                                    <div class="post">
                                        <div class="post-thumb"><a href="#"><img src="<?php echo base_url()?>template/images/resource/post-thumb-3.jpg" alt=""></a></div>
                                        <h4><a href="#">We work for your life</a></h4>
                                        <div class="post-info">Dec 1, 2015 in <a href="#"><em>donations</em></a></div>
                                    </div>

                                </div>

                                <!-- Popular Tags -->
                                <div class="widget popular-tags">
                                    <div class="sec-title"><h3>Popular <strong>tags</strong></h3></div>

                                    <a href="#">awesome</a> <a href="#">strategy</a> <a href="#">development</a> <a href="#">css</a> <a href="#">photoshop</a> <a href="#">photography</a> <a href="#">html</a> <a href="#">charity</a> <a href="#">charity</a> <a href="#">organisations</a> <a href="#">php</a> <a href="#">foundation</a> <a href="#">donations</a> <a href="#">money</a> <a href="#">children</a> <a href="#">spendings</a> <a href="#">help</a> <a href="#">housing</a>

                                </div>

                                <!--Twitter Feeds-->
                                <div class="widget twitter-feeds wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="sec-title"><h3>Recent <strong>Tweets</strong></h3>  </div>
                                    <div class="feed">
                                        <div class="icon"><span class="fa fa-twitter"></span></div>
                                        <div class="feed-content">Help our children in south  africa  <a href="#">@http://t.co/8dfkjht</a></div>
                                        <div class="time text-right"><em>15 mins ago</em></div>
                                    </div>

                                    <div class="feed">
                                        <div class="icon"><span class="fa fa-twitter"></span></div>
                                        <div class="feed-content">We reach a number of 1000 volunteers  <a href="#">@http://t.co/7gfkjht</a></div>
                                        <div class="time text-right"><em>15 mins ago</em></div>
                                    </div>

                                </div>

                            </aside>


                        </div>
                        <!--Sidebar-->


                    </div>
                </div>
            </div>


            <!--Main Footer-->
           <?php require 'includes/footer.php'; ?>

        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>



        <?php require 'includes/login.php'; ?>





    
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


        <script src="<?php echo base_url() ?>template/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>template/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>template/js/rev-plugins.js"></script>
        <script src="<?php echo base_url() ?>template/js/revolution.min.js"></script>
        <script src="<?php echo base_url() ?>template/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>template/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url() ?>template/js/fitvids.js"></script>
        <script src="<?php echo base_url() ?>template/js/jquery-parallax.js"></script>
        <script src="<?php echo base_url() ?>template/js/scrollbar.js"></script>
        <script src="<?php echo base_url() ?>template/js/validate.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo base_url() ?>template/js/googlemaps.js"></script>
        <script src="<?php echo base_url() ?>template/js/wow.js"></script>
        <script src="<?php echo base_url() ?>template/js/script.js"></script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var $_Tawk_API = {}, $_Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->

        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-15521914-3', 'auto');
            ga('send', 'pageview');
        </script>

    </body>

    <!-- Mirrored from wp1.themexlab.com/html/volunteer/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:33:06 GMT -->
</html>