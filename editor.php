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
        #video_list >li:hover{
            background-color:  #bdc3c7;
            color: white;
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
                <h4 style="color: white">Materyal Editörü</h4>

            </div>
            <ol style="position: absolute;right: 15px;background-color: #3c3c3c;margin-top: 10px" class="breadcrumb">
                <li><a href="channel.php" style="color: white;text-decoration: none"><i class="fa fa-star"></i> Kanal</a></li>
                <li class="active">Materyal Editörü</li>
            </ol>

        </div>
    </nav>


    <div class="main" style="background-color:#F9F9F9;padding-top: 88px">
        <section class="module" id="services" >
            <div>

                <div ><h2 style="width: 100%;float: left;text-align: center">Panel</h2></div>

                <ul class="edit_menu" style="display: none;list-style-type: none;width: 25%;float: left;border-radius:2px ;border-left-style: none;border-top: solid;border-right: solid;border-width: 2px" >
                    <li style="height: 65px;"><img src="images/view.png" style="height: 64px;padding: 8px;float: left"/><h4 style="float: left;margin-top: 20px">Yeni Materyal</h4> <img src="images/right.png" style="height: 64px;padding:16px;float: right"/><div style="background-color: #bdc3c7;height: 1px;width: 100%;float: left"></div></li>
                    <li style="height: 49px;background-color: #F9F9F9;padding-top: 48px"><div style="background-color: #bdc3c7;height: 1px;width: 100%;"></div></li>

                    <?php

                    for ($i=1;$i<10;$i++)
                    {
                        echo ' <li style="height: 65px;"><img src="images/view.png" style="height: 64px;padding: 8px;float: left"/><h4 style="float: left;margin-top: 20px">'."Materyal ".$i.'</h4> <img src="images/right.png" style="height: 64px;padding:16px;float: right"/><div style="background-color: #bdc3c7;height: 1px;width: 100%;float: left"></div></li>';
                    }

                    ?>

                </ul>

                <div style="background-color: white;padding: 16px;float: left;width: 100%;border-top: solid;border-width: 2px ">


                    <div style="float: left;width: 100%;border-radius: 2px">
                        <h2 style="width: 100%;text-align: center">Materyal Geliştir</h2>
                        <div class="row multi-columns-row ">
                            <ul class="works-grid works-grid-gut works-grid-3"   >


                                <li class="work-item col-lg-4 col-md-4 col-sm-6 " ><a onclick="list_add('material_image')" >
                                        <div class="work-image" >  <img  style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;" src = "images/photos.png" alt = "Portfolio Item" /><img id="material_image" src = "images/abstract-header.jpg" alt = "Portfolio Item" /></div >
                                        <div class="work-caption font-alt" >
                                            <h3 class="work-title" > Materyal Resmi Ekle</h3 >
                                        </div ></a >  <div class="font-alt detail" >
                                        <h3 class="work-title" style="color: #666;" > Materyal Resmi </h3 >
                                    </div ></li >
                                <li class="work-item col-lg-4 col-md-4 col-sm-6 " >
                                        <div class="work-image" ><img src = "images/abstract-header.jpg" alt = "Portfolio Item" /></div >
                                    <div style="position: absolute;top: 16px;width: 66.6%;left: 50%;margin-left: -33%;">
                                        <br>
                                        <label for="message-text" class="form-control-label" style="color: white">Bilgiler:</label>
                                        <input type="text" class="form-control" id="material_name" placeholder="Materyal Adı"/>
                                        <br>
                                        <input type="text" class="form-control" id="material_category" placeholder="Materyal Kategori"/>
                                        <br>
                                        <label for="message-text" class="form-control-label" style="color: white">Arama Etiketleri:</label>
                                        <textarea class="form-control" id="material_tag" placeholder="materyal,eğitim,..."  style="resize: none;"></textarea>
                                    </div>
                                      <div class="font-alt detail" >
                                        <h3 class="work-title" style="color: #666;" > Materyal Bilgileri</h3 >
                                    </div ></li >

                                <li class="work-item col-lg-4 col-md-4 col-sm-6 " >
                                        <div class="work-image" ><img src = "images/abstract-header.jpg" alt = "Portfolio Item" /></div >
                                    <div style="position: absolute;top: 16px;width: 66.6%;left: 50%;margin-left: -33%;">
                                        <br>

                                        <label for="message-text" class="form-control-label" style="color: white">Açıklama:</label>
                                        <textarea class="form-control" id="material_exp" placeholder="..."  style="height: 150px"></textarea>
                                    </div>
                                      <div class="font-alt detail" >
                                        <h3 class="work-title" style="color: #666;" > Materyal Bilgileri</h3 >
                                    </div ></li >


                            </ul></div>
                        <h2 style="width: 100%;text-align: center">Öne Çıkan İçerikler</h2>
                        <ul class="works-grid works-grid-gut works-grid-4 works-hover-w outer" >

                            <?php

                            for ($i=0;$i<4;$i++) {
                                echo '<li   class="work-item illustration webdesign" ><a >
                                        <div  class="work-image" style="background-color: black" >  <div id="bos'.$i.'" >
                                        <img  style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;" src = "images/view.png" alt = "Portfolio Item" />
                                          <img  src="images/abstract-header.jpg"/>
                                        </div>
                                       
                                      <img id="img_view'.$i.'" style="display: none;" src = "" alt = "Portfolio Item" />
                                        <div id="doc_view'.$i.'" style="display: none;">
                                        <img  style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;" src = "images/text.png" alt = "Portfolio Item" />
                                        </div>
                                        <div id="sound_div'.$i.'" style="display: none;">
                                             <img src="images/audio.png"
                                     style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                     alt="Image" class="img-responsive">
                                              <audio id="sound_view'.$i.'" style="background-color: black;width: 100%;position: absolute;z-index: 99999" 
                                       class="img-responsive" controls controlsList="nodownload">
                                        <h3 class="work-title" > Materyal </h3 >
                                    <source src="" type="audio/mpeg">
                                </audio>
                                </div>
                                
                                
                                        <video id="video_view'.$i.'"
                                   style="display: none;width: 100%;position: absolute;z-index: 1" 
                                   class="img-responsive" controls autoplay loop>
                                <source src="" type="video/mp4">
                            </video></div >
                                        <div class="work-caption font-alt" >
                                            <h3 class="work-title"  > İçerik Ekle </h3 >
                                           <div class="work-descr" > <img  style="height: 36px" onclick="content_get(\'mp4\',\'video_view'.$i.'\')" src="images/video.png"><img style="height: 36px;margin-left: 8px" onclick="content_get(\'img\',\'img_view'.$i.'\')" src="images/photos.png"><img style="height: 36px;margin-left: 8px"  onclick="content_get(\'mp3\',\'sound_view'.$i.'\')" src="images/sound.png"><img style="height: 36px;margin-left: 8px" onclick="content_get(\'doc\',\'doc_view'.$i.'\')" src="images/document.png"></div>
                                        </div ></a >  <div class="font-alt detail" >
                                        <h3 class="work-title" id="name'.$i.'" style="white-space: nowrap;width: 85%;overflow: hidden;text-overflow: ellipsis;"> İçerik </h3 >
                                        <div class="work-descr" id="c_tur'.$i.'" > Tür</div >
                                    </div ></li >';
                            }

                            ?>
                        </ul>

                        <h2  style="width: 100%;text-align: center">İçerik Galerisi</h2>

                            <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" >

                              <li class="work-item col-lg-4 col-md-6 contents_card" style="margin-bottom: 16px" ><a onclick="list_add('video_list')" >
                                        <div class="work-image" ><img id="video_viewimg" src = "images/abstract-header.jpg" alt = "Portfolio Item" />
                                      <img src="images/video.png"
                                           style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;z-index: 2"
                                           alt="Image" class="img-responsive">
                                      <video id="video_view"
                                             style="display: none;width: 100%;background-color: black;position: absolute;z-index: 1"
                                             class="img-responsive" controls autoplay loop>
                                          <source src="" type="video/mp4">
                                      </video></div >
                                        <div class="work-caption font-alt" >
                                            <h3 class="work-title" style="height: 136px"> </h3 >
                                            <h3 class="work-title" style="color: white"> Video İçerik Ekle</h3 >

                                        </div ></a >
                                  <ul id="video_list" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;list-style-type: none;height: 204px;overflow-x: scroll">

                                      <li id="video_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" >
                                        <h3 class="work-title" >  İçerik Eklenmedi </h3 >
                                       </li>
                                  </ul>

                              </li>
                                <li class="work-item col-lg-4 col-md-6 contents_card" style="margin-bottom: 16px" ><a onclick="list_add('image_list')"   >
                                        <div class="work-image" ><img id="image_view" src = "images/abstract-header.jpg" alt = "Portfolio Item" />
                                        <img src="images/photos.png"
                                             style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                             alt="Image" class="img-responsive"></div >
                                        <div class="work-caption font-alt" >
                                            <h3 class="work-title" style="height: 136px"> </h3 >
                                            <h3 class="work-title" style="color: white;"> Resim İçerik Ekle</h3 >
                                        </div ></a >
                                    <ul id="image_list" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;list-style-type: none;height: 204px;overflow-x: scroll">

                                        <li id="image_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" >
                                            <h3 class="work-title" >  İçerik Eklenmedi </h3 >
                                        </li>
                                    </ul>

                                </li>
                                <li class="work-item col-lg-4 col-md-6 contents_card" style="margin-bottom: 16px" ><a onclick="list_add('sound_list')" >
                                        <div class="work-image" ><img id="sound_viewimg" src = "images/abstract-header.jpg" alt = "Portfolio Item" /></div >
                                        <img src="images/sound.png"
                                             style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                             alt="Image" class="img-responsive">
                                        <div id="sound_div" style="display: none;">
                                            <audio id="sound_view" style="background-color: black;width: 100%;position:absolute;"
                                                   class="img-responsive" controls controlsList="nodownload">
                                                <source src="" type="audio/mpeg">
                                            </audio>
                                        </div>
                                        <div class="work-caption font-alt" >
                                            <h3 class="work-title" style="height: 136px"> </h3 >
                                            <h3 class="work-title" style="color: white"> Ses İçerik Ekle</h3 >
                                        </div ></a >
                                    <ul id="sound_list" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;list-style-type: none;height: 204px;overflow-x: scroll">

                                        <li id="sound_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" >
                                            <h3 class="work-title" >  İçerik Eklenmedi </h3 >
                                        </li>
                                    </ul>

                                </li>
                                <li class="work-item col-lg-4 col-md-6 contents_card" style="margin-bottom: 16px" ><a onclick="list_add('document_list')" >
                                        <div class="work-image" ><img id="document_viewimg" src = "images/abstract-header.jpg" alt = "Portfolio Item" /></div >
                                        <img src="images/document.png"
                                             style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                             alt="Image" class="img-responsive">
                                        <div id="document_div" style="display: none;">

                                        </div>
                                        <div class="work-caption font-alt" >
                                            <h3 class="work-title" style="height: 136px"> </h3 >
                                            <h3 class="work-title" style="color: white"> Doküman İçerik Ekle</h3 >
                                        </div ></a >
                                    <ul id="document_list" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;list-style-type: none;height: 204px;overflow-x: scroll">

                                        <li id="document_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" >
                                            <h3 class="work-title" >  İçerik Eklenmedi </h3 >
                                        </li>
                                    </ul>

                                </li>
                                <li class="work-item col-lg-4 col-md-6 contents_card" style="margin-bottom: 16px" ><a  data-toggle="modal" data-target="#linkModal"  >
                                        <div class="work-image" ><img id="link_viewimg" src = "images/abstract-header.jpg" alt = "Portfolio Item" /></div >
                                        <img src="images/hub.png"
                                             style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                             alt="Image" class="img-responsive">
                                        <div id="link_div" style="display: none;">

                                        </div>
                                        <div class="work-caption font-alt" >
                                            <h3 class="work-title" style="height: 136px"> </h3 >
                                            <h3 class="work-title" style="color: white"> Bağlantı Ekle</h3 >
                                        </div ></a >
                                    <ul id="link_list" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;list-style-type: none;height: 204px;overflow-x: scroll">

                                        <li id="link_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" >
                                            <h3 class="work-title" >  Bağlantı Eklenmedi </h3 >
                                        </li>
                                    </ul>

                                </li>
                                <li class="work-item col-lg-4 col-md-6 contents_card" style="margin-bottom: 16px" ><a onclick="list_add('content_list')" >
                                        <div class="work-image" ><img id="content_viewimg" src = "images/abstract-header.jpg" alt = "Portfolio Item" /></div >
                                        <img src="images/world.png"
                                             style="position:absolute;width: 100px;height: 100px;left: 50%;margin-left: -50px;top: 50%;margin-top: -50px;"
                                             alt="Image" class="img-responsive">
                                        <div id="content_div" style="display: none;">

                                        </div>
                                        <div class="work-caption font-alt" >
                                            <h3 class="work-title" style="height: 136px"> </h3 >
                                            <h3 class="work-title" style="color: white"> Paylaşıma Açık İçerik Ekle</h3 >
                                        </div ></a >
                                    <ul id="contents_list" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;list-style-type: none;height: 204px;overflow-x: scroll">

                                        <li id="content_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" >
                                            <h3 class="work-title" >  İçerik Eklenmedi </h3 >
                                        </li>
                                    </ul>

                                </li>

                                </ul>


                            <div style="text-align: center;" >
                           <a class="btn btn-border-d  btn-circle" href="contents.php" style="margin: 4px" >İçerik Yön.</a>
                           <a class="btn btn-border-d  btn-circle" onclick="yayinla()" style="margin: 4px" >Yayınla</a>
                           <a class="btn btn-border-d  btn-circle" style="margin: 4px"   >Kaydet</a>
                            </div>
                    </div>

                </div>

            </div>
        </section>


    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>

    <div id="Content" style="z-index: 20;margin-top: 100px" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span style="color: #c0392b" class="close">&times;</span>
            <h4 style="color: black;margin-left: 16px" >İçerikler</h4>
            <hr style="border-top: 1px solid black" class="w3-container"/>
            <div style="margin-top: -20px" class="filemanager">

                <div class="search">
                    <input type="search" placeholder="Ara"/>
                </div>


                <ul class="data" id="content_list" style="background-color: white"></ul>

                <div class="nothingfound">
                    <div class="nofiles"></div>
                    <span style="margin-left: 90px">Dosya Bulunamadı.</span>

                    <a style="text-decoration: none" href="contents.php"><span style="margin-left: 150px">Geri</span></a>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="linkModal" tabindex="-1" style="z-index: 9999" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yeni Bağlantı</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Bağlantı:</label>
                            <textarea class="form-control" id="link-text" style="resize: none"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="link_contentadd('link_li')">Bağlantı Ekle</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<!--
