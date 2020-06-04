<!-- start banner Area -->
<section class="banner-area relative" id="home">
   <div class="overlay overlay-bg"></div>
   <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
         <div class="about-content col-lg-12">
            <h1 class="text-white">
               Categories 
            </h1>
            <p class="text-white link-nav"><a href="<?php echo base_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url(); ?>category/index">Categories</a></p>
         </div>
      </div>
   </div>
</section>

<section class="feature-cat-area section-gap" id="category">
   <div class="container">
      <div class="row d-flex justify-content-center">
         <div class="menu-content pb-60 col-lg-10">
            <div class="title text-center">
               <h1 class="mb-10">Featured Job Categories</h1>
               <p>Who are in extremely love with eco friendly system.</p>
            </div>
         </div>
      </div>
      <div class="row">
      	<?php foreach($Categories as $Category) : ?>
         <div class="col-lg-4 col-md-8 col-sm-12 mb-2">
            <div class="single-fcat">
               <a href="#">
               <img src="<?php echo base_url(); ?>assets/ApanaJob/category/<?php echo $Category['category_image'];?>" alt="">
               </a>
               <p><?php echo $Category['category_name'];?></p>
            </div>
         </div>
         <?php endforeach; ?>
      </div>
   </div>
</section>

<!-- Pagination Link -->
<section class="m-auto pb-100">
   <div class="pagination-links list-pagination d-flex float-right">
      <?php echo $this->pagination->create_links(); ?>
   </div>
</section>
<!-- End Pagination Lnik --> 

   
      
   