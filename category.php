<?php get_header(); ?>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.lsa_post_content').hide();
	jQuery('a.lsa-toggle').click(function() {
		jQuery(this).parent('div').next('div').toggle(800);
		return false;
	});
});
</script>

<ul class="lsa_sub_nav">
	<li>
    	<?php wp_list_categories('orderby=name&exclude=1&title_li=<h3>' . __('VIEW ALL:') . '</h3>'); ?> 
    </li>
</ul>

<div class="lsa_sub_content">

	<h1><?php single_cat_title(); ?></h1>
    
	<?php 
			if (have_posts()) : 
				while (have_posts()) : the_post(); 	
					
			?>
            
            		<div class="lsa_list_posts">
                    	<div class="lsa_post_image">
			<?php		
						$args = array(
							'post_type' => 'attachment',
							'post_mime_type' => 'image',
							'numberposts' => -1,
							'orderby' => 'menu_order',
							'order' => 'ASC',
							'post_parent' => $post->ID
						);
						$images = get_posts($args);
						if($images) {
							$cnt = 0;
							foreach($images as $image) { 
								if ($cnt == 0) {
									echo wp_get_attachment_image($image->ID, $size='thumbnail');	
								}
								$cnt += 1;
							}
						}
					
			?>
            			</div>
                        <div class="lsa_post_excerpt">
            <?php
							echo "<h2>";
							the_title();
							echo "</h2>\n";	
							echo the_excerpt();
            ?>
            				<div>
                            <a href="#" class="lsa-toggle">Read Full Story &raquo;</a>
            				</div>
                        
                            <div class="lsa_post_content">
                                <?php the_content(); ?>
                            </div>
                            
                        </div>
                    
                    <br clear="all" />
                    </div>                    
										
			<?php		
				endwhile;
			endif;
			?>
</div>

<br clear="all" />


<?php get_footer(); ?>