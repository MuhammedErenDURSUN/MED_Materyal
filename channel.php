<?php
/**
 * Created by PhpStorm.
 * User: med
 * Date: 24.11.2017
 * Time: 18:04
 */
session_start();

try {
    $baglanti = new PDO("mysql:host=94.73.150.57;dbname=materialdb;charset=utf8", "merendursun", "CAg]aZN4^a=6");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print $e->getMessage();
    // Admin hata bilgisi db bağlanamadı
}
$name =$_SESSION["name"];
$surname= $_SESSION["surname"];

$material_query = "Select * From materials where status = 1 and developer='".$name." ".$surname."'";
$sql_materials = $baglanti->query($material_query);

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

        .outer > li {
            float: none;
            display: inline-block;
            zoom: 1;
            padding: 0 0.25%;
        }
        .detail{
            padding-top:8px ;
        }

        .display
        {
            -webkit-animation: slide-down .3s ease-out;
            -moz-animation: slide-down .3s ease-out;
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
    <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation" style="background: linear-gradient(to bottom, #596164 0%, #596164 100%), radial-gradient(at top center, #596164 0%, #596164 120%) #989898;background-blend-mode: multiply,multiply;">
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
            </div>
        </div>
        <div style="background-color: #3c3c3c;height: 1px"></div>
    </nav>
    <section class=" bg-dark-30" id="home" style="height: 480px;background: linear-gradient(to bottom, #596164 0%, #596164 100%), radial-gradient(at top center, #596164 0%, #596164 120%) #989898;
 background-blend-mode: multiply,multiply;"> <!--data-background="images/background.jpg"-->

        <div class="titan-caption" style="margin-top: 88px" >
            <div class="caption-content">
                <div style="text-align: center" >

                    <a class="btn  btn-link"  style="color:white;position: absolute;left: 16px;top: 0px; " onclick="session_destroy()"  >Oturum Kapat</a>


                    <a href="editor.php" title="Mateyal Geliştir"  style="position: absolute;right: 16px;top: 0px;padding:10px;background-color: rgba(255,255,255,1);color: #596164;border-radius: 2px">Kanal Resmi</a>
1
                    <img id="profile_img" src="images/user.png" style="height: 180px;width: 180px;border-radius:90px;left: 50%;margin-left: -90px;top: 16px;position: absolute">
                    <?php

                  echo '<h2 style="">'.$name." ".$surname.'</h2>';
                    ?>
                 <a class="btn btn-border-w btn-circle" href="contents.php"  style="width: 152px" >İçerik Yön.</a>
                 <a class="btn btn-border-w btn-circle" href="editor.php" style="width: 152px" >Editör</a>



                    <div class="align-center" style="font-size:xx-large;position: absolute;bottom: 0;width: 100%"><a class="section-scroll" href="#services" style="color: white"><i class="fa fa-angle-down"></i></a></div>
                </div>

            </div>


</div>
    </section>

    <div class="main" >
        <section class="module" id="services" >
            <div style="padding: 24px">


                <div class="row" style="padding-top: 16px ;padding-left: 16px">
                    <div  >
                        <h2 class="module-title font-alt" style="text-align: left ;font-size: large">Geliştirilen Materyaller</h2>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <ul class="works-grid works-grid-gut  works-hover-w outer" >

                        <?php

                        foreach ($sql_materials as $row){

                            echo '<li class=" col-lg-2 col-md-3 col-sm-4 col-xs-6 " style="padding: 0" ><div style="margin: 0 4px;"><a href = "view.php?url_id='.$row['url_id'].'" >
                                    <div class="work-image" ><img class="image_view" src = "material_images/'.$row['showcase'].'" alt = "Portfolio Item" /></div >
                                    <div class="work-caption font-alt" >
                                        <h3 class="work-title" >  </h3 >
                                        <div class="work-descr" > Geliştirici</div >
                                    </div ></a >  <div class="font-alt detail" >
                                    <h3 class="work-title" > '.$row['m_name'].' </h3 >
                                    <div class="work-descr" > '.$row['developer'].'</div >
                                </div ></div></li >';
                        }

                        echo '</ul></div>';


                        ?>


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
                window.location = 'index.php?operation=logout'
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
