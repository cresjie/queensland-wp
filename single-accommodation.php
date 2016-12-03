<?php 
wp_enqueue_script('superfish');
get_header(); ?>

<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<style>
			body{
				background-image: url(<?=the_post_thumbnail_url()?>);
			}
		</style>
		<div id="room-<?php the_ID(); ?>" class="hotel-room">
			<div class="page-title transparent-black spacer-bottom pad-5-10">
				<h1 class="margin-none">Accomodation</h1>
			</div>

			<div class="row sm-row">
				<div class="col-md-6 column">
					<div class="transparent-black spacer-bottom content-wrapper height-md-420">
					<!--
						<ul id="room-images" class="list-unstyled">
							<li data-thumb="<?=get_template_directory_uri()?>/images/temp/thumb.jpg">
								<img class="<?=get_template_directory_uri()?>/img-responsive full-width" src="<?=get_template_directory_uri()?>/images/temp/thumb.jpg">
							</li>
							<li data-thumb="<?=get_template_directory_uri()?>/images/temp/thumb.jpg">
								<img class="<?=get_template_directory_uri()?>/img-responsive full-width" src="<?=get_template_directory_uri()?>/images/temp/thumb.jpg">
							</li>
						</ul>
						-->
						<?php $attachments = get_post_meta($post->ID, '_slideshow_images', true); // get attachments ?>
						<?php if ( $attachments ) : ?>
							<!-- BEGIN .slider -->
							<div class="slider accommodation-slider">
								<!-- BEGIN .slides -->
								<ul class="slides" light-slider>
									<?php $attachments_array = array_filter(explode( ',', $attachments )); ?>
									<?php if ($attachments_array) : // display attachments ?>
										<?php foreach ($attachments_array as $attachment_id) : ?>
											<?php $imgData = wp_get_attachment_image_src($attachment_id, 'accommodation-full'); ?>
												<?php if($imgData) : ?>
												<li data-thumb="<?=$imgData[0]?>">
													<img class="img-responsive full-width" src="<?=$imgData[0]?>">
												</li>
												<?php endif ;?>
										<?php endforeach; ?>
									 <?php endif; ?>
								<!-- END .slides -->
								</ul>
							<!-- END .slider -->
							</div>
						<?php endif; // attachments ?>
					</div>
				</div>
				<div class="col-md-6 column">
					<div class="height-md-420">
						<div class="transparent-black pad-5-10 spacer-bottom room-head">
							<div class="row">
								<div class="col-md-7">
									<h2 class="room-name margin-none"><?=the_title();?></h2> 
								</div>
								<div class="col-md-5 ">
									<?php
										$lowest_price = $quitenicebooking->accommodation_post->get_lowest_price($post->ID);
										$price =  Quitenicebooking_Utilities::format_price(Quitenicebooking_Utilities::float_to_user_price($lowest_price, $quitenicebooking->settings, TRUE), $quitenicebooking->settings);
										?>
									
									<div class="price text-right">
										<span class="title-price">Price</span>
										<span class="price_value price_min"><?=$price?></span>
										<span class="unit">Night</span>
									</div>
								</div>
							</div>
							
						</div>
						<div class="transparent-black room-information">
							<?php foreach (range(1, 5) as $r) : ?>
								<?php $tab_title[$r] = get_post_meta($post->ID, 'quitenicebooking_tab_'.$r.'_title', TRUE); ?>
								<?php $tab_content[$r] = get_post_meta($post->ID, 'quitenicebooking_tab_'.$r.'_content', TRUE); ?>
							<?php endforeach; ?>

							<ul class="nav nav-tabs ql-nav-tabs">
							  <li class="active"><a data-toggle="tab" href="#description">Description</a></li>

								
								<?php foreach (range(1, 5) as $r) : ?>
									<?php if ($tab_title[$r]) : ?>
										<li><a data-toggle="tab" href="#tabs-tab-title-<?php echo $r; ?>"><?php echo $tab_title[$r]; ?></a></li>
									<?php endif; ?>
								<?php endforeach; ?>
							  <li><a data-toggle="tab" href="#availability">Availability</a></li>
							</ul>

							<div class="tab-content">
								<div id="description" class="tab-pane fade in active">
									<div class="transparent-black  room-description-wrapper scrollbar-rail">
										<div class="room-description ">
											<?=the_content()?>
										</div>
									</div>
								</div>
								<?php foreach (range(1, 5) as $r) : ?>
									<?php if ($tab_title[$r]) : ?>
										<div id="tabs-tab-title-<?php echo $r; ?>" class="tab-pane fade">
											<div class="scrollbar-rail">
												<div class="room-description">
													<?php echo do_shortcode($tab_content[$r]); ?>
												</div>
											</div>
											
											
										</div>
									<?php endif; ?>
								<?php endforeach; ?>
								<div id="availability" class="tab-pane fade">
									<div class="scrollbar-rail">
										<div class="room-description">
											<?php if (empty($quitenicebooking->settings['hide_booking_system'])) { ?>
										<!-- BEGIN .widget -->
										<div class="widget">
											<h4 class="title-style3"><?php _e('Reserve This Room', 'quitenicebooking'); ?></h4>
											
											<!-- BEGIN .widget-reservation-box -->
											<div class="">
												<form class="booking-form" action="<?php echo get_permalink($quitenicebooking->settings['step_1_page_id']); ?>" method="POST">
													
													<div class="row sm-row">
														<div class="col-md-3 column">
															<div class="form-group">
															<input type="text" id="datefrom" name="room_all_checkin" value="<?php _e('Check In', 'quitenicebooking'); ?>" class="datepicker form-control">
													
															</div>
														</div>
														<div class="col-md-3 column">
															<div class="form-group">
																<input type="text" id="dateto" name="room_all_checkout" value="<?php _e('Check Out','quitenicebooking'); ?>" class="datepicker form-control">
															</div>
														</div>
														<div class="col-md-3 column">
															<div class="form-group">
																<div class="select-wrapper">
																	<select class="form-control" id="room_1_adults" name="room_1_adults">
																		<option value="0" selected><?php _e('Adults', 'quitenicebooking'); ?></option>
																		<?php foreach (range(0, $quitenicebooking->settings['max_persons_in_form']) as $r) { ?>
																			<option value="<?php echo $r; ?>"><?php echo $r; ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-md-3 column">
															<div class="form-group">
																<?php if (empty($quitenicebooking->settings['remove_children'])) { ?>
																<div class="select-wrapper">
																	<select class="form-control" id="room_1_children" name="room_1_children">
																		<option value="0" selected><?php _e('Children', 'quitenicebooking'); ?></option>
																		<?php foreach (range(0, $quitenicebooking->settings['max_persons_in_form']) as $r) { ?>
																			<option value="<?php echo $r; ?>"><?php echo $r; ?></option>
																		<?php } ?>
																	</select>
																</div>
																<?php } else { ?>
																<input type="hidden" name="room_1_children" value="0" />
																<?php } ?>
															</div>
														</div>
													</div>
												
													
													
													
													
													
													
													<input type="hidden" name="room_qty" value="1" />
													<input type="hidden" name="highlight" value="<?php echo $post->ID; ?>" />
													<input class="bookbutton btn btn-primary" name="booking_step_1_submit" type="submit" value="<?php _e('Check Availability', 'quitenicebooking'); ?>" />
												</form>
												<?php if (!empty($quitenicebooking->settings['multiroom_link'])) { ?>
												<p class="multiroom-link"><a href="<?php echo add_query_arg(array('highlight' => $post->ID), get_permalink($quitenicebooking->settings['step_1_page_id'])); ?>"><?php _e('Multi-room booking?', 'quitenicebooking'); ?></a></p>
												<?php } ?>
											<!-- END .widget-reservation-box -->
											</div>
										<!-- END .widget -->
										</div>
										<?php } // end if ?>
										</div>
									</div>
										
								</div>
							  
							</div>
							 
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; // end of the loop. ?>
</div>

</script>
<?php get_footer(); ?>