<!-- start banner Area -->
<section class="banner-area relative" id="home">
   <div class="overlay overlay-bg"></div>
   <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
         <div class="about-content col-lg-12">
            <h1 class="text-white">
               Blog Posts
            </h1>
            <p class="text-white link-nav"><a href="<?php echo base_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url(); ?>blogs/index"> Blog Posts</a></p>
         </div>
      </div>
   </div>
</section>
<!-- End banner Area -->
<!-- Start blog-posts Area -->
<section class="blog-posts-area section-gap">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 post-list blog-post-list">
            <div class="single-post">
               <?php foreach($blogs as $blog) : ?>
               <img class="img-fluid" src="<?php echo base_url(); ?>assets/ApanaJob/blog/<?php echo $blog['blog_image'];?>" alt="">
               <ul class="tags">
                  <li><a href="#">Art, </a></li>
                  <li><a href="#">Technology, </a></li>
                  <li><a href="#">Fashion</a></li>
               </ul>
               <a href="<?php echo base_url(); ?>blogs/view/<?php echo $blog['blog_id']; ?>">
                  <h1>
                     <?php echo $blog['blog_name'];?>
                  </h1>
               </a>
               <p>
                  <?php echo $blog['blog_desc'];?>
               </p>
               <div class="bottom-meta">
                  <div class="user-details row align-items-center">
                     <div class="comment-wrap col-lg-6">
                        <ul>
                           <li><a href="#"><span class="lnr lnr-heart"></span>	0 likes</a></li>
                           <li><a href="#"><span class="lnr lnr-bubble"></span> 0 Comments</a></li>
                        </ul>
                     </div>
                     <div class="social-wrap col-lg-6">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                           <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
            </div>
         </div>
         <div class="col-lg-4 sidebar">
            <div class="single-widget search-widget">
               <form class="example" action="#" style="margin:auto;max-width:300px">
                  <input type="text" placeholder="Search Posts" name="search2">
                  <button type="submit"><i class="fa fa-search"></i></button>
               </form>
            </div>
            <div class="single-widget protfolio-widget">
               <img src="<?php echo base_url(); ?>assets/img/blog/user2.jpg" alt="">
               <a href="#">
                  <h4>Adele Gonzalez</h4>
               </a>
               <p>
                  MCSE boot camps have its supporters and
                  its detractors. Some people do not understand why you should have to spend money
                  on boot camp when you can get.
               </p>
               <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
               </ul>
            </div>
            <div class="single-widget category-widget">
               <h4 class="title">Post Categories</h4>
               <ul>
                  <?php $i=0; ?>
                  <?php foreach($categories as $category) : ?>
                  <li>
                     <a class="justify-content-between d-flex">
                        <p><?php echo $category['category_name']; ?></p>
                        <span>50</span>
                     </a>
                  </li>
                  <?php $i++; ?>
                  <?php if($i==6){break;} ?>
                  <?php endforeach; ?>
               </ul>
            </div>
            <div class="single-widget recent-posts-widget">
               <h4 class="title">Recent Posts</h4>
               <div class="blog-list ">
                  <?php foreach($blogs as $blog) : ?>
                  <div class="single-recent-post d-flex flex-row p-2">
                     <div class="recent-thumb">
                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/ApanaJob/blog/<?php echo $blog['blog_image']; ?>" alt="" style="width:100px;height:60px;">
                     </div>
                     <div class="recent-details">
                        <a href="<?php echo base_url(); ?>blogs/view/<?php echo $blog['blog_id']; ?>">
                           <h4>
                              <?php echo $blog['blog_name']; ?>
                           </h4>
                        </a>
                        <p>
                           <?php echo $blog['created_at']; ?>
                        </p>
                     </div>
                  </div>
                  <?php endforeach; ?>

               </div>
            </div>
            <div class="single-widget category-widget">
               <h4 class="title">Post Archive</h4>
               <ul>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Dec '17</h6>
                        <span>37</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Nov '17</h6>
                        <span>24</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Oct '17</h6>
                        <span>59</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Sep '17</h6>
                        <span>29</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Aug '17</h6>
                        <span>15</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Jul '17</h6>
                        <span>09</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Jun '17</h6>
                        <span>44</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="single-widget tags-widget">
               <h4 class="title">Tag Clouds</h4>
               <ul>
               <?php $i=0; ?>
               <?php foreach($categories as $category) : ?>
                  <li><a href="#"><?php echo $category['category_name']; ?></a></li>
               <?php $i++; ?>
               <?php if($i==6){break;} ?>
               <?php endforeach; ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End blog-posts Area -->

<!-- Pagination Link -->
<section class="m-auto pb-100">
   <div class="pagination-links list-pagination d-flex float-right">
      <?php echo $this->pagination->create_links(); ?>
   </div>
</section>
<!-- End Pagination Lnik --> 

