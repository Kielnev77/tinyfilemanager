<?php
if($jos['article_id'] != NULL)
{
  $title = str_replace('brand123',ucfirst($titlebrand),$jos['landingarticle']['title']);
  $meta_description = str_replace('brand123',ucfirst($titlebrand),$jos['landingarticle']['meta_description']);
  $long_description = str_replace('brand123',ucfirst($titlebrand),$jos['landingarticle']['long_description']);
}
?>
<html amp lang="id">

<head>
  <meta charset="utf-8" />
  <link rel="canonical" href="<?php echo $canonical_url; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?php echo strtoupper($title); ?></title>
  <meta name="description" content="<?php echo $meta_description; ?>">
  <meta name="author" content="<?php echo strtoupper($titlebrand); ?>">
  <meta name="robots" content="index, follow">

  <!-- Open Graph Meta -->
  <meta property="og:site_name" content="<?php echo strtoupper($titlebrand); ?>">
  <meta property=" og:title" content="<?php echo strtoupper($title); ?>">
  <meta property="og:description" content="<?php echo $meta_description; ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="website">
  <meta name="og:locale" content="ID_id">
  <meta property="og:image" content="<?php echo $logo; ?>">

  <!-- Icons -->
  <link rel="shortcut icon" href="<?php echo $favicon; ?>">
  <link rel="icon" type="image/png" sizes="192x192"
    href="<?php echo $favicon; ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicon; ?>">
  <!-- END Icons -->

  <style amp-boilerplate>
    body {
      -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    }


    @-webkit-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @-moz-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @-ms-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @-o-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }
  </style>
  <noscript>
    <style amp-boilerplate>
      body {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none;
      }
    </style>
  </noscript>
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>

  <style amp-custom>
    @font-face {
      font-family: title;
      src: url(fonts/poppins.ttf) format("opentype");
      font-weight: 100
    }

    body,
    html {
      padding: 0;
      margin: 0
    }

    body {
      font-family: 'text', helvetica, georgia;
      background: #202020;
      color: #f0f0f0;
    }

    table {
      text-align: center;
      margin: auto;
      width: 100%;
      padding: 0;
      margin: 0;
      border-collapse: collapse;
    }

    .title {
      font-family: 'title', helvetica, georgia;
    }

    .wrapper {
      background: #101010;
      padding-top: 105px;
      background-repeat: no-repeat;
      background-size: cover;
    }

    @media(min-width:0) {

      .header,
      .content,
      .footer .row-one {
        width: 100%;
        margin: auto;
        box-sizing: border-box;
        text-align: justify;

      }

      .header {
        padding: 0 10px;
        background: #101010;
        border-bottom: 2px solid #ffc107;
        height: 105px;
        line-height: 105px;
        position: fixed;
        left: 50%;
        transform: translateX(-50%);
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        z-index: 11;
      }

      .logo {
        width: 33%;
        max-width: 260px;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 105px
      }

      .img-logo {
        flex-basis: 0;
        -ms-flex-preferred-size: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
      }

      .menu {
        float: right
      }

      .button {
        letter-spacing: 2px;
        font-weight: bold;
        text-align: center;
        display: inline-block;
        width: 105px;
        height: 50px;
        line-height: 50px;
        vertical-align: middle;
        position: relative;
        top: -3px;
        background: linear-gradient(to bottom, #ffb700 0%, #ffea00 100%);
        font-size: 0.9em;
        border-radius: 8px;
        animation: blinking 1.5s infinite;
        transition: all 0.5s;
        touch-action: manipulation;
        cursor: pointer;
      }

      .button:first-child {
        background: linear-gradient(to bottom, #ebb513 0%, #ffc107 100%);
        color: #fff;
        margin-right: 5px;
      }

      .menuButton td {
        width: 50%;
      }

      .secondaryButton {
        letter-spacing: 5px;
        font-weight: bold;
        text-align: center;
        display: inline-block;
        width: 100%;
        margin: 0 auto;
        height: 40px;
        line-height: 40px;
        vertical-align: middle;
        position: relative;
        background: linear-gradient(to bottom, #ebb513 0%, #ffc107 100%);
        font-size: 1em;
      }

      .secondaryButton2 {
        letter-spacing: 5px;
        font-weight: bold;
        text-align: center;
        display: inline-block;
        width: 100%;
        margin: auto;
        height: 40px;
        line-height: 40px;
        vertical-align: middle;
        position: relative;
        background: linear-gradient(to bottom, #ffb700 0%, #ffea00 100%);
        font-size: 1em;
      }

      .secondaryButton3 {
        letter-spacing: 5px;
        font-weight: bold;
        text-align: center;
        display: inline-block;
        width: 100%;
        height: 40px;
        line-height: 40px;
        vertical-align: middle;
        position: relative;
        background: linear-gradient(to bottom, #ffb700 0%, #ffea00 100%);
        font-size: 1em;

      }


      .footer-menu-list {
        position: fixed;
        left: 0;
        bottom: 0;
        height: 50px;
        width: 100%;
        box-sizing: border-box;
        background: #101010;
        color: #ffffff;
      }

      .footer-menu {
        width: 25%;
        height: 50px;
        line-height: 0.9em;
        padding-top: 8px;
        text-align: center;
        float: left
      }

      .footer-menu:active {
        background: #202020
      }

      .footer-menu small {
        font-size: 0.75em
      }

      .footer {
        padding: 0px 0 50px 0;
        font-size: 0.85em
      }

      .footer .row-one .section {
        width: 24%;
        height: 135px;
        float: left;
        margin-top: 10px;
        margin-left: 1%
      }

      .footer .row-one .section:first-child {
        margin-left: 0
      }

      .footer .row-one .section .desc {
        margin-top: 5px;
        line-height: 1.5;
        color: #999
      }

      .footer .row-one .section a:hover,
      .footer .row-two a:hover div {
        color: #999;
        text-decoration: underline
      }

      .footer .row-two,
      .footer .row-three {
        margin: 15px 40px 40px 40px;
        text-align: center
      }

      .footer .row-two {
        padding: 0 20px;
        text-align: left
      }

      .footer .row-two a {
        color: #999
      }

      .footer .row-two div {
        display: inline-block;
        padding: 5px;
        margin: 3px 2px;
        font-size: 0.95em;
        border-radius: 3px;
        border: 1px dotted #999
      }

      .imgAnimation {
        margin: auto;
        animation: zoomin 1.5s infinite;
        transition: all 0.5s;
        touch-action: manipulation;
        cursor: pointer;
      }

      .progress {
        background: rgba(255, 255, 255, 0.1);
        justify-content: flex-start;
        border-radius: 100px;
        align-items: center;
        position: relative;
        padding: 0 0px;
        display: flex;
        height: 30px;
        width: 100%;
      }

      .progress-value {
        animation: load 3s normal forwards;
        box-shadow: 0 10px 40px -10px #fff;
        border-radius: 100px;
        background: linear-gradient(90deg, rgba(31, 177, 46, 1) 0%, rgba(32, 232, 115, 1) 100%);
        height: 20px;
        width: 100%;
        text-align: center;
      }

      .progress-value2 {
        animation: load2 3s normal forwards;
        box-shadow: 0 10px 40px -10px #fff;
        border-radius: 100px;
        background: linear-gradient(90deg, rgba(31, 177, 46, 1) 0%, rgba(32, 232, 115, 1) 100%);
        height: 20px;
        width: 0;
        text-align: center;
      }

      .progress-value3 {
        animation: load3 3s normal forwards;
        box-shadow: 0 10px 40px -10px #fff;
        border-radius: 100px;
        background: linear-gradient(90deg, rgba(31, 177, 46, 1) 0%, rgba(32, 232, 115, 1) 100%);
        height: 20px;
        width: 0;
        text-align: center;
      }

      .rtpSlot {
        margin-top: 10px;
        text-align: center;
        width: 100%;
      }

      .rtpSlot img {
        width: 95%;
        height: 30px;
        height: 100px;
      }

      .rtpSlot h2 {
        color: #ff9900;
      }

      .rtpGacor {
        padding-top: 40px;
        width: 100%;
        margin: auto;
        text-align: center;
        animation: zoomin 1.5s infinite;
        transition: all 0.5s;
        touch-action: manipulation;
        cursor: pointer;
      }

      .rtpGacor img {
        width: 100%;
        margin: auto;
        text-align: center;
      }

      .socialMedia {
        width: 100%;
        margin: auto;
        text-align: center;
        margin-top: 50px;
      }

      .socialMedia img {
        width: 30px;
        height: 30px;
        text-align: center;
        margin: auto;
      }
    }

    @media(min-width:500px) {
      #sidebar {
        width: 40%
      }

      .footer .row-one {
        display: block
      }
    }

    @media(min-width:650px) {}

    @media(min-width:824px) {
      .header {
        width: 100%;
      }

      .content {
        width: 80%;
        max-width: 1150px
      }

      .header {
        padding: 0 20px
      }

      .button {
        width: 10em;
        font-size: 1.2em
      }

      .button:first-child {
        margin-right: 10px;
      }

      .logo {
        width: 20%
      }



      .content {
        background: rgba(0, 0, 0, 0.5);
        min-height: 325px
      }

      .footer {
        padding-bottom: 20px
      }


      .footer .row-one .section {
        width: 15.666667%;
        float: left;
        margin-left: 1%
      }

      .imgAnimation {
        left: 50%;
        margin: auto;
        animation: zoomin 1.5s infinite;
        transition: all 0.5s;
        touch-action: manipulation;
        cursor: pointer;
        width: 50%;
      }
    }


    * {
      box-sizing: border-box
    }

    h2 {
      margin: 0;
      list-style-type: none;
      padding: 0;
    }

    h2 {
      font-size: 2em;
      padding-bottom: 5px;
    }

    h3,
    p {
      margin: 0
    }

    li {
      margin-top: 5px;
      color: #f0f0f0
    }

    ul {
      margin-right: 5px;
    }

    a {
      text-decoration: none;
      color: #ffffff;
    }

    .green-bg {
      background: #9fc037
    }

    a.green-color,
    .green-color {
      color: #9fc037
    }

    a.blue-color,
    .blue-color {
      color: #428bca
    }

    ::-webkit-scrollbar {
      width: .3em;
      height: .6em
    }

    ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px #444
    }

    ::-webkit-scrollbar-thumb {
      background-color: #ebb513;
      outline: #ccc solid 1px;
      border-radius: 5px
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    div:focus {
      outline: none;
    }

    @media(min-width:500px) {
      .divider {
        padding-top: 50px;
      }
    }

    @keyframes blinking {

      0%,
      100% {
        border: 2px solid #ffffff;

      }

      50% {
        border: 2px solid #101010;
      }
    }

    @keyframes zoomin {

      0%,
      100% {
        transform: scale(0.9, 0.9);
      }

      50% {
        transform: scale(0.95, 0.95);
      }

    }

    @keyframes load {
      0% {
        width: 0;
      }

      100% {
        width: 99%;
      }
    }

    @keyframes load2 {
      0% {
        width: 0;
      }

      100% {
        width: 98%;
      }
    }

    @keyframes load3 {
      0% {
        width: 0;
      }

      100% {
        width: 88%;
      }
    }
  </style>
</head>

<body>
  <div class="header" id="home">
    <div class="menu">
      <a href="<?php echo $final; ?>" rel="nofollow noreferrer" class="button" target="_blank" title="DAFTAR <?php echo strtoupper($titlebrand); ?>">DAFTAR</a>
    </div>
    <div class="menu">
      <a href="<?php echo $final; ?>" rel="nofollow noreferrer" class="button" target="_blank" title="LOGIN <?php echo strtoupper($titlebrand); ?>">LOGIN</a>
    </div>

    <div class="logo">
      <amp-img class="img-logo" src="<?php echo $logo; ?>" width="25"
        height="5" layout="responsive"></amp-img>
    </div>
  </div>
  <div class="wrapper">
    <div class="content">
      <table class="menuButton">
        <tr>
          <td><a href="<?php echo $final; ?>" target="_blank" class="secondaryButton">MASUK</a></td>
          <td><a href="<?php echo $final; ?>" target="_blank" class="secondaryButton2">DAFTAR</a></td>
        </tr>
        <tr>
          <td colspan="2"><a href="<?php echo $final; ?>" target="_blank" class="secondaryButton3">LINK ALTERNATIF</a>
          </td>
        </tr>
      </table>

      <div class="rtpGacor">
        <a href="<?php echo $final; ?>" target="_blank"><img src="https://imagizer.imageshack.com/img922/2494/aZLBVJ.gif"></a>
      </div>
      <table class="rtpSlot">
        <tr>
          <td>
            <div class="progress">
              <div class="progress-value">96%</div>
            </div>
          </td>
          <td>
            <div class="progress">
              <div class="progress-value2">98%</div>
            </div>
          </td>
        </tr>
      </table>

      <div class="imgAnimation">
        <a href="#" target="_blank"><img src="<?php echo $banner; ?>"
            width="100%" height="100%"></a>
      </div>

      <div class="footer">
        <div class="divider"></div>
        <div class="row-one" style="padding-left:20px;padding-right:20px;">

        </div>
        <div class="row-three">
          <small>&copy; <a style="color: #ebb513;"><strong><?php echo strtoupper($titlebrand); ?></strong></a> 2024, all rights reserved.</small>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-menu-list">
    <a href="<?php echo $final; ?>" title="beranda" rel="nofollow noreferrer">
      <div class="footer-menu">
        <amp-img class="logo" src="https://raw.githubusercontent.com/manrokimsa/tempat-gambar/5e76ca97bc0c66983d7d1f4b7cd38a496cf052d3/icon-gift.svg" alt="menu home" width="22" height="22"
          style="display:block;margin:auto"></amp-img>
        <small>Beranda</small>
      </div>
    </a>
    <a href="<?php echo $final; ?>" title="unduh" rel="nofollow noreferrer">
      <div class="footer-menu">
        <amp-img class="logo" src="https://raw.githubusercontent.com/manrokimsa/tempat-gambar/5e76ca97bc0c66983d7d1f4b7cd38a496cf052d3/icon-gift.svg" alt="menu home" width="22" height="22"
          style="display:block;margin:auto"></amp-img>
        <small>Unduh</small>
      </div>
    </a>
    <a href="<?php echo $final; ?>" title="daftar" target="_blank" rel="nofollow noreferrer">
      <div class="footer-menu">
        <amp-img class="logo" src="https://raw.githubusercontent.com/manrokimsa/tempat-gambar/5e76ca97bc0c66983d7d1f4b7cd38a496cf052d3/icon-gift.svg" alt="menu daftar" width="22" height="22"
          style="display:block;margin:auto"></amp-img>
        <small>Daftar</small>
      </div>
    </a>
    <a href="<?php echo $final; ?>" title="Livechat" target="_blank">
      <div class="footer-menu">
        <amp-img class="logo" src="https://raw.githubusercontent.com/manrokimsa/tempat-gambar/5e76ca97bc0c66983d7d1f4b7cd38a496cf052d3/icon-gift.svg" alt="menu livechat" width="22" height="22"
          style="display:block;margin:auto"></amp-img>
        <small>Livechat</small>
      </div>
    </a>
  </div>
</body>

</html>
