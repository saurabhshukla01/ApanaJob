<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact Us				
							</h1>	
							<p class="text-white"><a href="<?php echo base_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url(); ?>contact"> Contact Us</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
						<div class="col-lg-4 d-flex flex-column">
							<?php if(!$this->session->userdata('logged_in')) : ?>
								<a class="contact-btns" href="<?php echo base_url();?>users/register">Submit Your CV</a>
								<a class="contact-btns" href="<?php echo base_url();?>users/register">Create New Account</a>
							<?php endif; ?>
						</div>
						<div class="col-lg-8">
							<!--<form class="form-area " id="myForm" action="<?php echo base_url();?>user_registration/contact" method="post" class="contact-form text-right">-->
							<?php echo form_open_multipart('contact'); ?>
								<div class="row">	
									<div class="col-lg-12 form-group">
										<div class="form-group d-flex">
						                  <label class="col-sm-4" for="name">Name: <span class="text-danger">*</span></label>
						                  <div class="col-sm-8">
						                     <input type="text" class="form-control" name="name" placeholder="Enter Name">
						                     <label><?php echo form_error('name', '<div class="error text-danger">', '</div>'); ?></label>
						                  </div>
						               </div>
						               <div class="form-group d-flex">
						                  <label class="col-sm-4" for="email">Email: <span class="text-danger">*</span></label>
						                  <div class="col-sm-8">
						                     <input type="text" class="form-control" name="email" placeholder="Enter Email">
						                     <label><?php echo form_error('email', '<div class="error text-danger">', '</div>'); ?></label>
						                  </div>
						               </div>
						               <div class="form-group d-flex">
						                  <label class="col-sm-4" for="subject">Subject: <span class="text-danger">*</span></label>
						                  <div class="col-sm-8">
						                     <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
						                     <label><?php echo form_error('subject', '<div class="error text-danger">', '</div>'); ?></label>
						                  </div>
						               </div>
						               <div class="form-group d-flex">
						                  <label class="col-sm-4" for="message">Message: <span class="text-danger">*</span></label>
						                  <div class="col-sm-8">
						                     <textarea type="text" class="form-control" name="message" placeholder="Enter Message"></textarea>
						                     <label><?php echo form_error('message', '<div class="error text-danger">', '</div>'); ?></label>
						                  </div>
						               </div>
						               <div class="form-group d-flex py-2">
						                  <div class="col-sm-offset-4 col-sm-12">
						                     <button type="submit" class="btn btn-info btn-lg btn-block btn-huge">Send Message</button>
						                  </div>
						               </div>
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->