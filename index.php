<?php get_header(); ?>
    
    
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/inc/jquery.cycle.js"></script>
	<script type="text/javascript">
    jQuery(function() {
        jQuery('#lsa_news').cycle({			
        	fx: 'fade', 
			timeout: 6000	
        });
    });
    </script>
       
    <div class="lsa_news_index">
        <div class="lsa_news_item">
            <h2>CURRENT NEWS</h2>
            <div id="lsa_news">
            <?php wp_reset_postdata(); ?>
            <?php			
            global $post;
            $mynews = get_posts('category=3&numberposts=-1&meta_key=sort_news&orderby=meta_value&order=ASC');
            foreach($mynews as $post) :
                setup_postdata($post);
                ?>
                <div class="lsa_news_post">
                    <h3><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
                    <?php the_excerpt(); ?>
                </div>
            <?php endforeach; ?>
            
            </div>
        </div>
    </div>
    <div class="lsa_img_index">
        <?php putRevSlider("homepage","homepage"); ?>
    </div>
    <br clear="all" />
    
    <div class="lsa_quick_links">
        <div class="lsa_quick_links_item">
            <h2>QUICK LINKS</h2>
            <ul class="lsa_qlinks">
            	<?php show_quick_links(); ?>
            </ul>
        </div>
    </div>
    <div class="lsa_announce">
        <div class="lsa_announce_item">
            <h2>ANNOUNCEMENTS</h2>
            <ul class="lsa_announce">
			<?php
            global $annc;
            $myannc = get_posts('category=4&numberposts5&meta_key=sort_order&orderby=meta_value&order=ASC');
            foreach($myannc as $annc) :
                setup_postdata($annc);
                ?>
                <li><a href="<?php echo get_permalink($annc->ID); ?>"><?php echo get_the_title($annc->ID); ?></a></li>                                                       
            <?php endforeach; ?>     
            <li><a href="/category/announcements/">View all Announcements &raquo;</a></li>
            </ul>       
        </div>
    </div>
    <br clear="all" />
    
    <div class="lsa_acct_links">
        <div class="lsa_acct_links_item">
            <h2>ACCOUNT LINKS</h2>
            <a href="https://www.eservicepayments.com/cgi-bin/specialwebapp.vps?appid=40a27221f816144b21e9f2e0d81891b8a68820b814b79fc6caf83c6a4fcf06b22f288aa4a34fa442a76b20a4eb1041b0c37fb54734637c3dce6d42c69377dcff&bywebssid=fdb1d296d48390f47642ca31e9d95c70cd2db028" target="_blank"><img border="0" src="<?php bloginfo('template_directory'); ?>/images/acct_payment.jpg" alt="Make a Payment" /></a>
            <a href="https://www.factstuitionaid.com/FACTS/gaapp" target="_blank"><img border="0" src="<?php bloginfo('template_directory'); ?>/images/acct_aid.jpg" alt="Financial Aid information" /></a>
            <a href="https://www.eservicepayments.com/cgi-bin/specialwebapp.vps?appid=40a27221f816144b21e9f2e0d81891b8a68820b814b79fc6caf83c6a4fcf06b22f288aa4a34fa442a76b20a4eb1041b0c37fb54734637c3dce6d42c69377dcff&bywebssid=fdb1d296d48390f47642ca31e9d95c70cd2db028" target="_blank"><img border="0" src="<?php bloginfo('template_directory'); ?>/images/acct_donate.jpg" alt="Donate to LSA" /></a>
            <a href="http://www.edline.net/pages/Lutheran_School" target="_blank"><img border="0" src="<?php bloginfo('template_directory'); ?>/images/acct_grades.jpg" alt="Check student grades" /></a>
        </div>
    </div>
    <div class="lsa_gallery">
        <div class="lsa_gallery_item">
            <h2>GALLERY</h2>
            <div class="lsa_flickr">
		







            </div>
            
        </div>
    </div>
    <br clear="all" />
        

<?php get_footer(); ?>