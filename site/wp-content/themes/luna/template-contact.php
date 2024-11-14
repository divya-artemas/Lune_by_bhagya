<?php 
/* Template name: Contact */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 

<div class="inner-section-start">
          <div class="xm-container">
              <div class="contact-flex flex align-items-center">
                  <div class="contact-name">
                     <div class="contact-name-wrap">
                           <h1><?php echo get_field('contact_heading');?></h1>
                     </div>                    
                  </div>
                  <div class="contact-image">
                      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="Luna">
                  </div>
              </div>
          </div>
       </div>
     <div class="full-width-content">
         <div class="xm-container">
         <?php the_content();?>
             <div class="contact flex">
                        <a href="tel:<?php echo str_replace(' ', '',get_field('cn_number'));?>">
							<span>
			<?php echo get_field('cn_number_icon');?>
			</span><?php echo get_field('cn_number');?></a>
                      <a href="mailto:<?php echo get_field('cn_email_id');?>">
						  <span>
<?php echo get_field('cn_email_icon');?>
</span><?php echo get_field('cn_email_id');?></a>
                      </div>
         </div>
     </div>
     <div class="contact-form-sec">
         <div class="xm-container">
            <h2><?php echo get_field('form_heading');?></h2>
      <div class="form-container">        
		  <?php echo do_shortcode(get_field("contact_form"));?>
    </div>

         </div>
     </div>
      <div class="scroll-sec-wrap">
        <div class="scroll-container hero-section">
            <div class="loop-container">
				 <?php	
                     while( have_rows('big_text',6) ): the_row();
                        $b_text    =  get_sub_field('b_text'); 
             ?>
            <div class="scrolling-text"> <?php echo $b_text;?> &nbsp; </div>
           <?php endwhile;?>
            </div>
        </div>

    <?php endwhile; endif;?> 
    <?php get_footer();?>