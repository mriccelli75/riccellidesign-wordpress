<?php 
// Advanced Custom Fields
$title 													= get_field('title');
$get_in_touch_body_copy					= get_field('get_in_touch_body_copy');
$ninja_form											= get_field('ninja_form');

?>

<!-- GET IN TOUCH
	================================================== -->
	<section id="get-in-touch">
		<div class="container">
			
			<div class="section-header">
					<h2><?php echo $title; ?></h2>
			</div><!-- section-header -->
			
		
	    <div class="row">
	    
		    <div class="col-sm-12">
			    
			  
			    	<p class="lead"><?php echo $get_in_touch_body_copy; ?></p>
			    	<?php echo do_shortcode('[ninja_form id=1]'); ?>

			    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
	</section><!-- get-in-touch -->