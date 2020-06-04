<section class="blog-posts-area section-gap banner-area relative">
   <div class="container">
      <div class="py-2">
         <?php if($this->session->flashdata('blog_image')): ?>
         <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('blog_image').'<button type="button" class="close" data-dismiss="alert">x</button></p>'; ?>
         <?php endif; ?>
      </div>
      <div class="row">
         <div class="col-lg-10 bg-light m-auto">
            <h2 class="text-center py-5"><?php echo $title; ?></h2>
            <div class="single-post">
               <?php echo form_open_multipart('blogs/create'); ?>
               <div class="form-group d-flex">
                  <label class="col-sm-4" for="blog_name">Blog Name: <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="blog_name" placeholder="Enter Name">
                     <label><?php echo form_error('blog_name', '<div class="error text-danger">', '</div>'); ?></label>
                  </div>
               </div>
               <div class="form-group d-flex">
                  <label class="col-sm-4" for="blog_desc"> Blog Description <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                     <textarea class="form-control" id="editor1" name="blog_desc" placeholder="Type Here Blog Content ..."></textarea>
                     <label><?php echo form_error('blog_desc', '<div class="error text-danger">', '</div>'); ?></label>
                  </div>
               </div>
               <div class="form-group d-flex">
                  <label class="col-sm-4" for="blog_image">Blog Image: <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                     <input type="file" name="blog_image" class="form-control btn btn-success">
                  </div>
               </div>
               <div class="form-group d-flex py-2">
                  <div class="col-sm-offset-4 col-sm-12">
                     <button type="submit" class="btn btn-info btn-lg btn-block btn-huge">Blog Post</button>
                  </div>
               </div>
               </form>
            </div>
         </div>
      </div>
  </div>
</section>
