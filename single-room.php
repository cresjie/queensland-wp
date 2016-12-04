<?php get_header(); ?>

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
						<?php do_action( 'hotel_booking_single_room_gallery' ); ?>
					</div>
				</div>
				<div class="col-md-6 column">
					<div class="height-md-359 spacer-bottom">
						<div class="transparent-black pad-5-10 spacer-bottom room-head">
							<div class="row">
								<div class="col-md-7">
									<?php do_action( 'hotel_booking_single_room_title' ); ?>
								</div>
								<div class="col-md-5 ">
									<?php do_action( 'hotel_booking_loop_room_price' ); ?>
								</div>
							</div>
							
						</div>
						<div class="transparent-black room-information">
							<?php do_action( 'hotel_booking_single_room_infomation' ); ?>
						</div>
					</div>
					<div class="single-add-btn-wrapper transparent-black">
						<?php do_action('single_add_button'); ?>
					</div>
					
				</div>
			</div>
		</div>
	<?php endwhile; // end of the loop. ?>
</div>

</script>
<?php get_footer(); ?>