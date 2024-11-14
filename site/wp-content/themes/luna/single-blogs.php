<?php
get_header();
?> 
 <div class="inner-section-start">
        
     
        </div>
       <div class="blog-sec">
           <div class="sm-container">
              <div class="blog-set-wrap">
               <div class="blog-set">                  
                   <div class="blog-box-content detailed-blogs">
                       <date><?php echo get_field('blog_date');?></date>
                       <h1><?php the_title();?></h1>
                       <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID) );?>" alt="Luna">
                       <?php the_content();?>                       
                   </div>
               </div>             
           </div>
       </div>
     </div>
             <div class="related-box">
                 <div class="sm-container">
                         <h2>Related Blogs</h2>
					 <?php
                    $args = array (
                        'post_type'         => 'blogs',                        
                        'orderby'           => 'meta_value',
						'post__not_in'      =>  array( get_the_ID() ),
						'posts_per_page'    => '1',
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
       
              
 
    <?php get_footer();?>