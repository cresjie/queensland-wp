
<?php get_header(); ?>

<div class="container page">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="post-wrapper">
			<div class="page-title transparent-black spacer-bottom pad-5-10">
				<h1 class="margin-none post-title"><?php the_title(); ?></h1>
			</div>

			<div class="transparent-black pad-5-10 post-content">
				<?php the_content(); ?>
				<?php woocommerce_content(); ?>
			</div>
			
		</div>
	<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>