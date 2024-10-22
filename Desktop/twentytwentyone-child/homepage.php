<?php


get_header();



$loop = new WP_Query( array( 'post_type' => 'News', 'posts_per_page' => 3 ) );

/**
* Template Name: Homepage
*/

?>

<!-- banner section start -->

<?php $banner_section = get_field('banner_section');?>


<div class="messageMultiForm">
  <div class="errormessage">
    <div class="errorImage">
      <img src="https://cdn0.iconfinder.com/data/icons/shift-free/32/Error-512.png" />
    </div>
    <div class="errorData">Name is Required !</div>
  </div>
  <div class="successMessage">
    <div class="sucessData">
      <span>Email sent Successfully.</span>
      <img src="https://img.clipart-library.com/2/clip-smiley-face-with-a-thumbs-up/clip-smiley-face-with-a-thumbs-up-15.png" />
    </div>
  </div>
</div>

<div class="banner-main-section">
    <div class="container">
        <div class="inner-banner">
            <div class="left-sec">
               <h3><?= $banner_section['subheading'];?></h3>
               <h1><?= $banner_section['heading'];?></h1>

               <ul class="ul-tag">
                 <li><?= $banner_section['list1'];?></li>
                 <li><?= $banner_section['list2'];?></li>
                 <li><?= $banner_section['list3'];?></li>
               </ul>

               <ul class="ul-tag1">
                <li><?= $banner_section['slist1'];?></li>
                <li><?= $banner_section['slist2'];?></li>
              </ul>

            <div class="bottom_st">
               <a class="a-tag" href="<?php echo $banner_section['button1']['url']; ?>"><?php echo $banner_section['button1']['title']; ?></a>
               <a class="b-tag" href="<?php echo $banner_section['button2']['url']; ?>"><?php echo $banner_section['button2']['title']; ?></a>
            </div>

            </div>


            <div class="left-sec right-sec">
                <div class="in-right">
                    <div class="st-img">          
                        <video id="myVideo" autoplay loop muted playsinline defaultmuted preload="auto">
                           <source src="<?php echo $banner_section['video1']['url']; ?>" type="video/mp4">
                        </video>
                     </div>
                     <div class="st-img">          
                        <video id="myVideo" autoplay loop muted playsinline defaultmuted preload="auto">
                           <source src="<?php echo $banner_section['video2']['url']; ?>" type="video/mp4">
                        </video>
                     </div>
                     <div class="st-img">          
                        <video id="myVideo" autoplay loop muted playsinline defaultmuted preload="auto">
                           <source src="<?php echo $banner_section['video3']['url']; ?>" type="video/mp4">
                        </video>
                     </div>
                </div>

                <div class="orange-div">
                   <h3>$5000</h3>
                   <span>Discount</span>
                   <p>Until Aug 21</p>
                </div>
             </div>

        </div>
</div>
</div>

<!-- banner section end -->



<!-- step-form section start -->


<div class="tab-container" id="step_form_direct">
    <div class="container">
        <div class="inner-tb">
            <h2>Get A Free Estimate</h2>
            <p>Easily predict your estimated price by inputting your location and construction details</p>

            <ul class="tab-nav">
                <li class="tab-link active" data-tab="step1"></li>
                <li class="tab-link" data-tab="step2"></li>
                <li class="tab-link" data-tab="step3"></li>
                <li class="tab-link" data-tab="step4"></li>
            </ul>
            <form id="multiStepForm" method="post" action="">
                <!-- Step 1 -->
                <div id="step1" class="tab-content active">
                    <h3>I am Looking for:</h3>
                    <div class="step-radio">
                        <input type="radio" id="option1" name="option" value="Partial Kitchen Renovation" />
                        <label for="option1" class="radio-container">
                            <div class="optionMine">
                                <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Group.png" alt="Option 1" />
                                <p>Partial Kitchen Renovation</p>
                            </div>
                        </label>
                        <input type="radio" id="option2" name="option" value="Full Kitchen Renovation" />
                        <label for="option2" class="radio-container">
                            <div class="optionMine">
                                <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/KITCHEN-CABINET.png" alt="Option 2" />
                                <p>Full Kitchen Renovation</p>
                            </div>
                        </label>
                    </div>
                    <a href="javascript:void(0)" class="next-btn">Next</a>
                </div>

                <!-- Step 2 -->
                <div id="step2" class="tab-content">
                    <h3>I am renovating my</h3>
                    <div class="step-radio">
                        <input type="radio" id="option3" name="option1" value="House">
                        <label for="option3" class="radio-container">
                            <div class="optionMine">
                                <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Group.png" alt="Option 3">
                                <p>House</p>
                            </div>
                        </label>
                        <input type="radio" id="option4" name="option1" value="Condo">
                        <label for="option4" class="radio-container">
                            <div class="optionMine">
                                <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/KITCHEN-CABINET.png" alt="Option 4">
                                <p>Condo</p>
                            </div>
                        </label>
                    </div>
                    <a href="javascript:void(0)" class="next-btn">Next</a>
                </div>

                <!-- Step 3 -->
                <div id="step3" class="tab-content">
                    <h3>Renovating Site Address</h3>
                    <div class="input-main-custom">
                        <input type="text" id="address" name="street_address" placeholder="Street Address" required>
                        <div class="bottom-aree">
                            <input type="text" id="city" name="city" placeholder="City" required>
                            <input type="text" id="postal" name="postal_code" placeholder="Postal Code" required>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="next-btn">Next</a>
                </div>

                <!-- Step 4 -->
                <div id="step4" class="tab-content">
                    <h3>Contact Details</h3>
                    <div class="input-main-custom">
                        <input type="text" id="name" name="name" placeholder="Name" required>
                        <div class="bottom-aree">
                            <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
                            <input type="text" id="email" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
                    <input type="hidden" name="submit_form" value="1" />
                    <input type="submit" class="next-btn" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</div>



