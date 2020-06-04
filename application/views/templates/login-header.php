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
      <link href="<?php echo base_url(); ?>assets/css/select2.min.css" rel="stylesheet" />

      <link href="<?php echo base_url(); ?>assets/css/bootstrap/select2-bootstrap4.css" rel="stylesheet">
      <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
   </head>
   <body>
      <header class="bg-dark pt-25">
         <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
               <div id="logo" class="mb-4" style="font-family:fantasy&cursive;font-size:24px;">
                  <a href="<?php echo base_url(); ?>">
                  	 <span class="text-white font-weight-bold"> Apana JOB. </span>
                  </a>
               </div>
               <nav id="nav-menu-container" class="mb-4">
                  <ul class="nav-menu">
                  	 <li><span class="pull-right text-primary"> ApanaJob.com, India’s No.1 Job SiteAlready Registered?
                  	 <a class="" href="<?php echo base_url(); ?>users/login"> Login </a>here </span></li>
                  </ul>
               </nav>
               <!-- #nav-menu-container -->
            </div>
         </div>
      </header>
      <!-- #header -->

      <section class="py-3">
         <div class="container">
            <!-- Flash messages -->
            <?php if($this->session->flashdata('user_registered')): ?>
              <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'<button type="button" class="close" data-dismiss="alert">x</button></p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('login_failed')): ?>
              <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'<button type="button" class="close" data-dismiss="alert">x</button></p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_loggedin')): ?>
              <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'<button type="button" class="close" data-dismiss="alert">x</button></p>'; ?>
            <?php endif; ?>

             <?php if($this->session->flashdata('user_loggedout')): ?>
              <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'<button type="button" class="close" data-dismiss="alert">x</button></p>'; ?>
            <?php endif; ?>

			<?php if($this->session->flashdata('user_resume')): ?>
              <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_resume').'<button type="button" class="close" data-dismiss="alert">x</button></p>'; ?>
            <?php endif; ?>

         </div>
      </section>
