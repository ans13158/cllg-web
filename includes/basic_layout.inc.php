<?php

function head($page_name){

  $path_prefix='';    // adds '../' in paths for pages other than index
  if($page_name!='index')$path_prefix='../';
  
  echo '
  <meta charset="UTF-8">
  <title>College of Technology</title>
  <link rel="shortcut icon" href="'.$path_prefix.'images/favicon.ico" type="image/ico" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,500">
  <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Roboto:400,500,70">
  <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="'.$path_prefix.'css/common.css">';
}

function navbar($page_name){
  
  $path_prefix='';    // adds '../' in paths for pages other than index
  if($page_name!='index')$path_prefix='../';
  
  echo '  
  <nav class="nav">
    <div class="header-mobile">
      <div class="head">
        <a class="mobile-logo" href="#">
        <div class="logo"></div></a>
        <div class="right"><span class="dehaze" onclick="show_menu()"><i class="material-icons">dehaze</i></span></div>
      </div>
      <div class="menu-contents">
        <div id="menu">
          <div class="panel list-group">

            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sm" data-parent="#menu">About Us</a>
            <div id="sm" class="sublinks collapse">
              <a class="list-group-item small">Administration</a>
              <a class="list-group-item small">Mission and Vision</a>
              <a class="list-group-item small">Best Practices</a>
              <a class="list-group-item small">Related Links</a>
              <a class="list-group-item small">How to Reach</a>
            </div>

            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sl" data-parent="#menu">Admissions</a>
            <div id="sl" class="sublinks collapse">
              <a class="list-group-item small">Programs</a>
              <a class="list-group-item small">Admissions</a>
              <a class="list-group-item small">Fee Details</a>
            </div>

            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sn" data-parent="#menu">Academics</a>
            <div id="sn" class="sublinks collapse">
              <a class="list-group-item small">Advisory System</a>
              <a class="list-group-item small">Education System</a>
              <a class="list-group-item small">Departments</a>
              <a class="list-group-item small">Course Outline</a>
            </div>

            <a href="#" class="list-group-item">People</a>
            <a href="#" class="list-group-item">Research</a>

          </div>
        </div>
      </div>
    </div>
    <!--Put Mobile navbar content here-->
    <div class="nav-full"> <a class="nav-logo" href="#">
        <div class="logo"></div></a>
      <div class="nav-primary">
        <ul class="nav-list nav-primary-list">
          <li class="nav-list-item nav-primary-item"><a class="nav-btn" href="#"><span>About Us</span></a>
            <div class="nav-sub">
              <div class="nav-sub-img"><img src="'.$path_prefix.'images/aboutUs.png"></div>
              <ul class="nav-sub-list">
                <li><a href="#">Administration</a></li>
                <li><a href="#">Mission and Vision</a></li>
                <li><a href="#">Best Practices</a></li>
                <li><a href="#">Related Links</a></li>
                <li><a href="#">How to Reach</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-list-item nav-primary-item"><a class="nav-btn" href="#"><span>Admissions</span></a>
            <div class="nav-sub">
              <div class="nav-sub-img-admissions"><img src="'.$path_prefix.'images/admission.png"></div>
              <ul class="nav-sub-list">
                <li><a href="#">Programs</a></li>
                <li><a href="#">Admissions</a></li>
                <li><a href="#">Fee Details</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-list-item nav-primary-item"><a class="nav-btn" href="#"><span>Academics</span></a>
            <div class="nav-sub">
              <div class="nav-sub-img"><img src="'.$path_prefix.'images/academics.png"></div>
              <ul class="nav-sub-list">
                <li><a href="#">Advisory System</a></li>
                <li><a href="#">Education System</a></li>
                <li><a href="#">Departments</a></li>
                <li><a href="#">Course Outline</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <div class="nav-secondary">
      <ul class="nav-list nav-secondary-list">
        <li class="nav-list-item nav-secondary-item"><a class="nav-btn" href="#"><span>People</span></a></li>
        <li class="nav-list-item nav-secondary-item"><a class="nav-btn" href="#"><span>Research</span></a></li>
        <li class="nav-list-item nav-secondary-item"><a class="nav-btn" href="#"><span><i class="fa fa-search" aria-hidden="true"></i></span></a></li>
      </ul>
      </div>
    </div>
  </nav>

';
}


function footer(){
  echo '
<footer class="fixed-footer">
  <div class="upper-footer">
    <div class="wrap">
      <div class="cta">
        <form onsubmit="return sendFeedback()" name="feedback">
          <div class="input-container">
            <input class="feedback-msg" type="text" placeholder="Any suggestions or query ?" name="message" required="required"/>
            <input class="feedback-email" type="email" placeholder="Email Id" name="email" required="required"/>
          </div>
          <button type="submit" onclick="return sendFeedback()"> <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </form>
      </div>
      <div class="links">
        <div class="footer-sub-links-col">
          <div class="holder">
            <h4 class="footer-sub-links-col-title">Information</h4>
            <ul class="footer-sub-links-col-list">
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Notices">Notices</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="TEQIP(Phase II)">TEQIP(Phase II)</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Training">Training</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Vacancies">Vacancies</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="RTI">RTI</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Tenders">Tenders</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Mandatory disclosure">Mandatory disclosure</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-sub-links-col">
          <div class="holder">
            <h4 class="footer-sub-links-col-title">Important Links</h4>
            <ul class="footer-sub-links-col-list">
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Training and Placement Cell">Training and Placement Cell</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Discussion Forum">Discussion Forum</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Webmail">Webmail</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Registrar\'s Office">Registrar\'s Office</a></li>
              <li class="footer-sub-links-col-list-item"><a href="http://gbpuat.ac.in/" target="_blank" data-hover="University Website">University Website</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Online Complaint Form">Online Complaint Form</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Center Computing Facility">Center Computing Facility</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Gallery">Gallery</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-sub-links-col">
          <div class="holder">
            <h4 class="footer-sub-links-col-title">Achievements</h4>
            <ul class="footer-sub-links-col-list">
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Student">Student</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Faculty">Faculty</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Alumni">Alumni</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-sub-links-col">
          <div class="holder">
            <h4 class="footer-sub-links-col-title">Publications</h4>
            <ul class="footer-sub-links-col-list">
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Audient">Audient</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Latitude 29">Latitude 29</a></li>
              <li class="footer-sub-links-col-list-item"><a href="#" data-hover="Newsletter">Newsletter</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lower-footer">
    <div class="wrap">
      <div class="lower-footer-links">
        <ul>
          <li><a>Feedback</a></li>
          <li><a>Privacy</a></li>
          <li><a>Credits</a></li>
          <li><a>Archive</a></li>
          <li><a>Subscribe</a></li>
          <li><a>About Site</a></li>
        </ul>
      </div>
      <div class="copyright-details">
        <p>Copyright  &#xA9; Maintained and designed by College Website Team.</p>
      </div>
    </div>
  </div>
</footer>
<script>
  function show_menu(){
  if($(".menu-contents").css("display")=="none"){
    $(".menu-contents").show();
    $(".menu-contents").animate({left: "0%"}, "medium");
  }
  else {
    $(".menu-contents").animate({left: "100%"}, "medium", function(){

    $(".menu-contents").hide();
    });
  }
}
</script>


';

}

?>