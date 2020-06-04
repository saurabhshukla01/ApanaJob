<section class="post-area py-3">
   <h2 class="text-center py-3"><?php echo $title; ?></h2>
   <div class="container">
      <div class="row justify-content-center d-flex">
         <div class="col-sm-8 post-list bg-light py-5">
				<?php echo form_open_multipart('users/education/'.$user_uid); ?>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="high_qualifiaction">Highest Qualification: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <select class="form-control" name="high_qualifiaction">
						  	<option disabled selected>Select your Highest Qualification ---- </option>
							<option value="Dictarte/PhD">Dictarte/PhD</option>
							<option value="Master/Post-graducation">Master/Post-graducation</option>
							<option value="Graducation/Diploma">Graducation/Diploma</option>
							<option value="12th">12th</option>
							<option value="10th">10th</option>
							<option value="Below 10th">Below 10th</option>
						  </select>
						  <label><?php echo form_error('high_qualifiaction', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="course_name">Course: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <select class="form-control" name="course_name">
						  	<option disabled selected>Select your Course ---- </option>
							<option value="CA">CA</option>
							<option value="CS">CS</option>
							<option value="DM">DM</option>
							<option value="M.A">M.A</option>
							<option value="MCA">MCA</option>
							<option value="Diploma">Diploma</option>
						  </select>
						  <label><?php echo form_error('course_name', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="specialization">Specialization: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <select class="form-control" name="specialization">
						  	<option disabled selected>Select Specialization ---- </option>
							<option value="Computers">Computers</option>
							<option value="Others">Others</option>
						  </select>
						  <label><?php echo form_error('specialization', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="uc_name">University/Collage: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <input type="text" class="form-control" name="uc_name" placeholder="Enter University/collage">
						  <label><?php echo form_error('uc_name', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="course_type">Course Type: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <select class="form-control" name="course_type">
						  	<option disabled selected>Select course_type ---- </option>
							<option value="Full Time">Full Time</option>
							<option value="Part Time">Part Time</option>
							<option value="Correspondence">Correspondence</option>
						  </select>
						  <label><?php echo form_error('course_type', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="from-group d-flex pb-4 mt-2">
					  	<label class="col-sm-4 m-auto" for="Add more education">
					  		<small><a href="#">+ &nbsp;&nbsp; Add more eduaction</a></small>
					  	</label>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="passing_year">Passing Year: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <select class="form-control" name="passing_year">
						  	<option disabled selected>Select Year ---- </option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
						  </select>
						  <label><?php echo form_error('passing_year', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="skills">Skills: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<select multiple data-placeholder="Choose Skills multiple" data-allow-clear="1" name="skills[]" class="form-control">
								<option value="Python">Python</option>
								<option value="PHP">PHP</option>
								<option value="Java">Java</option>
								<option value="Go">Go</option>
								<option value="React">React</option>
								<option value="Javascript">Javascript</option>
								<option value="Aws">Aws</option>
								<option value="JQuery">JQuery</option>
								<option value="Node Js">Node Js</option>
								<option value="Perl">Perl</option>
							</select>
							<label><?php echo form_error('skills', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex py-2">
						<div class="col-sm-offset-4 col-sm-12">
						  <button type="submit" class="btn btn-info btn-lg btn-block btn-huge">Continue</button>
						</div>
					  </div>
				</form>
         </div>
      </div>
   </div>
</section>
