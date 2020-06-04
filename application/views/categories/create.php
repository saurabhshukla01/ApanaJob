<section class="section-gap banner-area relative">
   <div class="container">
      <div class="py-2">
         <?php if($this->session->flashdata('category_image')): ?>
         <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('category_image').'<button type="button" class="close" data-dismiss="alert">x</button></p>'; ?>
         <?php endif; ?>
      </div>

      <div class="row fullscreen d-flex align-items-center justify-content-center">
         <div class="col-lg-10 bg-light">
            <h2 class="text-center py-5"><?php echo $title; ?></h2>
            <div class="single-post">
               <?php echo form_open_multipart('category/create'); ?>
               <div class="form-group d-flex">
                  <label class="col-sm-4" for="category_name">Category Name: <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="category_name" placeholder="Enter Category Name">
                     <label><?php echo form_error('category_name', '<div class="error text-danger">', '</div>'); ?></label>
                  </div>
               </div>
               <div class="form-group d-flex">
                  <label class="col-sm-4" for="category_image">Category Image: <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                     <input type="file" name="category_image" class="form-control btn btn-success">
                  </div>
               </div>
               <div class="form-group d-flex py-2">
                  <div class="col-sm-offset-4 col-sm-12">
                     <button type="submit" class="btn btn-info btn-lg btn-block btn-huge">Create Category</button>
                  </div>
               </div>
               </form>
            </div>
         </div>
      </div>
  </div>
</section>







