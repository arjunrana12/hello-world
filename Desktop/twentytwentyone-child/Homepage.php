 
 <?php

get_header();

$loop = new WP_Query( array( 'post_type' => 'News', 'posts_per_page' => 3 ) );

/**
* Template Name: Homepage
*/

?>

<?php $home_section = get_field('home_section');?>

    <!-- banner section start from here -->
    <section class="banner-sec" style="background-image: url(https://salmon-okapi-834987.hostingersite.com/wp-content/uploads/2024/07/banner-2.png); background-repeat: no-repeat; background-size: cover;">
        <div class="main-box-banner">
            <div class="banner-txt-left-box">
                <h2><?= $home_section['home_heading'];?></h2>
                <p><?= $home_section['home_paragraph'];?></p>

            </div>
            <div class="right-box-banner">
             <div class="imgae-box-banner">
                <img src="<?php echo  $home_section['home_image']; ?>" >
             </div>
            </div>
     
        </div>
        <div class="banner-sec-form">
            <div class="container">
                <div class="banner-from-main">
                <table class="banner-client-name">
                        <tbody><tr>
                            <td>Broward .</td>
                            <td>Duval .</td>
                            <td>Lee . </td>
                            <td>St Johns .</td>
                            <td>Hillsborough .</td>
                            <td>Miami-Dade .</td>
                            <td>Orange .</td>
                            <td>Palm Beach .</td>
                            <td>County-Rentals</td>
                        </tr>
                    </tbody></table>
                <?php echo do_shortcode('[listing_search post_type="property" search_house_category="off" search_bed="off" search_bath="off" search_rooms="off" search_price="on" search_other="off" submit_label="Check Results"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end from here -->

    <!-- mobile form  -->
    <!-- <div class="banner-sec-form banner-sec-form-col">
        <div class="container">
            <div class="banner-from-main">
                <div class="banner-tab-col">
                    <table class="banner-client-name">
                        <tbody>
                            <tr>
                                <td>Broward .</td>
                                <td>Duval .</td>
                                <td>Lee .</td>
                                <td>St Johns .</td>
                                <td>Hillsborough .</td>
                                <td>Miami-Dade .</td>
                                <td>Orange .</td>
                                <td>Palm Beach .</td>
                                <td>County-Rentals</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="form-banner-col">
                    <form action="">
                        <div class="sereach-input">
                            <select name="cars" id="cars">
                                <option value="volvo">Search Location</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                              </select>
                        </div>
                        <div class="sereach-input">
                            <select name="cars" id="cars">
                                <option value="volvo">Property Type</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                              </select>
                        </div>
                        <div class="sereach-input">
                            <select name="cars" id="cars">
                                <option value="volvo">Price Range</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                              </select>
                        </div>
                        <div class="form-banner-btn">
                            <a href="#">Check Results</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <!-- mobile form  -->





    <?php $project_section = get_field('project_section');?>

    <!-- projects section start from here -->
    <section class="project-sec py">
        <div class="container">
            <div class="them-heading">
                <h3><?= $project_section['project_subheading'];?></h3>
                <h2><?= $project_section['project_heading'];?></h2>
            </div>
            <div class="main-box-projects">

            <?php echo do_shortcode('[listing post_type="property" location="america" limit="3"]'); ?>

            </div>
        </div>
    </section>
    <!-- projects section end from here -->



    <?php $sellers_section = get_field('sellers_section');?>


    <!-- sallers section start from here -->
    <section class="sallers-sec">
        <div class="container">
            <div class="them-heading">
                <h2><?= $sellers_section['sellers_heading'];?></h2>
                <h3><?= $sellers_section['sellers_subheading'];?></h3>
            </div>
            <div class="main-box-sallers">
                <div class="left-box-sallers">
                    <div class="txt-box-sallers">
                        <h3><?= $sellers_section['sellers_col1'];?></h3>
                        <p><?= $sellers_section['sellers_para1'];?></p>
                    </div>
                    <div class="txt-box-sallers">
                        <h3><?= $sellers_section['sellers_col2'];?></h3>
                        <p><?= $sellers_section['sellers_para2'];?></p>
                    </div>
                </div>
                <div class="saller-box-senter">
                    <div class="image-box-sallers">
                          <img src="<?php echo  $sellers_section['sellers_image']; ?>" >
                    </div>
                </div>
                <div class="right-box-sallers">
                    <div class="txt-box-sallers">
                        <h3><?= $sellers_section['sellers_col3'];?></h3>
                        <p><?= $sellers_section['sellers_para3'];?></p>
                    </div>
                    <div class="txt-box-sallers">
                        <h3><?= $sellers_section['sellers_col4'];?></h3>
                        <p><?= $sellers_section['sellers_para4'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sallers section end from here -->


    <?php $dream_section = get_field('dream_section');?>


    <!-- dream section start from here -->
        <section class="dream-sec py">
            <div class="container">
                <div class="them-heading">
                    <h2><?= $dream_section['heading'];?></h2>
                    <h3><?= $dream_section['subheading'];?><</h3>
                </div>
                <div class="main-box-dream">

                  <div class="inner-box-dream">
                    <?php echo do_shortcode('[listing post_type="property" location="canada"]'); ?>
                  </div>
               
                <div class="arroew-box-deam">
                    <div class="dream-left-arrow">
                        <img src="https://salmon-okapi-834987.hostingersite.com/wp-content/uploads/2024/07/left-arrow.png" alt="">
                    </div>
                    <div class="dream-right-arrow">
                        <img src="https://salmon-okapi-834987.hostingersite.com/wp-content/uploads/2024/07/right-aeeow.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- dream  section end from here -->

        <?php $service_section = get_field('service_section');?>

    <!--services section start from here  -->
    <section class="services-sec py">
        <div class="container">
            <div class="them-heading">
                <h3><?= $service_section['subheading'];?></h3>
                <h2><?= $service_section['heading'];?></h2>
            </div>
            <div class="main-box-projects">

               <?php echo do_shortcode('[listing_category category_key="property-services" location="sydney"]'); ?>
            

                <!-- <div class="inner-project">
                    <div class="box-bussines">
                        <div class="image-box-projects">
                        <img src="https://realestate.exoticaitsolutions.com/wp-content/uploads/2024/07/project-3.png" alt="">
                       
                        <div class="txt-box-protection">
                            <h4>Best Home Loan Deals </h4>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="inner-project">
                    <div class="box-bussines">
                        <div class="image-box-projects">
                        <img src="https://realestate.exoticaitsolutions.com/wp-content/uploads/2024/07/project-4.png" alt="">
                      
                        <div class="txt-box-protection">
                            <h4>Home Interiors</h4>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="inner-project">
                    <div class="box-bussines">
                        <div class="image-box-projects">
                        <img src="https://realestate.exoticaitsolutions.com/wp-content/uploads/2024/07/project-5.png" alt="">
                    
                        <div class="txt-box-protection">
                            <h4>Constriction Services</h4>
                        </div>
                    </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- services section end from here -->




     <?php $testimonials_section = get_field('testimonials_section');?>


    <!-- teatimonials section start from here -->
    <section class="teatimonials-sec py">
        <div class="container">
            <div class="them-heading">
                <h3><?= $testimonials_section['testimonials_subheading'];?></h3>
                <h2><?= $testimonials_section['testimonials_heading'];?></h2>
            </div>


            <div class="testimonials-box-main">
                <div class="inner-box-testimonials">
                    <div class="txt-box-main-teatimonials">
                        <div class="txt-testimonials-one">
                            <p><?= $testimonials_section['testimonials_description1'];?></p>
    
                        </div>
                        <div class="testimonials-inner-heading">
                            <div class="them-heading">
                                <h3><?= $testimonials_section['testimonials_title1'];?></h3>
                            </div>
                        </div>
                    </div>
                   <div class="image-teatimonials-box">
                        <img src="<?php echo  $testimonials_section['image1']; ?>" >
                   </div>
                  
                </div>
                <div class="inner-box-testimonials-center">
                    <div class="txt-box-main-teatimonials">
                        <div class="txt-testimonials-one">
                        <p><?= $testimonials_section['testimonials_description2'];?></p>
    
                        </div>
                        <div class="testimonials-inner-heading">
                            <div class="them-heading">
                                <h3><?= $testimonials_section['testimonials_title2'];?></h3>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="inner-box-testimonials-right">
                    <div class="txt-box-main-teatimonials">
                        <div class="txt-testimonials-one">
                           <p><?= $testimonials_section['testimonials_description3'];?></p>
    
                        </div>
                        <div class="testimonials-inner-heading">
                            <div class="them-heading">
                                 <h3><?= $testimonials_section['testimonials_title3'];?></h3>
                            </div>
                        </div>
                    </div>
                   <div class="image-teatimonials-box">
                       <img src="<?php echo  $testimonials_section['image2']; ?>" >
                   </div>
                  
                </div>
        </div>

          

        </div>
    </section>
    <!-- testimonials section end from here -->







    <?php $touch_section = get_field('touch_section');?>


    <!-- get in touch section start from here -->
    <section class="get-in-touch-sec py">
        <div class="container">
            <div class="them-heading">
                <h3><?= $touch_section['touch_subheading'];?></h3>
                <h2><?= $touch_section['touch_heading'];?></h2>
            </div>
            <div class="main-box-touch">
                <div class="left-box-touch">
                    <h2><?= $touch_section['contact_heading'];?></h2>
                    <div class="call-box-touch">
                        <p><?= $touch_section['phone_heading'];?></p>
                        <h3><?= $touch_section['phone_number'];?></h3>
                    </div>
                    <div class="call-box-touch">
                        <p><?= $touch_section['email_heading'];?></p>
                        <h3><?= $touch_section['email'];?></h3>
                    </div>
                    <div class="call-box-touch">
                        <p><?= $touch_section['address_heading'];?></p>
                        <h3><?= $touch_section['address'];?></h3>
                    </div>
                    <div class="social-links-box">
                        <div class="image-social-links">
                            <a href="">
                                <img src="https://realestate.exoticaitsolutions.com/wp-content/uploads/2024/07/insta.png" alt="">
                            </a>
                        </div>
                        <div class="image-social-links">
                            <a href="">
                                <img src="https://realestate.exoticaitsolutions.com/wp-content/uploads/2024/07/fb.png" alt="">
                            </a>
                        </div>
                        <div class="image-social-links">
                            <a href="">
                                <img src="https://realestate.exoticaitsolutions.com/wp-content/uploads/2024/07/youtube.png" alt="">
                            </a>
                        </div>
                        <div class="image-social-links">
                            <a href="">
                                <img src="https://realestate.exoticaitsolutions.com/wp-content/uploads/2024/07/twitwer.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="right-box-touch">


                <?php echo apply_shortcodes( '[contact-form-7 id="35fc23d" title="contact frm"]' ); ?>


                </div>
            </div>
            
        </div>
    </section>
    <!-- get in touch section end from here -->




    <?php $benefit_section = get_field('benefit_section');?>


    <!-- why-choose section start from here -->
    <section class="choose-sec py">
        <div class="container">
            <div class="main-box-choose">
                <div class="left-box-choose">
                    <div class="image-box-chose-one">
                       <img src="<?php echo  $benefit_section['image']; ?>" >
                    </div>
                </div>
             
                <div class="right-box-choose">
                    <div class="them-heading">
                        <h3><?= $benefit_section['subheading'];?></h3>
                        <h2><?= $benefit_section['heading'];?></h2>
                    </div>
                    <div class="main-inner-box-choose">
                        <div class="txt-box-choose">
                            <h2><?= $benefit_section['number1'];?></h2>
                            <h3><?= $benefit_section['number_heading1'];?></h3>
                            <p><?= $benefit_section['number_description1'];?></p>
                        </div>
                        <div class="txt-box-choose">
                            <h2><?= $benefit_section['number2'];?></h2>
                            <h3><?= $benefit_section['number_heading2'];?></h3>
                            <p><?= $benefit_section['number_description2'];?></p>
                        </div>
                        <div class="txt-box-choose">
                            <h2><?= $benefit_section['number3'];?></h2>
                            <h3><?= $benefit_section['number_heading3'];?></h3>
                            <p><?= $benefit_section['number_description3'];?></p>
                        </div>
                        <div class="txt-box-choose">
                            <h2><?= $benefit_section['number4'];?></h2>
                            <h3><?= $benefit_section['number_heading4'];?></h3>
                            <p><?= $benefit_section['number_description4'];?></p>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>
    <!-- why choose section end from here -->


    <?php $choose_section = get_field('choose_section');?>

    <!-- faq section start from here -->
    <section class="faq-sec py">
        <div class="container">
            <div class="them-heading">
                <h3><?= $choose_section['subheading'];?></h3>
                <h2><?= $choose_section['heading'];?></h2>
            </div>
            <div class="faq-box">
                <div class="accordion_container">


                <?php
                $args = array(
                                'post_type'      => 'faq',
                                'posts_per_page' => -1
                             );

$query = new WP_Query($args);

if ($query->have_posts()) {
   
    while ($query->have_posts()) {
        $query->the_post();
       
?>
     
     <div class="accordion_head"><?php the_title(); ?><span class="plusminus">+</span></div>
     <div class="accordion_body" style="display: none;">
        <?php the_content(); ?> 
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
        </div>
    </section>
    <!-- faq section end from here -->


    
    <!-- map section start from here -->
    <section class="map-sec">
        <div class="image-box-map">
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d99567.3077295938!2d-99.70632563121967!3d43.66737884739424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1720429971823!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- map section end from here -->





<?php
get_footer();


?>