JavaScripts
=============================================
-->
<script type="text/javascript">

   var contents_card=document.getElementById("contents_card");




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

    function deneme(veri) {
        alert(veri);
    }

    function yayinla() {


        var video_list="",sound_list="",image_list="",document_list="",link_list="",content_list="",material_list="";

        var video_title = document.getElementsByClassName('video_title');

        for (var i=0; i<video_title.length; i++) {
            video_list+='{\"path\":\"'+video_title[i].innerText.toLowerCase()+'\"}';
            if (i!=video_title.length-1)
                video_list+=',';
        }

        var image_title = document.getElementsByClassName('image_title');

        for (var i=0; i<image_title.length; i++) {
            image_list+='{\"path\":\"'+image_title[i].innerText.toLowerCase()+'\"}';
            if (i!=image_title.length-1)
                image_list+=',';
        }

        var sound_title = document.getElementsByClassName('sound_title');

        for (var i=0; i<sound_title.length; i++) {
            sound_list+='{\"path\":\"'+sound_title[i].innerText.toLowerCase()+'\"}';
            if (i!=sound_title.length-1)
                sound_list+=',';
        }

        var document_title = document.getElementsByClassName('document_title');

        for (var i=0; i<document_title.length; i++) {
            document_list+='{\"path\":\"'+document_title[i].innerText.toLowerCase()+'\"}';
            if (i!=document_title.length-1)
                document_list+=',';
        }

        var link_title = document.getElementsByClassName('link_title');

        for (var i=0; i<link_title.length; i++) {
            link_list+='{\"path\":\"'+link_title[i].innerText.toLowerCase()+'\"}';
            if (i!=link_title.length-1)
                link_list+=',';
        }

         var content_title = document.getElementsByClassName('content_title');

        for (var i=0; i<content_title.length; i++) {

            content_list+='{\"path\":\"'+content_title[i].innerText.toLowerCase()+'\"}';
            if (i!=content_title.length-1)
                content_list+=',';
        }

        var material_name=document.getElementById("material_name").value;
        var material_category=document.getElementById("material_category").value;
        var material_tag=document.getElementById("material_tag").value;
        var material_exp=document.getElementById("material_exp").value;
        var material_image=material_selectedimg;//document.getElementById("material_image").src;

            material_list+='{\"name\":\"'+material_name+'\"},';
            material_list+='{\"category\":\"'+material_category+'\"},';
            material_list+='{\"tag\":\"'+material_tag+'\"},';
            material_list+='{\"image\":\"'+material_image.toLowerCase()+'\"},';
            material_list+='{\"exp\":\"'+material_exp.toLowerCase()+'\"}';



       var JSON='{"veri":[{"path":"'+document.getElementById("name0").innerHTML.toLowerCase()+'", "type":"'+document.getElementById("c_tur0").innerHTML.toLowerCase()+'"},' +
           '{"path":"'+document.getElementById("name1").innerHTML.toLowerCase()+'", "type":"'+document.getElementById("c_tur1").innerHTML.toLowerCase()+'"},' +
           '{"path":"'+document.getElementById("name2").innerHTML.toLowerCase()+'", "type":"'+document.getElementById("c_tur2").innerHTML.toLowerCase()+'"},' +
           '{"path":"'+document.getElementById("name3").innerHTML.toLowerCase()+'", "type":"'+document.getElementById("c_tur3").innerHTML.toLowerCase()+'"},' +
           '{"video":['+video_list+']},' +
           '{"sound":['+sound_list+']},' +
           '{"image":['+image_list+']},' +
           '{"document":['+document_list+']},' +
           '{"link":['+link_list+']},' +
           '{"content":['+content_list+']},' +
           '{"material":['+material_list+']}' +
           ']}';



        $.ajax({
            type: "POST",
            url: "tasks.php",
            data: {"task": "publish", "json": JSON},
            success: function (data) {
                window.location = 'channel.php?operation=publish';
            }
        });


    }

    function video_content(yol) {
        $(tur).hide();
        modal.style.display = "none";

        if (first_content&&!add_content)
        {
            video_display(first_view,yol);
        }
        else if (add_content&&!first_content&&id_tur!="content_li"){

            $("#" + id_tur + 'bos').remove();
            $("#video_list").append('<li onclick="video_display(\'video_view\',\'' + yol + '\')" id="' + id_tur + id_toplam.toString() + '" class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px">'
                + '  <h3 class="work-title video_title" style="white-space: nowrap;width: 85%;overflow: hidden;text-overflow: ellipsis;float: left">' + yol + '</h3>' +
                '<i onclick="list_del(\'' + id_tur + id_toplam.toString() + '\')" style="float: right;font-size: large ;margin-top: 1px" class="content_img fa fa-times"  >' +
                '</li>');

        }
        else if (id_tur=="content_li")
        {
            $("#" + id_tur + 'bos').remove();
            $("#contents_list").append('<li  id="' + id_tur + id_toplam.toString() + '" class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px">'
                + '  <h3 class="work-title content_title" style="white-space: nowrap;width: 85%;overflow: hidden;text-overflow: ellipsis;float: left">Video : ' + yol + '</h3>' +
                '<i onclick="list_del(\'' + id_tur + id_toplam.toString() + '\')" style="float: right;font-size: large ;margin-top: 1px" class="content_img fa fa-times"  >' +
                '</li>');
        }

        first_content=false;

    }

    function img_content(yol) {

        $(tur).hide();
        modal.style.display = "none";
        if (first_content&&!add_content)
        {
            img_display(first_view,yol)
        }
        else if (add_content&&!first_content&&id_tur!="content_li"&&material_image==false){
            $("#" + id_tur + 'bos').remove();
            $("#image_list").append('<li onclick="img_display(\'image_view\',\'' + yol + '\')" id="' + id_tur + id_toplam.toString() + '" class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px">'
                + '  <h3 class="work-title image_title" style="white-space: nowrap;width: 85%;overflow: hidden;text-overflow: ellipsis;float: left">' + yol + '</h3>' +
                '<i onclick="list_del(\'' + id_tur + id_toplam.toString() + '\')" style="float: right;font-size: large ;margin-top: 1px" class="content_img fa fa-times"  >' +
                '</li>');

        }
        else if (id_tur=="content_li"&&material_image==false)
        {
            $("#" + id_tur + 'bos').remove();
            $("#contents_list").append('<li  id="' + id_tur + id_toplam.toString() + '" class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px">'
                + '  <h3 class="work-title content_title" style="white-space: nowrap;width: 85%;overflow: hidden;text-overflow: ellipsis;float: left">Resim :' + yol + '</h3>' +
                '<i onclick="list_del(\'' + id_tur + id_toplam.toString() + '\')" style="float: right;font-size: large ;margin-top: 1px" class="content_img fa fa-times"  >' +
                '</li>');
        }
        else if (material_image)
        {
            img_display("material_image",yol)
        }
    }

    function sound_content(yol) {

        $(tur).hide();
        modal.style.display = "none";
        if (first_content&&!add_content)
        {
            sound_display(first_view,yol)
        }
        else if (add_content&&!first_content&&id_tur!="content_li"){
            $("#" + id_tur + 'bos').remove();
            $("#sound_list").append('<li onclick="sound_display(\'sound_view\',\'' + yol + '\')" id="' + id_tur + id_toplam.toString() + '" class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px">'
                + '  <h3 class="work-title sound_title " style="white-space: nowrap;width: 85%;overflow: hidden;text-overflow: ellipsis;float: left">' + yol + '</h3>' +
                '<i onclick="list_del(\'' + id_tur + id_toplam.toString() + '\')" style="float: right;font-size: large ;margin-top: 1px" class="content_img fa fa-times"  >' +
                '</li>');

        }
        else if (id_tur=="content_li")
        {
            $("#" + id_tur + 'bos').remove();
            $("#contents_list").append('<li  id="' + id_tur + id_toplam.toString() + '" class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px">'
                + '  <h3 class="work-title content_title" style="white-space: nowrap;width: 85%;overflow: hidden;text-overflow: ellipsis;float: left">Ses :' + yol + '</h3>' +
                '<i onclick="list_del(\'' + id_tur + id_toplam.toString() + '\')" style="float: right;font-size: large ;margin-top: 1px" class="content_img fa fa-times"  >' +
                '</li>');
        }
    }

    function document_content(yol) {

        $(tur).hide();
        modal.style.display = "none";
        if (first_content&&!add_content)
        {
            doc_display(first_view,yol)
        }
        else if (add_content&&!first_content&&id_tur!="content_li"){
            $("#" + id_tur + 'bos').remove();
            $("#document_list").append('<li  id="' + id_tur + id_toplam.toString() + '" class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px">'
                + ' <h3 class="work-title document_title" style="white-space: nowrap;width: 85%;overflow: hidden;text-overflow: ellipsis;float: left">' + yol + '</h3>' +
                '<i onclick="list_del(\'' + id_tur + id_toplam.toString() + '\')" style="float: right;font-size: large ;margin-top: 1px" class="content_img fa fa-times"  >' +
                '</li>');

        }
        else if (id_tur=="content_li")
        {
            $("#" + id_tur + 'bos').remove();
            $("#contents_list").append('<li  id="' + id_tur + id_toplam.toString() + '" class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px;height: 51px">'
                + '  <h3 class="work-title content_title" style="white-space: nowrap;width: 85%;overflow: hidden;text-overflow: ellipsis;float: left">Doküman :' + yol + '</h3>' +
                '<i onclick="list_del(\'' + id_tur + id_toplam.toString() + '\')" style="float: right;font-size: large ;margin-top: 1px" class="content_img fa fa-times"  >' +
                '</li>');
        }
    }
    var lid_toplam=0;

    function link_contentadd(l_id) {

      var link_text= document.getElementById("link-text").value;
            $("#" + l_id + 'bos').remove();
            $("#link_list").append('<li id="'  + l_id + lid_toplam.toString() +'" class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;height: 51px;padding: 12px">'
                + ' <h3 class="work-title link_title" style="width: 85%;float: left;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><a target="_blank" href="'+link_text+'">'+link_text+'</a></h3>' +
                '<i onclick="link_contentdel(\'' + l_id + lid_toplam.toString() + '\')" style="float: right;font-size: large ;margin-top: 1px" class="content_img fa fa-times"  >' +
                '</li>');


            lid_toplam++;

    }

   function link_contentdel(del_id) {

       $("#" + del_id).remove();
       lid_toplam--;
       if (lid_toplam==0)
       {
           $("#link_list").append('<li id="link_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" ><h3 class="work-title" >  Bağlantı Eklenmedi </h3 ></li>');
           document.getElementById("video_view" + "img").style.display = "block";
           document.getElementById("video_view").style.display = "none";
       }

   }

    function firstview_report(view_type,view_tur) {

        switch (view_type.slice(-1))
        {
            case "0":
            {
                first_view0=view_tur;
                break;
            }
            case "1":
            {
                first_view1=view_tur;
                break;
            }
            case "2":
            {
                first_view2=view_tur;
                break;
            }
            case "3":
            {
                first_view3=view_tur;
                break;
            }
        }
    }


  var dizi= document.getElementsByClassName("work-image");

