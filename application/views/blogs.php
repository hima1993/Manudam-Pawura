<?php
$overall_vote_rows = $blog_vote_overall_rows;
$overall_vote_rate = $blog_vote_overall_rate;
$overall_vote_dec_rate = $blog_vote_overall_dec_rate;
$ip_vote_rate = $blog_vote_ip_rate;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Voting System</title>
        <!--[if IE]> <script> (function() { var html5 = ("abbr,article,aside,audio,canvas,datalist,details," + "figure,footer,header,hgroup,mark,menu,meter,nav,output," + "progress,section,time,video").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
        
        


        <style type="text/css">
            /*HOLD THE RATING AND THE BASE TOGETHER*/
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
        <div class='singlepost'>
            <div class='fullpost clearfix'>
                <div class='entry'>
                    <h1 class='post-title'>
                        This is a sample blog content
                    </h1>
                    <p>
                        Posted By:&nbsp;roytuts.com,&nbsp;&nbsp;
                        Posted On:&nbsp;25-08-2015
                    </p>
                    <input type="hidden" name="blog_content_id" id="blog_content_id" value="1"/>
                    <?php
                    $stars = '';
                    echo '<div id="ajax_vote">';
                    for ($i = 1; $i <= floor($overall_vote_rate); $i++) {
                        $stars .= '<div class="star" id="' . $i . '"></div>';
                    }
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
                    <div>&nbsp;</div>
                    <p style="text-align: justify;">
                        The topic of blogging seems to come up a lot in our social media training workshops. The benefits of a quality blog are obvious – fresh content is good for your readers and your rankings. Blogs are easy to set up and even easier to update. We often tell people that if they can use Microsoft Word… they can update a blog.

                        As easy as they are to set up, they can be difficult to maintain. A good blog is filled with relevant, timely content that is updated on a regular basis. New bloggers often start out with a bang but then fizzle out when they realize that creating content can be challenging.
                    </p>
                </div>
            </div>
        </div>

<script type='text/javascript' src="<?php echo base_url()?>assets/js/jquery-1.9.1.min.js" ></script>

        <script type="text/javascript">
            
            $(function () {
    $(".star").on("mouseover", function () { //SELECTING A STAR
        $(".rating").hide(); //HIDES THE CURRENT RATING WHEN MOUSE IS OVER A STAR
        var d = $(this).attr("id"); //GETS THE NUMBER OF THE STAR

        //HIGHLIGHTS EVERY STAR BEHIND IT
        for (i = (d - 1); i >= 0; i--) {
            $(".transparent .star:eq(" + i + ")").css({"opacity": "1.0"});
        }
    }).on("click", function () { //RATING PROCESS
        var blog_id = $("#blog_content_id").val(); //GETS THE ID OF THE CONTENT
        var rating = $(this).attr("id"); //GETS THE NUMBER OF THE STAR
        var data = 'rating=' + rating + '&blog_id=' + blog_id;
        $.ajax({

            type: "POST",
            data:{"blog_id":blog_id,"rating":rating},
            url: "<?php echo base_url();?>index.php/BlogController/rateme",
            dataType:'JSON', //CALLBACK FILE
            success: function (e) {

               console.log(e);

                $("#ajax_vote").html(e); //DISPLAYS THE NEW RATING IN HTML
            },
            error: function (e) {
                alert(e);

            }
        });
    }).on("mouseout", function () { //WHEN MOUSE IS NOT OVER THE RATING
        $(".rating").show(); //SHOWS THE CURRENT RATING
        $(".transparent .star").css({"opacity": "0.25"}); //TRANSPARENTS THE BASE
    });
});
        </script>
    </body>
</html>