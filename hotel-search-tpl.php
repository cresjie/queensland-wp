<?php
/*
Template Name: Hotel search template
*/	
?>
<?php get_header(); ?>

<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="room">
			<div class="page-title transparent-black spacer-bottom pad-5-10">
				<h1 class="margin-none"><?php the_title(); ?></h1>
			</div>

			<div class="transparent-black pad-5-10">
				<?php the_content(); ?>
			</div>
			
		</div>
	<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>