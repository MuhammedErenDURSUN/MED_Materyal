<?php
/**
 * Created by PhpStorm. * Copyright © 2018 MED. All rights reserved.
 * User: med
 * Date: 24.11.2017
 * Time: 18:04
 */
session_start();
try {
    $baglanti = new PDO("****************************", "*************", "***************");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print $e->getMessage();
    // Admin hata bilgisi db bağlanamadı
}
$primary_material = "Select * From materials where url_id ='".$_GET['url_id']."'";
$sql_primary_material = $baglanti->query($primary_material)->fetch(PDO::FETCH_ASSOC);




if(count($sql_primary_material)<=1)
{
    $_SESSION["Message"] = "Geçersiz bağlantı.";
    $_SESSION["Alert"] = "Uyarı!";
    $_SESSION["Color"] = "alert-warning";
    header("Location:index.php?operation=link");
}
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
        .edit_menu li{

            margin-left: -40px;
            background-color: white;
        }
        .edit_menu li:hover{
            background-color:  #2c3e50;
            color: white;
        }
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 8px;
            border: 1px solid #888;
            width: 90%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 48px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        .li_item:hover{
            background-color:  #bdc3c7;
            color: white;
        }
        .li_item h3{
            color: #666;
        }
    </style>

    <link href="assets/css/styles.css" rel="stylesheet"/>
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60" style="background-color: #F9F9F9">
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
        <div id="alert_suc" class="alert alert-success"  role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>İçerik </strong> İçerik Ekleme Başarılı.</div>
        <div id="alert_dan" class="alert alert-danger" style="display: none" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>İçerik </strong> İçerik Ekleme Başarısız Giriş yapmanız gerekmektedir.</div>
    </nav>


    <div class="main" style="background-color:#F9F9F9;padding-top: 40px;">
        <section class="module" id="services" >
            <div>

                    <div style="padding: 16px">
                        <h2 style="width: 100%;text-align: center">Öne Çıkan İçerikler</h2>
                        <ul class="works-grid works-grid-gut works-grid-4 outer" >

                            <?php

                             $data=json_decode($sql_primary_material["json_data"]);

                            for ($i=0;$i<4;$i++) {
                                echo '<li   class="work-item " style="margin: 0" >

                                        ';

                                switch ($data->veri[$i]->type)
                                {

                                    case "resim":{

                                        echo ' <div  class="work-image" style="background-color: black;border: 1px solid black" > <img class="image_view"  src="files/contents/'.strtolower($data->veri[$i]->path) .'"/>';

                                    break;
                                    }

                                    case "video":{

                                        echo '  <div  class="work_video"  style="background-color: black;border: 1px solid black" > <video  style="width: 100%;"  class="img-responsive" controls autoplay > <source src="files/contents/'.strtolower($data->veri[$i]->path) .'" type="video/mp4"> </video>';

                                    break;
                                    }

                                    case "doküman":{

                                        echo ' <div  class="work-image" style="background-color: black;border: 1px solid black" >  <div  style="background-color: black">
                                            <img  src="images/abstract-header.jpg"/>
                                        <img  style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;" src = "images/text.png" alt = "Portfolio Item" />
                                        </div>';
                                    break;
                                    }

                                    case "ses":{
                                        echo '  <div  class="work-image" style="background-color: black;border: 1px solid black" > <div style="">
                                     <img  src="images/abstract-header.jpg"/>
                                             <img src="images/audio.png"
                                     style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                     alt="Image" class="img-responsive">
                                              <audio  style="background-color: black;width: 100%;position: absolute;z-index: 99999"  class="img-responsive" controls controlsList="nodownload">  <h3 class="work-title" > Materyal </h3 > <source src="files/contents/'.strtolower($data->veri[$i]->path) .'" type="audio/mpeg"> </audio>
                                </div>';


                                    break;
                                    }

                                }

                                echo '</div ><div class="font-alt detail" ><h3 class="work-title"  style="color: #666;white-space: nowrap;width: 85%;overflow: hidden;text-overflow: ellipsis;">'.$data->veri[$i]->path .'</h3 ><div class="work-descr"> '.$data->veri[$i]->type .'</div ></div ></li >';
                                     
                            }

                            ?>
                        </ul>

                        <ul style="list-style-type: none;margin-top: 16px;padding-left: 4px" >

                            <li class=" col-lg-9 col-md-12 " id="video_card" style="padding: 0;padding-top: 8px" >

                                        <video id="video_view"
                                               style="width: 100%;background-color: black;"
                                               class="img-responsive" src="files/contents/<?php echo strtolower($data->veri[4]->video[0]->path) ?>" controls>
                                            <source  type="video/mp4">
                                        </video>
                                <div class="font-alt detail" >
                                    <h3 class="work-title"  id="video_title" style="color: #666;font-size: x-large" ><?php echo $data->veri[4]->video[0]->path ?></h3 >
                                    <img id="profile_img" src="files/contents/<?php echo strtolower($sql_primary_material["showcase"]) ?>" style="height: 64px;width: 64px;border-radius:32px;float: left;border:2px solid white;margin: 8px">
                                    <h3 style="padding-top: 10px"><?php echo $sql_primary_material["developer"] ?></h3>
                                    <hr>
                                    <h4 > Video Listesi  </h4 >
                                <ul  style="list-style-type: none;max-height: 255px;overflow-x: scroll">

                                    <?php
                                    foreach ($data->veri[4]->video as $video_row) {
                                        echo '<li onclick="video_display(\'video_view\',\'' . strtolower($video_row->path) . '\')"  class="font-alt detail li_item" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px"> <h3 class="work-title video_title" style="white-space: nowrap;width: 100%;overflow: hidden;text-overflow: ellipsis;float: left">' . $video_row->path . '</h3></li>';
                                    }
                                    ?>
                                   
                                </ul>

                                    <h4 > Açıklama  </h4 >
                                    <div class="font-alt detail" style="height: 570px">

                                        <p style="font-size: medium"><?php echo $data->veri[10]->material[4]->exp ?></p>
                                        <hr>
                                    </div>

                            </li>

                            <li class=" col-lg-9 col-md-12 " id="image_card" style="padding: 0;padding-top: 8px;display: none" >
                                <div  class="work-image" style="background-color: black" >
                                <img id="image_view" src = "files/contents/<?php echo strtolower($data->veri[6]->image[0]->path)  ?>" alt = "Portfolio Item" />
                                </div>
                                <div class="font-alt detail" >
                                    <h3 class="work-title"  id="image_title" style="color: #666;font-size: x-large" ><?php echo $data->veri[6]->image[0]->path ?></h3 >
                                    <img id="profile_img" src="files/contents/<?php echo strtolower($sql_primary_material["showcase"]) ?>" style="height: 64px;width: 64px;border-radius:32px;float: left;border:2px solid white;margin: 8px">
                                    <h3 style="padding-top: 10px"><?php echo $sql_primary_material["developer"] ?></h3>
                                    <hr>
                                    <h4 > Resim Listesi  </h4 >
                                <ul  style="list-style-type: none;max-height: 255px;overflow-x: scroll">

                                    <?php
                                    foreach ($data->veri[6]->image as $image_row) {
                                        echo '<li onclick="img_display(\'image_view\',\'' . strtolower($image_row->path) . '\')"  class="font-alt detail li_item" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px"> <h3 class="work-title video_title" style="white-space: nowrap;width: 100%;overflow: hidden;text-overflow: ellipsis;float: left">' . $image_row->path . '</h3></li>';
                                    }
                                    ?>

                                </ul>

                                    <h4 > Açıklama  </h4 >
                                    <div class="font-alt detail" style="height: 570px">

                                        <p style="font-size: medium"><?php echo $data->veri[10]->material[4]->exp ?></p>
                                        <hr>
                                    </div>

                            </li>

                            <li class=" col-lg-9 col-md-12 " id="sound_card" style="padding: 0;padding-top: 8px;display: none" >
                                <div  class="work-image" > <div style="">
                                        <img  src="images/abstract-header.jpg"/>
                                        <img src="images/audio.png"
                                             style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                             alt="Image" class="img-responsive">
                                        <audio id="sound_view" src="files/contents/<?php echo strtolower($data->veri[5]->sound[0]->path) ?>"  style="background-color: black;width: 100%;position: absolute;z-index: 99999"  class="img-responsive" controls controlsList="nodownload">  <h3 class="work-title" > Materyal </h3 > <source  type="audio/mpeg"> </audio>
                                    </div></div>
                                <div class="font-alt detail" >
                                    <h3 class="work-title"  id="sound_title" style="color: #666;font-size: x-large" ><?php echo $data->veri[5]->sound[0]->path ?></h3 >
                                    <img id="profile_img" src="files/contents/<?php echo strtolower($sql_primary_material["showcase"]) ?>" style="height: 64px;width: 64px;border-radius:32px;float: left;border:2px solid white;margin: 8px">
                                    <h3 style="padding-top: 10px"><?php echo $sql_primary_material["developer"] ?></h3>
                                    <hr>
                                    <h4 > Ses Listesi  </h4 >
                                <ul  style="list-style-type: none;max-height: 255px;overflow-x: scroll">

                                    <?php
                                    foreach ($data->veri[5]->sound as $sound_row) {
                                        echo '<li onclick="sound_display(\'sound_view\',\'' . strtolower($sound_row->path) . '\')"  class="font-alt detail li_item" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px"> <h3 class="work-title video_title" style="white-space: nowrap;width: 100%;overflow: hidden;text-overflow: ellipsis;float: left">' . $sound_row->path . '</h3></li>';
                                    }
                                    ?>

                                </ul>

                                    <h4 > Açıklama  </h4 >
                                    <div class="font-alt detail" style="height: 570px">

                                        <p style="font-size: medium"><?php echo $data->veri[10]->material[4]->exp ?></p>
                                        <hr>
                                    </div>

                            </li>

                            <li class=" col-lg-9 col-md-12 " id="document_card" style="padding: 0;padding-top: 8px;display: none" >
                                <div  class="work-image" >  <div  style="background-color: black">
                                        <img  src="images/abstract-header.jpg"/>
                                        <img  style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;" src = "images/text.png" alt = "Portfolio Item" />
                                    </div>
                                </div>
                                <div class="font-alt detail" >
                                    <h3 class="work-title"  id="document_title" style="color: #666;font-size: x-large" ><?php echo $data->veri[7]->document[0]->path ?></h3 >
                                    <img id="profile_img" src="files/contents/<?php echo $sql_primary_material["showcase"] ?>" style="height: 64px;width: 64px;border-radius:32px;float: left;border:2px solid white;margin: 8px">
                                    <h3 style="padding-top: 10px"><?php echo $sql_primary_material["developer"] ?></h3>
                                    <hr>
                                    <h4 > Doküman Listesi  </h4 >
                                <ul  style="list-style-type: none;max-height: 255px;overflow-x: scroll">

                                    <?php
                                    foreach ($data->veri[7]->document as $document_row) {
                                        echo  '<li onclick="doc_display(\'document_view\',\'' . $document_row->path . '\')"  class="font-alt detail li_item" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px"> <h3 class="work-title video_title" style="white-space: nowrap;width: 100%;overflow: hidden;text-overflow: ellipsis;float: left">' . $document_row->path . '</h3></li>';
                                    }
                                    ?>

                                </ul>

                                    <h4 > Açıklama  </h4 >
                                    <div class="font-alt detail" style="height: 570px">

                                        <p style="font-size: medium"><?php echo $data->veri[10]->material[4]->exp ?></p>
                                        <hr>
                                    </div>

                            </li>
                            <li class=" col-lg-9 col-md-12 " id="link_card" style="padding: 0;padding-top: 8px;display: none" >
                                <div  class="work-image" >  <div  style="background-color: black">
                                        <img  src="images/abstract-header.jpg"/>
                                        <img  style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;" src = "images/hub.png" alt = "Portfolio Item" />
                                    </div>
                                </div>
                                <div class="font-alt detail" >
                                    <h3 class="work-title"  id="link_title"  style="color: #666;font-size: x-large" ><?php echo $data->veri[8]->link[0]->path ?></h3 >
                                    <img id="profile_img" src="files/contents/<?php echo $sql_primary_material["showcase"] ?>" style="height: 64px;width: 64px;border-radius:32px;float: left;border:2px solid white;margin: 8px">
                                    <h3 style="padding-top: 10px"><?php echo $sql_primary_material["developer"] ?></h3>
                                    <hr>
                                    <h4 > Bağlantı Listesi  </h4 >
                                <ul  style="list-style-type: none;max-height: 255px;overflow-x: scroll">

                                    <?php
                                    foreach ($data->veri[8]->link as $link_row) {
                                        echo '<li class="font-alt detail li_item" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px"><a target="_blank" href="' .strtolower($link_row->path) . '"><h3 class="work-title video_title" style="white-space: nowrap;width: 100%;overflow: hidden;text-overflow: ellipsis;float: left">' . $link_row->path . '</h3></a></li>';
                                    }

                                    ?>

                                </ul>

                                    <h4 > Açıklama  </h4 >
                                    <div class="font-alt detail" style="height: 570px">

                                        <p style="font-size: medium"><?php echo $data->veri[10]->material[4]->exp ?></p>
                                        <hr>
                                    </div>

                            </li>

                            <li class=" col-lg-9 col-md-12 " id="content_card" style="padding: 0;padding-top: 8px;display: none" >
                                <div  class="work-image" >  <div  style="background-color: black">
                                        <img  src="images/abstract-header.jpg"/>
                                        <img  style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;" src = "images/world.png" alt = "Portfolio Item" />
                                    </div>
                                </div>
                                <div class="font-alt detail" >
                                    <h3 class="work-title"   id="content_title" style="color: #666;font-size: x-large" ><?php echo $data->veri[9]->content[0]->path ?></h3 >
                                    <img id="profile_img" src="files/contents/<?php echo $sql_primary_material["showcase"] ?>" style="height: 64px;width: 64px;border-radius:32px;float: left;border:2px solid white;margin: 8px">
                                    <h3 style="padding-top: 10px"><?php echo $sql_primary_material["developer"] ?></h3>
                                    <hr>
                                    <h4 > Paylaşılan İçerik Listesi  </h4 >
                                <ul  style="list-style-type: none;max-height: 255px;overflow-x: scroll">

                                    <?php
                                    foreach ($data->veri[9]->content as $content_row) {
                                        echo '<li onclick="content_move(\'' . $content_row->path . '\')"  class="font-alt detail li_item" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px"> <h3 class="work-title video_title" style="white-space: nowrap;width: 100%;overflow: hidden;text-overflow: ellipsis;float: left">' . $content_row->path . '</h3></li>';
                                    }

                                    ?>

                                </ul>

                                    <h4 > Açıklama  </h4 >
                                    <div class="font-alt detail" style="height: 570px">

                                        <p style="font-size: medium"><?php echo $data->veri[10]->material[4]->exp ?></p>
                                        <hr>
                                    </div>

                            </li>

                            <li class=" col-lg-3 col-md-3 col-sm-4 col-xs-6 contents_card" style="padding: 8px;padding-right: 0" ><a onclick="list_add('video_list')"   >
                                    <div class="work-image" ><img  src = "images/abstract-header.jpg" alt = "Portfolio Item" />
                                        <img src="images/video.png"
                                             style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                             alt="Image" class="img-responsive"></div >
                                    <div class="font-alt detail" >
                                        <h3 class="work-title" style="color: #666;"> Video İçerik Listesi</h3 >
                                    </div ></a >

                            </li>
                            <li class=" col-lg-3 col-md-3 col-sm-4 col-xs-6 contents_card" style="padding: 8px;padding-right: 0" ><a onclick="list_add('image_list')"   >
                                    <div class="work-image" ><img  src = "images/abstract-header.jpg" alt = "Portfolio Item" />
                                        <img src="images/photos.png"
                                             style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                             alt="Image" class="img-responsive"></div >
                                    <div class="font-alt detail" >
                                        <h3 class="work-title" style="color: #666;"> Resim İçerik Listesi</h3 >
                                    </div ></a >

                            </li>
                            <li class=" col-lg-3 col-md-3 col-sm-4 col-xs-6 contents_card" style="padding: 8px;padding-right: 0" ><a onclick="list_add('sound_list')" >
                                    <div class="work-image" ><img  src = "images/abstract-header.jpg" alt = "Portfolio Item" />
                                    <img src="images/sound.png"
                                         style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                         alt="Image" class="img-responsive"></div >
                                    <div class="font-alt detail" >
                                        <h3 class="work-title" style="color: #666;"> Ses İçerik Listesi</h3 >
                                    </div ></a >
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6 contents_card" style="padding: 8px;padding-right: 0" ><a onclick="list_add('document_list')" >
                                    <div class="work-image" ><img  src = "images/abstract-header.jpg" alt = "Portfolio Item" />
                                    <img src="images/document.png"
                                         style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                         alt="Image" class="img-responsive"></div >
                                    <div class="font-alt detail" >
                                        <h3 class="work-title" style="color: #666;"> Doküman İçerik Listesi</h3 >
                                    </div ></a >


                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6  contents_card " style="padding: 8px;padding-right: 0" ><a  onclick="list_add('link_list')"  >
                                    <div class="work-image" ><img  src = "images/abstract-header.jpg" alt = "Portfolio Item" />
                                    <img src="images/hub.png"
                                         style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                         alt="Image" class="img-responsive"></div >

                                    <div class="font-alt detail" >
                                        <h3 class="work-title" style="color: #666;"> Bağlantı Listesi</h3 >
                                    </div ></a >


                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6  contents_card" style="padding: 8px;padding-right: 0"  ><a onclick="list_add('content_list')" >
                                    <div class="work-image" ><img  src = "images/abstract-header.jpg" alt = "Portfolio Item" />
                                    <img src="images/world.png"
                                         style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                         alt="Image" class="img-responsive"></div >

                                    <div class="font-alt detail" >
                                        <h3 class="work-title" style="color: #666;"> Paylaşılan İçerik Listesi</h3 >
                                    </div ></a >


                            </li>

                        </ul>


            </div>
        </section>


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
                            <input type="hidden" name="location" value="view">
                            <input type="hidden" name="data" value="<?php echo "&url_id=".$_GET['url_id']; ?>">
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
                            <input type="hidden" name="location" value="view">
                            <input type="hidden" name="data" value="<?php echo "&url_id=".$_GET['url_id']; ?>">
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


    myVar = setTimeout(alertFunc, 3000);


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
        document.getElementById("image_view").style.height= document.getElementById("image_view").offsetWidth * 9/16+"px";
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

    function content_move(path) {


       $.ajax({
            type: "POST",
            url: "tasks.php",
            data: {task: "content_move",path:path.substring(path.indexOf(":")+1)},
            success: function (x) {
              document.getElementById("alert_suc").style.display="block";
            }

        });

    }

    var tur = '';
    var first_view = '';
    var material_selectedimg = '';

    var first_content=false;
    var add_content=false;
    var material_image=false;

    var modal = document.getElementById('Content');
    var content_list = document.getElementById('content_list');


    var span = document.getElementsByClassName("close")[0];


    var video_id = 0, sound_id = 0, text_id = 0, image_id = 0, content_id = 0, ar_id = 0;
    var dvideo_id = 0, dsound_id = 0, dtext_id = 0, dimage_id = 0, dcontent_id = 0, dar_id = 0;


    span.onclick = function () {
        $(tur).hide();
        modal.style.display = "none";
        content_list.style.display = "none";
        first_content=false;
        add_content=false;
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            $(tur).hide();
            modal.style.display = "none";
            content_list.style.display = "none";
            first_content=false;
            add_content=false;
        }
    }

    function content_get(uzanti, e) {
        tur = '.' + uzanti;
        $(tur).show();
        modal.style.display = "block";
        content_list.style.display = "block";
        first_content=true;
        add_content=false;
        first_view=e;
    }

    var first_view0 = "null", first_view1 = "null", first_view2 = "null", first_view3 = "null";


    document.getElementById("image_view").style.height= document.getElementById("image_view").offsetWidth * 9/16+"px";

    function video_display(view_type, yol) {

        document.getElementById(view_type).src = "files/contents/"+ yol;
        document.getElementById("video_title").innerText = yol;

    }
    function sound_display(view_type, yol) {

         document.getElementById(view_type).src =  'files/contents/' + yol;
         document.getElementById(view_type).play();
        document.getElementById("sound_title").innerText = yol;

    }
    function img_display(view_type, yol) {

        document.getElementById(view_type).style.height= document.getElementById(view_type).offsetWidth * 9/16+"px";
        document.getElementById(view_type).src = 'files/contents/' + yol;
        document.getElementById("image_title").innerText = yol;
    }
    function doc_display(view_type, yol) {
        document.getElementById("document_title").innerText = yol;
    }
 function link_display(view_type, yol) {
        document.getElementById("link_title").innerText = yol;
    }
 function content_display(view_type, yol) {
        document.getElementById("content_title").innerText = yol;
    }

    function list_add(content_id) {


        document.getElementById("video_card").style.display = "none";
        document.getElementById("sound_card").style.display = "none";
        document.getElementById("image_card").style.display = "none";
        document.getElementById("document_card").style.display = "none";
        document.getElementById("link_card").style.display = "none";
        document.getElementById("content_card").style.display = "none";

        switch (content_id) {
            case "video_list": {
                document.getElementById("video_card").style.display = "block";
                break;
            }
            case "sound_list": {
                document.getElementById("sound_card").style.display = "block";
                break;
            }
            case "document_list": {
                document.getElementById("document_card").style.display = "block";
                break;
            }
            case "image_list": {
                document.getElementById("image_card").style.display = "block";
                document.getElementById("image_view").style.height= document.getElementById("image_view").offsetWidth * 9/16+"px";
                break;
            }

            case "link_list": {
                document.getElementById("link_card").style.display = "block";
                break;
            }

            case "content_list": {
                document.getElementById("content_card").style.display = "block";
                break;
            }
        }

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
<script src="assets/js/scriptcontent.js"></script>
</body>
</html>
