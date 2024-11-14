<?php
get_header();
?> 
<?php
global $post;
if ( ! post_password_required( $post ) ) {
	?>
   <div class="inner-section-start">
          <div class="xl-container">
              <div class="outfit-description flex">
                  <div class="outfit-image">
                      <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID) );?>" alt="Luna">
                  </div>
                  <div class="outfit-content">
                      <h2><?php the_title();?></h2>
                      <span><?php echo get_field('outfit_position');?></span>
                      <div class="detailed-image-block flex">
                      <?php                             
                        while( have_rows('outfit_gallery_images') ): the_row();
                            $gal_image    =  get_sub_field('gal_image');
                      ?>
                          <div class="image">
                              <img src="<?php echo $gal_image;?>" alt="Luna">
                          </div>
                      <?php endwhile;?>
                      </div>
                     <?php the_content();?>
                  </div>
              </div>
          </div>           
       </div>      
       <div class="detailed-grid">
           <div class="xl-container">
               <div class="detailed-flex flex">
                  <?php                             
                        while( have_rows('outfit_ideas') ): the_row();
                            $outfit_idea_image    =  get_sub_field('outfit_idea_image');
                            $oufit_idea_details    =  get_sub_field('oufit_idea_details');
                  ?>
                   <div class="detailed-set">
                       <img src="<?php echo $outfit_idea_image;?>" alt="Luna">
                       <?php echo $oufit_idea_details;?>
                   </div>
                  <?php endwhile;?>                  
               </div>
           </div>
       </div>
       
       
<div class="text-content">
    <div class="medium-container">
        <h2><?php echo get_field('ot_button_title','option');?></h2>
        <a href="<?php echo get_field('ot_button_link','option');?>" class="btn fill"><?php echo get_field('ot_button_text','option');?></a>
    </div>
</div>
 
 <?php } else { ?>
<div class="inner-section-start">
	<dv class="container">
	<?php echo get_the_password_form(); ?>
	</dv>
 
</div>
<?php } ?>
<?php get_footer();?>