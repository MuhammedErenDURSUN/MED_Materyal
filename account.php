<?php
/**
 * Created by PhpStorm. * Copyright © 2018 MED. All rights reserved.
 * User: med
 * Date: 24.11.2017
 * Time: 18:04
 */
session_start();
?>

<!DOCTYPE html>
<html lang="tr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Document Title
    =============================================
    -->
    <title>MED Platform</title>
    <!--
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/med.jpg">
    <meta name="theme-color" content="#ffffff">
    <!--
    Stylesheets
    =============================================

    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <style>
        .outer {

            white-space: nowrap;
            position: relative;
            overflow-x: scroll;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
        }

        .outer > li {
            float: none;
            display: inline-block;
            zoom: 1;
            margin: 0 0.25%;
        }
        .detail{
            padding-top:8px ;
        }

        .display
        {
            -webkit-animation: slide-down .3s ease-out;
            -moz-animation: slide-down .3s ease-out;
        }
        @-webkit-keyframes slide-down {
            0% { opacity: 0; -webkit-transform: translateY(-100%); }
            100% { opacity: 1; -webkit-transform: translateY(0); }
        }
        @-moz-keyframes slide-down {
            0% { opacity: 0; -moz-transform: translateY(-100%); }
            100% { opacity: 1; -moz-transform: translateY(0); }
        }
    </style>