<!-- step-form section end -->




<!-- logo section start -->

    <div class="wrapper-main-cst">
        <div class="track">


        <?php
                $args = array(
                                'post_type'      => 'slider',
                                'posts_per_page' => -1
                             );

$query = new WP_Query($args);

if ($query->have_posts()) {
   
    while ($query->have_posts()) {
        $query->the_post();
       
?>

            <div class="logo">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>

<?php 
    }
} else {
    echo 'No faq found';
}

wp_reset_postdata();
?>

        </div>
    </div>



<!-- logo section end -->



<?php $renovation_section = get_field('renovation_section');?>

<!-- faq section start -->

<section class="shamshoom-faq">
  <div class="container">
    <div class="shamshoom-faq-heading">
      <h3><?= $renovation_section['heading'];?></h3>
      <p><?= $renovation_section['subheading'];?></p>
    </div>
    <div class="shamshoom-faq-main">
      <div class="shamshoon-faq-left">
        <div class="faq_main_container">


        <?php
                $args = array(
                                'post_type'      => 'renovation',
                                'posts_per_page' => -1
                             );

$query = new WP_Query($args);

if ($query->have_posts()) {
   
    while ($query->have_posts()) {
        $query->the_post();
       
?>


            <div class="faq_container">
            <div class="faq_question">
              <div class="faq_question-text">
                <h3><?php the_title(); ?></h3>
              </div>
              <div class="icon">
                <div class="icon-shape"></div>
              </div>
            </div>
            <div class="answercont">
              <div class="answer">
                 <?php the_content(); ?>
              </div>
            </div>
          </div>

<?php 
    }
} else {
    echo 'No faq found';
}

wp_reset_postdata();
?>


        </div>
      </div>
      <div class="shamshoon-faq-right">
         <img src="<?php echo  $renovation_section['image']; ?>">
      </div>
    </div>
    </div>
  </div>
</section>

<!-- faq section end -->



<?php $range_section = get_field('range_section');?>

<!-- Range-slider start -->

<div class="range-main-section">
  <div class="container">
      <h2><?= $range_section['heading'];?></h2>
      <p><?= $range_section['subheading'];?></p>


      <div class="range-slider-sec">

   

  <div class="rev_slider">

  <?php
                $args = array(
                                'post_type'      => 'range',
                                'posts_per_page' => 3
                             );

$query = new WP_Query($args);

if ($query->have_posts()) {
   
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();

        $price_section = get_field('price_section', $post_id);
?>

<div class="rev_slide">
      <div class="test">
         <div class="left-jk">
            <h3><?php the_title(); ?></h3>
             <p><?= $price_section['subheading']; ?> </p>
        </div>

        <div class="right-jk">
          <h4><?= $price_section['price']; ?></h4>
        </div>
      </div>

      <div class="bottom-range">
          <div class="left-range">
                <?php the_content(); ?>
          </div>

          <div class="img-gk" id="img-gk">

            <div class="first-it">
              <img src="<?php echo  $price_section['range_image1']; ?>">
            </div>

            <div class="first-it">
              <img src="<?php echo  $price_section['range_image2']; ?>">
            </div>

            <div class="first-it">
              <img src="<?php echo  $price_section['range_image3']; ?>">
            </div>

          </div>

      </div>
    </div>


<?php 
    }
} else {
    echo 'No faq found';
}

