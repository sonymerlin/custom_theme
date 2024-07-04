<?php
/* 
 *Template Name: Course
 */

get_header();

?>

        

<div class="clsContentArea">
	<div class="container">
		<div class="clsSiteContent">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
        <?php  endwhile;
         endif; 
        ?>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="coursecont">
    <div class="container">
    <div class="cntrow">
    <div class="cntcolumn">
        <?php

            $course_content = get_field( "course_content" );

            if( $course_content ) {
                echo $course_content;
            }
            ?>
    </div>
    <div class="cntcolumn">
        <?php $course_details = get_field( "course_details" );

        if( $course_details ) {
            echo $course_details;
        }

        ?>
    </div>
    </div>
    </div>
</div>
<div class="overlayenq">
    <div class="enquires">
        <h5>For all enquires</h5>
       
        <h6>please email us at <a href="mailto:info@emaconsulting.com.au">info@emaconsulting.com.au</a></h6>
    
    </div>
</div>
<div class="coursediv">
    <div class="container">
        <h2>Explore Courses</h2>
    <div class="coursegrid">
            <?php if( have_rows('course_1') ):
            while( have_rows('course_1') ): the_row();
                $coursename = get_sub_field('course_name');
                $courseimage = get_sub_field('course_image');
                $courselink = get_sub_field('course_link');
                $coursedetails = get_sub_field('course_details');
            ?>
           
                <div class="course">
                    <img src="<?php echo $courseimage; ?>" />
                    <div class="content">
                    <h4><?php echo $coursename; ?></h4>
                    <p><?php echo $coursedetails; ?></p>
                    </div>
                    <div class="exc"><a href="<?php echo $courselink; ?>">Discover</a></div>
                </div>
            
<?php 
endwhile;
endif;?>
<?php if( have_rows('course_2') ):
        while( have_rows('course_2') ): the_row();
            $coursename = get_sub_field('course_name');
            $courseimage = get_sub_field('course_image');
            $courselink = get_sub_field('course_link');
            $coursedetails = get_sub_field('course_details');
        ?>
            
                <div class="course">
                    <img src="<?php echo $courseimage; ?>" />
                    <div class="content">
                    <h4><?php echo $coursename; ?></h4>
                    
                    <p><?php echo $coursedetails; ?></p>
                    </div>
                    <div class="exc"><a href="<?php echo $courselink; ?>">Discover</a></div>
                </div>
            
<?php 
endwhile;
endif;?>
<?php if( have_rows('course_3') ):
        while( have_rows('course_3') ): the_row();
            $coursename = get_sub_field('course_name');
            $courseimage = get_sub_field('course_image');
            $courselink = get_sub_field('course_link');
            $coursedetails = get_sub_field('course_details');
        ?>
            
                <div class="course">
                    <img src="<?php echo $courseimage; ?>" />
                    <div class="content">
                    <h4><?php echo $coursename; ?></h4>
                    <p><?php echo $coursedetails; ?></p>
                    </div>
                    <div class="exc"><a href="<?php echo $courselink; ?>">Discover</a></div>
                </div>
            
<?php 
endwhile;
endif;?>




</div>

        </div>
</div>




<?php get_footer(); ?>