<script src="http://callupon.org/assets/lib/jquery/jquery.min.js"></script>
<!-- start banner Area -->
<section class="banner-area relative" id="home">
   <div class="overlay overlay-bg"></div>
   <div class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
         <div class="banner-content col-lg-12">
            <div class="py-2">
               <?php if($this->session->flashdata('user_loggedin')): ?>
               <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'<button type="button" class="close" data-dismiss="alert">x</button></p>'; ?>
               <?php endif; ?>
            </div>
            <h1 class="text-white">
               <span>1500+</span> Jobs posted last week
            </h1>
            <form action="search.html" class="serach-form-area">
               <div class="row justify-content-center form-wrap">
                  <div class="col-lg-4 form-cols">
                     <input type="text" class="form-control" name="search" placeholder="what are you looging for?">
                  </div>
                  <div class="col-lg-3 form-cols">
                     <div class="default-select" id="default-selects">
                        <select>
                           <option value="1">Select area</option>
                           <option value="2">Dhaka</option>
                           <option value="3">Rajshahi</option>
                           <option value="4">Barishal</option>
                           <option value="5">Noakhali</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-3 form-cols">
                     <div class="default-select" id="default-selects2">
                        <select>
                           <option value="1">All Category</option>
                           <option value="2">Medical</option>
                           <option value="3">Technology</option>
                           <option value="4">Goverment</option>
                           <option value="5">Development</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-2 form-cols">
                     <button type="button" class="btn btn-info">
                     <span class="lnr lnr-magnifier"></span> Search
                     </button>
                  </div>
               </div>
            </form>
            <p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>
         </div>
      </div>
   </div>
</section>
<!-- End banner Area -->
<!-- Start features Area -->
<section class="features-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6 p-2">
            <div class="single-feature">
               <h4>Searching</h4>
               <p>
                  On apanajob website you can Searching all types of entry level jobs along with jobs for freshers and experienced people in multiple fields.
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 p-2">
            <div class="single-feature">
               <h4>Applying</h4>
               <p>
                  On apanajob website you can find all types of entry level jobs along with jobs for freshers and experienced people in multiple fields.
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 p-2">
            <div class="single-feature">
               <h4>Security</h4>
               <p>
                  On apanajob website you can apply with all types of Security entry level jobs along with jobs for freshers and experienced people in multiple fields.
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 p-2">
            <div class="single-feature">
               <h4>Notifications</h4>
               <p>
                  On apanajob website you can  Notifications all types of entry level jobs along with jobs for freshers and experienced people in multiple fields.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End features Area -->
<!-- Start popular-post Area -->
<section class="popular-post-area pt-100">
   <div class="container">
      <div class="row align-items-center">
         <div class="active-popular-post-carusel">
            <div class="single-popular-post d-flex flex-row">
               <div class="thumb">
                  <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/p1.png" alt="">
                  <a class="btns text-uppercase" href="#">view job post</a>
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Creative Designer</h4>
                  </a>
                  <h6>Los Angeles</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                  </p>
               </div>
            </div>
            <div class="single-popular-post d-flex flex-row">
               <div class="thumb">
                  <img src="<?php echo base_url(); ?>assets/img/p2.png" alt="">
                  <a class="btns text-uppercase" href="#">view job post</a>
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Creative Designer</h4>
                  </a>
                  <h6>Los Angeles</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                  </p>
               </div>
            </div>
            <div class="single-popular-post d-flex flex-row">
               <div class="thumb">
                  <img src="<?php echo base_url(); ?>assets/img/p1.png" alt="">
                  <a class="btns text-uppercase" href="#">view job post</a>
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Creative Designer</h4>
                  </a>
                  <h6>Los Angeles</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                  </p>
               </div>
            </div>
            <div class="single-popular-post d-flex flex-row">
               <div class="thumb">
                  <img src="<?php echo base_url(); ?>assets/img/p2.png" alt="">
                  <a class="btns text-uppercase" href="#">view job post</a>
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Creative Designer</h4>
                  </a>
                  <h6>Los Angeles</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                  </p>
               </div>
            </div>
            <div class="single-popular-post d-flex flex-row">
               <div class="thumb">
                  <img src="<?php echo base_url(); ?>assets/img/p1.png" alt="">
                  <a class="btns text-uppercase" href="#">view job post</a>
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Creative Designer</h4>
                  </a>
                  <h6>Los Angeles</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                  </p>
               </div>
            </div>
            <div class="single-popular-post d-flex flex-row">
               <div class="thumb">
                  <img src="<?php echo base_url(); ?>assets/img/p2.png" alt="">
                  <a class="btns text-uppercase" href="#">view job post</a>
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Creative Designer</h4>
                  </a>
                  <h6>Los Angeles</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End popular-post Area -->