wp_reset_postdata();
?>

  </div>
  <p class="top-st">Select the option you would like to explore</p>  

<div class="st-bottom-area">
    <p><?= $range_section['bottom_subheading'];?></p>   
    <a class="blue-btn" href="<?php echo $range_section['bottom_button']['url']; ?>"><?php echo $range_section['bottom_button']['title']; ?></a>
</div>

      </div>

  </div>
</div>


<!-- Range-slider end -->




<?php $disclaimer_section = get_field('disclaimer_section');?> 



 


<?php $process_section = get_field('process_section');?>

<!-- process section start -->

<div class="process-main-section">
  <div class="container">
    <div class="process-inner">
      <h2><?= $process_section['heading'];?></h2>

      <div class="process-grid">

       <div class="first first-dst">
           <span><?= $process_section['number1'];?></span>
           <h3><?= $process_section['number_heading1'];?><img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Chevron-Rigth.png" alt="empty"></h3>
            <p><?= $process_section['number_subheading1'];?></p>
       </div>

       <div class="first second">
           <span><?= $process_section['number2'];?></span>
           <h3><?= $process_section['number_heading2'];?><img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Chevron-Rigth.png" alt="empty"></h3>
            <p><?= $process_section['number_subheading2'];?></p>
       </div>

       <div class="first third">
           <span><?= $process_section['number3'];?></span>
           <h3><?= $process_section['number_heading3'];?><img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Chevron-Rigth.png" alt="empty"></h3>
            <p><?= $process_section['number_subheading3'];?></p>
       </div>


       <div class="first fourth">
           <span><?= $process_section['number4'];?></span>
           <h3><?= $process_section['number_heading4'];?><img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Chevron-Rigth.png" alt="empty"></h3>
            <p><?= $process_section['number_subheading4'];?></p>
       </div>

       <div class="first fifth">
           <span><?= $process_section['number5'];?></span>
           <h3><?= $process_section['number_heading5'];?><img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Chevron-Rigth.png" alt="empty"></h3>
            <p><?= $process_section['number_subheading5'];?></p>
       </div>

       <div class="first sixth">
           <span><?= $process_section['number6'];?></span>
           <h3><?= $process_section['number_heading6'];?><img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Chevron-Rigth.png" alt="empty"></h3>
            <p><?= $process_section['number_subheading6'];?></p>
       </div>
      </div>





    </div>
   </div>
</div>


<!-- process section end -->


<?php $works_section = get_field('works_section');?>

<!-- renovation section start -->

<div class="renovation-main-section">
  <div class="container">
    <div class="renovation-inner">
       <div class="left">
          <h2><?= $works_section['heading'];?></h2>
          <p><?= $works_section['subheading'];?></p>
       </div>

       <div class="left right">
                <div class="left-arrow-slider">
                    <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/unnamed-file.png" alt="">
                </div>
                <div class="right-arrow-slider">
                    <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/expand_more.png" alt="">
                </div>
       </div>
    </div>


    <div class="product-bottom_slider">
        <div class="product_slider">


        <?php
                $args = array(
                                'post_type'      => 'category item',
                                'posts_per_page' => -1
                             );

$query = new WP_Query($args);

if ($query->have_posts()) {
   
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();
?>

<div class="first_product">
            <div class="img-st">
               <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>

            <div class="bottom">
               <h4><?php the_title(); ?></h4>
               <h3><?php the_content(); ?></h3>
            </div>
           </div>


<?php 
    }
} else {
    echo 'No catefory found';
}

wp_reset_postdata();
?>

        </div>
    </div>
    
<div class="st-bottom-area">
    <p><?= $works_section['bottom_subheading'];?></p>
    <a class="blue-btn" href="<?php echo $works_section['bottom_button']['url']; ?>"><?php echo $works_section['bottom_button']['title']; ?></a>
</div>

  </div>
</div>


<!-- renovation section end -->



<?php $review_section = get_field('review_section');?>

<!-- review section slider start -->

