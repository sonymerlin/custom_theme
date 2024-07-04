<?php
/* 
 *Template Name: Home
 */
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

 if( have_rows('what_we_do') ):

    while( have_rows('what_we_do') ): the_row();
  
    $main_heading = get_sub_field('main_heading');
    $subheading = get_sub_field('sub_heading');
?>
<div class="clsWhatwedo">
     <div class="container"> 
            <div class="txtcontent">
            <h2><?php echo $main_heading; ?></h2>
            <h3><?php echo $subheading; ?></h3>
            </div> 
            <?php if( have_rows('post_1') ):

            while( have_rows('post_1') ): the_row();

            $image= get_sub_field('image');
            $contentheading = get_sub_field('content_heading');
            $content = get_sub_field('content');
            $learnmore = get_sub_field('learn_more');
            
            ?>
            <div class="ema-col-3">
                <div class="clsDetailBox"> 
                <div class="wwdoimg"> <img src="<?php echo esc_url($image['url']); ?>" /></div>
                    <h5><?php echo $contentheading ?></h5>
                    <p><?php echo $content ?></p>
                    <div class="discover"><a href="<?php echo $learnmore ?>">Discover</a></div>
                </div> 
                
            </div> 
            <?php endwhile;
            endif;
            ?>
            <?php if( have_rows('post_2') ):

            while( have_rows('post_2') ): the_row();

            $image= get_sub_field('image');
            $contentheading = get_sub_field('content_heading');
            $content = get_sub_field('content');
            $learnmore = get_sub_field('learn_more');

            ?>
            <div class="ema-col-3">
                <div class="clsDetailBox"> 
                <div class="wwdoimg"> 
                    <img src="<?php echo $image; ?>" />
                </div>
                    <h5><?php echo $contentheading ?></h5>
                    <p><?php echo $content ?></p>
                    <div class="discover"><a href="<?php echo $learnmore ?>">Discover</a></div>
                </div> 
                
            </div>
            <?php endwhile;
            endif;
            ?> 
            <?php if( have_rows('post_3') ):

            while( have_rows('post_3') ): the_row();

            $image= get_sub_field('image');
            $contentheading = get_sub_field('content_heading');
            $content = get_sub_field('content');
            $learnmore = get_sub_field('learn_more');

            ?>
            <div class="ema-col-3">
                <div class="clsDetailBox"> 
                <div class="wwdoimg"> 
                    <img src="<?php echo esc_url($image['url']); ?>" /></div>
                    <h5><?php echo $contentheading ?></h5>
                    <p><?php echo $content ?></p>
                    <div class="discover"><a href="<?php echo $learnmore ?>">Discover</a></div>
                </div> 
                
            </div> 
            
            <?php endwhile;
            endif;
            ?> 
    </div>
</div>
<?php endwhile;
            endif;
            ?> 
<?php if( have_rows('products_and_services') ):

while( have_rows('products_and_services') ): the_row();
?>
<div class="services">
        <div class="container"> 
         <div class="servicehead">
            <h2><?php echo get_sub_field('heading');?></h2>
         </div> 
         <?php if( have_rows('service_1') ):
            while( have_rows('service_1') ): the_row();?>
        <div class="service serviceone">
            <div class="serviceimg"><img src="<?php echo get_sub_field('service_image');?>"/></div>
            <div class="servicetxt"><h3><?php echo get_sub_field('title');?></h3>
            <p><?php echo get_sub_field('content');?></p>
            <div class="discover"><a href="<?php echo get_sub_field('discover');?>">Discover</a></div></div>
        </div>
        <?php endwhile;
            endif;
            ?> 
            <?php if( have_rows('service_2') ):
            while( have_rows('service_2') ): the_row();?>
        <div class="service servicetwo">
        <div class="serviceimg"><img src="<?php echo get_sub_field('service_image');?>"/></div>
        <div class="servicetxt"><h3><?php echo get_sub_field('title');?></h3>
            <p><?php echo get_sub_field('content');?></p>
            <div class="discover"><a href="<?php echo get_sub_field('discover');?>">Discover</a></div></div>
        </div>
        <?php endwhile;
            endif;
            ?> 
            <?php if( have_rows('service_3') ):
            while( have_rows('service_3') ): the_row();?>
        <div class="service servicethree">
        <div class="serviceimg"><img src="<?php echo get_sub_field('service_image');?>"/></div>
        <div class="servicetxt"><h3><?php echo get_sub_field('title');?></h3>
            <p><?php echo get_sub_field('content');?></p>
            <div class="discover"><a href="<?php echo get_sub_field('get_in_touch');?>">Discover</a></div></div>
        </div>
        <?php endwhile;
            endif;
            ?> 
            <?php if( have_rows('service_4') ):
            while( have_rows('service_4') ): the_row();?>
        <div class="service servicefour">
        <div class="serviceimg"><img src="<?php echo get_sub_field('service_image');?>"/></div>
        <div class="servicetxt"><h3><?php echo get_sub_field('title');?></h3>
            <p><?php echo get_sub_field('content');?></p>
            <div class="discover"><a href="<?php echo get_sub_field('get_in_touch');?>">Discover</a></div></div>
        </div>
        <?php endwhile;
            endif;
            ?> 
            <?php if( have_rows('service_5') ):
            while( have_rows('service_5') ): the_row();?>
        <div class="service servicefive">
        <div class="serviceimg"><img src="<?php echo get_sub_field('service_image');?>"/></div>
        <div class="servicetxt"><h3><?php echo get_sub_field('title');?></h3>
            <p><?php echo get_sub_field('content');?></p>
            <div class="discover"><a href="<?php echo get_sub_field('get_in_touch');?>">Discover</a></div></div>
        </div>
        <?php endwhile;
            endif;
            ?> 
         </div>
</div>
<?php endwhile;
endif;
?>
<div class="clearfix"></div>
<?php

				$post_id = get_the_ID();
				$url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
				?>
<div class="clsContentArea" style="background-image: url('<?php echo $url; ?>')">
	<div class="container">
		<div class="clsSiteContent">
			<?php	the_content(); ?>
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php if( have_rows('home_bottom_banner') ):
            while( have_rows('home_bottom_banner') ): the_row(); ?>
<div class="performancebanner" style="background:<?php echo get_sub_field('background_image');?>">
    <div class="bannertitle"><?php echo get_sub_field('background_text_1');?></div>
            
    <div class="bannertxt"><?php echo get_sub_field('background_text_2'); ?></div>
    
</div>
<?php endwhile;
endif;?>
<?php 
endwhile;
endif;
?>
<div class="blogposts">
    <div class="container">
        <div class="blogcontent">
            <h3>Blog</h3>
        </div>
        <?php
	$recent_posts = wp_get_recent_posts(array(
		'numberposts' => 4, // Number of recent posts thumbnails to display
		'post_status' => 'publish' // Show only the published posts
	));
	foreach( $recent_posts as $post_item ) : ?>
		
		<div class="ema-col-4">
            <h5><a href="<?php echo get_permalink($post_item['ID']) ?>"><?php echo $post_item['post_title'] ?></a></h5>
            <p><?php echo human_time_diff( get_the_time('U',$post_item['ID']), current_time('timestamp') ) . ' ago'; ?></p>
        </div>
	<?php endforeach; ?>
        <div class="clearfix"></div>
        <div class="readmore"><a href="#">See All</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>