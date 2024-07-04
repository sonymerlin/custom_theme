<?php
get_header();

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      height: calc((100% - 30px) / 2) !important;
      float: left;
	  border-radius: 12px;
    }
	.swiper, swiper-container{
		display:grid !important;
	}
	.slideimage img{
		width: 100%;
		height: 373px;
		border-radius: 12px 12px 0px 0px;
    object-fit: cover;
	}
	p.slider-caption-class {
    text-align: left;
    font: normal normal normal 30px/40px Dosis;
    letter-spacing: 0px;
    color: #0B282E;
    opacity: 1;
    padding-left: 30px;
}
.slidecont a {
    float: left;
    text-decoration: underline;
    font: normal normal normal 20px/28px Open Sans;
    letter-spacing: 0px;
    color: #E40046;
    opacity: 1;
    padding-left: 30px;
}
.swiper-wrapper{
	padding-bottom: 100px;
	height: 1220px;
	
}
span.swiper-pagination-bullet {
    text-align: center;
    font: normal normal 25px/48px Dosis;
    padding-right: 10px;
    color: #FFFFFF;
    opacity: 1;
	background:none;
}
.swiper-button-nextt{
	font: normal normal 25px/48px Dosis;
    letter-spacing: 0px;
    color: #FFFFFF;
    opacity: 1;
    margin-left: 14%;
    cursor: pointer;
}
.swiper-button-next:after, .swiper-button-prev:after, .swiper-button-disabled{
	display:none;
}
.swiper-button-next:hover, .swiper-button-prev:hover{
    font-weight: bold !important;
}
span.swiper-pagination-bullet:hover {
    font-weight: bold;
}
span.swiper-pagination-bullet.swiper-pagination-bullet-active {
    font-weight: bold;
}
</style>

<div class="clsContentArea" style="background: #8080a2 0% 0% no-repeat padding-box;">
	<div class="container">
		<div class="clsSiteContent">
				 <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

	<?php
	$recent_posts = wp_get_recent_posts(array(
		'numberposts' => 20, // Number of recent posts thumbnails to display
		'post_status' => 'publish' // Show only the published posts
	));
	foreach( $recent_posts as $post_item ) : ?>
		<div class="swiper-slide">
			<div class="slideimage"><?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?></div>
			<div class="slidecont">
      <p style="text-align: left;padding-left: 30px;"><b><?php echo get_the_date('j F, Y',$post_item['ID']);?></b></p>
			<p class="slider-caption-class"><?php echo $post_item['post_title'] ?></p>
			<a href="<?php echo get_permalink($post_item['ID']) ?>">Read More
			</a>
			</div>
		</div>
	<?php endforeach; ?>
     
    </div>
    <div class="swiper-button-prev"  style="position: relative;
    width: 300px;
    text-align: right;
    font: normal normal 25px/48px Dosis;
    letter-spacing: 0px;
    color: #FFFFFF;
    opacity: 1;
    ">Previous Page</div>
    <div class="swiper-pagination"></div><div class="swiper-button-next" style="position: relative;
    width: 300px;
    margin-left: 15%;
    text-align: right;
    font: normal normal 25px/48px Dosis;
    letter-spacing: 0px;
    color: #FFFFFF;
    opacity: 1;
    ">Next Page</div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 2,
      slidesPerGroup: 2,
      grid: {
        rows: 2,
      },
      spaceBetween: 30,
	  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
    });
  </script>		
       
		</div>
		
	</div>
</div>
<div class="enewsletter">
	<div class="container">
		<h2>Never miss an update</h2>
		<h4>Receive our news and industry updates direct to your inbox.</h4>
    <?php echo apply_shortcodes('[contact-form-7 id="878" title="Email Subscription form"]'); ?>
	</div>
</div>
<div class="blogposts">
    <div class="container">
        <div class="blogcontent">
            <h3>Read More</h3>
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
        <div class="readmore"><a href="<?php echo get_site_url(); ?>/category/blog/">See All</a>
        </div>
    </div>
</div>	
<?php get_footer();?>
