<?php	
// Advanced Custom Fields
$what_i_can_do_for_you_headline = get_field('what_i_can_do_for_you_headline');
$what_i_can_do_body_copy				= get_field('what_i_can_do_body_copy');
?>


 <!-- WHAT I CAN DO FOR YOUR
	================================================== -->
	<section id="what-I-can-do">
		<div class="container">
			
			<div class="section-header">
				<!-- <img src="assets/img/icon-boost.png" alt="Chart"> -->
				<h2><?php echo $what_i_can_do_for_you_headline; ?></h2>
			</div><!-- section-header -->
			
			<p class="lead"><?php echo $what_i_can_do_body_copy; ?></p>
		
		</div><!-- container -->
	</section><!-- what-I-can-do-->