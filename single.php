<?php get_header(); ?>

<ul class="lsa_sub_nav">
	<li>
    	<?php wp_list_categories('orderby=name&exclude=1&title_li=<h3>' . __('VIEW ALL:') . '</h3>'); ?> 
    </li>
</ul>

<div class="lsa_sub_content">
	<?php the_title('<h1>', '</h1>'); ?>
            
	<?php 
    if (have_posts()) : 
        while (have_posts()) : the_post(); 		
            the_content(); 					
        endwhile;
    endif;
    ?>

</div>

<?php get_footer(); ?>