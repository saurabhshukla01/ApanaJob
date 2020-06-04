<section class="blog-posts-area section-gap banner-area relative" style="height:auto;">
   <div class="container">
      <div class="py-2">
         <?php if($this->session->flashdata('company_logo')): ?>
         <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('company_logo').'<button type="button" class="close" data-dismiss="alert">x</button></p>'; ?>
         <?php endif; ?>
      </div>
      <div class="row">
         <div class="col-lg-10 bg-light m-auto">
            <h2 class="text-center py-5"><?php echo $title; ?></h2>
            <div class="single-post">
               <?php echo form_open_multipart('jobs/create'); ?>
                  <div class="form-group d-flex">
                     <label class="col-sm-4" for="job_name">Job Name: <span class="text-danger">*</span></label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="job_name" placeholder="Enter Job Name">
                        <label><?php echo form_error('job_name', '<div class="error text-danger">', '</div>'); ?></label>
                     </div>
                  </div>
                  <div class="form-group d-flex">
                     <label class="col-sm-4" for="company_name">Company Name: <span class="text-danger">*</span></label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="company_name" placeholder="Enter Company Name">
                        <label><?php echo form_error('company_name', '<div class="error text-danger">', '</div>'); ?></label>
                     </div>
                  </div>
                  <div class="form-group d-flex">
                     <label class="col-sm-4" for="job_desc"> Job Description <span class="text-danger">*</span></label>
                     <div class="col-sm-8">
                        <textarea class="form-control" id="editor1" name="job_desc" placeholder="Type Here Job Description ..."></textarea>
                        <label><?php echo form_error('job_desc', '<div class="error text-danger">', '</div>'); ?></label>
                     </div>
                  </div>
                  <div class="form-group d-flex">
                     <label class="col-sm-4" for="job_type">Job Type: <span class="text-danger">*</span></label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="job_type" placeholder="Enter Job Type">
                        <label><?php echo form_error('job_type', '<div class="error text-danger">', '</div>'); ?></label>
                     </div>
                  </div>
                  <div class="form-group d-flex">
                     <label class="col-sm-4" for="job_category">Job Category: <span class="text-danger">*</span></label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="job_category" placeholder="Enter Job Category">
                        <label><?php echo form_error('job_category', '<div class="error text-danger">', '</div>'); ?></label>
                     </div>
                  </div>
                  <div class="form-group d-flex">
                     <label class="col-sm-4" for="company_address">Company Address: <span class="text-danger">*</span></label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="company_address" placeholder="Enter Company Address">
                        <label><?php echo form_error('company_address', '<div class="error text-danger">', '</div>'); ?></label>
                     </div>
                  </div>
                  <div class="form-group d-flex">
                     <label class="col-sm-4" for="company_min_salary">Company Min Salary: <span class="text-danger">*</span></label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="company_min_salary" placeholder="Enter Company Min Salary">
                        <label><?php echo form_error('company_min_salary', '<div class="error text-danger">', '</div>'); ?></label>
                     </div>
                  </div>
                  <div class="form-group d-flex">
                     <label class="col-sm-4" for="company_max_salary">Company Max Salary: <span class="text-danger">*</span></label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="company_max_salary" placeholder="Enter Company Max Salary">
                        <label><?php echo form_error('company_max_salary', '<div class="error text-danger">', '</div>'); ?></label>
                     </div>
                  </div>
                  <div class="form-group d-flex">
                     <label class="col-sm-4" for="company_logo">Company Logo: <span class="text-danger">*</span></label>
                     <div class="col-sm-8">
                        <input type="file" name="company_logo" class="form-control btn btn-success">
                     </div>
                  </div>
                  <div class="form-group d-flex py-2">
                     <div class="col-sm-offset-4 col-sm-12">
                        <button type="submit" class="btn btn-info btn-lg btn-block btn-huge">Job Post</button>
                     </div>
                  </div>
            </form>
            </div>
         </div>
      </div>
  </div>
</section><!-- start footer Area -->


