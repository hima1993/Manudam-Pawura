<!DOCTYPE html>
<html>

    <!-- Mirrored from wp1.themexlab.com/html/volunteer/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:41:35 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Volunteer Multipurpose HTML5 Donation Template | Contact Us Style Two</title>
        <!-- Stylesheets -->
        <link href="<?php echo base_url()?>template/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url()?>template/css/revolution-slider.css" rel="stylesheet">
        <link href="<?php echo base_url()?>template/css/style.css" rel="stylesheet">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="<?php echo base_url()?>template/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>

    <body>
        

            <!-- Preloader -->
            <div class="preloader"></div>

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
                    Pages  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Contact Us</a>
                </div>
            </div>

            <!--Contact Us Section-->
            <div class="sidebar-page">
                <div class="auto-container">

                    <div class="row clearfix">

                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <section class="contact-section">
                                <div class="sec-title">
                                    <h2>Contact <strong>us</strong></h2>
                                </div>

                                <!--Map Area-->
                                <div class="map-section">
                                    <div class="map-container" id="map-location"></div>
                                </div>
                                <br>

                                <div class="form">

                                    <form id="contact-form" method="post" action="http://wp1.themexlab.com/html/volunteer/sendemail.php">
                                        <div class="row clearfix">
                                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group-inner">
                                                    <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                                                    <div class="field-outer">
                                                        <input type="text" name="username" id="your-name" placeholder="Your Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
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
                                    </form>

                                </div>

                            </section>
                        </div>

                        <!--Sidebar-->	
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

                                <!-- Contact Information -->
                                <div class="widget contact-info">
                                    <div class="sec-title"><h3>Contact <strong>information</strong></h3></div>
                                    <div class="text">If you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting new business.</div>
                                    <ul class="info">
                                        <li><strong>Email</strong> <a href="mailto:volunteer@email.com">volunteer@email.com</a></li>
                                        <li><strong>Phone</strong> +49 123 456 789</li>
                                        <li><strong>Fax</strong> +49 123 456 789</li>
                                        <li><strong>Website</strong> <a href="http://www.envato.com/">http://www.envato.com</a></li>
                                    </ul>
                                </div>

                            </aside>


                        </div>
                        <!--Sidebar-->

                    </div>
                </div>
            </div>


            <!--Main Footer-->
           <?php require 'includes/footer.php'; ?><footer class="main-footer">

                <!--Footer Upper-->        
                <div class="footer-upper">
                    <div class="auto-container">
                        <div class="clearfix">

                            <!--Two 4th column-->
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="row clearfix">

                                    <!--Footer Column-->
                                    <div class="col-md-6 col-sm-6 col-xs-12 column">
                                        <div class="footer-widget about-widget">
                                            <h2>About <strong>Us</strong></h2>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                        </div>
                                    </div>

                                    <!--Footer Column-->
                                    <div class="col-md-6 col-sm-6 col-xs-12 column">
                                        <div class="footer-widget recent-posts">
                                            <h2>Recent <strong>Posts</strong></h2>	
                                            <div class="post">
                                                <h4><a href="#">Help our children in africa to educate</a></h4>
                                                <div class="post-info">March 21, 2015 / <a href="#">31 comments</a></div>
                                            </div>

                                            <div class="post">
                                                <h4><a href="#">We are happy to have 1000 volunteers</a></h4>
                                                <div class="post-info">March 18, 2015 / <a href="#">21 comments</a></div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Two 4th column-->
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="row clearfix">
                                    <!--Footer Column-->
                                    <div class="col-md-6 col-sm-6 col-xs-12 column">
                                        <div class="footer-widget twitter-feeds">
                                            <h2>Recent <strong>Tweets</strong></h2>	
                                            <div class="feed">
                                                <div class="icon"><span class="fa fa-twitter"></span></div>
                                                <div class="feed-content">Check out our donation programs here <a href="#">@http://t.co/8dfkjht</a></div>
                                                <div class="time text-right"><em>15 mins ago</em></div>
                                            </div>

                                            <div class="feed">
                                                <div class="icon"><span class="fa fa-twitter"></span></div>
                                                <div class="feed-content">Help our children in south  africa  <a href="#">@http://t.co/7gfkjht</a></div>
                                                <div class="time text-right"><em>15 mins ago</em></div>
                                            </div>

                                        </div>
                                    </div>

                                    <!--Footer Column-->
                                    <div class="col-md-6 col-sm-6 col-xs-12 column">
                                        <div class="footer-widget popular-tags">
                                            <h2>Popular <strong>Tags</strong></h2>
                                            <a href="#">awesome</a>
                                            <a href="#">strategy</a>
                                            <a href="#">development</a>
                                            <a href="#">css</a>
                                            <a href="#">photoshop</a>
                                            <a href="#">photography</a>
                                            <a href="#">html</a>
                                            <a href="#">charity</a>
                                            <a href="#">charity</a>
                                            <a href="#">organisations</a>
                                            <a href="#">php</a>
                                            <a href="#">foundation</a>
                                            <a href="#">donations</a>
                                            <a href="#">money</a>
                                            <a href="#">children</a>
                                            <a href="#">spendings</a>
                                            <a href="#">help</a>
                                            <a href="#">housing</a>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <!--Footer Bottom-->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <!--Copyright-->
                        <div class="copyright">Copyright 2015 by <strong>Volunteer - Charity and Fundraising PSD Template</strong> | All rights reserved</div>
                    </div>
                </div>

            </footer>

     
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


        <script src="<?php echo base_url()?>template/js/jquery.js"></script> 
        <script src="<?php echo base_url()?>template/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>template/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url()?>template/js/scrollbar.js"></script>
        <script src="<?php echo base_url()?>template/js/validate.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo base_url()?>template/js/googlemaps.js"></script>
        <script src="<?php echo base_url()?>template/js/wow.js"></script>
        <script src="<?php echo base_url()?>template/js/script.js"></script>
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

    <!-- Mirrored from wp1.themexlab.com/html/volunteer/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:41:35 GMT -->
</html>