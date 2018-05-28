<header class="main-header fixed">
    <!--Header Top-->
    <div class="header-top">
        <div class="container">
            <div class="row clearfix">
                <!--Top Left-->
                <div class="col-md-6 col-sm-6 col-xs-12 top-left">
                    <div class="clearfix">
                        <div class="pull-left phone-num"><span class="icon flaticon-telephone51"></span>Call us : <a href="#">+49 123 456 789</a></div>
                        <div class="pull-left email"><span class="icon flaticon-mail115"></span>Send email : <a href="support%40email.html">support@email.de</a></div>
                    </div>
                </div>
                <!--Top Right-->
                <div class="col-md-6 col-sm-6 col-xs-12 top-right">
                    <div class="social-links" style="padding-right: 45px;"><b><p> <?php 
                                $loggername = $this->session->userData('loggername');
                                if ($loggername == ''){


                                }else{

                                    echo 'Welcome '.$loggername;
                                }  ?></p></b></div>
                </div>

            </div>
        </div>
    </div>

    <!--Header Lower-->
    <div class="header-lower" style="position: absolute;">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo"><a href="index-2.html"><img src="<?php echo base_url() ?>template/images/manupawralogo.png" alt="Volunteer" title="Volunteer"></a></div>

            <!--Right Container-->
            <div class="right-cont clearfix">

                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation">
                            <li class="current dropdown"><a href="index.php">Home</a>

                            </li>
<<<<<<< HEAD
                            <li><a href="<?php echo base_url()?>index.php/Others/Godonate">Make Donation</a></li>
               


                            <li class="dropdown"><a href="<?php echo base_url()?>index.php/Newsfeed">Projects </a></li>
                            <li class="dropdown"><a href="<?php echo base_url()?>index.php/Blog/display_comments">Blog</a></li>

                            <li><a href="<?php echo base_url()?>index.php/Newsfeed">About Us</a></li>
                            


=======
                            <li class="dropdown"><a href="#">Pages</a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url() ?>index.php/Others/GoAboutUs">About Us</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/Others/GoVolunteer">Features</a></li>
                        <li><a href="our-services.php">Sevices</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li class="dropdown">
                            <a href="testimonial-v1.php">Testimonials</a>
                            <ul class="submenu">
                                <li><a href="testimonial-v1.php">Testimonial V1</a></li>
                                <li><a href="testimonial-v2.php">Testimonial V2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="gallery.php">Gallery</a>
                            <ul class="submenu">
                                <li><a href="gallery.php">Gallery Style One</a></li>
                                <li><a href="gallery-2.php">Gallery Style Two</a></li>
                                <li><a href="gallery-3.php">Gallery Style Three</a></li>
                                <li><a href="gallery-4.php">Gallery Style Four</a></li>
                                <li><a href="gallery-5.php">Gallery Style Five</a></li>
                            </ul>
                        </li>
                        <li><a href="donation.php">Donation</a></li>
                        <li><a href="become-a-volunteer.php">Become a Volunteer</a></li>
                    </ul>
                </li>
                <li class="dropdown">

                    <a href="#" class="use1" data-toggle="modal" data-target="#myModal4">Causes</a>
                    <ul class="submenu">
                        <li><a href="single-causes.php">Single Causes</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="event.php">Event</a>
                    <ul class="submenu">
                        <li><a href="single-event.php">Single Event</a></li>
                    </ul>
                </li>

                   <li class="dropdown">
                    <a href="event.php">Submit</a>
                    <ul class="submenu">

                        <li><a href="<?php echo base_url() ?>index.php/Others/GoBlog">Infrastructure</a></li>
                        <li><a href="single-event.php">Equipment</a>
                               <ul class="submenu">
                        <li><a href="<?php echo base_url() ?>index.php/Others/GoEquip">Sports</a></li>
                        <li><a href="single-event.php">Stationary</a></li>
                        <li><a href="single-event.php">Electronic</a></li>
                         <li><a href="single-event.php">Other</a></li>

                         </ul>



                        </li>
                        <li><a href="single-event.php">Health</a>
                            <ul class="submenu">
                        <li><a href="single-event.php">Water</a></li>
                        <li><a href="single-event.php">First Aid</a></li>
                        <li><a href="single-event.php">Shoes and slippers</a></li>

                         </ul>


                        </li>
                    </ul>
                    </li>

                          <!--  <li class="dropdown"><a href="<?php echo base_url() ?>index.php/Others/GoBlog">Submit</a></li> -->
                            <li class="dropdown"><a href="<?php echo base_url() ?>index.php/Others/GoContact">Contact</a>
                            <li class="dropdown"><a href="<?php echo base_url() ?>index.php/Admin_Controller/viewPage/admin_index">LOGIN</a>
>>>>>>> a805fb8f572a8ad3e2974aad305e9bf0284f837f
<!--                                <ul class="submenu from-left">
                                    <li><a href="contact.php">Contact Style One</a></li>
                                    <li><a href="contact-2.php">Contact Style Two</a></li>
                                </ul>-->
                            </li>

                            <li><?php 
                                $loggername = $this->session->userData('loggername');
                                if ($loggername == ''){

                                    ?><a href="#" class="use1" data-toggle="modal" data-target="#myModal4">Login</a><?php


                                }else{

                                    ?><a href="<?php echo base_url()?>index.php/User/signout">Logout</a><?php
                                }  ?>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->
            </div>

        </div>

    </div>
    <!--Header Lower End-->

</header>

