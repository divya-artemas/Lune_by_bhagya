<?php 
/* Template name: Blog */
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
                           <h1><span><?php echo get_field('page_title');?></span></h1>                               
                   </div>
               </div>
           </div>
            <div class="scroll-sec-wrap">
        <div class="scroll-container hero-section m-o">
            <div class="loop-container">
				 <?php                   
                        while( have_rows('scrolling_text') ): the_row();
                            $sc_text    =  get_sub_field('sc_text');                            
                   ?> 
            		<div class="scrolling-text"><?php echo $sc_text;?> &nbsp; </div>
           			<?php endwhile;?>
            </div>
        </div>
       
       </div>
       </div>
     
    </div>
   <div class="blog-sec">
       <div class="sm-container">
          <div class="blog-set-wrap">
         		<?php
                    $args = array (
                        'post_type'         => 'blogs',                        
                        'orderby'           => 'meta_value',
                        'order'             => 'DESC'
                    );
                    $query = new WP_Query( $args );
                ?>

                <?php if ( $query->have_posts() ) : ?>
                <?php 
                    $i=1;
                    while ( $query->have_posts() ) : $query->the_post();                      
                        $blog_title   =   get_the_title(); 
                        $blog_content =   get_the_content();                                           
                        $blog_image   =   wp_get_attachment_url(get_post_thumbnail_id($post->ID) ) ;     
                        $blog_date    =   get_field('blog_date');  
			            $b_content    =   wp_strip_all_tags($blog_content);
                        $bpermalink   =   get_the_permalink();                             
                ?>
           <div class="blog-set">
               <img src="<?php echo $blog_image;?>" alt="Luna">
               <div class="blog-box-content">
                   <date><?php echo $blog_date;?></date>
                   <h3><?php echo $blog_title;?></h3>
				   <p><?php echo wp_trim_words( $b_content, 55);?></p><a href="<?php echo $bpermalink;?>" class="sm-btn fill">Read More</a>
               </div>
           </div>
           <?php wp_reset_query();  $i++; endwhile; ?>
           <?php endif; ?>           
           </div>
       </div>
   </div>
      
    <?php endwhile; endif;?> 
    <?php get_footer();?>