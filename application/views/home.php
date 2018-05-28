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


        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ring/Circle Toggle Navigation</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="<?php echo base_url()?>template/css/responsive.css" rel="stylesheet">
        <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
       






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


                .w3-lobster {
                font-family: "Lobster", serif;
                text-decoration-color: 
                }
                .rainbow2 {

                      background-image: linear-gradient(to right, brown, red, orange 50%);
                      color: transparent;
                      -webkit-background-clip: text;
                      background-clip: text;
                    
                }
                .rainbow {

                 
                      background-image: linear-gradient(to right, red, orange 50%, brown);
                      color: transparent;
                      -webkit-background-clip: text;
                      background-clip: text;

                }
                #grad1 {
  
                background: white; /* For browsers that do not support gradients */
                background: linear-gradient(to top ,#FEFEFE,#E1DDDD ) /* Standard syntax (must be last) */
                }


                .vl {
                border-left: 2px solid #E1DDDD;
                height: 330px;
                position: absolute;
                left: 50%;
                margin-left: -3px;
                top: 0;
            }


                        .switch {
              position: relative;
              display: inline-block;
              width: 210px;
              height: 34px;
            }

            .switch input {display:none;}

            .slider {
              position: absolute;
              cursor: pointer;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              background-color: #ca2222;
              -webkit-transition: .4s;
              transition: .4s;
            }

            .slider:before {
              position: absolute;
              content: "";
              height: 26px;
              width: 26px;
              left: 4px;
              bottom: 4px;
              background-color: white;
              -webkit-transition: .4s;
              transition: .4s;
            }

            input:checked + .slider {
              background-color: #F98B39;
            }

            input:focus + .slider {
              box-shadow: 0 0 1px #2196F3;
            }

            input:checked + .slider:before {
              -webkit-transform: translateX(174px);
              -ms-transform: translateX(174px);
              transform: translateX(174px);
            }

            /*------ ADDED CSS ---------*/
            .on
            {
              display: none;
            }

            .on, .off
            {
              color: white;
              position: absolute;
              transform: translate(-50%,-50%);
              top: 50%;
              left: 50%;
              font-size: 10px;
              font-family: Verdana, sans-serif;
            }

            input:checked+ .slider .on
            {display: block;}

            input:checked + .slider .off
            {display: none;}

            /*--------- END --------*/

            /* Rounded sliders */
            .slider.round {
              border-radius: 34px;
            }

            .slider.round:before {
              border-radius: 50%;}

 .con {
  width: 550px;
  display: block;
  margin: auto;
  position: relative;
}



.menu_opener {
  display: none;
}

.menu_opener:checked ~ .link_one {
  top: -98px;
  left: 200px;
  bottom: 5000px;

}
.menu_opener:checked ~ .link_two {
  left: 395px;
}
.menu_opener:checked ~ .link_three {
  top: 250px;
  left: 200px;
}
.menu_opener:checked ~ .link_four {
  left: 5px;
}
.menu_opener:checked ~ .barre_hamburger {
  opacity: 0;
}
.menu_opener:checked ~ .menu_opener_label:after {
  transform: rotate(45deg);
  top: 70px;
}
.menu_opener:checked ~ .menu_opener_label:before {
  transform: rotate(-45deg);
  top: 70px;
}