<div class="review-main-section">
 <div class="container">

 <div class="renovation-inner">
       <div class="left">
          <h2><?= $review_section['heading'];?></h2>
       </div>

       <div class="left right">
                <div class="left-arrow-slider1">
                    <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/unnamed-file.png" alt="">
                </div>
                <div class="right-arrow-slider1">
                    <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/expand_more.png" alt="">
                </div>
       </div>
    </div>



  <div class="slider-nav inner-review">
    

  <?php
                $args = array(
                                'post_type'      => 'review',
                                'posts_per_page' => -1
                             );

$query = new WP_Query($args);

if ($query->have_posts()) {
   
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();

        $review_section = get_field('review_section', $post_id);
?>


    <div class="slide-btn">
    <div class="review-slide-nt">
    <span class="span-area-review">
         <div class="left">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
         </div>
         <div class="right">
            
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>

            <div class="star-sec">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
              </div>
               <div class="bottom-area">
                   <div class="kl-op">
                        <img src="<?php echo $review_section['image']; ?>">
                   </div>
                   <div class="bottom-review">
                      <h4><?= $review_section['heading1'];?></h4>
                      <span><?= $review_section['subheading'];?></span>
                  </div>
               </div>
        </div>
      </span>
</div>
  </div>


<?php 
    }
} else {
    echo 'No catefory found';
}

wp_reset_postdata();
?>

 </div>



 <div class="mobile-section">
  <div class="brt-sec">
<div class="slide-btn brown-div">
    <div class="review-slide-nt">
    <span class="span-area-review">
         <div class="left">
              <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Fabian-4HDR.png" alt="">
         </div>
         <div class="right">

         <div class="star-sec">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
              </div>
            
            <h3>Great Design!</h3>
            <P>I am very helped in making a website and business development that makes the product that I have to have a quality for use by the user</P>

               <div class="bottom-area">
                   <div class="kl-op">
                       <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/people-2023-11-27-05-22-44-utc-1.png" alt="">
                   </div>
                   <div class="bottom-review">
                      <h4>Mang Oleh</h4>
                      <span>Product Designer</span>
                  </div>
               </div>
        </div>
      </span>
</div>
  </div>


  <div class="bottom_grid">
  <div class="slide-btn">
    <div class="review-slide-nt">
    <span class="span-area-review">
         <div class="left">
              <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Fabian-4HDR.png" alt="">
         </div>
         <div class="right">
            
         <h3>Great Design!</h3>
            <P>I am very helped in making a website and business development that makes the product that I have to have a quality for use by the user</P>

            <div class="star-sec">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
              </div>
               <div class="bottom-area">
                   <div class="kl-op">
                   <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/happy-handsome-positive-modern-indian-or-arabian-g-2023-11-27-04-55-33-utc-1.png" alt="">
                   </div>
                   <div class="bottom-review">
                     <h4>Mang Oleh</h4>
                      <span>Product Designer</span>
                  </div>
               </div>
        </div>
      </span>
</div>
  </div>

  <div class="slide-btn">
    <div class="review-slide-nt">
    <span class="span-area-review">
         <div class="left">
              <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Fabian-4HDR.png" alt="">
         </div>
         <div class="right">
            
           <h3>Great Design!</h3>
            <P>I am very helped in making a website and business development that makes the product that I have to have a quality for use by the user</P>

            <div class="star-sec">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
               <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/favorite.png">
              </div>
               <div class="bottom-area">
                   <div class="kl-op">
                       <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/lovely-woman-sitting-on-sofa-2023-11-27-05-05-35-utc-1.png" alt="">
                   </div>
                   <div class="bottom-review">
                      <h4>Mang Oleh</h4>
                      <span>Product Designer</span>
                  </div>
               </div>
        </div>
      </span>
</div>
  </div>
</div>
</div>


</div>



</div>
</div>


<!-- review section slider end -->


<?php $tab_section = get_field('tab_section');?>

<!-- tab-slider section start -->


