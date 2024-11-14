<?php 
/* Template name: About */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 
     <div class="inner-section-start">
           <div class="about-luna">
               <div class="container">
                   <div class="about-sec flex">
                       <div class="content">
                           <?php the_content();?>
                      <div class="contact">
                        <a href="tel:<?php echo str_replace(' ', '',get_field('cn_number',25));?>"><span>
<?php echo get_field('cn_number_icon',25);?>
</span><?php echo get_field('cn_number',25);?></a>
                      </div>
                       </div>
                       <div class="img-about">
                           <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" class="rotate-left">
                       </div>
                   </div>
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
            <?php endwhile; ?>
           
            </div>
        </div>

  <?php endwhile; endif;?> 
  <?php get_footer();?>