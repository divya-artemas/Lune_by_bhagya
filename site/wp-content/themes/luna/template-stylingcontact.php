<?php 
/* Template name: Contact Styling */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 
<div class="inner-section-start">
           <div class="about-luna">
               <div class="xm-container">
                   <div class="about-sec flex">
                       <div class="content">
                        <h2><?php the_title();?></h2>
                        <?php the_content();?>
                       <div class="form-container">                         
						    <?php echo do_shortcode(get_field("st_contact_form"));?>
    				  </div>                      
                       </div>                     
                   </div>
               </div>
           </div>
       </div>
 

    <?php endwhile; endif;?> 
    <?php get_footer();?>