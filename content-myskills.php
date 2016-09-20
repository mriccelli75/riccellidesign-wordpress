<?php 
// Advanced Custom Fields
$skills_section_title		= get_field('skills_section_title');

$skills_one_image				= get_field('skills_one_image');
$skills_one_headline		= get_field('skills_one_headline');
$skill_one_body_copy		= get_field('skill_one_body_copy');


$skills_two_image				= get_field('skills_two_image');
$skills_two_headline		= get_field('skills_two_headline');
$skill_two_body_copy		= get_field('skill_two_body_copy');

$skills_three_image				= get_field('skills_three_image');
$skills_three_headline		= get_field('skills_three_headline');
$skill_three_body_copy		= get_field('skill_three_body_copy');

?>


<!-- MY SKILLS
	================================================== -->
	<section id="my-skills">
		<div class="container">
			
			<div class="section-header">
					<h2><?php echo $skills_section_title; ?></h2>
			</div><!-- section-header -->
			
			<div class="row">
				<div class="col-sm-4">

					<!-- If user uploaded image -->
					<?php

						if( !empty($skills_one_image) ) : ?>

						<img class="my-skills-icon revealOnScroll" data-animation="zoomIn" src="<?php echo $skills_one_image['url']	 ?>"alt="<?php echo $skills_one_image['alt'] ?>">

					<?php endif; ?>

					<!-- End User Image Upload If Statement -->

					<h3><?php echo $skills_one_headline; ?></h3>
					<p><?php echo $skill_one_body_copy; ?></p>
				</div>	

				<div class="col-sm-4">

					<!-- If user uploaded image -->
					<?php

						if( !empty($skills_two_image) ) : ?>

						<img class="my-skills-icon revealOnScroll" data-animation="zoomIn" src="<?php echo $skills_two_image['url']	 ?>"alt="<?php echo $skills_two_image['alt'] ?>">

					<?php endif; ?>

					<!-- End User Image Upload If Statement -->

					<h3><?php echo $skills_two_headline; ?></h3>
					<p><?php echo $skill_two_body_copy; ?></p>
				</div>	

				<div class="col-sm-4">

					<!-- If user uploaded image -->
					<?php

						if( !empty($skills_three_image) ) : ?>

						<img class="my-skills-icon revealOnScroll" data-animation="zoomIn" src="<?php echo $skills_three_image['url']	 ?>"alt="<?php echo $skills_three_image['alt'] ?>">

					<?php endif; ?>

					<!-- End User Image Upload If Statement -->

					<h3><?php echo $skills_three_headline; ?></h3>
					<p><?php echo $skill_three_body_copy; ?></p>
				</div>	
		
			</div><!-- row -->

		</div><!-- container -->
	</section><!-- my-skills -->