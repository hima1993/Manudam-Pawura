<!DOCTYPE html>
<html>

<!-- Mirrored from wp1.themexlab.com/html/volunteer/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:40:27 GMT -->
<head>
    <meta charset="utf-8">
    <title>Volunteer Multipurpose HTML5 Donation Template | Blog Page</title>
    <!-- Stylesheets -->
    <link href="<?php echo base_url() ?>template/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>template/css/revolution-slider.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>template/css/style.css" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="js/respond.js"></script><![endif]-->
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            -o-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        body {
            font-family: "Roboto", Helvetica, Arial, sans-serif;
            font-weight: 100;
            font-size: 12px;
            line-height: 30px;
            color: #777;
            background: #801a00;
        }

        .container {
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea,
        #contact button[type="submit"] {
            font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
        }

        #contact {
            background: #F9F9F9;
            padding: 25px;
            margin:  0;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        #contact h3 {
            display: block;
            font-size: 30px;
            font-weight: 300;
            margin-bottom: 10px;
        }

        #contact h4 {
            margin: 5px 0 15px;
            display: block;
            font-size: 13px;
            font-weight: 400;
        }

        fieldset {
            border: medium none !important;
            margin: 0 0 10px;
            min-width: 100%;
            padding: 0;
            width: 100%;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea {
            width: 100%;
            border: 1px solid #ccc;
            background: #FFF;
            margin: 0 0 5px;
            padding: 10px;
        }

        #contact input[type="text"]:hover,
        #contact input[type="email"]:hover,
        #contact input[type="tel"]:hover,
        #contact input[type="url"]:hover,
        #contact textarea:hover {
            -webkit-transition: border-color 0.3s ease-in-out;
            -moz-transition: border-color 0.3s ease-in-out;
            transition: border-color 0.3s ease-in-out;
            border: 1px solid #aaa;
        }

        #contact textarea {
            height: 100px;
            max-width: 100%;
            resize: none;
        }

        #contact button[type="submit"] {
            cursor: pointer;
            width: 100%;
            border: none;
            background: #4CAF50;
            color: #FFF;
            margin: 0 0 5px;
            padding: 10px;
            font-size: 15px;
        }

        #contact button[type="submit"]:hover {
            background: #43A047;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }

        #contact button[type="submit"]:active {
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .copyright {
            text-align: center;
        }

        #contact input:focus,
        #contact textarea:focus {
            outline: 0;
            border: 1px solid #aaa;
        }

        ::-webkit-input-placeholder {
            color: #888;
        }

        :-moz-placeholder {
            color: #888;
        }

        ::-moz-placeholder {
            color: #888;
        }

        :-ms-input-placeholder {
            color: #888;
        }

        li.active a {

            background-color: #ACF619 !important;
            color: black !important;

        }

    </style>
</head>

<body>


<!-- Preloader -->
<div class="preloader"></div>

<!-- Main Header -->
<?php require 'includes/header.php';?>
<!--End of Main Header -->


<!--Sidebar Navigation-->
<?php require 'includes/navigation.php';?>
<!--Sidebar Nav End-->

<div class="page-wrapper" style="min-height: 150px;">
    <!--Sidebar Nav End-->
</div>



<!--Sidebar Page-->
<div class="sidebar-page">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <!-- <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12"> -->

<div class="col-lg-9" style="background-color: #ffffff;height:100%; margin-left:150px;width: 918px">




<ul class="nav nav-tabs" style="padding:5px">


    <li class="active"><a data-toggle="tab" href="#received" style="margin-left: 30px;margin-right:20px;background-color: #F62305;color: white;width: 150px">Drinking water</a></li>
    <li><a data-toggle="tab" href="#pending" style="margin-right:20px;background-color: #F62305;color: white;width: 150px">Food</a></li>
    <li><a data-toggle="tab" href="#notasigned" style="margin-right:20px;background-color: #F62305;color: white;width: 150px">Drinkin water</a></li>
    <li><a data-toggle="tab" href="#tab4" style="margin-right:20px;background-color: #F62305;color: white;width: 150px">taps</a></li>

</ul>







<div class="tab-content">

    <div id="received" class="tab-pane fade in active">
<!-- $$$$$$$$$$$$$ Content under the Drinking water Tab $$$$$$$$$$$$$4 -->
        <div class="container">
        <form id="contact" action="" method="post">

    <fieldset>
      <input placeholder="School" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your School" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Please Describe your request" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>
<!-- $$$$$$$$$$$$$$$$$$$$$$$ content ends $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->



    </div>






    <div id="pending" class="tab-pane fade">

               <div class="container">
        <form id="contact" action="" method="post">

    <fieldset>
      <input placeholder="School" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your School" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Please Describe your request" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>



    </div>




    <div id="notasigned" class="tab-pane fade">
             <div class="container">
        <form id="contact" action="" method="post">

    <fieldset>
      <input placeholder="School" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your School" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Please Describe your request" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>
    </div>



    <div id="tab4" class="tab-pane fade in active">

               <div class="container">
        <form id="contact" action="" method="post">

    <fieldset>
      <input placeholder="School" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your School" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Please Describe your request" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>

    </div>
</div>



</div





        </div>
    </div>
</div>


<!--Main Footer-->
<?php require 'includes/footer.php';?>

<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


<script src="<?php echo base_url() ?>template/js/jquery.js"></script>
<script src="<?php echo base_url() ?>template/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>template/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>template/js/scrollbar.js"></script>
<script src="<?php echo base_url() ?>template/js/wow.js"></script>
<script src="<?php echo base_url() ?>template/js/script.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var $_Tawk_API = {}, $_Tawk_LoadStart = new Date();
    (function () {
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
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from wp1.themexlab.com/html/volunteer/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:41:29 GMT -->
</html>