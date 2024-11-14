<?php 
/* Template name: FAQ */
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
                        <h2><?php echo get_field('page_title');?></h2>
                      </div>                     
                   </div>
               </div>
           </div>
            <div class="faq">
               <div class="xm-container">						 
					<?php	
                     	while( have_rows('det_faqs') ): the_row();
                        	$faq_question   =  get_sub_field('faq_question'); 
				            $faq_answer     =  get_sub_field('faq_answer'); 
             		?>
						<div class="faq">
    						<h3 class="faq-question"><?php echo $faq_question;?></h3>
							<div class="faq-answer">
							  <p><?php echo $faq_answer;?></p>
							</div>
  						</div>							 
				    <?php endwhile; ?>
                </div>
             </div>
       </div>      

  <?php endwhile; endif;?> 
  <?php get_footer();?>