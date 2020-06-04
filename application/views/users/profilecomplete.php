<section class="post-area py-3">
   <h2 class="text-center py-3"><?php echo $title; ?></h2>
   <div class="container">
      <div class="row justify-content-center d-flex">
         <div class="col-sm-8 post-list bg-light py-5">
         	<?php echo form_open_multipart('users/profilecomplete/'.$user_uid); ?>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="user_desc">Describe Your Professional background in one line: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <textarea class="form-control" id="editor1" name="user_desc" placeholder="Enter Describe of user">ApanaJob.com  with MCA in Computers currently in Noida with prudigital media exp on 4 year...</textarea>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="work_location">Select Work Location <span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<select multiple data-placeholder="Choose Three Location" data-allow-clear="1" name="work_locations[]"  class="form-control">
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
							<label><?php echo form_error('work_location', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="job_type">Desired Job Type: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<select class="form-control" name="job_type">
							  	<option disabled selected>Select Desired Job Type ---- </option>
								<option value="Permanent">Permanent</option>
								<option value="Temporary/Contract">Temporary/Contract</option>
								<option value="Both">Both</option>
						  	</select>
						  	<label><?php echo form_error('job_type', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="emp_type">Desired Employment Type: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<select class="form-control" name="emp_type">
							  	<option disabled selected>Select Desired Employment Type ---- </option>
								<option value="Full Time">Full Time</option>
								<option value="Part Time">Part Time</option>
								<option value="Correspondence">Correspondence</option>
						  	</select>
						  	<label><?php echo form_error('emp_type', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex">
						<label class="col-sm-4" for="skills">IT Skills: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
						  <div class="d-flex pt-2 font-weight-bold">
							<label class="col-sm-3" for="skills">Skills</label>
							<label class="col-sm-3" for="version">Version</label>
							<label class="col-sm-3" for="last_year">Last Used</label>
							<label class="col-sm-3" for="exp_year">Exp Year</label>
						  </div>
						  <div class="d-flex">
							<input type="text" class="form-group col-sm-3 mr-2" name="skills">
							<input type="text" class="form-group col-sm-3" name="version">
							<div class="form-group col-sm-3">
								<select class="form-control" name="last_year">
									<option disabled selected>Last Year</option>
									<option value="1999">1999</option>
									<option value="2000">2000</option>
									<option value="2001">2001</option>
									<option value="2002">2002</option>
									<option value="2003">2003</option>
									<option value="2004">2004</option>
									<option value="2005">2005</option>
									<option value="2006">2006</option>
								</select>
							</div>
							<div class="form-group col-sm-3">
								<select class="form-control" name="exp_year">
									<option disabled selected>Exp Year</option>
									<option value="1999">1999</option>
									<option value="2000">2000</option>
									<option value="2001">2001</option>
									<option value="2002">2002</option>
									<option value="2003">2003</option>
									<option value="2004">2004</option>
									<option value="2005">2005</option>
									<option value="2006">2006</option>
								</select>
							</div>
						  </div>
						  <label><?php echo form_error('skill,version,last_year,exp_year', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="from-group d-flex pb-4 mt-2">
					  	<label class="col-sm-4 m-auto" for="Add more Skills">
					  		<small><a href="#">+ &nbsp;&nbsp; Add more Skills</a></small>
					  	</label>
					  </div>

					  <div class="form-group d-flex">
						<label class="col-sm-4" for="gender">Gender: <span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<select class="form-control" name="gender">
								<option disabled selected>Select Gender ---- </option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Transgender">Transgender</option>
						  	</select>
						  	<label><?php echo form_error('gender', '<div class="error text-danger">', '</div>'); ?></label>
						</div>
					  </div>
					  <div class="form-group d-flex py-2">
						<div class="col-sm-offset-4 col-sm-12">
						  <button type="submit" class="btn btn-info btn-lg btn-block btn-huge">Submit</button>
						</div>
					  </div>
				</form>
         </div>
      </div>
   </div>
</section>

