<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
<!-- start banner Area -->
<section class="banner-area relative" id="home">
   <div class="overlay overlay-bg"></div>
   <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
         <div class="about-content col-lg-12">
            <h1 class="text-white">
               Blog Single              
            </h1>
            <p class="text-white link-nav"><a href="<?php echo base_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="<?php echo base_url(); ?>blogs/index"> Blog</a> <span class="lnr lnr-arrow-right"></span> <a href="<?php echo base_url(); ?>blogs/view/<?php echo $blogs['blog_id']; ?>"> Blog Single</a></p>
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
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/ApanaJob/blog/<?php echo $blogs['blog_image']; ?>" alt="">
            <ul class="tags">
               <li><a href="#">Art</a></li>
               <li><a href="#">Technology</a></li>
               <li><a href="#">Fashion</a></li>
            </ul>
            <a href="#">
               <h1>
                  <?php echo $blogs['blog_name'];?>
               </h1>
            </a>
            <div class="content-wrap">
               <p>
                  <?php echo $blogs['blog_desc'];?>
               </p>
               <!--<blockquote class="generic-blockquote">
                  “Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government.banking” 
                  </blockquote>-->
            </div>
            <div class="bottom-meta">
               <div class="user-details row align-items-center">
                  <div class="comment-wrap col-lg-6 col-sm-6">
                     <ul>
                        <li><a href="#"><span class="lnr lnr-heart"></span>  4 likes</a></li>
                        <li><a href="#"><span class="lnr lnr-bubble"></span> <?php echo $count; ?> Comments</a></li>
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
            <!-- Start nav Area -->
            <section class="nav-area pt-50 pb-100">
               <div class="container">
                  <div class="row justify-content-between">
                     <div class="col-sm-6 nav-left justify-content-start d-flex">
                        <div class="thumb">
                           <img src="<?php echo base_url(); ?>assets/img/blog/prev.jpg" alt="">
                        </div>
                        <div class="post-details">
                           <p>Prev Post</p>
                           <h4 class="text-uppercase"><a href="#">A Discount Toner</a></h4>
                        </div>
                     </div>
                     <div class="col-sm-6 nav-right justify-content-end d-flex">
                        <div class="post-details">
                           <p>Prev Post</p>
                           <h4 class="text-uppercase"><a href="#">A Discount Toner</a></h4>
                        </div>
                        <div class="thumb">
                           <img src="<?php echo base_url(); ?>assets/img/blog/next.jpg" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- End nav Area -->
            <!-- Start comment-sec Area -->
            <section class="comment-sec-area pt-80 pb-80">
               <div class="container">
                  <div class="row flex-column">
                     <h5 class="text-uppercase pb-80"><?php echo $count; ?> Comments</h5>
                     <br>
                     <?php if($comments) : ?>
                     <?php foreach($comments as $comment) : ?>
                     <div class="comment-list mb-4">
                        <div class="single-comment">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <img src="<?php echo base_url(); ?>assets/Apanajob/profile/user-profile.png" alt="" style="width:50px;height:50px;">
                              </div>
                              <div class="desc">
                                 <h5 class="font-weight-bold"><a href="#"><?php echo $comment['name']; ?></a></h5>
                                 <p class="date text-primary"><?php echo $comment['created_at']; ?></p>
                                 <p class="subject font-weight-bold">
                                    <?php echo $comment['comment_subject']; ?>
                                 </p>
                                 <p class="comment">
                                    <?php echo $comment['comment_body']; ?>
                                 </p>
                              </div>
                              <div class="reply-btn">
                                 <input type="button" onclick="showForm()" id="formButton" class="btn-reply text-uppercase" value="reply">
                              </div>
                           </div>
                           <!--<section class="comment-sec-area pt-80 pb-80">
                              <div class="row flex-column">
                                 <form id="form1" style="display: none;">
                                    <div class="form-group d-flex">
                                       <label class="col-sm-4" for="name">Name: <span class="text-danger">*</span></label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control" name="name" placeholder="Enter Name">
                                          <label><?php echo form_error('name', '<div class="error text-danger">', '</div>'); ?></label>
                                       </div>
                                    </div>
                                    <div class="form-group d-flex">
                                       <label class="col-sm-4" for="email">Email: <span class="text-danger">*</span></label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control" name="email" placeholder="Enter Email">
                                          <label><?php echo form_error('email', '<div class="error text-danger">', '</div>'); ?></label>
                                       </div>
                                    </div>
                                    <div class="form-group d-flex">
                                       <label class="col-sm-4" for="comment_body"> Message <span class="text-danger">*</span></label>
                                       <div class="col-sm-8">
                                          <textarea class="form-control" name="comment_body" placeholder="Type Here Message Comment ..."></textarea>
                                          <label><?php echo form_error('reply_body', '<div class="error text-danger">', '</div>'); ?></label>
                                       </div>
                                    </div>
                                    <div class="mt-4">
                                       <input type="submit" class="primary-btn btn-md mt-20" value="Comment">
                                    </div>
                                 </form>
                              </div>
                           </section>-->
                        </div>
                     </div>
                     <?php endforeach; ?>
                     <?php else : ?>
                     <div class="desc">
                        <p class="font-weight-bold">No Comments To Display</p>
                     </div>
                     <?php endif; ?>
                  </div>
               </div>
            </section>
            <!-- End comment-sec Area -->
            <!-- Start commentform Area -->
            <section class="commentform-area pt-80">
               <div class="container">
                  <h5 class="pb-50">Leave a Reply</h5>
                  <div class="row flex-row d-flex">
                     <div class="col-lg-8 col-md-12">
                        <?php echo form_open_multipart('comments/create/'.$blogs['blog_id']); ?>
                        <div class="form-group d-flex">
                           <label class="col-sm-4" for="name">Name: <span class="text-danger">*</span></label>
                           <div class="col-sm-8">
                              <input type="text" class="form-control" name="name" placeholder="Enter Name">
                              <label><?php echo form_error('name', '<div class="error text-danger">', '</div>'); ?></label>
                           </div>
                        </div>
                        <div class="form-group d-flex">
                           <label class="col-sm-4" for="email">Email: <span class="text-danger">*</span></label>
                           <div class="col-sm-8">
                              <input type="text" class="form-control" name="email" placeholder="Enter Email">
                              <label><?php echo form_error('email', '<div class="error text-danger">', '</div>'); ?></label>
                           </div>
                        </div>
                        <div class="form-group d-flex">
                           <label class="col-sm-4" for="comment_subject">Subject: 
                           <span class="text-danger">*</span></label>
                           <div class="col-sm-8">
                              <input type="text" class="form-control" name="comment_subject" placeholder="Enter Subject">
                              <label><?php echo form_error('comment_subject', '<div class="error text-danger">', '</div>'); ?></label>
                           </div>
                        </div>
                        <div class="form-group d-flex">
                           <label class="col-sm-4" for="comment_body"> Message <span class="text-danger">*</span></label>
                           <div class="col-sm-8">
                              <textarea class="form-control" name="comment_body" placeholder="Type Here Message Comment ..."></textarea>
                              <label><?php echo form_error('comment_body', '<div class="error text-danger">', '</div>'); ?></label>
                           </div>
                        </div>
                        <div class="mt-4">
                           <input type="submit" class="primary-btn btn-md mt-20" value="Comment">
                        </div>
                        </form>
                     </div>
                  </div>
            </section>
            <!-- End commentform Area -->
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
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Techlology</h6>
                        <span>37</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Lifestyle</h6>
                        <span>24</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Fashion</h6>
                        <span>59</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Art</h6>
                        <span>29</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Food</h6>
                        <span>15</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Architecture</h6>
                        <span>09</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="justify-content-between align-items-center d-flex">
                        <h6>Adventure</h6>
                        <span>44</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="single-widget recent-posts-widget">
               <h4 class="title">Recent Posts</h4>
               <div class="blog-list ">
                  <div class="single-recent-post d-flex flex-row">
                     <div class="recent-thumb">
                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/blog/r1.jpg" alt="">
                     </div>
                     <div class="recent-details">
                        <a href="blog-single.html">
                           <h4>
                              Home Audio Recording
                              For Everyone
                           </h4>
                        </a>
                        <p>
                           02 hours ago
                        </p>
                     </div>
                  </div>
                  <div class="single-recent-post d-flex flex-row">
                     <div class="recent-thumb">
                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/blog/r2.jpg" alt="">
                     </div>
                     <div class="recent-details">
                        <a href="blog-single.html">
                           <h4>
                              Home Audio Recording
                              For Everyone
                           </h4>
                        </a>
                        <p>
                           02 hours ago
                        </p>
                     </div>
                  </div>
                  <div class="single-recent-post d-flex flex-row">
                     <div class="recent-thumb">
                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/blog/r3.jpg" alt="">
                     </div>
                     <div class="recent-details">
                        <a href="blog-single.html">
                           <h4>
                              Home Audio Recording
                              For Everyone
                           </h4>
                        </a>
                        <p>
                           02 hours ago
                        </p>
                     </div>
                  </div>
                  <div class="single-recent-post d-flex flex-row">
                     <div class="recent-thumb">
                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/blog/r4.jpg" alt="">
                     </div>
                     <div class="recent-details">
                        <a href="blog-single.html">
                           <h4>
                              Home Audio Recording
                              For Everyone
                           </h4>
                        </a>
                        <p>
                           02 hours ago
                        </p>
                     </div>
                  </div>
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
                  <li><a href="#">Lifestyle</a></li>
                  <li><a href="#">Art</a></li>
                  <li><a href="#">Adventure</a></li>
                  <li><a href="#">Food</a></li>
                  <li><a href="#">Techlology</a></li>
                  <li><a href="#">Fashion</a></li>
                  <li><a href="#">Architecture</a></li>
                  <li><a href="#">Food</a></li>
                  <li><a href="#">Technology</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End blog-posts Area -->


<!--<script type="text/javascript">
   function showForm() {
      document.getElementById('formButton').style.display = 'block';
   }
   
   $(document).ready(function(){
   $("#formButton").click(function(){
      $("#form1").toggle('');
   });
   });
</script>-->