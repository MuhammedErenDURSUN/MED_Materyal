<?php
/**
 * Created by PhpStorm.
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="assets/css/styles.css" rel="stylesheet"/>

    <!-- The main CSS file -->
    <link href="assets/css/styleupload.css" rel="stylesheet" />
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

                    if (strcmp($_SESSION["Login"], "true") == 0) {

                        echo ' <li  ><a href="editor.php" title="Mateyal Geliştir" style="color:#F9F9F9;"><span><img style="height: 20px;" src="images/material.png"></span></a></li>
                                  <li ><a href="channel.php" title="Kanalım" style="color: #F9F9F9;font-size: 16px;cursor: pointer"><span><img style="height: 20px;" src="images/user.png"></span></a></li>';

                    }
                    else  if (strcmp($_SESSION["Login"], "true") != 0) {
                        $_SESSION["Message"] = "Yetkisiz giriş.";
                        $_SESSION["Alert"] = "Dikkat!";
                        $_SESSION["Color"] = "alert-danger";
                        $_SESSION["Login"] = "false";
                        echo "<script>window.location = 'index.php?operation=link'</script>";
                    }
                    ?>
                </ul>

                </ul>
            </div>
        </div>
        <div style="background-color: #3c3c3c;height: 1px"></div>
        <div  style="height:48px;width: 100%;">

            <div style="float: left;padding-left: 15px;">
                <a href="channel.php"> <h6 style="text-align: center;color: white"><i style="color: white" class="fa fa-chevron-left"></i>&nbsp;Geri</h6></a>
            </div>
            <div  style="position: absolute;width: 250px;margin-left: -125px;left: 50%;text-align: center">
                <h4 style="color: white">İçerik Yöneticisi</h4>

            </div>
            <ol style="position: absolute;right: 15px;background-color: #3c3c3c;margin-top: 10px" class="breadcrumb">
                <li><a href="account.php" style="color: white;text-decoration: none"><i class="fa fa-star"></i> Kanal</a></li>
                <li class="active">İçerik Yöneticisi</li>
            </ol>

        </div>
    </nav>


    <div class="main" style="padding-top: 80px;background-color:#F9F9F9;">
        <section class="module" id="services" >
            <div class="container">
                <div class=" w3-round" style="width: 100%;margin-bottom:8px;padding-bottom: 16px">
                    <div>
                        <form id="upload" method="post" action="tasks.php" enctype="multipart/form-data">
                            <div style="color: white;font-size: small" id="drop">
                                Dosyayı Sürükleyin
                                <br/>
                                <a style="text-decoration: none">Yükle</a>
                                <input type="file" name="upl" multiple />
                                <input type="hidden" name="task" value="file_upload" />
                            </div>

                            <ul style="max-height: 210px; overflow: auto">
                                <!-- The file uploads will be shown here -->
                            </ul>

                        </form>

                    </div>
                    <hr />
                    <div  class="filemanager" >

                        <div style="color: black" class="search">
                            <div id="custom-search-input" >
                                <div  class="input-group col-md-12" >
                                    <input style="height: 32px;margin-top: 3px;border: solid" type="search" class="  search-query form-control" placeholder="Ara" />
                                    <span class="input-group-btn">
                        </span>

                                </div>
                            </div>
                        </div>

                        <div style="color: black" class="breadcrumbs"></div>
                        <ul  class="data" ></ul>

                        <div class="nothingfound">
                            <div class="nofiles"></div>
                            <span style="margin-left: 90px">Dosya Bulunamadı.</span>

                            <a style="text-decoration: none" href="content.php"><span style="margin-left: 150px">Geri</span></a>

                        </div>

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


<script>
    function lightbox(idx) {
        //Show the slider wrapper
        var ninjaSldr = document.getElementById("ninja-slider");
        ninjaSldr.parentNode.style.display = "block";

        //Then init the slider
        //Note: The { initSliderByCallingInitFunc: true } option in the
        // ninja-slider.js tells the page not to initiate the slider
        // unless the following init(idx) function is called.
        nslider.init(idx);

        //Then mimic clicking the fullscreen button to popup the modal
        var fsBtn = document.getElementById("fsBtn");
        fsBtn.click();
    }

    function fsIconClick(isFullscreen) {
        //Note: fsIconClick is the default event handler of the fullscreen button
        if (isFullscreen) {
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.parentNode.style.display = "none";
        }
    }
</script>

<script type="text/javascript">

    function delete_content(id) {
        $.ajax({
            type:"POST",
            url:"tasks.php",
            data:{file:id,task:"file_delete"},
            success:function (x) {
                location.reload();
            }
        });
    }

</script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- JavaScript Includes -->
<script src="assets/js/jquery.knob.js"></script>

<!-- jQuery File Upload Dependencies -->
<script src="assets/js/jquery.ui.widget.js"></script>
<script src="assets/js/jquery.iframe-transport.js"></script>
<script src="assets/js/jquery.fileupload.js"></script>

<!-- Our main JS file -->
<script src="assets/js/scriptupload.js"></script>


<!-- Only used for the demos. Please ignore and remove. -->
<script src="http://cdn.tutorialzine.com/misc/enhance/v1.js" async></script>

<!-- Include our script files -->
<script src="assets/js/script.js"></script>

</body>
</html>




