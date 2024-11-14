<?php 
/* Template name: Styling */
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
                           <h1><span><?php echo get_field('banner_title');?></span></h1>
                    </div>
               </div>
           </div>
            <div class="scroll-sec-wrap">
        <div class="scroll-container hero-section m-o">
            <div class="loop-container">
                <?php	
                     while( have_rows('ser_scrolling_text') ): the_row();
                        $ser_text    =  get_sub_field('ser_text'); 
                ?>
                    <div class="scrolling-text"><?php echo $ser_text;?> &nbsp; </div>
                <?php endwhile;?>           
            </div>
        </div>       
       </div>
       </div>     
    </div>
     <div class="img-sec">
            <div class="medium-container">
                <div class="img-sec-block">
                <?php
                    $i = 1;	
                     while( have_rows('our_services') ): the_row();
                        $service_name        =  get_sub_field('service_name');
                        $service_description =  get_sub_field('service_description'); 
                        $service_price       =  get_sub_field('service_price');     
					    $service_link        =  get_sub_field('service_link');  
                ?>
                <?php 
                    if($i==1){
                        $class = "center";
                    }
                    else{
                        $class = "start";
                    }
                ?>
                    <div class="flex align-items-center animation-rotate gap-m">
                        <div class="img-set">
                            <div class="img-set-wrap">
                                <img src="<?php bloginfo("template_url")?>/img/shade-bg.svg" alt="" class="position">                                
                                  <h2><?php echo $service_name;?></h2>
                            </div>
                        </div>
						
                        <div class="img-content">
                            <div class="img-block-content">
                                <?php echo $service_description;?>
                                <b><?php echo $service_price;?></b>
								<a href="<?php echo $service_link;?>" class="text-btn arrow-btn">Visit Outfit Portfolio<img src="https://mwduat.com/lbb/site/wp-content/themes/luna/img/arrow-green.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile;?>
   
                </div>
                
            </div>
        </div>

  <?php endwhile; endif;?> 
  <?php get_footer();?>