</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60" style="background-color: #0f0f0f">
<main>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <nav style="background: linear-gradient(to bottom, #596164 0%, #596164 100%), radial-gradient(at top center, #596164 0%, #596164 120%) #989898;
 background-blend-mode: multiply,multiply;" class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
            <ul style="width: 100%;padding-top: 8px" class="nav navbar-nav navbar-left">

                <li style="width: 100%;list-style-type: none;"> <form style="width: 100%" >
                        <div style="width: 100%;display: none" id="search_box">
                            <input type="text" class="form-control"  style="width: 100%;background-color: #1a1a1a;color: #f9f9f9;border-color: #3c3c3c" placeholder="Ara">
                            <i onclick="searchbox_hide()" style="font-size: large;color: #3c3c3c;position: absolute;right: 8px;top: 8px" class="fa fa-times"></i>
                        </div>

                    </form></li>
            </ul>
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">MED</a>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li><a onclick="searchbox_display()" title="Ara"
                           style="color:#F9F9F9;text-decoration: none"><span><img style="height: 20px;" src="images/search.png"></span></a>
                    </li>

                    <?php



                    if (isset($_SESSION["Status"]) && $_SESSION["Status"]) {
                        echo ' <li  ><a href="material.php" title="Mateyal Geliştir" style="color:#F9F9F9;"><span><img style="height: 20px;" src="images/material.png"></span></a></li>
                    <li class="dropdown" style="width: auto;padding: 0px;border: none;margin: 0px;" ><a onclick="account_display(\'block\')"  title="Hesabım" style="color:#F9F9F9"><span><img style="height: 20px;" src="images/user.png"></span></a>
                 <ul id="account_menu" class="dropdown-menu" >
            <li class="menu_li"><a href="account.php">Hesabım <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li style="background-color: lightgray;height: 1px"></li>
            <li class="menu_li"><a href="channel.php">Kanalım <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
             <li style="background-color: lightgray;height: 1px"></li>
            <li class="menu_li"><a href="#">Bildirimler <span class="badge pull-right"> 42 </span></a></li>
            <li style="background-color: lightgray;height: 1px"></li>
            <li class="menu_li"><a href="#">Materyaller <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
             <li style="background-color: lightgray;height: 1px"></li>
            <li class="menu_li"><a onclick="session_destroy()">Çıkış <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
                    </li>';

                    } else if (isset($_SESSION["Status"]) && !$_SESSION["Status"]) {
                        echo ' <li ><a onclick="login_display(\'login\',\'new\')" title="Mateyal Geliştir" style="color:#F9F9F9"><span><img style="height: 20px;" src="images/material.png"></span></a></li>
                         <li ><a onclick="login_display(\'login\',\'new\')" title="Çıkış" style="color: #F9F9F9;font-size: 16px;cursor: pointer"><span>Çıkış</span></a></li>';
                    }

                    else {
                        echo ' <li ><a onclick="login_display(\'block\',\'none\')" title="Mateyal Geliştir" style="color:#F9F9F9"><span><img style="height: 20px;" src="images/material.png"></span></a></li>
                         <li ><a onclick="login_display(\'block\',\'none\')" title="Oturum Aç veya  Kayıt Ol" style="color: #F9F9F9;font-size: 16px;cursor: pointer"><span><img style="height: 20px;" src="images/user.png"></span></a></li>';
                    }


                    ?>
                </ul>

                </ul>
            </div>
        </div>
    </nav>


    <div class="main" style="padding-top: 32px;background-color:#F9F9F9;">
        <section class="module" id="services" >
            <div class="container">
                <?php

                echo '<h1 style="color: #000000 ;text-align: center"  class="to-animate">Merhaba '.$_SESSION["name"]." ".$_SESSION["surname"].'</h1>';
                ?>
            </div>
            <div class="row" style="padding-left: 16px;padding-right: 16px;padding-top: 8px;" >
                <div class="col-md-4 col-sm-6 col-lg-3 to-animate" >
                    <div class="wrimagecard wrimagecard-topimage" >
                        <a href="channel.php" style="text-decoration: none;background-color: #764ba2">
                            <div class="wrimagecard-topimage_header" style=";background-color:white;" >
                                <center><i class="fa fa-star" style="color:#764ba2"> </i></center>
                            </div>
                            <div  class="wrimagecard-topimage_title">
                                <h4 >Kanal</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 to-animate">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="#" style="text-decoration: none;background-color: #c94b4b">
                            <div class="wrimagecard-topimage_header" style=";background-color:white;" >
                                <center><img src="images/layers.png" style="color:#f9f9f9;height: 70px"></imgsr></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>Materyaller
                                    <div class="pull-right badge" id="WrControls"></div></h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 to-animate">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="#" style="text-decoration: none;background-color: #13547a">
                            <div class="wrimagecard-topimage_header" style=";background-color:white;" >
                                <center><i class="fa fa-pencil-square-o" style="color:#13547a"> </i></center>
                            </div>
                            <div class="wrimagecard-topimage_title" >
                                <h4>Materyal Düzenle
                                    <div class="pull-right badge" id="WrForms"></div>
                                </h4>
                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 to-animate">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="contents.php" style="text-decoration: none;background-color: #6C7A89">
                            <div class="wrimagecard-topimage_header" style=";background-color:white;" >
                                <center><i class="fa fa-cloud-upload" style="color:#6C7A89"> </i></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>İçerik Yöneticisi
                                    <div class="pull-right badge" id="WrGridSystem"></div></h4>
                            </div>

                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-lg-3 to-animate">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="editor.php" style="text-decoration: none;background-color: #4b134f">
                            <div class="wrimagecard-topimage_header" style=";background-color:white;" >
                                <center><img src="images/3d-cube128.png" style="color:#4b134f;height: 70px"> </img></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>Materyal Editörü
                                    <div class="pull-right badge" id="WrThemesIcons"></div></h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 to-animate">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="#" style="text-decoration: none;background-color: #5aa8e3">
                            <div class="wrimagecard-topimage_header" style=";background-color:white;" >
                                <center><img src="images/feed100.png" style="color:#f9f9f9;height: 70px"> </img></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>Geri Dönütler
                                    <div class="pull-right badge" id="WrInformation"></div></h4>
                            </div>

                        </a>
                    </div>
                </div> <div class="col-md-4 col-sm-6 col-lg-3 to-animate">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="#" style="text-decoration: none;background-color: #2fb485;">
                            <div class="wrimagecard-topimage_header" style=";background-color:white;" >
                                <center><img src="images/class.png" style="color:#f9f9f9;height: 70px"> </img></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>Ortam
                                    <div class="pull-right badge" id="WrInformation"></div></h4>
                            </div>

                        </a>
                    </div>
                </div> <div class="col-md-4 col-sm-6 col-lg-3 to-animate">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="#" style="text-decoration: none;background-color: #872d4d">
                            <div class="wrimagecard-topimage_header" style=";background-color:white;" >
                                <center><i class="fa fa-cog" style="color:#872d4d"> </i></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>Ayarlar
                                    <div class="pull-right badge" id="WrInformation"></div></h4>
                            </div>

                        </a>
                    </div>
                </div> <div class="col-md-4 col-sm-6 col-lg-3  to-animate">
                    <div class="wrimagecard wrimagecard-topimage">
                        <a href="#" style="text-decoration: none;background-color: #fab578">
                            <div class="wrimagecard-topimage_header" style=";background-color:white;" >
                                <center><i class="fa fa-question-circle" style="color:#fab578"> </i></center>
                            </div>
                            <div class="wrimagecard-topimage_title">
                                <h4>Yardım
                                    <div class="pull-right badge" id="WrInformation"></div></h4>
                            </div>

                        </a>
                    </div>
                </div>

            </div>
        </section>

        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.php">MED</a>,Platform</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</main>
<!--
JavaScripts
=============================================
-->
<script type="text/javascript">
    function searchbox_display() {

        document.getElementById("search_box").style.display="block";
        document.getElementById("search_box").className=" display";

    }

    function searchbox_hide() {

        document.getElementById("search_box").style.display="none";

    }
    function login_display(login, signup) {

        if (login=="login")
        {
            session_destroy();

        }
        else {
            document.getElementById("login_div").style.display = login;
            document.getElementById("signup_div").style.display = signup;
        }

    }

    function account_display(status) {


        document.getElementById("account_menu").style.display = status;
    }
    function session_destroy() {

        $.ajax({
            type: "POST",
            url: "tasks.php",
            data: {task: "session_destroy"},
            success: function (x) {
                window.location = "index.php";
            }
        });

    }
</script>
<script src="assets/lib/jquery/dist/jquery.js"></script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/lib/wow/dist/wow.js"></script>
<script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
<script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
<script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
<script src="assets/lib/flexslider/jquery.flexslider.js"></script>
<script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="assets/lib/smoothscroll.js"></script>
<script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
<script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
