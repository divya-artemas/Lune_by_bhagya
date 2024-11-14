<?php 
/* Template name: Outfit Collage */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 

<div class="inner-section-start">
           <div class="about-luna">
               <div class="medium-container">
                   <div class="about-sec flex">
                       <div class="content">
                          <?php the_content();?>               
                      </div>
                     </div>
               </div>
           </div>
       </div>
       
        <div class="img-sec">
            <div class="medium-container">
                <div class="img-sec-block">
                <?php
                    $args = array (
                        'post_type'         => 'outfit',                        
                        'orderby'           => 'meta_value',
                        'order'             => 'DESC'
                    );
                    $query = new WP_Query( $args );
                ?>

                <?php if ( $query->have_posts() ) : ?>
                <?php 
                    $i=1;
                    while ( $query->have_posts() ) : $query->the_post();                      
                        $outfit_title    =   get_the_title();                                             
                        $outfit_position =   get_field('outfit_position');     
                        $outfit_image    =   get_field('outfit_thumbnail_image');                          
                        $opermalink      =   get_the_permalink();                             
                ?>
                <?php 
                if($i%2==0){
                    $class = "img-revesre-area flex align-items-center  animation-rotate gap-m";
                }
                else{
                    $class = "flex align-items-center animation-rotate gap-m reverse";
                }
                ?>
					<?php
global $post;
if ( ! post_password_required( $post ) ) {
	?>
                    <div class="<?php echo $class;?>">
                    
                        <div class="img-set">
                            <div class="img-set-wrap">
                           <img src="<?php bloginfo("template_url")?>/img/shade-bg.svg" alt="" class="position">
                           <a href="<?php echo $opermalink;?>">
                                <img src="<?php echo $outfit_image;?>" alt="Luna" class="rotate-right">
                                </a>
                            </div>
                        </div>
                    
                        <div class="img-content">
                            <div class="img-block-content">
                                <h4><?php echo $outfit_title;?></h4>
                                <span><?php echo $outfit_position;?></span>                               
                            </div>
                        </div>
                    </div>
					 <?php } else { ?>
					<?php } ?>
                <?php wp_reset_query();  $i++; endwhile; ?>
                <?php endif; ?>                 
                </div>
              <div class="circle-bg-link">
                    <a href="<?php echo get_field('o_button_link');?>"><span><?php echo get_field('o_button_text');?></span></a>
                </div>
            </div>
        </div>
       
       

      
    <?php endwhile; endif;?> 
    <?php get_footer();?>