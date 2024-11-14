<?php 
/* Template name: Home */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 


<div class="first-block">
            <div class="img-block">
                <div class="container relative">
                    <div class="img-pos">
                        <img src="<?php echo get_field('banner_logo');?>" alt="Luna">
                    </div>
                    <div class="flex align-items-end rotate-left animation-rotate">
                        <div class="left"> <span><?php echo get_field('banner_text');?></span>
                            <img src="<?php echo get_field('banner_image');?>" alt="Luna">
                        </div>
                        <div class="right">
                            <p><?php echo get_field('banner_content');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-sec m-x">
            <div class="container">
                <div class="content-wrap">
                    <p><?php echo get_field('service_content');?></p>
                    <a href="<?php echo get_field('link_url');?>" class="text-btn arrow-btn"><?php echo get_field('link_text');?> <img src="<?php bloginfo("template_url")?>/img/arrow-green.svg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="scroll-container hero-section">
            <div class="loop-container">
                <?php	
                     while( have_rows('big_text') ): the_row();
                        $b_text    =  get_sub_field('b_text'); 
                ?> 
                    <div class="scrolling-text"><?php echo $b_text;?> &nbsp;</div>                    
                <?php endwhile; ?>
            </div>
        </div>       

<div class="scroll-container b-tb">
	<?php  $scrolling_text  = get_field('small_text');	?>
	<?php  $chunked_scrollt = array_chunk($scrolling_text,4); ?>
    <?php foreach ($chunked_scrollt as $sct_repeater) { ?>
	 	<div class="scrolling-text small-text">
			<?php foreach( $sct_repeater as $sct ){ ?>
          		<?php echo $sct['s_text'];?> &nbsp; &nbsp;	         
	         <?php } ?> 
		</div>
	 <?php } ?>
 </div>
        <div class="img-sec">
            <div class="medium-container">
                <div class="img-sec-block">
                <?php
                    $i = 1;	
                     while( have_rows('packages') ): the_row();
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
                                <img src="<?php echo $package_image;?>" alt="Luna" class="rotate-right">
                            </div>
                        </div>
                        <div class="img-content">
                            <div class="img-block-content">
                                <h2><?php echo $package_name;?></h2>
                                <span><?php echo $package_content;?></span>
                                <b><?php echo $package_price;?> </b>
                                <a href="<?php echo $book_link;?>" class="text-btn arrow-btn">Buy Now <img src="<?php bloginfo("template_url")?>/img/arrow-green.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile; ?>                    
                </div>
                <div class="circle-bg-link">
                    <a href="<?php echo get_field('pk_button_link');?>"><span><?php echo get_field('pk_button_text');?></span></a>
                </div>
            </div>
        </div>
        <div class="video-container">
            <video id="video" poster="<?php echo get_field('video_image');?>">
                <source src="<?php echo get_field('add_video');?>" type="video/mp4">
            </video>
            <div class="play-button-wrapper">
                <div title="Play video" class="play-gif" id="circle-play-b" style="opacity: 1;">
                    <!-- SVG Play Button -->
                    <svg fill="#C0DD92" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path d="M256,0C114.511,0,0,114.497,0,256c0,141.49,114.495,256,256,256c141.49,0,256-114.497,256-256C512,114.51,397.503,0,256,0 z M348.238,284.418l-120.294,69.507c-10.148,5.864-22.661,5.874-32.826,0.009c-10.158-5.862-16.415-16.699-16.415-28.426V186.493 c0-11.728,6.258-22.564,16.415-28.426c5.076-2.93,10.741-4.395,16.406-4.395c5.67,0,11.341,1.468,16.42,4.402l120.295,69.507 c10.149,5.864,16.4,16.696,16.4,28.418C364.639,267.722,358.387,278.553,348.238,284.418z"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="stories">
            <div class="container">
                <div class="stories-wrap rotate-left">
                    <img src="<?php bloginfo("template_url")?>/img/qts.svg" alt="">
                    <strong><?php echo get_field('testi_title');?></strong>
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
                                <img src="<?php echo get_field('testi_image');?>" alt="" class="rotate-right">
                                <span><?php echo get_field('testi_image_text');?></span>
                            </div>
                        </div>
                        <div class="img-content">
                            <div class="img-block-content">
                                <span><?php echo get_field('testi_content');?></span>
                                <b><?php echo get_field('testi_name');?></b>
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
                     while( have_rows('home_insights') ): the_row();
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