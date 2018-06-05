
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
            padding-left: 8px;
            padding-right: 3%;
        }

        .outer > li {
            float: none;
            display: inline-block;
            zoom: 1;
            margin: 0 4px;
        }
        .detail{
            padding-top:8px ;
        }

        .display
        {
            -webkit-animation: slide-down .3s ease-out;
            -moz-animation: slide-down .3s ease-out;
        }
    </style>
</head>
<body  data-spy="scroll" data-target=".onpage-navigation" data-offset="60" style="background-color: #818181">
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

                    } else  if (strcmp($_SESSION['Alert'], "Aktivasyon") == 0) {
                        echo ' <li ><a  data-toggle="modal" data-target=".bd-example-modal-lg" title="Mateyal Geliştir" style="color:#F9F9F9"><span><img style="height: 20px;" src="images/material.png"></span></a></li>
                         <li ><a onclick="session_destroy()" title="Çıkış" style="color: #F9F9F9;font-size: 16px;cursor: pointer"><span><img style="height: 20px;" src="images/user.png"></span></a></li>';
                    }

                    else  if (strcmp($_SESSION["Login"], "true") != 0) {
                        echo ' <li ><a  data-toggle="modal" data-target=".bd-example-modal-lg" title="Mateyal Geliştir" style="color:#F9F9F9"><span><img style="height: 20px;" src="images/material.png"></span></a></li>
                         <li ><a  data-toggle="modal" data-target=".bd-example-modal-lg" title="Oturum Aç veya  Kayıt Ol" style="color: #F9F9F9;font-size: 16px;cursor: pointer"><span><img style="height: 20px;" src="images/user.png"></span></a></li>';
                    }


                    ?>
                </ul>

                </ul>
            </div>
        </div>
        <?php

        if (strcmp($_GET['operation'], "login") == 0||strcmp($_GET['operation'], "link") == 0)
        {
            echo ' <div id="alert_div" class="alert  '.$_SESSION["Color"].'" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>'.$_SESSION["Alert"].'</strong> '.$_SESSION["Message"].'</div>';
        }

        ?>
    </nav>
    <section class="home-section home-fade home-full-height" id="home" style="margin-top: 64px;height: 480px">
        <div class="hero-slider">
            <ul class="slides">
                <li class="bg-dark-30 bg-dark" style="background-image:url(intro/Frame1.jpg);"></li>
                <li class="bg-dark-30 bg-dark" style="background-image:url(intro/Frame2.jpg);"></li>
                <li class="bg-dark-30 bg-dark" style="background-image:url(intro/Frame3.jpg);"></li>
                <li class="bg-dark-30 bg-dark" style="background-image:url(intro/Frame4.jpg);"></li>
                <li class="bg-dark-30 bg-dark" style="background-image:url(intro/Frame5.jpg);"></li>

            </ul>
        </div>
    </section>

    <div class="main" >
        <section class="module" id="services" style="padding: 16px" >
            <div class="row" style="padding-top: 70px ;padding-left: 16px">
                <div  >
                    <h2 class="module-title font-alt" style="text-align: left ;font-size: large">Geliştirici</h2>
                    <hr>
                    <h2 class="module-title font-alt" style="text-align: left ;font-size: large">Muhammed Eren DURSUN</h2>
                    <br>
                    <h2 class="module-title font-alt" style="text-align: left ;font-size: large">İletişim</h2>
                    <hr>
                    <h2 class="module-title " style="text-align: left ;font-size: large">m.erendursun@gmail.com</h2>
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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="z-index: 9999">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <section class="home-section bg-dark-30" id="home" style="background: linear-gradient(to bottom, #596164 0%, #596164 100%), radial-gradient(at top center, #596164 0%, #596164 120%) #989898;
 background-blend-mode: multiply,multiply;"> <!--data-background="images/background.jpg"-->

                    <!--
                            https://www.youtube.com/watch?v=iGpuQ0ioPrM
                            https://www.youtube.com/watch?v=zlfgLXqvx_M
                            https://www.youtube.com/watch?v=mEqcala-NiE-->

                    <?php

                    if (strcmp($_SESSION['Alert'], "Aktivasyon") == 0) {
                        echo '  <div class="container_login" id="active_div">
         
            <form class="form" method="post"  action="tasks.php">
               <h1>Hesap Aktivasyon</h1>
              <h4>'.$_SESSION["name"].' '.$_SESSION["surname"].' Hesabı\'nın aktifleştirilmesi bekleniyor.</h4>
             
                <h6 style="color: #f9f9f9;margin-top: 16px">Mail adresinizi kontrol ediniz.</h6>
                <input type="text" placeholder="Aktivasyon Kodu" name="active_code" required maxlength="6">
                <input type="hidden" name="task" value="user_active">
                <input type="hidden" name="location" value="view">
                <input type="hidden" name="data" value="&url_id='.$_GET['url_id'].'">
                <button type="submit" id="login-button" class="btn btn-border-w btn-circle" style="margin-top: 4px">Aktifleştir</button>
                 
            </form>
            <form class="form" method="post" name="active" action="tasks.php">
                <input type="hidden" name="task" value="active_mail">
                <input type="hidden" name="location" value="view">
                 <input type="hidden" name="data" value="&url_id='.$_GET['url_id'].'">
                 <button type="submit" class="btn btn-border-w btn-circle" style="margin-top: 16px" >Tekrar Gönder</button>
               </form>
        </div> ';

                    }

                    ?>

                    <div class="container_login " id="login_div" style="display: none;">

                        <form class="form" method="post" action="tasks.php">

                            <h1>Oturum Aç</h1>
                            <input type="text" placeholder="E-mail" name="email" required>
                            <input type="password" placeholder="Şifre" name="password" required>
                            <input type="hidden" name="task" value="user_login">
                            <input type="hidden" name="location" value="about">
                            <button type="submit" class="btn btn-border-w btn-circle" style="margin-top: 4px" id="login-button">Giriş</button>
                            <p style="margin-top: 10px"><a title="Kayıt Ol"
                                                           style="text-decoration: solid;color: #f9f9f9;cursor:pointer"
                                                           onclick="login_display('none','block')"
                                                           style="color: #f9f9f9">Kayıt Ol</a></p>


                        </form>

                    </div>

                    <div class="container_login" id="signup_div" style="display: none">


                        <form class="form" method="post" action="tasks.php">
                            <h1>Kayıt Ol</h1>
                            <input type="text" placeholder="Adın" name="name" required>
                            <input type="text" placeholder="Soyadın" name="surname">
                            <input type="text" placeholder="E-mail" name="email" required>
                            <input type="password" placeholder="Şifre" name="password" required>
                            <input type="hidden" name="task" value="user_signup">
                            <input type="hidden" name="location" value="about">
                            <button type="submit" id="login-button" class="btn btn-border-w btn-circle" style="margin-top: 4px">Kayıt Ol</button>
                            <p style="margin-top: 10px"><a title="Oturum Aç"
                                                           style="text-decoration: solid;color: #f9f9f9;;cursor:pointer"
                                                           onclick="login_display('block','none')"
                                                           style="color: #f9f9f9">Oturum Aç</a></p>
                        </form>
                    </div>
                    <div class="titan-caption" id="intro_div" >
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-1">Eğitimsel Materyaller</div>
                            <div class="font-alt mb-40 titan-title-size-3"><span class="rotate">İncele | Geliştir | Yayınla</span>

                                <?php



                                if (strcmp($_SESSION["Login"], "true") != 0) {
                                    echo '</div><a class="btn btn-border-w btn-circle"  onclick="login_display(\'block\',\'none\')">Oturum Aç</a>';
                                }
                                else if (strcmp($_SESSION["Login"], "true") == 0)
                                {
                                    echo '</div><a class="btn btn-border-w btn-circle" href="channel.php" >Başlayın</a>';
                                }
                                ?>

                            </div>

                        </div>
                </section>
            </div>
        </div>
    </div>
</main>
<!--
JavaScripts
=============================================
-->
<script type="text/javascript">
    var myVar;


    myVar = setTimeout(alertFunc, 5000);


    function alertFunc() {
        $(".alert").alert('close');
    }

    var image_view = document.getElementsByClassName('image_view');

    for (var i=0; i<image_view.length; i++) {
        image_view[i].style.height= image_view[i].offsetWidth*9/16+"px";

    }

    window.onresize=function (event) {
        for (var i=0; i<image_view.length; i++) {
            image_view[i].style.height= image_view[i].offsetWidth*9/16+"px";

        }
    }

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
            document.getElementById("intro_div").style.display = "none";

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
