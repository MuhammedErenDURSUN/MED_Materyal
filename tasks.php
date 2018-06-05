<?php
/**
 * Created by PhpStorm. * Copyright © 2018 MED. All rights reserved.
 * User: med
 * Date: 4.11.2017
 * Time: 22:59
 */


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {

    session_start();


    try {
        $baglanti = new PDO("****************************", "*************", "***************");
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {

    }


    switch (strip_tags(rtrim($_POST["task"]))) {

        case "file_delete": {

            $file = strip_tags(rtrim($_POST['file']));

            unlink("files/" . $_SESSION["name"] . "/" . $file);


            break;

        }
        case "session_destroy": {


            session_destroy();
            break;
        }

        case "get_filepath": {

            echo "files/" . $_SESSION["name"];
            break;
        }

        case "file_upload": {
            if (isset($_FILES['upl']) && $_FILES['upl']['error'] == 0) {


                $extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
               $files_name=text_make($_FILES['upl']['name']);
                if (move_uploaded_file($_FILES['upl']['tmp_name'], 'files/' . $_SESSION["name"] . '/' . $files_name)) {
                    copy('files/' . $_SESSION["name"] . '/'  . $files_name, 'files/contents/' . $files_name);
                    exit;
                }
            }
            break;
        }

        case "content_move": {

            if (isset($_SESSION["name"])) {
                $content_path = stripslashes($_POST["path"]);

                copy('files/contents/' . $content_path, 'files/' . $_SESSION["name"] . '/' . $content_path);
            }

            break;
        }

        case "file_scan": {

            $dir = "files/" . $_SESSION["name"];

            $files = array();


            if (file_exists($dir)) {

                foreach (scandir($dir) as $f) {

                    if (!$f || $f[0] == '.') {
                        continue; // Ignore hidden files
                    }

                    if (is_dir($dir . '/' . $f)) {

                        // The path is a folder

                        $files[] = array(
                            "name" => $f,
                            "type" => "folder",
                            "path" => $dir . '/' . $f,
                            "items" => scan($dir . '/' . $f) // Recursively get the contents of the folder
                        );
                    } else {

                        // It is a file

                        $files[] = array(
                            "name" => $f,
                            "type" => "file",
                            "path" => $dir . '/' . $f,
                            "size" => filesize($dir . '/' . $f) // Gets the size of this file
                        );
                    }
                }

            } else {
                mkdir($dir, 0777);
            }


            header('Content-type: application/json');

            echo json_encode(array(
                "name" => $_SESSION["name"],
                "type" => "folder",
                "path" => $dir,
                "items" => $files
            ));

            break;
        }
        case "publish": {

            $name =$_SESSION["name"];
            $surname= $_SESSION["surname"];

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randstring = '';
            for ($i = 0; $i < 10; $i++) {
                $randstring .= $characters[rand(0, strlen($characters))];
            }

            $json= stripslashes($_POST["json"]);
            $veriler = json_decode($json);

            $gir = $baglanti->prepare("INSERT INTO materials SET m_name = :a, url_id = :b, developer = :c,utilization=:d,date =:e ,category= :f,showcase= :g,qrcode= :h,status= :i,tag= :k,json_data= :l");

            $sql_giris = $gir->execute(array("a" => $veriler->veri[10]->material[0]->name, "b" => $randstring, "c" => $name." ".$surname, "d" => 0, "e" => (new \DateTime())->format('Y-m-d H:i:s'), "f" => $veriler->veri[10]->material[1]->category, "g" => $veriler->veri[10]->material[3]->image, "h" => $randstring, "i" => true, "k" => $veriler->veri[10]->material[2]->tag, "l" => $json));


            if ($sql_giris) {

                $_SESSION["Message"] = "Materyal yayınlama başarılı.";
                $_SESSION["Alert"] = "Yayınlama";
                $_SESSION["Color"] = "alert-success";
            }

            break;
        }
        case "publish_update": {

            $url_id=stripslashes($_POST["url_id"]);

            $status_query = "Select status From materials where url_id = '" . $url_id . "'";
            $sql_status = $baglanti->query($status_query)->fetch(PDO::FETCH_ASSOC);

            $gir = $baglanti->prepare("Update materials SET status = :a WHERE url_id='" . $url_id . "'");
            $sql_update = $gir->execute(array("a" =>!$sql_status["status"] ));


            if ($sql_update) {
                if (!$sql_status['status'])
                {
                    $_SESSION["Message"] = "Materyal yayınlama başarılı.";
                }
                else
                {
                    $_SESSION["Message"] = "Materyal yayından kaldırma başarılı.";
                }

                $_SESSION["Alert"] = "Yayınlama";
                $_SESSION["Color"] = "alert-success";
            }

            break;
        }


        case "user_login": {
            $email = stripslashes($_POST["email"]);
            $password = stripslashes($_POST["password"]);
            $location = stripslashes($_POST["location"]);
            $data = stripslashes($_POST["data"]);
            $email_query = "Select * From accounts where e_mail = '" . $email . "'";
            $sql_email = $baglanti->query($email_query)->fetch(PDO::FETCH_ASSOC);


            if ($sql_email) {
                if (strcmp($sql_email["password"], $password) == 0) {

                    $_SESSION["Message"] = "Giriş Başarılı";
                    $_SESSION["name"] = $sql_email["name"];
                    $_SESSION["surname"] = $sql_email["surname"];
                    $_SESSION["email"] = $sql_email["e_mail"];
                    $_SESSION["password"] = $sql_email["password"];

                    if ($sql_email["status"]) {
                        $_SESSION["Message"] = "Giriş başarılı.";
                        $_SESSION["Alert"] = "Oturum açıldı";
                        $_SESSION["Color"] = "alert-success";
                        $_SESSION["Login"] = "true";
                        header('Location:'. $location.'.php?operation=login'. $data);
                    } else if (!$sql_email["status"]) {
                        $_SESSION["Message"] = "Giriş başarılı.Aktivasyon bekleniyor.";
                        $_SESSION["Alert"] = "Aktivasyon";
                        $_SESSION["Color"] = "alert-info";
                        $_SESSION["Login"] = "false";
                        header('Location:'. $location.'.php?operation=login'. $data);
                    }

                } else {

                    $_SESSION["Message"] = "Şifreyi kontrol ediniz.";
                    $_SESSION["Alert"] = "Uyarı!";
                    $_SESSION["Color"] = "alert-warning";
                    $_SESSION["Login"] = "false";
                    header('Location:'. $location.'.php?operation=login'. $data);
                }
            } else {

                $_SESSION["Message"] = "Bu bilgilere ait kullanıcı bulunmamaktadır.";
                $_SESSION["Alert"] = "Hata!";
                $_SESSION["Color"] = "alert-danger";
                $_SESSION["Login"] = "false";
                header('Location:'. $location.'.php?operation=login'. $data);
            }
            break;
        }
        case "user_signup": {
            $name = stripslashes($_POST["name"]);
            $email = stripslashes($_POST["email"]);
            $password = stripslashes($_POST["password"]);
            $surname = stripslashes($_POST["surname"]);
            $location = stripslashes($_POST["location"]);
            $data = stripslashes($_POST["data"]);
            $email_query = "Select id From accounts where e_mail = '" . $email . "'";
            $sql_email = $baglanti->query($email_query)->fetch(PDO::FETCH_ASSOC);

            if ($sql_email) {

                $_SESSION["Message"] = "Bu Maile ait kullanıcı bulunmaktadır.";
                $_SESSION["Alert"] = "Uyarı!";
                $_SESSION["Color"] = "alert-warning";
                $_SESSION["Login"] = "false";
                header('Location:'. $location.'.php?operation=login'. $data);

            } else {

                $gir = $baglanti->prepare("INSERT INTO accounts SET name = :a, e_mail = :b, password = :c,surname=:d,activation_code =:e ,status= :g,profile_image= :f");

                $sql_giris = $gir->execute(array("a" => $name, "b" => $email, "c" => $password, "d" => $surname, "e" => "123456", "g" => "true", "f" => "profil.png"));

                if ($sql_giris) {

                    $_SESSION["Message"] = "Giriş başarılı.Aktivasyon bekleniyor.";
                    $_SESSION["Alert"] = "Aktivasyon";
                    $_SESSION["Color"] = "alert-info";
                    $_SESSION["Login"] = "false";
                    $_SESSION["name"] = $name;
                    $_SESSION["surname"] = $surname;
                    $_SESSION["email"] = $email;
                    $_SESSION["password"] = $password;
                    header('Location:'. $location.'.php?operation=login'. $data);
                    send_Mail( $_SESSION["email"]);

                } else {
                    $_SESSION["Message"] = "Kayıt tamamlanamadı tekrar deneyiniz";
                    $_SESSION["Alert"] = "Hata!";
                    $_SESSION["Color"] = "alert-danger";
                    $_SESSION["Login"] = "false";
                    header('Location:'. $location.'.php?operation=login'. $data);
                }

            }

            break;
        }
        case "user_active": {
            $email =  "". $_SESSION["email"];
            $post_code = stripslashes($_POST["active_code"]);
            $location = stripslashes($_POST["location"]);
            $data = stripslashes($_POST["data"]);
            $JSON = array();


            $email_query = "Select * From accounts where e_mail = '" . $email . "'";
            $sql_email = $baglanti->query($email_query)->fetch(PDO::FETCH_ASSOC);


            if ($sql_email) {

                    if (!$sql_email["status"]) {

                        if (strcmp($sql_email["activation_code"], $post_code) == 0) {


                            $query = $baglanti->prepare("UPDATE accounts SET status = :a WHERE e_mail = :b");
                            $update = $query->execute(array("a" => true, "b" => $sql_email["e_mail"]));
                            if ($update) {


                                $_SESSION["Message"] = "Kullanıcı hesabı aktifleştirildi. Başlayabilirsiniz";
                                $_SESSION["Alert"] = "Tamamlandı";
                                $_SESSION["Color"] = "alert-success";
                                $_SESSION["Login"] = "true";
                                header('Location:'. $location.'.php?operation=login'. $data);

                            } else {

                                $_SESSION["Message"] = "Hata meydana geldi tekrar deneyiniz.";
                                $_SESSION["Alert"] = "Aktivasyon";
                                $_SESSION["Color"] = "alert-danger";
                                $_SESSION["Login"] = "false";
                                header('Location:'. $location.'.php?operation=login'. $data);
                            }


                        } else {

                            $_SESSION["Message"] = "Aktivasyon kodu yanlış tekrar deneyiniz.";
                            $_SESSION["Alert"] = "Aktivasyon";
                            $_SESSION["Color"] = "alert-danger";
                            $_SESSION["Login"] = "false";
                            header('Location:'. $location.'.php?operation=login'. $data);
                        }


                    } else {

                        $_SESSION["Message"] = "Hesap Daha Önce Aktifleştirilmiş.";
                        $_SESSION["Alert"] = "Bilgi";
                        $_SESSION["Color"] = "alert-info";
                        $_SESSION["Login"] = "false";
                        header('Location:'. $location.'.php?operation=login'. $data);
                    }


            } else {
                $_SESSION["Message"] = "Email Adresine ait kullanıcı bulunmamaktadır.";
                $_SESSION["Alert"] = "Uyarı!";
                $_SESSION["Color"] = "alert-warning";
                $_SESSION["Login"] = "false";
                header('Location:'. $location.'.php?operation=login'. $data);

            }
            break;
        }
        case "active_mail": {
                send_Mail( $_SESSION["email"]);
            break;
        }
        default : {
            header("Location:index.php?operation=null");
        }

    }

} else {

    header("Location:index.php?operation=null");
}
function text_make($str){
    $before = array('ı', 'ğ', 'ü', 'ş', 'ö', 'ç', 'İ', 'Ğ', 'Ü', 'Ö', 'Ç'); // , '\'', '""'
    $after   = array('i', 'g', 'u', 's', 'o', 'c', 'i', 'g', 'u', 'o', 'c'); // , '', ''

    $clean = str_replace($before, $after, $str);
    $clean = preg_replace('!\s+!', '-', $clean);
    $clean = strtolower(trim($clean, '-'));

    return $clean;
}

function send_Mail($email)
{
    require("class.phpmailer.php");

    $JSON = array();

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;


    $mail->Host = 'mail.muhammederendursun.com';

    $mail->Port = 587;

    $mail->SMTPDebug = 0;
    $mail->IsHTML(true);


    $mail->Username = 'med@muhammederendursun.com';
    $mail->Password = 'SNsz16V0';


    $mail->SetFrom('med@muhammederendursun.com', 'MED Materyal Platformu');


    try {
        $baglanti = new PDO("****************************", "*************", "***************");
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        print $e->getMessage();
        // Admin hata bilgisi db bağlanamadı
    }


    $email_query = "Select * From accounts where e_mail = '" . $email . "'";
    $sql_email = $baglanti->query($email_query)->fetch(PDO::FETCH_ASSOC);

    $location = stripslashes($_POST["location"]);
    $data = stripslashes($_POST["data"]);
    if ($sql_email) {

           if (!$sql_email["status"]) {


                $activation_code_temp = rand(100000, 1000000);


                $query = $baglanti->prepare("UPDATE accounts SET activation_code = :a WHERE e_mail = :b");
                $update = $query->execute(array("a" => $activation_code_temp, "b" => $sql_email["e_mail"]));
                if ($update) {

                    $mail->AddAddress($sql_email["e_mail"], $sql_email["name"]);
                    $mail->CharSet = 'UTF-8';
                    $mail->Subject = "MED Meteryal Platformu"; // Email konu başlığı
                    $mail->Body = "Hesap Aktifleştirme Kodunuz: ".$activation_code_temp; // Mailin içeriği


                    if (!$mail->Send()) {

                        $_SESSION["Message"] = "Aktivasyon kodu gönderilemedi tekrar deneyiniz.";
                        $_SESSION["Alert"] = "Aktivasyon";
                        $_SESSION["Color"] = "alert-danger";
                        $_SESSION["Login"] = "false";
                        header('Location:'. $location.'.php?operation=login'. $data);
                    } else {
                        $_SESSION["Message"] = "Aktivasyon kodu gönderildi.Mail adresinizi kontrol edin.";
                        $_SESSION["Alert"] = "Aktivasyon";
                        $_SESSION["Color"] = "alert-success";
                        $_SESSION["Login"] = "false";
                        header('Location:'. $location.'.php?operation=login'. $data);

                    }

                } else {
                    $_SESSION["Message"] = "Hata meydana geldi tekrar deneyiniz.";
                    $_SESSION["Alert"] = "Aktivasyon";
                    $_SESSION["Color"] = "alert-danger";
                    $_SESSION["Login"] = "false";
                    header('Location:'. $location.'.php?operation=login'. $data);
                }


            } else {

               $_SESSION["Message"] = "Hesap Daha Önce Aktifleştirilmiş.";
               $_SESSION["Alert"] = "Bilgi";
               $_SESSION["Color"] = "alert-info";
               $_SESSION["Login"] = "false";
               header('Location:'. $location.'.php?operation=login'. $data);
            }


    } else {

        $_SESSION["Message"] = "Email Adresine ait kullanıcı bulunmamaktadır.";
        $_SESSION["Alert"] = "Uyarı!";
        $_SESSION["Color"] = "alert-warning";
        $_SESSION["Login"] = "false";
        header('Location:'. $location.'.php?operation=login'. $data);

    }
}