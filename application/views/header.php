<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Avilon Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?=base_url()?>img/favicon.png" rel="icon">
  <link href="<?=base_url()?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?=base_url()?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?=base_url()?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?=base_url()?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=base_url()?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Main Stylesheet File -->
  <link href="<?=base_url()?>css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

  <style type="text/css">
    .bank-form{
      height: 40px !important;\

    }
    .bank-search{
      background-color: rgba(239, 245, 245, 0.76) !important;
    }
    .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 24px;
    cursor: pointer;
}

  </style>
</head>

<body >

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="<?=base_url()?>home/#intro" class="scrollto">CatmeCatmai</a></h1>
    
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="<?=base_url()?>home/#intro">หน้าหลัก</a></li>
          <li><a href="<?=base_url()?>home/#team">แมว</a></li>
          <li><a href="<?=base_url()?>home/#more-features">เกร็ดความรู้</a></li>
          <li><a href="#contact">ติดต่อ</a></li>
             <?php  if(isset($this->session->data->member_displayname) != null){ ?>
          <li class="menu-has-children">
            <a><?=$this->session->data->member_displayname?>   </a>
           <ul >
              <li><a href="#"> 1</a></li>
              <li><a href="#"> 2</a></li>
              <li><a href="#"> 3</a></li>
              <li><a href="<?=base_url()?>home/profile">โปรไฟล์</a></li>
              <li><a href="<?=base_url()?>line/logout" class="btn btn-danger">Logout</a></li>
          </ul>
          </li>
        <?php
        }else{
           ?>
          <li><a href="<?=base_url()?>line/login" style="color:red" >ลงชื่อเข้าใช้</a></li>
      <?php }
       ?> 
          
          
        </ul> 
      </nav>
    </div>
  </header>
