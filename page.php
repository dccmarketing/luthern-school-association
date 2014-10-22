<?php get_header(); ?>

<?php
	global $post;	        
	$test_for_kids = wp_list_pages("child_of=".$post->ID."&echo=0");		
	if ($test_for_kids || $post->post_parent) {
		// This page has subpages --> include sub navigation
	?>
		<ul class="lsa_sub_nav">
        	<li><h3><?php echo get_the_title(get_top_ancestor($post->ID)) ?></h3></li>
			<?php //  sub menu goes here 
			$st_parent_id = get_top_ancestor($post->ID);
			$this_pages_info = $wpdb->get_results("select post_title, post_name, ID from wp_posts where post_parent = '" . $st_parent_id . "' and post_status = 'publish' ORDER BY menu_order ASC");
						   
			foreach ($this_pages_info as $pageinfo) {                
				echo "<li><a href=\"" . get_permalink($st_parent_id) . $pageinfo->post_name . "/\">" . $pageinfo->post_title . "</a></li>\n";
				
				$test_for_grandkids = wp_list_pages("child_of=".$pageinfo->ID."&echo=0");		
				if ($test_for_grandkids || is_page() && $post->post_parent) { 
					// retrieve grand children info and build submenu
					$this_kids_info = $wpdb->get_results("select post_title, post_name, ID from wp_posts where post_parent = '" . $pageinfo->ID . "' and post_status = 'publish' ORDER BY menu_order ASC");				
					?>
					<ul class="lsa_subnav">
					<?php
						foreach ($this_kids_info as $kidinfo) {                
							echo "<li><a href=\"" . get_bloginfo('url') . "/" . $pageinfo->post_name . "/" . $kidinfo->post_name . "/\">" . $kidinfo->post_title . "</a></li>\n";
						}
					?>
					</ul>
				<?php 
				} 					
			}
			?>
		</ul>             
		
		<div class="lsa_sub_content">	
		
	<?php 
	} else {
	// This is not a subpage --> no sub navigation
	?>
		<div class="lsa_content">
		
	<?php } ?> 
	
	
	<?php the_title('<h1>', '</h1>'); ?>
                                        
    <?php
    if (have_posts()) : 
        while (have_posts()) : the_post(); 		
            the_content(); 					
        endwhile;
    endif;
    ?>    
    
	</div>
	<br clear="all" />
    
<?php get_footer(); ?>