<!-- Start feature-cat Area -->
<section class="feature-cat-area pt-100" id="category">
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
         <?php $i=0; ?>
         <?php foreach($categories as $category) : ?>
         <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="single-fcat">
               <a href="category.html">
               <img src="<?php echo base_url(); ?>assets/Apanajob/category/<?php echo $category['category_image']; ?>" alt="">
               </a>
               <p><?php echo $category['category_name']; ?></p>
            </div>
         </div>
         <?php $i++; ?>
         <?php if($i==6){break;} ?>
         <?php endforeach; ?>
      </div>
   </div>
</section>
<!-- End feature-cat Area -->
<!-- Start post Area -->
<section class="post-area section-gap">
   <div class="container">
      <div class="row justify-content-center d-flex">
         <div class="col-lg-8 post-list">
            <ul class="cat-list">
               <li><a href="#">Recent</a></li>
               <li><a href="#">Full Time</a></li>
               <li><a href="#">Intern</a></li>
               <li><a href="#">part Time</a></li>
            </ul>
            <?php $i=0; ?>
            <?php foreach($jobs as $job) : ?>
            <div class="single-post d-flex flex-row load-content" >
               <div class="thumb m-2">
                  <img src="<?php echo base_url(); ?>assets/ApanaJob/job/<?php echo $job['company_logo'];?>" alt="" style="width:130px;height:80px;">
                  <ul class="tags">
                     <li>
                        <a href="#">Art</a>
                     </li>
                     <li>
                        <a href="#">Media</a>
                     </li>
                     <li>
                        <a href="#">Design</a>
                     </li>
                  </ul>
               </div>
               <div class="details m-2">
                  <div class="title d-flex flex-row justify-content-between">
                     <div class="titles">
                        <a href="<?php echo base_url(); ?>jobs/view/<?php echo $job['job_id']; ?>">
                           <h4><?php echo $job['job_name'];?></h4>
                        </a>
                        <h6><?php echo $job['company_name'];?></h6>
                     </div>
                     <ul class="btns">
                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                        <li><a href="#">Apply</a></li>
                     </ul>
                  </div>
                  <p>
                     <?php echo $job['job_desc'];?>
                  </p>
                  <h5>Job Nature: <?php echo $job['job_type'];?></h5>
                  <p class="address"><span class="lnr lnr-map"></span> <?php echo $job['company_address'];?></p>
                  <p class="address"><span class="lnr lnr-database"></span> 
                     <?php echo $job['company_min_salary'];?> - 
                     <?php echo $job['company_max_salary'];?>
                  </p>
               </div>
            </div>
            <?php $i++; ?>
            <?php if($i==6){break;} ?>
            <?php endforeach; ?>
            <a class="text-uppercase loadMore loadmore-btn mx-auto d-block" href="#" style="display:block;">Load More job Posts</a>
         </div>
         <div class="col-lg-4 sidebar">
            <div class="single-slidebar">
               <h4>Jobs by Location</h4>
               <ul class="cat-list">
                  <li>
                     <a class="justify-content-between d-flex" href="#">
                        <p>New York</p>
                        <span>37</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="#">
                        <p>Park Montana</p>
                        <span>57</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="category.html">
                        <p>Atlanta</p>
                        <span>33</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="category.html">
                        <p>Arizona</p>
                        <span>36</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="#">
                        <p>Florida</p>
                        <span>47</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="#">
                        <p>Rocky Beach</p>
                        <span>27</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="#">
                        <p>Chicago</p>
                        <span>17</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="single-slidebar">
               <h4>Top rated job posts</h4>
               <div class="active-relatedjob-carusel">
                  <div class="single-rated">
                     <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/r1.jpg" alt="">
                     <a href="single.html">
                        <h4>Creative Art Designer</h4>
                     </a>
                     <h6>Premium Labels Limited</h6>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                     </p>
                     <h5>Job Nature: Full time</h5>
                     <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                     <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                     <a href="#" class="btns text-uppercase">Apply job</a>
                  </div>
                  <div class="single-rated">
                     <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/r1.jpg" alt="">
                     <a href="single.html">
                        <h4>Creative Art Designer</h4>
                     </a>
                     <h6>Premium Labels Limited</h6>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                     </p>
                     <h5>Job Nature: Full time</h5>
                     <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                     <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                     <a href="#" class="btns text-uppercase">Apply job</a>
                  </div>
                  <div class="single-rated">
                     <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/r1.jpg" alt="">
                     <a href="single.html">
                        <h4>Creative Art Designer</h4>
                     </a>
                     <h6>Premium Labels Limited</h6>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                     </p>
                     <h5>Job Nature: Full time</h5>
                     <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                     <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                     <a href="#" class="btns text-uppercase">Apply job</a>
                  </div>
               </div>
            </div>
            <div class="single-slidebar">
               <h4>Jobs by Category</h4>
               <ul class="cat-list">
                  <?php $i=0; ?>
                  <?php foreach($categories as $category) : ?>
                  <li>
                     <a class="justify-content-between d-flex" href="category.html">
                        <p><?php echo $category['category_name']; ?></p>
                        <span>50</span>
                     </a>
                  </li>
                  <?php $i++; ?>
                  <?php if($i==6){break;} ?>
                  <?php endforeach; ?>
               </ul>
            </div>
            <div class="single-slidebar">
               <h4>Carrer Advice Blog</h4>
               <div class="blog-list">
                  <?php $i=0; ?>
                  <?php foreach($blogs as $blog) : ?>
                  <div class="single-blog" style="background:#000 url(<?php echo base_url(); ?>assets/Apanajob/blog/<?php echo $blog['blog_image']; ?>">
                     <a href="<?php echo base_url(); ?>blogs/view/<?php echo $blog['blog_id']; ?>">
                        <h4><?php echo $blog['blog_name']; ?>
                        </h4>
                     </a>
                     <div class="meta justify-content-between d-flex">
                        <p>
                           <?php echo $blog['created_at']; ?>
                        </p>
                        <p>
                           <span class="lnr lnr-heart"></span>
                           06
                           <span class="lnr lnr-bubble"></span>
                           02
                        </p>
                     </div>
                  </div>
                  <?php $i++; ?>
                  <?php if($i==4){break;} ?>
                  <?php endforeach; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End post Area -->
