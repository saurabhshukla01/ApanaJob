<section class="post-area py-3">
   <h2 class="text-center py-3"><?php echo $title; ?></h2>
   <div class="container">
      <div class="row justify-content-center d-flex">
         <div class="col-sm-8 post-list bg-light py-5">
				<?php echo form_open_multipart('users/login'); ?>
					<div class="form-group d-flex">
						<label class="col-sm-4" for="name">Username: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input type="text" class="form-control" name="name" placeholder="Enter Username" required autofocus>
						  <label><?php echo form_error('name', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="email">Email: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input type="email" class="form-control" name="email" placeholder="Enter email" required autofocus>
						  <label><?php echo form_error('email', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="pwd">Password: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input type="password" class="form-control" name="password" placeholder="Enter password" required autofocus>
						  <label><?php echo form_error('password', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<div class="col-sm-offset-4 col-sm-12">
							<button type="submit" class="btn btn-info btn-lg btn-block btn-huge">Login</button>
						</div>
					  </div>
				<?php echo form_close(); ?>
         </div>
      </div>
   </div>
</section>