<div class="custom-faq-section-wraper">
  <div class="custom-faq-section container">
    <div class="custom-faq-head">
    
        <h2><?= $tab_section['heading'];?></h2>
  
    </div>
    <div class="custom-faq-wraper">
      <ul class="custom-faq-buttons">
        <li class="custom-faq-button active" data-tab="1"><?= $tab_section['slider1'];?></li>
        <li class="custom-faq-button" data-tab="2"><?= $tab_section['slider2'];?></li>
      </ul>

      <p class="p-tag"><?= $tab_section['subheading'];?></p>

      <div class="custom-faq-tab-wraper">
        <div class="custom-faq-tab-box show" id="tab-1">     
         <div class="custom-faq-tab">
           <div class="custom-faq-tab-content grid">

                   <div class="inn-cust kp-img">
                    <div class="first-kl">
                        <div class="image-custom">
                           <img src="<?php echo $tab_section['image1']; ?>">
                        </div>

                        <div class="before-after-section">
                           <span><?= $tab_section['before'];?></span>
                           <span><?= $tab_section['after'];?></span>
                        </div>
                    </div>

                    <div class="first-kl first-kl1">
                       <div class="image-custom">
                          <img src="<?php echo $tab_section['image2']; ?>">
                       </div>
                       <div class="before-after-section">
                           <span><?= $tab_section['before'];?></span>
                           <span><?= $tab_section['after'];?></span>
                        </div>
                    </div>

                    <div class="first-kl first-kl1">
                       <div class="image-custom">
                          <img src="<?php echo $tab_section['image3']; ?>">
                       </div>
                       <div class="before-after-section">
                           <span><?= $tab_section['before'];?></span>
                           <span><?= $tab_section['after'];?></span>
                        </div>
                    </div>
                   </div>

           </div>
         </div>
   </div>
        
        <div class="custom-faq-tab-box" id="tab-2">
              <div class="custom-faq-tab">
                <div class="custom-faq-tab-content grid">
                        <div class="inn-cust">

                        <div class="first-kl">


                        <iframe width="90%" height="500px" allowFullScreen="true" allow="accelerometer; magnetometer; gyroscope" style="display:block; margin:20px auto; border:0 none; max-width:880px;border-radius:8px; box-shadow: 0 1px 1px rgba(0,0,0,0.11),0 2px 2px rgba(0,0,0,0.11),0 4px 4px rgba(0,0,0,0.11),0 6px 8px rgba(0,0,0,0.11),0 8px 16px rgba(0,0,0,0.11);" src="https://panoraven.com/en/embed/HctM4L7DtF"></iframe>

                          <span> <?= $tab_section['reality_text'];?></span>

                          <!-- <div class="image-custom">
                             <img src="<?php echo $tab_section['image3']; ?>">
                          </div>
                          <span><?= $tab_section['reality_text'];?></span> -->
                        </div>
</div>
                </div>
              </div>
        </div>

      </div>
    </div>
  </div>
</div>



<!-- tab-slider section end -->


<?php $map_section = get_field('map_section');?>

<!-- map section start -->


<section class="locations-sec">
  <div class="container">
    <div class="locations-heading">
      <div class="shamshoom-faq-heading">
        <h3><?= $map_section['heading'];?></h3>
        <p><?= $map_section['subheading'];?></p>
      </div>


      <div class="location-main">

        <div class="first-location">
          <div class="loaction-top-heading">
            <h3><?= $map_section['address_name1'];?></h3>
          </div>
          <div class="location-image">
              <img src="<?php echo $map_section['address_image1']; ?>">
          </div>
          <div class="address-location">
            <h3><?= $map_section['address1'];?></h3>
            <p><?= $map_section['address_description1'];?></p>
          </div>
          <div class="location-hours">
            <h2><?= $map_section['location1'];?></h2>
            <?= $map_section['location_description1'];?>
          </div>
        </div>


        <div class="first-location">
          <div class="loaction-top-heading">
            <h3><?= $map_section['address_name2'];?></h3>
          </div>
          <div class="location-image">
              <img src="<?php echo $map_section['address_image2']; ?>">
          </div>
          <div class="address-location">
            <h3><?= $map_section['address2'];?></h3>
            <p><?= $map_section['address_description2'];?></p>
          </div>
          <div class="location-hours">
            <h2><?= $map_section['location2'];?></h2>
            <?= $map_section['location_description2'];?>
          </div>
        </div>

        <div class="first-location">
          <div class="loaction-top-heading">
            <h3><?= $map_section['address_name3'];?></h3>
          </div>
          <div class="location-image">
              <img src="<?php echo $map_section['address_image3']; ?>">
          </div>
          <div class="address-location">
            <h3><?= $map_section['address3'];?></h3>
            <p><?= $map_section['address_description3'];?></p>
          </div>
          <div class="location-hours">
            <h2><?= $map_section['location3'];?></h2>
            <?= $map_section['location_description3'];?>
          </div>
        </div>

        <div class="first-location">
    <div class="location-top-heading last-heading">
        <h3>Richmond Hill</h3>
    </div>
    <div class="location-visit">
        <h3><?= esc_html($map_section['appointment_head']); ?></h3>
        <p><?= esc_html($map_section['appointment_subhead']); ?></p>
    </div>
    <div class="address-location-btn">
        <a href="<?= esc_url($map_section['button1']['url']); ?>">
            <?= esc_html($map_section['button1']['title']); ?>
        </a>
    </div>
    <div class="address-location-btn-call">
        <a href="<?= esc_url($map_section['button2']['url']); ?>">
            <?= esc_html($map_section['button2']['title']); ?>
        </a>
    </div>