function card_size() {
    for (var i=0; i<dizi.length; i++) {
        dizi[i].style.height=dizi[i].offsetWidth * 9/16+"px";
    }
}

   window.onresize = function(event) {
     card_size();
   }
    function video_display(view_type, yol) {

    card_size();
        if (first_content&&!add_content)
        {
            hide_view(view_type);
            document.getElementById(view_type).style.display = "block";
            document.getElementById(view_type).src = "files/contents/loading.mp4";
            $.ajax({
                type: "POST",
                url: "tasks.php",
                data: "task=get_filepath",
                success: function (data) {
                    document.getElementById(view_type).src = data + '/' + yol;
                    document.getElementById("name" + view_type.slice(-1)).innerText = yol;
                    document.getElementById("c_tur" + view_type.slice(-1)).innerText = "Video";

                   firstview_report(view_type,"video");
                }
            });
        }
        else if (add_content&&!first_content&&dvideo_id != 0) {
            document.getElementById(view_type+"img").style.display = "none";
            document.getElementById(view_type).style.display = "block";
            document.getElementById(view_type).src = "files/contents/loading.mp4";
            $.ajax({
                type: "POST",
                url: "tasks.php",
                data: "task=get_filepath",
                success: function (data) {
                    document.getElementById(view_type).src = data + '/' + yol;
                }
            });

        }


    }
    function sound_display(view_type, yol) {
        card_size();
        if (first_content && !add_content) {
            hide_view(view_type);
            document.getElementById("sound_div" + view_type.slice(-1)).style.display = "block";
            $.ajax({
                type: "POST",
                url: "tasks.php",
                data: "task=get_filepath",
                success: function (data) {
                    document.getElementById(view_type).src = data + '/' + yol;
                    document.getElementById("name" + view_type.slice(-1)).innerText = yol;
                    document.getElementById("c_tur" + view_type.slice(-1)).innerText = "Ses";
                  //  document.getElementById(view_type).play();
                    firstview_report(view_type,"sound");
                }
            });

        }
        else if (add_content && !first_content && dsound_id != 0) {
            document.getElementById("sound_div").style.display = "block";
            $.ajax({
                type: "POST",
                url: "tasks.php",
                data: "task=get_filepath",
                success: function (data) {
                    document.getElementById(view_type).src = data + '/' + yol;
                    document.getElementById(view_type).play();

                }
            });
        }
    }
    function img_display(view_type, yol) {
        card_size();
        if (first_content&&!add_content) {
            hide_view(view_type);
            document.getElementById(view_type).style.display = "block";
            document.getElementById(view_type).src = "images/loading.gif";
            $.ajax({
                type: "POST",
                url: "tasks.php",
                data: "task=get_filepath",
                success: function (data) {
                    document.getElementById(view_type).src = data + '/' + yol;
                    document.getElementById("name" + view_type.slice(-1)).innerText = yol;
                    document.getElementById("c_tur" + view_type.slice(-1)).innerText = "Resim";
                    firstview_report(view_type,"image");

                }
            });
        }
        else if (add_content&&!first_content&&dimage_id != 0&&material_image==false) {
            document.getElementById(view_type).src = "images/loading.gif";
            $.ajax({
                type: "POST",
                url: "tasks.php",
                data: "task=get_filepath",
                success: function (data) {
                    document.getElementById(view_type).src = data + '/' + yol;


                }
            });
        }
      else if  (material_image) {
            document.getElementById(view_type).src = "images/loading.gif";
            $.ajax({
                type: "POST",
                url: "tasks.php",
                data: "task=get_filepath",
                success: function (data) {
                    document.getElementById(view_type).src = data + '/' + yol;
                    material_selectedimg=yol;
                }
            });
        }

    }
    function doc_display(view_type, yol) {
        card_size();
        if (first_content&&!add_content) {
        hide_view(view_type);
        document.getElementById(view_type).style.display = "block";
        document.getElementById(view_type).src = "images/loading.gif";
        $.ajax({
            type: "POST",
            url: "tasks.php",
            data: "task=get_filepath",
            success: function (data) {
             //   document.getElementById(view_type).src = "images/doc.png";
                document.getElementById("name"+view_type.slice(-1)).innerText = yol;
                document.getElementById("c_tur"+view_type.slice(-1)).innerText = "Doküman";
                firstview_report(view_type,"document");

            }
        });
        }
        else if (add_content&&!first_content&&dimage_id != 0) {
            $.ajax({
                type: "POST",
                url: "tasks.php",
                data: "task=get_filepath",
                success: function (data) {
                    document.getElementById(view_type).src = data + '/' + yol;
                }
            });
        }

    }

    function hide_view(view_type) {
        document.getElementById("bos"+view_type.slice(-1)).style.display = "none";
        document.getElementById("video_view"+view_type.slice(-1)).style.display = "none";
        document.getElementById("sound_div"+view_type.slice(-1)).style.display = "none";
        document.getElementById("doc_view"+view_type.slice(-1)).style.display = "none";
        document.getElementById("img_view"+view_type.slice(-1)).style.display = "none";
    }


    function list_add(content_id) {


        switch (content_id) {
            case "video_list": {
                id_toplam = video_id++;
                dvideo_id++;
                content_tur = "Video İçerik ";
                id_tur = "video_li";
                tur = ".mp4";
                break;
            }
            case "sound_list": {
                id_toplam = sound_id++;
                dsound_id++;
                content_tur = "Ses İçerik ";
                id_tur = "sound_li";
                tur = ".mp3";
                break;
            }
            case "document_list": {
                id_toplam = text_id++;
                dtext_id++;
                content_tur = "Metin İçerik ";
                id_tur = "document_li";
                tur = ".doc";
                break;
            }
            case "image_list": {
                id_toplam = image_id++;
                dimage_id++;
                content_tur = "Resim İçerik ";
                id_tur = "image_li";
                tur = ".img";
                material_image=false;
                break;
            }

            case "material_image": {
                id_toplam = image_id++;
                dimage_id++;
                content_tur = "Resim İçerik ";
                id_tur = "image_li";
                tur = ".img";
                material_image=true;

                break;
            }

            case "content_list": {
                id_toplam = content_id++;
                dcontent_id++;
                content_tur = "Tüm İçerik ";
                id_tur = "content_li";
                tur = ".all";
                break;
            }
        }

        $(tur).show();
        modal.style.display = "block";
        content_list.style.display = "block";
        add_content=true;
        first_content=false;
    }

    function list_del(del_id) {

        $("#" + del_id).remove();

        switch (del_id.substring(0, del_id.indexOf('_'))) {
            case "video": {
                dvideo_id--;
                if (dvideo_id == 0) {
                    $("#video_list").append('<li id="video_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" ><h3 class="work-title" >  İçerik Eklenmedi </h3 ></li>');
                    document.getElementById("video_view"+"img").style.display = "block";
                    document.getElementById("video_view").style.display = "none";
                }
                break;
            }
            case "sound": {

                dsound_id--;
                if (dsound_id == 0) {
                    $("#sound_list").append('<li id="sound_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" ><h3 class="work-title" >  İçerik Eklenmedi </h3 ></li>');
                    document.getElementById("sound_view"+"img").style.display = "block";
                    document.getElementById("sound_view").style.display = "none";
                }
                break;
            }
            case "document": {
                dtext_id--;
                if (dtext_id == 0) {
                    $("#document_list").append('<li id="doc_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" ><h3 class="work-title" >  İçerik Eklenmedi </h3 ></li>');

                }
                break;
            }
            case "image": {
                dimage_id--;
                if (dimage_id == 0) {
                    $("#image_list").append('<li id="image_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" ><h3 class="work-title" >  İçerik Eklenmedi </h3 ></li>');
                    document.getElementById("image_view").src = "images/abstract-header.jpg";
                }
                break;
            }
            case "content": {
                dcontent_id--;
                if (dcontent_id == 0) {
                    $("#contents_list").append('<li id="content_libos"  class="font-alt detail" style="border-bottom: solid;border-bottom-color: #bdc3c7;border-width: 2px;padding: 12px" ><h3 class="work-title" >  İçerik Eklenmedi </h3 ></li>');

                }
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
