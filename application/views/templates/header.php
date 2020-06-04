<!DOCTYPE html>
<html lang="zxx" class="no-js">
   <head>
      <!-- Mobile Specific Meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Site Title -->
      <title>ApanaJob</title>
      <!-- Favicon-->
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/jobfav1.png">
      <!-- Author Meta -->
      <meta name="author" content="codepixer">
      <!-- Meta Description -->
      <meta name="description" content="">
      <!-- Meta Keyword -->
      <meta name="keywords" content="">
      <!-- meta character set -->
      <meta charset="UTF-8">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
      <!--
         CSS
         ============================================= -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/linearicons.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
      <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
   </head>
   <body>
      <header id="header" id="home" class="bg-dark">
         <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
               <div id="logo" style="font-family:fantasy&cursive;font-size:24px;">
                  <a href="<?php echo base_url(); ?>">
                     <!--<img src="<?php //echo base_url(); ?>assets/img/logo.png" alt="" title="" />-->
                     <span class="text-white font-weight-bold"> Apana JOB. </span>
                  </a>
               </div>
               <nav id="nav-menu-container">
                  <ul class="nav-menu">
                     <li class="mt-2 menu-active"><a href="<?php echo base_url(); ?>">Home</a></li>
                     <li class="mt-2"><a href="<?php echo base_url(); ?>jobs">Jobs</a></li>
                     <li class="mt-2"><a href="<?php echo base_url(); ?>category">Categories</a></li>
                     <li class="mt-2"><a href="<?php echo base_url(); ?>blogs">Blogs</a></li>
                     <li class="mt-2"><a href="<?php echo base_url(); ?>price">Price</a></li>
                     <li class="mt-2"><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                     <li class="menu-has-children mt-2">
                        <a href="#">Pages</a>
                        <ul>
                           <li><a href="<?php echo base_url(); ?>search">search</a></li>
                           <li><a href="<?php echo base_url(); ?>single">single</a></li>
                        </ul>
                     </li>
                     <?php if($this->session->userdata('logged_in')) : ?>
                     <li class="menu-has-children mt-2">
                        <a href="#">Create</a>
                        <ul>
                           <li><a href="<?php echo base_url(); ?>jobs/create">Create Jobs</a></li>
                           <li><a href="<?php echo base_url(); ?>category/create">Create Category</a></li>
                           <li><a href="<?php echo base_url(); ?>blogs/create">Create Blogs</a></li>
                        </ul>
                     </li>
                     <?php endif; ?>
                     <li class="menu-has-children mt-2">
                        <a href="#"><img src="<?php echo base_url(); ?>assets\Apanajob\profile/user-profile.png" style="width:40px;height:40px;"></a>
                        <ul>
                           <?php if(!$this->session->userdata('logged_in')) : ?>
                           <li><a class="text-primary font-weight-bold" href="<?php echo base_url(); ?>users/register"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;&nbsp; Signup</a></li>
                           <li><a class="text-primary font-weight-bold" href="<?php echo base_url(); ?>users/login"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp; Login</a></li>
                           <?php endif; ?>
                           <?php if($this->session->userdata('logged_in')) : ?>
                           <li class="text-primary">
                              <a class="text-primary font-weight-bold"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo $_SESSION['name']; ?></a>
                           </li>
                           <li><a class="text-primary font-weight-bold" href="<?php echo base_url(); ?>users/logout"> <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp; Logout</a></li>
                           <?php endif; ?>
                        </ul>
                     </li>
                  </ul>
               </nav>
               <!-- #nav-menu-container -->
            </div>
         </div>
      </header>
      <!-- #header -->