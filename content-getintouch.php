<?php 
// Advanced Custom Fields
$title 													= get_field('title');
$get_in_touch_body_copy					= get_field('get_in_touch_body_copy');


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
			    	
			    	<form role="form"  method="post" action="thankyou.html"  class="clearfix" name="contact">
	    				<div class="row">
	    					<div class="col-sm-6">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-name">Name</label>
										<input type="text" class="form-control input-lg" id="contact-name" placeholder="Just your first name will do" name="contactName">
	    						</div>
	    					</div><!-- end col -->
	    					
	    					<div class="col-sm-6">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-email">Email</label>
										<input type="text" class="form-control input-lg" id="contact-email" placeholder="Your email"  name="contactEmail" >
	    						</div>
	    					</div><!-- end col -->
	    					
	    					<div class="col-sm-12">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-words" name="contactMessage">Message</label>
		    						<textarea class="form-conrol input-lg" id="contact-words" placeholder="Your message" rows="3">
		    							
		    						</textarea>
	    						</div>
	    					</div><!-- end col -->
	    				</div><!-- row -->
						<input type="submit" class="btn btn-info btn-lg btn-block" value="Get in touch &raquo;">
			        </form>
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
	</section><!-- get-in-touch -->