<?php 
/* Template name: Package */
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
                       </div>                     
                   </div>
               </div>
           </div>
       </div>
       
        <div class="img-sec bg-green">
            <div class="medium-container">
                <div class="img-sec-block">
                <?php
                    $i = 1;	
                     while( have_rows('packages',6) ): the_row();
                        $package_image    =  get_sub_field('package_image');
                        $package_name     =  get_sub_field('package_name'); 
                        $package_content  =  get_sub_field('package_content'); 
                        $package_price    =  get_sub_field('package_price'); 
                        $book_link        =  get_sub_field('book_link');  
                ?>
                <?php 
                if($i%2==0){
                    $class = "img-revesre-area flex align-items-center reverse animation-rotate gap-m";
                }
                else{
                    $class = "flex align-items-center animation-rotate gap-m";
                }
                ?>
                     <div class="<?php echo $class;?>">
                        <div class="img-set">
                            <div class="img-set-wrap">
                                <img src="<?php bloginfo("template_url")?>/img/shade-bg.svg" alt="" class="position">
                                <img src="<?php echo $package_image;?>" alt="" class="rotate-right">
                            </div>
                        </div>
                        <div class="img-content">
                            <div class="img-block-content">
                                <h2><?php echo $package_name;?></h2>
                                <span><?php echo $package_content;?></span>
                                <b><?php echo $package_price;?> </b>
                                <a href="<?php echo $book_link;?>" class="text-btn arrow-btn">Buy Now <img src="<?php bloginfo("template_url")?>/img/white-arrow.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile; ?>   
                </div>             
            </div>
        </div>
       
        <div class="stories">
            <div class="container">
                <div class="stories-wrap rotate-left">
                    <img src="<?php bloginfo("template_url")?>/img/qts.svg" alt="">
                    <strong><?php echo get_field('testi_title',6);?></strong>
                </div>
            </div>
        </div>

        <div class="img-sec testimonials">
            <div class="medium-container">
                <div class="img-sec-block">

                    <div class="img-revesre-area flex align-items-center reverse animation-rotate">
                        <div class="img-set">
                            <div class="img-set-wrap">
                                <img src="<?php bloginfo("template_url")?>/img/shade-bg.svg" alt="" class="position">
                                <img src="<?php echo get_field('testi_image',6);?>" alt="Luna" class="rotate-right">
                                <span><?php echo get_field('testi_image_text',6);?></span>
                            </div>
                        </div>

                        <div class="img-content">
                            <div class="img-block-content">
                                <span><?php echo get_field('testi_content',6);?></span>
                                <b><?php echo get_field('testi_name',6);?></b>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="insight-sec">
            <div class="small-container">
            <?php   
                $i = 1;                
                     while( have_rows('home_insights',6) ): the_row();
                        $in_head    =  get_sub_field('in_head');
                        $in_link     =  get_sub_field('in_link');                       
            ?>
            <?php 
                if($i%2==0){
                    $class = " ";
                }
                else{
                    $ti = get_field('in_title');
                    $class = "br-b";
                }
            ?>
                <div class="insight-wrap <?php echo $class;?>">
                <?php if($i%2==1){ ?>
                    <h3><?php echo $ti;?> </h3>
                <?php } ?>
                    <a href="<?php echo $in_link;?>"><?php echo $in_head;?></a>
                </div>                
                <?php $i++; endwhile;?>
            </div>
        </div>

  <?php endwhile; endif;?> 
  <?php get_footer();?>