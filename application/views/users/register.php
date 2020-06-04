<section class="post-area py-3">
   <h2 class="text-center py-3"><?php echo $title; ?></h2>
   <div class="container">
      <div class="row justify-content-center d-flex">
         <div class="col-sm-8 post-list bg-light py-5">
				<?php echo form_open_multipart('users/register'); ?>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="pwd">Name: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input type="text" class="form-control" name="name" placeholder="Enter Name">
						  <label><?php echo form_error('name', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="email">Email: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input type="email" class="form-control" name="email" placeholder="Enter email">
						  <label><?php echo form_error('email', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="pwd">Create Password: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input type="password" class="form-control" name="password" placeholder="Enter Password">
						  <label><?php echo form_error('password', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="mob">Mobile Number: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number">
						  <label><?php echo form_error('mobile', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="pwd">Current Location: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <select class="form-control" name="location">
						  		<option disabled selected>Choose Current Location</option>
								<option value="Delhi">Delhi</option>
								<option value="Hariyana">Hariyana</option>
								<option value="Kanpur">Kanpur</option>
								<option value="Unnao">Unnao</option>
								<option value="Lucknow">Lucknow</option>
								<option value="Gurgaov">Gurgaov</option>
								<option value="Ahamdabad">Ahamdabad</option>
								<option value="Pune">Pune</option>
								<option value="Mumbai">Mumbai</option>
								<option value="Greater Noida">Greater Noida</option>
								<option value="Noida">Noida</option>
							</select>
						</div>
					  </div>
					  <div class="form-group d-flex">
					  	<div class="col-sm-4"></div>
					  	<div class="col-sm-8"><?php echo form_error('location', '<div class="error text-danger">', '</div>'); ?></div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="resume">Upload Resume: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input type="file" name="resume" class="form-control btn btn-success">
						  <label><?php echo form_error('resume', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex py-2">
						<div class="col-sm-offset-4 col-sm-12">
						  <button type="submit" class="btn btn-info btn-lg btn-block btn-huge">Register Now</button>
						</div>
					  </div>
				</form>
         </div>
      </div>
   </div>
</section>
