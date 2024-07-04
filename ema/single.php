<?php

get_header();

/* Start the Loop */

if ( have_posts() ) :

while ( have_posts() ) : the_post();

?>

<div class="clsContentArea" style="background-color: #efefef; margin-top: -29px;">
<div class="container">
	<div class="clsSiteContent">
	<?php 
	
	if ( has_post_thumbnail() ) {
		
		the_post_thumbnail();
		
	}else{ ?>
		<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2023/03/pexels-fauxels-3184465-1-scaled.jpg"/>
	<?php }?>
		<div class="desc">
		<p><b><?php the_date('j F, Y');?></b></p>
		<h1><?php the_title(); ?></h1>
		<?php $category = get_the_category();
		$parentCategory = $category[0]->cat_name;
		$childCategory = $category[1]->cat_name;
		
		?>
		<h6><?php echo $parentCategory; ?> | <?php echo $childCategory; ?></h6>
		<?php the_content(); ?>
		</div>
		
		<div class="nextl">
		<?php next_post_link( '%link', 'Next Article', TRUE ); ?>
		</div>
		<div class="blogtext">
		<h3>For more information or specific advice, please do not hesitate to contact one of our employee relations consultants.</h3>
		</div>
	</div>
	<div class="bloginfo">
		<h3>More from the blog</h3>
		<?php
	$recent_posts = wp_get_recent_posts(array(
		'numberposts' => 2, // Number of recent posts thumbnails to display
		'category' => 7,
		'post_status' => 'publish' // Show only the published posts
	));
	foreach( $recent_posts as $post_item ) : ?>
		
		<div class="bposts">
		    <?php if ( has_post_thumbnail($post_item['ID']) ) {
				
				
				echo  get_the_post_thumbnail($post_item["ID"],'medium');
				
			} ?>
			<p><?php echo human_time_diff( get_the_time('U',$post_item['ID']), current_time('timestamp') ) . ' ago'; ?></p>
            <p><a href="<?php echo get_permalink($post_item['ID']) ?>"><?php echo $post_item['post_title'] ?></a></p>
            
        </div>
	<?php endforeach; ?>
	<hr/>
		<h5>Industry News</h5>
		<?php
	$recent_posts = wp_get_recent_posts(array(
		'numberposts' => 2, // Number of recent posts thumbnails to display
		'category' => 8,
		'post_status' => 'publish' // Show only the published posts
	));
	foreach( $recent_posts as $post_item ) : ?>
		
		<div class="bposts">
		<?php if ( has_post_thumbnail($post_item['ID']) ) {
				
				
				echo  get_the_post_thumbnail($post_item["ID"],'medium');
				
			} ?>
			<p><?php echo human_time_diff( get_the_time('U',$post_item['ID']), current_time('timestamp') ) . ' ago'; ?></p>
            <p><a href="<?php echo get_permalink($post_item['ID']) ?>"><?php echo $post_item['post_title'] ?></a></p>
            
        </div>
	<?php endforeach; ?>
	<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
</div>
</div>

<?php

endwhile; 

endif;

// End of the loop.

get_footer();
