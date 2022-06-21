<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <?php 
 if(isset($_POST["send"])) {
     
    //include required phpmailer files
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';
    //
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;
    //
    $mail = new PHPMailer();
    //
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = "nguyenthilethu2001vn@gmail.com";
    $mail->Password = "AT160447";
    $mail->Subject = "DEALBOOK shop";
    $mail->setFrom("nguyenthilethu2001vn@gmail.com");
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["content"];
    $mail->addAddress($_POST["email"], 'Thu user');
    if($mail->Send()) {
        echo "Email Sent";
    }
    else {
        echo "Error";
    }
 }
 ?>
 <div class="container" style="margin-bottom: 34px;">
    <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="#">
                Liên hệ
                </a></li>
            </ol>
        </div>
    </section>
    <div class="row" style="margin-top: 26px;">
    
        <div class="col-lg-12 col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6262.455114144813!2d105.78466749855998!3d21.045562674389622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abb158a2305d%3A0x5c357d21c785ea3d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyDEkGnhu4duIEzhu7Fj!5e0!3m2!1svi!2s!4v1655488214832!5m2!1svi!2s" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
 </div>