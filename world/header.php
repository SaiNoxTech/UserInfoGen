<?php include("../data/db.php"); ?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset='utf-8' />
    <meta name='language' content='en-US' />
    <meta http-equiv='content-language' content='en-US' />
    <meta name='distribution' content='global' />
    <meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale-1,user-scalable=no' />
    <title>Fake User Info Generator | User Identity, Account and Profile Generator</title>
    <meta name="keywords" content="user info gen,user info,fake user,fake person,generator,identity,user,profile,face,biography,occupation,order,interest,random,Indian,Us,india user generator,india,credit card,cc live,username,temp,temp mail,email,password,checker,temporary mail,temporary" />
    <meta name="description" content="Generate fake person(identity) from Us, India and all around the globe, include name,address,phone,email,employment,family,personal information like interest, online profile, brower, and more. Use for testing as database." />
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139534022-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139534022-1');
</script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400%7CMontserrat:600%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
<link href="https://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet" type="text/css" media="all" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

<!-- Template Styles -->
<link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="../assets/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/Simple-Line-Icons-Webfont/simple-line-icons.css"/>
<link rel="stylesheet" href="../assets/css/et-line-font/et-line-font.css">

<!-- Animations -->
<link rel="stylesheet" href="../assets/js/animations/css/animations.min.css"/>

<!-- Mega Menu -->
<link rel="stylesheet" href="../assets/js/megamenu/stylesheets/screen.css">

<!-- Responsive Devices Styles -->
<link rel="stylesheet" href="../assets/css/responsive-leyouts.css"/>

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="../assets/js/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" type="text/css" href="../assets/js/revolution/fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../assets/js/revolution/css/settings.css">

<!-- REVOLUTION LAYERS STYLES -->
<link rel="stylesheet" type="text/css" href="../assets/js/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="../assets/js/revolution-addons/typewriter/css/typewriter.css">

<!-- REVOLUTION NAVIGATION STYLES -->
<link rel="stylesheet" type="text/css" href="../assets/js/revolution/css/navigation.css">
<link rel="stylesheet" href="../assets/js/revolution-addons/particles/css/revolution.addon.particles.css%3Fver=1.0.3.css"/>
<link rel='stylesheet' href='../assets/js/revolution-addons/bubblemorph/css/revolution.addon.bubblemorph.css'/>
<link rel="stylesheet" href="../assets/js/magnific/magnific-popup.css">
<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
<!-- Video PopUp -->
<link rel="stylesheet" type="text/css" href="../assets/css/YouTubePopUp.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.button {
  background-color: #be09e8; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<header>
  <div class="header-section transparent pin-style sty1">
    <div class="container">
      <div class="mod-menu">
        <div class="row">
          <!-- Logo -->
          <div class="col-sm-2"><a href="index.html" title="" class="logo sty-one"><span style="font-family: 'Bangers', cursive; font-size:1.3em; color:#000">User Info Generator</span></a></div>
          <!-- End Logo -->
          <div class="col-sm-10">
            <div class="main-nav">
              <ul class="nav navbar-nav top-nav">

                <li class="visible-xs menu-icon"><a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i></a></li>
                <!-- End Mobile nav icon -->
              </ul>
              <!-- Main Nav -->
              <div id="menu" class="collapse">
                <ul class="nav navbar-nav">
                  <li class="menu"><a href="./">Home</a></li>
                   <li class="mega-menu"><a href="#">Countries </a> <span class="arrow"></span>
                      <ul class="menu-bg">
                        <li><a href="index.html#">A<i class="fa fa-angle-right float-right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul class="trbg">
                            <li><a href="./world/country.php?country_id=<?php echo 'Algeria'; ?>">Algeria</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Albania'; ?>">Albania</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Armenia'; ?>">Armenia</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Argentina'; ?>">Argentina</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Austria'; ?>">Austria</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Azerbaijan'; ?>">Azerbaijan</a></li>
                          </ul>
                        </li>
                        <li><a href="index.html#">B<i class="fa fa-angle-right float-right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul class="trbg">
                            <li><a href="./world/country.php?country_id=<?php echo 'Bangladesh'; ?>">Bangladesh</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Bahamas'; ?>">Bahamas</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Brazil'; ?>">Brazil</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Bahrain'; ?>">Bahrain</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Belgium'; ?>">Belgium</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Belarus'; ?>">Belarus</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Brunei'; ?>">Brunei</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Bolivia'; ?>">Bolivia</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Bahamas'; ?>">Bahamas</a></li>
                            <li><a href="./world/country.php?country_id=<?php echo 'Botswana'; ?>">Botswana</a></li>
                          </ul>
                        </li>
                        <li><a href="index.html#">C<i class="fa fa-angle-right float-right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul class="trbg">
                            <li><a href="pricing.html">Croatia</a></li>
                            <li><a href="pricing.html">Costa Rica</a></li>
                            <li><a href="pricing2.html">Cayman</a></li>
                            <li><a href="pricing3.html">Chile</a></li>
                            <li><a href="contact.php.html">China</a></li>
                            <li><a href="contact2.php.html">Cambodia</a></li>
                            <li><a href="contact3.php.html">Cameroon</a></li>
                            <li><a href="contact3.php.html">Colombia</a></li>
                            <li><a href="contact3.php.html">Cuba</a></li>
                            <li><a href="404.html">Cyprus</a></li>
                            <li><a href="left-sidebar.html">Czech Republic</a></li>
                          </ul>
                        </li>
                        <li><a href="index.html#">D<i class="fa fa-angle-right float-right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul class="trbg">
                             <li><a href="right-sidebar.html">Denmark</a></li>
                             <li><a href="left-nav.html">Dominican Republic</a></li>
                             <li><a href="right-nav.html">DR Congo</a></li>
                          </ul>
                        </li>
                        <li><a href="index.html#">E<i class="fa fa-angle-right float-right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul class="trbg">
                             <li><a href="right-sidebar.html">Egypt</a></li>
                             <li><a href="404.html">Emirates</a></li>
                             <li><a href="left-sidebar.html">Estonia</a></li>
                             <li><a href="right-sidebar.html">Ethiopia</a></li>
                          </ul>
                        </li>
                        <li><a href="index.html#">F<i class="fa fa-angle-right float-right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul class="trbg">
                            <li><a href="left-nav.html">Finland</a></li>
                            <li><a href="right-nav.html">Fiji</a></li>
                            <li><a href="coming-soon.html">France</a></li>
                          </ul>
                        </li>
                        <li><a href="index.html#">Popular Countries<i class="fa fa-angle-right float-right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul class="trbg">
                            <li><a href="left-nav.html">IN (India)</a></li>
                            <li><a href="right-nav.html">US (United States)</a></li>
                            <li><a href="coming-soon.html">Russia</a></li>
                            <li><a href="coming-soon.html">Australia</a></li>
                            <li><a href="coming-soon.html">Canada</a></li>
                            <li><a href="coming-soon.html">France</a></li>
                            <li><a href="coming-soon.html">Switzerland</a></li>
                            <li><a href="coming-soon.html">Pakistan</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  <li class="menu"><a href="./cc_gen.php">CC Gen</a></li>
                  <li class="menu"><a href="./username_gen.php">Username Gen</a></li>
                  <li class="menu"><a href="./cc_checker.php">CC Checker</a></li>
                  <li class="menu"><a href="./pass_gen.php">Password Gen</a></li>
                  <li class="menu"><a href="./tempmail.php">Temp Emails</a></li>
                </ul>
              </div>
              <!-- End Main Nav -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end menu-->
  </div>
</header>
