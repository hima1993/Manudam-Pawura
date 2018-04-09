



<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    

    #grad1 {
  
    background: red; /* For browsers that do not support gradients */
    background: linear-gradient(to bottom ,rgb(191, 64, 64), rgba(255,223, 32, 32) ) /* Standard syntax (must be last) */
    }

    #grad2 {
  
    background: red; /* For browsers that do not support gradients */
    background: linear-gradient(to bottom , rgba(255,223, 32, 32),rgb(191, 64, 64) ); /* Standard syntax (must be last) */
    }

    .w3-lobster {
    font-family: "Lobster", serif;
    }
    
  </style>
	<title>
		Donations
	</title>

 <meta charset="utf-8">
 <meta charset="utf-8">
        <title>Volunteer Multipurpose HTML5 Donation Template | About Us</title>
        <!-- Stylesheets -->
        <link href="<?php echo base_url()?>template/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url()?>template/css/revolution-slider.css" rel="stylesheet">
        <link href="<?php echo base_url()?>template/css/style.css" rel="stylesheet">
       <!-- dont imort this to others--> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="<?php echo base_url()?>template/css/responsive.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>template/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bootstrap-daterangepicker/daterangepicker.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

            <!-- Preloader -->
            <div class="preloader"></div>

          <!-- Main Header -->
            <?php require 'includes/header.php'; ?>
            <!--End Main Header -->
        
            <!--Sidebar Navigation-->
            <?php require 'includes/navigation.php'; ?>
            <div id="grad2" class="page-wrapper" style="min-height: 150px;">
            <!--Sidebar Nav End-->
           
            </div>


            <!--Bread Crumb-->
            

<section id="grad1" class="four-column team-section extended no-padd-top" >
	<div class="container">
  	<div class="container">

      <div style="padding-top:15px; padding-bottom:15px;">
    <p style="margin-left:110px;" class=" w3-lobster w3-xxxlarge" >Be Our Contributer ....... !!!</p>
    </div>
  <div class="jumbotron" style="margin-right: 150px;margin-top: 25px;margin-left: 100px">

    

     <?php echo form_open_multipart('Recipient/Addproject'); ?>
    

    

   


    <div class="col-lg-12 row">
      <div class="form-group col-lg-12">
        <div class="col-lg-1">
      <label for="projecttopicid" class="col-form-label">Project Topic</label>
    </div>
      
    <div class="col-lg-10" style="padding-right: 10px;">
        <input style="margin-left: 54px;"  type="text" class="form-control" name="projecttopic" id="projecttopicid" placeholder="Enter the Project Topic......">
      </div>
  </div>

      </div>



<div class = "col-lg-12 row">

    <div class="form-group col-lg-6">
      <div class="col-lg-4">
      <label for="projectcategory" class="col-form-label">Project Category</label>
      </div>
        


      <div class="col-lg-8">
          <div>
  <input type="radio" name="Category" id="eqp1" value="eqp"/>
  <label for="eqp1" class="form-check-label" for="exampleRadios1">
    Equipment
  </label>
  </div>
<div>
  <input  type="radio" name="Category" id="Infrastructure1" value="infra"/>
  <label for="Infrastructure1" class="form-check-label" for="exampleRadios2">
    Infrastructure
  </label>
</div>
<div class="form-check">
  <input  type="radio" name="Category" id="other1" value="other"/>
  <label for="other1" class="form-check-label" for="other1">
    Other
  </label>
</div>

      </div>
    </div> 


    <div class="form-group col-lg-6">
      <div class="col-lg-4">
     <label id="eqpCategory1" name="eqpCategory">Equipment Category</label>
      </div>
        


      <div class="col-lg-8">
          <select class="form-control" id="eqpCategory" name="eqpCategory" required>
                                    <option value="Sports">Sports</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Stationary">Stationary</option>
                                   

          </select>

      </div>
    </div> 

  </div>



    <div class="col-lg-12 row">
      <div class="form-group col-lg-12">
        <div class="col-lg-1">
      <label for="Description" class="col-form-label">Description</label>
    </div>
      
    <div class="col-lg-10" style="padding-right: 10px;">
      <textarea style="margin-left: 54px;" class="form-control" name="description" rows="4" placeholder="Project Description ..."></textarea>
        
      </div>
  </div>

      </div>


<div class="col-lg-12 row">
      <div class="form-group col-lg-12">
        <div class="col-lg-1">
      <label for="file_name" class="col-form-label">Attachment</label>
    </div>
      
    <div class="col-lg-10" style="padding-right: 10px;">
      <input style="margin-left: 54px;" type="file" class="form-control" name ="file_name" placeholder="Image">
      
        
      </div>
  </div>

      </div>


      <div class = "col-lg-12 row">

    <div class="form-group col-lg-6">
      <div class="col-lg-4">
      <label for="datepicker" class=" col-form-label">Start Date</label>
      </div>
        


      <div class="col-lg-8">
          <div class="input-group date">
              <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
              </div>
          <input type="text" class="form-control pull-right" id="datepicker" name="startdate" required>
          </div>

      </div>
    </div> 


    <div class="form-group col-lg-6">
      <div class="col-lg-4">
      <label  for="datepicker1" class="col-form-label">Completion Date</label>
      </div>
        


      <div class="col-lg-8">
          <div class="input-group date">
              <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
              </div>
          <input type="text" class="form-control pull-right" id="datepicker1" name="completiondate" required>
          </div>

      </div>
    </div> 

  </div>








    
    <button  style="margin-left: 150px;margin-top: 18px" class="theme-btn light-btn" type="submit">Post a Project</button>
    
  	</div>
  </section>


    <section class="parallax-section" style="background-image:url(images/parallax/image-1.jpg);">
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


        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


        <script src="<?php echo base_url()?>template/js/jquery.js"></script> 
        <script src="<?php echo base_url()?>template/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>template/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url()?>template/js/scrollbar.js"></script>
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
<script src="<?php echo base_url()?>template/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

      <script >
          $(function() {
              //Date picker
              $('#datepicker').datepicker({
                  autoclose: true
              })
          })

          $(function() {
              //Date picker
              $('#datepicker1').datepicker({
                  autoclose: true
              })
          })

      </script>



      <script type="text/javascript">


        
       $(document).ready(function(){
        $("#eqpCategory").hide();
        $("#eqpCategory1").hide();
          $("[name=Category]").change(function(){  // Whenever the radio buttons change
            $("#eqpCategory").toggle($("[name=Category]").index(this)===0);
            $("#eqpCategory1").toggle($("[name=Category]").index(this)===0);  // Only keep the list open when it's the last option (First option = 0, Third option = 2)
          });
        });










      </script>

</body>
</html>