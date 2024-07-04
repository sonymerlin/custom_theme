<?php

/**

 * The main template file.

 *

 * @package EMA Theme

 */



get_header(); ?>



	<div id="primary" class="content-area">

		<main id="main" class="site-main">

			<div id="post-wrap">

				<?php

				if ( have_posts() ) :

					while ( have_posts() ) : the_post();
						?>
						<div class="clsContentArea" style="background-image: url('<?php echo $url; ?>')">
	<div class="container">
		<div class="clsSiteContent">
			<?php	the_content(); ?>
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>

					
<?php
					endwhile;

			
				endif;

				?>

			</div>

		</main>

	</div>



<?php get_footer(); ?>