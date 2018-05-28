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
    </head>

    <body>
        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- Main Header -->
            <?php require 'includes/header.php';?>
			<header class="main-header fixed">


    <!--Header Lower-->

    <!--Header Lower End-->

</header>
            <!--End Main Header -->

<div class="item span9" style="margin-top: 120px;margin-right: 100px">
  <div class="item span9" >
    <ul class="thumbnails">

<?php

foreach ($post_data as $item) {
	?>
    <center>

         <li class="span5" style="margin-left: 100px;margin-top:40px ;margin-bottom: 30px ; box-shadow: 5px 5px 5px 5px rgba(20, 2, 4, 0.2);width: 50%;height:50%">

           <div class="thumbnail">
            <h3 style="padding-top:25px ;padding-bottom:25px"><?php echo $item->title; ?></h3>
               <?php echo "<img src='" . base_url() . "assets/business/" . $item->image_path . "' alt=''/>" ?>
               <div class="caption">

                 <p><h4 style=""><?php echo $item->content; ?></h4></p>
               </div>
               
                <form>
                 <div class="form-group">
                    
                     <textarea class="form-control" rows="2" id="comment" placeholder="write a comment"></textarea>
                     <input style="margin-top:10px;" class="btn btn-info btn-xs" type="submit" value="Submit">
                 </div>
                </form>
              




           </div>
         </li>


<?php

	?>

</ul>
</div>
<div class="item span9">
    <ul class="thumbnails">


<?php }
?>

</ul>
</div>

    </div>


            <!--Main Footer-->

        </div>
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