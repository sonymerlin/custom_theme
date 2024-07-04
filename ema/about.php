<?php
/* 
 *Template Name: About
 */

 get_header();

?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

				$post_id = get_the_ID();
				$url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
				
?>
<div class="clsContentArea" style="background-image: url('<?php echo $url; ?>')">
	<div class="container">
		<div class="clsSiteContent">
			<?php the_content(); ?>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php 
endwhile;
endif;
?>
<div class="aboutbanner">
<?php if( have_rows('bottom_banner') ):
            while( have_rows('bottom_banner') ): the_row();
                $banner_title = get_sub_field('banner_title');
                $banner_text = get_sub_field('banner_text');
            ?>
    <div class="aboutbannertitle"><?php echo $banner_title; ?></div>
    <div class="aboutbannertxt"><?php echo $banner_text; ?></div>
    <?php 
        endwhile;
        endif;?>
</div>

<div class="clsAddContentArea">
    <div class="container">

    <?php if( get_field('additional_content') ): ?>
        <?php the_field("additional_content"); ?>
    <?php endif; ?>
        
    </div>
</div>

<?php get_footer(); ?>