<?php include('includes/basic_layout.inc.php'); ?>

<!DOCTYPE html>
<html >
<head>
  

  <?php head('index'); ?>
  <link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- ==========================                    slider js                    ============================== -->


<script src="js/jssor.slider-22.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                    var slider = document.getElementById('jssor_1');
                    var dean_msg = document.getElementsByClassName('head-msg-container');
                    // dean_msg[0].style.marginTop = slider.style.height;
                    var margin = parseInt(slider.style.height);
                    margin += 55;
                    console.log(margin);
                    dean_msg[0].style.marginTop = margin + 'px';
                    console.log(margin);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>

<!-- ===========================                   slider js ends               ============================ -->




 <!-- =========================================    SLIDER STYLING     ====================     -->


<style type="text/css">
  
  .jssorb05 {
    position: absolute;
  }
  
  .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
    position: absolute;
    /* size of bullet elment */
    width: 16px;
    height: 16px;
    background: url('images/b05.png') no-repeat;
    overflow: hidden;
    cursor: pointer;
  }
  
  .jssorb05 div { background-position: -7px -7px; }
  .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
  .jssorb05 .av { background-position: -67px -7px; }
  .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

  .jssora22l, .jssora22r {
    display: block;
    position: absolute;
    /* size of arrow element */
    width: 40px;
    height: 58px;
    cursor: pointer;
    background: url('images/a22.png') center center no-repeat;
    overflow: hidden;
  }
  
  .jssora22l { background-position: -10px -31px; }
  .jssora22r { background-position: -70px -31px; }
  .jssora22l:hover { background-position: -130px -31px; }
  .jssora22r:hover { background-position: -190px -31px; }
  .jssora22l.jssora22ldn { background-position: -250px -31px; }
  .jssora22r.jssora22rdn { background-position: -310px -31px; }
  .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
  .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }

/*
 =========================================        SLIDER STYLING ENDS    ====================     */


</style>
</head>

<body>
  
<!--===================================================-->
<!--=================== NAVBAR SECTION=================  -->
<!--===================================================-->
<section class="hero fixed">
  <?php navbar('index'); ?>
  
<!-- ==========================             SLIDER SECTION STARTS           =============================== -->

  <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;transform: translateZ(0);
    z-index: -202;">
        <!-- Loading Screen -->
    <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
  
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
      <div>
        <img data-u="image" src="images/gate.png" />
      </div>
      <div>
        <img data-u="image" src="images/admin block.png" />
      </div>
      <div>
        <img data-u="image" src="images/cot.png" />
      </div>
    </div>
    
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
      <!-- bullet navigator item prototype -->
      <div data-u="prototype" style="width:16px;height:16px;"></div>
    </div>
      <!-- Arrow Navigator -->
      <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
      <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
  </div>



<!-- ==========================             SLIDER SECTION ENDS           =============================== -->


</section>
<!--================================================-->
<!--================= DEAN MESSAGE =================-->
<!--================================================-->
<section class="head-msg-container">
  <div class="wrap">
    <div class="section-title">
      <h2>Message From Anshul</h2>
    </div>
    <div class="section-content">
      <div class="fa fa-quote-right quote-symbol-bottom" aria-hidden="true"></div>
      <div class="left-col">
        <div class="dean-avatar-container">
          <div class="dean-avatar"></div>
        </div>
        <a href="pages/faculty.php"><button class="btn btn-border-o btn-yellow">Meet The Rest Of The Team</button></a>
      </div>
      <div class="right-col">
        <div class="fa fa-quote-right quote-symbol-top" aria-hidden="true"></div>
        <div class="dean-msg">
          <p>Today is an era of technocracy that is boosting forward and the country is progressing implausibly in every sphere. To keep up with this rhythm of fast changing society and producing a remarkable quality of youth is the need of the hour. The increasing numbers of technological institutions keep emerging in the scenario to realize the vision of enlisting India among the developed nations.</p>
          <p>G.B Pant University of Agriculture & Technology ranks among the top universities and has set standards of distinction and success because of the alumni of this college.<a href="#" style="visibility:hidden" data-hover="Read more..">Read more...</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================================-->
