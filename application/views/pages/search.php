<!-- start banner Area -->
<section class="banner-area relative" id="home">
   <div class="overlay overlay-bg"></div>
   <div class="container">
      <div class="row search-page-top d-flex align-items-center justify-content-center">
         <div class="banner-content col-lg-12">
            <h1 class="text-white">
               Search Results          
            </h1>
            <p class="text-white link-nav">
               <a href="<?php echo base_url(); ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?php echo base_url(); ?>search"> Job details page</a>
            </p>
            <form action="#" class="serach-form-area">
               <div class="row justify-content-center form-wrap">
                  <div class="col-lg-4 form-cols">
                     <input type="text" class="form-control" name="search" placeholder="what are you looging for?">
                  </div>
                  <div class="col-lg-3 form-cols">
                     <div class="default-select" id="default-selects">
                        <select id="area_id">
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-3 form-cols">
                     <div class="default-select" id="default-selects2">
                        <select>
                           <option disabled selected>All Category</option>
                           <?php foreach($categories as $category) : ?>
                           <option value="<?php echo $category['category_name'] ; ?>"><?php echo $category['category_name'] ; ?></option>
                           <?php endforeach; ?>
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
            <p class="text-white">49 Results found for <span>"Web developer"</span></p>
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
                  <?php $i=0; ?>
                  <?php foreach($jobs as $job) : ?>
                  <div class="single-rated">
                     <img class="img-fluid m-2 p-2" src="<?php echo base_url(); ?>assets/Apanajob/job/<?php echo $job['company_logo']; ?>" alt="" style="max-width:100%;max-height: 100%;">
                     <a href="<?php echo base_url(); ?>jobs/view/<?php echo $job['job_id']; ?>">
                        <h4><?php echo $job['job_name']; ?></h4>
                     </a>
                     <h6><?php echo $job['company_name']; ?></h6>
                     <p>
                        <?php echo $job['job_desc']; ?>
                     </p>
                     <h5>Job Nature: <?php echo $job['job_type']; ?></h5>
                     <p class="address"><span class="lnr lnr-map"></span> <?php echo $job['company_address']; ?></p>
                     <p class="address"><span class="lnr lnr-database"></span> <?php echo $job['company_min_salary']; ?> - <?php echo $job['company_max_salary']; ?></p>
                     <a href="#" class="btns text-uppercase">Apply job</a>
                  </div>
                  <?php $i++; ?>
                  <?php if($i==3){break;} ?>
                  <?php endforeach; ?>
               </div>
            </div>
            <div class="single-slidebar">
               <h4>Jobs by Category</h4>
               <ul class="cat-list">
                  <?php $i=0; ?>
                  <?php foreach($categories as $category) : ?>
                  <li>
                     <a class="justify-content-between d-flex" href="#">
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
                  <?php if($i==3){break;} ?>
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

<script type="text/javascript">
      // Find Area using javascript 

   var areaObj, area, x = "";
   areaObj = {
      "data":[
               {"area_name":"Noida"},{"area_name":"Dehli"},{"area_name":"Gurugarm"},
               {"area_name":"Pune"},{"area_name":"Maharastra"},{"area_name":"Kanpur"},
            ],
         } 

      //Loop through the the first data array object

      x += "<option disabled selected> Select Area </option>"
      for (area in areaObj.data) {

          x += "<option value='#'>" + areaObj.data[area].area_name + "</option>";

      }

      //Display  values from location format on screen
      document.getElementById("area_id").innerHTML = x;


   // find location in javascript 

   var myObj, i, x = "";
   myObj = {
      "data":[
               {"location":"Noida","no_of_jobs":"37"},{"location":"Dehli","no_of_jobs":"77"},{"location":"Gurugram","no_of_jobs":"108"},{"location":"Pune","no_of_jobs":"307"},{"location":"Kanpur","no_of_jobs":"21"},{"location":"Lucknow","no_of_jobs":"87"},
            ],
         } 

      //Loop through the the first data array object
      for (i in myObj.data) {

          x += "<li>" + "<a class='justify-content-between d-flex'>" +
                  "<p>" + myObj.data[i].location + "</p>" +
                  "<span>" + myObj.data[i].no_of_jobs + "</span>" +
               "</a>" + "<li>" ;
      }

      //Display  values from location format on screen
      document.getElementById("location_id").innerHTML = x;

</script>