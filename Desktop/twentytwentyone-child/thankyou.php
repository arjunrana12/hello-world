<?php


get_header();



$loop = new WP_Query( array( 'post_type' => 'News', 'posts_per_page' => 3 ) );

/**
* Template Name: Thankyou
*/

?>



<div class="thank-main-section">
  <div class="container">
     <div class="inner-thank">
        <div class="in-thank">

       <h2>Thank You !</h2>
       <p>Thank you for visiting <span>shamshoom</span> website. We have received your email.</p>

       <div class="mark-sec">
           <img src="https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/green-check-mark-icon-on-transparent-background-free-png.webp">
       </div>

       <h3>We'll get back to you shortly!</h3>
       <p>If you didn't receive any mail contact info@shamshoom.com</p>
     <a class="back-home" href="<?php echo home_url(); ?>">Back to homepage</a>
</div>
     </div>
  </div>
</div>



<?php
get_footer();


?>