<!--================= NOTICE BOARD =================-->
<!--================================================-->
<section class="featured-posts">
  <div class="wrap">
    <div class="announcements">
      <div class="ticket-container">
        <h3 class="ticket-title">announcements</h3>
        <ul class="ticket-machine">
          <li class="ticket"><a class="ticket-anchor" href="#"><span class="ticket-date"><span class="ticket-date-month">Jan</span><span class="ticket-date-day">16</span></span><span class="ticket-desc">Fee-Details and Fee-Scroll for Semester II(2016-2017)</span><span class="dots-container"><span class="dots"></span><span class="dots"></span><span class="dots"></span></span></a></li>
          <li class="ticket"><a class="ticket-anchor" href="#"><span class="ticket-date"><span class="ticket-date-month">Dec</span><span class="ticket-date-day">25</span></span><span class="ticket-desc">Instructions and personal data sheet for the counselling</span><span class="dots-container"><span class="dots"></span><span class="dots"></span><span class="dots"></span></span></a></li>
          <li class="ticket"><a class="ticket-anchor" href="#"><span class="ticket-date"><span class="ticket-date-month">Dec</span><span class="ticket-date-day">7</span></span><span class="ticket-desc">Announcement for B.Tech first year and second year</span><span class="dots-container"><span class="dots"></span><span class="dots"></span><span class="dots"></span></span></a></li>
          <li class="ticket"><a class="ticket-anchor" href="#"><span class="ticket-date"><span class="ticket-date-month">Nov</span><span class="ticket-date-day">23</span></span><span class="ticket-desc">Documents required for the first round of counselling</span><span class="dots-container"><span class="dots"></span><span class="dots"></span><span class="dots"></span></span></a></li>
        </ul>
      </div>
    </div>
    <div class="events">
      <div class="ticket-container">
        <h3 class="ticket-title">events</h3>
        <ul class="ticket-machine">
          <li class="ticket"><a class="ticket-anchor" href="#"><span class="ticket-date"><span class="ticket-date-month">Feb</span><span class="ticket-date-day">2</span></span><span class="ticket-desc">Expression of interest for Pant Multi crop thresher FMPE</span><span class="dots-container"><span class="dots"></span><span class="dots"></span><span class="dots"></span></span></a></li>
          <li class="ticket"><a class="ticket-anchor" href="#"><span class="ticket-date"><span class="ticket-date-month">Jan</span><span class="ticket-date-day">23</span></span><span class="ticket-desc">Project Research Work- TEQIP Phase II</span><span class="dots-container"><span class="dots"></span><span class="dots"></span><span class="dots"></span></span></a></li>
          <li class="ticket"><a class="ticket-anchor" href="#"><span class="ticket-date"><span class="ticket-date-month">Dec</span><span class="ticket-date-day">14</span></span><span class="ticket-desc">SAE- COT Collegiate Club website uploaded</span><span class="dots-container"><span class="dots"></span><span class="dots"></span><span class="dots"></span></span></a></li>
          <li class="ticket"><a class="ticket-anchor" href="#"><span class="ticket-date"><span class="ticket-date-month">Nov</span><span class="ticket-date-day">23</span></span><span class="ticket-desc">STP on Techno-economics of PV Energy Systems</span><span class="dots-container"><span class="dots"></span><span class="dots"></span><span class="dots"></span></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--================================================-->
<!--================= COLLEGE SLOGAN =================-->
<!--================================================-->
<section class="college-value flex center" style="background:#222;">
  <h1 style="margin:70px 0;">Curiosity is our drive. Excellence is our legacy.</h1>
</section>
<!--================================================-->
<!--================= FEATURED LINKS ===============-->
<!--================================================-->
<section class="featured-links">
  <div class="wrap">
    <div class="card">
      <h4>Student Activities</h4>
      <ul class="featured-links-list">
        <li class="featured-links-list-item"><a href="#">SAE - Collegiate Club</a></li>
        <li class="featured-links-list-item"><a href="#">Robotics Club</a></li>
        <li class="featured-links-list-item"><a href="#">Branch Chapter</a></li>
        <li class="featured-links-list-item"><a href="#">Engg &amp; Tech Society</a></li>
        <li class="featured-links-list-item"><a href="#">ISTE Pantnagar Chapter</a></li>
        <li class="featured-links-list-item"><a href="#">Student Publications</a></li>
      </ul>
    </div>
    <div class="card">
      <h4>Alumni</h4>
      <ul class="featured-links-list">
        <li class="featured-links-list-item"><a href="#">Alumni Associations</a></li>
        <li class="featured-links-list-item"><a href="#">Alumni Events</a></li>
        <li class="featured-links-list-item"><a href="#">Alumni Publications</a></li>
        <li class="featured-links-list-item"><a href="#">Alumni Contribution</a></li>
      </ul>
    </div>
    <div class="card">
      <h4>Campus Life</h4>
      <ul class="featured-links-list">
        <li class="featured-links-list-item"><a href="#">Facilities</a></li>
        <li class="featured-links-list-item"><a href="#">Co Curricular Activities</a></li>
        <li class="featured-links-list-item"><a href="#">Housing and Residence</a></li>
        <li class="featured-links-list-item"><a href="#">Security</a></li>
        <li class="featured-links-list-item"><a href="#">Student Welfare</a></li>
      </ul>
    </div>
  </div>
</section>
<!--================================================-->
<!--================= TIMELINE EVENT =================-->
<!--================================================-->
<section class="timeline"></section>
<!--================================================-->
<!--================= FOOTER =================-->
<!--================================================-->

<?php footer(); ?>

  <script src='https://use.fontawesome.com/f920fb7102.js'></script>

    <script src="js/index.js"></script>

 <script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>
