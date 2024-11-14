<div class="scroll-container b-tb">
	<?php  $scrolling_repeater  = get_field('ft_scrolling_text','option');	?>
	<?php  $chunked_scroll = array_chunk($scrolling_repeater,4); ?>
    <?php foreach ($chunked_scroll as $sc_repeater) { ?>
	 	<div class="scrolling-text small-text">
			<?php foreach( $sc_repeater as $sc ){ ?>
          		<?php echo $sc['fs_text'];?> &nbsp; &nbsp;	         
	         <?php } ?> 
		</div>
	 <?php } ?>
 </div>
    </div>
    <div class="footer">
        <div class="medium-container">
           <div class="first-footer">
                <img src="<?php echo get_field('site_logo','option');?>" alt="Luna Logo">
                <ul>
                    <li>
                        <a href="tel:<?php echo str_replace(' ', '',get_field('ft_contact_number','option'));?>"><span>
<?php echo get_field('ft_contact_icon','option');?>
</span><?php echo get_field('ft_contact_number','option');?></a>
                    </li> 
					<li>
               <a href="mailto:<?php echo get_field('ft_email_id','option');?>">
				   <span><?php echo get_field('ft_email_icon','option');?></span>
				   <?php echo get_field('ft_email_id','option');?>
				</a>
                    </li>                                                                                                                      </ul>
           </div>
           <div class="second-footer">
                    <?php
                            $defaults = array(
                                'menu' => 'Footer Menu',
                                'after' => '',
                                'items_wrap' => '<ul>%3$s</ul>',
                                'theme_location' => 'footer',
                                'depth' => 0,
                                'container' => false,
                                'walker'    => new themeslug_walker_nav_menu
                                );
                                wp_nav_menu($defaults);
                    ?>
             <?php echo get_field('copyright_text','option');?>
           </div>
           
        </div>
    </div>
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/jquery-min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/flickity.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/aos.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/custom.js"></script>

    <script>
       const video = document.getElementById("video");
const circlePlayButton = document.getElementById("circle-play-b");

function togglePlay() {
	if (video.paused || video.ended) {
		video.play();
	} else {
		video.pause();
	}
}

circlePlayButton.addEventListener("click", togglePlay);
video.addEventListener("playing", function () {
	circlePlayButton.style.opacity = 0;
});
video.addEventListener("pause", function () {
	circlePlayButton.style.opacity = 1;
});
        
    </script>
     <?php wp_footer(); ?>
  </body>
</html>