</div>


      </div>


    </div>
  </div>
</section>

<!-- map section end -->


<?php $faq_section = get_field('faq_section');?>

<!-- faq section start -->

<section class="footer-faq">
  <div class="container">
    <div class="footer-faq-heading">
       <h4><?= $faq_section['heading'];?></h4>
       <p><?= $faq_section['subheading'];?></p>
    </div>


    <?php
               $args = array(
                'post_type'      => 'faq',
                'posts_per_page' => -1,
                'orderby'        => 'title', // or 'date', 'meta_value', etc., depending on your needs
                'order'          => 'ASC'   // or 'DESC' for descending order
            );
            

$query = new WP_Query($args);

if ($query->have_posts()) {
   
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();

        $review_section = get_field('review_section', $post_id);
?>

  <div class="accordion">
      <div class="accordion-item">
        <button id="accordion-button-1" aria-expanded="false">
          <span class="accordion-title"> <?php the_title(); ?></span>
          <span class="icon" aria-hidden="true">
            <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/expand_more-1.png" alt="empty">
          </span>
        </button>
        <div class="accordion-content">
            <?php the_content(); ?>
        </div>
      </div>
    </div>

<?php 
    }
} else {
    echo 'No faq found';
}

wp_reset_postdata();
?>



  </div>
</section>


<!-- faq section end -->



<!-- Review section sticky start -->




<?php
$args = array(
    'post_type'      => 'testimonial',
    'posts_per_page' => -1
);

$query = new WP_Query($args);
$counter = 0;

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $counter++;
        ?>

        <div class="review-alt review-jk" data-id="<?php echo $counter; ?>">
            <div class="inner-rv">
                <?php the_content(); ?>

                <div class="bottom-ret">
                    <div class="left-im">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>

                    <div class="right-im">
                        <h4><?php the_title(); ?></h4>
                        <span>
                            <?php 
                            // Get the excerpt; use get_the_excerpt() for non-echo output
                            echo get_the_excerpt(); 
                            ?>
                        </span>
                        <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/Frame-17.png" alt="Decorative image">
                    </div>
                </div>
            </div>
        </div>

        <?php 
    }
} else {
    echo 'No testimonial found';
}

wp_reset_postdata();
?>




<!-- Review section sticky end -->


<!-- disclaimer section start -->

<div class="disclaimer-main-section">
    <div class="container">
      <div class="inner-area">
       <div class="left">
          <p><?= $disclaimer_section['disclaimer_para1'];?></p> 
          <br>
          <p><?= $disclaimer_section['disclaimer_para2'];?></p>   
       </div>

      </div>
    </div>
</div>


<!-- disclaimer section end -->







<script>
  jQuery(document).ready(function($) {
    $('body').on('click', 'input.next-btn', function(e) {
      e.preventDefault();
      var option1 = $('input[name="option"]:checked').val();
      var option2 = $('input[name="option1"]:checked').val();
      var streetAddress = $('input[name="street_address"]').val();
      var city = $('input[name="city"]').val();
      var postalCode = $('input[name="postal_code"]').val();
      var name = $('input[name="name"]').val();
      var phone = $('input[name="phone"]').val();
      var email = $('input[name="email"]').val();
      var url = 'https://shamshoom.exoticaitsolutions.com/wp-content/themes/twentytwentyone-child/multistep.php?name='+name+'&phone='+phone+'&city='+city+'&postalCode='+postalCode+'&email='+email+'&address='+streetAddress+'&option1='+option1+'&option2='+option2;
      console.log(url);
      $.ajax({
        type: 'GET',
        url: url,
        success: function(response) {
          if(response == 'sent'){
            $('.successMessage').addClass('active');
            setTimeout(function(){
              $('.successMessage').removeClass('active');
            }, 3000);
          }
        }
      });
    });
  });
  </script>


<?php
get_footer();


?>