.menu_opener_label {
  background: #f1c40f;
  width: 150px;
  height: 150px;
  display: block;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  top: 50px;
  left: 175px;
  z-index: 10;
}
.menu_opener_label:after {
  position: absolute;
  top: 50px;
  left: 50px;
  background: #000;
  content: "";
  width: 50px;
  height: 10px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.menu_opener_label:before {
  position: absolute;
  top: 90px;
  left: 50px;
  background: #000;
  content: "";
  width: 50px;
  height: 10px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.barre_hamburger {
  width: 50px;
  height: 10px;
  position: absolute;
  top: 120px;
  left: 225px;
  background: #000;
  z-index: 20;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.link_general {
  width: 100px;
  height: 100px;
  display: block;
  border-radius: 50%;
  position: absolute;
  top: 63px;
  left: 210px;
  background: #ecf0f1;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.link_one {
  background: url("<?php echo base_url()?>template/images/w.png") #f1c40f no-repeat center center;
}



.link_two {
  background: url("<?php echo base_url()?>template/images/stat.png") #f1c40f no-repeat center center;
}

.link_three {
  background: url("<?php echo base_url()?>template/images/infra.png") #f1c40f no-repeat center center;
}

.link_four {
  background: url("<?php echo base_url()?>template/images/san.png") #f1c40f no-repeat center center;
}






          

        </style>
    </head>

    <body>
        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- Main Header -->
            <?php require 'includes/header.php'; ?>



			
            <!--End Main Header -->


            <!--Sidebar Navigation-->
            <!--Sidebar Nav End-->

            <!-- Main Slider -->
            <section class="main-slider style-two default-banner">

                <div class="tp-banner-container">
                    <div class="tp-banner" >
                        <ul>

                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo base_url()?>template/images/main-slider/image-1.jpg"  data-saveperformance="off"  data-title="Donation is Better"> 
                                <img src="<?php echo base_url()?>template/images/main-slider/image-1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                                <div class="tp-caption lft tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-24"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="title"><h2>We try to help people with volunteering</h2></div></div>

                                <div class="tp-caption lfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="32"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text"><h4>try our programs and help people for their needs</h4></div></div>

                                <div class="tp-caption lfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="70"
                                     data-speed="1500"
                                     data-start="1000"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="line"></div></div>

                            </li>

                            <li data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo base_url()?>template/images/main-slider/image-2.jpg"  data-saveperformance="off"  data-title="Donation is Better"> 
                                <img src="<?php echo base_url()?>template/images/main-slider/image-2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                                <div class="tp-caption lfl tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-24"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="title with-bg"><h2>We try to help people with volunteering</h2></div></div>

                                <div class="tp-caption lfr tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="42"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text with-bg"><h4>try our programs and help people for their needs</h4></div></div>

                                <div class="tp-caption lfb tp-resizeme"
                                     data-x="center" data-hoffset="-80"
                                     data-y="center" data-voffset="110"
                                     data-speed="1500"
                                     data-start="1000"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-btn"><a style="margin-left:190px; " href="#" class="theme-btn light-btn">MAKE DONATE</a> <a id="topadd" href="#menutop1" style="margin-left:100px; " class="theme-btn light-btn">ADD PROJECT</a></div></div>

                               

                            </li>

                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo base_url()?>template/images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Donation is Better"> 
                                <img src="<?php echo base_url()?>template/images/main-slider/image-3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                                <div class="tp-caption lfr tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-24"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="title with-bg"><h2>We try to help people with volunteering</h2></div></div>

                                <div class="tp-caption lfl tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="42"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text with-bg"><h4>try our programs and help people for their needs</h4></div></div>

                                <div class="tp-caption lfb tp-resizeme"
                                     data-x="center" data-hoffset="-80"
                                     data-y="center" data-voffset="110"
                                     data-speed="1500"
                                     data-start="1000"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-btn"><a  style="margin-left:190px; " href="<?php echo base_url()?>index.php/Others/Godonate" class="theme-btn light-btn">MAKE DONATE</a> <a id="topadd" href="#menutop1" style="margin-left:100px; " class="theme-btn light-btn">ADD PROJECT</a></div></div>

                                

                            </li>



                        </ul>


                    </div>
                </div>
            </section>



            <!--Tri Column Fluid-->
            <section class="tri-column-fluid">
                <div class="tri-column-outer clearfix">

                    <!--Column-->
                    <article class="column default-column">
                        <div class="pattern-layer"></div>

                        <div class="column-inner">	
                            <h3>Help 10140 people for education</h3>
                            <h4>No one has ever become poor by giving</h4>
                            <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</div>
                            <div class="text-right link"><a href="#" class="theme-btn btn-style-one">BECOME A VOLUNTEER</a></div>
                        </div>
                    </article>

                    <!--Carousel Column-->
                    <article class="column carousel-column" style="background-image:url(template/images/background/carousel-bg.jpg);">
                        <div class="pattern-layer"></div>

                        <div class="column-inner">
                            <h3>People need your help every day.</h3>
                            <h4>No one has ever become poor by giving</h4>
                            <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</div>
                            <div class="text-right link"><a href="#" class="theme-btn btn-style-one">Make a Donation</a></div>
                        </div>

                    </article>



                    <article class="column default-column">
                        <div class="pattern-layer"></div>

                        <div class="column-inner">  
                            <h3>Help 10140 people for education</h3>
                            <h4>No one has ever become poor by giving</h4>
                            <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</div>
                            <div class="text-right link"><a href="#" class="theme-btn btn-style-one">BECOME A VOLUNTEER</a></div>
                        </div>
                    </article>


                </div>

                    <!--Progress Column-->


            </section>

            <br>
            <br>
            <section id="menutop1">

 <h1  id="menutop" style="text-align: center;">ADD YOUR VALUABLE PROJECT HERE</h1> 

 </section>
             <section id="addproject" class="tri-column-fluid" style="padding-top: 50px; padding-bottom: 50px;">
                <div class="tri-column-outer clearfix">



                    <article class="column default-column" style="background-color: #F19161;">
                        <div class="column-inner">  
                            <h3>Help 10140 people for education</h3>
                            <h4>No one has ever become poor by giving</h4>
                            <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</div>
                            <div class="text-right link"><a href="#" class="theme-btn btn-style-one">BECOME A VOLUNTEER</a></div>
                        </div>


                    </article>



                     <article class="column carousel-column" >

                        

                         <input onclick="mynewFunction();" type="checkbox" id="menu_opener_id" class="menu_opener">
  <label for="menu_opener_id" class="menu_opener_label"></label>
  <div class="barre_hamburger" ></div>
  <a   class="link_one link_general" id="link_one"></a>

  <a  class="link_two link_general" id="link_two" ></a>

    <a  class="link_three link_general" id="link_three"></a>

  <a  class="link_four link_general" id="link_four"></a>


  </input>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

  $("#menu_opener_id").click(function(){
        $("#menutop").hide();

});

</script>

<script type="text/javascript">
    
    function mynewFunction() {
    var checkBox = document.getElementById("menu_opener_id");


   
    if (checkBox.checked == true){


        $("#menutop").hide();
         
        
         
    } else {
        
        
       
       $("#menutop").show();
       

       
    }
}
</script>
                        

                    </article>

                     <article class="column default-column" style="background-color: #F19161;">
                        <div class="column-inner">  
                            <h3>Help 10140 people for education</h3>
                            <h4>No one has ever become poor by giving</h4>
                            <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</div>
                            <div class="text-right link"><a href="#" class="theme-btn btn-style-one">BECOME A VOLUNTEER</a></div>
                        </div>


                    </article>


                </div>

            </section>

           
           
 




                       



       
        


            <!--Two Column-->
            <section class="two-column no-padd-bottom">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Text Column-->
                        <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="text-column">
                                <div class="sec-title">
                                    <h2>Become a part of <strong> the world</strong></h2>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                </div>
                                <br>
                                <div class="link text-right"><a href="#" class="theme-btn read-more"><span class="fa fa-angle-right"></span> &ensp;Read More</a></div>
                            </div>
                        </div>

                        <!--Video Column-->
                        <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="responsive-video">
                                <iframe height="170" allowfullscreen="" src="http://player.vimeo.com/video/56999995?color=ffffff"></iframe>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

            <!--Four Column / Current Projects-->
            <section class="four-column current-projects no-padd-top">
                <div class="auto-container">
                    <div class="sec-title clearfix">
                        <h2 class="pull-left">Our current <strong>projects</strong></h2>
                        <div class="link pull-right"><a href="#"><span class="fa fa-angle-right"></span> See All</a></div>
                    </div>

                    <div class="row clearfix">

                        <!--Project Column-->
                        <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <article class="column-inner hvr-float-shadow">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo base_url()?>template/images/resource/image-1.jpg" alt="" title="Volunteer"></a>
                                    <div class="icon-box"><a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a></div>
                                </figure>
                                <div class="lower-part">
                                    <div class="text">
                                        <h3>Help to get water in musaeus college</h3>
                                        <p>Here are ways students can help conserve the world's most ... more about water conservation or getting involved in water-saving on college.</p>
                                    </div>
                                    <div class="proj-donation">
                                        <div class="info"><strong>Donation : </strong> $24,241 / $35,000</div>
                                        <div class="bar-outer">
                                            <div class="bar-inner" data-don-total="35000" data-don-received="24241"></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!--Project Column-->
                        <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <article class="column-inner hvr-float-shadow">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo base_url()?>template/images/resource/image-2.jpg" alt="" title="Volunteer"></a>
                                    <div class="icon-box"><a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a></div>
                                </figure>
                                <div class="lower-part">
                                    <div class="text">
                                        <h3>Help for education of kids</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    </div>
                                    <div class="proj-donation">
                                        <div class="info"><strong>Donation : </strong> $17,241 / $25,000</div>
                                        <div class="bar-outer">
                                            <div class="bar-inner" data-don-total="25000" data-don-received="17241"></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!--Project Column-->
                        <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1000ms">
                            <article class="column-inner hvr-float-shadow">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo base_url()?>template/images/resource/image-3.jpg" alt="" title="Volunteer"></a>
                                    <div class="icon-box"><a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a></div>
                                </figure>
                                <div class="lower-part">
                                    <div class="text">
                                        <h3>Spend food in Holy Family Convent Bambalapitiya</h3>
                                        <p> Colleges in Maryland are starting food banks for hungry students. ... goes beyond the stereotypical image of poor college students happily surviving on cheap junk food. .... "It's starting a habit of give and take," .</p>
                                    </div>
                                    <div class="proj-donation">
                                        <div class="info"><strong>Donation : </strong> $47241 / $50,000</div>
                                        <div class="bar-outer">
                                            <div class="bar-inner" data-don-total="50000" data-don-received="47241"></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!--Project Column-->
                        <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1000ms">
                            <article class="column-inner hvr-float-shadow">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo base_url()?>template/images/resource/image-4.jpg" alt="" title="Volunteer"></a>
                                    <div class="icon-box"><a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a></div>
                                </figure>
                                <div class="lower-part">
                                    <div class="text">
                                        <h3>Spend for houses</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    </div>
                                    <div class="proj-donation">
                                        <div class="info"><strong>Donation : </strong> $37001 / $77,000</div>
                                        <div class="bar-outer">
                                            <div class="bar-inner" data-don-total="77000" data-don-received="37001"></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>


                    </div>
                </div>
            </section>

            <!--Parallax Section-->
            <section class="parallax-section" style="background-image:url(template/images/parallax/image-1.jpg);">
                <div class="auto-container">
                    <div class="text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h2>Are you ready to volunteer?</h2>
                        <h3>start one of our programm today and help people in need</h3>
                        <div class="line"></div>
                        <a class="theme-btn light-btn" href="#">BECOME A VOLUNTEER</a>
                        <a class="theme-btn light-btn" href="#">MAKE A DONATION</a>

                    </div>
                </div>
            </section>

            <!--Four Column / Team Section-->
            <section class="four-column team-section">
                <div class="auto-container">
                    <div class="sec-title">
                        <h2>Our group of <strong>volunteers</strong></h2>
                    </div>

                    <div class="row clearfix">

                        <!--Team Member-->
                        <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                            <article class="column-inner hvr-float-shadow">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo base_url()?>template/images/resource/team-1.jpg" alt="" title="Volunteer"></a>
                                    <div class="tag-title"><span>Top</span></div>
                                </figure>
                                <div class="lower-part">
                                    <h3>Harini sam</h3>
                                    <div class="info">
                                        <p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                        <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:Harinisam@email.com">johndoe@email.com</a></p>
                                    </div>
                                    <div class="social-links">
                                        <a href="#" class="fa fa-facebook-f"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!--Team Member-->
                        <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                            <article class="column-inner hvr-float-shadow">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo base_url()?>template/images/resource/team-2.jpg" alt="" title="Volunteer"></a>

                                </figure>
                                <div class="lower-part">
                                    <h3>Madawa lak</h3>
                                    <div class="info">
                                        <p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                        <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:Madawalak@email.com">johndoe@email.com</a></p>
                                    </div>
                                    <div class="social-links">
                                        <a href="#" class="fa fa-facebook-f"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!--Team Member-->
                        <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                            <article class="column-inner hvr-float-shadow">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo base_url()?>template/images/resource/team-3.jpg" alt="" title="Volunteer"></a>

                                </figure>
                                <div class="lower-part">
                                    <h3>Nihara su</h3>
                                    <div class="info">
                                        <p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                        <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">Niharasu@email.com</a></p>
                                    </div>
                                    <div class="social-links">
                                        <a href="#" class="fa fa-facebook-f"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!--Team Member-->
                        <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                            <article class="column-inner hvr-float-shadow">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo base_url()?>template/images/resource/team-4.jpg" alt="" title="Volunteer"></a>

                                </figure>
                                <div class="lower-part">
                                    <h3>Jonathan Doe</h3>
                                    <div class="info">
                                        <p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                        <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                                    </div>
                                    <div class="social-links">
                                        <a href="#" class="fa fa-facebook-f"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </div>
                                </div>
                            </article>
                        </div>




                    </div>
                </div>
            </section>

            <!--Our Programs-->
            <section class="programs-section no-padd-top">
                <div class="auto-container">
                    <div class="sec-title">
                        <h2>Our volunteer <strong>programs</strong></h2>
                    </div>

                    <div class="row clearfix">

                        <!--Program Column-->
                        <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <article class="column-inner hvr-float">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo base_url()?>template/images/resource/image-5.jpg" alt="" title="Volunteer Program"></a>
                                    <a href="#" class="overlay-box">
                                        <h3 class="post-title">Free volunteering in Africa</h3>
                                        <span class="icon-arrow flaticon-right11"></span>
                                    </a>
                                </figure>
                                <div class="program-info">5411 volunteers / 1412 donations / location: <strong>Africa</strong></div>
                            </article>
                        </div>

                        <!--Program Column-->
                        <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <article class="column-inner hvr-float">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo base_url()?>template/images/resource/image-6.jpg" alt="" title="Volunteer Program"></a>
                                    <a href="#" class="overlay-box bg-red">
                                        <h3 class="post-title">Join our volunteering team</h3>
                                        <span class="icon-arrow flaticon-right11"></span>
                                    </a>
                                </figure>
                                <div class="program-info">2411 volunteers / 5312 donations / location: <strong>USA</strong></div>
                            </article>
                        </div>

                        <!--Program Column-->
                        <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                            <article class="column-inner hvr-float">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo base_url()?>template/images/resource/image-7.jpg" alt="" title="Volunteer Program"></a>
                                    <a href="#" class="overlay-box bg-green">
                                        <h3 class="post-title">Help children for a better education</h3>
                                        <span class="icon-arrow flaticon-right11"></span>
                                    </a>
                                </figure>
                                <div class="program-info">5314 volunteers / 3486 donations / location: <strong>Ughanda</strong></div>
                            </article>
                        </div>


                    </div>
                </div>
            </section>


            <!--Fact Counter-->
            <section class="fact-counter" style="background-image:url(template/images/parallax/image-2.jpg);">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Counter Column-->
                        <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn" data-wow-delay="0ms">
                            <div class="count-outer text-theme-clr"><span class="icon flaticon-hospital35"></span> <span class="count-text" data-speed="2000" data-stop="12532">0</span></div>
                            <div class="counter-title">DONATIONS MADE</div>
                        </div>

                        <!--Counter Column-->
                        <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn" data-wow-delay="0ms">
                            <div class="count-outer text-red"><span class="icon flaticon-smiley3"></span> <span class="count-text" data-speed="3000" data-stop="54216">0</span></div>
                            <div class="counter-title">HAPPY CHILDREN</div>
                        </div>

                        <!--Counter Column-->
                        <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn" data-wow-delay="0ms">
                            <div class="count-outer text-yellow"><span class="icon flaticon-like80"></span> <span class="count-text" data-speed="1500" data-stop="2342">0</span></div>
                            <div class="counter-title">VOLUNTEERING HELPERS</div>
                        </div>

                        <!--Counter Column-->
                        <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn" data-wow-delay="0ms">
                            <div class="count-outer text-green"><span class="icon flaticon-hand-1"></span> <span class="count-text" data-speed="2500" data-stop="32123">0</span></div>
                            <div class="counter-title">EDUCATED CHILDREN</div>
                        </div>

                    </div>
                </div>
            </section>

            <!--Contact Us Section-->
            <section class="contact-section">
                <div class="auto-container">
                    <div class="sec-title">
                        <h2>Contact <strong>us</strong></h2>
                    </div>
                    <div class="sec-text">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <br>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="form">


                        <div class="row clearfix">
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group-inner">
                                    <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                                    <div class="field-outer">
                                        <input type="text" name="username" id="your-name" placeholder="Your Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group-inner">
                                    <div class="icon-box"><label for="your-email"><span class="icon flaticon-new100"></span></label></div>
                                    <div class="field-outer">
                                        <input type="email" name="email" id="your-email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group-inner">
                                    <div class="icon-box"><label for="your-subject"><span class="icon flaticon-edition2"></span></label></div>
                                    <div class="field-outer">
                                        <input type="text" name="subject" id="your-subject" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group-inner">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                <button class="hvr-bounce-to-right" type="submit" name="submit-form">Send Message &ensp; <span class="icon flaticon-envelope32"></span></button>
                            </div>
                        </div>


                    </div>
                </div>
            </section>


            <!--Map Section-->
            <section class="map-section">
                <div class="map-container" id="map-location"></div>
            </section>


            <!--Client Logos-->
            <section class="sponsors-section">
                <div class="container">
                    <ul class="slider">
                        <li><a href="#"><img src="<?php echo base_url()?>template/images/clients/logo-6.png" alt="" title=""></a></li>
                        <li><a href="#"><img src="<?php echo base_url()?>template/images/clients/logo-7.png" alt="" title=""></a></li>
                        <li><a href="#"><img src="<?php echo base_url()?>template/images/clients/logo-8.png" alt="" title=""></a></li>
                        <li><a href="#"><img src="<?php echo base_url()?>template/images/clients/logo-9.png" alt="" title=""></a></li>
                        <li><a href="#"><img src="<?php echo base_url()?>template/images/clients/logo-10.png" alt="" title=""></a></li>
                    </ul>
                </div>
            </section>


            <!--Main Footer-->
            <?php require 'includes/footer.php'; ?>

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>




<!--Login Section -->

<?php require 'includes/login.php'; ?>





<?php require 'modals/water.php'; ?>

<?php require 'modals/other.php'; ?>

<?php require 'modals/infra.php'; ?>

<?php require 'modals/stat.php'; ?>


       
<!--End of Login Section -->


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo base_url()?>template/js/jquery.js"></script> 
        <script src="<?php echo base_url()?>template/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>template/js/rev-plugins.js"></script>
        <script src="<?php echo base_url()?>template/js/revolution.min.js"></script>
        <script src="<?php echo base_url()?>template/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url()?>template/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url()?>template/js/fitvids.js"></script>
        <script src="<?php echo base_url()?>template/js/jquery-parallax.js"></script>
        <script src="<?php echo base_url()?>template/js/scrollbar.js"></script>
        <script src="<?php echo base_url()?>template/js/validate.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo base_url()?>template/js/googlemaps.js"></script>
        <script src="<?php echo base_url()?>template/js/wow.js"></script>
        <script src="<?php echo base_url()?>template/js/script.js"></script>




        

<script>

var nbOptions = 8;
var angleStart = -360;

// jquery rotate animation
function rotate(li,d) {

    $({d:angleStart}).animate({d:d}, {
        step: function(now) {

            $(li)
               .css({ transform: 'rotate('+now+'deg)' })
               .find('label')
                  .css({ transform: 'rotate('+(-now)+'deg)' });
        }, duration: 0
    });
}

// show / hide the options
function toggleOptions(s) {



    $(s).toggleClass('open');
    var li = $(s).find('li');
    var deg = $(s).hasClass('half') ? 180/(li.length-1) : 360/li.length;
    for(var i=0; i<li.length; i++) {
        var d = $(s).hasClass('half') ? (i*deg)-90 : i*deg;
        $(s).hasClass('open') ? rotate(li[i],d) : rotate(li[i],angleStart);
    }

}

$('.selector button').click(function(e) {



    toggleOptions($(this).parent());

});

setTimeout(function() { toggleOptions('.selector'); }, 100);//@ sourceURL=pen.js
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {


    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

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


        <script type="text/javascript">
            
            $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
        </script>


        <script type="text/javascript">
            
            $(document).ready(function(){
                $("#next").click(function(){
                    $("#signin").hide();
                    $("#verticalline").hide();
                     $("#attch").hide();
                     $("#role").hide();
                    document.getElementById("togBtn").checked = true;
                });

                $("#prev").click(function(){
                    $("#signin").show();
                    $("#verticalline").show();
                    $("#attch").hide();
                    $("#role").hide();
                    document.getElementById("togBtn").checked = true;
                });
                // $(".btn2").click(function(){
                //     $("p").show();
                // });
            });


          function myFunction() {
    var checkBox = document.getElementById("togBtn");
   
    if (checkBox.checked == true){
        $("#attch").hide();
         $("#role").hide();
         return "don";
        
         
    } else {
        
        
        $("#filechoose").css("background-color", "#F92615");
       $("#attch").show();
       $("#role").show();
       return "res";

       
    }
}


            $('#next').on('click', function(e){

                $('#expand').toggleClass('col-md-6');
                 $('#expand').toggleClass('col-md-12');

            });
            $('#prev').on('click', function(e){

                
                 $('#expand').toggleClass('col-md-12');
                 $('#expand').toggleClass('col-md-6');

            });
        </script>







        <script type="text/javascript">
            


                        $(".reveal").on('click',function() {
                var $pwd = $(".pwd");
                if ($pwd.attr('type') === 'password') {
                    $pwd.attr('type', 'text');
                } else {
                    $pwd.attr('type', 'password');
                }
            });


                         $(".reveal1").on('click',function() {
                var $pwd = $(".pwd1");
                if ($pwd.attr('type') === 'password') {
                    $pwd.attr('type', 'text');
                } else {
                    $pwd.attr('type', 'password');
                }
            });
        </script>


        <script type="text/javascript">
            

            $(function() {
            $(".message1").css("display", "none");
            $(".message2").css("display", "none");
            $("#togBtn").click(function() {
                if (this.checked) {
                    $(".message1").stop(true,true).fadeIn("fast").fadeOut(15000);
                    $(".message2").hide();
                }
                else {
                    $(".message1").stop(true,true).hide();
                    $(".message2").stop(true,true).fadeIn("fast").fadeOut(15000);
                }

            });
        });
        </script>


        <!-- <script type="text/javascript">
            


            function valueFunction(){
    var checkBox = document.getElementById("togBtn");
   
    if (checkBox.checked == true){
       
         return "don";
        
         
    } else if(checkBox.checked == false) {
        
       
       return "res";

       
    }




            }

        </script> -->


<script type="text/javascript">

    $(document).ready(function(){
  // Add smooth scrolling to all links
  $("#topadd").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      },800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>



<script >
          $(function() {
              //Date picker
              $('#datepicker').datepicker({
                  autoclose: true
              })
          })

          $(function() {
              //Date picker
              $('#datepicker9').datepicker({
                  autoclose: true
              })
          })

      </script>



      <script type="text/javascript">
        
      $('#link_one').on('click',function(event){


           <?php
                $loggerrole = $this->session->userData('role');
                if( $loggerrole == "Principle" || $loggerrole == "Student" || $loggerrole == "Other Academic" ){
                    ?>

                       $("#stat1").modal('hide');
                        $("#othernew").modal('hide');
                         $("#infra").modal('hide');
                          


                      $("#water").modal('show');

              <?php

                }else if( $loggerrole == "Donor"){


                    ?>


                     $("#stat1").modal('hide');
                        $("#othernew").modal('hide');
                         $("#infra").modal('hide');
                          $("#water").modal('hide');

                    alert("Please login as a Recipient");

                <?php

                }else if($loggerrole == ""){
                    ?>

                    
                    $("#stat1").modal('hide');
                        $("#othernew").modal('hide');
                         $("#infra").modal('hide');
                          $("#water").modal('hide');
                          

                     $("#myModal4").modal();
            <?php 

          }

          ?>


        });



$('#link_two').on('click',function(event){


           <?php
                $loggerrole = $this->session->userData('role');
                if( $loggerrole == "Principle" || $loggerrole == "Student" || $loggerrole == "Other Academic" ){
                    ?>

                       $("#water").modal('hide');
                        $("#othernew").modal('hide');
                         $("#infra").modal('hide');
                          


                      $("#stat1").modal('show');

              <?php

                }else if( $loggerrole == "Donor"){


                    ?>


                     $("#stat1").modal('hide');
                        $("#othernew").modal('hide');
                         $("#infra").modal('hide');
                          $("#water").modal('hide');

                    alert("Please login as a Recipient");

                <?php

                }else if($loggerrole == ""){
                    ?>

                    
                    $("#stat1").modal('hide');
                        $("#othernew").modal('hide');
                         $("#infra").modal('hide');
                          $("#water").modal('hide');
                          

                     $("#myModal4").modal();
            <?php 

          }

          ?>


        });



$('#link_three').on('click',function(event){


           <?php
                $loggerrole = $this->session->userData('role');
                if( $loggerrole == "Principle" || $loggerrole == "Student" || $loggerrole == "Other Academic" ){
                    ?>

                       $("#stat1").modal('hide');
                        $("#othernew").modal('hide');
                         $("#water").modal('hide');
                          


                      $("#infra").modal('show');

              <?php

                }else if( $loggerrole == "Donor"){


                    ?>


                     $("#stat1").modal('hide');
                        $("#othernew").modal('hide');
                         $("#infra").modal('hide');
                          $("#water").modal('hide');

                    alert("Please login as a Recipient");

                <?php

                }else if($loggerrole == ""){
                    ?>

                    
                    $("#stat1").modal('hide');
                        $("#othernew").modal('hide');
                         $("#infra").modal('hide');
                          $("#water").modal('hide');
                          

                     $("#myModal4").modal();
            <?php 

          }

          ?>


        });



$('#link_four').on('click',function(event){


           <?php
                $loggerrole = $this->session->userData('role');
                if( $loggerrole == "Principle" || $loggerrole == "Student" || $loggerrole == "Other Academic" ){
                    ?>

                       $("#stat1").modal('hide');
                        $("#water").modal('hide');
                         $("#infra").modal('hide');
                          


                      $("#othernew").modal('show');

              <?php

                }else if( $loggerrole == "Donor"){


                    ?>


                     $("#stat1").modal('hide');
                        $("#othernew").modal('hide');
                         $("#infra").modal('hide');
                          $("#water").modal('hide');

                    alert("Please login as a Recipient");

                <?php

                }else if($loggerrole == ""){
                    ?>

                    
                    $("#stat1").modal('hide');
                        $("#othernew").modal('hide');
                         $("#infra").modal('hide');
                          $("#water").modal('hide');
                          

                     $("#myModal4").modal();
            <?php 

          }

          ?>


        });











      </script>






    </body>

















    <!-- Mirrored from wp1.themexlab.com/html/volunteer/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:33:06 GMT -->
</html>