<!-- Start callto-action Area -->
<section class="callto-action-area section-gap" id="join">
   <div class="container">
      <div class="row d-flex justify-content-center">
         <div class="menu-content col-lg-9">
            <div class="title text-center">
               <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
               <p class="text-white text-center">
                  This time there was no hesitation, no rush.<br>
               And his fancy pictured the battle, its loss, the concentration of fighting at one point,<br> 
               and the hesitation of all the commanders.
               </p>
               <a class="primary-btn" href="#">I am a Candidate</a>
               <a class="primary-btn" href="#">Request Free Demo</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End calto-action Area -->
<!-- Start download Area -->
<section class="download-area section-gap" id="app">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 download-left">
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/d1.png" alt="">
         </div>
         <div class="col-lg-6 download-right">
            <h1>Download the <br>
               Job Listing App Today!
            </h1>
            <p class="subs">
               It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.
            </p>
            <div class="d-flex flex-row">
               <div class="buttons">
                  <i class="fa fa-apple" aria-hidden="true"></i>
                  <div class="desc">
                     <a href="#">
                        <p>
                           <span>Available</span> <br>
                           on App Store
                        </p>
                     </a>
                  </div>
               </div>
               <div class="buttons">
                  <i class="fa fa-android" aria-hidden="true"></i>
                  <div class="desc">
                     <a href="#">
                        <p>
                           <span>Available</span> <br>
                           on Play Store
                        </p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End download Area -->
<script type="text/javascript">
    $(document).ready(function() {
       $(".load-content").slice(0, 6).show();
       $(".loadMore").on("click", function(e) {
           e.preventDefault();
           $(".load-content:hidden").slice(0, 2).slideDown();
           if ($(".load-content:hidden").length == 0) {
               $(".loadMore").text("No More Jobs").addClass("no-more-Jobs");
           }
       });
    })
 </script>