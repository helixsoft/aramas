<?php
/**
 * The template for displaying Single press page.
 *
 * @package Wordpress
 * @subpackage gs
 * @since gs 1.0
 */
get_header('service');?>
<div class="scontainer clearfix">
		<div class="content">
			<div class="left">
				<div class="top">
					<?php get_template_part('slider-service')?>
				</div>
				<div style="width:500px">
				<div class="slidewrap09">
					<ul class="slidecontrols" style="margin-left:329px;margin-top:20px;position:relative;top:-20px;">
						<li style="float:left;text-decoration:none;"><a class="move current" href="#" data-key="0">Brands</a></li><li style="float:left"><a>&nbsp;/&nbsp;</a></li>
						<li style="float:left;text-decoration:none;"><a class="move" href="#" data-key="1">Testimonials</a></li>
					</ul>
					<div class="bot">		
						<ul class="slider" id="sliderName">
							<li class="slide">	
								<?php get_template_part('slider-partner')?> 
							</li>
							<li class="slide">	
								<p style="margin-left:10px;">In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien.</p>
							</li>			
						</ul>
					</div>
				</div>
				</div>
			</div>	
			<div class="right">
				<div class="up">
					<h1><?php _e('What you need to know','aramas')?></h1>
					<p><?php echo get_post_field('post_content', $post_id);?></p>
				</div>
				<div class="down">
					<h2>Get in Touch</h2>
		            <div class="down-contact-form">
		            	<form id="contact-us" action="" method="post" name="contactForm">
		                 	<input type="text" name="name" value="" class="txt white requiredField" placeholder="NAME">
		                 	<textarea class="txtarea requiredField white" name="message" cols="30" rows="10" placeholder="MESSAGE"></textarea>
		                 	<input type="email" name="email" value="" class="txt white requiredField email" placeholder="EMAIL">
							<input type="submit" name="submit" value="Submit">
		                	<input type="hidden" name="submitted" id="submitted" value="true">
		                </form>
		            </div>
				</div>
			</div>	
		</div>
</div>	 
<?php
get_footer();
?>
