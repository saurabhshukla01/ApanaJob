<!-- start banner Area -->
<section class="banner-area relative" id="home">
   <div class="overlay overlay-bg"></div>
   <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
         <div class="about-content col-lg-12">
            <h1 class="text-white">
               Job Details				
            </h1>
            <p class="text-white link-nav"><a href="<?php echo base_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url(); ?>/jobs/view/<?php echo $jobs['job_id']; ?>"> Job Details</a></p>
         </div>
      </div>
   </div>
</section>
<!-- End banner Area -->	
<!-- Start post Area -->
<section class="post-area section-gap">
   <div class="container">
      <div class="row justify-content-center d-flex">
         <div class="col-lg-8 post-list">
            <div class="single-post d-flex flex-row">
               <div class="thumb m-2">
                  <img src="<?php echo base_url(); ?>/assets/Apanajob/job/<?php echo $jobs['company_logo']; ?>" alt="" style="width:130px;height:80px;">
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
                        <a href="#">
                           <h4><?php echo $jobs['job_name']; ?></h4>
                        </a>
                        <h6><?php echo $jobs['company_name']; ?></h6>
                     </div>
                     <ul class="btns">
                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                        <li><a href="#">Apply</a></li>
                     </ul>
                  </div>
                  <p>
                     <?php echo $jobs['job_desc']; ?>
                  </p>
                  <h5>Job Nature: <?php echo $jobs['job_type']; ?></h5>
                  <p class="address"><span class="lnr lnr-map"></span> 
                     <?php echo $jobs['company_address']; ?>
                  </p>
                  <p class="address"><span class="lnr lnr-database"></span> <?php echo $jobs['company_min_salary']; ?> - <?php echo $jobs['company_max_salary'];?></p>
               </div>
            </div>
            <div class="single-post job-details">
               <h4 class="single-title">How to Write a Job Description</h4>
               <p>
                  Crafting a compelling job description is essential to helping you attract the most qualified candidates for your job. With more than 25 million jobs listed on Indeed, a great job description can help your jobs stand out from the rest. Your job descriptions are where you start marketing your company and your job to your future hire.
               </p>
               <p>
                  The key to writing effective job descriptions is to find the perfect balance between providing enough detail so candidates understand the role and your company while keeping your description concise. We’ve found that job descriptions between 700 and 2,000 characters get up to 30% more applications.
               </p>
               <p>
               	  Use the tips and sample job descriptions below to create a compelling job listing.
               </p>
               <h4 class="single-title">What Is a Job Description?</h4>
               <p>
                  A job description summarizes the essential responsibilities, activities, qualifications and skills for a role. Also know as a JD, this document describes the type of work performed.
               </p>
               <p>
                  A job description should include important company details — company mission, culture and any benefits it provides to employees. It may also specify to whom the position reports and salary range.
               </p>
               <p>
               	  An effective job description will provide enough detail for candidates to determine if they’re qualified for the position.
               </p>
               <h4 class="single-title">Job Title</h4>
               <p>
                  <strong>Make your job titles specific.</strong> Targeted job titles are more effective than generic ones, so be precise by including key phrases that accurately describe the role.
               </p>
               <p>
                  <strong>Avoid internal lingo that may confuse the job seeker.</strong> Stick to standard experience levels like "Senior" rather than "VI" or other terms people are less likely to look for.
               </p>
            </div>
            <div class="single-post job-experience">
               <h4 class="single-title">Experience Requirements</h4>
               <ul>
                  <li>
                     <img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                     <span>The Relationship Executive is responsible for executing the sales strategy on the ground in a specific region.</span>
                  </li>
                  <li>
                     <img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                     <span>In this role, the Relationship Executive will be training the client team for promoting d.light product in the region. The role will connect with the clients team at block level and will ensure the implementation of processes on ground like documenting the product availability, periodic update to KAM about the on-ground sales activity and resolving /escalating client grievances.</span>
                  </li>
                  <li class="font-weight-bold mb-4 text-primary">Key Responsibilities:-</li>
                  <li>
                     <img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                     <span>Training of clients team on the existing and new product range</span>
                  </li>
                  <li>
                     <img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                     <span>Visit branch offices to understand the customer need and to boost the morale of clients sales team.</span>
                  </li>
                  <li>
                     <img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                     <span>Ensure proper documentation for the product availability with client.</span>
                  </li>
                  <li>
                     <img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                     <span>Provide necessary updates ,reports and data to...</span>
                  </li>
                  <li>
                  	<img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                  	<span> Resolve or escalate client grievances to management :
                  		<br><br>
						Salary<br>
						1 Lac 50 Thousand To 2 Lac 75 Thousand P.A.<br>
						Industry<br>
						Banking / Investments / Stock Market / Financial Services<br>
						Work Experience<br>
						0 - 1 Years<br>
						Qualification<br>
						Higher Secondary, Other Bachelor Degree, B.A, B.C.A, B.B.A, B.Com, B.Ed, B.Sc, B.Tech/B.E ...etc 
					</span>
                  </li>
               </ul>
            </div>
            <div class="single-post job-experience">
               <h4 class="single-title">Responsibilities and Duties</h4>
               <ul>
                  <li>
                     <img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                     <span><strong>Outline the core responsibilities of the position.</strong> Make sure your list of responsibilities is detailed but concise. Also emphasize the duties that may be unique to your organization. For example, if you are hiring for an “Event Management” role and the position requires social media expertise to promote events, include this detail to ensure candidates understand the requirements and can determine if they’re qualified.</span>
                  </li>
                  <li>
                     <img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                     <span><strong>Highlight the day-to-day activities of the position.</strong> This will help candidates understand the work environment and the activities they will be exposed to on a daily basis. This level of detail will help the candidate determine if the role and company are a right fit, helping you attract the best candidates for your position.</span>
                  </li>
                  <li>
                     <img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                     <span><strong>Specify how the position fits into the organization.</strong> Indicate who the job reports to and how the person will function within your organization, helping candidates see the bigger picture and understand how the role impacts the business.</span>
                  </li>
               </ul>
            </div>
            <div class="single-post job-experience">
               <h4 class="single-title">Qualifications and Skills</h4>
               <ul>
                  <li>
                     <img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                     <span><strong>Include a list of hard and soft skills.</strong> Of course, the job description should specify education, previous job experience, certifications and technical skills required for the role. You may also include soft skills, like communication and problem solving, as well as personality traits that you envision for a successful hire.</span>
                  </li>
                  <li>
                     <img src="<?php echo base_url(); ?>/assets/img/pages/list.jpg" alt="">
                     <span><strong>Keep your list concise.</strong> While you may be tempted to list out every requirement you envision for your ideal hire, including too many qualifications and skills could dissuade potential candidates.</span>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-4 sidebar">
            <div class="single-slidebar">
               <h4>Jobs by Location</h4>
               <ul class="cat-list">
                  <li>
                     <a class="justify-content-between d-flex" href="category.html">
                        <p>New York</p>
                        <span>37</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="category.html">
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
                     <a class="justify-content-between d-flex" href="category.html">
                        <p>Florida</p>
                        <span>47</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="category.html">
                        <p>Rocky Beach</p>
                        <span>27</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="category.html">
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
                     <img class="img-fluid" src="<?php echo base_url(); ?>/assets/img/r1.jpg" alt="">
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
                     <img class="img-fluid" src="<?php echo base_url(); ?>/assets/img/r1.jpg" alt="">
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
                     <img class="img-fluid" src="<?php echo base_url(); ?>/assets/img/r1.jpg" alt="">
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
                  <li>
                     <a class="justify-content-between d-flex" href="">
                        <p>Technology</p>
                        <span>37</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="">
                        <p>Media & News</p>
                        <span>57</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="">
                        <p>Goverment</p>
                        <span>33</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="">
                        <p>Medical</p>
                        <span>36</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="">
                        <p>Restaurants</p>
                        <span>47</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="">
                        <p>Developer</p>
                        <span>27</span>
                     </a>
                  </li>
                  <li>
                     <a class="justify-content-between d-flex" href="">
                        <p>Accounting</p>
                        <span>17</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="single-slidebar">
               <h4>Carrer Advice Blog</h4>
               <div class="blog-list">
                  <div class="single-blog " style="background:#000 url(<?php echo base_url(); ?>/assets/img/blog1.jpg);">
                     <a href="single.html">
                        <h4>Home Audio Recording <br>
                           For Everyone
                        </h4>
                     </a>
                     <div class="meta justify-content-between d-flex">
                        <p>
                           02 Hours ago
                        </p>
                        <p>
                           <span class="lnr lnr-heart"></span>
                           06
                           <span class="lnr lnr-bubble"></span>
                           02
                        </p>
                     </div>
                  </div>
                  <div class="single-blog " style="background:#000 url(<?php echo base_url(); ?>/assets/img/blog2.jpg);">
                     <a href="single.html">
                        <h4>Home Audio Recording <br>
                           For Everyone
                        </h4>
                     </a>
                     <div class="meta justify-content-between d-flex">
                        <p>
                           02 Hours ago
                        </p>
                        <p>
                           <span class="lnr lnr-heart"></span>
                           06
                           <span class="lnr lnr-bubble"></span>
                           02
                        </p>
                     </div>
                  </div>
                  <div class="single-blog " style="background:#000 url(<?php echo base_url(); ?>assets/img/blog1.jpg);">
                     <a href="single.html">
                        <h4>Home Audio Recording <br>
                           For Everyone
                        </h4>
                     </a>
                     <div class="meta justify-content-between d-flex">
                        <p>
                           02 Hours ago
                        </p>
                        <p>
                           <span class="lnr lnr-heart"></span>
                           06
                           <span class="lnr lnr-bubble"></span>
                           02
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End post Area -->
<!-- Start callto-action Area -->
<section class="callto-action-area section-gap">
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
               <a class="primary-btn" href="#">We are an Employer</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End calto-action Area -->