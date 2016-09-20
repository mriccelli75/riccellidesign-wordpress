<?php
// Advanced Custom Fields
$hello_headline 								= get_field('hello_headline');
$about_hello										= get_field('about_hello');
$about_me_body_copy							= get_field('about_me_body_copy');
?>


<!-- ABOUT ME
	================================================== -->
	<section id="about-me">
		<div class="container">
		
			<div class="section-header">
				<!-- <img src="assets/img/icon-rocket.png" alt="Rocket"> -->
				<h2><?php echo $hello_headline; ?></h2>
			</div><!-- section-header -->
			
			<div class="row">
				
				<div class="col-md-6 col-sm-12 col-xs-12 story">
          <h2><?php echo $about_hello; ?></h2>
          <p><?php echo $about_me_body_copy; ?></p>
        </div>


        <div class="col-md-6 col-sm-12 col-xs-12 skills">

            <h5>HTML &amp; CSS<span>90%</span></h5>
            <div class="progress revealOnScroll" data-animation="fadeInRight">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" style="width:90%;" aria-valuemin="0" aria-valuemax="100">
            </div>
            </div>

            <h5>Wordpress<span>75%</span></h5>
            <div class="progress revealOnScroll" data-animation="fadeInRight">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" style="width:75%;" aria-valuemin="0" aria-valuemax="100">
            </div>
            </div>

            <h5>Photoshop<span>95%</span></h5>
            <div class="progress revealOnScroll" data-animation="fadeInRight">
            <div class="progress-bar" role="progressbar" aria-valuenow="95" style="width:95%;" aria-valuemin="0" aria-valuemax="100">
            </div>
            </div>

            <h5>Javascript<span>75%</span></h5>
            <div class="progress revealOnScroll" data-animation="fadeInRight">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" style="width:75%;" aria-valuemin="0" aria-valuemax="100">
            </div>
            </div>
          
        </div>
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-me -->
